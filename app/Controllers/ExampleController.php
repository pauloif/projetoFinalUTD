<?php

namespace App\Controllers;


use App\Libraries\Datatables; // Datatables
use App\Controllers\LoginController;
use App\Models\UsuariosModel;
use App\Models\ExampleModel;
//use CodeIgniter\I18n\Time;
use \DateTime;


class ExampleController extends BaseController
{
    public $model;

    public function __construct()
    {
        $this->model = new ExampleModel();
    }

    #CARREGA TELA DE ARRANJOS
    public function exampleMethod()
    {

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

        $data['title'] = "Tabela Examplo";

        # Carregamento da view...
        echo $this->load("pages/examples", "tabelaExamplo", $data);
    }

    

}

