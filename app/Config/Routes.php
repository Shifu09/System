<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('cargo', 'VistaController::index');
$routes->get('condicion', 'VistaController::condicion');
$routes->get('crear', 'VistaController::CrearCargo');
$routes->get('borrar/(:num)', 'CargoController::delete/$1');
$routes->get('borrarcon/(:num)', 'CargoController::deletecon/$1');
$routes->get('borrarresp/(:num)', 'CargoController::deleteresp/$1');
$routes->get('resp', 'VistaController::resp');
$routes->post('guardar', 'AccionController::save');
$routes->post('guardarcon', 'AccionController::savecon');
$routes->post('guardarResp', 'AccionController::saveresp');
