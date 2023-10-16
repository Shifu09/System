<?php

namespace App\Models;

use CodeIgniter\Model;

class Motivo extends Model
{
    protected $table      = 'mov_motivo';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_motivo';
    protected $allowedFields = ['nombre'];
    public function insertar($datos)
    {
        $table = $this->table('mov_motivo');
        $table->insert($datos);
    }
}
