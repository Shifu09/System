<?php

namespace App\Models;

use CodeIgniter\Model;

class Movimientos extends Model
{
    protected $table      = 'mov_movimientos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_movimientos';
    protected $allowedFields = ['codigo', 'zona', 'ubicacion', 'fecha', 'motivo', 'cedula'];

    public function insertar($datos)
    {
        $table = $this->table('mov_movimientos');
        $table->insert($datos);
    }
}
