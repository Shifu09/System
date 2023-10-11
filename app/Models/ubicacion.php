<?php

namespace App\Models;

use CodeIgniter\Model;

class ubicacion extends Model
{
    protected $table      = 'mov_ubicacion';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_ubicacion';
    protected $allowedFields = ['sede', 'direccion'];

    public function insertar($datos)
    {
        $table = $this->table('mov_ubicacion');
        $table->insert($datos);
    }
}
