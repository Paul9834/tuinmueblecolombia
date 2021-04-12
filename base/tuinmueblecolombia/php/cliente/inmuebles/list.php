<?php session_start();
require_once '../../../config/config.php';
require_once '../../../config/funciones.php';
require_once '../../../config/clases/conexion.php';
require_once '../../../config/clases/obj/objetos.php';
require_once '../../../config/clases/inmueble/inmueble.php';

$salida = '';
$conn = new conexion();
$conexion = $conn->conexion();
$inmueble = new inmueble();


if (!$conexion) {
	header('Location: '.RUTA.'config/Error/500');
	die('Pagina sin conexión');
}

if (!empty($_SESSION)) {
	$listainm = $inmueble->listInmueble($_SESSION['cedula']);
	$salida = listInmuebleUser($listainm);
}

echo $salida;