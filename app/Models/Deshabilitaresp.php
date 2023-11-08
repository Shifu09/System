<?php

namespace App\Models;

use CodeIgniter\Model;

class Deshabilitaresp extends Model
{

    protected $table      = 'resp_deshabilitacion';
    protected $primaryKey = 'id_des';
    protected $allowedFields = ['cedula_resp', 'fecha', 'motivo'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'fecha';
    protected $updatedField  = 'fecha';
    //protected $deletedField  = 'fecha';

    public function insertar($datos)
    {
        $table = $this->table('resp_deshabilitacion');
        $table->insert($datos);
    }
}
