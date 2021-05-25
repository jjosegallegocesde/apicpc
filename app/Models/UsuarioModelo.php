<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModelo extends Model{
   
    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'correo', 'password'];
    


}