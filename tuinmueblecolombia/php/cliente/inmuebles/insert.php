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
	$datos[12] = codigoAleatorio(15);
	$datos[13] = $_SESSION['cedula'];

	if($inmueble->insertInmueble($datos)){
		if($inmueble->insertCaracteristica($datos)){
			$salida = true;
		}
	}
}


echo $salida;