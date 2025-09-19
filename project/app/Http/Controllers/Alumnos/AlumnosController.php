<?php

// Declaramos el tipado estricto
declare(strict_types=1);

// definimos la ruta del controller
namespace App\Http\Controllers\Alumnos;

// importamos el controller base
use App\Http\Controllers\Controller;
use App\Models\AlumnoModel;
// Importamos la fachada DB para consultas directas
use Illuminate\Support\Facades\DB;

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
        $alumnos = DB::table('alumnos')->get(); // Consulta directa a la tabla 'alumnos'

        return view('alumnos.index', ['alumnos' => $alumnos]);
    }
    // método que carga la vista de alumnos
    // Accedemos a la vista resources/views/alumnos/index.blade.php
    // return view('alumnos.index');
    // return "Hola desde el Controlador de Alumnos";

    public function store()
    {
        $request = request();
        $name = $request->input('nombre');
        $apellido = $request->input('apellido');
        $email = $request->input('email');
        $telefono = $request->input('telefono');
        $estado = $request->input('estado');
        if ($estado == 1) {
            $estado = 'activa';
        } else {
            $estado = 'inactiva';
        }

        $this->alumnoModel->create([
            'nombre' => $name,
            'apellido' => $apellido,
            'email' => $email,
            'telefono' => $telefono,
            'estado' => $estado,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('alumnos.index');
    }
}