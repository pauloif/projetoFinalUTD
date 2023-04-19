<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id_user';
    //protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;
    protected $allowedFields = ['id_user','user_name','user_email','user_password','user_cpf','user_phone','user_type','user_adddress','user_created_in'];
}
