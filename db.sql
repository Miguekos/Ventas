-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.19 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para sl
DROP DATABASE IF EXISTS `sl`;
CREATE DATABASE IF NOT EXISTS `sl` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `sl`;

-- Volcando estructura para tabla sl.categoria
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sl.categoria: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`id`, `categoria`, `created_at`) VALUES
	(1, 'Productos', '2018-06-08 06:01:19'),
	(2, 'Servicios', '2018-06-08 06:01:51');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Volcando estructura para tabla sl.cierre
DROP TABLE IF EXISTS `cierre`;
CREATE TABLE IF NOT EXISTS `cierre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cajachicac` varchar(50) NOT NULL DEFAULT '0',
  `totalventasc` varchar(50) NOT NULL DEFAULT '0',
  `totalcajac` varchar(50) NOT NULL DEFAULT '0',
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla sl.cierre: ~22 rows (aproximadamente)
/*!40000 ALTER TABLE `cierre` DISABLE KEYS */;
INSERT INTO `cierre` (`id`, `cajachicac`, `totalventasc`, `totalcajac`, `hora`) VALUES
	(1, '200,00 S/', '237,60 S/', '437,60 S/', '2018-04-09 09:58:30'),
	(2, '200,00 S/', '237,60 S/', '437,60 S/', '2018-04-09 09:59:08'),
	(3, '200,00 S/', '237,60 S/', '437,60 S/', '2018-04-09 09:59:51'),
	(4, '200,00 S/', '237,60 S/', '437,60 S/', '2018-04-09 10:00:19'),
	(5, '200,00 S/', '237,60 S/', '437,60 S/', '2018-04-09 10:00:50'),
	(6, '200,00 S/', '237,60 S/', '437,60 S/', '2018-04-09 10:01:46'),
	(7, '200,00 S/', '8,40 S/', '208,40 S/', '2018-04-09 10:11:47'),
	(8, '200,00 S/', '0,00 S/', '200,00 S/', '2018-04-09 10:14:15'),
	(9, '200,00 S/', '0,00 S/', '200,00 S/', '2018-04-09 10:14:18'),
	(10, '200,00 S/', '98,70 S/', '298,70 S/', '2018-04-09 20:08:51'),
	(11, '200,00 S/', '52,00 S/', '252,00 S/', '2018-04-10 01:46:03'),
	(12, '100,00 S/', '20,40 S/', '120,40 S/', '2018-04-10 02:36:25'),
	(13, '55,00 S/', '45,00 S/', '100,00 S/', '2018-04-10 02:39:00'),
	(14, '55,00 S/', '75,90 S/', '130,90 S/', '2018-04-10 17:00:23'),
	(15, '55,00 S/', '23,40 S/', '78,40 S/', '2018-04-11 05:34:40'),
	(16, '55,00 S/', '22,30 S/', '77,30 S/', '2018-04-11 21:06:35'),
	(17, '20,00 S/', '14,40 S/', '34,40 S/', '2018-04-11 21:35:44'),
	(18, '200,00 S/', '64,30 S/', '264,30 S/', '2018-04-16 03:52:15'),
	(19, '45,00 S/', '4,20 S/', '49,20 S/', '2018-04-16 05:44:13'),
	(20, '45,00 S/', '14,50 S/', '59,50 S/', '2018-04-18 04:59:58'),
	(21, '100,00 S/', '42,40 S/', '142,40 S/', '2018-04-24 19:49:41'),
	(22, '0,00 S/', '786,00 S/', '786,00 S/', '2018-06-08 01:33:06');
/*!40000 ALTER TABLE `cierre` ENABLE KEYS */;

-- Volcando estructura para tabla sl.compras
DROP TABLE IF EXISTS `compras`;
CREATE TABLE IF NOT EXISTS `compras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `razon_social` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `factura` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `productos` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sl.compras: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;

-- Volcando estructura para tabla sl.control
DROP TABLE IF EXISTS `control`;
CREATE TABLE IF NOT EXISTS `control` (
  `idC` int(11) NOT NULL AUTO_INCREMENT,
  `cajachica` float DEFAULT NULL,
  `accion` varchar(50) NOT NULL,
  `motivo` varchar(100) NOT NULL,
  `hora` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla sl.control: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `control` DISABLE KEYS */;
/*!40000 ALTER TABLE `control` ENABLE KEYS */;

-- Volcando estructura para tabla sl.horadecierre
DROP TABLE IF EXISTS `horadecierre`;
CREATE TABLE IF NOT EXISTS `horadecierre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cierres` varchar(50) NOT NULL,
  `horasdelcierre` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla sl.horadecierre: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `horadecierre` DISABLE KEYS */;
/*!40000 ALTER TABLE `horadecierre` ENABLE KEYS */;

-- Volcando estructura para tabla sl.inventario
DROP TABLE IF EXISTS `inventario`;
CREATE TABLE IF NOT EXISTS `inventario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `venta` int(11) NOT NULL,
  `compra` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sl.inventario: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `inventario` DISABLE KEYS */;
