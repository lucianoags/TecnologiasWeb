<?php

namespace App\Controllers;
use App\Models\DependenciaModel;

class DependenciaController extends BaseController
{
    public function eliminarDependencia($id)
    {
        //$request = $this->request;
        //$id = $request->getVar('id');

        $dependenciaModel = new DependenciaModel();
        $respuesta = $dependenciaModel->eliminarDependencia($id);

        echo $id;
    }
}
