<?php

namespace App\Models;

use CodeIgniter\Model;

class ModuloModel extends Model
{
    protected $table      = 'modulo';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'carrera','plan_comun', 'correo', 'sede'];

    public function getNombre(){
        $query = $this->db->query("Select nombre from carrera");
        $result = $query->getResult();
        return $result;
    }

    public function getModulosDeAlumno($id){
        $query = $this->db->query("Select * from modulo INNER JOIN modulo_estudiante ON modulo_estudiante.modulo = modulo.id WHERE modulo_estudiante.estudiante = ".$id."");
        $result = $query->getResult();
        return $result;
    }
}
?>