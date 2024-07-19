<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Home route handler
 $routes->get('/', 'HomeController::index');
// document browsing handler
$routes->get('/browse/dokumen', 'BrowseController::dokumen');
$routes->get('/browse/tahun', 'BrowseController::tahun');
$routes->get('/browse/judul', 'BrowseController::judul');
$routes->get('/browse/penulis', 'BrowseController::penulis');
// auth handler
$routes->get('/auth/login', 'AuthController::login');
$routes->post('/auth/login', 'AuthController::doLogin');
$routes->get('/auth/logout', 'AuthController::logout');
// category handler
$routes->get('/kategori/tugas-akhir', 'KategoriController::tugasAkhir');
// Routes untuk karya CRUD (dosen only)
$routes->group('karya', ['filter' => 'dosenAuth'], function($routes) {
    $routes->get('/', 'KaryaController::index');
    $routes->get('create', 'KaryaController::create');
    $routes->post('create', 'KaryaController::store');
    $routes->get('edit/(:num)', 'KaryaController::edit/$1');
    $routes->post('edit/(:num)', 'KaryaController::update/$1');
    $routes->get('delete/(:num)', 'KaryaController::delete/$1');
});
// Routes untuk user CRUD (admin only)
$routes->group('users', ['filter' => 'adminAuth'], function($routes) {
    $routes->get('/', 'UserController::index');
    $routes->get('create', 'UserController::create');
    $routes->post('create', 'UserController::store');
    $routes->get('edit/(:num)', 'UserController::edit/$1');
    $routes->post('edit/(:num)', 'UserController::update/$1');
    $routes->get('delete/(:num)', 'UserController::delete/$1');
});
