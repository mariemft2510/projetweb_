-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 14 avr. 2022 à 10:39
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mydb-web`
--

-- --------------------------------------------------------

--
-- Structure de la table `tablean`
--

CREATE TABLE `tablean` (
  `CodeAn` int(11) NOT NULL,
  `TypeAn` varchar(200) NOT NULL,
  `TitreAn` varchar(200) NOT NULL,
  `DateAn` date NOT NULL,
  `ContenueAn` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tablean`
--

INSERT INTO `tablean` (`CodeAn`, `TypeAn`, `TitreAn`, `DateAn`, `ContenueAn`) VALUES
(2, 'défilé', 'defile channel', '2022-04-20', 'nnnnnnnnnnnnnnnnhhhhhhhhhhhhfffffffffmmmmmmmmmmmmmmmyyyyyyyyyyyyyyttttttttttttnnnnnnnnnnssssssssssshhhhhhggggggggrrrrrrrrrrrrvvvvvvvvvvvvvvvaaaaaaaaaaaaaaa');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tablean`
--
ALTER TABLE `tablean`
  ADD PRIMARY KEY (`CodeAn`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tablean`
--
ALTER TABLE `tablean`
  MODIFY `CodeAn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
