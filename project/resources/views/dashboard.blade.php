@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5 class="card-title">Progreso</h5>
                                    <h2>{{ $completedExercises }} / {{ $totalExercises }}</h2>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" 
                                            style="width: {{ $totalExercises > 0 ? ($completedExercises / $totalExercises) * 100 : 0 }}%" 
                                            aria-valuenow="{{ $completedExercises }}" 
                                            aria-valuemin="0" 
                                            aria-valuemax="{{ $totalExercises }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Ejercicios recientes</h5>
                                    <ul class="list-group">
                                        @foreach($latestExercises as $exercise)
                                            <li class="list-group-item">
                                                <a href="{{ route('exercises.show', $exercise) }}">{{ $exercise->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('exercises.index') }}" class="btn btn-primary">Ver todos los ejercicios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection