<?php 
class inmueble {
	// LISTA DE INMUEBLES
	public function listInmueble($usuario){
		$con = new conexion();
		$conexion = $con->conexion();
		$statement = $conexion->prepare("SELECT a.id_inmueble, a.nombre, 
			(SELECT b.foto FROM fotos b WHERE b.id_inmueble = a.id_inmueble LIMIT 1) AS foto, 
			c.estado, CONCAT('$',FORMAT(a.costo,2)) AS costo
			FROM inmueble a LEFT JOIN estado c ON a.estado = c.idestado
			WHERE a.id_usuario = :usuario;");
		$statement->execute(array(':usuario' => $usuario));
		return $statement->fetchAll();
	}
	// INSERTAR INMUEBLE
	public function insertInmueble($datos){
		$con = new conexion();
		$conexion = $con->conexion();
		$statement = $conexion->prepare("INSERT INTO inmueble (id_usuario,nombre,direccion,descripcion,tipo,opcion,costo,codigo) VALUES(:usuario, :nombre, :direccion, :descripcion, :tipo, :opcion, :costo, :codigo)");
		$statement->execute(array(
			':usuario' => limpiarDatos($datos[13]),
			':nombre' => limpiarDatos($datos[10]),
			':direccion' => limpiarDatos($datos[4]),
			':descripcion' => limpiarDatos($datos[9]),
			':tipo' => limpiarDatos($datos[0]),
			':opcion' => limpiarDatos($datos[1]),
			':costo' => limpiarDatos($datos[3]),
			':codigo' => limpiarDatos($datos[12])
		));
		return $statement->rowCount();
	}
	public function insertCaracteristica($datos){
		$con = new conexion();
		$conexion = $con->conexion();
		$statement = $conexion->prepare("INSERT INTO caracteristicas (id_inmueble,area,habitaciones,banios,estrato,administracion,parqueaderos) VALUES((SELECT id_inmueble FROM inmueble WHERE codigo = :codigo), :area, :habitaciones, :banios, :estrato, :administracion, :parqueaderos)");
		$statement->execute(array(
			':area' => limpiarDatos($datos[5]),
			':habitaciones' => limpiarDatos($datos[6]),
			':banios' => limpiarDatos($datos[7]),
			':estrato' => limpiarDatos($datos[2]),
			':administracion' => limpiarDatos($datos[11]),
			':parqueaderos' => limpiarDatos($datos[8]),
			':codigo' => limpiarDatos($datos[12])
		));
		return $statement->rowCount();
	}
	// VER INMUEBLE EDIT
	public function selectInmuebleEdit($id, $usuario){
		$con = new conexion();
		$conexion = $con->conexion();
		$statement = $conexion->prepare("SELECT a.id_inmueble,
			a.nombre,
			a.tipo,
			a.opcion,
			a.costo,
			b.estrato,
			a.direccion,
			b.area,
			b.habitaciones,
			b.banios,
			b.parqueaderos,
			b.administracion,
			a.descripcion
			FROM inmueble a
			LEFT JOIN caracteristicas b ON b.id_inmueble = a.id_inmueble
			WHERE a.id_inmueble = :id AND a.id_usuario = :usuario");
		$statement->execute(array(':id' => limpiarDatos($id), ':usuario' => limpiarDatos($usuario)));
		return $statement->fetch();
	}
	// MODIFICAR INMUEBLE
	public function updateInmueble($datos){
		$con = new conexion();
		$conexion = $con->conexion();
		$statement = $conexion->prepare("UPDATE inmueble SET nombre = :nombre, 
			direccion = :direccion, 
			descripcion = :descripcion, 
			tipo = :tipo, 
			opcion = :opcion,
			costo = :costo
			WHERE id_inmueble = :id");
		$statement->execute(array(
			':nombre' => limpiarDatos($datos[10]),
			':direccion' => limpiarDatos($datos[4]),
			':descripcion' => limpiarDatos($datos[9]),
			':tipo' => limpiarDatos($datos[0]),
			':opcion' => limpiarDatos($datos[1]),
			':costo' => limpiarDatos($datos[3]),
			':id' => limpiarDatos($datos[12])
		));
		return $statement->rowCount();
	}
	public function updateCaracteristica($datos){
		$con = new conexion();
		$conexion = $con->conexion();
		$statement = $conexion->prepare("UPDATE caracteristicas SET area = :area,
			habitaciones = :habitaciones,
			banios = :banios,
			estrato = :estrato,
			administracion = :administracion,
			parqueaderos = :parqueaderos
			WHERE id_inmueble = :id");
		$statement->execute(array(
			':area' => limpiarDatos($datos[5]),
			':habitaciones' => limpiarDatos($datos[6]),
			':banios' => limpiarDatos($datos[7]),
			':estrato' => limpiarDatos($datos[2]),
			':administracion' => limpiarDatos($datos[11]),
			':parqueaderos' => limpiarDatos($datos[8]),
			':id' => limpiarDatos($datos[12])
		));
		return $statement->rowCount();
	}
}