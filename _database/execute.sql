/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `dijk_vtc` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `dijk_vtc`;

CREATE TABLE IF NOT EXISTS `banks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` tinytext NOT NULL,
  `balance` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `banks` DISABLE KEYS */;
INSERT INTO `banks` (`id`, `username`, `balance`, `updated_at`, `created_at`) VALUES
	(1, 'admin', 0, '2021-07-22 10:29:56', '2021-07-22 08:29:39');
/*!40000 ALTER TABLE `banks` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `bans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` tinytext NOT NULL,
  `banned_by` tinytext NOT NULL,
  `ban_reason` text NOT NULL,
  `ban_expires` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `bans` DISABLE KEYS */;
/*!40000 ALTER TABLE `bans` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=280 DEFAULT CHARSET=utf8mb4;

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
  `admin` varchar(50) DEFAULT NULL,
  `evidence` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `level` int(11) NOT NULL DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `levels` DISABLE KEYS */;
INSERT INTO `levels` (`id`, `username`, `level`, `timestamp`) VALUES
	(1, 'admin', 0, '2021-07-22 10:29:50');
/*!40000 ALTER TABLE `levels` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `username`, `title`, `body`, `updated_at`, `created_at`) VALUES
	(1, 'admin', 'DriversHub is now in public beta!', 'We\'ve been working hard on the website lately and we\'re now are a point where we can show our dashboard to our drivers. Much work has been put into it, so please contact us if you found any bugs or mistakes!', '2021-07-22 10:29:46', '2021-07-21 10:28:41');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perms` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `perms`, `name`, `color`, `updated_at`, `created_at`) VALUES
	(1, 100, 'Chief Executive Officer', '#d60000', '2021-07-21 10:15:46', '2021-07-21 10:15:46'),
	(2, 100, 'Chief Operating Officer', '#ff0202', '2021-07-21 10:16:04', '2021-07-21 10:16:04'),
	(3, 90, 'General Manager', '#8900c5', '2021-07-21 10:16:18', '2021-07-21 10:16:17'),
	(4, 100, 'Developer', '#9159ff', '2021-07-21 10:16:27', '2021-07-21 10:16:27'),
	(5, 80, 'Human Resources', '#ffcbec', '2021-07-21 10:16:39', '2021-07-21 10:16:39'),
	(6, 70, 'Community Moderation Manager', '#cab200', '2021-07-21 10:17:01', '2021-07-21 10:17:01'),
	(7, 60, 'Media Manager', '#0042c0', '2021-07-21 10:17:13', '2021-07-21 10:17:12'),
	(8, 60, 'Event Manager', '#00c744', '2021-07-21 10:17:26', '2021-07-21 10:17:21'),
	(9, 50, 'Community Moderator', '#ffe400', '2021-07-21 10:17:41', '2021-07-21 10:17:41'),
	(10, 40, 'Recruiting Team', '#fd8300', '2021-07-21 10:17:55', '2021-07-21 10:17:55'),
	(11, 40, 'Event Team', '#00ff56', '2021-07-21 10:18:08', '2021-07-21 10:18:08'),
	(12, 40, 'Media Team', '#0058ff', '2021-07-21 10:18:21', '2021-07-21 10:18:21'),
	(13, 40, 'Social Media Team', '#ff0075', '2021-07-21 10:18:43', '2021-07-21 10:18:34'),
	(14, 40, 'Dispatcher', '#d40033', '2021-07-21 10:18:58', '2021-07-21 10:18:58'),
	(15, 30, 'Driver of the Month', '#46c3ff', '2021-07-21 10:19:12', '2021-07-21 10:19:12'),
	(16, 20, 'Driver', '#007cb6', '2021-07-21 10:19:32', '2021-07-21 10:19:32'),
	(17, 10, 'Picture of the Month', '#00ffab', '2021-07-21 10:19:47', '2021-07-21 10:19:47'),
	(18, 10, 'Partner', '#00ad74', '2021-07-21 10:20:18', '2021-07-21 10:20:03'),
	(19, 10, 'Retired Driver', '#1b88bd', '2021-07-21 10:22:08', '2021-07-21 10:20:31'),
	(20, 10, 'Server Booster', '#f47fff', '2021-07-21 10:22:07', '2021-07-21 10:20:50'),
	(21, 0, 'TruckersMp Staff', '#91c758', '2021-07-21 10:21:51', '2021-07-21 10:21:01'),
	(22, 0, 'Public', '#00aaff', '2021-07-21 10:22:03', '2021-07-21 10:21:30');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `used` int(11) NOT NULL DEFAULT 0,
  `used_by` varchar(50) DEFAULT NULL,
  `used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `token` (`token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `tokens` DISABLE KEYS */;
INSERT INTO `tokens` (`id`, `token`, `used`, `used_by`, `used_at`, `created_at`) VALUES
	(1, '127', 1, 'admin', '2021-07-22 08:29:39', '2021-07-22 08:28:52');
/*!40000 ALTER TABLE `tokens` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `trucks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `truck` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `trucks` DISABLE KEYS */;
INSERT INTO `trucks` (`id`, `truck`, `timestamp`) VALUES
	(1, 'Scania', '2021-06-29 10:50:06'),
	(2, 'Mercedes', '2021-06-29 10:50:10'),
	(3, 'Volvo', '2021-06-29 10:50:13'),
	(4, 'MAN', '2021-06-29 10:50:16'),
	(5, 'Daf', '2021-06-29 10:50:18'),
	(6, 'Iveco', '2021-06-29 10:50:24'),
	(7, 'Renault', '2021-06-29 10:50:28'),
	(8, 'Ford', '2021-06-29 10:50:31'),
	(9, 'Freithtliner Cascadia', '2021-07-22 09:03:40'),
	(10, 'International LoneStar', '2021-07-22 09:03:49'),
	(11, 'Kenworth', '2021-07-22 09:03:27'),
	(12, 'Mack', '2021-07-22 09:04:03'),
	(13, 'Peterbilt', '2021-07-22 09:04:25'),
	(14, 'Western Star', '2021-07-22 09:04:34');
/*!40000 ALTER TABLE `trucks` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 22,
  `status` varchar(50) NOT NULL DEFAULT 'Not Verified',
  `discord` varchar(50) NOT NULL,
  `truckersmp` int(50) NOT NULL,
  `user_pb` text NOT NULL DEFAULT 'https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg',
  `information_color` varchar(50) NOT NULL DEFAULT '#fffff',
  `information` text NOT NULL DEFAULT 'There is no information yet.',
  `last_online` timestamp NOT NULL DEFAULT current_timestamp(),
  `role_update` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `role_id`, `status`, `discord`, `truckersmp`, `user_pb`, `information_color`, `information`, `last_online`, `role_update`, `updated_at`, `created_at`) VALUES
	(1, 'admin', 'admin', 1, 'Not Verified', 'admin#0001', 1, 'https://static.truckersmp.com/avatarsN/1316998.1601715917.png', '#fffff', 'There is no information yet.', '2021-07-22 10:30:51', '2021-07-22 08:29:39', '2021-07-22 08:29:39', '2021-07-22 08:29:39');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
