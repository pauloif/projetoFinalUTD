<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    // protected $DBGroup = "default";
    protected $table      = 'users';
    protected $primaryKey = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = [ 'id_user', 'user_name','user_email','user_password','user_cpf','user_phone','user_adddress','user_type','user_created_in'];

}

