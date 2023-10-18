<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Pedidos_model;

class Pedidos extends ResourceController {
    protected $modelName = 'App\Models\Pedidos_model';
    protected $format = 'json';

    public function index() {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null) {
        $pedido = $this->model->find($id);
        if (!$pedido) {
            return $this->failNotFound('Pedido não encontrado.');
        }
        return $this->respond($pedido);
    }

    public function create() {
        $data = $this->request->getJSON();
        if (empty($data->parametros->status) || !in_array($data->parametros->status, ['Em Aberto', 'Pago', 'Cancelado'])) {
            return $this->failValidationError('Status inválido. Deve ser "Em Aberto", "Pago" ou "Cancelado".');
        }
        $pedido = $this->model->insert($data->parametros);
        return $this->respondCreated($pedido);
    }

    public function update($id = null) {
        $data = $this->request->getJSON();
        $pedido = $this->model->find($id);
        if (!$pedido) {
            return $this->failNotFound('Pedido não encontrado.');
        }
        if (!in_array($data->parametros->status, ['Em Aberto', 'Pago', 'Cancelado'])) {
            return $this->failValidationError('Status inválido. Deve ser "Em Aberto", "Pago" ou "Cancelado".');
        }
        $this->model->update($id, $data->parametros);
        return $this->respondUpdated(['message' => 'Pedido atualizado com sucesso']);
    }

    public function delete($id = null) {
        $pedido = $this->model->find($id);
        if (!$pedido) {
            return $this->failNotFound('Pedido não encontrado.');
        }
        $this->model->delete($id);
        return $this->respondDeleted(['message' => 'Pedido deletado com sucesso']);
    }
}
