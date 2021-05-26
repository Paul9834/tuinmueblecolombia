<?php 
require_once '../../config/config.php';
require_once '../../config/funciones.php';
require_once '../../config/clases/conexion.php';
require_once '../../config/clases/inmueble/inmueble.php';

$con = new conexion();
$conexion = $con->conexion();
$inmueble = new inmueble();
$listaInmueble = $inmueble->listInmuebleAll();

if (!$conexion) {
	header('Location: '.RUTA.'config/error/500');
	die();
}

include_once '../../views/sistem/catalogo.view.php';