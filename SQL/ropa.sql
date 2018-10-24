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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table dbropa.categoria: ~8 rows (approximately)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`idcategoria`, `indumentaria`, `tipo_publico`) VALUES
	(1, 'Pantalones', 1),
	(2, 'Remera Mujer', 1),
	(3, 'Remera Hombre', 1),
	(4, NULL, 1),
	(5, NULL, 1),
	(6, NULL, 1),
	(7, NULL, 1),
	(8, 'buzo', 1);
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Dumping structure for table dbropa.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `idproducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `precio` decimal(11,2) DEFAULT NULL,
  `idcategoria` int(11) NOT NULL,
  PRIMARY KEY (`idproducto`),
  KEY `fk_producto_categoria_idx` (`idcategoria`),
  CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table dbropa.producto: ~2 rows (approximately)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`idproducto`, `nombre`, `precio`, `idcategoria`) VALUES
	(1, 'PANTALON ROSA XS ', 200.00, 1),
	(2, 'Remera Mujer L', 150.00, 2);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Dumping structure for table dbropa.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `clave` varchar(100) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table dbropa.usuario: ~1 rows (approximately)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`idusuario`, `nombre`, `clave`) VALUES
	(3, 'romeo', '$2y$10$vnUZMEAu5t53IWT/1BbleuB12WLmD0FZ8UUuL.e.i31SqYe1b9W5q');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
