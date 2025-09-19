@extends('layouts.app')

@section('title', 'Clases - ADM')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Listado de Clases</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Instructor</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clases as $clase)
                                <tr>
                                    <td>{{ $clase->id }}</td>
                                    <td>{{ $clase->nombre }}</td>
                                    <td>{{ $clase->descripcion }}</td>
                                    <td>{{ $clase->instructor }}</td>
                                    <td>{{ $clase->hora }}</td>
                                    <td>{{ $clase->estado }}</td>
                                    <td>
                                        <a href="{{route( 'clases.cambiar_estado')}}" class="btn btn-sm btn-primary">Cambiar Estado</a>
                                        <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="widget-footer">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newClassModal">
                        <i class="fa fa-plus"></i> Crear Nueva Clase
                    </button>
                    <a href="{{route('clases.index')}}" class="btn btn-primary">Mostrar Todos</a>
                    <a href="{{route('clases.activos')}}" class="btn btn-primary">Mostrar Activos</a>
                    <a href="{{route('clases.inactivos')}}" class="btn btn-primary">Mostrar Inactivos</a>
                    <input type="number" name="id" placeholder="ID" onchange="location.href='{{ route('clases.buscar') }}?id='+value">
                </div>

                <!-- Modal for creating a new class -->
                <div class="modal fade" id="newClassModal" tabindex="-1" aria-labelledby="newClassModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="newClassModalLabel">Crear Nueva Clase</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('clases.store') }}" method="POST">
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
                                        <label for="hora" class="form-label">Hora</label>
                                        <input type="time" class="form-control" id="hora" name="hora" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="estado" class="form-label">Estado</label>
                                        <select class="form-select" id="estado" name="estado" required>
                                            <option value="1">activa</option>
                                            <option value="0">inactiva</option>
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