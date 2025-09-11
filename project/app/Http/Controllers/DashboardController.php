<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\UserProgress;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Quitamos referencias a Auth::id() ya que no hay usuarios autenticados
        $completedExercises = 0; // Como no hay usuario, iniciamos en 0
            
        $totalExercises = Exercise::count();
        
        $latestExercises = Exercise::orderBy('created_at', 'desc')
            ->take(5)
            ->get();
            
        // Sin usuario autenticado, userProgress será una colección vacía
        $userProgress = collect();
            
        return view('dashboard', compact('completedExercises', 'totalExercises', 'latestExercises', 'userProgress'));
    }
}