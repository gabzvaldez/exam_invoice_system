-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for invoice_db
CREATE DATABASE IF NOT EXISTS `invoice_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `invoice_db`;

-- Dumping structure for table invoice_db.tbl_customers
CREATE TABLE IF NOT EXISTS `tbl_customers` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=317 DEFAULT CHARSET=utf8;

-- Dumping data for table invoice_db.tbl_customers: ~2 rows (approximately)
DELETE FROM `tbl_customers`;
/*!40000 ALTER TABLE `tbl_customers` DISABLE KEYS */;
INSERT INTO `tbl_customers` (`cid`, `name`, `address`) VALUES
	(1, 'Juan de la Cruz', 'Rizal, Philippines'),
	(2, 'Cardo Dalisay', 'Cagayan de Oro, Philippines');
/*!40000 ALTER TABLE `tbl_customers` ENABLE KEYS */;

-- Dumping structure for table invoice_db.tbl_inventory
CREATE TABLE IF NOT EXISTS `tbl_inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_description` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_cost` decimal(10,2) NOT NULL,
  `stock_in` date NOT NULL,
  `sid` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=480 DEFAULT CHARSET=utf8;

-- Dumping data for table invoice_db.tbl_inventory: ~4 rows (approximately)
DELETE FROM `tbl_inventory`;
/*!40000 ALTER TABLE `tbl_inventory` DISABLE KEYS */;
INSERT INTO `tbl_inventory` (`id`, `item_description`, `quantity`, `unit_cost`, `stock_in`, `sid`) VALUES
	(475, 'Energizer A27 1-pack 12V Alkaline Battery', 9, 94.75, '2021-08-19', 123),
	(476, 'Firefly 3-Pack 11W LED Light Bulb', 10, 319.75, '2021-08-19', 123),
	(477, 'Omni 6-Gang Extension Cord WED-360', 22, 749.75, '2021-08-19', 123),
	(478, 'Omni WS 2pcs. 1-Way Switch with White Plate', 5, 149.75, '2021-08-19', 123),
	(479, '36-pack AA Battery', 8, 749.75, '2021-08-19', 123);
/*!40000 ALTER TABLE `tbl_inventory` ENABLE KEYS */;

-- Dumping structure for table invoice_db.tbl_transactions
CREATE TABLE IF NOT EXISTS `tbl_transactions` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `orderno` varchar(50) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `qty_issued` int(11) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- Dumping data for table invoice_db.tbl_transactions: ~0 rows (approximately)
DELETE FROM `tbl_transactions`;
/*!40000 ALTER TABLE `tbl_transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_transactions` ENABLE KEYS */;

-- Dumping structure for table invoice_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table invoice_db.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `position`, `designation`, `role`) VALUES
	(0, 'john', '$2y$10$PclssP7.vvjqutbwFXx95.I/CIALaV2lO1F25djsQb/Rjw7nOVIm2', 'John', 'Doe', 'clerk', 'branch 1', 'admin'),
	(1, 'steff', '$2y$10$PclssP7.vvjqutbwFXx95.I/CIALaV2lO1F25djsQb/Rjw7nOVIm2', 'Steff', 'Ucab', 'cashier', 'branch 1', 'admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
