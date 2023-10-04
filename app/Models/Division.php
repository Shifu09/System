<?php

namespace App\Models;

use CodeIgniter\Model;

class Division extends Model
{
    protected $table      = 'divisiones';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_div';
    protected $allowedFields = ['gerencia', 'nombre_div'];
}
