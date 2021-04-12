<?php session_start();
require_once '../../../config/config.php';
require_once '../../../config/funciones.php';
require_once '../../../config/clases/conexion.php';
require_once '../../../config/clases/user/usuario.php';

$con = new conexion();
$conexion = $con->conexion();
$usuario = new usuario();

if (!$conexion) {
	header('Location: '.RUTA.'config/error/500');
	die();
}

if (!empty($_SESSION)) {
	if ($_SESSION['tipo'] == 'clt') {
		$datosUser = $usuario->datosUsuario($_SESSION['usuario']);
		require_once '../../../views/cliente/configuracion/configuracion.view.php';
	} else {
		header('Location: '.RUTA.'config/error/403');
		die();
	}
} else {
	header('Location: '.RUTA.'config/direccion');
	die();
}