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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle dijk_vtc.banks: ~14 rows (ungefähr)
/*!40000 ALTER TABLE `banks` DISABLE KEYS */;
INSERT INTO `banks` (`id`, `username`, `balance`, `timestamp`) VALUES
	(1, 'Eronax', 487831, '2021-07-19 15:47:39'),
	(2, 'Fiber', 0, '2021-06-29 15:59:28'),
	(3, 'Tim', 0, '2021-06-28 13:33:18'),
	(4, 'Botond', 0, '2021-06-29 15:59:36'),
	(5, 'Alex', 0, '2021-06-28 13:34:06'),
	(6, 'Elias', 0, '2021-06-28 13:34:17'),
	(7, 'Admin', 0, '2021-06-28 13:34:31'),
	(8, 'amps', 0, '2021-06-29 15:45:40'),
	(9, 'Foxi', 0, '2021-06-29 15:45:58'),
	(10, 'Pizza', 0, '2021-06-29 15:46:27'),
	(11, 'Zir', 0, '2021-06-29 15:46:46'),
	(12, 'CactusCookie', 0, '2021-06-29 15:49:03'),
	(13, 'Ace', 0, '2021-06-29 15:49:18'),
	(14, 'FuPa', 0, '2021-06-29 15:49:35'),
	(15, 'Yunomi', 0, '2021-06-29 15:51:01'),
	(16, 'Guest', 0, '2021-06-30 08:55:46'),
	(17, 'KnockKnock', 0, '2021-06-30 11:50:53');
