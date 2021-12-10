<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'id';
    protected $allowedFields = ['apellido_1','apellido_2', 'correo', 'nombre', 'tipo'];

   /* public function getCarreras(){
        $query = $this->db->query("Select * from carrera");
        $result = $query->getResult();
        return $result;
    }
    */

}
?>