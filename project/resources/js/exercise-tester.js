/**
 * JavaScript para manejar la ejecución y validación de ejercicios de PHP
 */

// Inicializa el tester para un ejercicio específico
function initExerciseTester(exerciseId) {
    const submitButton = document.getElementById('submit-code');
    const codeEditor = document.getElementById('code-editor');
    const codeOutput = document.getElementById('code-output');
    
    submitButton.addEventListener('click', function() {
        // Mostrar indicador de carga
        codeOutput.textContent = 'Ejecutando...';
        
        // Enviar código al servidor para validación
        fetch(`/exercises/${exerciseId}/submit`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                code: codeEditor.value
            })
        })
        .then(response => response.json())
        .then(data => {
            // Mostrar resultado
            let resultHtml = '';
            
            if (data.passed) {
                resultHtml += '<div class="alert alert-success">¡Ejercicio completado correctamente!</div>';
            } else {
                resultHtml += '<div class="alert alert-danger">Hay errores en tu código. Intenta nuevamente.</div>';
            }
            
            resultHtml += '<h5>Mensaje:</h5>';
            resultHtml += `<p>${data.message}</p>`;
            
            if (data.output) {
                resultHtml += '<h5>Salida:</h5>';
                resultHtml += `<pre>${data.output}</pre>`;
            }
            
            codeOutput.innerHTML = resultHtml;
        })
        .catch(error => {
            codeOutput.textContent = 'Error al procesar la solicitud: ' + error.message;
        });
    });
}