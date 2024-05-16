<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contoh1', 'contoh1::index');
$routes->get('/Latihan1', 'Latihan1::index');
$routes->get('Latihan1/penjumlahan/(:num)/(:num)', 'Latihan1::penjumlahan/$1/$2');