<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// default route


$routes->group('auth', ['filter' => 'loggedin'], function ($routes) {
    // login
    $routes->get('login', 'AuthController::login');
    $routes->post('login', 'AuthController::authenticate');
    // register
    $routes->get('register', 'AuthController::register');
    $routes->post('register', 'AuthController::store');
});


// route group
$routes->group('dashboard', ['filter' => 'auth'], function ($routes) {
    // anggota
    $routes->get('', 'AnggotaController::index');
    $routes->get('anggota', 'AnggotaController::index');
    // create anggota
    $routes->get('anggota/create', 'AnggotaController::create');
    $routes->post('anggota', 'AnggotaController::store');
    // edit anggota
    $routes->get('anggota/edit/(:num)', 'AnggotaController::edit/$1');
    $routes->post('anggota/update/(:num)', 'AnggotaController::update/$1');
    // hapus anggota
    $routes->get('anggota/delete/(:num)', 'AnggotaController::delete/$1');

    // buku
    $routes->get('buku', 'BukuController::index');
    // create buku
    $routes->get('buku/create', 'BukuController::create');
    $routes->post('buku', 'BukuController::store');
    // edit buku
    $routes->get('buku/edit/(:num)', 'BukuController::edit/$1');
    $routes->post('buku/update/(:num)', 'BukuController::update/$1');
    // hapus buku
    $routes->get('buku/delete/(:num)', 'BukuController::delete/$1');

    // pinjam
    $routes->get('pinjam', 'PinjamController::index');
    // create pinjam
    $routes->get('pinjam/create', 'PinjamController::create');
    $routes->post('pinjam', 'PinjamController::store');
    // edit pinjam
    $routes->get('pinjam/edit/(:num)', 'PinjamController::edit/$1');
    $routes->post('pinjam/update/(:num)', 'PinjamController::update/$1');
    // hapus pinjam
    $routes->get('pinjam/delete/(:num)', 'PinjamController::delete/$1');
    // ekport laporan
    $routes->get('laporan', 'LaporanController::index');
    $routes->get('laporan/export-pinjam', 'LaporanController::exportPinjam');
    $routes->get('laporan/export-anggota', 'LaporanController::exportAnggota');
    $routes->get('laporan/export-buku', 'LaporanController::exportBuku');
    $routes->get('logout', 'AuthController::logout');
});

$routes->group('', ['filter' => 'logeedinuser'], function ($routes) {
    $routes->get('/', 'HomeController::index');
    // login
    $routes->get('login', 'UserController::loginAnggota');
    $routes->post('login', 'UserController::authenticateAnggota');
    // register
    $routes->get('register', 'UserController::registerAnggota');
    $routes->post('register', 'UserController::storeAnggota');
});

$routes->group('user', ['filter' => 'authuser'], function ($routes) {
    $routes->get('dashboard', 'UserController::index');
    $routes->get('pinjam', 'UserController::pinjam');
    $routes->post('pinjam', 'UserController::storePinjam');
    $routes->get('pinjam/delete/(:num)', 'UserController::delete/$1');

    $routes->get('logout', 'UserController::logout');
});

