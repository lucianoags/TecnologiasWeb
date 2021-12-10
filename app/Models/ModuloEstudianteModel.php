<?php

namespace App\Models;

use CodeIgniter\Model;

class ModuloEstudianteModel extends Model
{
    protected $table = 'modulo_estudiante';
    protected $primarykey = 'id';
    protected $allowedFields = ['estudiante','modulo'];
       

    public function getModulosAlumno($id){
        $query = $this->db->query("Select * from modulo_estudiante where estudiante = ".$id);
        $result = $query->getResult();
        return $result;
    }

}
?>