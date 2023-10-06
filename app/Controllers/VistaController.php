<?php

namespace App\Controllers;

use App\Models\Activos;
use CodeIgniter\Controller;
use App\Models\Cargo;
use App\Models\condicion;
use App\Models\Marca;
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

    public function activo()
    {
        $resp = new Activos();
        $datos['activos'] =  $resp->orderBy('codigo_act', 'ASC')->findAll();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('activos/activos', $datos);
    }
    public function marca()
    {
        $resp = new Marca();
        $datos['marcas'] =  $resp->orderBy('id_marca', 'ASC')->findAll();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('activos/marca', $datos);
    }
}
