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


-- Dumping database structure for companerosporsimilitud
CREATE DATABASE IF NOT EXISTS `companerosporsimilitud` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `companerosporsimilitud`;

-- Dumping structure for table companerosporsimilitud.adultomayor
CREATE TABLE IF NOT EXISTS `adultomayor` (
  `id` int(10) NOT NULL,
  `nombre1` varchar(50) NOT NULL,
  `nombre2` varchar(50) DEFAULT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) DEFAULT NULL,
  `celular` varchar(10) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table companerosporsimilitud.adultomayor: ~1 rows (approximately)
REPLACE INTO `adultomayor` (`id`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `celular`, `direccion`, `foto`, `estado`) VALUES
	(123456789, 'Alez', '', 'Perez', '', '3211243431', 'Calle 56 ', 'Alejandro.jpg', 1);

-- Dumping structure for table companerosporsimilitud.canino
CREATE TABLE IF NOT EXISTS `canino` (
  `id_canino` int(10) NOT NULL,
  `nombre_canino` varchar(50) NOT NULL,
  `fecha_adopcion_inicial` date NOT NULL,
  `fecha_adopcion_final` date NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT '',
  `id_tipo_canino` int(10) NOT NULL,
  `id_refugio` int(11) NOT NULL,
  `estado_canino` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_canino`),
  KEY `FK_canino_refugio` (`id_refugio`),
  CONSTRAINT `FK_canino_refugio` FOREIGN KEY (`id_refugio`) REFERENCES `refugio` (`id_refugio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table companerosporsimilitud.canino: ~0 rows (approximately)
REPLACE INTO `canino` (`id_canino`, `nombre_canino`, `fecha_adopcion_inicial`, `fecha_adopcion_final`, `foto`, `id_tipo_canino`, `id_refugio`, `estado_canino`) VALUES
	(12345, 'Zeus', '2022-11-23', '2022-11-30', 'Pug01.jpg', 3, 12345, 1);

-- Dumping structure for table companerosporsimilitud.login
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table companerosporsimilitud.login: ~2 rows (approximately)
REPLACE INTO `login` (`username`, `password`) VALUES
	('admin', '1234'),
	('Alez', '4321');

-- Dumping structure for table companerosporsimilitud.monitoreo
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
  CONSTRAINT `FK-CaninoM` FOREIGN KEY (`id_canino`) REFERENCES `canino` (`id_canino`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK-Simon` FOREIGN KEY (`id_simon`) REFERENCES `simon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table companerosporsimilitud.monitoreo: ~0 rows (approximately)

-- Dumping structure for table companerosporsimilitud.perfil
CREATE TABLE IF NOT EXISTS `perfil` (
  `cod_perfil` int(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`cod_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table companerosporsimilitud.perfil: ~2 rows (approximately)
REPLACE INTO `perfil` (`cod_perfil`, `descripcion`, `estado`) VALUES
	(1, 'Administrador', 1),
	(2, 'Cliente', 0);

-- Dumping structure for table companerosporsimilitud.programacion
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
  CONSTRAINT `FK-CaninoP` FOREIGN KEY (`id_canino`) REFERENCES `canino` (`id_canino`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table companerosporsimilitud.programacion: ~0 rows (approximately)

-- Dumping structure for table companerosporsimilitud.refugio
CREATE TABLE IF NOT EXISTS `refugio` (
  `id_refugio` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL DEFAULT '',
  `celular` varchar(10) NOT NULL DEFAULT '',
  `estado_refugio` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_refugio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table companerosporsimilitud.refugio: ~0 rows (approximately)
REPLACE INTO `refugio` (`id_refugio`, `nombre`, `direccion`, `telefono`, `celular`, `estado_refugio`) VALUES
	(12345, 'Las margaritas', 'Calle 56 ', '3214567890', '3123456789', 1);

-- Dumping structure for table companerosporsimilitud.simon
CREATE TABLE IF NOT EXISTS `simon` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL DEFAULT '',
  `estado` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table companerosporsimilitud.simon: ~2 rows (approximately)
REPLACE INTO `simon` (`id`, `descripcion`, `estado`) VALUES
	(1, '1', 0),
	(2, 'no sé', 0);

-- Dumping structure for table companerosporsimilitud.tipocanino
CREATE TABLE IF NOT EXISTS `tipocanino` (
  `id_tipo_canino` int(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `estado` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id_tipo_canino`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table companerosporsimilitud.tipocanino: ~4 rows (approximately)
REPLACE INTO `tipocanino` (`id_tipo_canino`, `descripcion`, `estado`) VALUES
	(1, 'Pit Bull', 0),
	(2, 'Chihuahua', 1),
	(3, 'Pug', 1),
	(4, 'Común', 0);

-- Dumping structure for table companerosporsimilitud.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `cc` int(10) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `clave` varchar(50) NOT NULL DEFAULT '',
  `cod_perfil` int(10) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`cc`) USING BTREE,
  KEY `FK-perfil` (`cod_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table companerosporsimilitud.usuario: ~2 rows (approximately)
REPLACE INTO `usuario` (`cc`, `nombre`, `clave`, `cod_perfil`, `estado`) VALUES
	(2345678, 'admin', '1234', 1, 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
