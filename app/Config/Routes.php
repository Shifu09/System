<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/**
-------------------------------------------------------------------------
 * TODO: Inicio de las Rutas de Vistas
 */
$routes->get('/', 'VistaController::index');
$routes->get('cargo', 'VistaController::index');
$routes->get('condicion', 'VistaController::condicion');
$routes->get('crear', 'VistaController::CrearCargo');
$routes->get('activos', 'VistaController::activo');
$routes->get('marca', 'VistaController::marca');
$routes->get('resp', 'VistaController::resp');
$routes->get('condicionActivo', 'VistaController::condicion_act');
$routes->get('zona', 'VistaController::zona_mov');
$routes->get('ubicacion', 'VistaController::ubicacion');
$routes->get('ubicacion', 'VistaController::ubicacion_mov');


/**
-------------------------------------------------------------------------
 * TODO: FIN de las Rutas de Vistas
 */


/**
--------------------------------------
 * TODO: Inicio de las Rutas de Acciones
 */
$routes->get('borrar/(:num)', 'CargoController::delete/$1');
$routes->get('borrarcon/(:num)', 'CargoController::deletecon/$1');
$routes->get('borrarresp/(:num)', 'CargoController::deleteresp/$1');
$routes->get('editarcargo/(:num)', 'AccionController::cargoupdate/$1');

/**
 * ? TODO:Rutas de Guardars
 */

$routes->post('guardarActivo', 'AccionController::saveactivo');
$routes->post('guardarMarca', 'AccionController::savemarca');
$routes->post('guardar', 'AccionController::save');
$routes->post('guardarcon', 'AccionController::savecon');
$routes->post('guardarResp', 'AccionController::saveresp');
$routes->post('actualizar', 'AccionController::updatecargo');
$routes->post('guardarAct', 'AccionController::saveconact');
$routes->post('guardarzona', 'AccionController::savezona');
$routes->post('guardarUbicacion', 'AccionController::saveubi');
