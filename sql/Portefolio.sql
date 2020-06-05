-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 05 juin 2020 à 10:10
-- Version du serveur :  8.0.18
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `adam`
--

-- --------------------------------------------------------

--
-- Structure de la table `portefolio`
--

DROP TABLE IF EXISTS `portefolio`;
CREATE TABLE IF NOT EXISTS `portefolio` (
  `id_portefolio` int(7) NOT NULL AUTO_INCREMENT,
  `picture_portefolio` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `originPicture_portefolio` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `evenement_portefolio` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `lieu_portefolio` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `date_portefolio` date DEFAULT NULL,
  `other_portefolio` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  PRIMARY KEY (`id_portefolio`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `portefolio`
--

INSERT INTO `portefolio` (`id_portefolio`, `picture_portefolio`, `originPicture_portefolio`, `evenement_portefolio`, `lieu_portefolio`, `date_portefolio`, `other_portefolio`) VALUES
(6, '', ' ', ' Un portefolio', 'Lyon ', '1800-07-14', 'Oui ca marche');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
