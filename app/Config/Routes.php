<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('/login', 'Login::login');
$routes->get('/register', 'register::register');
$routes->get('sosmed', 'lainnya::sosmed');
$routes->get('ulasan', 'lainnya::ulasan');
$routes->get('destroy', 'DestroySession::index');
$routes->get('detail', 'Detail::index');
$routes->get('export', 'ExportController::exportToExcel');
$routes->get('dashboard/(:segment)/(:segment)', 'Dashboard::index/$1/$2');
$routes->get('dashboard', 'Dashboard::index');



$routes->post('purchase', 'Purchase::index');
$routes->post('purchase/process', 'Purchase::process');
$routes->post('register/process', 'register::process');
$routes->post('login/process', 'login::process');