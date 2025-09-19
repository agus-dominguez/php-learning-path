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

    public function create(array $data)
    {
        return $this->insert($data);
    }

    public function getActivos()
    {
        return $this->where('estado', 'activa')->get();
    }

    public function getInactivos()
    {
        return $this->where('estado', 'inactiva')->get();
    }

    public function getClaseById(int $id)
    {
        return $this->find($id);
    }

    public function updateEstado(int $id, string $newEstado)
    {
        return $this->where('id', $id)->update(['estado' => $newEstado, 'updated_at' => now()]);
    }
}