<?php session_start();

require_once '../../config/config.php';
require_once '../../config/funciones.php';
require_once '../../config/clases/conexion.php';
require_once '../../config/clases/user/usuario.php';

$salida = false;
$conn = new conexion();
$conexion = $conn->conexion();
$usuario = new usuario();

if (!$conexion) {
	header('Location: '.RUTA.'config/Error/500');
	die('Pagina sin conexión');
}

if (isset($_POST['datos'])) {
	$validUser = $usuario->datosSesion($_POST['datos']);

	if (!empty($validUser)) {
		$_SESSION['usuario'] = $validUser[0];
		$_SESSION['cedula'] = $validUser[1];
		$_SESSION['nombre'] = $validUser[2] . $validUser[3];
		$_SESSION['tipo'] = $validUser[4];
		$salida = true;
	} else {
		session_unset();
		session_destroy();
		$_SESSION = array();
	}
}

echo $salida;