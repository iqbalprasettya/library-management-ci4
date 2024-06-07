<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->group('', ['filter' => 'loggedin'], function ($routes) {
    // login
    $routes->get('/login', 'AuthController::login');
    $routes->post('/login', 'AuthController::authenticate');
    // register
    $routes->get('/register', 'AuthController::register');
    $routes->post('/register', 'AuthController::store');
});

$routes->get('/logout', 'AuthController::logout');

// route group
$routes->group('', ['filter' => 'auth'], function ($routes) {
    // anggota
    $routes->get('/', 'AnggotaController::index');
    $routes->get('/anggota', 'AnggotaController::index');
    // create anggota
    $routes->get('/anggota/create', 'AnggotaController::create');
    $routes->post('/anggota', 'AnggotaController::store');
    // edit anggota
    $routes->get('/anggota/edit/(:num)', 'AnggotaController::edit/$1');
    $routes->post('/anggota/update/(:num)', 'AnggotaController::update/$1');
    // hapus anggota
    $routes->get('/anggota/delete/(:num)', 'AnggotaController::delete/$1');

    // buku
    $routes->get('/buku', 'BukuController::index');
    // create buku
    $routes->get('/buku/create', 'BukuController::create');
    $routes->post('/buku', 'BukuController::store');
    // edit buku
    $routes->get('/buku/edit/(:num)', 'BukuController::edit/$1');
    $routes->post('/buku/update/(:num)', 'BukuController::update/$1');
    // hapus buku
    $routes->get('/buku/delete/(:num)', 'BukuController::delete/$1');

    // pinjam
    $routes->get('/pinjam', 'PinjamController::index');
    // create pinjam
    $routes->get('/pinjam/create', 'PinjamController::create');
    $routes->post('/pinjam', 'PinjamController::store');
    // edit pinjam
    $routes->get('/pinjam/edit/(:num)', 'PinjamController::edit/$1');
    $routes->post('/pinjam/update/(:num)', 'PinjamController::update/$1');
    // hapus pinjam
    $routes->get('/pinjam/delete/(:num)', 'PinjamController::delete/$1');
    // ekport laporan
    $routes->get('/laporan', 'LaporanController::index');
    $routes->get('/laporan/export-pinjam', 'LaporanController::exportPinjam');
    $routes->get('/laporan/export-anggota', 'LaporanController::exportAnggota');
    $routes->get('/laporan/export-buku', 'LaporanController::exportBuku');
});
