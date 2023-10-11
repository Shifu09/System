<?php

namespace App\Controllers;

use App\Models\Activos;
use CodeIgniter\Controller;
use App\Models\Cargo;
use App\Models\Condicion;
use App\Models\Condicion_act;
use App\Models\Marca;
use App\Models\Responsables;
use App\Models\ubicacion;
use App\Models\Zona;

class AccionController extends Controller
{
    /*
    ------------------------------------------------------------------------------------------
    ! TODO: INICIO DE FUNCIONES DE GUARDAR DATOS
    */
    public function save()
    {
        $datos = [
            'nombre_cargo' => $_POST['nombre']

        ];
        $cargo = new Cargo();
        $respuesta = $cargo->insertar($datos);



        return $this->response->redirect(base_url('cargo'));
    }

    public function savecon()
    {
        $datos = [
            'nombre_condicion' => $_POST['nombre']
        ];
        $condicion = new Condicion();
        $condicion->insertar($datos);
        return $this->response->redirect(base_url('condicion'));
    }

    public function saveconact()
    {
        $datos = [
            'nombre' => $_POST['nombre']
        ];
        $condicion = new Condicion_act();
        $condicion->insertar($datos);
        return $this->response->redirect(base_url('condicionActivo'));
    }

    public function saveresp()
    {
        $datos = [
            'cedula' => $_POST['cedula'],
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'telefono' => $_POST['telefono'],
            'condicion_resp' => $_POST['condicion'],
            'correo' => $_POST['correo'],
            'cargo_resp' => $_POST['cargo'],
            'gerencia' => $_POST['gerencia'],
            'division' => $_POST['division'],
        ];
        $responsable = new Responsables();
        $responsable->insertar($datos);
        return $this->response->redirect(base_url('/resp'));
    }
    public function saveactivo()
    {
        $datos = [
            'codigo' => $_POST['codigo'],
            'marca' => $_POST['marca'],
            'modelo' => $_POST['modelo'],
            'serial' => $_POST['seria'],
            'condicion_act' => $_POST['condicion'],
            'tipo' => $_POST['tipo'],
            'descripcion' => $_POST['descripcion'],
            'observacion' => $_POST['observaciones'],
            'proveedor' => $_POST['proveedor'],
            'n_factura' => $_POST['factura'],
            'costo' => $_POST['costo'],
            'n_orden' => $_POST['orden'],
            'garantia_inicio' => $_POST['inicio'],
            'garantia_fin' => $_POST['fin'],

        ];
        $activo = new Activos();
        $activo->insertar($datos);
        return $this->response->redirect(base_url('activos'));
    }
    public function savemarca()
    {
        $datos = [
            'nombre' => $_POST['nombre']
        ];
        $marca = new Marca();
        $marca->insertar($datos);
        return $this->response->redirect(base_url('/marca'));
    }

    public function savezona()
    {
        $datos = [
            'nombre' => $_POST['nombre'],
            'direccion' => $_POST['direccion']
        ];
        $marca = new Zona();
        $marca->insertar($datos);
        return $this->response->redirect(base_url('zona'));
    }

    public function saveubi()
    {
        $datos = [
            'sede' => $_POST['nombre'],
            'direccion' => $_POST['direccion']
        ];
        $marca = new ubicacion();
        $marca->insertar($datos);
        return $this->response->redirect(base_url('ubicacion'));
    }


    /*
    ! TODO: FIN DE FUNCIONES DE GUARDAR DATOS
    ------------------------------------------------------------------------------------------
    */


    public function obtenerCargo($id = null)
    {

        /* $cargo = new Cargo();
        $dato = ['id_nombre' => $id];
        $pep = $cargo->obtenerCargo($id);
        $datos = ['datos' => $cargo];
        */
        $cargo = new Cargo();
        $datos['cargos'] = $cargo->where('id_cargo', $id)->first();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('responsables/editar', $datos);
    }

    public function cargoupdate($id = null)
    {
        $cargo = new Cargo();
        // $datos = ['id_cargo' => $id];
        $datos['cargos'] = $cargo->find($id);

        print_r($datos);
        return view('responsables/editar', $datos);
    }

    public function updatecargo()
    {
        $cargo = new Cargo();
        $id = $_POST['id'];
        $val = $this->validate([
            'nombre' => 'required',
        ]);
        if ($_POST && $val) {
            $datos = [
                'nombre_cargo' => $_POST['nombre']

            ];

            $cargo->update($id, $datos);
            return redirect()->to(base_url('cargo'));
        }

        echo '<script> 
    alert ("Registro exitoso","aja","sds");
    </script>';

        // $datos = ['id_cargo' => $id];
        //print_r($_POST);


    }
}
