-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 25 oct. 2024 à 14:03
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cooperative`
--

-- --------------------------------------------------------

--
-- Structure de la table `envoyer`
--

DROP TABLE IF EXISTS `envoyer`;
CREATE TABLE IF NOT EXISTS `envoyer` (
  `idenvoi` int NOT NULL,
  `idvoit` varchar(10) DEFAULT NULL,
  `colis` varchar(50) DEFAULT NULL,
  `nomEnvoyeur` varchar(100) DEFAULT NULL,
  `date_envoi` datetime DEFAULT NULL,
  `emailEnvoyeur` varchar(50) DEFAULT NULL,
  `frais` int DEFAULT NULL,
  `nomRecepteur` varchar(100) DEFAULT NULL,
  `contactRecepteur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idenvoi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `envoyer`
--

INSERT INTO `envoyer` (`idenvoi`, `idvoit`, `colis`, `nomEnvoyeur`, `date_envoi`, `emailEnvoyeur`, `frais`, `nomRecepteur`, `contactRecepteur`) VALUES
(1, 'V1', '2', '2', '0000-00-00 00:00:00', '2024-10-02T16:52:48', 550, 'Rabe', '0349761128'),
(2, 'V1', 'ss', 'Christophe', '0000-00-00 00:00:00', '2024-10-25T16:56:18', 50, 'Rabe', '0349761128');

-- --------------------------------------------------------

--
-- Structure de la table `intineraire`
--

DROP TABLE IF EXISTS `intineraire`;
CREATE TABLE IF NOT EXISTS `intineraire` (
  `codeit` varchar(50) NOT NULL,
  `villedep` varchar(100) DEFAULT NULL,
  `villearriv` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`codeit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `intineraire`
--

INSERT INTO `intineraire` (`codeit`, `villedep`, `villearriv`) VALUES
('I3', 'Fianaratsoa', 'Fort_daphin');

-- --------------------------------------------------------

--
-- Structure de la table `recevoir`
--

DROP TABLE IF EXISTS `recevoir`;
CREATE TABLE IF NOT EXISTS `recevoir` (
  `idrecept` int NOT NULL,
  `idenvoi` int DEFAULT NULL,
  `date_recept` datetime DEFAULT NULL,
  PRIMARY KEY (`idrecept`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `recevoir`
--

INSERT INTO `recevoir` (`idrecept`, `idenvoi`, `date_recept`) VALUES
(1, 1, '2024-10-25 16:59:47');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `idvoit` varchar(50) NOT NULL,
  `codeit` varchar(50) NOT NULL,
  `Design` varchar(100) DEFAULT NULL,
  `frais` int DEFAULT NULL,
  PRIMARY KEY (`idvoit`,`codeit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`idvoit`, `codeit`, `Design`, `frais`) VALUES
('V1', 'I3', 'Rouge', 50);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
