<?php

// Declaramos el tipado estricto
declare(strict_types=1);

// definimos la ruta del controller
namespace App\Http\Controllers\Alumnos;

// importamos el controller base
use App\Http\Controllers\Controller;

// extiende de controller para usar middlewares y otras funcionalidades como view
final class AlumnosController extends Controller
{
    // método que carga la vista de alumnos
    public function load()
    {
        // Accedemos a la vista resources/views/alumnos/index.blade.php
        return view('alumnos.index');
        // return "Hola desde el Controlador de Alumnos";
    }
}