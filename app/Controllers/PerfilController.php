<?php

namespace App\Controllers;

use App\Libraries\Datatables; // Datatables
use App\Controllers\LoginController;
use App\Models\RelatoriosModel;
use App\Models\LoginModel;
use CodeIgniter\I18n\Time;

class PerfilController extends BaseController
{

    private $model = array();
    private $session = null;

    
    public function index()
    {

        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }

        # Objetos criados para o controlador atual
        $datatable = new DataTables();
        $login = new LoginModel();

        $dados = $login->where("ID_USER", $_SESSION['sistemacontratos']['id_usuario'])->findAll();

        # Retorno de dados para a view
        $data['title'] = "Perfil";
        $data['result'] = $dados;

        
        # Rendereização dos escripts de JS E CSS
        $this->setJs($datatable->render()['js']);
        $this->setCss($datatable->render()['css']);
        $this->setJs(base_url() . "/public/services/relatorios/relatorios.js");

        # Carregamento da view
        echo $this->load("perfil", "index", $data);

    }

    public function editar(){

        //print_r($_POST);
        if(!empty($_POST['USER_PASSWORD'])){
            $_POST['USER_PASSWORD'] = sha1($_POST['USER_PASSWORD']);
        }else{
            unset($_POST['USER_PASSWORD']);
        }

        $login = new LoginModel();
        # Atualizando os dados do elemento
        $login->update(['ID_USER'=>$_POST['ID_USER']], $_POST);


        $this->setMessage("success", "Dados alterados com sucesso!");

        return redirect()->to('/perfil/');


    }

}
