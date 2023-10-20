<?php

namespace App\Models;

use CodeIgniter\Model;

class Cargo extends Model
{
    protected $table        = 'resp_cargo';
    protected $primaryKey = 'id_cargo';
    protected $allowedFields = ['nombre_cargo'];

    public function insertar($datos)
    {
        $table = $this->table('resp_cargo');
        $table->insert($datos);
    }
}
