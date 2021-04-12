<?php session_start();
require_once '../../../config/config.php';
require_once '../../../config/funciones.php';
require_once '../../../config/clases/conexion.php';
require_once '../../../config/clases/inmueble/inmueble.php';

$salida = array('respuesta' => false);
$conn = new conexion();
$conexion = $conn->conexion();
$inmueble = new inmueble();


if (!$conexion) {
	header('Location: '.RUTA.'config/Error/500');
	die('Pagina sin conexión');
}


if (isset($_POST['id'])) {
	$selinm = $inmueble->selectInmuebleEdit($_POST['id'], $_SESSION['cedula']);

	if (!empty($selinm)) {
		$salida = $selinm;
		$salida['respuesta'] = true;
	}
}


echo json_encode($salida);