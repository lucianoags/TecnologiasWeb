<?php

namespace App\Controllers;
use App\Models\EventoModel;

class EventoController extends BaseController
{
    public function anularEvento()
    {
        $request = $this->request;
        $id = $request->getVar('id');

        $eventoModel = new EventoModel();
        $respuesta = $eventoModel->anularEvento($id);

        echo $id;
    }
}
