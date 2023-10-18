<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Clientes_model;

class Clientes extends ResourceController {
    protected $modelName = 'App\Models\Clientes_model';
    protected $format = 'json';

    public function index() {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null) {
        $cliente = $this->model->find($id);
        if (!$cliente) {
            return $this->failNotFound('Cliente não encontrado.');
        }
        return $this->respond($cliente);
    }

    public function create() {
        $data = $this->request->getJSON();
        if (empty($data->parametros->cpf_cnpj) || empty($data->parametros->nome_razao_social)) {
            return $this->failValidationError('CPF/CNPJ e Nome/Razão Social são obrigatórios.');
        }
        $cliente = $this->model->insert($data->parametros);
        return $this->respondCreated($cliente);
    }

    public function update($id = null) {
        $data = $this->request->getJSON();
        $cliente = $this->model->find($id);
        if (!$cliente) {
            return $this->failNotFound('Cliente não encontrado.');
        }
        $this->model->update($id, $data->parametros);
        return $this->respondUpdated(['message' => 'Cliente atualizado com sucesso']);
    }

    public function delete($id = null) {
        $cliente = $this->model->find($id);
        if (!$cliente) {
            return $this->failNotFound('Cliente não encontrado.');
        }
        $this->model->delete($id);
        return $this->respondDeleted(['message' => 'Cliente deletado com sucesso']);
    }
}
