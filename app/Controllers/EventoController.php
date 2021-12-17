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

    public function aprobarEvento()
    {
        $request = $this->request;
        $id = $request->getVar('id');

        $eventoModel = new EventoModel();
        $respuesta = $eventoModel->aprobarEvento($id);

        echo $id;
    }

    public function modificarDependenciaEvento(){
        $request = $this->request;
        $id = $request->getVar('id');
        $sala = $request->getVar('sala');
        $eventoModel = new EventoModel();
        $eventoModel->modificarSala($id, $sala);


        // echo $id.$sala;

        // $eventoModel->modificarSala($id, $sala);
        // $eventoModel->where('id', $id);
        // $eventoModel->update();
        
    }

}
