<?php

namespace App\Models;

use CodeIgniter\Model;

class EncargadoModel extends Model
{
    protected $table = 'encargado';
    protected $primarykey = 'id';
    protected $allowedFields = ['nombre','apellido_1','apellido_2','correo','carrera','tipo','password'];
       
}
?>