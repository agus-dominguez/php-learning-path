@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Ejercicio {{ $exercise->order }}: {{ $exercise->title }}</span>
                    <a href="{{ route('exercises.index') }}" class="btn btn-sm btn-outline-secondary">Volver a la lista</a>
                </div>

                <div class="card-body">
                    <p>{{ $exercise->description }}</p>

                    <h5>Instrucciones:</h5>
                    <div class="alert alert-info">
                        {{ $exercise->instructions }}
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="code-editor">Tu código:</label>
                                <!-- Editor simple como fallback -->
                                <textarea id="code-editor" class="form-control" style="font-family: monospace; height: 350px;">{{ $exercise->initial_code }}</textarea>
                            </div>
                            <button id="submit-code" class="btn btn-primary mt-2">Ejecutar código</button>
                        </div>

                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-header bg-dark text-white">
                                    Resultado
                                </div>
                                <div class="card-body">
                                    <pre id="code-output" class="bg-dark text-light p-3" style="min-height: 200px; max-height: 350px; overflow-y: auto;">El resultado aparecerá aquí...</pre>
                                    <div id="test-result" class="mt-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<!-- CodeMirror CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.3/codemirror.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.3/theme/dracula.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.3/addon/hint/show-hint.min.css">
<style>
    .CodeMirror {
        height: 350px;
        border: 1px solid #ddd;
        font-size: 14px;
        font-family: 'Courier New', monospace;
        line-height: 1.5;
    }
</style>
@endpush

@push('scripts')
<!-- CodeMirror Core JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.3/codemirror.min.js"></script>
<!-- PHP Mode -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.3/mode/php/php.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.3/mode/htmlmixed/htmlmixed.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.3/mode/xml/xml.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.3/mode/javascript/javascript.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.3/mode/css/css.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.3/mode/clike/clike.min.js"></script>
<!-- Addons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.3/addon/edit/matchbrackets.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.3/addon/edit/closebrackets.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.3/addon/comment/comment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.3/addon/hint/show-hint.min.js"></script>

<script>
    // Inicializar CodeMirror con un tiempo de espera para asegurar que todos los recursos estén cargados
    window.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            try {
                // Inicializar CodeMirror
                const editorTextarea = document.getElementById('code-editor');
                
                if (!editorTextarea) {
                    console.error('No se encontró el elemento con id "code-editor"');
                    return;
                }
                
                const codeEditor = CodeMirror.fromTextArea(editorTextarea, {
                    lineNumbers: true,
                    mode: 'text/x-php',
                    theme: 'dracula',
                    indentUnit: 4,
                    smartIndent: true,
                    tabSize: 4,
                    indentWithTabs: false,
                    matchBrackets: true,
                    autoCloseBrackets: true,
                    lineWrapping: true
                });
                
                // Asegurarse de que CodeMirror tenga el tamaño correcto
                codeEditor.setSize(null, 350);
                
                // Función para ejecutar el código
                document.getElementById('submit-code').addEventListener('click', function() {
                    const codeOutput = document.getElementById('code-output');
                    const testResult = document.getElementById('test-result');
                    
                    codeOutput.innerHTML = 'Ejecutando...';
                    testResult.innerHTML = '';
                    
                    // Actualizar textarea antes de obtener su valor
                    codeEditor.save();
                    
                    // Obtener el código del editor
                    const code = editorTextarea.value;
                    
                    // Enviar el código al servidor
                    fetch('{{ route('exercises.submit', $exercise) }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({ code: code })
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Mostrar el resultado
                        codeOutput.innerHTML = data.output || 'No hay salida';
                        
                        if (data.passed) {
                            testResult.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
                        } else {
                            testResult.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
                        }
                    })
                    .catch(error => {
                        codeOutput.textContent = 'Error al procesar la solicitud: ' + error.message;
                        testResult.innerHTML = `<div class="alert alert-danger">Error: ${error.message}</div>`;
                    });
                });
                
                console.log('CodeMirror inicializado correctamente');
            } catch (error) {
                console.error('Error al inicializar CodeMirror:', error);
                
                // En caso de error, usar el textarea normal
                const submitButton = document.getElementById('submit-code');
                if (submitButton) {
                    submitButton.addEventListener('click', function() {
                        const code = document.getElementById('code-editor').value;
                        const codeOutput = document.getElementById('code-output');
                        const testResult = document.getElementById('test-result');
                        
                        fetch('{{ route('exercises.submit', $exercise) }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({ code: code })
                        })
                        .then(response => response.json())
                        .then(data => {
                            codeOutput.innerHTML = data.output || 'No hay salida';
                            
                            if (data.passed) {
                                testResult.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
                            } else {
                                testResult.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
                            }
                        });
                    });
                }
            }
        }, 500); // Esperar 500ms para asegurar que todo esté cargado
    });
</script>
@endpush
@endsection