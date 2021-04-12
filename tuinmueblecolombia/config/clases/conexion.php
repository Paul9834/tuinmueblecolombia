<?php 
class conexion{
	private $servidor="198.52.110.228";
	private $usuario="daniel";
	private $bd="tu_inmueble_co";
	private $password="rkj71MfM";

	public function conexion(){
		try {
			$conexion = new PDO('mysql:host=198.52.110.228;dbname='.$this->bd,$this->usuario,$this->password);
			$conexion->exec("SET NAMES utf8");
			return $conexion;
		} catch (PDOException $e) {
			return false;
		}
	}
}