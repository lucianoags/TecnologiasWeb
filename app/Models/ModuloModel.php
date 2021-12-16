<?php

namespace App\Models;

use CodeIgniter\Model;

class ModuloModel extends Model
{
    protected $table = 'modulo';
    protected $primarykey = 'id';
    protected $allowedFields = ['nombre','plan_comun','sede','carrera','seccion','profesor'];

    public function getModulosAlumno($id){

        $string_query = "";

        if (count($id) == 1){
            
            $string_query = "Select * from modulo where id = ".$id[0];
        
        } elseif (count($id) > 1) {
            
            $string_query = "Select * from modulo where id = ".$id[0];
            
            for ($c = 0; $c < count($id); $c++) {
                if ($c == 0) {

                } else {
                    $string_query .= " or id =".$id[$c];
                }
            }
        
        } else {

        }

        $query = $this->db->query($string_query);
        $result = $query->getResult('array');
        return $result;

    }

    public function getModuloAlumno($id){
        $query = $this->db->query("Select * from modulo where id = ".$id);
        $result = $query->getResult('array');
        return $result;
    }

    public function getAllModulos(){
        $query = $this->db->query("Select * from modulo");
        $result = $query->getResult('array');
        return $result;
    }

    public function getModulosAdministrador(){
        $query = $this->db->query("
        Select m.nombre as nombre_modulo, c.nombre as nombre_carrera, s.nombre as nombre_sede, m.plan_comun
        from modulo as m
        LEFT JOIN
        carrera as c
        ON m.carrera = c.id
        LEFT JOIN
        sede AS s
        ON m.sede = s.id
        ");
        $result = $query->getResult('array');
        return $result;

    }

    public function getModulosEventos(){ #Modulos de encargado
        $query = $this->db->query("
        SELECT m.nombre as nombre_modulo, e.fecha as fecha, e.bloque as bloque, d.nombre as sala,  d.aforo as aforo, e.estado as estado
        FROM evento as e
        LEFT JOIN
        dependencia as d
        ON e.dependencia = d.id
        LEFT JOIN
        modulo as m
        ON e.modulo = m.id
        ");
        $result = $query->getResult('array');
        return $result;
    }
}
?>