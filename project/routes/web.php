<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Clases\ClasesController;
use App\Http\Controllers\Alumnos\AlumnosController;
use App\Http\Controllers\Profesores\ProfesoresController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Solo muestran información, no modifican nada
// ✅ Sintaxis moderna (Laravel 8+)
Route::get('/clases', [ClasesController::class, 'load'])->name('clases.index');
Route::put('/clases', [ClasesController::class, 'cambiarEstado'])->name('clases.cambiar_estado');
Route::get('/clases/activos', [ClasesController::class, 'getActivos'])->name('clases.activos');
Route::get('/clases/inactivos', [ClasesController::class, 'getInactivos'])->name('clases.inactivos');
Route::get('/clases/buscar', [ClasesController::class, 'Buscar'])->name('clases.buscar');
Route::get('/alumnos', [AlumnosController::class, 'load'])->name('alumnos.index');
Route::get('/profesores', [ProfesoresController::class, 'load'])->name('profesores.index');

// Reciben información para crear
Route::post('/clases/nueva', [ClasesController::class, 'store'])->name('clases.store');
Route::post('/alumnos/nueva', [AlumnosController::class, 'store'])->name('alumnos.store');
Route::post('/profesores/nueva', [ProfesoresController::class, 'store'])->name('profesores.store');

Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Rutas sin autenticación requerida
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/exercises', [ExerciseController::class, 'index'])->name('exercises.index');
Route::get('/exercises/{exercise}', [ExerciseController::class, 'show'])->name('exercises.show');
Route::post('/exercises/{exercise}/submit', [ExerciseController::class, 'submit'])->name('exercises.submit');

// Eliminamos la importación del archivo auth.php ya que no se requiere autenticación
// require __DIR__.'/auth.php';
