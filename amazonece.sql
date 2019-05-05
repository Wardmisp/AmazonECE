-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 05 mai 2019 à 16:04
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

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
  `codepostal` int(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `telephone` int(10) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`IDAcheteur`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=ascii;

--
-- Déchargement des données de la table `acheteur`
--

INSERT INTO `acheteur` (`IDAcheteur`, `nomA`, `prenomA`, `mailA`, `adresse`, `codepostal`, `ville`, `pays`, `telephone`, `pass`) VALUES
(30, 'Laffin', 'Lucie', 'Lucie@gmail.com', '1 Rue Duvergier', 75019, 'Paris', 'France', 633333333, '0000'),
(1, 'Giraudon', 'Mathilde', 'mathilde.giraudon@gmail.com', '8 Rue Docteur Potain', 75019, 'Paris', 'France', 689526260, '1234'),
(28, 'Troussard', 'Victor', 'victor@gmail.com', '1 Rue de la paix', 75004, 'Paris', 'FRance', 622222222, '1111');

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

DROP TABLE IF EXISTS `carte`;
CREATE TABLE IF NOT EXISTS `carte` (
  `IDCB` int(255) NOT NULL AUTO_INCREMENT,
  `typeCB` varchar(255) NOT NULL,
  `numeroCB` int(255) NOT NULL,
  `nomCB` varchar(255) NOT NULL,
  `dateCB` date NOT NULL,
  `codeCB` int(11) NOT NULL,
  PRIMARY KEY (`IDCB`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `carte`
--

INSERT INTO `carte` (`IDCB`, `typeCB`, `numeroCB`, `nomCB`, `dateCB`, `codeCB`) VALUES
(18, 'Visa', 23232323, 'Laffin', '2019-06-07', 123),
(17, 'Visa', 45654521, 'Troussard', '2019-06-07', 123),
(1, 'MasterCard', 11111111, 'Giraudon', '2020-10-19', 111);

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
