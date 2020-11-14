-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 14 nov. 2020 à 09:48
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fimf`
--

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `id_region` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`id`, `nom`, `id_region`) VALUES
(1, 'dakar', 'Dakar'),
(2, 'pikine', 'Dakar'),
(3, 'rufisque', 'Dakar'),
(4, 'guÃ©diawaye', 'Dakar'),
(5, 'Bignona', 'Ziguinchor'),
(6, 'Oussouye', 'Ziguinchor'),
(7, 'Ziguinchor', 'Ziguinchor'),
(8, 'Bambey', 'Diourbel'),
(9, 'Diourbel', 'Diourbel'),
(10, 'MbackÃ©', 'Diourbel'),
(11, 'Saint Louis', 'Saint Louis'),
(12, 'Podor', 'Saint Louis'),
(13, 'Dagana', 'Saint Louis'),
(14, 'Tambacounda', 'Tambacounda'),
(15, 'Tambacounda', 'Tambacounda'),
(16, 'Goudiry', 'Tambacounda'),
(17, 'Koumpentoum', 'Tambacounda'),
(18, 'Kaolack', 'Kaolack'),
(19, 'Nioro du rip', 'Kaolack'),
(20, 'GuinguinÃ©o', 'Kaolack'),
(21, 'Thies', 'Thies'),
(22, 'Mbour', 'Thies'),
(23, 'Tivaouane', 'Thies'),
(24, 'KÃ©bÃ©mer', 'Louga'),
(25, 'LinguÃ¨re', 'Louga'),
(26, 'Louga', 'Louga'),
(27, 'Fatick', 'Fatick'),
(28, 'Foundiougne', 'Fatick'),
(29, 'Gossas', 'Fatick'),
(30, 'Kolda', 'Kolda'),
(31, 'VÃ©lingara', 'Kolda'),
(32, 'MÃ©dina YÃ©ro Foulah', 'Kolda'),
(33, 'Kanel', 'Matam'),
(34, 'Matam', 'Matam'),
(35, 'RanÃ©rou', 'Matam'),
(36, 'Kaffrine', 'Kaffrine'),
(37, 'Birkelane', 'Kaffrine'),
(38, 'Koungheul', 'Kaffrine'),
(39, 'Malem-Hodar', 'Kaffrine'),
(40, 'KÃ©dougou', 'Kedougou'),
(41, 'Salemata', 'Kedougou'),
(42, 'Saraya', 'Kedougou'),
(43, 'SÃ©dhiou', 'Sedhiou'),
(44, 'Bounkiling', 'Sedhiou'),
(45, 'Goudomp', 'Sedhiou');

-- --------------------------------------------------------

--
-- Structure de la table `donnee`
--

DROP TABLE IF EXISTS `donnee`;
CREATE TABLE IF NOT EXISTS `donnee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(30) NOT NULL,
  `nom_develope` varchar(150) NOT NULL,
  `sigle` text NOT NULL,
  `tel` varchar(150) NOT NULL,
  `gerant` varchar(150) NOT NULL,
  `tel_pca` varchar(150) NOT NULL,
  `region` text NOT NULL,
  `departement` text NOT NULL,
  `type` text NOT NULL,
  `situation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `donnee`
--

INSERT INTO `donnee` (`id`, `numero`, `nom_develope`, `sigle`, `tel`, `gerant`, `tel_pca`, `region`, `departement`, `type`, `situation`) VALUES
(24, 'DKA-04-00364', 'MEC-Femme de la fÃ©dÃ©ration communale de bargny', 'MEC-FECOB', '786344527', 'moussa-ba-ba@gmail.com', 'salif-sy-sy@gmail.com', 'dakar', 'Rufusque', 'nom affilie', 'difficulte'),
(25, 'TC 3-03-00295', 'Mutuelle dâ€™epargne et de CrÃ©dit de lâ€™Association des PROducteurs de bananes de la VAllÃ©e du fleuve', 'MEC-APROVAG', 'Marcel Thiaw', 'Quartier abattoirs lot nÂ° 5 Tambacounda-33 981 50 62-33 981 50 62-mecaprovag@yahoo.fr', 'Diaw-77 52238 17', 'Tambacounda', 'Tambacounda', 'nom affilie', 'non definit');

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

DROP TABLE IF EXISTS `infos`;
CREATE TABLE IF NOT EXISTS `infos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intitule` text NOT NULL,
  `source` text NOT NULL,
  `dater` date NOT NULL,
  `fichier` varchar(255) NOT NULL,
  `id_donnee` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_donnee` (`id_donnee`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `infos`
--

INSERT INTO `infos` (`id`, `intitule`, `source`, `dater`, `fichier`, `id_donnee`) VALUES
(1, 'demande d accompagnement', 'FIMF', '2020-09-04', '780937943226424c93c2ccbe28ce7d0287806469', 'DK1-01-00242'),
(2, 'accusÃ© de reception', 'Microcred', '2020-09-05', 'cb8f981c8cc79220f29bc80cd8070214d9877aba', 'DK1-01-00242'),
(6, 'Plan d\'accompagnement', 'FIMF', '2017-01-15', '920bb60e373be211fa153b4fb9dcfd6e6c9f0637', 'MEC-FECOB'),
(7, 'Rapport de mission', 'FIMF', '2015-06-04', '9e50d45c92aa19a5a3da6ac41cba1ce876b0ae68', 'MEC-FECOB'),
(8, 'Plan d accompagnement', 'FIMF', '2015-01-20', '8e6de4aec075e5bac6bb2096b2cd2e1df108f1a8', 'MEC-APROVAG'),
(9, 'Rapport de mission', 'FIMF', '2015-10-10', 'f941b94df562d4d22f88cae7f82ed43f7241ebeb', 'MEC-APROVAG'),
(10, 'Plan d accompagnement', 'Microcred', '2020-09-19', '2adf3f9d575f2e28eb0096ee1bf7f0d0433401eb', 'MEC-APROVAG'),
(11, 'Rapport de mission', 'FIMF', '2020-09-23', 'c02d88bf078a66a7e041e8c449a1a43e16bc30ac', 'MEC-FECOB');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`id`, `nom`) VALUES
(1, 'Dakar'),
(3, 'thies'),
(4, 'saint louis'),
(5, 'matam'),
(6, 'fatick'),
(7, 'diourbel'),
(8, 'kaffrine'),
(9, 'kaolack'),
(10, 'Tambacounda'),
(11, 'kolda'),
(12, 'sedhiou'),
(13, 'ziguinchor'),
(14, 'kedougou'),
(15, 'louga');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `niveau` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `niveau`) VALUES
(2, 'gestionnaire', 'passer', 'moyen'),
(3, 'admin', 'passer', 'maximum'),
(6, 'oumar', 'passer', 'fort'),
(7, 'balde', 'passer', 'faible'),
(8, 'test', 'passer', 'faible');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
