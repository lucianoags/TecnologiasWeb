<?php
namespace App\Controllers;

use App\Models\AlumnoModel;
use App\Models\ProfesorModel;
use App\Models\ModuloModel;
use App\Models\DependenciaModel;
use App\Models\BloqueModel;
use App\Models\EncargadoModel;
use App\Models\EventoModel;


class Profesor extends BaseController{
	protected $helpers = [];
	protected $db;

	public function inscribirModulos(){
        $request = $this->request; 
        $id = $request->getVar('modulo');

        $moduloModel = new ModuloModel();
		$data_model = $moduloModel->where('id', $id)->first();

        $data['modulo'] = $data_model;

        $dependenciaModel = new DependenciaModel();
        $dependencias = $dependenciaModel->getDependencias();
        $data['dependencias'] = $dependencias;

        $bloqueModel = new BloqueModel();
        $bloques = $bloqueModel->getBloques();
        $data['bloques'] = $bloques;

        return view('inscripcionProfesor', $data);
        //return redirect()->to('http://localhost/TecnologiasWeb/public/login'); 

    }

    public function inscribirEvento(){

        $eventoModel = new EventoModel();

        $request = $this->request;
        $modulo = $request->getVar('modulo'); 
        $sala = $request->getVar('sala');
        $fecha = $request->getVar('fecha');
        $bloque = $request->getVar('bloque');
        

        if (isset($sala)){
            // If si el valor de sala se acepta, no es vacío
            if ($sala != ""){
                echo $sala."-".$modulo."-".$fecha."-".$bloque;
            } else {
                echo "Nada";
            }
        } 


        $data = [
            'fecha' => $fecha,
            'bloque'  => $bloque,
            'dependencia'  => $sala,
            'modulo'  => $modulo,
            'estado'  => 'Pendiente',
        ];
        
        

        try {
            $eventoModel->insert($data);
        } catch (\Exception $e) {
            echo 'Error al insertar: ',  $e->getMessage(), "\n";
        }
        
    }

}