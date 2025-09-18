<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlumnoModel extends Model
{
    /**
     * @var string
     */
    protected $table = 'alumnos';

    protected $primaryKey = 'id';

    protected $connection = 'sqlite';

    /**
     * Atributos de la tabla ordenes
     *
     * @var array
     */
    protected $fillable = [''];


    public function getAlumnos()
    {
        return $this->all();
    }
}
