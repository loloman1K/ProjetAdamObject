-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 04 Juin 2020 à 11:25
-- Version du serveur :  5.7.28-0ubuntu0.18.04.4
-- Version de PHP :  7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Adam`
--

-- --------------------------------------------------------

--
-- Structure de la table `filmsad`
--

CREATE TABLE `filmsad` (
  `id_film` int(11) NOT NULL,
  `title_film` varchar(100) NOT NULL,
  `director_film` varchar(100) NOT NULL,
  `kind_film` varchar(100) NOT NULL,
  `annee_film` int(11) NOT NULL,
  `duration_film` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `filmsad`
--

INSERT INTO `filmsad` (`id_film`, `title_film`, `director_film`, `kind_film`, `annee_film`, `duration_film`) VALUES
(1, 'letitre', 'le directorrr', 'kind', 1992, '2020-06-12');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `filmsad`
--
ALTER TABLE `filmsad`
  ADD PRIMARY KEY (`id_film`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `filmsad`
--
ALTER TABLE `filmsad`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
