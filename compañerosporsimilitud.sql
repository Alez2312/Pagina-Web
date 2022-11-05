-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.25-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para compañerosporsimilitud
CREATE DATABASE IF NOT EXISTS `compañerosporsimilitud` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `compañerosporsimilitud`;

-- Volcando estructura para tabla compañerosporsimilitud.adultomayor
CREATE TABLE IF NOT EXISTS `adultomayor` (
  `id_adultoMayor` int(10) NOT NULL,
  `nombre1` varchar(50) NOT NULL,
  `nombre2` varchar(50) DEFAULT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT '',
  `estado` char(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_adultoMayor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla compañerosporsimilitud.adultomayor: ~4 rows (aproximadamente)
REPLACE INTO `adultomayor` (`id_adultoMayor`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `celular`, `direccion`, `foto`, `estado`) VALUES
	(1234567890, 'Jaime', 'Alexander', 'Jimenez', 'Alvarez', '3214567890', 'Cra. 50 #12-12', 'jaja890.jpg', 'Activo'),
	(1345678902, 'Pedro', 'Ulieser', 'Tovar', 'Orozco', '3224567890', 'Calle 50  #13-13', 'puto902.jpg', 'Activo'),
	(1456789023, 'Paula', NULL, 'Acuña', 'Vargas', '3234567890', 'Cra. 70 #14-14', 'pav023.jpg', 'Activo'),
	(1567890234, 'Andrea', NULL, 'Alvarez', NULL, '3244567890', 'Calle 70 #15-15', 'aa234.jpg', 'Activo');

-- Volcando estructura para tabla compañerosporsimilitud.canino
CREATE TABLE IF NOT EXISTS `canino` (
  `id_canino` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_adopcion_inicla` datetime NOT NULL,
  `fecha_adopcion_final` datetime NOT NULL,
  `latitud` varchar(50) DEFAULT NULL,
  `longitud` varchar(50) DEFAULT NULL,
  `carnet` text NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT '',
  `id_tipo_canino` int(10) NOT NULL,
  `id_refugio` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_canino`),
  KEY `FK-TipoCanino` (`id_tipo_canino`),
  KEY `FK-Refugio` (`id_refugio`),
  CONSTRAINT `FK-Refugio` FOREIGN KEY (`id_refugio`) REFERENCES `refugio` (`id_refugio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK-TipoCanino` FOREIGN KEY (`id_tipo_canino`) REFERENCES `tipocanino` (`id_tipo_canino`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla compañerosporsimilitud.canino: ~2 rows (aproximadamente)
REPLACE INTO `canino` (`id_canino`, `nombre`, `fecha_adopcion_inicla`, `fecha_adopcion_final`, `latitud`, `longitud`, `carnet`, `foto`, `id_tipo_canino`, `id_refugio`, `estado`) VALUES
	(1234, 'Zeus', '2022-10-16 21:45:56', '2022-11-16 21:45:58', '1456', '1456', 'Sì', 'zeus432.jpg', 2, 2, 'Activo'),
	(5321, 'Rocky', '2022-10-16 21:47:40', '2022-11-16 21:47:44', '1234', '1234', 'Sí', 'rocky532.jpg', 1, 1, 'Activo');

-- Volcando estructura para tabla compañerosporsimilitud.monitoreo
CREATE TABLE IF NOT EXISTS `monitoreo` (
  `id_monitoreo` int(11) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `latitud` decimal(9,6) NOT NULL DEFAULT 0.000000,
  `longitud` decimal(9,6) NOT NULL DEFAULT 0.000000,
  `id_canino` int(11) NOT NULL,
  `id_simon` int(11) NOT NULL,
  PRIMARY KEY (`id_monitoreo`) USING BTREE,
  KEY `FK-Simon` (`id_simon`),
  KEY `FK-CaninoM` (`id_canino`) USING BTREE,
  CONSTRAINT `FK-CaninoM` FOREIGN KEY (`Id_canino`) REFERENCES `canino` (`id_canino`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK-Simon` FOREIGN KEY (`id_simon`) REFERENCES `simon` (`id_simon`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla compañerosporsimilitud.monitoreo: ~0 rows (aproximadamente)

-- Volcando estructura para tabla compañerosporsimilitud.perfil
CREATE TABLE IF NOT EXISTS `perfil` (
  `cod_perfil` int(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`cod_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla compañerosporsimilitud.perfil: ~2 rows (aproximadamente)
REPLACE INTO `perfil` (`cod_perfil`, `descripcion`, `estado`) VALUES
	(1, 'Administrador', 'Activo'),
	(2, 'Cliente', 'Activo');

-- Volcando estructura para tabla compañerosporsimilitud.programacion
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
  CONSTRAINT `FK-AdultoMayor` FOREIGN KEY (`id_adultoMayor`) REFERENCES `adultomayor` (`id_adultoMayor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK-CaninoP` FOREIGN KEY (`id_canino`) REFERENCES `canino` (`id_canino`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla compañerosporsimilitud.programacion: ~0 rows (aproximadamente)

-- Volcando estructura para tabla compañerosporsimilitud.refugio
CREATE TABLE IF NOT EXISTS `refugio` (
  `id_refugio` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(7) NOT NULL DEFAULT '',
  `celular` varchar(10) NOT NULL DEFAULT '',
  `estado` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_refugio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla compañerosporsimilitud.refugio: ~3 rows (aproximadamente)
REPLACE INTO `refugio` (`id_refugio`, `nombre`, `direccion`, `telefono`, `celular`, `estado`) VALUES
	(1, 'Las Rosas', 'Calle 56 #17-17', '2020200', '3132456789', 'Activo'),
	(2, 'Las Margaritas', 'Cra. 56 #16-16', '1010100', '3124567890', 'Activo'),
	(3, 'Los Teletubis', 'Cra. 20 #18-18', '3030300', '3142567890', 'Activo');

-- Volcando estructura para tabla compañerosporsimilitud.simon
CREATE TABLE IF NOT EXISTS `simon` (
  `id_simon` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL DEFAULT '',
  `latitud` varchar(50) NOT NULL DEFAULT '0',
  `longitud` varchar(50) NOT NULL DEFAULT '0',
  `estado` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_simon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla compañerosporsimilitud.simon: ~2 rows (aproximadamente)
REPLACE INTO `simon` (`id_simon`, `descripcion`, `latitud`, `longitud`, `estado`) VALUES
	(1, '0', '890', '567', 'Activo'),
	(2, 'no sé', '456', '765', 'Activo');

-- Volcando estructura para tabla compañerosporsimilitud.tipocanino
CREATE TABLE IF NOT EXISTS `tipocanino` (
  `id_tipo_canino` int(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `estado` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id_tipo_canino`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla compañerosporsimilitud.tipocanino: ~3 rows (aproximadamente)
REPLACE INTO `tipocanino` (`id_tipo_canino`, `descripcion`, `estado`) VALUES
	(1, 'Pit Bull', 1),
	(2, 'Chihuahua', 1),
	(3, 'Pastor alemán', 1);

-- Volcando estructura para tabla compañerosporsimilitud.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `Cc` int(10) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `clave` varchar(50) NOT NULL DEFAULT '',
  `cod_perfil` int(10) NOT NULL,
  `estado` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`Cc`),
  KEY `FK-perfil` (`cod_perfil`),
  CONSTRAINT `FK-perfil` FOREIGN KEY (`cod_perfil`) REFERENCES `perfil` (`cod_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla compañerosporsimilitud.usuario: ~2 rows (aproximadamente)
REPLACE INTO `usuario` (`Cc`, `nombre`, `clave`, `cod_perfil`, `estado`) VALUES
	(1234567, 'Alez', '4321', 1, 'Activo'),
	(2345678, 'admin', '1234', 1, 'Activo');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
