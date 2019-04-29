-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 29 avr. 2019 à 13:20
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
-- Structure de la table `acheteur`
--

DROP TABLE IF EXISTS `acheteur`;
CREATE TABLE IF NOT EXISTS `acheteur` (
  `IDAcheteur` int(11) NOT NULL AUTO_INCREMENT,
  `nomA` varchar(255) NOT NULL,
  `prenomA` varchar(255) NOT NULL,
  `mailA` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `nombreA` int(11) NOT NULL,
  PRIMARY KEY (`IDAcheteur`)
) ENGINE=MyISAM DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

DROP TABLE IF EXISTS `carte`;
CREATE TABLE IF NOT EXISTS `carte` (
  `numeroCB` int(11) NOT NULL,
  `typeCB` int(11) NOT NULL,
  `nomCB` varchar(255) NOT NULL,
  `dateCB` date NOT NULL,
  `codeCB` int(11) NOT NULL,
  `IDAcheteur` int(11) NOT NULL,
  PRIMARY KEY (`numeroCB`)
) ENGINE=MyISAM DEFAULT CHARSET=ascii;

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
  PRIMARY KEY (`IDI`,`IDVariation`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=ascii;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`IDI`, `IDVariation`, `nomI`, `photoI`, `descriptionI`, `videoI`, `categorie`, `nombreI`, `prixI`, `IDV`, `IDAcheteur`) VALUES
(1, 1, 'ville pleine de rats', 'paris.jpg', 'Vous aimez les rats ? Vous aimez les gros casse couilles mal polis qui puent ? \r\nAlors Paris c\'est pour vous!', '', 'Livres', 1, 2, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `IDVendeur` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mailV` varchar(255) NOT NULL,
  `nomV` varchar(255) NOT NULL,
  `PpV` varchar(255) NOT NULL,
  `pcouvertureV` varchar(255) NOT NULL,
  `IDAdmin` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDVendeur`)
) ENGINE=MyISAM DEFAULT CHARSET=ascii;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
