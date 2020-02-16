-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Dim 16 Février 2020 à 13:30
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
  `titre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Activite` text CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `taille` text CHARACTER SET utf8 NOT NULL,
  `origine` varchar(255) CHARACTER SET utf8 NOT NULL,
  `illustration` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Contenu de la table `transformer`
--

INSERT INTO `transformer` (`id`, `titre`, `Activite`, `description`, `taille`, `origine`, `illustration`) VALUES
(1, 'Optimus Prime', 'Commandant suprÃ¨me des Autobots ', 'Optimus Prime est le personnage principal de l univers de fiction des Transformers, ou il tient le rÃ´le de commandant des Autobots, groupe de robots extraterrestres capables de se transformer en divers vÃ©hicules. Il reprÃ©sente lune des figures les plus emblÃ©matiques de cette franchise. ', '9.14M', 'Cybertron', 'OP2_6b833e59-eca1-4337-955b-ce0821a492c5_1400x.jpg'),
(2, 'MÃ©gatron', 'Commandant suprÃ¨me des Decepticons', 'MÃ©gatron est considÃ©rÃ© comme le mÃ©chant par excellence de la saga : il est prÃ©sent dans toutes les sÃ©ries de Transformers, que ce soit sous son visage habituel, sous les traits de Galvatron ou encore Ã  travers son descendant Predacon. S il arrive qu Unicron joue le role du mÃ©chant, MÃ©gatron reste plus connu comme adversaire d Optimus Prime, leader des Autobots. ', '10,67 m environ', 'Cybertron', 'G1-Megatron.png'),
(3, 'Bumblebee', 'Espion', 'Bumblebee est un robot dans l univers de fiction Transformers. Il est membre des Autobots, un groupe de robots extraterrestres sentients capables de se transformer en divers vÃ©hicules. Dans la plupart des versions, Bumblebee est une petite Volkswagen Coccinelle jaune, mais dans les films d action, il apparait comme une muscle car (voiture sportive amÃ©ricaine) jaune et noire. Le personnage doit son nom au bourdon, une abeille Ã  rayures noires et jaunes qui a inspirÃ© son concept. Bumblebee apparaÃ©t dans la plupart des sÃ©ries et devient plus tard le principal protagoniste de Transformers: Robots in Disguise, Bumblebee et Transformers: Cyberverse. ', '4.94 M', 'Cybertron', 'intro-1545680472.jpg'),
(4, 'Starcream', 'Chef en second des armÃ©es Decepticons et commandant des forces aÃ©riennes', 'Il est le second de MÃ©gatron et l un des mÃ©chants les plus cÃ©lÃ©bres de la sÃ©rie. Il est prÃ©sent de faÃ§on significative dans presque toutes les sÃ©ries Transformers, et fait mÃ©me une brÃ©ve apparition dans l Ã©pisode Possession d Animutants. Comme la plupart des personnages de la saga, Starscream a connu plusieurs incarnations aux tempÃ©raments diffÃ©rents. Cependant, la plupart d entre elles partagent en commun la place de chef en second des Decepticon, un tempÃ©rament traitre, une haine viscÃ©rale pour le chef des Decepticons MÃ©gatron et un dÃ©sir ardent de le renverser pour prendre sa place. ', '9.45m', 'Cybertron', '300px-Starscreammovieheadshot.jpg'),
(5, 'Rodimus Prime ou Hot Rod', 'Protecteur', 'Rodimus Prime est le nom d un personnage de l univers de fiction des Transformers. Il a tout d abord Ã©tÃ© connu sous le nom de Hot Rod, dans le long mÃ©trage La Guerre des robots. Quand il reÃ§oit la Matrice de Commandement des mains d Optimus Prime, il devient Rodimus Prime, et devient le principal protagoniste du film. Hasbro la tour a tour dÃ©signe comme Rodimus, Rodimus Major, mais aussi Hot Shot, a cause de problÃ¨mes de droits concernant le nom  Hot Rod .\r\n\r\nSa forme alternative est une voiture sport futuriste au motif de flamme sur le capot a l Ã©poque ou il est Hot Rod, et par la suite se transforme en fourgon futuriste alors qu il est devenu Rodimus Prime. ', '5.0 M', 'Cybertron', 'Rodimus-Prime-Grid.png');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `transformer`
--
ALTER TABLE `transformer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `transformer`
--
ALTER TABLE `transformer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
