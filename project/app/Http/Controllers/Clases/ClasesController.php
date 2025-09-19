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
        if ($estado == 1) {
            $estado = 'activa';
        } else {
            $estado = 'inactiva';
        }

        $this->clasesModel->create([
            'nombre' => $name,
            'descripcion' => $description,
            'hora' => $hora,
            'instructor' => $instructor,
            'estado' => $estado,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('clases.index');
    }
    public function getActivos()
    {
        $clases = $this->clasesModel->getActivos();

        return view('clases.index', ['clases' => $clases]);
    }
    public function getInactivos()
    {
        $clases = $this->clasesModel->getInactivos();

        return view('clases.index', ['clases' => $clases]);
    }

    public function Buscar(Request $request)
    {
        $id = $request->query('id');

        $clase = $this->clasesModel->getClaseById((int)$id);

        return view('clases.index', ['clases' => $clase ? [$clase] : []]);
    }

    public function cambiarEstado(Request $request)
    {
        $id = $request->input('id');
        $newEstado = $request->input('estado');

        $this->clasesModel->updateEstado((int)$id, $newEstado);

        return redirect()->route('clases.index');
    }
}