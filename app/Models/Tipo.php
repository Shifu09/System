<?php

namespace App\Models;

use CodeIgniter\Model;

class Tipo extends Model
{
    protected $table      = 'act_tipo';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_tipo';
    protected $allowedFields = ['nombre'];

    public function insertar($datos)
    {
        $table = $this->table('act_tipo');
        $table->insert($datos);
    }
}
