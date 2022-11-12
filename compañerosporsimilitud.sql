-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for compañerosporsimilitud
CREATE DATABASE IF NOT EXISTS `compañerosporsimilitud` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `compañerosporsimilitud`;

-- Dumping structure for table compañerosporsimilitud.adultomayor
CREATE TABLE IF NOT EXISTS `adultomayor` (
  `id` int(10) NOT NULL,
  `nombre1` varchar(50) NOT NULL,
  `nombre2` varchar(50) DEFAULT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT '',
  `estado` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table compañerosporsimilitud.adultomayor: ~4 rows (approximately)
REPLACE INTO `adultomayor` (`id`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `celular`, `direccion`, `foto`, `estado`) VALUES
	(1234567890, 'Jaime', 'Alexander', 'Jimenez', 'Alvarez', '3214567890', 'Cra. 50 #12-12', 'jaja890.jpg', 0),
	(1345678902, 'Pedro', 'Ulieser', 'Tovar', 'Orozco', '3224567890', 'Calle 50  #13-13', 'puto902.jpg', 0),
	(1456789023, 'Paula', NULL, 'Acuña', 'Vargas', '3234567890', 'Cra. 70 #14-14', 'pav023.jpg', 0),
	(1567890234, 'Andrea', NULL, 'Alvarez', NULL, '3244567890', 'Calle 70 #15-15', 'aa234.jpg', 0);

-- Dumping structure for table compañerosporsimilitud.canino
CREATE TABLE IF NOT EXISTS `canino` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_adopcion_inicial` datetime NOT NULL,
  `fecha_adopcion_final` datetime NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT '',
  `id_tipo_canino` int(10) NOT NULL,
  `id_refugio` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `FK-TipoCanino` (`id_tipo_canino`),
  KEY `FK-Refugio` (`id_refugio`),
  CONSTRAINT `FK-Refugio` FOREIGN KEY (`id_refugio`) REFERENCES `refugio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK-TipoCanino` FOREIGN KEY (`id_tipo_canino`) REFERENCES `tipocanino` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table compañerosporsimilitud.canino: ~3 rows (approximately)
REPLACE INTO `canino` (`id`, `nombre`, `fecha_adopcion_inicial`, `fecha_adopcion_final`, `foto`, `id_tipo_canino`, `id_refugio`, `estado`) VALUES
	(123, 'qwes', '2022-11-17 00:00:00', '2022-11-23 00:00:00', 'qwes.jpg', 2, 2, 0),
	(1234, 'Zeus', '2022-10-16 21:45:56', '2022-11-16 21:45:58', 'zeus432.jpg', 2, 2, 0),
	(5321, 'Rocky', '2022-10-16 21:47:40', '2022-11-16 21:47:44', 'rocky532.jpg', 1, 1, 0);

-- Dumping structure for table compañerosporsimilitud.login
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table compañerosporsimilitud.login: ~2 rows (approximately)
REPLACE INTO `login` (`username`, `password`) VALUES
	('admin', '1234'),
	('Alez', '4321');

-- Dumping structure for table compañerosporsimilitud.monitoreo
CREATE TABLE IF NOT EXISTS `monitoreo` (
  `id` int(11) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `latitud` decimal(9,6) NOT NULL DEFAULT 0.000000,
  `longitud` decimal(9,6) NOT NULL DEFAULT 0.000000,
  `id_canino` int(11) NOT NULL,
  `id_simon` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK-Simon` (`id_simon`),
  KEY `FK-CaninoM` (`id_canino`) USING BTREE,
  CONSTRAINT `FK-CaninoM` FOREIGN KEY (`id_canino`) REFERENCES `canino` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK-Simon` FOREIGN KEY (`id_simon`) REFERENCES `simon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table compañerosporsimilitud.monitoreo: ~0 rows (approximately)

-- Dumping structure for table compañerosporsimilitud.perfil
CREATE TABLE IF NOT EXISTS `perfil` (
  `cod_perfil` int(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`cod_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table compañerosporsimilitud.perfil: ~3 rows (approximately)
REPLACE INTO `perfil` (`cod_perfil`, `descripcion`, `estado`) VALUES
	(1, 'Administrador', 0),
	(2, 'Cliente', 0),
	(21, 'wqeqwe', 0);

-- Dumping structure for table compañerosporsimilitud.programacion
CREATE TABLE IF NOT EXISTS `programacion` (
  `id_programacion` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `hora_inicial` time NOT NULL,
  `hora_final` time NOT NULL,
  `fecha` date NOT NULL,
  `id_canino` int(11) NOT NULL DEFAULT 0,
  `id_adultoMayor` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_programacion`) USING BTREE,
  KEY `FK-AdultoMayor` (`id_adultoMayor`),
  KEY `FK-CaninoP` (`id_canino`),
  CONSTRAINT `FK-AdultoMayor` FOREIGN KEY (`id_adultoMayor`) REFERENCES `adultomayor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK-CaninoP` FOREIGN KEY (`id_canino`) REFERENCES `canino` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table compañerosporsimilitud.programacion: ~0 rows (approximately)

-- Dumping structure for table compañerosporsimilitud.refugio
CREATE TABLE IF NOT EXISTS `refugio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL DEFAULT '',
  `celular` varchar(10) NOT NULL DEFAULT '',
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table compañerosporsimilitud.refugio: ~3 rows (approximately)
REPLACE INTO `refugio` (`id`, `nombre`, `direccion`, `telefono`, `celular`, `estado`) VALUES
	(1, 'Las Rosas', 'Calle 56', '2020200', '3132456789', 0),
	(2, 'Las Margaritas', 'Cra. 57', '1010100', '3124567890', 0),
	(3, 'Los Teletubis', 'Cra. 2', '3030300', '3142567890', 1);

-- Dumping structure for table compañerosporsimilitud.simon
CREATE TABLE IF NOT EXISTS `simon` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL DEFAULT '',
  `estado` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table compañerosporsimilitud.simon: ~2 rows (approximately)
REPLACE INTO `simon` (`id`, `descripcion`, `estado`) VALUES
	(1, '1', 0),
	(2, 'no sé', 0);

-- Dumping structure for table compañerosporsimilitud.tipocanino
CREATE TABLE IF NOT EXISTS `tipocanino` (
  `id` int(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `estado` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table compañerosporsimilitud.tipocanino: ~2 rows (approximately)
REPLACE INTO `tipocanino` (`id`, `descripcion`, `estado`) VALUES
	(1, 'Pit Bull', 1),
	(2, 'Chihuahua', 1);

-- Dumping structure for table compañerosporsimilitud.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `cc` int(10) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `clave` varchar(50) NOT NULL DEFAULT '',
  `cod_perfil` int(10) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`cc`) USING BTREE,
  KEY `FK-perfil` (`cod_perfil`),
  CONSTRAINT `FK-perfil` FOREIGN KEY (`cod_perfil`) REFERENCES `perfil` (`cod_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table compañerosporsimilitud.usuario: ~3 rows (approximately)
REPLACE INTO `usuario` (`cc`, `nombre`, `clave`, `cod_perfil`, `estado`) VALUES
	(235783, 'Alexander', '1234', 2, 0),
	(1234567, 'Alez', '4321', 1, 0),
	(2345678, 'admin', '1234', 1, 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
