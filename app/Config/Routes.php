<?php

use CodeIgniter\Router\RouteCollection;


$routes->get('/', 'UserController::login');

$routes->get('registro', 'RegistroController::new');
$routes->post('registro', 'RegistroController::create');

$routes->match(['get', 'post'], 'login', 'UserController::login', ["filter" => "noauth"]);

// Rutas para el administrador
$routes->group('admin', ['filter' => 'auth'], function ($routes) {

	$routes->get('/', 'Admin\AdminController::index');

	//  USUARIOS ------------------------------------------------------------------------------------------------
	$routes->get('usuarios/edit_password/(:num)', 'Admin\UsuarioController::editPassword/$1'); // Mostrar formulario para editar la contraseña
	$routes->post('usuarios/update_password/(:num)', 'Admin\UsuarioController::updatePassword/$1'); // Actualizar la contraseña del usuario
	$routes->resource('usuarios/alumnos', ['controller' => 'Admin\UsuarioController::index']);
	$routes->resource('usuarios/administrativos', ['controller' => 'Admin\UsuarioController::administrativos']);
	$routes->resource('usuarios/docentes', ['controller' => 'Admin\UsuarioController::docentes']);
	$routes->resource('usuarios/admins', ['controller' => 'Admin\UsuarioController::admins']);
	$routes->resource('usuarios/mostrar', ['controller' => 'Admin\UsuarioController::mostrar']);
	$routes->get('usuarios/agregar', 'Admin\UsuarioController::agregar');
	$routes->post('usuarios/agregar', 'Admin\UsuarioController::agregar');
	$routes->post('usuarios/eliminar/(:num)', 'Admin\UsuarioController::eliminar/$1');
	$routes->post('usuarios/eliminarPersonal/(:num)', 'Admin\UsuarioController::eliminarPersonal/$1');
	$routes->resource('usuarios/editarPersonal', ['controller' => 'Admin\UsuarioController::editarPersonal']);
	$routes->resource('usuarios/mostrarPersonal', ['controller' => 'Admin\UsuarioController::mostrarPersonal']);
	$routes->resource('usuarios/agregarPersonal', ['controller' => 'Admin\UsuarioController::agregarPersonal']);
	$routes->post('usuarios/insert', 'Admin\UsuarioController::insert');
	$routes->post('usuarios/insertPersonal', 'Admin\UsuarioController::insertPersonal');
	$routes->get('usuarios/buscar', ['controller' => 'Admin\UsuarioController::buscar']);
	$routes->get('usuarios/editar/(:num)', 'Admin\UsuarioController::editar/$1');
	$routes->post('usuarios/actualizar/(:num)', 'Admin\UsuarioController::actualizar/$1');
	$routes->get('usuarios/editarPersonal/(:num)', 'Admin\UsuarioController::editarPersonal/$1');
	$routes->post('usuarios/actualizarPersonal/(:num)', 'Admin\UsuarioController::actualizarPersonal/$1');
	$routes->resource('usuarios/personal', ['controller' => 'Admin\UsuarioController::personal']);

	// CURSOS------------------------------------------------------------------------------------------------
	$routes->resource('cursos', ['controller' => 'Admin\CursosController::index']);

	// PERFIL------------------------------------------------------------------------------------------------
	$routes->resource('perfil', ['controller' => 'Admin\PerfilController::index']);

	// REPORTES------------------------------------------------------------------------------------------------
	$routes->resource('reportes/alumnos', ['controller' => 'Admin\ReportesController::index']);
	$routes->resource('reportes/docentes', ['controller' => 'Admin\ReportesController::docentes']);
	$routes->get('reportes/generarPDF', 'Admin\ReportesController::generarPDF');
	$routes->get('reportes/generarPDFDocentes', 'Admin\ReportesController::generarPDFDocentes');

	// ------------------------------------------------------------------------------------------------
});

$routes->group('docente', ['filter' => 'auth'], function ($routes) {
	$routes->get('/', 'Docente\DocenteController::index');
	$routes->resource('cursos', ['controller' => 'Docente\CursosController::index']);
});


$routes->group('estudiante', ['filter' => 'auth'], function ($routes) {
	$routes->get('/', 'Estudiante\EstudianteController::index');
	$routes->resource('cursos', ['controller' => 'Estudiante\CursosController::index']);
});

$routes->group('administrativo', ['filter' => 'auth'], function ($routes) {
	$routes->get('/', 'AdministrativoSG\AdministrativoSGController::index');
	$routes->resource('cursos', ['controller' => 'AdministrativoSG\AdministrativoSGController::index']);
});

$routes->get('logout', 'UserController::logout');

// 1-admin
// 2-estudiante
// 3-docente
// 4-administrativo/SG


// INICIO, PERFIL Y MIS CURSOS