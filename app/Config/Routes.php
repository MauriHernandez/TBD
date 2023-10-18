<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('users', 'UserController::index');
$routes->get('users/usuarios', 'UserController::usuarios');
$routes->get('users/usuarios2', 'UserController::usuarios2');
$routes->get('users/usuarios3', 'UserController::usuarios3');

$routes->get('posts/01', 'PostController::ejercicio01');
// ...
$routes->get('posts/05', 'PostController::ejercicio05');
$routes->get('posts/02', 'PostController::ejercicio02');
$routes->get('posts/04', 'PostController::ejercicio04');
$routes->get('posts/10', 'PostController::ejercicio10');
$routes->get('posts/dump','PostController::btn');
$routes->get('copia/01', 'PostController::dump');


