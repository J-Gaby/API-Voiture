-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 09 jan. 2020 à 10:12
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `voitures`
--

-- --------------------------------------------------------

--
-- Structure de la table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `marque` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `model` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `gamme` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `prix` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `info`
--

INSERT INTO `info` (`marque`, `model`, `gamme`, `prix`, `id`) VALUES
('Bugatti', '\"voiture noire\"', 'Sport', '16 000 000€', 1),
('Lamborghini', 'Urus', 'Sport', '214 000€', 2),
('Lamborghini', 'Aventador', 'Sport', '337 000€', 3),
('Lamborghini', 'Huracan', 'Sport', '180 000€', 4),
('Porsche', '911 turbo', 'Sport', '106 000€', 5),
('Porsche', 'Panamera', 'Famillial', '99 000€', 6),
('Porsche', 'Cayenne', 'SUV', '78 000€', 7),
('Tesla', 'Roadster', 'Sport', '172 000€', 8),
('Tesla', 'Model S', 'Sport', '91 000€', 9),
('Tesla', 'Cybertruck', 'SUV', '40 000€', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
