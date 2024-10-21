-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
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


-- Dumping database structure for pariwisata
CREATE DATABASE IF NOT EXISTS `pariwisata` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pariwisata`;

-- Dumping structure for table pariwisata.about
CREATE TABLE IF NOT EXISTS `about` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `descrption` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pariwisata.about: ~2 rows (approximately)
INSERT INTO `about` (`id`, `title`, `descrption`) VALUES
	(2, 'holiday', 'wisata'),
	(5, 'wisata', 'wisata'),
	(6, 'abc', 'abc');

-- Dumping structure for table pariwisata.article
CREATE TABLE IF NOT EXISTS `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `attraction_id` int DEFAULT NULL,
  `author_id` int NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` text,
  `image` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pariwisata.article: ~0 rows (approximately)

-- Dumping structure for table pariwisata.attractions
CREATE TABLE IF NOT EXISTS `attractions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `district_id` int NOT NULL,
  `name` varchar(225) NOT NULL,
  `description` text,
  `map_url` text,
  `image` text,
  `capacity` int DEFAULT NULL,
  `available_toilet` tinyint(1) DEFAULT NULL,
  `available_mosque` tinyint(1) DEFAULT NULL,
  `available_restaurant` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pariwisata.attractions: ~0 rows (approximately)
INSERT INTO `attractions` (`id`, `category_id`, `district_id`, `name`, `description`, `map_url`, `image`, `capacity`, `available_toilet`, `available_mosque`, `available_restaurant`) VALUES
	(1, 1, 10, 'Candi', 'lorem ipsum', 'abc', 'bali.jpg', 500, 1, 1, 1);

-- Dumping structure for table pariwisata.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pariwisata.category: ~3 rows (approximately)
INSERT INTO `category` (`id`, `nama`) VALUES
	(1, 'wisata'),
	(2, 'pegunungan'),
	(3, 'pantai');

-- Dumping structure for table pariwisata.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(225) DEFAULT NULL,
  `phone_number` varchar(225) DEFAULT NULL,
  `url` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pariwisata.contact: ~0 rows (approximately)
INSERT INTO `contact` (`id`, `email`, `phone_number`, `url`) VALUES
	(2, 'aariansophian746@gmail.com', '082214539991', 'https://www.youtube.com/'),
	(4, 'vinsmoke1119@gmail.com', '1234', 'https://www.youtube.com/');

-- Dumping structure for table pariwisata.district
CREATE TABLE IF NOT EXISTS `district` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  `province_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pariwisata.district: ~4 rows (approximately)
INSERT INTO `district` (`id`, `nama`, `province_id`) VALUES
	(7, 'Raja Ampat', 5),
	(8, 'Santolo', 4),
	(9, 'Bromo', 4),
	(10, 'Candi Borobudur', 8);

-- Dumping structure for table pariwisata.gallery
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `description` text,
  `image` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pariwisata.gallery: ~0 rows (approximately)
INSERT INTO `gallery` (`id`, `title`, `description`, `image`) VALUES
	(6, 'abc', 'abc', 'bay.png');

-- Dumping structure for table pariwisata.province
CREATE TABLE IF NOT EXISTS `province` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_province` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pariwisata.province: ~8 rows (approximately)
INSERT INTO `province` (`id`, `nama_province`) VALUES
	(1, 'Jawa Barat'),
	(4, 'kalimantan'),
	(5, 'Sulawesi'),
	(7, 'Papua'),
	(8, 'Jawa Timur'),
	(9, 'Jawa Tengah'),
	(10, 'Bali'),
	(11, 'Aceh'),
	(12, 'NTB');

-- Dumping structure for table pariwisata.socials
CREATE TABLE IF NOT EXISTS `socials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `url` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `icon` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pariwisata.socials: ~0 rows (approximately)

-- Dumping structure for table pariwisata.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pariwisata.users: ~4 rows (approximately)
INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES
	(1, 'agus', 'admin', '0192023a7bbd73250516f069df18b500'),
	(4, 'aguss', 'aguss', '3f5007e4d82d74b11943e64bf6f990d9'),
	(6, 'rian', 'rian', '26ed30f28908645239254ff4f88c1b75'),
	(8, 'agus', 'agus', '01c3c766ce47082b1b130daedd347ffd'),
	(9, 'faisal', 'faisal', 'b67aaaf5e991b8aa6cdc7959a3c326a5');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
