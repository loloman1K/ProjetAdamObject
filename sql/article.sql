-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 03 Juin 2020 à 13:30
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
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_art` int(7) NOT NULL,
  `title_art` varchar(100) DEFAULT NULL,
  `page_art` varchar(30) DEFAULT NULL,
  `text_art` varchar(20000) DEFAULT NULL,
  `abstract_art` varchar(500) DEFAULT NULL,
  `picture_art` varchar(50) DEFAULT NULL,
  `originPicture_art` varchar(50) DEFAULT NULL,
  `link_art` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_art`, `title_art`, `page_art`, `text_art`, `abstract_art`, `picture_art`, `originPicture_art`, `link_art`) VALUES
(1, 'Okeenea Digital : GPS pour personne atteinte de déficience visuelle', 'home', 'Okeenea Digital lance le 1er GPS pour personnes atteinte de cécité et autre handicap.\r\nPar le biais d’une application gratuite, la personne peut se déplacer à l’extérieur comme à l’intérieur d’édifice complexe tel que : les gars, aéroport, centres commerciaux… \r\nCette application prend en compte les besoins spécifiques des usagers et les infrastructures d’accessibilité existantes.\r\n\r\nSon but :\r\n Guider une personne en situation de handicap (en situation de cécité dans le cadre de mon fils) d’un point A à un point B,\r\nInterfaces, itinéraires et instructions adaptées en fonction des besoins de la personne, de son éventuel handicap (temporaire ou non).\r\nCela permet de réduire le stress de déplacement, mais surtout rendre augmenter l’autonomie des personnes en situations d’handicap et sécurisé son déplacement.\r\n\r\nL’application s’adapte au besoin des différents handicaps :\r\nPour les personnes aveugles le logiciel utilise les lecteurs d’écran VoiceOver et Talkback pour être compatible vocalement. \r\nPour les personnes malvoyantes, en plus de la fonction vocale, le service propose un graphisme contrasté.\r\nPour les personnes atteintes de déficiences auditive, les alertes sonores sont notifiés par le biais du texte.\r\nPour les personnes handicapées moteur, les déplacements sont optimisés (ascenseurs, rampes d’accès…). \r\nPour les personnes déficientes mentales, l’interface graphique est simple et épurée disponible dans plusieurs sensibilités sensorielles\r\n', NULL, NULL, NULL, 'https://www.okeenea.com/nos-solutions/okeenea-digital-gps-indoor-handicap/'),
(2, 'CAMSP', 'camsp', 'Le CAMSP signifie :  Centre d’Action Médico-Sociale Précoce\r\n\r\nIl existe plusieurs camps, pour le déficit visuelle, auditif et handicap « rare »\r\nMon fils fait partie du camp spécialisé dans le déficients visuelle…\r\nNon voyant de naissance, cet handicap, à un impact sur ses stimulations, interactions de son entourage et son environnement\r\nL’accès à l’information visuelle lui est impossible, c’est pourquoi sa pathologie demandant un développement spécifique, le CAMSP permet de suivre et soutenir son développement, aiguillé les familles. Grace à une équipe psycho-médical attentif à ses capacités de découverte de l’environnement, de sa motricité, de ses déplacements, de ses communications, son langage, de sa socialisation et de son développement psycho-affectif et concernant les apprentissages scolaires.\r\n\r\nAu résultat du diagnostic, les parents sont demandeur d’information, d’aide et d’orientation afin de les accompagner dans l’éducation de leur enfant. \r\nPar les échanges entre professionnels et parents, par les collaborations entre professionnel ou autre structure dédier à l’accueil des petit de zéro à 6 ans.\r\nLe CAMSP répond à ce besoin.\r\nAu résultat du diagnostic, les parents sont demandeur d’information, d’aide et d’orientation afin de les accompagner dans l’éducation de leur enfant. \r\nPar les échanges entre professionnels et parents, par les collaborations entre professionnel ou autre structure dédier à l’accueil des petit de zéro à 6 ans.\r\nLe CAMPS répond à ce besoin.\r\n', NULL, 'Pict201916m1.jpg', NULL, NULL),
(3, NULL, 'camsp', 'Les missions du Centre d’Action Médico-Sociale Précoce pour Déficients Visuels\r\n\r\no	Dépistage et diagnostic précoce\r\no	Prévention ou réduction des handicaps\r\no	Suivi précoce des jeunes enfants\r\no	Accompagnement des familles\r\n Soutien et aide à l’adaptation de l’accueil social et scolaire\r\n', NULL, 'Pict201916m2.jpg', NULL, 'http://www.cra-rhone-alpes.org/spip.php?article3478');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_art`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_art` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
