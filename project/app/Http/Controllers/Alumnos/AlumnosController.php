<?php

// Declaramos el tipado estricto
declare(strict_types=1);

// definimos la ruta del controller
namespace App\Http\Controllers\Alumnos;

// importamos el controller base
use App\Http\Controllers\Controller;
use App\Models\AlumnoModel;

// extiende de controller para usar middlewares y otras funcionalidades como view
final class AlumnosController extends Controller
{
    private $alumnoModel;

    public function __construct(AlumnoModel $alumnoModel)
    {
        $this->alumnoModel = $alumnoModel;
    }

    public function load()
    {
        $clases = $this->alumnoModel->getAlumnos();

        return view('alumnos.index', ['alumnos' => $clases]);
    }
    // método que carga la vista de alumnos
    // Accedemos a la vista resources/views/alumnos/index.blade.php
    // return view('alumnos.index');
    // return "Hola desde el Controlador de Alumnos";

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