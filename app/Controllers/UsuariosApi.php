<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UsuarioModel;

class UsuariosApi extends ResourceController
{
    use ResponseTrait;

    
    public function index()
    {
        $model = new UsuarioModel();
        $data = $model->findAll();
        return $this->respond($data);
    }

    // lista 
    public function show($id = null)
    {
        $model = new UsuarioModel();
        $data = $model->getWhere(['id_user' => $id])->getResult();

        if ($data) {
            return $this->respond($data);
        }

        return $this->failNotFound('Nenhum dado encontrado com id ' . $id);
    }

    // adiciona 
    public function create()
    {
        $model = new UsuarioModel();
        $data = $this->request->getJSON();

        if ($model->insert($data)) {
            $response = [
                'status'   => 201,
                'error'    => null,
                'messages' => [
                    'success' => 'Dados salvos'
                ]
            ];
            return $this->respondCreated($response);
        }

        return $this->fail($model->errors());
    }

    // atualiza 
    public function update($id = null)
    {
        $model = new UsuarioModel();
        $data = $this->request->getJSON();

        if ($model->update($id, $data)) {
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Dados atualizados'
                ]
            ];
            return $this->respond($response);
        };

        return $this->fail($model->errors());
    }

    // deleta
    public function delete($id = null)
    {
        $model = new UsuarioModel();
        $data = $model->find($id);

        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Dados removidos'
                ]
            ];
            return $this->respondDeleted($response);
        }

        return $this->failNotFound('Nenhum dado encontrado com id ' . $id);
    }
}
