<?php

namespace App\Models;

use CodeIgniter\Model;

class Condicion extends Model
{
    protected $table      = 'resp_condicion';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_condicion';
    protected $allowedFields = ['nombre_condicion'];

    public function insertar($datos)
    {
        $table = $this->table('resp_condicion');
        $table->insert($datos);
    }

    public function actualizar($datos)
    {
        $table = $this->table('resp_condicion');
        $table->set($datos);
        $table->where('id_condicion');
        return $table->update($datos);
    }
}
