<?php

namespace App\Models;

use CodeIgniter\Model;

class Desincorporacion extends Model
{
    protected $table      = 'act_desincorporacion';
    protected $primaryKey = 'id_desincorporacion';
    protected $allowedFields = ['codigo_activo', 'fecha_des', 'motivo'];

    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'fecha_des';
    protected $updatedField  = 'fecha_des';


    public function insertar($datos)
    {
        $table = $this->table('act_desincorporacion');
        $table->insert($datos);
    }
}
