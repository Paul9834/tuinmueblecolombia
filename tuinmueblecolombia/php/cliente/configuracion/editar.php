<?php session_start();
require_once '../../../config/config.php';
require_once '../../../config/funciones.php';
require_once '../../../config/clases/conexion.php';
require_once '../../../config/clases/user/usuario.php';

$con = new conexion();
$conexion = $con->conexion();
$usuario = new usuario();
$salida = false;

if (!$conexion) {
	header('Location: '.RUTA.'config/error/500');
	die();
}


if (isset($_POST['datos'])) {
	if (!empty($_SESSION)) {
		if ($_SESSION['tipo'] == 'clt') {
			if($usuario->updateUsuario($_POST['datos'])){
				$salida = true;
			}
		}
	}
}

echo $salida;