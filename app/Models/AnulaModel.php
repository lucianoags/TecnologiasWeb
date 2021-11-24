<?php

namespace App\Models;

use CodeIgniter\Model;

class AnulaModel extends Model
{
    protected $table      = 'anula';
    protected $primaryKey = 'id';
    protected $allowedFields = ['evento','profesor', 'correo', 'nombre', 'tipo'];

   /* public function getCarreras(){
        $query = $this->db->query("Select * from carrera");
        $result = $query->getResult();
        return $result;
        }
    */
    

}
?>