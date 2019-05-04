-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 04 mai 2019 à 19:57
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `amazonece`
--

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `IDI` int(11) NOT NULL AUTO_INCREMENT,
  `IDVariation` int(11) NOT NULL DEFAULT '1',
  `nomI` varchar(255) NOT NULL,
  `photoI` varchar(255) NOT NULL,
  `descriptionI` text NOT NULL,
  `videoI` varchar(255) NOT NULL,
  `categorie` text NOT NULL,
  `nombreI` int(11) NOT NULL,
  `prixI` int(11) NOT NULL,
  `IDV` int(11) NOT NULL,
  `IDAcheteur` int(11) NOT NULL DEFAULT '0',
  `Vendu` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDI`,`IDVariation`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=ascii;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`IDI`, `IDVariation`, `nomI`, `photoI`, `descriptionI`, `videoI`, `categorie`, `nombreI`, `prixI`, `IDV`, `IDAcheteur`, `Vendu`) VALUES
(1, 1, 'Ville pleine de rats', 'paris.jpg', 'une ville', '', 'Sport', 1, 2, 1, 0, 5),
(4, 1, 'Berlin', 'paris.jpg', 'Un vetement rigolo', '', 'Sport', 1, 9, 1, 0, 7),
(2, 1, 'Londres', 'paris.jpg', 'Paris en lovely', 'vid.mp4', 'Livres', 1, 4, 1, 0, 9),
(3, 1, 'une ville', 'paris.jpg', 'ville random', '', 'Livres', 1, 8, 2, 0, 1),
(4, 2, 'BerlinBis', 'paris.jpg', 'bis bis bis ', '', 'Sport', 1, 4, 1, 0, 3),
(1, 2, 'bis', 'paris.jpg', 'biiiiis', '', 'Sport', 1, 12, 1, 0, 0),
(6, 1, 'gngngn', 'paris.jpg', 'gngngngn', '', 'Sport', 5, 665, 1, 0, 0),
(1, 3, 'yaie', 'paris.jpg', 'Si ca marche!', '', 'Sport', 54, 1, 1, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
