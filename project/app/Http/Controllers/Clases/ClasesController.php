<?php

// Declaramos el tipado estricto
declare(strict_types=1);

// definimos la ruta del controller
namespace App\Http\Controllers\Clases;

use Illuminate\Http\Request; // ← ¡Falta este import!

// importamos el controller base
use App\Http\Controllers\Controller;

// extiende de controller para usar middlewares y otras funcionalidades como view
final class ClasesController extends Controller
{
    // método que carga la vista de clases
    public function load()
    {
        // Accedemos a la vista resources/views/clases/index.blade.php
        return view('clases.index');
        // return "Hola desde el Controlador de Clases";
    }
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'nombre' => 'required|max:100',
            'descripcion' => 'required'
        ]);

        // Aquí guardarías en la base de datos
        // Por ahora solo mostramos lo recibido
        return "¡Clase creada!<br>
            Nombre: " . $request->nombre . "<br>
            Descripción: " . $request->descripcion;

        // Más adelante usarías:
        // Clase::create($request->all());
        // return redirect()->route('clases.index');
    }

}