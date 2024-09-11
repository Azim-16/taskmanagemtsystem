<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/main','AuthController::main');
$routes->get('/login','AuthController::login');
$routes->get('/register','AuthController::register');
$routes->get('/dashboard','AuthController::dashboard');
$routes->get('/newtask','AuthController::newtask');

