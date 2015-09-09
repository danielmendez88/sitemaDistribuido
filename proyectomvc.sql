-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2015 a las 07:16:26
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyectomvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `razonsocial` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `razonsocial`) VALUES
(2, 'Jeff ', 'Bezos', 'Amazon, Inc'),
(3, 'Larry', 'Page', 'Google'),
(4, 'Marc ', 'Randolph', 'Netflix, Inc'),
(5, 'Michael ', 'Dell', 'Dell, Inc.'),
(6, 'David ', 'Packard', 'Hewlett-Packard'),
(7, 'Bill ', 'Gates', 'Microsoft Corporation');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_compra`
--

CREATE TABLE IF NOT EXISTS `cliente_compra` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `productos_idproductos` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `cliente_id_cliente` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cliente_compra`
--

INSERT INTO `cliente_compra` (`id`, `productos_idproductos`, `cantidad`, `subtotal`, `cliente_id_cliente`) VALUES
(1, 1, 2, '23.00', 1),
(2, 2, 2, '22.00', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `idventa` int(11) NOT NULL,
  `total` decimal(5,2) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `cliente_id` int(10) NOT NULL,
  PRIMARY KEY (`idventa`),
  KEY `fk_compra_cliente1_idx` (`cliente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idproductos` int(11) NOT NULL AUTO_INCREMENT,
  `nombreproducto` varchar(50) NOT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `existencia` int(11) NOT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  `descripcion` text,
  PRIMARY KEY (`idproductos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproductos`, `nombreproducto`, `precio`, `existencia`, `codigo`, `descripcion`) VALUES
(1, 'iPhone 4S', '5800.99', 10, '101122', 'El Apple iPhone 4S es una mejora del iPhone 4 que, manteniendo el diseño original, actualiza su hardware. Posee la misma pantalla de 3.5 pulgadas a 640 x 960 pixels de resolución, pero por dentro posee un procesador dual-core A5 que provee el doble de velocidad.Además sube su velocidad de conectividad hasta 14.4Mbps HSPA, incorpora una cámara de 8 megapixels con captura de video 1080p y corre el renovado iOS 5.'),
(2, 'iPad mini 3', '3450.22', 4, '101244', 'El Apple iPad mini 3 es una pequeña actualización al iPad mini Retina, que incorpora Touch ID, el sensor de huellas dactilares de Apple. Más allá de ese agregado, el iPad mini 3 es prácticamente igual a su antecesor, conservando todas sus características'),
(3, 'iPhone 5S', '6750.99', 10, '101244', 'El Apple iPhone 5S sucede al iPhone 5 conservando el aspecto exterior, pero introduciendo un nuevo chip A7 de 64 bits que mejora la performance en más del doble según Apple. Conserva la pantalla Retina de 4 pulgadas, pero agrega también un chip dedicado a movimientos, para una nueva generación de aplicaciones.'),
(4, 'iPhone 6', '11987.99', 20, '102344', 'El Apple iPhone 6 sube la apuesta de Apple con una pantalla de mayor tamaño de 4.7 pulgadas protegida por un cristal ultra resistente, nuevo procesador A8, 16GB, 64GB o 128GB de almacenamiento interno, cámara trasera de 8 megapixels con flash, cámara frontal de 1.2MP, conectividad 4G LTE y iOS 8.'),
(5, 'Mac pro 13"', '19560.00', 10, '234566', 'Pantalla Retina: pantalla retroiluminada por LED de 13.3 pulgadas (diagonal) con tecnología IPS; resolución de 2560 x 1600 a 227 pixeles por pulgada, con soporte para millones de colores'),
(6, 'Mac pro 15"', '26999.99', 12, '223344', 'Pantalla Retina: pantalla retroiluminada por LED de 15.4 pulgadas (diagonal) con tecnología IPS; resolución de 2880 x 1800 a 220 pixeles por pulgada, con soporte para millones de colores');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_compra_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
