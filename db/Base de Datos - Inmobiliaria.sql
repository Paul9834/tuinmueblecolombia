-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for tu_inmueble_co
CREATE DATABASE IF NOT EXISTS `tu_inmueble_co` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `tu_inmueble_co`;

-- Dumping structure for table tu_inmueble_co.caracteristicas
CREATE TABLE IF NOT EXISTS `caracteristicas` (
  `id_carac` int(11) NOT NULL AUTO_INCREMENT,
  `id_inmueble` int(11) NOT NULL,
  `area` decimal(10,2) NOT NULL,
  `habitaciones` smallint(3) NOT NULL,
  `banios` smallint(3) NOT NULL,
  `estrato` smallint(1) NOT NULL,
  `administracion` int(11) NOT NULL,
  `parqueaderos` smallint(3) NOT NULL,
  PRIMARY KEY (`id_carac`),
  KEY `id_inmueble` (`id_inmueble`),
  CONSTRAINT `FKcarac_inmueble` FOREIGN KEY (`id_inmueble`) REFERENCES `inmueble` (`id_inmueble`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tu_inmueble_co.caracteristicas: ~0 rows (approximately)
/*!40000 ALTER TABLE `caracteristicas` DISABLE KEYS */;
INSERT IGNORE INTO `caracteristicas` (`id_carac`, `id_inmueble`, `area`, `habitaciones`, `banios`, `estrato`, `administracion`, `parqueaderos`) VALUES
	(1, 2, 65.00, 3, 2, 4, 100000, 1),
	(2, 3, 65.00, 3, 2, 4, 100000, 1),
	(3, 4, 5.00, 0, 7, 3, 140000, 0),
	(4, 5, 40.00, 1, 0, 3, 123444, 0),
	(5, 6, 65.00, 5, 3, 4, 0, 3),
	(6, 7, 3.00, 3, 3, 3, 2323, 3);
/*!40000 ALTER TABLE `caracteristicas` ENABLE KEYS */;

-- Dumping structure for table tu_inmueble_co.estado
CREATE TABLE IF NOT EXISTS `estado` (
  `idestado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`idestado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tu_inmueble_co.estado: ~3 rows (approximately)
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT IGNORE INTO `estado` (`idestado`, `estado`) VALUES
	(1, 'Activo'),
	(2, 'En Espera'),
	(3, 'Inactivo');
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;

-- Dumping structure for table tu_inmueble_co.fotos
CREATE TABLE IF NOT EXISTS `fotos` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `id_inmueble` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `id_inmueble` (`id_inmueble`),
  CONSTRAINT `FKfoto_inmueble` FOREIGN KEY (`id_inmueble`) REFERENCES `inmueble` (`id_inmueble`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tu_inmueble_co.fotos: ~0 rows (approximately)
/*!40000 ALTER TABLE `fotos` DISABLE KEYS */;
INSERT IGNORE INTO `fotos` (`id_foto`, `id_inmueble`, `foto`) VALUES
	(1, 3, 'apartment-406901_1280.jpg'),
	(2, 3, 'apartment-1851201_1280.jpg');
/*!40000 ALTER TABLE `fotos` ENABLE KEYS */;

-- Dumping structure for table tu_inmueble_co.inmueble
CREATE TABLE IF NOT EXISTS `inmueble` (
  `id_inmueble` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(20) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 2,
  `tipo` int(11) NOT NULL,
  `opcion` int(11) NOT NULL,
  `costo` bigint(20) NOT NULL,
  `fechacrea` timestamp NOT NULL DEFAULT current_timestamp(),
  `fechamod` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_inmueble`),
  UNIQUE KEY `codigo` (`codigo`),
  KEY `id_usuario` (`id_usuario`),
  KEY `estado` (`estado`),
  KEY `tipo` (`tipo`),
  KEY `opcion` (`opcion`),
  CONSTRAINT `FKinmueble_estado` FOREIGN KEY (`estado`) REFERENCES `estado` (`idestado`),
  CONSTRAINT `FKinmueble_opcion` FOREIGN KEY (`opcion`) REFERENCES `opcion_inmueble` (`id_opcion`),
  CONSTRAINT `FKinmueble_tipo` FOREIGN KEY (`tipo`) REFERENCES `tipo_inmueble` (`id_tipo`),
  CONSTRAINT `FKinmueble_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tu_inmueble_co.inmueble: ~0 rows (approximately)
/*!40000 ALTER TABLE `inmueble` DISABLE KEYS */;
INSERT IGNORE INTO `inmueble` (`id_inmueble`, `codigo`, `id_usuario`, `nombre`, `direccion`, `descripcion`, `estado`, `tipo`, `opcion`, `costo`, `fechacrea`, `fechamod`) VALUES
	(1, 'VX5oUspP4MHxIWA', 1000853916, 'Mi inmueble', 'Calle 56a #79-43', 'Mi descripcion', 2, 1, 2, 1000000, '2021-04-03 21:11:49', '2021-04-03 21:11:49'),
	(2, 'sGbgXq1TZbjI7d', 1000853916, 'Mi inmueble 2', 'Calle 56a #79-43', 'Mi descripcion 2', 2, 1, 1, 100000, '2021-04-03 21:21:21', '2021-04-03 21:21:21'),
	(3, '9XfKT58pKbf7crf', 1000853916, 'Mi inmueble 2.0', 'Calle 56a #79-43', 'Mi descripcion 1234', 1, 1, 2, 250000, '2021-04-03 21:21:42', '2021-04-04 18:24:37'),
	(4, 'A5PYZ7KKIrBjHr', 1000853916, 'mueble3', 'sd fsgfss', 'dafasdgasf', 2, 1, 1, 150000, '2021-04-03 21:50:19', '2021-04-03 21:50:19'),
	(5, 'wiIX9fEqQfQvxqx', 1000853916, 'modal4', 'safgsafg', 'afsdfs', 2, 1, 1, 12431, '2021-04-03 21:55:27', '2021-04-03 21:55:27'),
	(6, 'PjQdSPnI9l9kr', 1000853916, 'Mi nuevo inmueble', 'Los Rosales', 'Mi descripcion Nueva', 2, 1, 1, 250000000, '2021-04-04 15:40:12', '2021-04-04 15:40:12'),
	(7, 'CJncThzvmHG2fW', 1000853916, 'inm456', 'weetert', 'fdghgh', 2, 1, 1, 141566, '2021-04-04 17:21:44', '2021-04-04 18:24:04');
/*!40000 ALTER TABLE `inmueble` ENABLE KEYS */;

-- Dumping structure for table tu_inmueble_co.opcion_inmueble
CREATE TABLE IF NOT EXISTS `opcion_inmueble` (
  `id_opcion` int(11) NOT NULL AUTO_INCREMENT,
  `opcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id_opcion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tu_inmueble_co.opcion_inmueble: ~2 rows (approximately)
/*!40000 ALTER TABLE `opcion_inmueble` DISABLE KEYS */;
INSERT IGNORE INTO `opcion_inmueble` (`id_opcion`, `opcion`) VALUES
	(1, 'Venta'),
	(2, 'Arriendo');
/*!40000 ALTER TABLE `opcion_inmueble` ENABLE KEYS */;

-- Dumping structure for table tu_inmueble_co.tipo_inmueble
CREATE TABLE IF NOT EXISTS `tipo_inmueble` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tu_inmueble_co.tipo_inmueble: ~2 rows (approximately)
/*!40000 ALTER TABLE `tipo_inmueble` DISABLE KEYS */;
INSERT IGNORE INTO `tipo_inmueble` (`id_tipo`, `tipo`) VALUES
	(1, 'Casa'),
	(2, 'Apartamento');
/*!40000 ALTER TABLE `tipo_inmueble` ENABLE KEYS */;

-- Dumping structure for table tu_inmueble_co.tipo_usuario
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  `descr` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tu_inmueble_co.tipo_usuario: ~0 rows (approximately)
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;

-- Dumping structure for table tu_inmueble_co.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `cedula` int(11) NOT NULL DEFAULT 0,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `clave` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `edad` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 0,
  `fechacrea` timestamp NOT NULL DEFAULT current_timestamp(),
  `fechamod` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`cedula`) USING BTREE,
  UNIQUE KEY `Correo` (`correo`) USING BTREE,
  KEY `estado` (`estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table tu_inmueble_co.usuarios: ~3 rows (approximately)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT IGNORE INTO `usuarios` (`cedula`, `nombre`, `apellido`, `correo`, `clave`, `tipo`, `edad`, `estado`, `fechacrea`, `fechamod`) VALUES
	(1234, 'lorem', 'ipsum', 'correo@prueba.com', '$2y$10$/xiOCPkxtqk8QDy7dh3Vv./oVxhNPn3gsxqIVB/GIkdQiRr.RkSvK', 'clt', '34', 0, '2021-04-03 15:06:08', '2021-04-03 15:06:08'),
	(431454512, 'Andrea', 'Gomez', 'andreagomez@gmail.com', '$2y$10$mHh/zOIoi5t0YSMs4KFS9.TpXyR0DPKy7O13FhNopj6kvWquLjvFm', 'clt', '20', 0, '2021-04-03 15:06:08', '2021-04-03 15:06:08'),
	(1000853916, 'David', 'Garcia', 'carlosdavidgarcialopez@gmail.com', '$2y$10$mHh/zOIoi5t0YSMs4KFS9.TpXyR0DPKy7O13FhNopj6kvWquLjvFm', 'clt', '21', 0, '2021-04-03 15:06:08', '2021-04-03 15:06:08');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
