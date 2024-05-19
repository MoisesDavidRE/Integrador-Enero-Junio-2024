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
	$routes->get('cursos/agregar','Admin\CursosController::agregar'); 
	$routes->post('cursos/insertar', 'Admin\CursosController::insert');
	$routes->get('cursos/delete/(:num)', 'Admin\CursosController::delete/$1');
	$routes->get('cursos/editar/(:num)', 'Admin\CursosController::editar/$1');
	$routes->post('cursos/update', 'Admin\CursosController::update');
	$routes->get('cursos', ['controller' => 'Admin\CursosController::editar/$1']);
	$routes->get('cursos', ['controller' => 'Admin\CursosController::delete/$1']);
	$routes->post('cursos', ['controller' => 'Admin\CursosController::insert']);
	$routes->post('cursos', ['controller' => 'Admin\CursosController::update']);
	$routes->get('cursos/nuevoTema/(:num)','Admin\CursosController::nuevoTema/$1');
	$routes->get('cursos/nuevoSubtema/(:num)','Admin\CursosController::nuevoSubtema/$1');
	$routes->post('cursos/insertarTema','Admin\CursosController::insertarTema');
	$routes->get('cursos/mostrarTema/(:num)','Admin\CursosController::mostrarTema/$1');
	$routes->get('cursos/mostrarSubtema/(:num)','Admin\CursosController::mostrarSubtema/$1');
	$routes->post('cursos/insertarSubtema','Admin\CursosController::insertarSubtema');
	$routes->get('cursos/contenido/(:num)','Admin\CursosController::mostrarContenido/$1');

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
	$routes->get('cursos','Estudiante\CursosController::cursosInicio');

	// CURSOS------------------------------------------------------------------------------------------------
	$routes->get('cursos', 'Estudiante\CursosController::cursosInicio');

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
	$routes->get('cursos', 'AdministrativoSG\CursosController::cursosInicio');

	// CURSOS------------------------------------------------------------------------------------------------
	$routes->get('cursos', 'AdministrativoSG\CursosController::cursosInicio');
	$routes->get('cursos/agregar','AdministrativoSG\CursosController::agregar'); 
	$routes->post('cursos/insertar', 'AdministrativoSG\CursosController::insert');
	$routes->get('cursos/delete/(:num)', 'AdministrativoSG\CursosController::delete/$1');
	$routes->get('cursos/editar/(:num)', 'AdministrativoSG\CursosController::editar/$1');
	$routes->post('cursos/update', 'AdministrativoSG\CursosController::update');
	$routes->get('cursos', ['controller' => 'AdministrativoSG\CursosController::editar/$1']);
	$routes->get('cursos', ['controller' => 'AdministrativoSG\CursosController::delete/$1']);
	$routes->post('cursos', ['controller' => 'AdministrativoSG\CursosController::insert']);
	$routes->post('cursos', ['controller' => 'AdministrativoSG\CursosController::update']);
	$routes->get('cursos/nuevoTema/(:num)','AdministrativoSG\CursosController::nuevoTema/$1');
	$routes->get('cursos/nuevoSubtema/(:num)','AdministrativoSG\CursosController::nuevoSubtema/$1');
	$routes->post('cursos/insertarTema','AdministrativoSG\CursosController::insertarTema');
	$routes->get('cursos/mostrarTema/(:num)','AdministrativoSG\CursosController::mostrarTema/$1');
	$routes->get('cursos/mostrarSubtema/(:num)','AdministrativoSG\CursosController::mostrarSubtema/$1');
	$routes->post('cursos/insertarSubtema','AdministrativoSG\CursosController::insertarSubtema');
	$routes->get('cursos/contenido/(:num)','AdministrativoSG\CursosController::mostrarContenido/$1');

	// MIS CURSOS------------------------------------------------------------------------------------------------
	$routes->get('misCursos','AdministrativoSG\CursosController::cursosInicio');

	// PERFIL------------------------------------------------------------------------------------------------
	$routes->get('perfil', 'AdministrativoSG\PerfilController::index');
	$routes->get('perfil/editar/(:num)', 'AdministrativoSG\PerfilController::editar/$1');
	$routes->post('perfil/actualizar', 'AdministrativoSG\PerfilController::actualizar');});

$routes->group('docente', ['filter' => 'auth'], function ($routes) {
	$routes->get('/', 'Docente\DocenteController::index');

	// CURSOS------------------------------------------------------------------------------------------------
	$routes->get('cursos','Docente\CursosController::cursosInicio');
	$routes->get('cursos/agregar','Docente\CursosController::agregar'); 
	$routes->post('cursos/insertar', 'Docente\CursosController::insert');
	$routes->get('cursos/delete/(:num)', 'Docente\CursosController::delete/$1');
	$routes->get('cursos/editar/(:num)', 'Docente\CursosController::editar/$1');
	$routes->post('cursos/update', 'Docente\CursosController::update');
	$routes->get('cursos', ['controller' => 'Docente\CursosController::editar/$1']);
	$routes->get('cursos', ['controller' => 'Docente\CursosController::delete/$1']);
	$routes->post('cursos', ['controller' => 'Docente\CursosController::insert']);
	$routes->post('cursos', ['controller' => 'Docente\CursosController::update']);
	$routes->get('cursos/nuevoTema/(:num)','Docente\CursosController::nuevoTema/$1');
	$routes->get('cursos/nuevoSubtema/(:num)','Docente\CursosController::nuevoSubtema/$1');
	$routes->post('cursos/insertarTema','Docente\CursosController::insertarTema');
	$routes->get('cursos/mostrarTema/(:num)','Docente\CursosController::mostrarTema/$1');
	$routes->get('cursos/mostrarSubtema/(:num)','Docente\CursosController::mostrarSubtema/$1');
	$routes->post('cursos/insertarSubtema','Docente\CursosController::insertarSubtema');
	$routes->get('cursos/contenido/(:num)','Docente\CursosController::mostrarContenido/$1');

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
