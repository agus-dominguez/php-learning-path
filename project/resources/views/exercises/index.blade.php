@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ejercicios</div>

                <div class="card-body">
                    <div class="list-group">
                        @foreach($exercises as $exercise)
                            <a href="{{ route('exercises.show', $exercise) }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">#{{ $exercise->id }} - {{ $exercise->title }}</h5>
                                    <small>Nivel: {{ $exercise->level }}</small>
                                </div>
                                <p class="mb-1">{{ $exercise->description }}</p>
                                <div>
                                    @if(isset($progress[$exercise->id]) && $progress[$exercise->id]->completed)
                                        <span class="badge bg-success">Completado</span>
                                    @else
                                        <span class="badge bg-secondary completed-badge" data-exercise-id="{{ $exercise->id }}">Pendiente</span>
                                    @endif
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Verificar ejercicios completados en localStorage
        const completedExercises = JSON.parse(localStorage.getItem('completedExercises') || '{}');
        
        // Actualizar los badges basados en localStorage
        document.querySelectorAll('.completed-badge').forEach(badge => {
            const exerciseId = badge.getAttribute('data-exercise-id');
            if (completedExercises[exerciseId]) {
                badge.classList.remove('bg-secondary');
                badge.classList.add('bg-success');
                badge.textContent = 'Completado';
            }
        });
    });
</script>
@endpush
@endsection