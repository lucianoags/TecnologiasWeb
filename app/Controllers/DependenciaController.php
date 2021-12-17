<?php

namespace App\Controllers;
use App\Models\DependenciaModel;

class DependenciaController extends BaseController
{
    public function eliminarDependencia()
    {
        $request = $this->request;
        $id = $request->getVar('id');

        $dependenciaModel = new DependenciaModel();
        $respuesta = $dependenciaModel->eliminarDependencia($id);

        echo $id;
    }

    public function modificarDependencia()
    {
        $request = $this->request;
        $id = $request->getVar('id');
        $nombre = $request->getVar('nombre');
        $aforo = $request->getVar('aforo');

        $dependenciaModel = new DependenciaModel();
        $respuesta = $dependenciaModel->modificarDependencia($id, $nombre, $aforo);

        echo $id;
    }
}
