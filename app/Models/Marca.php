<?php

namespace App\Models;

use CodeIgniter\Model;

class Marca extends Model
{
    protected $table      = 'act_marca';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_marca';
    protected $allowedFields = ['nombre'];

    public function insertar($datos)
    {
        $table = $this->table('act_marca');
        $table->insert($datos);
    }
}
