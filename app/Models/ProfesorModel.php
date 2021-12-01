<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfesorModel extends Model
{
    protected $table = 'profesor';
    protected $primarykey = 'id';
    protected $allowedFields = ['nombre','apellido_1','apellido_2','correo','carrera','tipo','password'];
       
}
?>