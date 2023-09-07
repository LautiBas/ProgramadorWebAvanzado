<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/productos', 'Productos::index');
$routes->get('/producto/(:num)', 'Productos::show/$1');
$routes->get('/producto/(:alpha)(:num)', 'Productos::cat/$1/$2');

$routes->get('/stock', 'StockController::index');
$routes->get('/stock/verDetalle/(:num)', 'StockController::verDetalle/$1');
$routes->get('/stock/actualizarStock/(:num)', 'StockController::actualizarStockForm/$1');
$routes->post('/stock/actualizarStock/(:num)', 'StockController::actualizarStockForm/$1');

// $routes->get('/productos', 'Home::show');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
} //habilitamos entorno de desarrollo 
