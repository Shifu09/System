<?php

namespace App\Models;

use CodeIgniter\Model;

class Responsables extends Model
{
    protected $table      = 'resp_responsables';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'cedula';
    protected $allowedFields = ['cedula', 'nombre', 'apellido', 'correo', 'telefono', 'condicion_resp', 'cargo_resp', 'gerencia', 'division'];



    public function insertar($datos)
    {
        $table = $this->table('resp_responsables');
        $table->insert($datos);
    }
}
