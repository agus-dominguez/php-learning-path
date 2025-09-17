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
                        <tr>
                            <td>1</td>
                            <td>Juan</td>
                            <td>Pérez</td>
                            <td>juan.perez@email.com</td>
                            <td>+1234567890</td>
                            <td>
                                <span class="badge bg-success">Activo</span>
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
                            <td>María</td>
                            <td>González</td>
                            <td>maria.gonzalez@email.com</td>
                            <td>+1234567891</td>
                            <td>
                                <span class="badge bg-success">Activo</span>
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
                            <td>Carlos</td>
                            <td>Rodríguez</td>
                            <td>carlos.rodriguez@email.com</td>
                            <td>+1234567892</td>
                            <td>
                                <span class="badge bg-danger">Inactivo</span>
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
                <a href="/clases" class="btn btn-primary">Clases</a>
            </div>
            <div class="text-center">
                <a href="/profesores" class="btn btn-primary">Profesores</a>
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