/*!40000 ALTER TABLE `banks` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle dijk_vtc.cities
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=280 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle dijk_vtc.cities: ~279 rows (ungefähr)
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` (`id`, `city`, `timestamp`) VALUES
	(1, 'A Coruña', '2021-06-29 11:41:18'),
	(2, 'Aalborg', '2021-06-29 11:41:18'),
	(3, 'Aberdeen', '2021-06-29 11:41:18'),
	(4, 'Ajaccio', '2021-06-29 11:41:18'),
	(5, 'Albacete', '2021-06-29 11:41:18'),
	(6, 'Algeciras', '2021-06-29 11:41:18'),
	(7, 'Almaraz', '2021-06-29 11:41:18'),
	(8, 'Almería', '2021-06-29 11:41:18'),
	(9, 'Amsterdam', '2021-06-29 11:41:18'),
	(10, 'Ancona', '2021-06-29 11:41:18'),
	(11, 'Bac?u', '2021-06-29 11:41:18'),
	(12, 'Badajoz', '2021-06-29 11:41:18'),
	(13, 'Bailén', '2021-06-29 11:41:18'),
	(14, 'Banská Bystrica', '2021-06-29 11:41:18'),
	(15, 'Barcelona', '2021-06-29 11:41:18'),
	(16, 'Bari', '2021-06-29 11:41:18'),
	(17, 'Bastia', '2021-06-29 11:41:18'),
	(18, 'Bayonne', '2021-06-29 11:41:18'),
	(19, 'Bergen', '2021-06-29 11:41:18'),
	(20, 'Berlin', '2021-06-29 11:41:18'),
	(21, 'Bern', '2021-06-29 11:41:18'),
	(22, 'Bia?ystok', '2021-06-29 11:41:18'),
	(23, 'Bilbao', '2021-06-29 11:41:18'),
	(24, 'Birmingham', '2021-06-29 11:41:18'),
	(25, 'Bologna', '2021-06-29 11:41:18'),
	(26, 'Bonifacio', '2021-06-29 11:41:18'),
	(27, 'Bordeaux', '2021-06-29 11:41:18'),
	(28, 'Bourges', '2021-06-29 11:41:18'),
	(29, 'Bratislava', '2021-06-29 11:41:18'),
	(30, 'Bra?ov', '2021-06-29 11:41:18'),
	(31, 'Bremen', '2021-06-29 11:41:18'),
	(32, 'Brest', '2021-06-29 11:41:18'),
	(33, 'Brno', '2021-06-29 11:41:18'),
	(34, 'Brussel', '2021-06-29 11:41:18'),
	(35, 'Bucure?ti', '2021-06-29 11:41:18'),
	(36, 'Budapest', '2021-06-29 11:41:18'),
	(37, 'Burgas', '2021-06-29 11:41:18'),
	(38, 'Burgos', '2021-06-29 11:41:18'),
	(39, 'Cagliari', '2021-06-29 11:41:18'),
	(40, 'Calais', '2021-06-29 11:41:18'),
	(41, 'Calvi', '2021-06-29 11:41:18'),
	(42, 'Cambridge', '2021-06-29 11:41:18'),
	(43, 'Cardiff', '2021-06-29 11:41:18'),
	(44, 'Carlisle', '2021-06-29 11:41:18'),
	(45, 'Cassino', '2021-06-29 11:41:18'),
	(46, 'Catania', '2021-06-29 11:41:18'),
	(47, 'Catanzaro', '2021-06-29 11:41:18'),
	(48, 'Cernavod?', '2021-06-29 11:41:18'),
	(49, 'Ciudad Real', '2021-06-29 11:41:18'),
	(50, 'Civaux', '2021-06-29 11:41:18'),
	(51, 'Clermont-Ferrand', '2021-06-29 11:41:18'),
	(52, 'Cluj-Napoca', '2021-06-29 11:41:18'),
	(53, 'Coimbra', '2021-06-29 11:41:18'),
	(54, 'Constan?a', '2021-06-29 11:41:18'),
	(55, 'Cortiçadas de Lavre', '2021-06-29 11:41:18'),
	(56, 'Craiova', '2021-06-29 11:41:18'),
	(57, 'Córdoba', '2021-06-29 11:41:18'),
	(58, 'C?l?ra?i', '2021-06-29 11:41:18'),
	(59, 'Daugavpils', '2021-06-29 11:41:18'),
	(60, 'Debrecen', '2021-06-29 11:41:18'),
	(61, 'Dijon', '2021-06-29 11:41:18'),
	(62, 'Dortmund', '2021-06-29 11:41:18'),
	(63, 'Dover', '2021-06-29 11:41:18'),
	(64, 'Dresden', '2021-06-29 11:41:18'),
	(65, 'Duisburg', '2021-06-29 11:41:18'),
	(66, 'Düsseldorf', '2021-06-29 11:41:18'),
	(67, 'Edinburgh', '2021-06-29 11:41:18'),
	(68, 'Edirne', '2021-06-29 11:41:18'),
	(69, 'El Ejido', '2021-06-29 11:41:18'),
	(70, 'Erfurt', '2021-06-29 11:41:18'),
	(71, 'Esbjerg', '2021-06-29 11:41:18'),
	(72, 'Faro', '2021-06-29 11:41:18'),
	(73, 'Felixstowe', '2021-06-29 11:41:18'),
	(74, 'Firenze', '2021-06-29 11:41:18'),
	(75, 'Frankfurt am Main', '2021-06-29 11:41:18'),
	(76, 'Frederikshavn', '2021-06-29 11:41:18'),
	(77, 'Gala?i', '2021-06-29 11:41:18'),
	(78, 'Gda?sk', '2021-06-29 11:41:18'),
	(79, 'Gedser', '2021-06-29 11:41:18'),
	(80, 'Genova', '2021-06-29 11:41:18'),
	(81, 'Genève', '2021-06-29 11:41:18'),
	(82, 'Gijón', '2021-06-29 11:41:18'),
	(83, 'Glasgow', '2021-06-29 11:41:18'),
	(84, 'Golfech', '2021-06-29 11:41:18'),
	(85, 'Granada', '2021-06-29 11:41:18'),
	(86, 'Graz', '2021-06-29 11:41:18'),
	(87, 'Grimsby', '2021-06-29 11:41:18'),
	(88, 'Groningen', '2021-06-29 11:41:18'),
	(89, 'Guarda', '2021-06-29 11:41:18'),
	(90, 'Göteborg', '2021-06-29 11:41:18'),
	(91, 'Hamburg', '2021-06-29 11:41:18'),
	(92, 'Hannover', '2021-06-29 11:41:18'),
	(93, 'Helsingborg', '2021-06-29 11:41:18'),
	(94, 'Helsinki', '2021-06-29 11:41:18'),
	(95, 'Hirtshals', '2021-06-29 11:41:18'),
	(96, 'Huelva', '2021-06-29 11:41:18'),
	(97, 'Hunedoara', '2021-06-29 11:41:18'),
	(98, 'Ia?i', '2021-06-29 11:41:18'),
	(99, 'Innsbruck', '2021-06-29 11:41:18'),
	(100, '?stanbul', '2021-06-29 11:41:18'),
	(101, 'Jönköping', '2021-06-29 11:41:18'),
	(102, 'Kaliningrad', '2021-06-29 11:41:18'),
	(103, 'Kalmar', '2021-06-29 11:41:18'),
	(104, 'Kapellskär', '2021-06-29 11:41:18'),
	(105, 'Karlovo', '2021-06-29 11:41:18'),
	(106, 'Karlskrona', '2021-06-29 11:41:18'),
	(107, 'Kassel', '2021-06-29 11:41:18'),
	(108, 'Katowice', '2021-06-29 11:41:18'),
	(109, 'Kaunas', '2021-06-29 11:41:18'),
	(110, 'Kiel', '2021-06-29 11:41:18'),
	(111, 'Klagenfurt am Wörthersee', '2021-06-29 11:41:18'),
	(112, 'Klaip?da', '2021-06-29 11:41:18'),
	(113, 'Kotka', '2021-06-29 11:41:18'),
	(114, 'Kouvola', '2021-06-29 11:41:18'),
	(115, 'Kozloduy', '2021-06-29 11:41:18'),
	(116, 'Košice', '2021-06-29 11:41:18'),
	(117, 'Kraków', '2021-06-29 11:41:18'),
	(118, 'Kristiansand', '2021-06-29 11:41:18'),
	(119, 'Kunda', '2021-06-29 11:41:18'),
	(120, 'Köln', '2021-06-29 11:41:18'),
	(121, 'København', '2021-06-29 11:41:18'),
	(122, 'L\'Île-Rousse', '2021-06-29 11:41:18'),
	(123, 'La Rochelle', '2021-06-29 11:41:18'),
	(124, 'Lacq', '2021-06-29 11:41:18'),
	(125, 'Lahti', '2021-06-29 11:41:18'),
	(126, 'Le Havre', '2021-06-29 11:41:18'),
	(127, 'Le Mans', '2021-06-29 11:41:18'),
	(128, 'Leipzig', '2021-06-29 11:41:18'),
	(129, 'León', '2021-06-29 11:41:18'),
	(130, 'Liep?ja', '2021-06-29 11:41:18'),
	(131, 'Lille', '2021-06-29 11:41:18'),
	(132, 'Limoges', '2021-06-29 11:41:18'),
	(133, 'Linköping', '2021-06-29 11:41:18'),
	(134, 'Linz', '2021-06-29 11:41:18'),
	(135, 'Lisboa', '2021-06-29 11:41:18'),
	(136, 'Liverpool', '2021-06-29 11:41:18'),
	(137, 'Livorno', '2021-06-29 11:41:18'),
	(138, 'Liège', '2021-06-29 11:41:18'),
	(139, 'Lleida', '2021-06-29 11:41:18'),
	(140, 'London', '2021-06-29 11:41:18'),
	(141, 'Loviisa', '2021-06-29 11:41:18'),
	(142, 'Lublin', '2021-06-29 11:41:18'),
	(143, 'Luga', '2021-06-29 11:41:18'),
	(144, 'Luxembourg', '2021-06-29 11:41:18'),
	(145, 'Lyon', '2021-06-29 11:41:18'),
	(146, 'Madrid', '2021-06-29 11:41:18'),
	(147, 'Magdeburg', '2021-06-29 11:41:18'),
	(148, 'Malmö', '2021-06-29 11:41:18'),
	(149, 'Manchester', '2021-06-29 11:41:18'),
	(150, 'Mangalia', '2021-06-29 11:41:18'),
	(151, 'Mannheim', '2021-06-29 11:41:18'),
	(152, 'Marseille', '2021-06-29 11:41:18'),
	(153, 'Mažeikiai', '2021-06-29 11:41:18'),
	(154, 'Mengíbar', '2021-06-29 11:41:18'),
	(155, 'Messina', '2021-06-29 11:41:18'),
	(156, 'Metz', '2021-06-29 11:41:18'),
	(157, 'Milano', '2021-06-29 11:41:18'),
	(158, 'Montpellier', '2021-06-29 11:41:18'),
	(159, 'Murcia', '2021-06-29 11:41:18'),
	(160, 'Málaga', '2021-06-29 11:41:18'),
	(161, 'München', '2021-06-29 11:41:18'),
	(162, 'Naantali', '2021-06-29 11:41:18'),
	(163, 'Nantes', '2021-06-29 11:41:18'),
	(164, 'Napoli', '2021-06-29 11:41:18'),
	(165, 'Narva', '2021-06-29 11:41:18'),
	(166, 'Navia', '2021-06-29 11:41:18'),
	(167, 'Newcastle-upon-Tyne', '2021-06-29 11:41:18'),
	(168, 'Nice', '2021-06-29 11:41:18'),
	(169, 'Nynäshamn', '2021-06-29 11:41:18'),
	(170, 'Nürnberg', '2021-06-29 11:41:18'),
	(171, 'O Barco', '2021-06-29 11:41:18'),
	(172, 'Odense', '2021-06-29 11:41:18'),
	(173, 'Olbia', '2021-06-29 11:41:18'),
	(174, 'Olhão', '2021-06-29 11:41:18'),
	(175, 'Olkiluoto', '2021-06-29 11:41:18'),
	(176, 'Olsztyn', '2021-06-29 11:41:18'),
	(177, 'Oslo', '2021-06-29 11:41:18'),
	(178, 'Osnabrück', '2021-06-29 11:41:18'),
	(179, 'Ostrava', '2021-06-29 11:41:18'),
	(180, 'Paldiski', '2021-06-29 11:41:18'),
	(181, 'Palermo', '2021-06-29 11:41:18'),
	(182, 'Paluel', '2021-06-29 11:41:18'),
	(183, 'Pamplona', '2021-06-29 11:41:18'),
	(184, 'Panev?žys', '2021-06-29 11:41:18'),
	(185, 'Paris', '2021-06-29 11:41:18'),
	(186, 'Parma', '2021-06-29 11:41:18'),
	(187, 'Pernik', '2021-06-29 11:41:18'),
	(188, 'Pescara', '2021-06-29 11:41:18'),
	(189, 'Pirdop', '2021-06-29 11:41:18'),
	(190, 'Pite?ti', '2021-06-29 11:41:18'),
	(191, 'Pleven', '2021-06-29 11:41:18'),
	(192, 'Plovdiv', '2021-06-29 11:41:18'),
	(193, 'Plymouth', '2021-06-29 11:41:18'),
	(194, 'Ponte de Sor', '2021-06-29 11:41:18'),
	(195, 'Pori', '2021-06-29 11:41:18'),
	(196, 'Port de Sagunt', '2021-06-29 11:41:18'),
	(197, 'Porto', '2021-06-29 11:41:18'),
	(198, 'Porto-Vecchio', '2021-06-29 11:41:18'),
	(199, 'Pozna?', '2021-06-29 11:41:18'),
	(200, 'Praha', '2021-06-29 11:41:18'),
	(201, 'Pskov', '2021-06-29 11:41:18'),
	(202, 'Puertollano', '2021-06-29 11:41:18'),
	(203, 'Pärnu', '2021-06-29 11:41:18'),
	(204, 'Pécs', '2021-06-29 11:41:18'),
	(205, 'Reims', '2021-06-29 11:41:18'),
	(206, 'Rennes', '2021-06-29 11:41:18'),
	(207, 'Re?i?a', '2021-06-29 11:41:18'),
	(208, 'Roma', '2021-06-29 11:41:18'),
	(209, 'Roscoff', '2021-06-29 11:41:18'),
	(210, 'Rostock', '2021-06-29 11:41:18'),
	(211, 'Rotterdam', '2021-06-29 11:41:18'),
	(212, 'Ruse', '2021-06-29 11:41:18'),
	(213, 'R?zekne', '2021-06-29 11:41:18'),
	(214, 'R?ga', '2021-06-29 11:41:18'),
	(215, 'Saint Petersburg', '2021-06-29 11:41:18'),
	(216, 'Saint-Alban-du-Rhône', '2021-06-29 11:41:18'),
	(217, 'Saint-Laurent', '2021-06-29 11:41:18'),
	(218, 'Salamanca', '2021-06-29 11:41:18'),
	(219, 'Salzburg', '2021-06-29 11:41:18'),
	(220, 'Santander', '2021-06-29 11:41:18'),
	(221, 'Sassari', '2021-06-29 11:41:18'),
	(222, 'Setúbal', '2021-06-29 11:41:18'),
	(223, 'Sevilla', '2021-06-29 11:41:18'),
	(224, 'Sheffield', '2021-06-29 11:41:18'),
	(225, 'Sines', '2021-06-29 11:41:18'),
	(226, 'Sofia', '2021-06-29 11:41:18'),
	(227, 'Sosnovy Bor', '2021-06-29 11:41:18'),
	(228, 'Southampton', '2021-06-29 11:41:18'),
	(229, 'Stavanger', '2021-06-29 11:41:18'),
	(230, 'Stockholm', '2021-06-29 11:41:18'),
	(231, 'Strasbourg', '2021-06-29 11:41:18'),
	(232, 'Stuttgart', '2021-06-29 11:41:18'),
	(233, 'Suzzara', '2021-06-29 11:41:18'),
	(234, 'Swansea', '2021-06-29 11:41:18'),
	(235, 'Szczecin', '2021-06-29 11:41:18'),
	(236, 'Szeged', '2021-06-29 11:41:18'),
	(237, 'Södertälje', '2021-06-29 11:41:18'),
	(238, 'Tallinn', '2021-06-29 11:41:18'),
	(239, 'Tampere', '2021-06-29 11:41:18'),
	(240, 'Taranto', '2021-06-29 11:41:18'),
	(241, 'Tarragona', '2021-06-29 11:41:18'),
	(242, 'Tartu', '2021-06-29 11:41:18'),
	(243, 'Tekirda?', '2021-06-29 11:41:18'),
	(244, 'Terni', '2021-06-29 11:41:18'),
	(245, 'Teruel', '2021-06-29 11:41:18'),
	(246, 'Timi?oara', '2021-06-29 11:41:18'),
	(247, 'Torino', '2021-06-29 11:41:18'),
	(248, 'Toulouse', '2021-06-29 11:41:18'),
	(249, 'Travemünde', '2021-06-29 11:41:18'),
	(250, 'Trelleborg', '2021-06-29 11:41:18'),
	(251, 'Turku', '2021-06-29 11:41:18'),
	(252, 'Târgu Mure?', '2021-06-29 11:41:18'),
	(253, 'Uppsala', '2021-06-29 11:41:18'),
	(254, 'Utena', '2021-06-29 11:41:18'),
	(255, 'Valladolid', '2021-06-29 11:41:18'),
	(256, 'Valmiera', '2021-06-29 11:41:18'),
	(257, 'València', '2021-06-29 11:41:18'),
	(258, 'Vandellòs', '2021-06-29 11:41:18'),
	(259, 'Varna', '2021-06-29 11:41:18'),
	(260, 'Veliko Tarnovo', '2021-06-29 11:41:18'),
	(261, 'Venezia', '2021-06-29 11:41:18'),
	(262, 'Ventspils', '2021-06-29 11:41:18'),
	(263, 'Verona', '2021-06-29 11:41:18'),
	(264, 'Vigo', '2021-06-29 11:41:18'),
	(265, 'Vila-real', '2021-06-29 11:41:18'),
	(266, 'Villa San Giovanni', '2021-06-29 11:41:18'),
	(267, 'Vilnius', '2021-06-29 11:41:18'),
	(268, 'Vyborg', '2021-06-29 11:41:18'),
	(269, 'Västerås', '2021-06-29 11:41:18'),
	(270, 'Växjö', '2021-06-29 11:41:18'),
	(271, 'Warszawa', '2021-06-29 11:41:18'),
	(272, 'Wien', '2021-06-29 11:41:18'),
	(273, 'Wroc?aw', '2021-06-29 11:41:18'),
	(274, 'Zaragoza', '2021-06-29 11:41:18'),
	(275, 'Zürich', '2021-06-29 11:41:18'),
	(276, 'Évora', '2021-06-29 11:41:18'),
	(277, 'Örebro', '2021-06-29 11:41:18'),
	(278, '?ód?', '2021-06-29 11:41:18'),
	(279, 'Šiauliai', '2021-06-29 11:41:18');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle dijk_vtc.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `departure_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `truck_id` int(11) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `income` int(11) NOT NULL,
  `distance` int(11) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `evidence` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `FK_jobs_trucks` (`truck_id`),
  CONSTRAINT `FK_jobs_trucks` FOREIGN KEY (`truck_id`) REFERENCES `trucks` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle dijk_vtc.jobs: ~6 rows (ungefähr)
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` (`id`, `user_id`, `username`, `departure_id`, `destination_id`, `truck_id`, `cargo`, `income`, `distance`, `admin`, `evidence`, `timestamp`) VALUES
	(1, 1, 'Eronax', 51, 81, 1, 'Tomatos', 48535, 948, '', 'me = admin', '2021-07-19 12:25:37'),
	(2, 1, 'Eronax', 12, 175, 1, 'Potatos', 92485, 1593, '', 'Admin Again ;)', '2021-07-19 12:26:25'),
	(3, 1, 'Eronax', 19, 198, 5, 'Chips', 78398, 1028, '', 'admin againnnnn ;)', '2021-07-19 12:27:27'),
	(4, 1, 'Eronax', 209, 16, 7, 'Potatos', 48535, 1593, '', 'I am admin lol :D', '2021-07-19 15:42:40'),
	(5, 1, 'Eronax', 9, 18, 5, 'Chips', 92485, 1593, '', 'yes I will fix this lol :D', '2021-07-19 15:44:41'),
	(6, 1, 'Eronax', 54, 15, 7, 'Water', 32534, 586, '', 'admin power', '2021-07-19 15:45:33'),
	(7, 1, 'Eronax', 10, 185, 5, 'Potatos', 94859, 3453, '', 'yes I will fix this :D', '2021-07-19 15:47:39');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle dijk_vtc.levels
CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `level` int(11) NOT NULL DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle dijk_vtc.levels: ~14 rows (ungefähr)
/*!40000 ALTER TABLE `levels` DISABLE KEYS */;
INSERT INTO `levels` (`id`, `username`, `level`, `timestamp`) VALUES
	(1, 'Eronax', 43345, '2021-07-19 12:49:33'),
	(2, 'Fiber', 0, '2021-06-29 15:59:28'),
	(3, 'Tim', 0, '2021-06-28 13:33:18'),
	(4, 'Botond', 0, '2021-06-29 15:59:45'),
	(5, 'Alex', 0, '2021-06-28 13:34:06'),
	(6, 'Elias', 0, '2021-06-28 13:34:17'),
	(7, 'Admin', 0, '2021-06-28 13:34:31'),
	(8, 'amps', 0, '2021-06-29 15:45:40'),
	(9, 'Foxi', 0, '2021-06-29 15:45:58'),
	(10, 'Pizza', 0, '2021-06-29 15:46:27'),
	(11, 'Zir', 0, '2021-06-29 15:46:46'),
	(12, 'CactusCookie', 0, '2021-06-29 15:49:03'),
	(13, 'Ace', 0, '2021-06-29 15:49:18'),
	(14, 'FuPa', 0, '2021-06-29 15:49:35'),
	(15, 'Yunomi', 0, '2021-06-29 15:51:01'),
	(16, 'Guest', 0, '2021-06-30 08:55:46'),
	(17, 'KnockKnock', 0, '2021-06-30 11:50:53');
