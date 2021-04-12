<?php session_start();
require_once 'config.php';
require_once 'funciones.php';
require_once 'clases/conexion.php';

$con = new conexion();
$conexion = $con->conexion();

if (!$conexion) {
	header('Locarion: '.RUTA.'config/error/500');
	die();
}

if (!empty($_SESSION)) {
	if ($_SESSION['tipo'] == 'adm') {
		header('Location: '.RUTA.'SI/modulos/modulo');
	} else if ($_SESSION['tipo'] == 'clt') {
		header('Location: '.RUTA.'SI/cliente/cliente');
	}
} else {
	header('Location: '.RUTA.'/SI/login/login');
	die();
}