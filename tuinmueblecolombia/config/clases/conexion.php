<?php 
class conexion{
	private $servidor="tvcpw8tpu4jvgnnq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
	private $usuario="h3wjp2gusc5xgpd5";
	private $bd="vcwmpas5owm5kxid";
	private $password="nqe61rwmdd1oz3mg";

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
