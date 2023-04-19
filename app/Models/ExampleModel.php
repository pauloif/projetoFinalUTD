<?php

namespace App\Models;

use CodeIgniter\Model;

class ExampleModel extends Model
{
    protected $DBGroup = "default";
    protected $table      = 'usuarios';
    protected $primaryKey = 'ID_USER';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = [ 'ID_USER', 'USER_NAME','USER_EMAIL','USER_PASSWORD','USER_FUNCTIONS','USER_CREATED'];

}

