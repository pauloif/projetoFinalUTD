<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

# Rotas do módulo de Dashboard
$routes->get('/', 'Dashboard::index'); 


# Usuários 
// $routes->get('/usuarios',"UsuariosController::lista");
// $routes->get('/usuarios/adicionar',"UsuariosController::adicionar");


# Rotas do módulo de Contratos
$routes->get('/setores',"SetoresController::index"); 
$routes->get('/setores/adicionar',"SetoresController::adicionarSetor");

# Rotas do módulo de Perfil
$routes->get('/perfil', 'PerfilController::index');

//ROTAS DE SISTEMA
$routes->get('/logout', 'LoginController::logout'); 
$routes->post('/logar', 'LoginController::logar'); 
$routes->get('/logar', 'LoginController::logar'); 

######## ROTA DE PRODUTOS ########
$routes->get('/produtos/lista', 'ProductController::listProducts');
$routes->get('/produtos/inserir', 'ProductController::insertProduct');
$routes->get('/produtos/editar/(:any)', 'ProductController::editProduct/$1');
$routes->post('/produtos/deletar', 'ProductController::deleteProduct');
$routes->post('/produtos/salvar', 'ProductController::save');
$routes->resource('ProductsApi');

######## ROTA DE FORNECEDORES ########
$routes->get('/fornecedores/lista', 'FornecedorController::listFornecedores');
$routes->get('/fornecedores/inserir', 'FornecedorController::insertFornecedor');
$routes->get('/fornecedores/editar/(:any)', 'FornecedorController::editFornecedor/$1');
$routes->post('/fornecedores/deletar', 'FornecedorController::deleteFornecedor');
$routes->post('/fornecedores/salvar', 'FornecedorController::save');
$routes->resource('FornecedoresApi');

######## ROTA DE USUÁRIOS ########
$routes->get('/usuarios/lista', 'UsuarioController::listUsuarios');
$routes->get('/usuarios/inserir', 'UsuarioController::insertUsuarios');
$routes->get('/usuarios/editar/(:any)', 'UsuarioController::editUsuarios/$1');
$routes->post('/usuarios/deletar', 'UsuarioController::deleteUsuario');
$routes->post('/usuarios/salvar', 'UsuarioController::save');
$routes->resource('UsuariosApi');


//$routes->get('datatables', 'Site::generateDatatable');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
