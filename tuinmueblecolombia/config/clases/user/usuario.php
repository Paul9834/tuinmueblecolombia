<?php 
class usuario {
	// VALIDAR USUARIO
	public function validaUsuario($datos, $conexion){
		$statement = $conexion->prepare('SELECT clave FROM usuarios WHERE correo = :correo');
		$statement->execute(array(':correo' => $datos[0]));
		$resultado = $statement->fetch()[0];
		return password_verify($datos[1], $resultado);
	}
	// DATOS SESION
	public function datosSesion($datos){
		$con = new conexion();
		$conexion = $con->conexion();
		$validar = self::validaUsuario($datos, $conexion);
		if ($validar) {
			$statement = $conexion->prepare("SELECT a.correo, a.cedula, a.nombre, a.apellido, a.tipo FROM usuarios a  WHERE a.correo=:correo");
			$statement->execute(array(':correo'=>limpiarDatos($datos[0])));
			return $statement->fetch();
		} else {
			return false;
		}
	}
	// DATOS USAURIO CODIGO
	public function datosUsuario($correo){
		$con = new conexion();
		$conexion = $con->conexion();
		$statement = $conexion->prepare("SELECT a.cedula, a.nombre, a.apellido, a.correo, a.edad FROM usuarios a WHERE correo = :correo");
		$statement->execute(array(':correo'=>limpiarDatos($correo)));
		return $statement->fetch();
	}
	// VER USUARIO
	// INSERTAR USUARIO
	public function insertUsuario($datos){
		$con = new conexion();
		$conexion = $con->conexion();
		$statement = $conexion->prepare("INSERT INTO usuarios (correo, nombre, apellido, cedula, edad, clave, tipo) VALUES(:correo, :nombre, :apellido, :cedula, :edad, :clave, :tipo)");
		$statement->execute(array(
			':correo' => limpiarDatos($datos[0]),
			':nombre' => limpiarDatos($datos[1]),
			':apellido' => limpiarDatos($datos[2]),
			':cedula' => limpiarDatos($datos[3]),
			':edad' => limpiarDatos($datos[4]),
			':clave' => password_hash(limpiarDatos($datos[5]), PASSWORD_DEFAULT),
			':tipo' => limpiarDatos($datos[6])
		));
		return $statement->rowCount();
	}
	// MODIFICAR USUARIO
	public function updateUsuario($datos){
		$con = new conexion();
		$conexion = $con->conexion();
		$statement = $conexion->prepare("UPDATE usuarios SET nombre = :nombre, apellido = :apellido, cedula = :cedula, edad = :edad, correo = :correo WHERE correo = :correo");
		$statement->execute(array(':nombre' => limpiarDatos($datos[0]), ':apellido' => limpiarDatos($datos[1]), ':cedula' => limpiarDatos($datos[2]), ':edad' => limpiarDatos($datos[3]), ':correo' => limpiarDatos($datos[4])));
		return $statement->rowCount();
	}
	// ELIMINAR USUARIO
}