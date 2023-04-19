<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;



/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;
    protected $js = array();
    protected $css = array();

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    public function load($view, $page, $data)
    {

        $data['js'] = $this->js;
        $data['css'] = $this->css;


        echo view('templates/head', $data);
        echo view('templates/header');
        echo view('templates/sidebar');
        echo view("$view/$page");
        echo view('templates/content');        
        echo view('templates/footer');
    }

    public function setJs($js){
        if(is_array($js)){
            foreach ($js as $k => $v) {
               array_push($this->js, $v);
            }
        }else{
            array_push($this->js, $js);
        }
    }

    public function setCss($css){
        if(is_array($css)){
            foreach ($css as $k => $v) {
               array_push($this->css, $v);
            }
        }else{
            array_push($this->css, $css);
        }
    }

    public function setMessage($tipo = "warning", $mensagem = ""){
        $sessao = \Config\Services::session();
        $sessao->setFlashdata("mensagem", ["tipo"=>$tipo, "mensagem"=>$mensagem]);
    }
 


}
