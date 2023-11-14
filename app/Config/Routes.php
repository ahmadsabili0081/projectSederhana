<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Admin::index');
$routes->get('/Admin/Users', 'Admin::users', ['filter' => 'role:Admin']);
$routes->get('/User/profile', 'User::profile');
