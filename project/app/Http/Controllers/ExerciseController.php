<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::orderBy('order')->get();
        
        // Como no hay autenticación, pasamos un array vacío para progress
        $progress = new Collection();
        
        return view('exercises.index', compact('exercises', 'progress'));
    }
    
    public function show(Exercise $exercise)
    {
        return view('exercises.show', compact('exercise'));
    }
    
    public function submit(Request $request, Exercise $exercise)
    {
        $code = $request->input('code');
        
        // Crear un archivo temporal para ejecutar el código
        $tempFile = 'temp_' . time() . '.php';
        Storage::disk('local')->put($tempFile, $code);
        $tempFilePath = Storage::disk('local')->path($tempFile);
        
        // Ejecutar el código PHP en un entorno controlado
        $output = $this->executePhpCode($tempFilePath);
        
        // Verificar si el código es correcto
        $passed = $this->validateExercise($exercise, $code, $output);
        
        // Eliminar archivo temporal
        Storage::disk('local')->delete($tempFile);
        
        // Eliminamos los mensajes de éxito o error
        $message = '';
        
        return response()->json([
            'passed' => $passed,
            'message' => $message,
            'output' => $output
        ]);
    }
    
    /**
     * Ejecuta el código PHP de forma segura
     */
    private function executePhpCode($filePath)
    {
        // Capturar la salida del script en lugar de mostrarla
        ob_start();
        
        // Establecer límite de tiempo de ejecución para evitar bucles infinitos
        set_time_limit(2); 
        
        try {
            // Ejecutar el script en un contexto aislado
            include $filePath;
            $output = ob_get_clean();
            return $output;
        } catch (\Throwable $e) {
            ob_end_clean();
            return "Error: " . $e->getMessage();
        }
    }
    
    /**
     * Valida si el ejercicio está resuelto correctamente
     */
    private function validateExercise(Exercise $exercise, $userCode, $output)
    {
        // Estrategia 1: Verificar si el código del usuario contiene elementos clave de la solución
        $solutionKeywords = $this->extractKeywords($exercise->solution_code);
        $userKeywords = $this->extractKeywords($userCode);
        
        $keywordMatch = count(array_intersect($solutionKeywords, $userKeywords)) / count($solutionKeywords);
        
        // Estrategia 2: Ejecutar el código de solución y comparar salidas
        $solutionTempFile = 'solution_' . time() . '.php';
        Storage::disk('local')->put($solutionTempFile, $exercise->solution_code);
        $solutionFilePath = Storage::disk('local')->path($solutionTempFile);
        
        ob_start();
        try {
            include $solutionFilePath;
            $solutionOutput = ob_get_clean();
        } catch (\Throwable $e) {
            ob_end_clean();
            $solutionOutput = "Error: " . $e->getMessage();
        }
        
        // Eliminar archivo temporal
        Storage::disk('local')->delete($solutionTempFile);
        
        // Verificar si la salida es similar
        $outputSimilarity = $this->calculateSimilarity($output, $solutionOutput);
        
        // Combinación de ambas estrategias para determinar si el ejercicio está correcto
        return ($keywordMatch > 0.7 || $outputSimilarity > 0.8);
    }
    
    /**
     * Extrae palabras clave relevantes del código PHP
     */
    private function extractKeywords($code)
    {
        // Eliminar comentarios
        $code = preg_replace('/(\/\/.*|\/\*[\s\S]*?\*\/)/', '', $code);
        
        // Extraer símbolos relevantes (variables, funciones, clases, etc.)
        preg_match_all('/\$\w+|\b(function|class|if|else|for|while|foreach|return|echo|print|include|require)\b|\b\w+\s*\(/', $code, $matches);
        
        return $matches[0] ?? [];
    }
    
    /**
     * Calcula la similitud entre dos strings
     */
    private function calculateSimilarity($str1, $str2)
    {
        // Normalizar strings
        $str1 = preg_replace('/\s+/', ' ', trim($str1));
        $str2 = preg_replace('/\s+/', ' ', trim($str2));
        
        if (empty($str1) && empty($str2)) return 1.0;
        if (empty($str1) || empty($str2)) return 0.0;
        
        // Usar similitud de texto básica
        similar_text($str1, $str2, $percent);
        return $percent / 100;
    }
}