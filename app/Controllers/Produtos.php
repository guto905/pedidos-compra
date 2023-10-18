<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Produtos_model;

class Produtos extends ResourceController {
    protected $modelName = 'App\Models\Produtos_model';
    protected $format = 'json';

    public function index() {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null) {
        $produto = $this->model->find($id);
        if (!$produto) {
            return $this->failNotFound('Produto não encontrado.');
        }
        return $this->respond($produto);
    }

    public function create() {
        $data = $this->request->getJSON();
        if (empty($data->parametros->nome) || empty($data->parametros->preco)) {
            return $this->failValidationError('Nome e Preço são obrigatórios.');
        }
        $produto = $this->model->insert($data->parametros);
        return $this->respondCreated($produto);
    }

    public function update($id = null) {
        $data = $this->request->getJSON();
        $produto = $this->model->find($id);
        if (!$produto) {
            return $this->failNotFound('Produto não encontrado.');
        }
        $this->model->update($id, $data->parametros);
        return $this->respondUpdated(['message' => 'Produto atualizado com sucesso']);
    }

    public function delete($id = null) {
        $produto = $this->model->find($id);
        if (!$produto) {
            return $this->failNotFound('Produto não encontrado.');
        }
        $this->model->delete($id);
        return $this->respondDeleted(['message' => 'Produto deletado com sucesso']);
    }
}
