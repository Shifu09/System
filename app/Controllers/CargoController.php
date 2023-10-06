<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Cargo;
use App\Models\condicion;
use App\Models\Responsables;

class CargoController extends Controller
{


    public function delete($id = null)
    {
        $cargo = new Cargo();

        $cargo->where('id_cargo', $id)->delete($id);
        return $this->response->redirect(site_url('cargo'));
    }

    public function deletecon($id_con = null)
    {
        $condicion = new condicion();

        $condicion->where('id_condicion', $id_con)->delete($id_con);
        return $this->response->redirect(site_url('condicion'));
    }

    public function deleteresp($id_resp = null)
    {
        $responsable = new Responsables();

        $responsable->where('cedula', $id_resp)->delete($id_resp);
        return $this->response->redirect(site_url('resp'));
    }
}
