<?php

namespace App\Models;

use CodeIgniter\Model;

class Zona extends Model
{
    protected $table      = 'mov_zona';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_zona';
    protected $allowedFields = ['nombre', 'direccion'];
}
