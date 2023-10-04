<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Cargo;
use App\Models\Condicion;
use App\Models\Responsables;

class AccionController extends Controller
{
    public function save()
    {
        $datos = [
            'nombre_cargo' => $_POST['nombre']
        ];
        $cargo = new Cargo();
        $cargo->insertar($datos);
        return $this->response->redirect(site_url('/cargo'));
    }

    public function savecon()
    {
        $datos = [
            'nombre_condicion' => $_POST['nombre']
        ];
        $condicion = new Condicion();
        $condicion->insertar($datos);
        return $this->response->redirect(site_url('/condicion'));
        echo "<script>alert('¡Ya existe un cargo con ese nombre o descripción!'); 
			window.location='./index.php';</script>";
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
        return $this->response->redirect(site_url('/resp'));
    }
}
