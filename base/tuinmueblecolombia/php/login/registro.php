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
	$datos = $_POST['datos'];
	$datos[6] = 'clt';

	if ($usuario->insertUsuario($datos)) {
		$_SESSION['usuario'] = $datos[0];
		$_SESSION['cedula'] = $datos[3];
		$_SESSION['nombre'] = $datos[1] . $datos[2];
		$_SESSION['tipo'] = $datos[6];
		$salida = true;
	} else {
		session_unset();
		session_destroy();
		$_SESSION = array();
	}
}

echo $salida;