INSERT INTO `inventario` (`id`, `id_producto`, `venta`, `compra`, `fecha`) VALUES
	(3, 130, 2, 0, '2018-05-13 23:39:23'),
	(5, 130, 2, 0, '2018-05-13 23:39:43'),
	(6, 130, 2, 0, '2018-05-13 23:39:44'),
	(7, 130, 2, 0, '2018-05-13 23:39:44'),
	(8, 57, 2, 0, '2018-05-13 23:40:58'),
	(9, 57, 2, 0, '2018-05-14 00:09:33'),
	(10, 57, 5, 0, '2018-05-14 00:10:13'),
	(11, 57, 3, 0, '2018-05-14 00:10:29'),
	(12, 57, 10, 0, '2018-05-14 00:36:33'),
	(13, 57, 8, 0, '2018-05-14 01:31:26'),
	(14, 57, 1, 0, '2018-05-14 01:33:57'),
	(15, 152, 70, 0, '2018-05-14 02:23:52'),
	(16, 57, 8, 0, '2018-05-14 05:32:51'),
	(17, 1, 2, 0, '2018-06-08 06:04:52'),
	(18, 1, 2, 0, '2018-06-08 06:07:05'),
	(19, 1, 2, 0, '2018-06-08 06:08:33'),
	(20, 1, 3, 0, '2018-06-08 06:08:58'),
	(21, 1, 2, 0, '2018-06-08 06:10:16');
/*!40000 ALTER TABLE `inventario` ENABLE KEYS */;

-- Volcando estructura para tabla sl.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sl.migrations: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2018_05_02_051317_ticket', 2),
	(4, '2018_05_02_051441_CreateTicketsTable', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla sl.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sl.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla sl.productos
DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) DEFAULT '0',
  `nombre` varchar(100) DEFAULT '0',
  `marca` varchar(100) DEFAULT '0',
  `peso` varchar(100) DEFAULT '0',
  `cantidad` int(11) DEFAULT '0',
  `cantidad_inicial` int(11) DEFAULT '0',
  `precio` float DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla sl.productos: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id`, `categoria`, `nombre`, `marca`, `peso`, `cantidad`, `cantidad_inicial`, `precio`) VALUES
	(1, 'Productos', 'Agua Chica', 'Cielo', '475 Ml', 1, 0, 2.5);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla sl.tickets
DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sl.tickets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;

-- Volcando estructura para tabla sl.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sl.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla sl.ventas
DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `idV` int(11) NOT NULL AUTO_INCREMENT,
  `id_factura` int(11) NOT NULL DEFAULT '0',
  `id_producto` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `categoria` varchar(50) NOT NULL DEFAULT '0',
  `cantidad` float NOT NULL DEFAULT '0',
  `id_monto` float NOT NULL DEFAULT '0',
  `total` float NOT NULL DEFAULT '0',
  `estado` int(11) NOT NULL DEFAULT '0',
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla sl.ventas: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` (`idV`, `id_factura`, `id_producto`, `nombre`, `categoria`, `cantidad`, `id_monto`, `total`, `estado`, `hora`) VALUES
	(1, 1, 1, 'Agua Chica', 'Productos', 2, 2.5, 5, 1, '2018-06-08 06:07:05'),
	(2, 2, 1, 'Agua Chica', 'Productos', 2, 2.5, 5, 1, '2018-06-08 06:08:33'),
	(3, 3, 1, 'Agua Chica', 'Productos', 3, 2.5, 7.5, 1, '2018-06-08 06:08:58'),
	(4, 4, 1, 'Agua Chica', 'Productos', 2, 2.5, 5, 1, '2018-06-08 06:10:16');
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
