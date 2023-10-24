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
        $validation = $this->validate([
            'nombre' => 'alpha_space|is_unique[resp_cargo.nombre_cargo]',
        ]);

        if ($_POST && $validation) {
            $datos = [
                'nombre_cargo' => $_POST['nombre']

            ];
            $cargo = new Cargo();
            $cargo->insertar($datos);
            return $this->response->redirect(base_url('cargo'));
        } else {
            echo '<script> 
            alert ("Registross exitoso","aja","sds");
            window.location="cargo";
            </script>';
        }
    }

    public function savecon()
    {
        $validation = $this->validate([
            'nombre' => 'alpha_space|is_unique[resp_condicion.nombre_condicion]',
        ]);

        if ($_POST && $validation) {
            $datos = [
                'nombre_condicion' => $_POST['nombre']
            ];
            $condicion = new Condicion();
            $condicion->insertar($datos);
            return $this->response->redirect(base_url('condicion'));
        } else {
            echo '<script> 
            alert ("Registross exitoso","aja","sds");
            window.location="condicion";
            </script>';
        }
    }

    public function saveconact()
    {
        $validation = $this->validate([
            'nombre' => 'alpha_space|is_unique[resp_condicion.nombre_condicion]',
        ]);

        if ($_POST && $validation) {
            $datos = [
                'nombre' => $_POST['nombre']
            ];
            $condicion = new Condicion_act();
            $condicion->insertar($datos);
            return $this->response->redirect(base_url('condicionActivo'));
        } else {
            echo '<script> 
            alert ("Registross exitoso","aja","sds");
            window.location="condicionActivo";
            </script>';
        }
    }

    public function saveresp()
    {
        $validation = $this->validate([
            'cedula' => 'integer|is_unique[resp_responsables.cedula]',
            'nombre' => 'alpha_space',
            'apellido' => 'alpha_space',
            'telefono' => 'integer',
            'correo' => 'valid_email',
        ]);

        if ($_POST && $validation) {
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
            return $this->response->redirect(base_url('resp'));
        } else {
            echo '<script> 
            alert ("Registross exitoso","aja","sds");
            window.location="resp";
            </script>';
        }
    }
    public function saveactivo()
    {
        $validation = $this->validate([
            'codigo' => 'integer|is_unique[act_activo.codigo]',
            'modelo' => 'alpha_space',
            'proveedor' => 'alpha_space',
            'n_factura' => 'integer',
            'costo' => 'integer'
        ]);

        if ($_POST && $validation) {
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
        } else {
            echo '<script> 
            alert ("Registross exitoso","aja","sds");
            window.location="activos";
            </script>';
        }
    }
    public function savemarca()
    {
        $validation = $this->validate([
            'nombre' => 'alpha_space|is_unique[mov_marca.nombre]',
        ]);
        if ($_POST && $validation) {
            $datos = [
                'nombre' => $_POST['nombre']
            ];
            $marca = new Marca();
            $marca->insertar($datos);
            return $this->response->redirect(base_url('marca'));
        } else {
            echo '<script> 
            alert ("Registross exitoso","aja","sds");
            window.location="marca";
            </script>';
        }
    }

    public function savezona()
    {
        $validation = $this->validate([
            'nombre' => 'alpha_space|is_unique[mov_zona.nombre]',
            'direccion' => 'alpha_space',
        ]);
        if ($_POST && $validation) {
            $datos = [
                'nombre' => $_POST['nombre'],
                'direccion' => $_POST['direccion']
            ];
            $marca = new Zona();
            $marca->insertar($datos);
            return $this->response->redirect(base_url('zona'));
        } else {
            echo '<script> 
            alert ("Registross exitoso","aja","sds");
            window.location="zona";
            </script>';
        }
    }

    public function saveubi()
    {

        $validation = $this->validate([
            'nombre' => 'alpha_space|is_unique[mov_ubicacion.sede]',
            'direccion' => 'alpha_space',
        ]);
        if ($_POST && $validation) {
            $datos = [
                'sede' => $_POST['nombre'],
                'direccion' => $_POST['direccion']
            ];
            $marca = new ubicacion();
            $marca->insertar($datos);
            return $this->response->redirect(base_url('ubicacion'));
        } else {
            echo '<script> 
            alert ("Registross exitoso","aja","sds");
            window.location="ubicacion";
            </script>';
        }
    }
    public function savetipo()
    {
        $validation = $this->validate([
            'nombre' => 'alpha_space|is_unique[act_tipo.nombre]',

        ]);
        if ($_POST && $validation) {
            $datos = [
                'nombre' => $_POST['nombre'],
            ];
            $tipo = new Tipo();
            $tipo->insertar($datos);
            return $this->response->redirect(base_url('tipo'));
        } else {
            echo '<script> 
            alert ("Registross exitoso","aja","sds");
            window.location="tipo";
            </script>';
        }
    }
    public function savemotivo()
    {
        $validation = $this->validate([
            'nombre' => 'alpha_space|is_unique[mov_motivo.nombre]',

        ]);
        if ($_POST && $validation) {
            $datos = [
                'nombre' => $_POST['nombre'],
            ];
            $tipo = new Motivo();
            $tipo->insertar($datos);
            return $this->response->redirect(base_url('motivo'));
        } else {
            echo '<script> 
            alert ("Registross exitoso","aja","sds");
            window.location="motivo";
            </script>';
        }
    }

    /**
     * TODO ARREGLAR MOVIMIENTOS!!!!!!!
     */
    public function savemovimiento()
    {
        $validation = $this->validate([
            'codigo' => 'integer|is_unique[mov_movimientos.codigo_act]',
        ]);
        if ($_POST && $validation) {
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
        } else {
            echo '<script> 
            alert ("Registross exitoso","aja","sds");
            window.location="condicionActivo";
            </script>';
        }
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
            'nombre' => 'alpha_space|is_unique[resp_cargo.nombre_cargo]',
        ]);

        if ($_POST && $val) {
            $datos = [
                'nombre_cargo' => $_POST['nombre']

            ];

            $cargo->update($id, $datos);
            return redirect()->to(base_url('cargo'));
        } else {
            echo '<script> 
            alert ("Registro exitoso","aja","sds");
            window.location="cargo";
            </script>';
        }
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
            'nombre' => 'alpha_space|is_unique[act_marca.nombre]',
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
    window.location.href = "marca";
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
            'nombre' => 'alpha_space|is_unique[act_condicion.nombre]',
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
        window.location.href = "condicionActivo";
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
        $datoss['condicion'] = $cargo->find();
        $id = $_POST['id'];
        $val = $this->validate([
            'nombre' => 'required',
        ]);

        if ($_POST && $val) {
            $datos = [
                'nombre' => 'alpha_space|is_unique[resp_condicion.nombre_condicion]',
            ];

            $cargo->update($id, $datos);
            return redirect()->to(base_url('condicion'));
        }

        echo '<script> 
    alert ("Registro exitoso","aja","sds");
        window.location.href = "condicion";
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
            'nombre' => 'alpha_space',
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
        window.location.href = "tipo";
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
            'nombre' => 'alpha_space',
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
        window.location.href = "tipo";
    </script>';
    }
    public function zonaupdate($id = null)
    {
        $cargo = new Zona();
        $datos['zona'] = $cargo->find($id);

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('movimientos/editarzona', $datos);
    }

    public function updatezona()
    {
        $cargo = new Zona();
        $id = $_POST['id'];
        $val = $this->validate([
            'nombre' => 'alpha_space',
            'direccion' => 'alpha_space',
        ]);

        if ($_POST && $val) {
            $datos = [
                'nombre' => $_POST['nombre'],
                'direccion' => $_POST['direccion']

            ];

            $cargo->update($id, $datos);
            return redirect()->to(base_url('zona'));
        }
        echo '<script> 
    alert ("Registro exitoso","aja","sds");
        window.location.href = "zona";
    </script>';
    }
    public function ubicacionupdate($id = null)
    {
        $cargo = new ubicacion();
        $datos['ubicacion'] = $cargo->find($id);

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('movimientos/editarubicacion', $datos);
    }

    public function updateubicacion()
    {
        $cargo = new ubicacion();
        $id = $_POST['id'];
        $val = $this->validate([
            'sede' =>
            'alpha_space',
            'direccion' =>
            'alpha_space',
        ]);

        if ($_POST && $val) {
            $datos = [
                'sede' => $_POST['sede'],
                'direccion' => $_POST['direccion']
            ];

            $cargo->update($id, $datos);
            return redirect()->to(base_url('ubicacion'));
        }
        echo '<script> 
    alert ("Registro exitoso","aja","sds");
        window.location.href = "ubicacion";
    </script>';
    }
    public function activoupdate($id = null)
    {
        $cargo = new Activos();
        $datos['activo'] = $cargo->find($id);

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');

        return view('activos/editaractivo', $datos);
    }

    public function updateactivo()
    {
        $cargo = new Activos();
        $id = $_POST['id'];

        $datos = [
            'codigo' => $_POST['id'],
            //'marca' => $_POST['marca'],
            'modelo' => $_POST['modelo'],
            'serial' => $_POST['seria'],
            'condicion_act' => $_POST['condicion'],
            'tipo' => $_POST['tipo'],
            'descripcion' => $_POST['descripcion'],
            //  'observacion' => $_POST['observaciones'],
            'proveedor' => $_POST['proveedor'],
            'n_factura' => $_POST['factura'],
            'costo' => $_POST['costo'],
            'n_orden' => $_POST['orden'],
            'garantia_inicio' => $_POST['inicio'],
            'garantia_fin' => $_POST['fin'],
        ];

        $cargo->update($id, $datos);
        return redirect()->to(base_url('activos'));
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
        return $this->response->redirect(base_url('cargo'));
    }

    public function deletecon($id = null)
    {
        $condicion = new condicion();

        $condicion->where('id_condicion', $id)->delete($id);
        return $this->response->redirect(base_url('condicion'));
    }

    public function deleteresp($id = null)
    {
        $responsable = new Responsables();

        $responsable->where('cedula', $id)->delete($id);
        return $this->response->redirect(base_url('resp'));
    }
}
