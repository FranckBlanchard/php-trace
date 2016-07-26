/**
 * Author:  Franck Blanchard
 * Created: 26 juil. 2016
 */

-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 26 Juillet 2016 à 09:55
-- Version du serveur: 5.5.50-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `trace`
--

-- --------------------------------------------------------

--
-- Structure de la table `trace`
--

CREATE TABLE IF NOT EXISTS `trace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_msg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Date et heure de l''enregistrement',
  `type` varchar(20) NOT NULL DEFAULT 'divers' COMMENT 'Type de message',
  `msg` varchar(80) NOT NULL COMMENT 'Message',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;