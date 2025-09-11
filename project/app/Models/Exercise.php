<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'instructions',
        'level',
        'order',
        'initial_code',
        'solution_code',
    ];
    
    public function userProgress()
    {
        return $this->hasMany(UserProgress::class);
    }
}