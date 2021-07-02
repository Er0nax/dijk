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


-- Exportiere Datenbank Struktur für lfm
CREATE DATABASE IF NOT EXISTS `lfm` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `lfm`;

-- Exportiere Struktur von Tabelle lfm.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle lfm.comments: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle lfm.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL DEFAULT '#fff',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle lfm.roles: ~1 rows (ungefähr)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `color`, `created_at`, `updated_at`) VALUES
	(1, 'Developer', '#fff', '2021-07-02 08:49:25', '2021-07-02 08:49:26');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle lfm.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` tinytext NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `discord_name` varchar(50) NOT NULL,
  `tmp_id` varchar(50) NOT NULL,
  `avatar` text NOT NULL,
  `instagram` text NOT NULL,
  `website` text NOT NULL,
  `short_bio` tinytext NOT NULL,
  `long_bio` text NOT NULL,
  `last_online` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle lfm.users: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `age`, `role`, `likes`, `discord_name`, `tmp_id`, `avatar`, `instagram`, `website`, `short_bio`, `long_bio`, `last_online`, `created_at`, `updated_at`) VALUES
	(1, 'Eronax', 'admin', 17, 1, 0, '', '', 'https://images-ext-2.discordapp.net/external/DYpPvFhPcMpAGCeKmLlQAQn4NMtzSmnYw6NlM6e-aVc/%3Fsize%3D256/https/cdn.discordapp.com/avatars/437538546023137280/32cd3b91bb2cfbec213f53130fe72293.png', '', '', 'Hey there!', 'I am the Developer of Project LFM. Contact me if you have any questions!', '2021-07-02 09:28:19', '2021-07-02 08:48:43', '2021-07-02 09:28:19');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle lfm.user_friends
CREATE TABLE IF NOT EXISTS `user_friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle lfm.user_friends: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `user_friends` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_friends` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle lfm.user_game_stats
CREATE TABLE IF NOT EXISTS `user_game_stats` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fav_truck` varchar(50) NOT NULL,
  `fav_game` varchar(50) NOT NULL,
  `game_version` varchar(50) NOT NULL,
  `game_reality` varchar(50) NOT NULL,
  `truck_style` tinytext NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle lfm.user_game_stats: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `user_game_stats` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_game_stats` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
