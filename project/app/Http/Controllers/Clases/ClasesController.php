<?php

// Declaramos el tipado estricto
declare(strict_types=1);

// definimos la ruta del controller
namespace App\Http\Controllers\Clases;

use Illuminate\Http\Request;
// importamos el controller base
use App\Http\Controllers\Controller;
use App\Models\Clase\ClaseModel;

// extiende de controller para usar middlewares y otras funcionalidades como view
final class ClasesController extends Controller
{
    private $clasesModel;

    public function __construct(ClaseModel $claseModel)
    {
        $this->clasesModel = $claseModel;
    }

    public function load()
    {
        $clases = $this->clasesModel->getClases();

        return view('clases.index', ['clases' => $clases]);
    }

    // método que maneja el formulario de creación de una nueva clase
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