<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfesorModel extends Model
{
    protected $table = 'profesor';
    protected $primarykey = 'id';
    protected $allowedFields = ['nombre','apellido_1','apellido_2','correo','carrera','tipo','password'];

    public function getProfesoresAdministrador(){
        $query = $this->db->query("
        SELECT profesor.nombre as nombre_profesor, profesor.apellido_1, profesor.correo, carrera.nombre as nombre_carrera FROM profesor
        LEFT JOIN
        carrera 
        ON profesor.carrera = carrera.id
        ");
        $result = $query->getResult('array');
        return $result;
    }
       
}


?>