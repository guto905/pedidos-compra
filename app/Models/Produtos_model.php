<?php
namespace App\Models;

use CodeIgniter\Model;

class Produtos_model extends Model {
    protected $table = 'produtos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'preco'];
}
