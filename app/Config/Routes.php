<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/katalog','KatalogController::katalog');
$routes->get('/ulasan','Page::ulasan');
$routes->get('/tambah_produk', 'KatalogController::create');
$routes->post('/katalog_store', 'KatalogController::store');
$routes->get('edit_produk/(:num)', 'KatalogController::edit/$1');
$routes->post('update_produk/(:num)', 'KatalogController::update/$1');
$routes->get('delete_produk/(:num)', 'KatalogController::delete/$1');