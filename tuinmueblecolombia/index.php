<?php 
require_once 'config/config.php';
require_once 'config/funciones.php';
require_once 'config/clases/conexion.php';

$conn = new conexion();
$conexion = $conn->conexion();

if (!$conexion) {
	header('Location: '.RUTA.'config/Error/500');
	die('Pagina sin conexión');
}

require_once 'views/sistem/index.view.php';
