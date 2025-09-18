@extends('layouts.app')

@section('title', 'Profesores - ADM')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Listado de Profesores</h1>
    
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Especialidad</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profesores as $profesor)
                                <tr>
                                    <td>{{ $profesor->id }}</td>
                                    <td>{{ $profesor->nombre }}</td>
                                    <td>{{ $profesor->especialidad }}</td>
                                    <td>{{ $profesor->email }}</td>
                                    <td>{{ $profesor->telefono }}</td>
                                    <td>{{ $profesor->estado }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Editar</a>
                                        <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
            <div class="widget-footer">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newProfessorModal">
                        <i class="fa fa-plus"></i> Crear Nuevo Profesor
                    </button>
                </div>

                <!-- Modal for creating a new alumn -->
                <div class="modal fade" id="newProfessorModal" tabindex="-1" aria-labelledby="newProfessorModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="newProfessorModalLabel">Crear Nuevo Profesor</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route( 'profesores.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="descripcion" class="form-label">Descripción</label>
                                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"
                                            required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="instructor" class="form-label">Instructor</label>
                                        <input type="text" class="form-control" id="instructor" name="instructor" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fecha" class="form-label">Fecha y Hora</label>
                                        <input type="datetime-local" class="form-control" id="fecha" name="fecha" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="estado" class="form-label">Estado</label>
                                        <select class="form-select" id="estado" name="estado" required>
                                            <option value="1">Activa</option>
                                            <option value="0">Inactiva</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <div class="text-center">
                <a href="{{route('alumnos.index')}}" class="btn btn-primary">Alumnos</a>
            </div>
            <div class="text-center">
                <a href="{{route('clases.index')}}" class="btn btn-primary">Clases</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
    .container {
        max-width: 1200px;
    }
    h1 {
        color: #2c3e50;
        font-weight: 600;
    }
    .table th {
        background-color: #2c3e50;
        color: white;
    }
    .badge {
        font-size: 0.85em;
        padding: 0.35em 0.65em;
    }
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
    }
</style>
@endsection