<?php

namespace App\Models;

use CodeIgniter\Model;

class Tipo_act extends Model
{
    protected $table      = 'act_tipo';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_tipo';
    protected $allowedFields = ['nombre'];
}
