<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/katalog','KatalogController::katalog');
$routes->get('/ulasan','Page::ulasan');

$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');
$routes->get('/tambah_produk', 'KatalogController::create');
$routes->post('/katalog_store', 'KatalogController::store');


