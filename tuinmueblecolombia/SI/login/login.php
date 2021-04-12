<?php session_start();
require_once '../../config/config.php';
require_once '../../config/funciones.php';
require_once '../../config/clases/conexion.php';

$conn = new conexion();
$conexion = $conn->conexion();

if(!$conexion){
	header('Location: '.RUTA.'config/Error/500');
	die('Pagina sin conexión');
}

if (!empty($_SESSION)) {
	header('Location: '.RUTA.'config/direccion');
	die();
}

require_once '../../views/login/login.view.php';