<?php

declare(strict_types=1);

namespace App\Models\Clase;

use Illuminate\Database\Eloquent\Model;

class ClaseModel extends Model
{
    /**
     * @var string
     */
    protected $table = 'clases';

    protected $primaryKey = 'id';

    protected $connection = 'sqlite';

    /**
     * Atributos de la tabla ordenes
     *
     * @var array
     */
    protected $fillable = [''];


    public function getClases()
    {
        return $this->all();
    }

}