<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/sobre', 'Home::sobre');

$routes->get('/api', 'Api::index');

$routes->get('/wa', 'Home::wa');

//$routes->get('/(:any)', 'Home::sobre/$1');