<?php

namespace App\Models;

use CodeIgniter\Model;

class BloqueModel extends Model
{
    protected $table = 'bloque';
    protected $primarykey = 'id';
    protected $allowedFields = ['nombre'];
       

    public function getBloques(){
        $query = $this->db->query("Select * from bloque");
        $result = $query->getResult();
        return $result;
    }

}
?>