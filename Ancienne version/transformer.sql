-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 31 Janvier 2020 à 09:08
-- Version du serveur :  5.7.29-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Transformers`
--

-- --------------------------------------------------------

--
-- Structure de la table `transformer`
--

CREATE TABLE `transformer` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `Activité` text NOT NULL,
  `description` text NOT NULL,
  `taille` varchar(255) NOT NULL,
  `origine` varchar(255) NOT NULL,
  `illustration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `transformer`
--

INSERT INTO `transformer` (`id`, `titre`, `Activité`, `description`, `taille`, `origine`, `illustration`) VALUES
(1, 'Optimus Prime', 'Commandant suprême des Autobots ', 'Optimus Prime est le personnage principal de l\'univers de fiction des Transformers, où il tient le rôle de commandant des Autobots, groupe d\'héroïques robots extraterrestres capables de se transformer en divers véhicules. Il représente l\'une des figures les plus emblématiques de cette franchise. ', '9.14M', 'Cybertron', ''),
(2, 'Mégatron', 'Commandant suprême des Decepticons', 'Mégatron est considéré comme le méchant par excellence de la saga : il est présent dans toutes les séries de Transformers, que ce soit sous son visage habituel, sous les traits de Galvatron ou encore à travers son descendant Predacon. S\'il arrive qu\'Unicron joue le rôle du méchant, Mégatron reste plus connu comme adversaire d\'Optimus Prime, leader des Autobots. ', '10,67 m environ', 'Cybertron', ''),
(3, 'Bumblebee', 'Espion', 'Bumblebee est un robot dans l\'univers de fiction Transformers. Il est membre des Autobots, un groupe de robots extraterrestres sentients capables de se transformer en divers véhicules. Dans la plupart des versions, Bumblebee est une petite Volkswagen Coccinelle jaune, mais dans les films d\'action, il apparaît comme une muscle car (voiture sportive américaine) jaune et noire. Le personnage doit son nom au bourdon, une abeille à rayures noires et jaunes qui a inspiré son concept. Bumblebee apparaît dans la plupart des séries et devient plus tard le principal protagoniste de Transformers: Robots in Disguise, Bumblebee et Transformers: Cyberverse. ', '4.94 M', 'Cybertron', ''),
(4, 'Starcream', 'Chef en second des armées Decepticons et commandant des forces aériennes', 'Il est le second de Mégatron et l\'un des méchants les plus célèbres de la série. Il est présent de façon significative dans presque toutes les séries Transformers, et fait même une brève apparition dans l\'épisode \"Possession\" d\'Animutants.\r\n\r\nComme la plupart des personnages de la saga, Starscream a connu plusieurs incarnations aux tempéraments différents. Cependant, la plupart d\'entre elles partagent en commun la place de chef en second des Decepticon, un tempérament traitre, une haine viscérale pour le chef des Decepticons Mégatron et un désir ardent de le renverser pour prendre sa place. ', '9.45m', 'Cybertron', ''),
(5, 'Rodimus Prime ou Hot Rod', 'Protecteur', 'Rodimus Prime est le nom d\'un personnage de l\'univers de fiction des Transformers. Il a tout d\'abord été connu sous le nom de Hot Rod, dans le long-métrage La Guerre des robots. Quand il reçoit la Matrice de Commandement des mains d\'Optimus Prime, il devient Rodimus Prime, et devient le principal protagoniste du film. Hasbro l\'a tour à tour désigné comme Rodimus, Rodimus Major, mais aussi Hot Shot, à cause de problèmes de droits concernant le nom « Hot Rod ».\r\n\r\nSa forme alternative est une voiture sport futuriste au motif de flamme sur le capot à l\'époque où il est Hot Rod, et par la suite se transforme en fourgon futuriste alors qu\'il est devenu Rodimus Prime. ', '5.0 M', 'Cybertron', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