/*!40000 ALTER TABLE `levels` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle dijk_vtc.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle dijk_vtc.news: ~2 rows (ungefähr)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `username`, `title`, `body`, `timestamp`) VALUES
	(1, 'Eronax', 'Job Logger', '<u>We\'ve been working</u> <br> on a job logger for the past few weeks and we\'re coming closer to realase!', '2021-07-19 11:02:03'),
	(2, 'Eronax', 'This is a very first alpha of the website', 'just to show that everything already works!', '2021-07-19 15:49:05');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle dijk_vtc.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perms` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle dijk_vtc.roles: ~16 rows (ungefähr)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `perms`, `name`, `color`, `timestamp`) VALUES
	(1, 101, 'Chief Executive Officer', '#FF0000', '2021-06-29 15:38:39'),
	(2, 101, 'Chief Operating Officer', '#FF0202', '2021-06-29 15:38:57'),
	(3, 91, 'General Manager', '#2B1435', '2021-06-29 15:38:25'),
	(4, 101, 'Developer', '#71368A', '2021-07-19 11:18:28'),
	(5, 81, 'Human Resources', '#ffc4ea', '2021-06-29 15:39:02'),
	(6, 81, 'Community Moderation Manager', '#a2371c', '2021-06-29 15:42:51'),
	(7, 61, 'Media Manager', '#184f80', '2021-06-29 15:42:41'),
	(8, 61, 'Event Manager', '#d34923', '2021-06-29 15:39:13'),
	(9, 61, 'Event Manager', '#00ff8b', '2021-06-29 15:42:35'),
	(10, 51, 'Community Moderator', '#ffe400', '2021-06-29 15:42:58'),
	(11, 41, 'Recruiting Team', '#c4996c', '2021-06-29 15:43:06'),
	(12, 31, 'Event Team', '#49ca75', '2021-06-29 15:43:10'),
	(13, 31, 'Media Team', '#3f6d95', '2021-06-29 15:43:16'),
	(14, 31, 'Social Media Manager', '#970045', '2021-06-29 15:43:20'),
	(15, 11, 'Driver of the Month', '#ff9c00', '2021-06-29 15:43:26'),
	(16, 21, 'Partner', '#609e8e', '2021-06-29 15:43:31'),
	(17, 11, 'Driver', '#831f18', '2021-06-29 15:43:35'),
	(18, 0, 'User', '#00aaff', '2021-06-29 15:43:40');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle dijk_vtc.tokens
CREATE TABLE IF NOT EXISTS `tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` int(11) NOT NULL,
  `used` int(11) NOT NULL DEFAULT 0,
  `used_by` varchar(50) NOT NULL,
  `used_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle dijk_vtc.tokens: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `tokens` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle dijk_vtc.trucks
CREATE TABLE IF NOT EXISTS `trucks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `truck` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle dijk_vtc.trucks: ~8 rows (ungefähr)
/*!40000 ALTER TABLE `trucks` DISABLE KEYS */;
INSERT INTO `trucks` (`id`, `truck`, `timestamp`) VALUES
	(1, 'Scania', '2021-06-29 10:50:06'),
	(2, 'Mercedes', '2021-06-29 10:50:10'),
	(3, 'Volvo', '2021-06-29 10:50:13'),
	(4, 'MAN', '2021-06-29 10:50:16'),
	(5, 'Daf', '2021-06-29 10:50:18'),
	(6, 'Iveco', '2021-06-29 10:50:24'),
	(7, 'Renault', '2021-06-29 10:50:28'),
	(8, 'Ford', '2021-06-29 10:50:31');
