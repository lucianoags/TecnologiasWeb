<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumnoModel extends Model
{
    protected $table = 'alumno';
    protected $primarykey = 'id';
    protected $allowedFields = ['nombre','apellido_1','apellido_2','correo','carrera','tipo','password'];
       
    public function getAlumnosEncargado(){
        $query = $this->db->query("
        SELECT a.id as id, a.nombre as nombre, a.apellido_1 as apellido, s.nombre as sede, c.nombre as carrera
        FROM alumno as a
        LEFT JOIN
        carrera as c
        ON a.carrera = c.id
        LEFT JOIN 
        sede as s
        ON c.sede = s.id
        ");
        $result = $query->getResult('array');
        return $result;
    }
}
?>