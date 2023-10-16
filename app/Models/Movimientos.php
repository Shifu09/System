<?php

namespace App\Models;

use CodeIgniter\Model;

class Movimientos extends Model
{
    protected $table      = 'mov_movimientos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_movimientos';
    protected $allowedFields = ['codigo_act', 'zona', 'ubicacion', 'fecha', 'motivo', 'observacion'];

    public function insertar($datos)
    {
        $table = $this->table('mov_movimientos');
        $table->insert($datos);
    }
}
