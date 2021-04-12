<?php session_start();
require_once '../../config/config.php';
require_once '../../config/funciones.php';
require_once '../../config/clases/conexion.php';

$con = new conexion();
$conexion = $con->conexion();

if (!$conexion) {
	header('Location: '.RUTA.'config/error/500');
	die();
}

if (!empty($_SESSION)) {
	if ($_SESSION['tipo'] == 'clt') {
		require_once '../../views/cliente/cliente.view.php';
	} else {
		header('Location: '.RUTA.'config/error/403');
		die();
	}
} else {
	header('Location: '.RUTA.'config/direccion');
	die();
}