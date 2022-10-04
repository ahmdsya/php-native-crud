-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for php_native_crud
CREATE DATABASE IF NOT EXISTS `php_native_crud` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `php_native_crud`;

-- Dumping structure for table php_native_crud.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prodi_id` int(11) unsigned NOT NULL DEFAULT '0',
  `nim` varchar(50) NOT NULL DEFAULT '',
  `nama_mahasiswa` varchar(50) NOT NULL DEFAULT '',
  `jk` varchar(50) NOT NULL DEFAULT '',
  `foto` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table php_native_crud.mahasiswa: ~0 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;

-- Dumping structure for table php_native_crud.prodi
CREATE TABLE IF NOT EXISTS `prodi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_prodi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table php_native_crud.prodi: ~0 rows (approximately)
/*!40000 ALTER TABLE `prodi` DISABLE KEYS */;
INSERT INTO `prodi` (`id`, `nama_prodi`) VALUES
	(2, 'Sistem Informasi');
/*!40000 ALTER TABLE `prodi` ENABLE KEYS */;

-- Dumping structure for table php_native_crud.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL DEFAULT '',
  `nama` varchar(50) NOT NULL DEFAULT '',
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table php_native_crud.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `email`, `nama`, `password`) VALUES
	(1, 'admin@mail.com', 'Administrattor', '$2y$10$qkZc8lcTTLSeQi.M2ynzOOHIkGXy4QUDiKkJi65KRnuB8l5/AX5n6');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
