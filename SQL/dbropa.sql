-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table dbropa.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `indumentaria` varchar(45) DEFAULT NULL,
  `tipo_publico` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- Dumping data for table dbropa.categoria: ~5 rows (approximately)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`idcategoria`, `indumentaria`, `tipo_publico`) VALUES
	(17, 'Buzos', 1),
	(18, 'Remeras', 1),
	(19, 'Jean', 1),
	(20, 'Zapato', 1),
	(21, 'Pantalones', 1);
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Dumping structure for table dbropa.comentarios
CREATE TABLE IF NOT EXISTS `comentarios` (
  `idcomentario` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(250) NOT NULL DEFAULT '0',
  `valoracion` int(11) NOT NULL DEFAULT '0',
  `idproducto` int(11) NOT NULL DEFAULT '0',
  `idusuario` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idcomentario`),
  KEY `idprod` (`idproducto`),
  KEY `idusuario` (`idusuario`),
  CONSTRAINT `idprod` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE,
  CONSTRAINT `idusuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Dumping data for table dbropa.comentarios: ~4 rows (approximately)
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` (`idcomentario`, `comentario`, `valoracion`, `idproducto`, `idusuario`) VALUES
	(2, 'hola chau', 2, 23, 3),
	(9, 'le vamos a hacer un comentario aca', 1, 18, 3),
	(10, 'hola mundo', 1, 23, 3),
	(12, 'este texto es para borrarse', 3, 23, 3);
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;

-- Dumping structure for table dbropa.imagenes
CREATE TABLE IF NOT EXISTS `imagenes` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL DEFAULT '0',
  `idproducto` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_image`),
  KEY `idproducto` (`idproducto`),
  CONSTRAINT `idproducto` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Dumping data for table dbropa.imagenes: ~6 rows (approximately)
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` (`id_image`, `nombre`, `idproducto`) VALUES
	(5, 'images/5bf201ac1c98b.jpg', 23),
	(6, 'images/5bf775abc4c9d.jpg', 25),
	(7, 'images/5bf7804a3712e.jpg', 23),
	(8, 'images/5bf780d331004.jpg', 23),
	(9, 'images/5bf7810288ae6.jpg', 23),
	(10, 'images/5bf7811f73c1c.jpg', 23),
	(11, 'images/5bf786e59ea9a.jpg', 26),
	(12, 'images/5bf78714b8983.jpg', 24);
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;

-- Dumping structure for table dbropa.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `idproducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `precio` decimal(11,2) DEFAULT NULL,
  `idcategoria` int(11) NOT NULL,
  PRIMARY KEY (`idproducto`),
  KEY `fk_producto_categoria_idx` (`idcategoria`),
  CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- Dumping data for table dbropa.producto: ~5 rows (approximately)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`idproducto`, `nombre`, `precio`, `idcategoria`) VALUES
	(18, 'Jean tam  38 mujer', 160.00, 19),
	(23, 'Buzo Verde', 155.00, 20),
	(24, 'ahh', 150.00, 19),
	(25, 'Pantalon de Vestir talle s', 198.00, 21),
	(26, 'imagen ilustrativa de buzos', 150.00, 21);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Dumping structure for table dbropa.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `admin` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table dbropa.usuario: ~4 rows (approximately)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`idusuario`, `nombre`, `clave`, `admin`) VALUES
	(3, 'romeo', '$2y$10$vnUZMEAu5t53IWT/1BbleuB12WLmD0FZ8UUuL.e.i31SqYe1b9W5q', 1),
	(4, 'belen', '$2y$10$OjCSB/VqXxOmC8Y0cxFXv.1SR.Q4uu6JBAikeazZw6Eky15Kob3SK', 1),
	(5, 'matias', '$2y$10$kRr81Mzwwzo5VYZ8wPDzue7p9UYsTh843IBEBSelroXvOa.TplYIG', NULL),
	(6, 'matiasgon', '$2y$10$dSVGXMwuCpys.uUlm74AeeDXjQ3OtWv9rUoVs89tiSLGndJtOH7H.', NULL);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
