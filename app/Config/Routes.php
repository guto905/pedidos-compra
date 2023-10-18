<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\Router;

$routes = new RouteCollection();

// Rota para o Controller Clientes
$routes->resource('clientes', ['controller' => 'Clientes']);

// Rota para o Controller Produtos
$routes->resource('produtos', ['controller' => 'Produtos']);

// Rota para o Controller Pedidos
$routes->resource('pedidos', ['controller' => 'Pedidos']);

// ...

return $routes;
