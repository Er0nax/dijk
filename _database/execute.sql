-- --------------------------------------------------------
-- Host:                         localhost
-- Server Version:               10.4.19-MariaDB - mariadb.org binary distribution
-- Server Betriebssystem:        Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Exportiere Datenbank Struktur für dijk_vtc
CREATE DATABASE IF NOT EXISTS `dijk_vtc` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `dijk_vtc`;

-- Exportiere Struktur von Tabelle dijk_vtc.banks
CREATE TABLE IF NOT EXISTS `banks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `balance` int(11) NOT NULL DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle dijk_vtc.banks: ~6 rows (ungefähr)
/*!40000 ALTER TABLE `banks` DISABLE KEYS */;
INSERT INTO `banks` (`id`, `username`, `balance`, `timestamp`) VALUES
	(1, 'Eronax', 10000, '2021-06-25 11:19:58'),
	(2, 'Botond', 19485, '2021-06-25 11:20:22'),
	(3, 'OnlyXWay', 9692, '2021-06-25 11:20:26'),
	(4, 'Tim', 29492, '2021-06-25 11:20:38'),
	(5, 'Fiber', 194893, '2021-06-25 11:20:40'),
	(6, 'Root', 100000, '2021-06-25 15:58:12');
/*!40000 ALTER TABLE `banks` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle dijk_vtc.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `truck` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `income` int(11) NOT NULL,
  `distance` int(11) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `evidence` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle dijk_vtc.jobs: ~4 rows (ungefähr)
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` (`id`, `username`, `departure`, `destination`, `truck`, `cargo`, `income`, `distance`, `admin`, `evidence`, `timestamp`) VALUES
	(1, 'Eronax', '2', '1', '2', 'Kartoffeln', 19385, 1842, '5', 'test', '2021-06-25 11:23:40'),
	(2, 'OnlyXWay', '4', '5', '7', 'Erbsen', 14859, 1285, '1', 'test', '2021-06-25 11:23:42'),
	(3, 'Botond', '2', '3', '3', 'Tomaten', 29582, 1385, '1', 'test', '2021-06-25 11:23:45'),
	(4, 'Eronax', '5', '2', '2', 'Fleisch', 19458, 1959, '2', 'test', '2021-06-25 11:23:49');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle dijk_vtc.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle dijk_vtc.news: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `username`, `title`, `body`, `timestamp`) VALUES
	(1, '1', 'New Database Structure', 'We\'ve implemented a new database structure to our website!', '2021-06-24 09:20:29');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle dijk_vtc.rewards
CREATE TABLE IF NOT EXISTS `rewards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `level` int(11) NOT NULL DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle dijk_vtc.rewards: ~6 rows (ungefähr)
/*!40000 ALTER TABLE `rewards` DISABLE KEYS */;
INSERT INTO `rewards` (`id`, `username`, `level`, `timestamp`) VALUES
	(1, 'Eronax', 2, '2021-06-25 11:21:02'),
	(2, 'Botond', 0, '2021-06-25 11:21:04'),
	(3, 'OnlyXWay', 1, '2021-06-25 11:21:06'),
	(4, 'Tim', 4, '2021-06-25 11:21:07'),
	(5, 'Fiber', 3, '2021-06-25 11:21:10'),
	(6, 'Root', 5, '2021-06-25 15:59:54');
/*!40000 ALTER TABLE `rewards` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle dijk_vtc.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perms` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle dijk_vtc.roles: ~6 rows (ungefähr)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `perms`, `name`, `color`, `timestamp`) VALUES
	(1, 100, 'Project Manager', '#9159ff', '2021-06-25 14:00:19'),
	(2, 80, 'Developer', '#80bfff', '2021-06-25 13:12:07'),
	(3, 90, 'VTC Manager', '#ce66c5', '2021-06-25 13:12:09'),
	(4, 50, 'Moderator', '#d3c023', '2021-06-25 13:12:14'),
	(5, 10, 'Driver', '#70b997', '2021-06-25 13:12:16'),
	(6, 100, 'Admin', '#ffb500', '2021-06-25 14:00:39');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle dijk_vtc.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 5,
  `status` varchar(50) NOT NULL DEFAULT 'Not Verified',
  `discord` varchar(50) NOT NULL,
  `truckersmp` varchar(50) NOT NULL,
  `user_pb` text NOT NULL DEFAULT 'https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg',
  `status_color` varchar(50) NOT NULL DEFAULT '#fff',
  `information` text NOT NULL DEFAULT 'There is no information here.',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle dijk_vtc.users: ~6 rows (ungefähr)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `role_id`, `status`, `discord`, `truckersmp`, `user_pb`, `status_color`, `information`, `timestamp`) VALUES
	(1, 'Eronax', 'admin', 1, 'Admin', 'Eronax#2491', '493859', 'https://images-ext-2.discordapp.net/external/DYpPvFhPcMpAGCeKmLlQAQn4NMtzSmnYw6NlM6e-aVc/%3Fsize%3D256/https/cdn.discordapp.com/avatars/437538546023137280/32cd3b91bb2cfbec213f53130fe72293.png', '#a600ff', 'Hey there! I am the developer of this website :) Nice to meet ya.', '2021-06-25 11:48:22'),
	(2, 'Botond', 'admin', 2, 'Verified', 'Botond#0001', '92779', 'https://cdn.discordapp.com/avatars/436173560931680258/a_9e52c970020ea0ea6f009ac485cff169.gif?size=256&f=.gif', '#fff', 'There is no information here.', '2021-06-25 11:07:42'),
	(3, 'OnlyXWay', 'admin', 1, 'Verified', 'Claudio#0001', '9823493', 'https://images-ext-2.discordapp.net/external/C0hXDNNShfuKCZ4pH7QXknvAP3IFeZuauGBcqLjFIro/%3Fsize%3D256/https/cdn.discordapp.com/avatars/347993286159630336/f7f7bd31950d158e995550d7623007ab.png', '#fff', 'There is no information here.', '2021-06-25 11:07:43'),
	(4, 'Tim', 'admin', 3, 'Not Verified', 'Tim#0001', '295295', 'https://images-ext-1.discordapp.net/external/cTuG7euCeMJkZUIUQ7XWoY2m3gAKyql6XzB6AEe7_NA/%3Fsize%3D256/https/cdn.discordapp.com/avatars/342695033348161556/d2ef1c78883c0b34f93ab108f45bd3c0.png', '#fff', 'There is no information here.', '2021-06-25 11:07:44'),
	(5, 'Fiber', 'admin', 5, 'Not Verified', 'Fiber#3451', '1935858', 'https://images-ext-1.discordapp.net/external/-zNPLldEwgkYfLVINl-U5MuvVj7LcTZUoBh15V6f3kM/%3Fsize%3D256%26f%3D.gif/https/cdn.discordapp.com/avatars/568753486326398989/a_0e7a9f400167f4d3db29c6996eab56ad.gif', '#fff', 'I can edit this haha', '2021-06-25 11:07:45'),
	(6, 'Alexander', 'admin', 6, 'Not Verified', 'Root#0001', '1475838', 'https://images-ext-1.discordapp.net/external/DUJ9abiNNnu_MtVM5l-bJj6xwO235hzhAhlpg595Rv0/%3Fsize%3D256/https/cdn.discordapp.com/avatars/646380684528582666/ed5a0664f4b7cb3bf829c34fc65d8e11.png', '#fff', 'There is no information here.', '2021-06-25 11:35:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
