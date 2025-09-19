@extends('layouts.app')

@section('title', 'Alumnos - ADM')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Listado de Alumnos</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumnos as $alumno)
                                <tr>
                                    <td>{{ $alumno->id }}</td>
                                    <td>{{ $alumno->nombre }}</td>
                                    <td>{{ $alumno->apellido }}</td>
                                    <td>{{ $alumno->email }}</td>
                                    <td>{{ $alumno->telefono }}</td>
                                    <td>{{ $alumno->estado }}</td>
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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newStudentModal">
                        <i class="fa fa-plus"></i> Crear Nuevo Alumno
                    </button>
                </div>

                <!-- Modal for creating a new alumn -->
                <div class="modal fade" id="newStudentModal" tabindex="-1" aria-labelledby="newStudentModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="newStudentModalLabel">Crear Nuevo Alumno</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('alumnos.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" id="apellido" name="apellido"required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="telefono" class="form-label">Telefono</label>
                                        <input type="tel" class="form-control" id="telefono" name="telefono" pattern="[0-9]+" required>
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
                    <a href="{{route('clases.index')}}" class="btn btn-primary">Clases</a>
                </div>
                <div class="text-center">
                    <a href="{{route('profesores.index')}}" class="btn btn-primary">Profesores</a>
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