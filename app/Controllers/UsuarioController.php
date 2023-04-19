<?php

namespace App\Controllers;

use App\Libraries\Datatables; // Datatables
use App\Controllers\LoginController;
use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    
    private $model;
    
    public function __construct()
    {
        $this->model = new UsuarioModel();
    }

    public function listUsuarios()
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

        $data['title'] = "Lista de Usuários";
        $data['result'] = $this->model->find();

        # Carregamento da view...
        echo $this->load("usuarios", "list", $data);    
    
    
    }

    public function editUsuarios($id)
    {
        $data['title'] = "Edição de Usuários";
        $data['result'] = $this->model->find($id);        
        echo $this->load("usuarios", "update", $data); 
    }

    public function insertUsuarios(){

        $data['title'] = "Inserção de Usuários";
       
        # Carregamento da view...
        echo $this->load("usuarios", "insert", $data); 
    }

    public function save(){

        $request = \Config\Services::request();

        $data = $request->getPost();

        //var_dump($data);
        $this->model->save($data);

        $this->setMessage("success", "Usuário inserido/atualizado com sucesso!"); 

        return redirect()->to('usuarios/lista');

    }

    public function deleteUsuario(){
        
        $request = \Config\Services::request();
        $data = $request->getPost();
        //$id = $data['id'];
        $this->model->delete($data['id']);
        $this->setMessage("success", "Usuário excluído com sucesso!"); 
        return redirect()->to('usuarios/lista');
    }

}


