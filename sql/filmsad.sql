-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 02 juin 2020 à 19:54
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
-- Structure de la table `filmsad`
--

CREATE TABLE `filmsad` (
  `filmsad_id` int(7) NOT NULL,
  `filmsad_title` varchar(100) DEFAULT NULL,
  `filmsad_director` varchar(100) DEFAULT NULL,
  `filmsad_kind` varchar(100) DEFAULT NULL,
  `filmsad_annee` int(4) DEFAULT NULL,
  `filmsad_duration` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `filmsad`
--

INSERT INTO `filmsad` (`filmsad_id`, `filmsad_title`, `filmsad_director`, `filmsad_kind`, `filmsad_annee`, `filmsad_duration`) VALUES
(1, 'A love you', 'PAUL LEFÈVRE', 'comedie', 2015, '1H30'),
(2, 'Adopte un veuf', 'François Desagnat', 'comedie', 2016, '1h37'),
(3, 'American Assassin', 'MICHAEL CUESTA', 'Action', 2017, '1h52'),
(4, 'Amour sur place ou à emporter', 'AMELLE CHAHBI', 'Passion', 2014, '1h25'),
(5, 'Au cœur du mensonge', 'Claude Chabrol', 'Policier', 1999, '1h53'),
(6, 'Bad samaritain', 'Dean Devlin', 'Suspense', 2018, '1h50'),
(7, 'Balade entre les tombes', 'Scott Frank', 'Suspense', 2014, '1h54'),
(8, 'Banzaï', 'Claude Zidi', 'Rires', 1982, '1h42'),
(9, 'Barbara', 'Mathieu Amalric', 'Passion', 2017, '1h37'),
(10, 'Belle et Sébastien 2', 'Christian Duguay', 'Jeunesse', 2015, '1h37'),
(11, 'Belle et Sébastien 3', 'Clovis Cornillac', 'Jeunesse', 2018, '1h30'),
(12, 'Black panther', 'Ryan Coogler', 'Action', 2018, '2h15'),
(13, 'Box 27', 'Arnaud Sélignac', 'Passion', 2015, '1h30'),
(14, 'Braqueurs', 'Julien Leclercq', 'Suspense', 2016, '1h21'),
(15, 'Brice 3', 'James Huth', 'Rires', 2016, '1h35'),
(16, 'Chocolat', 'Roschdy Zem', 'Histoire', 2016, '2016'),
(17, 'Comme un avion', 'Bruno Podalydès', 'Rires', 2015, '1h45'),
(18, 'Comme un chef', 'Daniel Cohen', 'Rires', 2012, '1h25'),
(19, 'Conte d’été', 'Eric Rohmer', 'Passion', 1996, '1h53'),
(20, 'Cro man', 'Nick Park', 'Animation', 2018, ' 1h29'),
(21, 'De toutes nos forces', 'Nils Tavernier', 'Passion', 2013, '1h29'),
(22, 'Descendants 2', 'Kenny Ortega', 'Jeunesse', 2017, ' 1h51'),
(23, 'Discount', 'Louis-Julien Petit', 'Passion', 2014, '1h45'),
(24, 'Elles…Les filles du Plessis', 'Bénédicte Delmas', 'Passion', 2015, '1h30'),
(25, 'En solitaire', 'Christophe Offenstein', 'Passion', 2013, '1h41'),
(26, 'Frères à demi', 'Stéphane Clavier', 'Rires', 2015, '1h30'),
(27, 'Hurricane', 'David Blair', 'Frisson', 2018, '1h47'),
(28, 'In the fade', 'Fatih Akın', 'Passion', 2017, '1h46'),
(29, 'John Wick', 'David Leitch, Chad Stahelski', 'Action', 2014, '1h41'),
(30, 'Keeper', 'Marcus H. Rosenmüller', 'Passion ', 2015, '2h00'),
(31, 'Knock', 'Lorraine Levy', 'Rires', 2017, '1h54'),
(32, 'L’échange des princesses', 'Marc Dugain', 'Histoire', 2017, '1h44'),
(33, 'L’économie du couple', 'Joachim Lafosse', 'Passion', 2016, '1h41'),
(34, 'L’élève Ducobu', 'Philippe de Chauveron', 'Rires', 2011, '1h36'),
(35, 'L’enfant de personne', 'Gan Chao', 'Passion ', 2013, ' 3h00'),
(36, 'L’homme qu’on aimait trop', 'André Téchiné', 'Passion', 2014, '1h56'),
(37, 'La belle et la belle', 'Bill Condon', 'comedie', 2018, '2h09'),
(38, 'La deuxième étoile', 'Lucien Jean-Baptiste', 'Rires', 2017, '1h35'),
(39, 'La douleur', ' Emmanuel Finkiel', 'drame', 2017, ' 2h06'),
(40, 'La jeune fille et les loups', 'Gilles Legrand', 'Action', 2008, '1h50'),
(41, 'La ligue des gentlemen extraordinaires', 'Stephen Norrington', 'Action', 2003, '1h50'),
(42, 'La liste de mes envies', 'Didier Le Pêcheur', 'Passion', 2014, '1h38'),
(43, 'La mélodie', 'Rachid Hami', 'Passion', 2017, '1h42'),
(44, 'La nuit au musée', 'Shawn Levy', 'Rires', 2007, '1h48'),
(45, 'Le boucher', 'Claude Chabrol', 'Passion', 1970, '1h30'),
(46, 'Le cinquième élément', 'Luc Besson', 'Science F.', 1997, ' 2h06'),
(47, 'Le crime était presque parfait', 'Alfred Hitchcock', 'Suspense', 1954, '1h45'),
(48, 'Le dernier loup', 'Jean-Jacques Annaud', 'Action ', 2015, '1h59'),
(49, 'Le grand méchant loup', 'Nicolas Charlet, Bruno Lavaine', 'Rires', 2013, '1h47'),
(50, 'Le papillon', 'Philippe Muyl', 'Passion', 2002, '1h25'),
(51, 'Le plus beau métier du monde', 'Gérard Lauzier', 'Rires', 1996, '1h45'),
(52, 'Le pont du diable', 'Sylvie Ayme', 'Suspense', 2018, '1h30'),
(53, 'Le retour du héros', 'Laurent Tirard', 'Rires', 2018, '1h30'),
(54, 'Le roi lion 2', 'Darrell Rooney, Rob LaDuca', 'Animation', 1998, '1h21'),
(55, 'Le voleur', 'Louis Malle', 'Passion', 1967, '2hO0 '),
(56, 'Les gamins', 'Anthony Marciano', 'Rires', 2013, '1h38 '),
(57, 'Les grands esprits ', 'Olivier Ayache-Vidal', 'Passion ', 2017, '1h46'),
(58, 'Les reines du ring', 'Jean-Marc Rudnick', 'Rires', 2013, '1h41'),
(59, 'Les tuches 3', 'Olivier Baroux', 'Rires', 2018, '1h32'),
(60, 'Les visiteurs en Amérique', 'Jean-marie Poiré', 'Rires', 2001, '1h35'),
(61, 'Loin de la foule déchainée', 'Thomas Vinterberg', 'Passion', 2015, '1h59 '),
(62, 'Low cost', 'Maurice Barthélémy', 'Rires', 2011, '1h29'),
(63, 'Malavita', 'Luc Besson', 'Rires', 2013, '1h52 '),
(64, 'Marche à l’ombre', 'Michel Blanc', 'Passion', 1984, '1h30'),
(65, 'Mary et la fleur de la sorcière', 'Hiromasa Yonebayashi', 'Animation', 2017, '1h43'),
(66, 'Meurtre dans le Morvan', 'Simon Astier', 'Suspense', 2018, '1h30'),
(67, 'Meurtres à l’abbaye de Rouen', 'Christian Bonnet', 'Suspense', 2013, 'N.C'),
(68, 'Meurtres à l’île d’Yeu', 'François Guérin ', 'Suspense', 2014, '1h30'),
(69, 'Meurtres en Martinique', 'Philippe Niang', 'Suspense', 2015, '1h30'),
(70, 'Mission impossible protocole fantôme ', 'Brad Bird', 'Action', 2011, '2h13'),
(71, 'Moka', 'Frédéric Mermoud', 'Suspense', 2016, '1h30'),
(72, 'My little pony', 'Jayson Thiessen', 'Animation', 2017, '1h39'),
(73, 'Normandie nue', 'Philippe Le Guay', 'Passion', 2018, ' 1h50'),
(74, 'Pauline à la plage', 'Eric Rohmer', 'Passion', 1983, '1h35'),
(75, 'Pièce montée', 'Denys Granier-Deferre', 'Passion', 2010, '1h33'),
(76, 'Qu’est-ce qu’on a fait au bon Dieu', 'Philippe de Chauveron', 'Rires', 2014, '1h37'),
(77, 'Radin', 'Fred Cavayé', 'Rires', 2016, ' 1h29'),
(78, 'Razzia', 'Nabil Ayouch', 'Passion', 2017, '1h59'),
(79, 'Rebelle', ' Mark Andrews, Brenda Chapman, Steve Purcell', 'Animation', 2012, '1h35'),
(80, 'Renaissances', 'Tarsem Singh', 'Science F.', 2015, '1h58'),
(81, 'Respire', 'Mélanie Laurent', 'drame', 2015, '1h32'),
(82, 'Situation amoureuse c’est compliqué', ' Manu Payet, Rodolphe Lauga', 'Passion', 2014, '1h38'),
(83, 'Sous les jupes des filles', 'Audrey Dana', 'Rires', 2014, '1h56'),
(84, 'Taxi 5', 'Franck Gastambide', 'Action', 2018, '1h42'),
(85, 'The Artist', 'Michel Hazanavicius', 'Passion', 2012, '1h40'),
(86, 'The passenger', 'Jaume Collet-Serra', 'Action', 2018, '1h44'),
(87, 'Transformers 2', 'Michael Bay', 'Action', 2009, '2h31'),
(88, 'Traque à Boston', 'Peter Berg', 'Suspense', 2016, '2h09'),
(89, 'Tuer un homme', 'Isabelle Czajka', 'Passion', 2016, ' 1h30'),
(90, 'Un homme à la hauteur', 'Laurent Tirard', 'Passion', 2016, '1h39'),
(91, 'Un mensonge oublié', 'Eric Duret', 'Suspense', 2017, '1h30'),
(92, 'Un secret', 'Claude Miller', 'Passion', 2007, '1h40'),
(93, 'Wind river', 'Taylor Sheridan', 'Passion', 2017, '1h47'),
(94, 'Zarafa', 'Rémi Bezançon, Jean-Christophe Lie', 'Animation', 2012, ' 1h18'),
(95, 'Zombillénium', 'Arthur de Pins, Alexis Ducord', 'Animation', 2017, ' 1h18');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `filmsad`
--
ALTER TABLE `filmsad`
  ADD PRIMARY KEY (`filmsad_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `filmsad`
--
ALTER TABLE `filmsad`
  MODIFY `filmsad_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
