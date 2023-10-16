<?php

namespace App\Controllers;

use App\Models\Activos;
use CodeIgniter\Controller;
use App\Models\Cargo;
use App\Models\condicion;
use App\Models\Condicion_act;
use App\Models\Detalles;
use App\Models\Marca;
use App\Models\Motivo;
use App\Models\Movimientos;
use App\Models\Responsables;
use App\Models\Tipo;
use App\Models\ubicacion;
use App\Models\Zona;

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
        $datos['activos'] =  $resp->orderBy('codigo', 'ASC')->findAll();

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
    public function Condicion_act()
    {
        $resp = new Condicion_act();
        $datos['condicion_act'] =  $resp->orderBy('id_activo_condicion', 'ASC')->findAll();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('activos/condicion', $datos);
    }
    public function tipo_act()
    {
        $resp = new Tipo();
        $datos['tipos'] =  $resp->orderBy('id_tipo', 'ASC')->findAll();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('activos/tipo', $datos);
    }
    public function zona_mov()
    {
        $resp = new Zona();
        $datos['zonas'] =  $resp->orderBy('id_zona', 'ASC')->findAll();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('movimientos/zona', $datos);
    }
    public function ubicacion()
    {
        $resp = new ubicacion();
        $datos['ubicaciones'] =  $resp->orderBy('id_ubicacion', 'ASC')->findAll();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('movimientos/ubicacion', $datos);
    }

    public function motivo()
    {
        $resp = new Motivo();
        $datos['motivos'] =  $resp->orderBy('id_motivo', 'ASC')->findAll();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('movimientos/motivo', $datos);
    }

    public function movimiento()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('mov_movimientos  mov');
        $builder->select('mov.*, dt.cedula_resp, res.nombre, res.apellido, mot.nombre as nombret');
        $builder->join('mov_detalles  dt', 'dt.id = mov.id_movimientos');
        $builder->join('resp_responsables  res', 'res.cedula = dt.cedula_resp');
        $builder->join('mov_motivo  mot', 'mot.id_motivo = mov.motivo');

        $datos['movimientos'] = $builder->get()->getResultArray();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('movimientos/movimientos', $datos);
    }
}
