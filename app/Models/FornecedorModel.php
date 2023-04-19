<?php

namespace App\Models;

use CodeIgniter\Model;

class FornecedorModel extends Model
{
    protected $table      = 'fornecedores';
    protected $primaryKey = 'id_fornecedor';
    //protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;
    protected $allowedFields = ['id_fornecedor','fornecedor_nome','fornecedor_tipo','fornecedor_cnpj','fornecedor_telefone','fornecedor_email','fornecedor_endereco','fornecedor_created_in'];
    
}
