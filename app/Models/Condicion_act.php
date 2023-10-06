<?php

namespace App\Models;

use CodeIgniter\Model;

class Condicion_act extends Model
{
    protected $table      = 'act_condicion';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_activo_condicion';
    protected $allowedFields = ['nombre'];
}
