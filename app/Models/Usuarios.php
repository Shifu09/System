<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuarios extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'username';

    protected $protectFields    = true;
    protected $allowedFields    = ['passaword'];
}
