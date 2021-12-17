<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumnoModel extends Model
{
    protected $table = 'alumno';
    protected $primarykey = 'id';
    protected $allowedFields = ['nombre','apellido_1','apellido_2','correo','carrera','tipo','password'];


    public function getEventos($id) {
        $query = $this->db->query("
        SELECT m.nombre as modulo, e.fecha as fecha, e.bloque as bloque, d.nombre as sala, e.estado as estado
            FROM modulo_estudiante as me
            LEFT JOIN
            alumno as a 
            ON a.id = me.estudiante
            LEFT JOIN
            modulo as m 
            ON me.modulo = m.id
            LEFT JOIN 
            evento as e 
            ON m.id = e.modulo
            LEFT JOIN 
            dependencia as d
            ON d.id = e.dependencia
            WHERE 
            a.id = ".$id
        );
        $result = $query->getResult('array');
        return $result;
    }
       
}
?>