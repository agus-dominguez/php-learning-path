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
                                    <h5 class="mb-1">{{ $exercise->title }}</h5>
                                    <small>Nivel: {{ $exercise->level }}</small>
                                </div>
                                <p class="mb-1">{{ $exercise->description }}</p>
                                @if(isset($progress[$exercise->id]) && $progress[$exercise->id]->completed)
                                    <span class="badge bg-success">Completado</span>
                                @else
                                    <span class="badge bg-secondary">Pendiente</span>
                                @endif
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection