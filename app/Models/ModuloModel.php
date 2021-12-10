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
}
?>