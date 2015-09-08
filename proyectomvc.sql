/*
SQLyog Ultimate v11.28 (64 bit)
MySQL - 5.6.17 : Database - proyectomvc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`proyectomvc` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `proyectomvc`;

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `razonsocial` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `cliente` */

insert  into `cliente`(`id`,`nombre`,`apellido`,`razonsocial`) values (1,'Daniel','Méndez Cruz','21832ijsdlkjdkls'),(2,'Manuel','Cruz Gutiérrez','21232jdlkfdjs'),(3,'María del Carmen','Cruz Torres','CRTMC12403');

/*Table structure for table `cliente_compra` */

DROP TABLE IF EXISTS `cliente_compra`;

CREATE TABLE `cliente_compra` (
  `compra_idventa` int(11) NOT NULL,
  `productos_idproductos` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `subtotal` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`compra_idventa`,`productos_idproductos`),
  KEY `fk_compra_has_productos_productos1_idx` (`productos_idproductos`),
  KEY `fk_compra_has_productos_compra1_idx` (`compra_idventa`),
  CONSTRAINT `fk_compra_has_productos_compra1` FOREIGN KEY (`compra_idventa`) REFERENCES `compra` (`idventa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_compra_has_productos_productos1` FOREIGN KEY (`productos_idproductos`) REFERENCES `productos` (`idproductos`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `cliente_compra` */

/*Table structure for table `compra` */

DROP TABLE IF EXISTS `compra`;

CREATE TABLE `compra` (
  `idventa` int(11) NOT NULL,
  `total` decimal(5,2) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `cliente_id` int(10) NOT NULL,
  PRIMARY KEY (`idventa`),
  KEY `fk_compra_cliente1_idx` (`cliente_id`),
  CONSTRAINT `fk_compra_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `compra` */

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `idproductos` int(11) NOT NULL AUTO_INCREMENT,
  `nombreproducto` varchar(50) NOT NULL,
  `precio` decimal(5,2) DEFAULT NULL,
  `existencia` int(11) NOT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  `descripcion` text,
  PRIMARY KEY (`idproductos`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `productos` */

insert  into `productos`(`idproductos`,`nombreproducto`,`precio`,`existencia`,`codigo`,`descripcion`) values (1,'producto1','52.10',10,'H1N10','esto describe el producto 1'),(2,'producto2','10.20',40,'H1N11','descripción del producto 2'),(3,'producto3','40.20',70,'H1N12','descripción del producto 3'),(4,'producto4','20.20',50,'H1N13','descripción del producto 4'),(5,'nuevo producto','23.50',123,'HEROD20129',NULL),(6,'producto4','234.00',23,'REAL12039',NULL),(9,'producto10','23.50',120,'AHE1920','esto es otra descripción de prueba espero que funcione al 100%');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
