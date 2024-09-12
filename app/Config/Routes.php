<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/main','AuthController::main');
$routes->get('/login','AuthController::login');
$routes->get('/profile','AuthController::profile',['filter' => 'auth']);
$routes->get('/register','AuthController::register');
$routes->get('/dashboard','TaskController::dashboard');
$routes->get('/newtask','AuthController::newtask');


$routes->post('/register','AuthController::process_register');
$routes->get('/profile','AuthController::profile');
$routes->post('/login','AuthController::process_login');
$routes->get('/logout','AuthController::logout');
$routes->get('/update/(:num)','TaskController::update/$1');

$routes->get('/update/(:num)','TaskController::process_update/$1');
$routes->get('/delete/(:num)','TaskController::delete/$1');
$routes->post('/add','TaskController::process_newtask');