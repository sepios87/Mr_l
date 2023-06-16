-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 16 juin 2023 à 12:06
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mrl`
--

-- --------------------------------------------------------

--
-- Structure de la table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` float(10,1) NOT NULL,
  `isVegetarian` tinyint(1) NOT NULL,
  `ingredients` varchar(555) COLLATE utf8mb4_general_ci NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `food`
--

INSERT INTO `food` (`id`, `name`, `price`, `isVegetarian`, `ingredients`) VALUES
(21, 'Toutouyoutou', 9.0, 0, 'Ketchup de carotte, Oignons rouges, Coriandre'),
(20, 'Tradichienel', 9.0, 0, 'Ketchup Artisanal, Oignons frits'),
(22, 'Oh my dog', 9.5, 0, 'Crème de truffe, Oignons rouges'),
(23, 'Végétariench', 8.0, 1, 'Sexy carotte fondante, Eclats d\'oeufs, Oignons rouge, Sauce cool');

-- --------------------------------------------------------

--
-- Structure de la table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int NOT NULL AUTO_INCREMENT,
  `day` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `hourly` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `schedule`
--

INSERT INTO `schedule` (`id`, `day`, `hourly`) VALUES
(1, 'Lundi', '11H30 - 14H / 19H - 21H30'),
(2, 'Mardi', '11H30 - 14H / 19H - 21H30'),
(3, 'Mercredi', '11H30 - 14H / 19H - 21H30'),
(4, 'Jeudi', '11H30 - 14H / 19H - 21H30'),
(5, 'Vendredi', '11H30 - 14H / 19H - 21H30'),
(6, 'Samedi', '11H30 - 14H / 19H - 21H30'),
(7, 'Dimanche', 'Fermé');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'florian.toribio@gmail.com', 'c8f0e7d6a7a962341423ce4c2c05625dcf0d3938dffc71c81bf9ffe27d7384f7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
