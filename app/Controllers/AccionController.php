<?php

namespace App\Controllers;

use App\Models\Activos;
use CodeIgniter\Controller;
use App\Models\cargo;
use App\Models\Condicion;
use App\Models\Condicion_act;
use App\Models\Deshabilitaresp;
use App\Models\Desincorporacion;
use App\Models\Detalles;
use App\Models\Marca;
use App\Models\Motivo;
use App\Models\Movimientos;
use App\Models\Responsables;
use App\Models\Tipo;
use App\Models\ubicacion;
use App\Models\Zona;
use DateTime;

class AccionController extends Controller
{
    /*
    /////////////////////////////////////////////////////////////////////////////////////////
    ! INICIO DE FUNCIONES DE GUARDAR DATOS
    */
    public function save()
    {

        $validation = $this->validate([
            'nombre' => 'alpha_space|string',

        ]);

        if ($_POST && $validation) {
            $datos = [
                'nombre_cargo' => $_POST['nombre']

            ];

            $cargo = new Cargo();
            $cargo->insertar($datos);
            return $this->response->redirect(site_url('cargo'));
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
            'nombre' => 'alpha_space|string',
        ]);

        if ($_POST && $validation) {
            $datos = [
                'nombre_condicion' => $_POST['nombre']
            ];
            $condicion = new Condicion();
            $condicion->insertar($datos);
            return $this->response->redirect(site_url('condicion'));
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
            'nombre' => 'alpha_space|string'
        ]);

        if ($_POST && $validation) {
            $datos = [
                'nombre' => $_POST['nombre']
            ];
            $condicion = new Condicion_act();
            $condicion->insertar($datos);
            return $this->response->redirect(site_url('condicionActivo'));
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
            'cedula' => 'numeric|is_unique[resp_responsables.cedula]',
            'nombre' => 'alpha_space|string',
            'apellido' => 'alpha_space|string',
            'telefono' => 'is_natural',
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
            return $this->response->redirect(site_url('resp'));
        } else {
            echo '<script> 
            alert ("Registross exitoso");
            window.location="resp";
            </script>';
        }
    }
    public function saveactivo()
    {
        $validation = $this->validate([
            'codigo' => 'numeric|is_unique[act_activos.codigo]',
            'proveedor' => 'alpha_space',
            'factura' => 'is_natural',
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
            return $this->response->redirect(site_url('activos'));
        } else {
            echo '<script> 
            alert ("Registross exitoso");
            window.location="activos";
            </script>';
        }
    }
    public function savemarca()
    {
        $validation = $this->validate([
            'nombre' => 'alpha_space|string',
        ]);
        if ($_POST && $validation) {
            $datos = [
                'nombre' => $_POST['nombre']
            ];
            $marca = new Marca();
            $marca->insertar($datos);
            return $this->response->redirect(site_url('marca'));
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
            'nombre' => 'alpha_space|string',
            'direccion' => 'alpha_space|string',
        ]);
        if ($_POST && $validation) {
            $datos = [
                'nombre' => $_POST['nombre'],
                'direccion' => $_POST['direccion']
            ];
            $marca = new Zona();
            $marca->insertar($datos);
            return $this->response->redirect(site_url('zona'));
        } else {
            echo '<script> 
            alert ("Registross exitoso","aja","sds");
            window.location="zona";
            </script>';
        }
    }
    public function savemov()
    {
        $validation = $this->validate([
            'codigo' => 'numeric'
            // 'direccion' => 'alpha_space|string',
        ]);
        if ($_POST && $validation) {
            $datos = [
                'codigo' => $_POST['codigo'],
                'zona' => $_POST['zona'],
                'ubicacion' => $_POST['ubicacion'],
                'motivo' => $_POST['motivo'],
                'fecha' => $_POST['fecha'],
                'observaciones' => 'nada',
                'id_mov' => ['id_movimientos'],
                'cedula' => $_POST['resp']
            ];
            $mov = new Movimientos();
            $mov->insertar($datos);




            return $this->response->redirect(site_url('movimientos'));
        } else {
            echo '<script> 
            alert ("Registross exitoso","aja","sds");
            window.location="movimientos";
            </script>';
        }
    }

    public function saveubi()
    {

        $validation = $this->validate([
            'nombre' => 'alpha_space|string',
            'direccion' => 'alpha_space|string',
        ]);
        if ($_POST && $validation) {
            $datos = [
                'sede' => $_POST['nombre'],
                'direccion' => $_POST['direccion']
            ];
            $marca = new ubicacion();
            $marca->insertar($datos);
            return $this->response->redirect(site_url('ubicacion'));
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
            'nombre' => 'alpha_space|string',
        ]);
        if ($_POST && $validation == true) {
            $datos = [
                'nombre' => $_POST['nombre'],
            ];
            $tipo = new Tipo();
            $tipo->insertar($datos);
            return $this->response->redirect(site_url('tipo'));
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
            'nombre' => 'alpha_space|string',

        ]);
        if ($_POST && $validation) {
            $datos = [
                'nombre' => $_POST['nombre'],
            ];
            $tipo = new Motivo();
            $tipo->insertar($datos);
            return $this->response->redirect(site_url('motivo'));
        } else {
            echo '<script> 
            alert ("Registross exitoso","aja","sds");
            window.location="motivo";
            </script>';
        }
    }

    public function desresp($id = null)
    {

        $db      = \Config\Database::connect();

        $builder = $db->table('resp_responsables resp')->where('cedula', $id);
        $builder->select('resp.*');
        $builder = $db->query($builder->getCompiledSelect())->getRow();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');
        $datos['x'] = $builder;

        return view('responsables/deshabilitar', $datos);
    }
    public function disableresp()
    {
        $id = $_POST['id'];
        $db      = \Config\Database::connect();
        $builder = $db->table('resp_responsables resp')->where('cedula', $id);
        $builder->set('estado', 0);
        $builder->update();

        $datos = [
            'cedula_resp' => $_POST['id'],
            'motivo' => $_POST['motivo'],
        ];

        $cargo = new Deshabilitaresp();
        $cargo->insertar($datos);
        return $this->response->redirect(site_url('resp'));

        echo '<script> 
            alert ("Registro exitoso","aja","sds");
            window.location="resp";
            </script>';
    }
    public function desact($id = null)
    {

        $db      = \Config\Database::connect();

        $builder = $db->table('act_activos act')->where('codigo', $id);
        $builder->select('act.*');
        $builder = $db->query($builder->getCompiledSelect())->getRow();
        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');
        $datos['x'] = $builder;

        return view('activos/desincorporar', $datos);
    }
    public function disableact()
    {
        $id = $_POST['id'];
        $db      = \Config\Database::connect();
        $builder = $db->table('act_activos act');
        $datos = $builder->where('codigo', $id);
        $builder->set('estado', 0)->set('asignado', 0)->update();


        $datos = [
            'codigo_activo' => $_POST['id'],
            'motivo' => $_POST['motivo'],
        ];

        $cargo = new Desincorporacion();
        $cargo->insertar($datos);
        return $this->response->redirect(site_url('activos'));

        echo '<script> 
            alert ("Registro exitoso","aja","sds");
            window.location="resp";
            </script>';
    }
    /*
    ! FIN DE FUNCIONES DE GUARDAR DATOS
    //////////////////////////////////////////////////////////////////////////////////////////
  */

    /*
    //////////////////////////////////////////////////////////////////////////////////////////
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
            'nombre' => 'alpha_space|string',
        ]);

        if ($_POST && $val) {
            $datos = [
                'nombre_cargo' => $_POST['nombre']

            ];

            $cargo->update($id, $datos);
            return redirect()->to(site_url('cargo'));
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
            'nombre' => 'alpha_space|string',
        ]);

        if ($_POST && $val) {
            $datos = [
                'nombre' => $_POST['nombre']

            ];

            $cargo->update($id, $datos);
            return redirect()->to(site_url('marca'));
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
            'nombre' => 'alpha_space|string',
        ]);

        if ($_POST && $val) {
            $datos = [
                'nombre' => $_POST['nombre']

            ];

            $cargo->update($id, $datos);
            return redirect()->to(site_url('condicionActivo'));
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
        $id = $_POST['id'];
        $val = $this->validate([
            'nombre' => 'alpha_space|string',
        ]);

        if ($_POST && $val) {
            $datos = [
                'nombre_condicion' => $_POST['nombre'],
            ];

            $cargo->update($id, $datos);
            return redirect()->to(site_url('condicion'));
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
            'nombre' => 'alpha_space|string',
        ]);

        if ($_POST && $val) {
            $datos = [
                'nombre' => $_POST['nombre'],
                'id_tipo' => $_POST['id'],

            ];

            $cargo->update($id, $datos);
            return redirect()->to(site_url('tipo'));
        }

        echo '<script> 
    alert ("Registro exitoso","aja","sds");
        window.location.href = "tipo";
    </script>';
    }
    public function respupdate($id = null)
    {
        $db      = \Config\Database::connect();

        $builder = $db->table('resp_responsables resp')->where('cedula', $id);

        $builder->join('resp_condicion c', 'c.id_condicion = resp.condicion_resp');
        $builder->join('resp_cargo ca', 'ca.id_cargo = resp.cargo_resp');
        $builder->join('gerencias g', 'g.id = resp.gerencia');
        $builder->join('divisiones d', 'd.id_div = resp.division', 'right');
        $builder->select('resp.*, c.nombre_condicion, g.nombre as nombre_gerencia , ca.nombre_cargo, d.nombre_div');
        //$data = $builder->getCompiledSelect();
        $builder = $db->query($builder->getCompiledSelect())->getRow();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');
        $datos['x'] = $builder;

        return view('responsables/editarresp', $datos);
    }

    public function updateresp()
    {
        $resp = new Responsables();
        $id = $_POST['id'];
        $val = $this->validate([
            'nombre' => 'alpha_space|string',
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
            return redirect()->to(site_url('resp'));
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
            'nombre' => 'alpha_space|string',
            'direccion' => 'alpha_space|string',
        ]);

        if ($_POST && $val) {
            $datos = [
                'nombre' => $_POST['nombre'],
                'direccion' => $_POST['direccion']

            ];

            $cargo->update($id, $datos);
            return redirect()->to(site_url('zona'));
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
            'sede' => 'alpha_space|string',
            'direccion' => 'alpha_space|string',
        ]);

        if ($_POST && $val) {
            $datos = [
                'sede' => $_POST['sede'],
                'direccion' => $_POST['direccion']
            ];
            $cargo->update($id, $datos);
            return redirect()->to(site_url('ubicacion'));
        }
        echo '<script> 
    alert ("Registro exitoso","aja","sds");
        window.location.href = "ubicacion";
    </script>';
    }

    public function activoupdate($id = null)
    {
        $db      = \Config\Database::connect();

        $builder = $db->table('act_activos act');

        $builder->join('act_marca m', 'm.id_marca = act.marca');
        $builder->join('act_condicion c', 'c.id_activo_condicion = act.condicion_act');
        $builder->join('act_tipo t', 't.id_tipo = act.tipo');
        $builder->select('act.*, m.nombre as nombre_marca, c.nombre as nombre_condicion , t.nombre as nombre_tipo')->where('codigo', $id);

        $builder = $db->query($builder->getCompiledSelect())->getRow();

        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');
        $datos['style'] = view('templates/style');
        $datos['x'] = $builder;

        return view('activos/editaractivo', $datos);
    }

    public function updateactivo()
    {
        $cargo = new Activos();
        $id = $_POST['id'];

        $datos = [
            'codigo' => $_POST['id'],
            'marca' => $_POST['marca'],
            'modelo' => $_POST['modelo'],
            'serial' => $_POST['seria'],
            'condicion_act' => $_POST['condicion'],
            'tipo' => $_POST['tipo'],
            'descripcion' => $_POST['descripcion'],
            'observacion' => $_POST['observacion'],
            'proveedor' => $_POST['proveedor'],
            'n_factura' => $_POST['factura'],
            'costo' => $_POST['costo'],
            'n_orden' => $_POST['orden'],
            'garantia_inicio' => $_POST['inicio'],
            'garantia_fin' => $_POST['fin'],
        ];

        $cargo->update($id, $datos);
        return redirect()->to(site_url('activos'));
    }
    /*
    ! FIN DE FUNCIONES DE EDITAR DATOS
    ------------------------------------------------------------------------------------------
    */

    public function loginn()
    {
        return $this->response->redirect(site_url('index'));
    }
}
