<?php session_start();
require_once '../../../config/config.php';
require_once '../../../config/funciones.php';
require_once '../../../config/clases/conexion.php';
require_once '../../../config/clases/obj/objetos.php';
require_once '../../../config/clases/inmueble/inmueble.php';

$con = new conexion();
$conexion = $con->conexion();
$inmueble = new inmueble();

if (!$conexion) {
	header('Location: '.RUTA.'config/error/500');
	die();
}

if (!empty($_SESSION)) {
	if ($_SESSION['tipo'] == 'clt') {
		$listaInm = $inmueble->listInmueble($_SESSION['cedula']);
		$listinm = listInmuebleUser($listaInm);
		require_once '../../../views/cliente/inmuebles/inmuebles.view.php';
	} else {
		header('Location: '.RUTA.'config/error/403');
		die();
	}
} else {
	header('Location: '.RUTA.'config/direccion');
	die();
}