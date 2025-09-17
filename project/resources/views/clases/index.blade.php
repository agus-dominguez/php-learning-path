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
                        <tr>
                            <td>1</td>
                            <td>Yoga Básico</td>
                            <td>Clase introductoria de yoga para principiantes...</td>
                            <td>María González</td>
                            <td>15/06/2023 10:00</td>
                            <td>
                                <span class="badge bg-success">Activa</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <a href="#" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i> Ver
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pilates Intermedio</td>
                            <td>Clase de pilates para nivel intermedio con...</td>
                            <td>Juan Pérez</td>
                            <td>16/06/2023 17:30</td>
                            <td>
                                <span class="badge bg-success">Activa</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <a href="#" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i> Ver
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Spinning Avanzado</td>
                            <td>Clase intensiva de spinning para nivel avanzado...</td>
                            <td>Carlos Rodríguez</td>
                            <td>17/06/2023 19:00</td>
                            <td>
                                <span class="badge bg-danger">Inactiva</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <a href="#" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i> Ver
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <a href="{{route('alumnos.index')}}" class="btn btn-primary">Alumnos</a>
            </div>
            <div class="text-center">
                <a href="{{route('alumnos.index')}}" class="btn btn-primary">Profesores</a>
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