-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-08-2022 a las 00:20:49
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sevicol_v1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

DROP TABLE IF EXISTS `inicio`;
CREATE TABLE IF NOT EXISTS `inicio` (
  `Pcod` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Pcod`),
  UNIQUE KEY `Pcod` (`Pcod`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`Pcod`, `usuario`, `clave`, `email`) VALUES
(1, 'Sevicol020', '1234567890', 'sevicol@gmail.com'),
(2, 'ZonaPro', 'ZONAXD16', 'ZONA@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `minuta`
--

DROP TABLE IF EXISTS `minuta`;
CREATE TABLE IF NOT EXISTS `minuta` (
  `cod_min` int NOT NULL AUTO_INCREMENT,
  `hora_entrada` varchar(30) NOT NULL,
  `hora_salida` varchar(30) NOT NULL,
  `fecha_min` varchar(30) NOT NULL,
  `fcod_usu` int DEFAULT NULL,
  `fcod_pt` int DEFAULT NULL,
  `fcod_vi` int DEFAULT NULL,
  PRIMARY KEY (`cod_min`),
  KEY `anexa` (`fcod_usu`),
  KEY `gana` (`fcod_pt`),
  KEY `obtiene` (`fcod_vi`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `minuta`
--

INSERT INTO `minuta` (`cod_min`, `hora_entrada`, `hora_salida`, `fecha_min`, `fcod_usu`, `fcod_pt`, `fcod_vi`) VALUES
(1, '12:10', '14:45', '04/10/2020', 1, 1, 2),
(2, '13:12', '16:37', '10/01/2021', 2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto_de_trabajo`
--

DROP TABLE IF EXISTS `puesto_de_trabajo`;
CREATE TABLE IF NOT EXISTS `puesto_de_trabajo` (
  `cod_pt` int NOT NULL AUTO_INCREMENT,
  `nom_pt` varchar(50) NOT NULL,
  `tel_pt` varchar(30) NOT NULL,
  `dir_pt` varchar(30) NOT NULL,
  `nom_mat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cod_pt`),
  KEY `contiene` (`nom_mat`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `puesto_de_trabajo`
--

INSERT INTO `puesto_de_trabajo` (`cod_pt`, `nom_pt`, `tel_pt`, `dir_pt`, `nom_mat`) VALUES
(1, 'Julio Florez', '305 792 3922', 'Cra. 68b #94-12, Bogotá', 'radio,linterna,tomfa, portatomfa,pito,lllaves,sistema de alarmas,celular corporativo'),
(2, 'Santa Rosa', '300 207 2701', 'Calle 102A 70 40 Bogotá - Colo', 'radio,linterna,tomfa,portatomfa,pito,sistemas de alarmas,boton de alarmas,celular corporativo,llaves');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

DROP TABLE IF EXISTS `turnos`;
CREATE TABLE IF NOT EXISTS `turnos` (
  `cod_turn` int NOT NULL AUTO_INCREMENT,
  `nom_turn` varchar(30) NOT NULL,
  `hora` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_turn`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`cod_turn`, `nom_turn`, `hora`) VALUES
(1, 'Diurno', '5:45-17:45'),
(2, 'Nocturno', '17:45-5:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_usu` int NOT NULL AUTO_INCREMENT,
  `nom_usu` varchar(50) NOT NULL,
  `tel_usu` varchar(30) NOT NULL,
  `nid_usu` varchar(30) NOT NULL,
  `objeto` varchar(30) NOT NULL,
  `razon` varchar(100) NOT NULL,
  PRIMARY KEY (`cod_usu`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_usu`, `nom_usu`, `tel_usu`, `nid_usu`, `objeto`, `razon`) VALUES
(1, 'Carlos Arturo', '3111111111', '01111111111', 'Ninguno', 'Vengo a hablar coordinadora de bachiller'),
(2, 'Jose Miguel', '3222222222', '02222222222', 'Maletin con papeles de matricu', 'Vengo a matricular a mis hijos en el colegio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vigilante`
--

DROP TABLE IF EXISTS `vigilante`;
CREATE TABLE IF NOT EXISTS `vigilante` (
  `cod_vi` int NOT NULL AUTO_INCREMENT,
  `nom_vi` varchar(30) NOT NULL,
  `tel_vi` varchar(30) NOT NULL,
  `ndi_vi` varchar(30) NOT NULL,
  `rh_vi` varchar(5) NOT NULL,
  `genero_vi` varchar(10) NOT NULL,
  `fcod_pt` int DEFAULT NULL,
  `fcod_turn` int DEFAULT NULL,
  PRIMARY KEY (`cod_vi`),
  KEY `adquiere` (`fcod_turn`),
  KEY `tiene` (`fcod_pt`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `vigilante`
--

INSERT INTO `vigilante` (`cod_vi`, `nom_vi`, `tel_vi`, `ndi_vi`, `rh_vi`, `genero_vi`, `fcod_pt`, `fcod_turn`) VALUES
(1, 'Daniel Juez', '3123456789', '1111111111', 'O+', 'Masculino', 1, 1),
(2, 'Laura Barrera', '2123456789', '2222222222', 'B+', 'Femenino', 2, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
