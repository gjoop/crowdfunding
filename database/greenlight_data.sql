-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 27 Septembre 2016 à 08:39
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `greenlight_db`
--

--
-- Contenu de la table `association`
--

INSERT INTO `association` (`idAssociation`, `login`, `password`, `email`, `nomAssociation`, `address`, `website`, `phone`, `bankAccount`) VALUES
(1, 'testassociation', 'testassociation', 'test@test.org', 'testassociation', 'testassociation', 'www.test.org', '9379', '01234-56789-98765-43210'),
(2, 'UNC', 'unc', 'unc@univ-nc.nc', 'Université', 'test', NULL, 'test', 'test'),
(3, 'test', 'test', 'test@test.test', 'test', 'test', NULL, 'test', 'test');

--
-- Contenu de la table `donation`
--

INSERT INTO `donation` (`idDonation`, `idUser`, `idProjet`, `comment`, `montant`, `validé`, `date`) VALUES
(1, 7, 3, 'choch', 2500, 0, '2016-09-26 23:03:56'),
(2, 7, 3, 'test2', 2580, 0, '2016-09-26 23:04:50'),
(3, 7, 3, 'chdjsh', 25630, 0, '2016-09-26 23:18:11');

--
-- Contenu de la table `project`
--

INSERT INTO `project` (`idProjet`, `nom`, `idAssociation`, `description`, `medialink`, `creation`) VALUES
(1, 'test 1', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis est vel massa semper scelerisque vel in nisl. Mauris faucibus justo mi, quis volutpat libero feugiat a. Ut nec nulla eleifend, tincidunt ex quis, molestie leo.', NULL, '2016-09-26 17:24:37'),
(2, 'test 2', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis est vel massa semper scelerisque vel in nisl. Mauris faucibus justo mi, quis volutpat libero feugiat a. Ut nec nulla eleifend, tincidunt ex quis, molestie leo.', NULL, '2016-09-26 17:24:37'),
(3, 'test 3', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis est vel massa semper scelerisque vel in nisl. Mauris faucibus justo mi, quis volutpat libero feugiat a. Ut nec nulla eleifend, tincidunt ex quis, molestie leo.', NULL, '2016-09-26 17:25:18'),
(4, 'test 4', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis est vel massa semper scelerisque vel in nisl. Mauris faucibus justo mi, quis volutpat libero feugiat a. Ut nec nulla eleifend, tincidunt ex quis, molestie leo.', NULL, '2016-09-26 17:25:18');

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`idUser`, `login`, `password`, `email`, `nom`, `prenom`, `phone`, `address`, `birth`, `sex`, `bankAccount`) VALUES
(1, 'testuser', 'testuser', 'test@test.org', 'testuser', 'testuser', '9379', 'testuser', '2015-03-23', 'male', '01234-56789-98765-43210'),
(5, 'BigDaddy', 'larutanrepus', 'joop_guillaume@live.fr', 'Joop', 'Guillaume', '918840', 'test', '1994-06-06', 'male', 'test'),
(6, 'test', 'test', 'test@test.com', 'dupont', 'dupont', '25525', 'kj', '0000-00-00', 'unassigned', 'test'),
(7, 'Greg718', 'kinou1997', 'ripoll277@gmail.com', 'Ripoll', 'Gregory', '992705', '16 rue guy chapuis', '1997-02-13', 'male', '0202020135');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
