-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 29 mai 2020 à 07:58
-- Version du serveur :  5.7.26
-- Version de PHP : 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Adam`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenementPortefolio`
--

CREATE TABLE `evenementPortefolio` (
  `evenementPortefolio_id` int(7) NOT NULL,
  `evenementPortefolio_picture` varchar(100) DEFAULT NULL,
  `evenementPortefolio_originPicture` varchar(100) DEFAULT NULL,
  `evenementPortefolio_evenement` varchar(1000) DEFAULT NULL,
  `evenementPortefolio_lieu` varchar(50) DEFAULT NULL,
  `evenementPortefolio_date` date DEFAULT NULL,
  `evenementPortefolio_other` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `evenementPortefolio`
--
ALTER TABLE `evenementPortefolio`
  ADD PRIMARY KEY (`evenementPortefolio_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