/*!40000 ALTER TABLE `trucks` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle dijk_vtc.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 18,
  `status` varchar(50) NOT NULL DEFAULT 'Not Verified',
  `discord` varchar(50) NOT NULL,
  `truckersmp` varchar(50) NOT NULL,
  `user_pb` text NOT NULL DEFAULT 'https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg',
  `status_color` varchar(50) NOT NULL DEFAULT '#fff',
  `information` text NOT NULL DEFAULT 'There is no information yet.',
  `last_online` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `FK_users_roles` (`role_id`),
  CONSTRAINT `FK_users_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle dijk_vtc.users: ~17 rows (ungefähr)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `role_id`, `status`, `discord`, `truckersmp`, `user_pb`, `status_color`, `information`, `last_online`, `updated_at`, `timestamp`) VALUES
	(1, 'Eronax', 'admin', 4, 'Verified', 'Eronax#2491', '13169982', 'https://static.truckersmp.com/avatarsN/1316998.1601715917.png', '#00e1ff', 'I am just a random developer at this website.', '2021-07-20 09:51:33', '2021-07-20 09:51:33', '2021-06-28 13:31:16'),
	(2, 'Fiber', 'admin', 1, 'Verified', 'Fiber.®#0007', '2739794', 'https://images-ext-1.discordapp.net/external/-zNPLldEwgkYfLVINl-U5MuvVj7LcTZUoBh15V6f3kM/%3Fsize%3D256%26f%3D.gif/https/cdn.discordapp.com/avatars/568753486326398989/a_0e7a9f400167f4d3db29c6996eab56ad.gif', '#fff', 'There is no information here.', '2021-07-19 15:46:15', '2021-07-19 15:46:15', '2021-06-28 13:33:09'),
	(3, 'Tim', 'admin', 15, 'Not Verified', '.Tim.#1999', '113811', 'https://cdn.discordapp.com/avatars/342695033348161556/ff7cf6960228a610b696f90f718fc9c8.png?size=1024', '#ff0000', 'There is no information here.', '2021-07-19 14:33:18', '2021-07-19 15:48:35', '2021-06-28 13:33:18'),
	(4, 'Botond', 'admin', 1, 'Verified', 'Botiful #3215', '1384788', 'https://images-ext-1.discordapp.net/external/cpP-3r30pguHtP5o0Gx6rBtOyymKABNHceMJAXCb0j0/%3Fsize%3D256%26f%3D.gif/https/cdn.discordapp.com/avatars/436173560931680258/a_9e52c970020ea0ea6f009ac485cff169.gif', '#fff', 'KnockKnock ist nice', '2021-07-19 13:44:05', '2021-06-12 12:54:29', '2021-06-28 13:33:31'),
	(5, 'Alex', 'admin', 13, 'Not Verified', 'XaniTrucker[GER]#0001', '3455435', 'https://images-ext-1.discordapp.net/external/DUJ9abiNNnu_MtVM5l-bJj6xwO235hzhAhlpg595Rv0/%3Fsize%3D256/https/cdn.discordapp.com/avatars/646380684528582666/ed5a0664f4b7cb3bf829c34fc65d8e11.png', '#fff', 'There is no information here.', '2021-07-19 13:44:05', '2021-05-07 12:54:29', '2021-06-28 13:34:06'),
	(6, 'Elias', 'admin', 8, 'Not Verified', 'Elias. #6507', '3636432', 'https://images-ext-2.discordapp.net/external/bL8eMAHJa6o_KkZUJZ6TE6R555ZzF7GpKTQGA-aRhSo/%3Fsize%3D256/https/cdn.discordapp.com/avatars/409770394892107777/05ec689f7ffc2eb6ca9d1c654b72c9f1.png', '#fff', 'There is no information here.', '2021-07-19 13:44:05', '2021-06-23 12:54:29', '2021-06-28 13:34:17'),
	(7, 'Admin', 'admin', 18, 'Not Verified', 'admin', '3942342', 'https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg', '#fff', 'There is no information here.', '2021-07-19 13:44:05', '2021-04-06 12:54:29', '2021-06-28 13:34:31'),
	(8, 'amps', 'admin', 3, 'Not Verified', 'azzurri#8475', '99999', 'https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg', '#fff', 'There is no information here.', '2021-07-19 13:44:05', '2021-05-16 12:54:29', '2021-06-29 15:45:40'),
	(9, 'Foxi', 'admin', 7, 'Not Verified', 'Foxi17.#6238', '99999', 'https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg', '#fff', 'There is no information here.', '2021-07-19 13:44:05', '2021-06-12 12:54:29', '2021-06-29 15:45:58'),
	(10, 'Pizza', 'admin', 5, 'Not Verified', 'pizza driver.🍕#0118', '99999', 'https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg', '#fff', 'There is no information here.', '2021-07-19 13:44:05', '2021-06-19 12:54:29', '2021-06-29 15:46:27'),
	(11, 'Zir', 'admin', 6, 'Not Verified', '𝒁𝒊𝒓-𝒄𝒐𝒏𝒊𝒔#2661', '99999', 'https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg', '#fff', 'There is no information here.', '2021-07-19 13:44:05', '2021-07-11 12:54:26', '2021-06-29 15:46:46'),
	(12, 'CactusCookie', 'admin', 17, 'Not Verified', 'CactusCookie#2004', '99999', 'https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg', '#000000', 'There is no information here.', '2021-07-19 13:44:05', '2021-07-04 12:54:29', '2021-06-29 15:49:03'),
	(13, 'Ace', 'admin', 17, 'Not Verified', '.Ace.#0405', '99999', 'https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg', '#fff', 'There is no information here.', '2021-07-19 13:44:05', '2021-07-14 12:54:29', '2021-06-29 15:49:18'),
	(14, 'FuPa', 'admin', 17, 'Not Verified', 'FuPa#0792', '99999', 'https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg', '#fff', 'There is no information here.', '2021-07-19 13:44:05', '2021-07-06 12:54:29', '2021-06-29 15:49:35'),
	(15, 'Yunomi', 'admin', 17, 'Not Verified', 'Yunomi#0728', '99999', 'https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg', '#fff', 'There is no information here.', '2021-07-19 13:44:05', '2021-07-08 12:54:29', '2021-06-29 15:51:01'),
	(16, 'Guest', 'guest', 18, 'Not Verified', 'Van Dijk Guest', '0', 'https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg', '#fff', 'There is no information here.', '2021-07-19 15:46:46', '2021-07-19 15:46:46', '2021-06-30 08:55:46'),
	(17, 'KnockKnock', 'admin', 16, 'VIP', 'KnockKnock#9201', '99999', 'https://cdn.discordapp.com/avatars/289858294464380931/8886ff28dee2a8ed7e14173f1823c272.png?size=256', '#fff', 'I love our social studies teacher. She\'s so friendly and perfect! <3', '2021-07-19 13:44:05', '2021-07-11 12:54:29', '2021-06-30 11:50:53');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
