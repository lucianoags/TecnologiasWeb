<?php

namespace App\Models;

use CodeIgniter\Model;

class DependenciaModel extends Model
{
    protected $table = 'dependencia';
    protected $primarykey = 'id';
    protected $allowedFields = ['aforo','nombre'];
       

    public function getDependencias(){
        $query = $this->db->query("Select * from dependencia");
        $result = $query->getResult();
        return $result;
    }

}
?>