<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\DashboardController;

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
