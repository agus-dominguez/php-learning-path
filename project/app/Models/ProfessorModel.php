<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfessorModel extends Model
{
    /**
     * @var string
     */
    protected $table = 'profesores';

    protected $primaryKey = 'id';

    protected $connection = 'sqlite';

    /**
     * Atributos de la tabla ordenes
     *
     * @var array
     */
    protected $fillable = [''];


    public function getProfesores()
    {
        return $this->all();
    }
}
