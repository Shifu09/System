<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/**
--------------------------------------
 * TODO: Inicio de las Rutas de Vistas
 */
$routes->get('/', 'VistaController::index');
$routes->get('cargo', 'VistaController::index');
$routes->get('condicion', 'VistaController::condicion');
$routes->get('crear', 'VistaController::CrearCargo');
$routes->get('activos', 'VistaController::activo');
$routes->get('marca', 'VistaController::marca');
$routes->get('resp', 'VistaController::resp');

/**
--------------------------------------
 * TODO: Inicio de las Rutas de Acciones
 */
$routes->get('borrar/(:num)', 'CargoController::delete/$1');
$routes->get('borrarcon/(:num)', 'CargoController::deletecon/$1');
$routes->get('borrarresp/(:num)', 'CargoController::deleteresp/$1');
$routes->post('guardar', 'AccionController::save');
$routes->post('guardarcon', 'AccionController::savecon');
$routes->post('guardarResp', 'AccionController::saveresp');
$routes->post('cargoupdate', 'AccionController::cargoupdate');
$routes->get('editarcargo/(:num)', 'AccionController::obtenercargo/$1');
$routes->post('guardarActivo', 'AccionController::saveactivo');
$routes->post('guardarMarca', 'AccionController::savemarca');
