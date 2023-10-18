<?php
namespace App\Models;

use CodeIgniter\Model;

class Clientes_model extends Model {
    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['cpf_cnpj', 'nome_razao_social', 'endereco'];
}
