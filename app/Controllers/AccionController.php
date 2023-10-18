<?php

namespace App\Controllers;

use App\Models\Activos;
use CodeIgniter\Controller;
use App\Models\Cargo;
use App\Models\Condicion;
use App\Models\Condicion_act;
use App\Models\Marca;
use App\Models\Motivo;
use App\Models\Movimientos;
use App\Models\Responsables;
use App\Models\Tipo;
use App\Models\ubicacion;
use App\Models\Zona;

class AccionController extends Controller
{
    /*
    ------------------------------------------------------------------------------------------
    ! INICIO DE FUNCIONES DE GUARDAR DATOS
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
    public function savetipo()
    {
        $datos = [
            'nombre' => $_POST['nombre'],
        ];
        $tipo = new Tipo();
        $tipo->insertar($datos);
        return $this->response->redirect(base_url('tipo'));
    }
    public function savemotivo()
    {
        $datos = [
            'nombre' => $_POST['nombre'],
        ];
        $tipo = new Motivo();
        $tipo->insertar($datos);
        return $this->response->redirect(base_url('motivo'));
    }

    public function savemovimiento()
    {
        $datos = [
            'codigo_act' => $_POST['codigo'],
            'zona' => $_POST['zona'],
            'zona' => $_POST['zona'],
            'motivo' => $_POST['motivo'],
            'fecha' => $_POST['fecha'],
        ];
        $tipo = new Movimientos();
        $tipo->insertar($datos);
        return $this->response->redirect(base_url('movimientos'));
    }
    /*
    ! FIN DE FUNCIONES DE GUARDAR DATOS
    ------------------------------------------------------------------------------------------
  */

    /*
    -----------------------------------------------------------------------------------------
    ! INICIO DE FUNCIONES DE EDITAR DATOS
    */

    public function cargoupdate($id = null)
    {
        $cargo = new Cargo();
        $datos['cargos'] = $cargo->find($id);

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

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
    }
    public function marcaupdate($id = null)
    {
        $cargo = new Marca();
        $datos['marca'] = $cargo->find($id);

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('activos/editarmarca', $datos);
    }

    public function updatemarca()
    {
        $cargo = new Marca();
        $id = $_POST['id'];
        $val = $this->validate([
            'nombre' => 'required',
        ]);

        if ($_POST && $val) {
            $datos = [
                'nombre' => $_POST['nombre']

            ];

            $cargo->update($id, $datos);
            return redirect()->to(base_url('marca'));
        }

        echo '<script> 
    alert ("Registro exitoso","aja","sds");
    </script>';
    }
    public function condicionupdate($id = null)
    {
        $cargo = new Condicion_act();
        $datos['condicion'] = $cargo->find($id);

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('activos/editarcon', $datos);
    }

    public function updatecondicion()
    {
        $cargo = new Condicion_act();
        $id = $_POST['id'];
        $val = $this->validate([
            'nombre' => 'required',
        ]);

        if ($_POST && $val) {
            $datos = [
                'nombre' => $_POST['nombre']

            ];

            $cargo->update($id, $datos);
            return redirect()->to(base_url('condicionActivo'));
        }

        echo '<script> 
    alert ("Registro exitoso","aja","sds");
    </script>';
    }
    public function condicionupdaterep($id = null)
    {
        $cargo = new Condicion();
        $datos['condicion'] = $cargo->find($id);

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('responsables/editarcon', $datos);
    }

    public function updatecondicionrep()
    {
        $cargo = new Condicion();
        $id = $_POST['id'];
        $val = $this->validate([
            'nombre' => 'required',
        ]);

        if ($_POST && $val) {
            $datos = [
                'nombre_condicion' => $_POST['nombre']

            ];

            $cargo->update($id, $datos);
            return redirect()->to(base_url('condicion'));
        }

        echo '<script> 
    alert ("Registro exitoso","aja","sds");
    </script>';
    }
    public function tipoupdate($id = null)
    {
        $cargo = new Tipo();
        $datos['tipo'] = $cargo->find($id);

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('activos/editartipo', $datos);
    }

    public function updatetipo()
    {
        $cargo = new Tipo();
        $id = $_POST['id'];
        $val = $this->validate([
            'nombre' => 'required',
        ]);

        if ($_POST && $val) {
            $datos = [
                'nombre' => $_POST['nombre']

            ];

            $cargo->update($id, $datos);
            return redirect()->to(base_url('tipo'));
        }

        echo '<script> 
    alert ("Registro exitoso","aja","sds");
    </script>';
    }
    public function respupdate($id = null)
    {
        $resp = new Responsables();
        $datos['resp'] = $resp->find($id);

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('responsables/editarresp', $datos);
    }

    public function updateresp()
    {
        $resp = new Responsables();
        $id = $_POST['id'];
        $val = $this->validate([
            'nombre' => 'required',
        ]);

        if ($_POST && $val) {
            $datos = [
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'telefono' => $_POST['telefono'],
                'condicion_resp' => $_POST['condicion'],
                'correo' => $_POST['correo'],
                'cargo_resp' => $_POST['cargo'],
                'gerencia' => $_POST['gerencia'],
                'division' => $_POST['division'],

            ];

            $resp->update(
                $id,
                $datos
            );
            return redirect()->to(base_url('resp'));
        }

        echo '<script> 
    alert ("Registro exitoso","aja","sds");
    </script>';
    }

    /*
    ! FIN DE FUNCIONES DE EDITAR DATOS
    ------------------------------------------------------------------------------------------
    */

    /*
    -----------------------------------------------------------------------------------------
    ! INICIO DE FUNCIONES DE BORRAR DATOS
    */

    public function delete($id = null)
    {
        $cargo = new Cargo();

        $cargo->where('id_cargo', $id)->delete($id);
        return $this->response->redirect(site_url('cargo'));
    }

    public function deletecon($id = null)
    {
        $condicion = new condicion();

        $condicion->where('id_condicion', $id)->delete($id);
        return $this->response->redirect(site_url('condicion'));
    }

    public function deleteresp($id = null)
    {
        $responsable = new Responsables();

        $responsable->where('cedula', $id)->delete($id);
        return $this->response->redirect(site_url('resp'));
    }
}
