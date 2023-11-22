<?php

namespace App\Controllers;

use App\Models\Activos;
use CodeIgniter\Controller;
use App\Models\Cargo;
use App\Models\condicion;
use App\Models\Condicion_act;
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
        echo  view('templates/footer');
        echo  view('templates/header');
        echo  view('templates/style');
        return view('templates/index');
    }
    public function login()
    {
        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('templates/login', $datos);
    }
    public function cargo()
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
        $datos['responsables'] =  $resp->where('estado', 1)->findAll();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('responsables/responsable', $datos);
    }

    public function activo()
    {
        $resp = new Activos();
        $datos['activos'] =  $resp->where('estado', 1)->findAll();


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

        $builder = $db->table('mov_movimientos  mov')->select('mov.*, res.cedula, res.nombre, res.apellido');

        $builder->join('resp_responsables  res', 'res.cedula = mov.cedula');
        $datos['movimientos'] = $builder->orderBy('id_movimientos', 'ASC')->get()->getResultArray();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');


        return view('movimientos/movimientos', $datos);
    }
    public function pdf($id = null)
    {
        $db      = \Config\Database::connect();

        $builder = $db->table('mov_movimientos  mov')->where('id_movimientos', $id);
        $builder->join('resp_responsables  res', 'res.cedula = mov.cedula');
        $builder->join('gerencias g', 'g.id = res.gerencia');
        $builder->join('resp_cargo ca', 'ca.id_cargo = res.cargo_resp');
        $builder->join('act_activos  act', 'act.codigo = mov.codigo');
        $builder->join('act_tipo  t', 't.id_tipo = act.tipo');
        $builder->join('act_marca  m', 'm.id_marca = act.marca');
        $builder->select('mov.*, res.cedula, res.nombre, res.apellido, act.descripcion, g.nombre as nombre_gerencia, ca.nombre_cargo,t.nombre as tipo,m.nombre as marca,act.serial,act.codigo,act.costo,act.n_factura,res.nombre,res.apellido,res.cedula,act.proveedor,act.garantia_inicio,act.garantia_fin,act.modelo,act.n_orden');
        $builder = $db->query($builder->getCompiledSelect())->getRow();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');
        $datos['pdff'] = view('templates/dompdf/autoload.inc.php');
        $datos['x'] = $builder;

        return view('movimientos/pdf', $datos);
    }
}
