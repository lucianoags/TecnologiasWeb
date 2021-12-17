<?php

namespace App\Models;

use CodeIgniter\Model;

class EventoModel extends Model
{
    protected $table = 'evento';
    protected $primarykey = 'id';
    protected $allowedFields = ['fecha','bloque','dependencia','modulo','estado'];
       

    public function anularEvento($id){
        $query = $this->db->query("
        UPDATE evento
        SET estado = 2
        WHERE id = ".$id
        );
        //$result = $query->geResult();
        //return $result;
    }

    public function aprobarEvento($id){
        $query = $this->db->query("
        UPDATE evento
        SET estado = 1
        WHERE id = ".$id
        );
        //$result = $query->geResult();
        //return $result;
    }

    public function modificarSala($id, $sala){
        $query = $this->db->query("UPDATE evento SET dependencia = ".$sala." WHERE id = ".$id.";");
        return $query;
    }

}
?>