<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Contacts::index');

$routes->post('/import', 'Contacts::import/$1');