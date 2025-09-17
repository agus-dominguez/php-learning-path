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
                            <th>Especialidad</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lucia Soardo</td>
                            <td>Yoga y Pilates</td>
                            <td>lucia.soardo@email.com</td>
                            <td>+54 911 1234-5678</td>
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
                            <td>Ariel Diaz</td>
                            <td>Crossfit y Funcional</td>
                            <td>ariel.diaz@email.com</td>
                            <td>+54 911 2345-6789</td>
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
                            <td>Agus Dominguez</td>
                            <td>Zumba y Aeróbicos</td>
                            <td>agus.dominguez@email.com</td>
                            <td>+54 911 3456-7890</td>
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
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <a href="/alumnos" class="btn btn-primary">Alumnos</a>
            </div>
            <div class="text-center">
                <a href="/clases" class="btn btn-primary">Clases</a>
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