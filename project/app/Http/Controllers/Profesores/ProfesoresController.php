<?php

// Declaramos el tipado estricto
declare(strict_types=1);

// definimos la ruta del controller
namespace App\Http\Controllers\Profesores;

// importamos el controller base
use App\Http\Controllers\Controller;
use App\Models\ProfessorModel;

// extiende de controller para usar middlewares y otras funcionalidades como view
final class ProfesoresController extends Controller
{
    private $profesorModel;

    public function __construct(ProfessorModel $profesorModel)
    {
        $this->profesorModel = $profesorModel;
    }

    public function load()
    {
        $clases = $this->profesorModel->getProfesores();

        return view('profesores.index', ['profesores' => $clases]);
    }
    // método que carga la vista de profesores
    // Accedemos a la vista resources/views/profesores/index.blade.php
    // return view('profesores.index');
    // return "Hola desde el Controlador de Profesores";

    public function store()
    {
        $request = request();
        $name = $request->input('nombre');
        $description = $request->input('descripcion');
        $hora = $request->input('hora');
        $instructor = $request->input('instructor');
        $estado = $request->input('estado');

        return "Clase creada: $name - $description - Estado: $estado - Hora: $hora - Instructor: $instructor";
    }
}