<?php session_start();
require_once '../../../config/config.php';
require_once '../../../config/funciones.php';
require_once '../../../config/clases/conexion.php';
require_once '../../../config/clases/inmueble/inmueble.php';

$salida = false;
$conn = new conexion();
$conexion = $conn->conexion();
$inmueble = new inmueble();


if (!$conexion) {
	header('Location: '.RUTA.'config/Error/500');
	die('Pagina sin conexión');
}


if (isset($_POST['datos'])) {
	$datos = $_POST['datos'];

	if($inmueble->updateInmueble($datos) || $inmueble->updateCaracteristica($datos)){
		$salida = true;
	}
}


echo $salida;