<?php

namespace App\Models;

use CodeIgniter\Model;

class Detalles extends Model
{
    protected $table      = 'mov_detalles';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_mov', 'cedula'];

    public function insertar($datos)
    {
        $table = $this->table('mov_detalles');
        $table->insert($datos);
    }
}
