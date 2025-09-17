<?php

// Declaramos el tipado estricto
declare(strict_types=1);

// definimos la ruta del controller
namespace App\Http\Controllers\Profesores;

// importamos el controller base
use App\Http\Controllers\Controller;

// extiende de controller para usar middlewares y otras funcionalidades como view
final class ProfesoresController extends Controller
{
    // método que carga la vista de profesores
    public function load()
    {
        // Accedemos a la vista resources/views/profesores/index.blade.php
        return view('profesores.index');
        // return "Hola desde el Controlador de Profesores";
    }
}