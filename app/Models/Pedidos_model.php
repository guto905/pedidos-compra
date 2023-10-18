<?php
namespace App\Models;

use CodeIgniter\Model;

class Pedidos_model extends Model {
    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status'];
}
