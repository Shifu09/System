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
$routes->get('tipo', 'VistaController::tipo_act');
$routes->get('movimientos', 'VistaController::movimiento');
$routes->get('motivo', 'VistaController::motivo');


/**
 * TODO: FIN de las Rutas de Vistas
-----------------------------------------------------------------------------------------
 */

/**
------------------------------------------------------------------------------------------
 * TODO: Inicio de las Rutas de Acciones
 */
$routes->get('borrar/(:num)', 'AccionController::delete/$1');
$routes->get('borrarcon/(:num)', 'AccionController::deletecon/$1');
$routes->get('borrarresp/(:num)', 'AccionController::deleteresp/$1');
$routes->get('editarcargo/(:num)', 'AccionController::cargoupdate/$1');
$routes->get('editarcondicion/(:num)', 'AccionController::condicionupdate/$1');
$routes->get('editarcondicionn/(:num)', 'AccionController::condicionupdaterep/$1');
$routes->get('editarresp/(:num)', 'AccionController::respupdate/$1');
$routes->get('editarmarca/(:num)', 'AccionController::marcaupdate/$1');
$routes->get('editartipo/(:num)', 'AccionController::tipoupdate/$1');

$routes->post('actualizartipo', 'AccionController::updatetipo');
$routes->post('actualizar', 'AccionController::updatecargo');
$routes->post('actualizarmarca', 'AccionController::updatemarca');
$routes->post('actualizarcon', 'AccionController::updatecondicion');
$routes->post('actualizarconn', 'AccionController::updatecondicionrep');
$routes->post('actualizaresp', 'AccionController::updateresp');
/*
? TODO:Rutas de Guardar
 */

$routes->post('guardarActivo', 'AccionController::saveactivo');
$routes->post('guardarMarca', 'AccionController::savemarca');
$routes->post('guardar', 'AccionController::save');
$routes->post('guardarcon', 'AccionController::savecon');
$routes->post('guardarResp', 'AccionController::saveresp');
$routes->post('guardarAct', 'AccionController::saveconact');
$routes->post('guardarzona', 'AccionController::savezona');
$routes->post('guardarUbicacion', 'AccionController::saveubi');
$routes->post('guardarTipo', 'AccionController::savetipo');
$routes->post('guardarmotivo', 'AccionController::savemotivo');
