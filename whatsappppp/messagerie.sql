-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 26 juil. 2022 à 12:42
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `messagerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `discussion`
--

DROP TABLE IF EXISTS `discussion`;
CREATE TABLE IF NOT EXISTS `discussion` (
  `discussion_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `creator_id` int(10) UNSIGNED NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`discussion_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `discussion_id` int(11) NOT NULL,
  `msg` varchar(300) NOT NULL,
  `send_date` datetime NOT NULL,
  `received_date` datetime NOT NULL,
  `read_date` datetime NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`message_id`, `author_id`, `discussion_id`, `msg`, `send_date`, `received_date`, `read_date`) VALUES
(4, 1, 1, 'pas cool', '2022-07-26 11:57:23', '2022-07-26 11:57:23', '2022-07-26 11:57:23'),
(3, 1, 1, 'cool', '2022-07-26 11:57:23', '2022-07-26 11:57:23', '2022-07-26 11:57:23');

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE IF NOT EXISTS `participants` (
  `user_id` int(11) NOT NULL,
  `discussion_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mail` varchar(80) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `pseudo` varchar(60) NOT NULL,
  `imageUrl` varchar(250) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `mail`, `pwd`, `pseudo`, `imageUrl`) VALUES
(33, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(32, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(31, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(30, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(34, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(35, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(36, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(37, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(38, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(39, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(40, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(41, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(42, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(43, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(44, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(45, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(46, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(47, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(48, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(49, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(50, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(51, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(52, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(53, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(54, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(55, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(56, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(57, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(58, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(59, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl'),
(60, 'test@mail.fr', 'testsecret', 'Test', 'TestUrl');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
