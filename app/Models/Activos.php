<?php

namespace App\Models;

use CodeIgniter\Model;

class Activos extends Model
{
    protected $table      = 'act_activos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'codigo';
    protected $allowedFields = ['codigo', 'marca', 'modelo', 'serial', 'condicion_act', 'tipo', 'descripcion', 'observacion', 'proveedor', 'n_factura', 'costo', 'n_orden', 'garantia_inicio', 'garantia_fin'];

    public function insertar($datos)
    {
        $table = $this->table('act_activos');
        $table->insert($datos);
    }
}
