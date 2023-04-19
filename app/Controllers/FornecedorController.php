<?php

namespace App\Controllers;

use App\Libraries\Datatables; // Datatables
use App\Controllers\LoginController;
use App\Models\FornecedorModel;

class FornecedorController extends BaseController
{
    
    private $model;
    
    public function __construct()
    {
        $this->model = new FornecedorModel();
    }

    public function listFornecedores()
    {
        //$data['result'] = $this->model->find();        
 
        
        # Verifica se existe alguem logado
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }
       	
        # Objetos criados para o controlador atual
        $datatable = new DataTables();

                
        # Rendereização dos escripts de JS E CSS
        $this->setJs($datatable->render()['js']);
        $this->setCss($datatable->render()['css']);
        $this->setJs(base_url() . "/public/services/example/index.js");

        $data['title'] = "Lista de Fornecedores";
        $data['result'] = $this->model->find();

        # Carregamento da view...
        echo $this->load("fornecedores", "list", $data);    
    
    
    }

    public function editFornecedor($id)
    {
        $data['title'] = "Edição de Fornecedores";
        $data['result'] = $this->model->find($id);        
        echo $this->load("fornecedores", "update", $data); 
    }

    public function insertFornecedor(){

        $data['title'] = "Inserção de Fornecedores";
       
        # Carregamento da view...
        echo $this->load("fornecedores", "insert", $data); 
    }

    public function save(){

        $request = \Config\Services::request();

        $data = $request->getPost();

        //var_dump($data);
        $this->model->save($data);

        $this->setMessage("success", "Fornecedor inserido/atualizado com sucesso!"); 

        return redirect()->to('fornecedores/lista');

    }

    public function deleteFornecedor(){
        
        $request = \Config\Services::request();
        $data = $request->getPost();
        //$id = $data['id'];
        $this->model->delete($data['id']);
        $this->setMessage("success", "Fornecedor excluído com sucesso!"); 
        return redirect()->to('fornecedores/lista');
    }

}


