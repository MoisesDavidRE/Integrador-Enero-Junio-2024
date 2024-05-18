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
	$routes->get('cursos','Admin\CursosController::cursosInicio');
	$routes->get('cursos/agregar','Admin\CursosController::agregar'); // cursos
	$routes->post('cursos/insertar', 'Admin\CursosController::insert'); // cursos
	$routes->get('cursos/delete/(:num)', 'Admin\CursosController::delete/$1');
	$routes->get('cursos/editar/(:num)', 'Admin\CursosController::editar/$1');
	$routes->post('cursos/update', 'Admin\CursosController::update');

	$routes->get('cursos', ['controller' => 'Admin\CursosController::editar/$1']); // cursos
	$routes->get('cursos', ['controller' => 'Admin\CursosController::delete/$1']); // cursos

	$routes->post('cursos', ['controller' => 'Admin\CursosController::insert']); // cursos
	$routes->post('cursos', ['controller' => 'Admin\CursosController::update']); // cursos

	// PERFIL------------------------------------------------------------------------------------------------
	$routes->get('perfil', 'Admin\PerfilController::index');
	$routes->get('perfil/editar/(:num)', 'Admin\PerfilController::editar/$1');
	$routes->post('perfil/actualizar', 'Admin\PerfilController::actualizar');


	// REPORTES------------------------------------------------------------------------------------------------
	$routes->resource('reportes/alumnos', ['controller' => 'Admin\ReportesController::index']);
	$routes->resource('reportes/docentes', ['controller' => 'Admin\ReportesController::docentes']);
	$routes->get('reportes/generarPDF', 'Admin\ReportesController::generarPDF');
	$routes->get('reportes/generarPDFDocentes', 'Admin\ReportesController::generarPDFDocentes');

	// ------------------------------------------------------------------------------------------------
});

$routes->post('user/guardarInfo', 'UserController::guardarInfo');
$routes->get('user/completarInfo/(:num)', 'UserController::completarInfo/$1');
// Rutas para el estudiante
$routes->group('estudiante', ['filter' => 'auth'], function ($routes) {
	$routes->get('/', 'Estudiante\EstudianteController::index');
	$routes->resource('cursos', ['controller' => 'Estudiante\CursosController::index']);

	// CURSOS------------------------------------------------------------------------------------------------
	$routes->resource('cursos', ['controller' => 'Estudiante\CursosController::index']);

	// MIS CURSOS------------------------------------------------------------------------------------------------
	$routes->get('misCursos', 'Estudiante\MisCursosController::index');
	$routes->get('misCursos/subtema1', 'Estudiante\MisCursosController::subtema1');
	$routes->get('misCursos/subtema2', 'Estudiante\MisCursosController::subtema2');
	$routes->get('misCursos/subtema3', 'Estudiante\MisCursosController::subtema3');
	$routes->get('misCursos/subtema4', 'Estudiante\MisCursosController::subtema4');
	$routes->get('misCursos/evaluacion', 'Estudiante\MisCursosController::evaluacion');

	

	// PERFIL------------------------------------------------------------------------------------------------
	$routes->get('perfil', 'Estudiante\PerfilController::index');
	$routes->get('perfil/editar/(:num)', 'Estudiante\PerfilController::editar/$1');
	$routes->post('perfil/actualizar', 'Estudiante\PerfilController::actualizar');});

// Rutas para el perfil de administrativo/servicios generales
$routes->group('administrativo', ['filter' => 'auth'], function ($routes) {
	$routes->get('/', 'AdministrativoSG\AdministrativoSGController::index');
	$routes->resource('cursos', ['controller' => 'AdministrativoSG\AdministrativoSGController::index']);

	// CURSOS------------------------------------------------------------------------------------------------
	$routes->resource('cursos', ['controller' => 'AdministrativoSG\CursosController::index']);

	// MIS CURSOS------------------------------------------------------------------------------------------------
	$routes->resource('misCursos', ['controller' => 'AdministrativoSG\MisCursosController::index']);

	// PERFIL------------------------------------------------------------------------------------------------
	$routes->get('perfil', 'AdministrativoSG\PerfilController::index');
	$routes->get('perfil/editar/(:num)', 'AdministrativoSG\PerfilController::editar/$1');
	$routes->post('perfil/actualizar', 'AdministrativoSG\PerfilController::actualizar');});

$routes->group('docente', ['filter' => 'auth'], function ($routes) {
	$routes->get('/', 'Docente\DocenteController::index');
	$routes->resource('cursos', ['controller' => 'Docente\DocenteController::index']);

	// CURSOS------------------------------------------------------------------------------------------------
	$routes->resource('cursos', ['controller' => 'Docente\CursosController::index']);

	// MIS CURSOS------------------------------------------------------------------------------------------------
	$routes->resource('misCursos', ['controller' => 'Docente\MisCursosController::index']);

	// PERFIL------------------------------------------------------------------------------------------------
	$routes->get('perfil', 'Docente\PerfilController::index');
	$routes->get('perfil/editar/(:num)', 'Docente\PerfilController::editar/$1');
	$routes->post('perfil/actualizar', 'Docente\PerfilController::actualizar');});

$routes->get('logout', 'UserController::logout');

// 1-admin
// 2-estudiante
// 3-docente
// 4-administrativo/SG
