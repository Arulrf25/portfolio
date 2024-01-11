<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/coba', function () {
//     echo 'Hello World!';
// });

$routes->get('/', 'PagesController::home');
$routes->get('/about', 'PagesController::about');
$routes->get('/resume', 'PagesController::resume');
$routes->get('/services', 'PagesController::services');
$routes->get('/portfolio', 'PagesController::portfolio');
$routes->get('/contact', 'PagesController::contact');
