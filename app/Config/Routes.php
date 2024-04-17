<?php

use CodeIgniter\Router\RouteCollection;


$routes->get('/', 'UserController::login');

$routes->get('registro', 'RegistroController::new');
$routes->post('registro', 'RegistroController::create');

$routes->match(['get', 'post'], 'login', 'UserController::login', ["filter" => "noauth"]);

// Rutas para el administrador
$routes->group('admin', ['filter' => 'auth'], function ($routes) {

    $routes->get('/', 'Admin\AdminController::index');
    $routes->get('usuarios/edit_password/(:num)', 'Admin\UsuarioController::editPassword/$1'); // Mostrar formulario para editar la contraseña
    $routes->post('usuarios/update_password/(:num)', 'Admin\UsuarioController::updatePassword/$1'); // Actualizar la contraseña del usuario
	$routes->resource('usuarios/alumnos', ['controller' => 'Admin\UsuarioController::index']);
	$routes->resource('usuarios/administrativos', ['controller' => 'Admin\UsuarioController::administrativos']);
	$routes->resource('usuarios/docentes', ['controller' => 'Admin\UsuarioController::docentes']);
	$routes->resource('usuarios/admins', ['controller' => 'Admin\UsuarioController::admins']);
	$routes->resource('cursos', ['controller' => 'Admin\CursosController::index']);
	$routes->resource('perfil', ['controller' => 'Admin\PerfilController::index']);
	$routes->resource('reportes/alumnos', ['controller' => 'Admin\ReportesController::index']);
	$routes->resource('reportes/docentes', ['controller' => 'Admin\ReportesController::docentes']);

});

$routes->get('logout', 'UserController::logout');