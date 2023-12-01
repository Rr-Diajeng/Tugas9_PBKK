<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('', ['filter' => 'checkLogin'], function ($routes) {
    $routes->get('employees', 'Employees::index');
    $routes->get('employees/create', 'Employees::create');
    $routes->post('employees/store', 'Employees::store');
    $routes->get('employees/edit/(:num)', 'Employees::edit/$1');
    $routes->post('employees/update/(:num)', 'Employees::update/$1');
    $routes->get('employees/delete/(:num)', 'Employees::delete/$1');
});


// Tambahkan rute untuk halaman login di sini:
$routes->get('/', 'Auth::login');
$routes->get('auth/login', 'Auth::login');
$routes->post('auth/processLogin', 'Auth::processLogin');
$routes->get('auth/logout', 'Auth::logout');