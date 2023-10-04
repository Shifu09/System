<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Cargo;
use App\Models\condicion;
use App\Models\Responsables;

class VistaController extends Controller
{
    public function index()
    {
        $cargo = new Cargo();
        $datos['cargos'] = $cargo->orderBy('id_cargo', 'ASC')->findAll();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');


        return view('responsables/cargo', $datos);
    }
    public function condicion()
    {
        $condicion = new condicion();
        $datos['condicion'] =  $condicion->orderBy('id_condicion', 'ASC')->findAll();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('responsables/condicion', $datos);
    }

    public function resp()
    {
        $resp = new Responsables();
        $datos['responsables'] =  $resp->orderBy('cedula', 'ASC')->findAll();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('responsables/responsable', $datos);
    }
}
