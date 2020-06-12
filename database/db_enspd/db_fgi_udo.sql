-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mer. 20 mai 2020 à 11:43
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db.fgi_udo`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poste` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `prenom`, `email`, `password`, `remember_token`, `poste`, `created_at`, `updated_at`) VALUES
(18, 'ANAFACK', 'Jordan', 'toto@fgi-udo.local', '$2y$10$LuEFIhOLTY69HY7OsbLDq.RzMH35HrE81/w29yHQRBch5RRBTsXc.', 'iQ22DQlWzWkoeR9wXGSZQgfxLSntuIzIFq7oX03iULiOLxu3fGWkQggQyz5A', 'cellule informatique', '2020-01-05 11:36:40', '2020-04-18 14:52:08'),
(17, 'admindef1', 'Jordan', 'admindef1@gmail.com', '$2y$10$irGKTCg4bjCieditpNkRBuYoCX8iT6hVF9jirTDYDt/BWQZMgGGPu', 'bn4ISnC81FGU4SiFIVD1qZu2h0EdNRcxuVLLdf0A91GI1M3qjV9T95duYKQA', 'cellule informatique', '2020-01-05 11:36:40', '2020-02-09 14:21:17');

-- --------------------------------------------------------

--
-- Structure de la table `admin_password_resets`
--

DROP TABLE IF EXISTS `admin_password_resets`;
CREATE TABLE IF NOT EXISTS `admin_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `admin_password_resets_email_index` (`email`),
  KEY `admin_password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admin_password_resets`
--

INSERT INTO `admin_password_resets` (`email`, `token`, `created_at`) VALUES
('anafackjordan@gmail.com', '$2y$10$XshfQtr7VWMpaHDPUaTi5O7s/3.Hu71RqVS0PLLYW1vHkidupHtBq', '2019-12-28 11:33:31'),
('admindef1@gmail.com', '$2y$10$iSBm7z9gsz1v0QcA3bfbEeXfDrHfNEe9hU8Ez4.msN.GhlvgMyFUS', '2020-04-10 19:26:03'),
('infosfgi-contact@fgi-udo.cm', '$2y$10$HbrpOp0394r8tmC/Sg.jle0Dh5C7zf8bbDdoSQTgHZVKBbaPSrpP.', '2020-04-10 19:36:58'),
('toto@fgi-udo.local', '$2y$10$HJV43HnCQHD.WWBT9Cedyu80dqmYaWwKq89PTTgN4Ia2Q4naX0.xy', '2020-04-18 19:57:26');

-- --------------------------------------------------------

--
-- Structure de la table `centredincubation`
--

DROP TABLE IF EXISTS `centredincubation`;
CREATE TABLE IF NOT EXISTS `centredincubation` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `citations`
--

DROP TABLE IF EXISTS `citations`;
CREATE TABLE IF NOT EXISTS `citations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nomAuteur` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionAuteur` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citationAuteur` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=200 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `citations`
--

INSERT INTO `citations` (`id`, `created_at`, `updated_at`, `nomAuteur`, `descriptionAuteur`, `citationAuteur`) VALUES
(135, NULL, NULL, 'Anafack Diderot1', '', 'Je suis une très belle citation  tu vous n\'etes pas ce qure vous penser que vous etes vou n\'est pas ce que les autres pense que vous etes mais qous etes ce qur vous penser que les autres pensent que vous etes1@blop.fr'),
(194, '2020-01-24 13:17:50', '2020-01-24 13:17:50', 'Jacques FAME NDONGO ', 'Professeur - Ministre de l’enseignement supérieur Chancelier des Ordres Académiques', 'Le Salon de l’orientation académique et professionnelle 2017, est le lieu de rencontre des décideurs du secteur éducatif, des chefs d’entreprises, des élèves, des étudiants, des diplômés, des demandeurs d’emploi et conseillers d’orientation, afin d’échanger sur les diverses préoccupations dans un environnement marqué par une pluralité, une complexité et une diversité de cultures qui constituent une richesse et un atout majeur pour la jeunesse camerounaise en quête d’emploi, de mieux-être et de mieux-vivre ».');

-- --------------------------------------------------------

--
-- Structure de la table `communiquer`
--

DROP TABLE IF EXISTS `communiquer`;
CREATE TABLE IF NOT EXISTS `communiquer` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contenuCom` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `destinataireCom` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `communiquer`
--

INSERT INTO `communiquer` (`id`, `created_at`, `updated_at`, `contenuCom`, `destinataireCom`) VALUES
(2, NULL, '2020-04-30 12:18:49', '<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#3498db\"><span style=\"font-size:22px\"><span style=\"font-family:Georgia,serif\">Info</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:20px\">Voici nom nouveau communiquer cher public&nbsp; derni&egrave;re mise a jour.</span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:right\"><span style=\"font-size:20px\">30/03/2020</span></p>', 'public'),
(3, NULL, '2020-04-30 12:18:23', '<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#3498db\"><span style=\"font-size:26px\"><span style=\"font-family:Georgia,serif\">Info</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:20px\"><span style=\"font-family:Times New Roman,Times,serif\">Voici nom nouveau communiquer cher etudiant&nbsp; derni&egrave;re mise a jour.</span></span></p>\r\n\r\n<p style=\"text-align:right\"><span style=\"font-size:20px\"><span style=\"font-family:Times New Roman,Times,serif\">30/04/2020</span></span></p>', 'etudiants');

-- --------------------------------------------------------

--
-- Structure de la table `concours`
--

DROP TABLE IF EXISTS `concours`;
CREATE TABLE IF NOT EXISTS `concours` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objet` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messageV` tinytext COLLATE utf8mb4_unicode_ci,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `created_at`, `updated_at`, `nom`, `objet`, `messageV`, `email`, `tel`) VALUES
(14, '2020-04-24 18:45:47', '2020-04-24 18:45:47', 'Aalkljljkl', 'lkjlk', 'jljlk', 'jordan@gmail.com', 'lkj');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ABBR` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomDept` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `infoDept` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `optionDept` text COLLATE utf8mb4_unicode_ci,
  `deboucheDept` text COLLATE utf8mb4_unicode_ci,
  `emploisDuTempsDept` text COLLATE utf8mb4_unicode_ci,
  `coursEnLigneDept` text COLLATE utf8mb4_unicode_ci,
  `contactDept` text COLLATE utf8mb4_unicode_ci,
  `media_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `id_responsable` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ABBR` (`ABBR`),
  UNIQUE KEY `id_responsable` (`id_responsable`),
  KEY `departement_media_id_foreign` (`media_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`id`, `created_at`, `updated_at`, `ABBR`, `nomDept`, `infoDept`, `description`, `optionDept`, `deboucheDept`, `emploisDuTempsDept`, `coursEnLigneDept`, `contactDept`, `media_id`, `id_responsable`) VALUES
(9, '2020-01-03 18:59:01', '2020-05-19 15:15:38', 'TTIC', 'Télécommunications et TIC.', 'Génie Informatique ; Télécommunications et Réseaux.', '<p><u>En&nbsp; cour d&#39;&eacute;dition﻿</u></p>\r\n\r\n<p>&nbsp;</p>', '<ol style=\"margin-left:24px; margin-right:0px\">\r\n	<li>T&eacute;l&eacute;communications et R&eacute;seaux</li>\r\n	<li>G&eacute;nie informatique</li>\r\n</ol>', '<ul style=\"list-style-type:none; margin-left:24px; margin-right:0px\">\r\n	<li>Administrateur R&eacute;seaux</li>\r\n	<li>T&eacute;l&eacute;d&eacute;tection / Satellite</li>\r\n	<li>Ing&eacute;nieur T&eacute;l&eacute;com / t&eacute;l&eacute;phonie mobile</li>\r\n</ul>', '<ul style=\"list-style-type:none; margin-left:24px; margin-right:0px\">\r\n	<li><strong>Niveau 1 &rarr;&nbsp;</strong>[semestre 1]&bull;[semestre 2]</li>\r\n	<li><strong>Niveau 2&nbsp;&rarr;&nbsp;</strong>[semestre 1]&bull;[semestre 2]</li>\r\n	<li><strong>Niveau 3&nbsp;&rarr;&nbsp;</strong>[semestre 1]&bull;[semestre 2]</li>\r\n	<li><strong>Niveau 4&nbsp;&rarr;&nbsp;</strong>[semestre 1]&bull;[semestre 2]</li>\r\n	<li><strong>Niveau 5&nbsp;&rarr;&nbsp;</strong>[semestre 1]&bull;[semestre 2]</li>\r\n</ul>', '<p style=\"margin-left:0px; margin-right:0px\">Tronc Commun (TCo)&rarr; [<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/130-bienvenue-au-departemnt-ttic#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 1</a>]&bull;[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/130-bienvenue-au-departemnt-ttic#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 2</a>]&bull;[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/130-bienvenue-au-departemnt-ttic#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a>]</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/130-bienvenue-au-departemnt-ttic#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/130-bienvenue-au-departemnt-ttic#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 4</a></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/130-bienvenue-au-departemnt-ttic#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 5</a></p>', '<p style=\"margin-left:0px; margin-right:0px\"><strong>&nbsp;</strong>[Portes 1SP3 - 3SP3 - 15BP3]</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">e-mail : test2@fgi-udo.cm</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Tel. : ....?</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>', 9, 19),
(13, '2020-01-03 18:59:01', '2020-04-28 11:18:47', 'TAU', 'Technologie Automobile', 'Design et Construction des Systèmes Automobiles ; Moteurs et Transmission de Puissance ; Mécatronique.', '<p>En cours</p>', '<ol style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-position: inside; font-family: \"Century Gothic\", Arial, \"Arial Unicode MS\", Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px; color: rgb(20, 20, 20); overflow: visible;\">Design etconstruction des systèmes automobiles</li><li style=\"margin: 0px; padding: 0px; color: rgb(20, 20, 20); overflow: visible;\">Moteur et transmission</li><li style=\"margin: 0px; padding: 0px; color: rgb(20, 20, 20); overflow: visible;\">Mécatronique</li></ol>', '<p style=\"margin: 0px; padding: 0px 0px 0px 11px; overflow: visible hidden;\"><span style=\"background-color: rgb(181, 214, 165);\">Manager des projets en TA</span></p><p style=\"margin: 0px; padding: 0px 0px 0px 11px; overflow: visible hidden;\">Expertise automobile</p><p style=\"margin: 0px; padding: 0px 0px 0px 11px; overflow: visible hidden;\">       <span style=\"background-color: rgb(181, 214, 165);\">Designer/Fabricant</span></p><p style=\"margin: 0px; padding: 0px 0px 0px 11px; overflow: visible hidden;\">       <span style=\"background-color: rgb(181, 214, 165);\">Carrosserie/Peintre</span></p><p style=\"margin: 0px; padding: 0px 0px 0px 11px; overflow: visible hidden;\">       <span style=\"background-color: rgb(181, 214, 165);\">Web-Dlag/OBD</span></p>', '<ul style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-type: none; font-family: \"Century Gothic\", Arial, \"Arial Unicode MS\", Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 1 → </strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 2 → </strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 3 → </strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 4 → </strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 5 → </strong>[semestre 1]•[semestre 2]</li></ul>', '<p style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Tronc Commun (TCo)→ [<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/134-bienvenue-au-departement-tau#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 1</a>]•[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/134-bienvenue-au-departement-tau#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 2</a>]•[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/134-bienvenue-au-departement-tau#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a>]</p><p style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/134-bienvenue-au-departement-tau#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a></p><p style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/134-bienvenue-au-departement-tau#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 4</a></p><p style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/134-bienvenue-au-departement-tau#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 5</a></p>', 'En cours', 44, 24),
(15, '2020-01-22 17:28:32', '2020-05-09 14:53:10', 'GCI', 'Génie Civil', 'Construction Civile et Industrielle et Voies et Ouvrages d’Art.', '<p><span style=\"color:#2ecc71\">En cour d&#39;&eacute;dition</span></p>', '<ol style=\"margin-left:24px; margin-right:0px\">\r\n	<li>Construction civile</li>\r\n	<li>Voies et ouvrages d&#39;art</li>\r\n</ol>', '<ul>\r\n	<li>Contr&ocirc;leur technique</li>\r\n	<li>G&eacute;otechnicien</li>\r\n	<li>Constructeurs des &eacute;difices</li>\r\n	<li>Cadre de bureau d&#39;&eacute;tudes conception</li>\r\n	<li>Formulaire des b&eacute;tons</li>\r\n</ul>', '<ul>\r\n	<li><strong>Niveau 1 &rarr;&nbsp;</strong>[semestre 1]&bull;[semestre 2]</li>\r\n	<li><strong>Niveau 2&nbsp;&rarr;&nbsp;</strong>[semestre 1]&bull;[semestre 2]</li>\r\n	<li><strong>Niveau 3&nbsp;&rarr;&nbsp;</strong>[semestre 1]&bull;[semestre 2]</li>\r\n	<li><strong>Niveau 4&nbsp;&rarr;&nbsp;</strong>[semestre 1]&bull;[semestre 2]</li>\r\n	<li><strong>Niveau 5&nbsp;&rarr;&nbsp;</strong>[semestre 1]&bull;[semestre 2]</li>\r\n</ul>', '<ul>\r\n	<li>Tronc Commun (TCo)&rarr; [<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/132-bienvenue-au-departemnt-gci#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 1</a>]&bull;[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/132-bienvenue-au-departemnt-gci#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 2</a>]&bull;[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/132-bienvenue-au-departemnt-gci#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a>]</li>\r\n	<li><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/132-bienvenue-au-departemnt-gci#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a></li>\r\n	<li><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/132-bienvenue-au-departemnt-gci#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 4</a></li>\r\n	<li><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/132-bienvenue-au-departemnt-gci#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 5</a></li>\r\n</ul>', '<ul>\r\n	<li>[Portes 10BP3 - 4BP3 - 6BP3]</li>\r\n	<li>e-mail :&nbsp;</li>\r\n	<li>Tel. :&nbsp;</li>\r\n</ul>', 51, 20),
(16, '2020-01-22 17:33:34', '2020-04-30 13:17:10', 'GCH', 'Génie Chimique', 'Industries Chimiques.', '<p><span style=\"color:#1abc9c\">En cour d&#39;&eacute;dition</span></p>', '<p><span style=\"color:#141414\">Industries chimiques</span></p>', '<ol>\r\n	<li><span style=\"font-family:Verdana\">Ing&eacute;nieur production-exploitation</span></li>\r\n	<li><span style=\"font-family:Verdana\">Ing&eacute;nieur d&#39;&eacute;tudes et de gestion de projets industriels</span></li>\r\n	<li><span style=\"font-family:Verdana\">Responsable laboratoire</span></li>\r\n	<li><span style=\"font-family:Verdana\">Ing&eacute;nieur technico-commercial</span></li>\r\n</ol>', '<ul>\r\n	<li><strong>Niveau 1 &rarr;&nbsp;[semestre 1]&bull;[semestre 2]</strong></li>\r\n	<li><strong>Niveau 2&nbsp;&rarr;&nbsp;[semestre 1]&bull;[semestre 2]</strong></li>\r\n	<li><strong>Niveau 3&nbsp;&rarr;&nbsp;[semestre 1]&bull;[semestre 2]</strong></li>\r\n	<li><strong>Niveau 4&nbsp;&rarr;&nbsp;[semestre 1]&bull;[semestre 2]</strong></li>\r\n	<li><strong>Niveau 5&nbsp;&rarr;&nbsp;[semestre 1]&bull;[semestre 2]</strong></li>\r\n</ul>', '<ul>\r\n	<li><strong>Tronc Commun (TCo)&rarr; [<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/127-bienvenue-au-departement-gch#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 1</a>]&bull;[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/127-bienvenue-au-departement-gch#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 2</a>]&bull;[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/127-bienvenue-au-departement-gch#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a>]</strong></li>\r\n	<li><strong><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/127-bienvenue-au-departement-gch#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a></strong></li>\r\n	<li><strong><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/127-bienvenue-au-departement-gch#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 4</a></strong></li>\r\n	<li><strong><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/127-bienvenue-au-departement-gch#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 5</a></strong></li>\r\n</ul>', '<ol>\r\n	<li><em>[- - -]</em></li>\r\n	<li><em>e-mail :&nbsp;</em></li>\r\n	<li><em>Tel. :&nbsp;</em></li>\r\n</ol>', 46, 21),
(18, '2020-01-22 17:41:40', '2020-01-22 19:01:32', 'TCI', 'Technologie de Construction Industrielle', 'Construction Mécanique et Production Industrielle.', 'En cour d\'édition', '<ol style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-position: inside; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px; color: rgb(20, 20, 20); overflow: visible;\">Construction mécanique</li><li style=\"margin: 0px; padding: 0px; color: rgb(20, 20, 20); overflow: visible;\">Production industrielle</li></ol>', '<ul style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-type: none; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Manager de projets</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Contrôleur Qualité</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Designer/Maneger de la production</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Concepteur/Constructeur de machines industrielles</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Maintenanciers des équipements industriels</li></ul><p style=\"margin: 12px 0px; padding: 0px; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><br></p>', '<ul style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-type: none; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 1 →&nbsp;</strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 2&nbsp;→&nbsp;</strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 3&nbsp;→&nbsp;</strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 4&nbsp;→&nbsp;</strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 5&nbsp;→&nbsp;</strong>[semestre 1]•[semestre 2]</li></ul>', '<ul style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-type: none; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Tronc Commun (TCo)→ [<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/131-bienvenue-au-departemnt-tci#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 1</a>]•[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/131-bienvenue-au-departemnt-tci#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 2</a>]•[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/131-bienvenue-au-departemnt-tci#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a>]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/131-bienvenue-au-departemnt-tci#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a></li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/131-bienvenue-au-departemnt-tci#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 4</a></li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/131-bienvenue-au-departemnt-tci#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 5</a></li></ul>', '<p style=\"margin: 12px 0px; padding: 0px; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><strong>&nbsp;</strong>[Portes 20BP3 - 4BP3 - 5BP3]</p><p style=\"margin: 12px 0px; padding: 0px; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\">e-mail :&nbsp;</p><p style=\"margin: 12px 0px; padding: 0px; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\">Tel. :&nbsp;</p>', 52, 22),
(19, '2020-01-22 17:42:52', '2020-01-22 19:08:00', 'GPR', 'Génie des Procédés', 'Procédés des Industries agro-alimentaires et des Industries d’extraction et de Transformation.', 'En cour d\'édition', '<ol style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-position: inside; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px; color: rgb(20, 20, 20); overflow: visible;\">Procédés des industries agro-alimentaires</li><li style=\"margin: 0px; padding: 0px; color: rgb(20, 20, 20); overflow: visible;\">Procédés des industries d\'extraction et de transformation</li></ol>', '<ul style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-type: none; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Ingénieur production-exploitation</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Ingénieur d\'étude et de gestion de projets industriels</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Ingénieur technico-commercial</li></ul>', '<ul style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-type: none; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 1 →&nbsp;</strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 2&nbsp;→&nbsp;</strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 3&nbsp;→&nbsp;</strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 4&nbsp;→&nbsp;</strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 5&nbsp;→&nbsp;</strong>[semestre 1]•[semestre 2]</li></ul>', '<ul style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-type: none; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Tronc Commun (TCo)→ [<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/136-bienvenue-au-departement-gpr#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 1</a>]•[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/136-bienvenue-au-departement-gpr#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 2</a>]•[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/136-bienvenue-au-departement-gpr#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a>]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/136-bienvenue-au-departement-gpr#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a></li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/136-bienvenue-au-departement-gpr#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 4</a></li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/136-bienvenue-au-departement-gpr#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 5</a></li></ul>', '<p style=\"margin: 12px 0px; padding: 0px; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\">[Portes - - -]</p><p style=\"margin: 12px 0px; padding: 0px; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\">e-mail :&nbsp;</p><p style=\"margin: 12px 0px; padding: 0px; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\">Tel. :&nbsp;</p>', 47, 23),
(20, '2020-01-22 17:49:18', '2020-01-22 19:12:48', 'ROI', 'Robotique Industrielle', 'Automatisation et Contrôle des Systèmes Industriels ; Ingénierie Électrique et Électromécanique ; Systèmes Intelligents, Vision et Robotique.', 'En cour d\'édition', '<ol style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-position: inside; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px; color: rgb(20, 20, 20); overflow: visible;\">Ingénierie électrique et lectromécanique</li><li style=\"margin: 0px; padding: 0px; color: rgb(20, 20, 20); overflow: visible;\">Automatisation et contrôle des systèmes industriels</li><li style=\"margin: 0px; padding: 0px; color: rgb(20, 20, 20); overflow: visible;\">Systèmes intelligents, vision et robotique</li></ol>', '<ul style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-type: none; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Développeur et réalisation des systèmes ébergétiques</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Pivot central des industriels</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Spécialiste en mesure de haute précision</li><li></li></ul>', '<ul style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-type: none; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 1 →&nbsp;</strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 2&nbsp;→&nbsp;</strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 3&nbsp;→&nbsp;</strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 4&nbsp;→&nbsp;</strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 5&nbsp;→&nbsp;</strong>[semestre 1]•[semestre 2]</li></ul>', '<ul style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-type: none; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Tronc Commun (TCo)→ [<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/135-bienvenue-au-departement-roi#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 1</a>]•[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/135-bienvenue-au-departement-roi#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 2</a>]•[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/135-bienvenue-au-departement-roi#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a>]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/135-bienvenue-au-departement-roi#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a></li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/135-bienvenue-au-departement-roi#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 4</a></li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/135-bienvenue-au-departement-roi#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 5</a></li></ul>', '<p style=\"margin: 12px 0px; padding: 0px; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><strong>&nbsp;</strong>[Portes 14BP3 - 2SP3 - 3SP3]</p><p style=\"margin: 12px 0px; padding: 0px; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\">e-mail :&nbsp;</p><p style=\"margin: 12px 0px; padding: 0px; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\">Tel. :&nbsp;</p>', 48, 25),
(22, '2020-01-22 17:52:56', '2020-05-01 13:27:21', 'PGM', 'Pêche et Génie Maritime', 'Construction Navale et Génie Mécanique Navale.', '<p>En cour d&#39;&eacute;dition</p>', '<ol style=\"margin-left:24px; margin-right:0px\">\r\n	<li>Construction navale</li>\r\n	<li>G&eacute;nie m&eacute;canique</li>\r\n</ol>', '<ul style=\"list-style-type:none; margin-left:24px; margin-right:0px\">\r\n	<li>Chantier naval</li>\r\n	<li>Organisations sous-r&eacute;gionales et internationales</li>\r\n	<li>Armatures de p&ecirc;che</li>\r\n	<li>Auto-emploi</li>\r\n	<li>Marine nationale/marchande</li>\r\n	<li>MINEPIA</li>\r\n</ul>', '<ul style=\"list-style-type:none; margin-left:24px; margin-right:0px\">\r\n	<li><strong>Niveau 1 &rarr;&nbsp;</strong>[semestre 1]&bull;[semestre 2]</li>\r\n	<li><strong>Niveau 2&nbsp;&rarr;&nbsp;</strong>[semestre 1]&bull;[semestre 2]</li>\r\n	<li><strong>Niveau 3&nbsp;&rarr;&nbsp;</strong>[semestre 1]&bull;[semestre 2]</li>\r\n	<li><strong>Niveau 4&nbsp;&rarr;&nbsp;</strong>[semestre 1]&bull;[semestre 2]</li>\r\n	<li><strong>Niveau 5&nbsp;&rarr;&nbsp;</strong>[semestre 1]&bull;[semestre 2]</li>\r\n</ul>', '<ul style=\"list-style-type:none; margin-left:24px; margin-right:0px\">\r\n	<li>Tronc Commun (TCo)&rarr; [<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/133-bienvenue-au-departement-pgm#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 1</a>]&bull;[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/133-bienvenue-au-departement-pgm#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 2</a>]&bull;[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/133-bienvenue-au-departement-pgm#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a>]</li>\r\n	<li><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/133-bienvenue-au-departement-pgm#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a></li>\r\n	<li><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/133-bienvenue-au-departement-pgm#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 4</a></li>\r\n	<li><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/133-bienvenue-au-departement-pgm#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 5</a></li>\r\n</ul>', '<p style=\"margin-left:0px; margin-right:0px\"><strong>&nbsp;</strong>[Portes 17BP3 - 10BP3 - 11BP3]</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">e-mail :&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Tel. :&nbsp;</p>', 49, 26),
(23, '2020-01-22 17:54:35', '2020-01-22 19:19:07', 'HSSI', 'Hygiène-Sécurité et Sûreté Industrielle', 'Hygiène Industrielle, Sécurité et Sureté Industrielle, Environnement Industriel, Qualité et Normalisation.', 'En cor d\'édition', '<ol style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-position: inside; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px; color: rgb(20, 20, 20); overflow: visible;\">Hygiène industrielle</li><li style=\"margin: 0px; padding: 0px; color: rgb(20, 20, 20); overflow: visible;\">Sécurité et sûreté industrielle</li><li style=\"margin: 0px; padding: 0px; color: rgb(20, 20, 20); overflow: visible;\">Environnement industriel</li><li style=\"margin: 0px; padding: 0px; color: rgb(20, 20, 20); overflow: visible;\">Qualité et normalisation</li></ol>', '<p style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Ergonomiste responsable QHSE</p><p style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Responsable sécurité / Gestionnaire des risques</p><p style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Cadre de cabinet d\'audit et EIE</p><p style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Spécialiste en protection de l\'environnement et eco-designer</p>', '<ul style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-type: none; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 1 →&nbsp;</strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 2&nbsp;→&nbsp;</strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 3&nbsp;→&nbsp;</strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 4&nbsp;→&nbsp;</strong>[semestre 1]•[semestre 2]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><strong>Niveau 5&nbsp;→&nbsp;</strong>[semestre 1]•[semestre 2]</li></ul>', '<ul style=\"margin: 1em 0px 1em 24px; padding: 0px; list-style-type: none; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\">Tronc Commun (TCo)→ [<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/129-bienvenue-au-departement-hssi#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 1</a>]•[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/129-bienvenue-au-departement-hssi#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 2</a>]•[<a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/129-bienvenue-au-departement-hssi#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a>]</li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/129-bienvenue-au-departement-hssi#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 3</a></li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/129-bienvenue-au-departement-hssi#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 4</a></li><li style=\"margin: 0px; padding: 0px 0px 0px 11px; color: rgb(20, 20, 20); overflow: visible hidden;\"><a href=\"http://fgi-udo.cm/index.php/2017-10-13-19-09-00/ct-menu-item-3/148-infos-departements/129-bienvenue-au-departement-hssi#\" style=\"margin: 0px; padding: 0px; text-decoration-line: underline; color: rgb(128, 128, 128);\">Niveau 5</a></li></ul>', '<p style=\"margin: 12px 0px; padding: 0px; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\"><strong>&nbsp;</strong>[Portes 9BP3 - 10BP3 - 16BP3]</p><p style=\"margin: 12px 0px; padding: 0px; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\">e-mail :&nbsp;</p><p style=\"margin: 12px 0px; padding: 0px; font-family: &quot;Century Gothic&quot;, Arial, &quot;Arial Unicode MS&quot;, Helvetica, sans-serif; font-size: 12px; background-color: rgba(255, 255, 255, 0.5);\">Tel. :&nbsp;</p>', 45, 27);

-- --------------------------------------------------------

--
-- Structure de la table `dossiers`
--

DROP TABLE IF EXISTS `dossiers`;
CREATE TABLE IF NOT EXISTS `dossiers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nomDOC` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numBCA` int(11) NOT NULL,
  `date_intr` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `infosActu` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etape` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observations` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `dossiers`
--

INSERT INTO `dossiers` (`id`, `created_at`, `updated_at`, `nomDOC`, `numBCA`, `date_intr`, `infosActu`, `etape`, `observations`) VALUES
(1, '2020-02-26 22:29:37', '2020-04-10 10:02:19', 'Tradex', 2222, '02/22/2019', 'Au bon soin du propriétaire', '10/14', 'Situation normale'),
(2, '2020-03-20 14:55:08', '2020-03-20 14:55:08', 'SOPECAM', 14, '23/02/2020', 'Au bon soin du propriétaire', '4/14', 'Situation normale');

-- --------------------------------------------------------

--
-- Structure de la table `doyens`
--

DROP TABLE IF EXISTS `doyens`;
CREATE TABLE IF NOT EXISTS `doyens` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poste` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `doyens_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doyen_password_resets`
--

DROP TABLE IF EXISTS `doyen_password_resets`;
CREATE TABLE IF NOT EXISTS `doyen_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `doyen_password_resets_email_index` (`email`),
  KEY `doyen_password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formationsdoctorale`
--

DROP TABLE IF EXISTS `formationsdoctorale`;
CREATE TABLE IF NOT EXISTS `formationsdoctorale` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `formationsdoctorale`
--

INSERT INTO `formationsdoctorale` (`id`, `created_at`, `updated_at`, `titre`, `contenu`) VALUES
(1, '2020-03-27 23:00:00', '2020-05-07 12:25:41', 'Unité de Formation Doctorale de la Faculté de Génie Industriel', '<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><span style=\"font-family:Times New Roman,Times,serif\"><strong>&nbsp; &nbsp; </strong><span style=\"font-size:16px\"><strong>&nbsp;L&#39;admission</strong>&nbsp; aux formations doctorales de la Facult&eacute; de G&eacute;nire Industriel se fait sur&nbsp;analyse de dossier.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:16px\">Fichie&nbsp;&agrave; retirer au d&eacute;canat ou &agrave; t&eacute;l&eacute;charger&nbsp;</span></span></span></span><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">du Site web&nbsp;:&nbsp;<a href=\"www.fgi-ud.org\">www.fgi-ud.org</a></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#2980b9\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"font-size:20px\">Objectifs de la formation</span>&nbsp; &nbsp; &nbsp;</span></strong></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\"><strong>&diams;&nbsp;Donner aux apprenants des connaissances scientifiques et technologiques de haut niveau dans leurs domaines de sp&eacute;cialisation faisant d&rsquo;eux des experts de haut niveau pouvant innover dans l&rsquo;industrie,</strong></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\"><strong>&diams;&nbsp; Former les apprenants aux techniques d&rsquo;exp&eacute;rimentation,</strong></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\"><strong>&diams;&nbsp; Former les apprenants aux techniques d&rsquo;analyse et de simulation des ph&eacute;nom&egrave;nes physiques.</strong></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\">&nbsp;<span style=\"color:#3498db\"> &nbsp; &nbsp;<span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">La dur&eacute;e des etude est de&nbsp;</span></span></span></span><span style=\"color:#3498db\"><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">3 ans minimum, 4 ans maximum.</span></span></span><span style=\"font-size:18px\">&nbsp; &nbsp;</span></strong></span></span></p>');

-- --------------------------------------------------------

--
-- Structure de la table `formenseigchoixbref`
--

DROP TABLE IF EXISTS `formenseigchoixbref`;
CREATE TABLE IF NOT EXISTS `formenseigchoixbref` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titreFECB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenuFECB` text COLLATE utf8mb4_unicode_ci,
  `media_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `codeFECB` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codeFECB` (`codeFECB`),
  KEY `formenseigchoixbref_media_id_foreign` (`media_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `formenseigchoixbref`
--

INSERT INTO `formenseigchoixbref` (`id`, `created_at`, `updated_at`, `titreFECB`, `contenuFECB`, `media_id`, `codeFECB`) VALUES
(2, '2020-01-23 11:23:20', '2020-04-09 20:24:01', 'LES ENSEIGNEMENTS EN FGI', '<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">Les enseignements sont regroup&eacute;s en Unit&eacute;s d&rsquo;Enseignement (UE) Obligatoires, Optionnelles et Libres. Ils offrent ainsi aux &eacute;tudiants un &eacute;ventail plus large de profils (ou axes de sp&eacute;cialisations) qui r&eacute;pondent aux besoins des milieux socioprofessionnels.</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">Les &eacute;tudes &agrave; la Facult&eacute; de G&eacute;nie Industriel r&eacute;pondent aux exigences du syst&egrave;me LMD, qui est une r&eacute;forme universitaire &agrave; l&rsquo;&eacute;chelle internationale, reposant sur une nouvelle architecture de formation en trois cursus connus sous l&rsquo;appellation de cycles <em><span style=\"color:#2ecc71\"><strong>Licence, Master et Doctora</strong>t.</span></em></span></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"color:#f39c12\"><span style=\"font-family:Times New Roman,Times,serif\">►&nbsp;<strong>Cycle Licence (BAC+3)</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">La dur&eacute;e de la formation est de 03 ans r&eacute;partie sur 06 semestres dont 04 semestres de cours en tronc commun et 02 semestres de pr&eacute;paration &agrave; la sp&eacute;cialisation. Un stage ouvrier est obligatoire et l&rsquo;&eacute;tudiant doit avoir capitalis&eacute; les 180 cr&eacute;dits allou&eacute;s &agrave; ce cycle pour pr&eacute;tendre &agrave; une Attestation de Licence en Sciences et Technologies lui permettant de continuer au cycle d&rsquo;Ing&eacute;nieur.</span></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"color:#f39c12\"><span style=\"font-family:Times New Roman,Times,serif\">►&nbsp;<strong>Cycle Master (BAC +5)</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">La dur&eacute;e de la formation est de 02 ans apr&egrave;s le cycle L et repartie sur 04 semestres. Un stage professionnel et la soutenance publique d&rsquo;un Projet de Fin d&rsquo;Etudes (PFE) sont obligatoires et l&rsquo;&eacute;tudiant doit avoir capitalis&eacute; les 120 cr&eacute;dits allou&eacute;s &agrave; ce cycle pour pr&eacute;tendre au dipl&ocirc;me d&rsquo;Ing&eacute;nieur de la Facult&eacute; de G&eacute;nie Industriel dans la sp&eacute;cialit&eacute; choisie.</span></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"color:#f39c12\"><span style=\"font-family:Times New Roman,Times,serif\">►&nbsp;<strong>Cycle Doctorat (BAC +8)</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">La dur&eacute;e de la formation est de 03 ans apr&egrave;s le cycle M et repartie sur 06 semestres au sein de l&rsquo;Unit&eacute; de Formation Doctorale (UFD) des Sciences de l&rsquo;Ing&eacute;nieur. L&rsquo;&eacute;tudiant choisit un axe de recherche dans le laboratoire E3M, et doit avoir capitalis&eacute; les 180 cr&eacute;dits allou&eacute;s &agrave; ce cycle pour pr&eacute;tendre au dipl&ocirc;me de Doctorat/PhD en sciences de l&rsquo;ing&eacute;nieur dans le domaine de recherche choisi.</span></span></p>', 22, 'EnsFGI'),
(3, '2020-01-23 11:51:18', '2020-05-01 11:22:41', 'LA FACULTÉ DE GÉNIE INDUSTRIEL (FGI) BREF RESUME', '<p><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">La Facult&eacute; de G&eacute;nie Industriel (<span style=\"color:#3498db\">FGI</span>) forme des Ing&eacute;nieurs dans les domaines des Sciences, des Technologies et Techniques, conform&eacute;ment au syst&egrave;me LMD.&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">La FGI d&eacute;livre les dipl&ocirc;mes d&rsquo;Ing&eacute;nieur (<strong>BAC+5</strong>) et de Doctorat/PhD (<strong>BAC+8</strong>) en <strong>Sciences de l&rsquo;Ing&eacute;nieur</strong> dans les fili&egrave;res suivantes :&nbsp;</span></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Technologie de Construction Industrielle (TCI) ;</span></strong></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Technologie Automobile (TAU) ;</span></strong></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Robotique Industrielle (ROI) ;</span></strong></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><strong><span style=\"font-family:Times New Roman,Times,serif\">P&ecirc;che Industrielle/G&eacute;nie Maritime (PGM) .</span></strong></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;<span style=\"font-size:16px\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Hygi&egrave;ne-S&eacute;curit&eacute; et S&ucirc;ret&eacute; Industrielle (HSSI) ;</span></strong></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;<span style=\"font-size:16px\"><strong><span style=\"font-family:Times New Roman,Times,serif\">G&eacute;nie Civil (GCI) ;</span></strong></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><strong><span style=\"font-family:Times New Roman,Times,serif\">T&eacute;l&eacute;communications et Technologie de l&rsquo;Information et de la Communication (TTIC) ;</span></strong><span style=\"font-family:Times New Roman,Times,serif\">s de</span></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><strong><span style=\"font-family:Times New Roman,Times,serif\">G&eacute;nie Chimique (GCH) ;</span></strong></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><strong><span style=\"font-family:Times New Roman,Times,serif\">G&eacute;nie des Proc&eacute;d&eacute;s (GPR).</span></strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">Les enseignements sont organis&eacute;s par semestres et regroup&eacute;s en Unit&eacute;s d&rsquo;Enseignement (<em>UE</em>)obligatoires, optionnelles et Libres. Ils offrent ainsi aux &eacute;tudiants un &eacute;ventail plus large de profils (ou axe sp&eacute;cialisations) qui r&eacute;pondent aux besoins des milieux socioprofessionnels.&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">La FGI est log&eacute;e au<span style=\"color:#3498db\"> <strong>Campus de PK17</strong></span>, en p&eacute;riph&eacute;rie de la ville de la ville de Douala, et b&acirc;ti sur un site de plusieurs hectares comprenant :</span></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">Un amphith&eacute;&acirc;tre de 1200 places ;</span></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">Deux b&acirc;timents p&eacute;dagogiques abritant des laboratoires et une cinquantaine de salles de cours &agrave; la pointe de la technologie.</span></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">Un b&acirc;timent administratif ;</span></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">Sept ateliers b&acirc;tis sur une superficie de 800 m2 au sol chacun ;</span></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">Un laboratoire informatique ;</span></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">Une m&eacute;diath&egrave;que avec connexion intranet donnant acc&egrave;s &agrave; plus de 15 000 ouvrages sp&eacute;cialis&eacute;s en Ing&eacute;nierie et plusieurs revues ;</span></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">Un parking pouvant abriter plus de 500 v&eacute;hicules ;</span></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">Un minibus de 30 places pour les visites d&rsquo;entreprises ;</span></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">Plusieurs conventions nationales et internationales ;</span></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">Le Campus est arros&eacute; par le wifi ;</span></span></p>\r\n\r\n<p style=\"margin-left:40px\">&diams;&nbsp;&nbsp;<strong><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">Etc.</span></span></strong></p>', 24, 'BrefFGI'),
(4, '2020-01-23 11:53:24', '2020-03-02 20:20:35', 'LA FGI : UN CHOIX RESPONSABLE', '<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Le Cameroun ambitionne d&rsquo;&ecirc;tre un pays &eacute;mergent &agrave; l&rsquo;horizon 2035, selon la vision du Chef de l&#39;Etat &agrave; laquelle nous adh&eacute;rons tous.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">L&rsquo;atteinte de cet objectif passe par l&rsquo;industrialisation qui n&eacute;cessite la formation d&rsquo;Ing&eacute;nieurs hautement qualifi&eacute;s. La FGI s&rsquo;est engag&eacute;e &agrave; former des ressources humaines de pointe capables de d&eacute;velopper, gr&acirc;ce &agrave; des savoirs scientifiques et technologiques de haut niveau et l&rsquo;ing&eacute;niosit&eacute; personnelle, des solutions technologiques endog&egrave;nes pour cr&eacute;er et maintenir la comp&eacute;titivit&eacute; de l&rsquo;appareil de production nationale. La finalit&eacute; &eacute;tant l&rsquo;industrialisation et le d&eacute;veloppement &eacute;conomique du pays et de la sous-r&eacute;gion.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">Les &eacute;tudes &agrave; la Facult&eacute; de G&eacute;nie Industriel r&eacute;pondent aux exigences du syst&egrave;me LMD, qui est une r&eacute;forme universitaire &agrave; l&rsquo;&eacute;chelle internationale, reposant sur une nouvelle architecture de formation en trois cursus connus sous l&rsquo;appellation de cycles Licence, Master et Doctorat.<br />\r\nLes dipl&ocirc;mes de la FGI sont reconnus par World Education Services (WES) du Canada et des USA.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">La FGI propose des solutions de formations et de perfectionnement dans le cadre des contrats sp&eacute;cifiques de formation aux particuliers, entreprises ainsi qu&rsquo;aux administrations. C&rsquo;est un mod&egrave;le de formation qui donne des r&eacute;ponses personnalis&eacute;es &agrave; une probl&eacute;matique. Le contenu de la formation est adapt&eacute; aux besoins exprim&eacute;s.<br />\r\nA cet effet la FGI met &agrave; disposition tout le savoir-faire de son &eacute;quipe p&eacute;dagogique et ses experts nationaux et internationaux en mati&egrave;re de conception de formation, d&rsquo;organisation et de logistique.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\">La FGI propose &eacute;galement :</span></span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\"><span style=\"font-size:18px\">&diams;&nbsp;&nbsp;<span style=\"color:#f39c12\"><span style=\"font-family:Times New Roman,Times,serif\">Des formations personnalis&eacute;es ;</span></span></span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\"><span style=\"font-size:18px\">&diams;&nbsp;&nbsp;<span style=\"color:#f39c12\"><span style=\"font-family:Times New Roman,Times,serif\">Des lieux de formation flexibles (campus FGI ou dans tout autre lieu souhait&eacute; par l&rsquo;entreprise) ;</span></span></span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\"><span style=\"font-size:18px\">&diams;&nbsp;&nbsp;<span style=\"color:#f39c12\"><span style=\"font-family:Times New Roman,Times,serif\">Des horaires de formation &agrave; convenance</span></span></span></p>\r\n\r\n<p>&nbsp;</p>', 25, 'ChoixFGI'),
(5, '2020-01-23 11:56:26', '2020-05-07 11:41:08', 'EN SAVOIR PLUS SUR NOS FORMATIONS', '<h6 style=\"text-align:justify\"><strong><span style=\"font-size:20px\"><span style=\"color:#0099ff\"><span style=\"font-family:Times New Roman,Times,serif\">A. La formation initiale</span></span></span></strong></h6>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">La formation initiale est une scolarit&eacute; normale qui se d&eacute;roule &agrave; plein temps, en cours du jour et en milieu universitaire. Elle s&rsquo;adresse principalement aux jeunes sans exp&eacute;rience professionnelle et vise l&rsquo;acquisition des connaissances&nbsp; et comp&eacute;tences n&eacute;cessaires &agrave; leur entr&eacute;e dans la vie active.</span></span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><strong>Entr&eacute;e en premi&egrave;re ann&eacute;e</strong></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Acc&egrave;s : Par voie de concours ;</span></span></p>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Dur&eacute;e des &eacute;tudes : 5ans ;</span></span></p>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; &Acirc;ge limite : 29 ans ;</span></span></p>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Dipl&ocirc;me requis : baccalaur&eacute;at C, D, E, F ; GCE-AL Mathemathics, Physics, Chemistry ; Brevet de Technicien (BT) ou tout autre dipl&ocirc;me jug&eacute; &eacute;quivalent par le Minist&egrave;re de l&rsquo;Enseignement Sup&eacute;rieur.</span></span></p>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Co&ucirc;t de la formation : 55000 Fcfa (nouveaux &eacute;tudiants) ; 51000 Fcfa (anciens &eacute;tudiants) ;</span></span></p>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; &Eacute;tudiants &eacute;trangers : selon les conventions avec le pays d&rsquo;origine ;</span></span></p>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Frais d&rsquo;assurance : 2200 Fcfa</span></span></p>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Frais d&rsquo;association des &eacute;tudiants : 1000 Fcfa</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><strong>&nbsp; &nbsp; 2. Entr&eacute;e en troisi&egrave;me ann&eacute;e&nbsp;</strong><em>(Licence professionnelle s&rsquo;abstenir)</em></span></span></p>\r\n\r\n<p style=\"margin-left:80px; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Acc&egrave;s : Par voie de concours ;</span></span></p>\r\n\r\n<p style=\"margin-left:80px; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Dur&eacute;e des &eacute;tudes : 03 ans ;</span></span></p>\r\n\r\n<p style=\"margin-left:80px; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; &Acirc;ge limite : 32 ans ;</span></span></p>\r\n\r\n<p style=\"margin-left:80px; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Dipl&ocirc;me requis : Licence en Math&eacute;matiques, Physique, Chimie ; Licence de Technologie ; Dipl&ocirc;me d&rsquo;ing&eacute;nieur des travaux ; ou tout autre dipl&ocirc;me jug&eacute; &eacute;quivalent par le Minist&egrave;re de l&rsquo;Enseignement Sup&eacute;rieur.</span></span></p>\r\n\r\n<p style=\"margin-left:80px; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Co&ucirc;t de la formation : 55000 Fcfa (nouveaux &eacute;tudiants) ; 51000 Fcfa (anciens &eacute;tudiants) ;</span></span></p>\r\n\r\n<p style=\"margin-left:80px; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; &Eacute;tudiants &eacute;trangers : selon les conventions avec le pays d&rsquo;origine ;</span></span></p>\r\n\r\n<p style=\"margin-left:80px; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Frais d&rsquo;assurance : 2200 Fcfa</span></span></p>\r\n\r\n<p style=\"margin-left:80px; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Frais d&rsquo;association des &eacute;tudiants : 1000 Fcfa</span></span></p>\r\n\r\n<h6 style=\"text-align:justify\"><span style=\"font-size:20px\"><strong><span style=\"color:#0099ff\"><span style=\"font-family:Times New Roman,Times,serif\">B. La formation continue</span></span></strong></span></h6>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">Cette option offre aux salari&eacute;s, aux demandeurs d&rsquo;emploi et &agrave; toute autre personne d&eacute;sireuse de continuer des &eacute;tudes, la possibilit&eacute; de se former dans un cadre diff&eacute;rent de celui de la formation initiale ; c&rsquo;est une formation &agrave; la fois qualifiante et dipl&ocirc;mante.<br />\r\nPour les chercheurs d&rsquo;emploi, elle vise, au m&ecirc;me titre que la formation initiale, &agrave; l&rsquo;acquisition des connaissances et comp&eacute;tences exig&eacute;es en entreprise ;<br />\r\nPour les salari&eacute;s c&rsquo;est le moyen le plus s&ucirc;r de s&rsquo;assurer une promotion professionnelle et sociale<br />\r\nPour les entreprises et administrations, c&rsquo;est l&rsquo;occasion d&rsquo;op&eacute;rer en leur sein une remise &agrave; niveau ponctuelle ou permanente du personnel afin de r&eacute;pondre aux besoins imm&eacute;diats et structurels impos&eacute;s par la loi du march&eacute;.<br />\r\nA cet effet, la FGI dispose des deux choix suivants :&nbsp;</span></span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">C&#39;est une scolarit&eacute; normale qui se d&eacute;roule &agrave; plein temps en milieu universitaire, mais dont la particularit&eacute; r&eacute;side au niveau des horaires de cours (cours du soir) et des conditions d&rsquo;acc&egrave;s &eacute;largies aux dipl&ocirc;mes professionnels. Les &eacute;tudiants en FI-2 sont soumis au m&ecirc;me r&eacute;gime des &eacute;tudes que ceux de la formation initiale et le dipl&ocirc;me obtenu est celui d&rsquo;Ing&eacute;nieur de la Facult&eacute; de G&eacute;nie Industriel dans la sp&eacute;cialit&eacute; choisie.</span></span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><strong>La formation initiale 2 (Fi2)</strong></span></span>\r\n\r\n	<ol>\r\n		<li><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">Entr&eacute;e en premi&egrave;re ann&eacute;e (ouverture en projet)</span></span></li>\r\n		<li><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">Entr&eacute;e en troisi&egrave;me ann&eacute;e :</span></span></li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Acc&egrave;s : par voie de concours ;</span></span></p>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Dur&eacute;e des &eacute;tudes : 3ans ;</span></span></p>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Age limite : aucun ;</span></span></p>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams; Dipl&ocirc;me requis : Licence en Math&eacute;matiques, Physique, Chimie ; Licence de Technologie ; Dipl&ocirc;me d&rsquo;ing&eacute;nieur des travaux ; licences professionnelles en Sciences et Technologies ou tout autre dipl&ocirc;me jug&eacute; &eacute;quivalent par le Minist&egrave;re de l&rsquo;Enseignement Sup&eacute;rieur.</span></span></p>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; P&eacute;riode de concours : Fix&eacute;e par Arr&ecirc;t&eacute; minist&eacute;riel.</span></span></p>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Composition du dossier de candidature : (Voir Arr&ecirc;t&eacute; de lancement)</span></span></p>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Droits universitaires : Fix&eacute;s par d&eacute;cision du Recteur</span></span></p>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; &Eacute;tudiants &eacute;trangers : selon les conventions avec le pays d&rsquo;origine ;</span></span></p>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Frais d&rsquo;assurance : 2200 Fcfa ;</span></span></p>\r\n\r\n<p style=\"margin-left:80px\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">&diams;&nbsp; Frais d&rsquo;association des &eacute;tudiants : 1000 Fcfa.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,Times,serif\"><strong>&nbsp; &nbsp; &nbsp;2. La Formation &agrave; la Carte (FAC)</strong></span></span></p>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">La FGI propose des solutions de formations et de perfectionnement dans le cadre des contrats sp&eacute;cifiques de formation aux particuliers, entreprises ainsi qu&rsquo;aux administrations. C&rsquo;est un mod&egrave;le de formation qui donne des r&eacute;ponses personnalis&eacute;es &agrave; une probl&eacute;matique. Le contenu de la formation est flexible et adapt&eacute; aux besoins exprim&eacute;s.<br />\r\nA cet effet la FGI met &agrave; disposition tout le savoir-faire de son &eacute;quipe p&eacute;dagogique et de ses experts nationaux et internationaux en mati&egrave;re de conception de formation, d&rsquo;organisation et de logistique.</span></span></p>', 23, 'FormFGI');

-- --------------------------------------------------------

--
-- Structure de la table `insolites`
--

DROP TABLE IF EXISTS `insolites`;
CREATE TABLE IF NOT EXISTS `insolites` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `media_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `insolites_media_id_foreign` (`media_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `labo`
--

DROP TABLE IF EXISTS `labo`;
CREATE TABLE IF NOT EXISTS `labo` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nomLabo` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `objectif` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `strucRattach` varchar(65) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `laboe3m_media_id_foreign` (`media_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `labo`
--

INSERT INTO `labo` (`id`, `created_at`, `updated_at`, `nomLabo`, `description`, `objectif`, `strucRattach`, `media_id`) VALUES
(1, '2020-02-09 17:07:22', '2020-05-07 12:37:58', 'E3M', '<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:Times New Roman,Times,serif\">Le Laboratoire <strong>E</strong>nergie, <strong>M</strong>at&eacute;riaux, <strong>M</strong>od&eacute;lisation et <strong>M</strong>&eacute;thodes (<span style=\"color:#3498db\">E3M</span>) est un laboratoire universitaire de Recherche et D&eacute;veloppement (R&amp;D) dans les domaines de l&rsquo;&eacute;nergie, des sciences des mat&eacute;riaux utilis&eacute;s dans le g&eacute;nie industriel. Situ&eacute; dans le campus universitaire de la Facult&eacute; de G&eacute;nie Industriel de Logbessou, ce laboratoire a pour objectif de soutenir le d&eacute;veloppement endog&egrave;ne par la recherche et la r&eacute;alisation des solutions technologiques idoines. Ses membres sont des chercheurs confirm&eacute;s ou en herbe &eacute;pris de l&rsquo;esprit de d&eacute;fiance technologique pour un d&eacute;veloppement durable dans notre environnement. Ils sont issus des Universit&eacute;s et centre sp&eacute;cialis&eacute;s du Cameroun ou d&rsquo;ailleurs.</span></span></p>', '<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:16px\">﻿Le laboratoire E3M se&nbsp;propose de d&eacute;velopper des solutions technologiques concr&egrave;tes :</span></span></p>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:16px\">&rArr;&nbsp; Pour un d&eacute;veloppement durable ;</span></span></p>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:16px\">&rArr;&nbsp; Pour une culture de l&rsquo;innovation&nbsp;technologique;&nbsp;</span></span></p>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:16px\">&rArr;&nbsp; Pour une gestion &eacute;co responsable du patrimoine Dans ce but il doit &oelig;uvrer :</span></span></p>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:16px\">&rArr;&nbsp; Pour le d&eacute;veloppement des mat&eacute;riaux innovants pour le secteur du G&eacute;nie Industriel ;</span></span></p>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:16px\">&rArr;&nbsp; Pour la production et la conversion de l&rsquo;&eacute;nergie ;</span></span></p>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:16px\">&rArr;&nbsp; Pour l&rsquo;am&eacute;lioration de la compr&eacute;hension des ph&eacute;nom&egrave;nes physiques, chimiques, m&eacute;caniques etc. pouvant uire &agrave; la durabilit&eacute; des produits d&eacute;velopp&eacute;s et des structures ;</span></span></p>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:16px\">&rArr;&nbsp; Pour la mise au point des m&eacute;thodologies et des techniques</span></span></p>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:16px\">&rArr;&nbsp; Pour la conception de nouveaux produits ou services, la requalification, le diagnostic, et la maintenance.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'Université de Douala', 64);

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

DROP TABLE IF EXISTS `medias`;
CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chemin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom` (`nom`),
  KEY `medias_id_type_foreign` (`id_type`)
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `medias`
--

INSERT INTO `medias` (`id`, `created_at`, `updated_at`, `titre`, `nom`, `chemin`, `description`, `id_type`) VALUES
(45, '2020-01-07 00:26:46', '2020-01-07 00:26:46', 'HSSI', 'ZmOphSDEsK.jpg', 'storage/images', 'icone_dept', 26),
(9, '2020-01-03 15:35:50', '2020-04-30 18:18:06', 'TTIC', 'S2RZOj6fkZ.jpg', 'storage/images', 'icone_dept', 26),
(12, '2020-01-04 08:33:05', '2020-01-04 08:33:05', 'GCI', 'kIp6xZnEA6.jpg', 'storage/images', 'mini_icone_dept', 26),
(13, '2020-01-04 08:34:13', '2020-03-27 14:33:54', 'TTIC', 'UHIlf34T89.jpg', 'storage/images', 'mini_icone_dept', 26),
(14, '2020-01-04 08:36:52', '2020-01-04 08:36:52', 'HSSI', 'BwumIMUsrN.jpg', 'storage/images', 'mini_icone_dept', 26),
(15, '2020-01-04 08:37:21', '2020-01-04 08:37:21', 'TAU', 'UquoVrICQN.jpg', 'storage/images', 'mini_icone_dept', 26),
(16, '2020-01-04 08:38:36', '2020-01-04 08:38:36', 'GPR', 'aIElbiR9VG.jpg', 'storage/images', 'mini_icone_dept', 26),
(17, '2020-01-04 08:46:17', '2020-01-04 08:46:17', 'TCI', 'S1LXPHj2tH.jpg', 'storage/images', 'mini_icone_dept', 26),
(18, '2020-01-04 09:14:24', '2020-01-04 09:14:24', 'logoFGI', 'PngI2wwUjU.png', 'storage/images', 'logoFGI', 26),
(20, '2020-01-04 09:16:02', '2020-01-04 09:16:02', 'line', 'qyQcy3swB4.png', 'storage/images', 'ligne', 26),
(21, '2020-01-04 09:17:56', '2020-01-04 09:17:56', 'PGM', 'Mh445nhTKs.jpg', 'storage/images', 'mini_icone_dept', 26),
(22, '2020-01-04 09:22:43', '2020-03-28 21:53:33', 'EnsFGI', 'WlNCcrl1pC.jpg', 'storage/images', 'image_respform_ens', 26),
(23, '2020-01-04 09:25:21', '2020-01-04 09:25:21', 'FormFGI', 'mTjbP4CcCJ.jpg', 'storage/images', 'image_respform_form', 26),
(24, '2020-01-04 09:30:59', '2020-05-01 11:20:21', 'BrefFGI', 'LoB8DzKv2M.jpg', 'storage/images', 'image_respfom_bref', 26),
(25, '2020-01-04 09:33:11', '2020-01-04 09:33:11', 'ChoixFGI', 'myMaeLVMAQ.jpg', 'storage/images', 'image_respcom_choix', 26),
(46, '2020-01-07 00:27:30', '2020-05-01 11:38:01', 'GCH', 'M2eFqBagS5.jpg', 'storage/images', 'icone_dept', 26),
(44, '2020-01-07 00:25:58', '2020-01-07 00:25:58', 'TAU', 'AngNzepABM.jpg', 'storage/images', 'icone_dept', 26),
(54, '2020-01-24 16:06:23', '2020-01-24 16:06:23', 'logo_youtube', 'Hr4q9Mumqw.png', 'storage/images', 'logo', 26),
(102, '2020-04-30 10:54:52', '2020-04-30 10:54:52', 'NA', 'BSEVb9TFKi.jpg', 'storage/images', 'Insolite', 26),
(47, '2020-01-07 00:28:30', '2020-01-07 00:28:30', 'GPR', 'sBdPkdxsth.jpg', 'storage/images', 'icone_dept', 26),
(48, '2020-01-07 00:29:02', '2020-01-07 00:29:02', 'ROI', 'S5N10ZNrkt.jpg', 'storage/images', 'icone_dept', 26),
(49, '2020-01-07 00:30:55', '2020-01-07 00:30:55', 'PGM', 't8ZMYTfDg0.jpg', 'storage/images', 'icone_dept', 26),
(53, '2020-01-24 15:12:16', '2020-01-24 15:12:16', 'logo_twitter', 'ZxPROTkk0F.png', 'storage/images', 'logo', 26),
(51, '2020-01-22 17:27:33', '2020-01-22 17:27:33', 'GCI', 'b9zX7rvyoE.jpg', 'storage/images', 'icone_dept', 26),
(52, '2020-01-22 17:40:13', '2020-01-22 17:40:13', 'TCI', '3YW5WWA4C6.jpg', 'storage/images', 'icone_dept', 26),
(75, '2020-03-20 20:55:55', '2020-03-20 20:55:55', '4J8lwsCK', 'zdJOD9U8WW.jpg', 'storage/images', '', 26),
(125, '2020-05-10 00:06:07', '2020-05-10 00:06:07', 'images fgi', 'I0C4Dr6uBs.jpg', 'storage/images', 'News', 26),
(126, '2020-05-10 00:07:01', '2020-05-10 00:07:01', 'batiment', 'thcGI5D1PC.jpg', 'storage/images', 'News', 26),
(62, '2020-02-20 10:39:38', '2020-02-20 10:39:38', 'ico_fgi', 'p7Jpa0MVUp.png', 'storage/images', 'icone_fgi', 26),
(65, '2020-03-01 17:29:54', '2020-03-01 17:29:54', 'img_email', 'oyZW4otOad.png', 'storage/images', 'logoMail', 26),
(66, '2020-03-01 19:12:06', '2020-03-01 19:12:06', 'ROI', 'L1T0VWiC1j.jpg', 'storage/images', 'mini_icone_dept', 26),
(67, '2020-03-01 19:14:08', '2020-05-01 11:38:40', 'GCH', 'Pg6frccdVa.jpg', 'storage/images', 'mini_icone_dept', 26),
(69, '2020-01-04 09:15:02', '2020-03-01 19:20:00', 'E3M', 'CI3HlstZ1o.jpg', 'storage/images', 'mini_icone_labo', 26),
(96, '2020-04-09 23:06:58', '2020-04-09 23:25:37', 'P6u0l8Oh', 'v2OoxAmS6j.jpg', 'storage/images', 'adminCent', 26),
(76, '2020-03-20 20:56:55', '2020-03-20 20:56:55', '3ltTRamM', 'FkS0NLNW13.jpg', 'storage/images', '', 26),
(84, '2020-03-25 15:58:20', '2020-03-25 15:58:20', 'img_prelog', 'JZUQWzctUL.png', 'storage/images', 'Image dans la page du choix du profil', 26),
(83, '2020-03-25 14:42:33', '2020-03-25 14:42:33', 'Home_BK', 'yMKbPRtjKn.jpg', 'storage/images', 'Image d\'accueil des interfaces du backend', 26),
(85, '2020-03-26 12:40:33', '2020-05-01 15:00:01', 'sCXDj0xy', 'BnHtlzui26.jpg', 'storage/images', NULL, 26),
(90, '2020-03-29 12:36:05', '2020-04-30 14:05:55', 'E3M', 'Tj7U6BaSoo.docx', 'storage/fichiers', 'fichier qui décris plus en profondeur les activités du labo E3M', 27),
(91, '2020-03-29 12:39:29', '2020-04-30 13:53:07', 'UFD', 'KXUWFBmEcH.docx', 'storage/fichiers', 'fichier qui présente le programme d\'enseignement des UFD', 27),
(103, '2020-04-30 11:02:21', '2020-04-30 11:02:21', 'n', 'fCN0szY5q8.jpg', 'storage/images', 'News', 26),
(97, '2020-04-09 23:10:34', '2020-04-09 23:24:53', 'lmnbOuDN', 'agYQ1OiKEM.jpg', 'storage/images', 'adminCent', 26),
(98, '2020-04-09 23:11:41', '2020-04-09 23:11:41', 'f88hXup2', 'BYqNbrXfa8.jpg', 'storage/images', '', 26),
(128, '2020-05-10 00:10:15', '2020-05-10 00:10:15', 'cooperation', 'ZlFeaOviun.jpg', 'storage/images', 'News', 26),
(127, '2020-05-10 00:07:29', '2020-05-10 00:07:29', 'batiment2', 'PWvbmNYdfO.jpg', 'storage/images', 'News', 26),
(132, '2020-05-19 01:54:10', '2020-05-19 01:54:10', 'Coronavirus au Cameroun : les opérations de solidarité dans le viseur du gouvernement', 'FT45tSEayT.jpg', 'storage/images', 'News', 26),
(131, '2020-05-19 01:45:53', '2020-05-19 01:45:53', 'Coronavirus: A Cameroon student on how he recovered', 'nFmABvpAWJ.jpg', 'storage/images', 'News', 26);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_24_112040_create_administrationCentrale_table', 2),
(3, '2019_12_24_112040_create_centreDincubation_table', 2),
(4, '2019_12_24_112040_create_citations_table', 2),
(5, '2019_12_24_112040_create_communiquer_table', 2),
(6, '2019_12_24_112040_create_concours_table', 2),
(7, '2019_12_24_112040_create_contacts_table', 2),
(8, '2019_12_24_112040_create_departement_table', 2),
(9, '2019_12_24_112040_create_doctorat1_table', 2),
(10, '2019_12_24_112040_create_dossiers_table', 2),
(11, '2019_12_24_112040_create_etudiantConcours_table', 2),
(12, '2019_12_24_112040_create_formEnseigChoixBref_table', 2),
(13, '2019_12_24_112040_create_insolites_table', 2),
(14, '2019_12_24_112040_create_labo_table', 2),
(15, '2019_12_24_112040_create_masterIIRech_table', 2),
(16, '2019_12_24_112040_create_medias_table', 2),
(17, '2019_12_24_112040_create_membresLabo_table', 2),
(18, '2019_12_24_112040_create_miseAJours_table', 2),
(19, '2019_12_24_112040_create_news_table', 2),
(20, '2019_12_24_112040_create_partenairesLabo_table', 2),
(21, '2019_12_24_112040_create_telechargements_table', 2),
(22, '2019_12_24_112040_create_typeMedia_table', 2),
(23, '2019_12_24_112040_create_typeMembre_table', 2),
(24, '2019_12_24_112050_create_foreign_keys', 2),
(25, '2019_12_27_223954_create_admins_table', 3),
(26, '2019_12_28_101827_create_admin_password_resets_table', 3),
(27, '2019_12_28_103256_create_respforms_table', 3),
(28, '2019_12_28_103257_create_respform_password_resets_table', 3),
(29, '2019_12_28_103304_create_respdepts_table', 3),
(30, '2019_12_28_103305_create_respdept_password_resets_table', 3),
(31, '2019_12_28_103318_create_respcentincs_table', 3),
(32, '2019_12_28_103319_create_respcentinc_password_resets_table', 3),
(33, '2019_12_28_103337_create_doyens_table', 3),
(34, '2019_12_28_103338_create_doyen_password_resets_table', 3),
(35, '2019_12_28_103356_create_respecoledocts_table', 3),
(36, '2019_12_28_103357_create_respecoledoct_password_resets_table', 3),
(37, '2019_12_28_103427_create_respcoms_table', 3),
(38, '2019_12_28_103428_create_respcom_password_resets_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `url` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorie` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `media_id` (`media_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `created_at`, `updated_at`, `deleted_at`, `url`, `categorie`, `media_id`) VALUES
(3, NULL, NULL, NULL, NULL, 'agenda', 60),
(2, NULL, NULL, NULL, NULL, 'agenda', 59),
(4, NULL, NULL, NULL, NULL, 'actualites', 73),
(5, NULL, NULL, NULL, NULL, 'actualites', 74),
(6, NULL, NULL, NULL, NULL, 'actualites', 89),
(7, NULL, NULL, NULL, NULL, 'actualites', 104),
(8, NULL, NULL, NULL, NULL, 'actualites', 105),
(9, NULL, NULL, NULL, NULL, 'actualites', 106),
(10, NULL, NULL, NULL, NULL, 'actualites', 107),
(11, NULL, NULL, NULL, NULL, 'actualites', 108),
(12, NULL, NULL, NULL, NULL, 'actualites', 109),
(13, NULL, NULL, NULL, NULL, 'actualites', 110),
(14, NULL, NULL, NULL, NULL, 'agenda', 111),
(15, NULL, NULL, NULL, NULL, 'actualites', 113),
(16, NULL, NULL, NULL, NULL, 'agenda', 114),
(17, NULL, NULL, NULL, NULL, 'actualites', 116),
(18, NULL, NULL, NULL, NULL, 'agenda', 119),
(19, NULL, NULL, NULL, NULL, 'actualites', 120),
(20, NULL, NULL, NULL, NULL, 'actualites', 122),
(21, NULL, NULL, NULL, NULL, 'agenda', 123),
(22, NULL, NULL, NULL, NULL, 'agenda', 125),
(23, NULL, NULL, NULL, NULL, 'agenda', 126),
(24, NULL, NULL, NULL, NULL, 'agenda', 127),
(25, NULL, NULL, NULL, NULL, 'agenda', 128),
(26, NULL, NULL, NULL, NULL, 'actualites', 129),
(27, NULL, NULL, NULL, NULL, 'actualites', 130),
(28, NULL, NULL, NULL, 'https://www.jeuneafrique.com/925306/politique/coronavirus-au-cameroun-les-operations-de-solidarite-dans-le-viseur-du-gouvernement/', 'actualites', 131),
(29, NULL, NULL, NULL, 'https://www.jeuneafrique.com/925306/politique/coronavirus-au-cameroun-les-operations-de-solidarite-dans-le-viseur-du-gouvernement/', 'actualites', 132);

-- --------------------------------------------------------

--
-- Structure de la table `partenaireslabo`
--

DROP TABLE IF EXISTS `partenaireslabo`;
CREATE TABLE IF NOT EXISTS `partenaireslabo` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `raison_socialePLabo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `villePLabo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idLabo` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `partenaireslaboe3m_idlabe3m_foreign` (`idLabo`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partenaireslabo`
--

INSERT INTO `partenaireslabo` (`id`, `created_at`, `updated_at`, `raison_socialePLabo`, `villePLabo`, `idLabo`) VALUES
(1, NULL, '2020-05-01 12:57:55', 'PLANETE NI2', 'Houston USA', 1),
(3, NULL, NULL, 'Société ADDAX', 'Douala', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

DROP TABLE IF EXISTS `personnel`;
CREATE TABLE IF NOT EXISTS `personnel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomPers` varchar(45) NOT NULL,
  `prenomPers` varchar(45) DEFAULT NULL,
  `gradePers` varchar(45) DEFAULT NULL,
  `lieuDeServicePers` varchar(45) DEFAULT NULL,
  `Labo_idLabo` int(11) DEFAULT NULL,
  `Departement_idDepartement` int(11) DEFAULT NULL,
  `postePers` varchar(100) DEFAULT NULL,
  `matPers` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `media_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matPers` (`matPers`),
  KEY `fk_Personnel_Labo` (`Labo_idLabo`),
  KEY `fk_Personnel_Departement1` (`Departement_idDepartement`),
  KEY `media_id` (`media_id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnel`
--

INSERT INTO `personnel` (`id`, `nomPers`, `prenomPers`, `gradePers`, `lieuDeServicePers`, `Labo_idLabo`, `Departement_idDepartement`, `postePers`, `matPers`, `created_at`, `updated_at`, `media_id`) VALUES
(54, 'Hulfe', 'Paulo', 'Dr', 'Université de Douala', 1, NULL, NULL, 'SCnmAEig', '2020-04-29 19:00:12', '2020-04-29 19:00:12', NULL),
(23, 'MATANGA2', 'Jacques', 'M.', 'Université de Douala', 1, 9, 'Doyen', 'vqq6IgpY', '2020-03-17 10:08:31', '2020-04-29 15:20:43', 0),
(28, 'Koum', 'Paul', 'Dr', 'Université de Douala', 0, NULL, NULL, 'TkE1AteL', '2020-03-18 15:07:13', '2020-03-18 15:07:13', 0),
(37, 'MOUKENGUE IMANO', 'Adolphe', 'Pr', NULL, 1, NULL, 'Doyen', 'sCXDj0xy', '2020-03-26 12:40:33', '2020-04-30 17:27:51', 85),
(43, 'OFFOLE 2', 'Florence', 'Dr', 'Université de Douala', 1, 13, 'Responsable Académique et Stage', 'N6HaIE4O', '2020-04-09 19:35:10', '2020-05-19 16:15:09', NULL),
(42, 'OFFOLE', 'Florence', 'Dr', 'Université de Douala', NULL, 13, 'Responsable Académique et Stage', '74VzM462', '2020-04-09 19:33:24', '2020-04-09 19:33:24', NULL),
(56, 'CHUAIBOU', 'Ive', 'M.', 'Université de Douala', NULL, 16, 'Responsable Académique et Stage', '7hvv1haw', '2020-05-01 11:41:10', '2020-05-01 11:55:39', NULL),
(44, 'SAGU', 'Sorel', 'Dr', 'Université de Douala', 1, 23, 'Responsable Académique et Stage', 'Hji42oZ5', '2020-04-09 19:45:37', '2020-04-09 19:45:37', NULL),
(45, 'MEZOUE', 'Cyrille', 'Dr', 'Université de Douala', NULL, 18, 'Responsable Académique', 'TEiWoZl5', '2020-04-09 19:51:37', '2020-04-09 19:51:37', NULL),
(46, 'ZANGA', 'Crick', 'M.', 'Université de Douala', 0, 18, 'Responsable Stage', 'xJArcumd', '2020-04-09 19:52:05', '2020-04-09 19:52:05', NULL),
(47, 'NGOMA', 'Jean-Pierre', 'Dr', 'Université de Douala', NULL, 20, 'Responsable Académique et Stage', 'UHvmitAv', '2020-04-09 19:54:53', '2020-04-09 19:54:53', NULL),
(48, 'BATAMBOCK', 'Samuel', 'M.', 'Université de Douala', NULL, 22, 'Responsable Académique et Stage', 'Z6CfQawm', '2020-04-09 20:13:57', '2020-04-09 20:13:57', NULL),
(49, 'MBANGUE', 'N. Ekmond', 'M.', 'Université de Douala', NULL, 15, 'Responsable Académique et Stage', 'rqqZ8FEl', '2020-04-09 20:17:35', '2020-04-09 20:17:35', NULL),
(50, 'Moussa', 'Sali', 'Dr', NULL, NULL, NULL, 'Vice-Doyen Chargé de la Programmation', 'P6u0l8Oh', '2020-04-09 23:06:59', '2020-05-07 15:11:51', 96),
(51, 'NJIFENJOU', 'Abdou', 'Pr', NULL, NULL, NULL, 'Vice-Doyen Chargé de la Scolarité', 'lmnbOuDN', '2020-04-09 23:10:34', '2020-05-07 15:15:48', 97),
(52, 'NYOBE', 'Maurice', 'Pr', NULL, NULL, NULL, 'Vice-Doyen chargé de la Recherche et la Coopération', 'f88hXup2', '2020-04-09 23:11:41', '2020-04-09 23:11:41', 98),
(59, 'KOUM', 'Paulin', 'Pr', 'Université de Douala', 1, NULL, NULL, 'VjF1CHGh', '2020-05-02 12:54:52', '2020-05-19 16:15:55', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `respcentincs`
--

DROP TABLE IF EXISTS `respcentincs`;
CREATE TABLE IF NOT EXISTS `respcentincs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poste` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `respcentincs_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `respcentincs`
--

INSERT INTO `respcentincs` (`id`, `name`, `prenom`, `email`, `password`, `remember_token`, `poste`, `auth`, `created_at`, `updated_at`) VALUES
(2, 'cvvv2', '2VVV', 'V22', 'VCVCVCVC', NULL, 'FVFGFGF', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `respcentinc_password_resets`
--

DROP TABLE IF EXISTS `respcentinc_password_resets`;
CREATE TABLE IF NOT EXISTS `respcentinc_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `respcentinc_password_resets_email_index` (`email`),
  KEY `respcentinc_password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `respcoms`
--

DROP TABLE IF EXISTS `respcoms`;
CREATE TABLE IF NOT EXISTS `respcoms` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_Auth` datetime DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poste` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `respcoms_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `respcoms`
--

INSERT INTO `respcoms` (`id`, `name`, `prenom`, `email`, `password`, `date_Auth`, `remember_token`, `poste`, `auth`, `created_at`, `updated_at`) VALUES
(2, 'KOUKAM', 'Jule', 'respcom@gmail.com1', '$2y$10$h3Jw2NC.khQ2HlMSwjnyeutJl45l92zBZz4UPSkuDkcOy96XJzMxO', NULL, 'lmZIUVavLNoytlv6OtCribAB8CBmxHRMGqzcbaxjZctVklcaDTOq1M8O1njS', 'respcorm', 0, '2019-12-30 16:06:49', '2020-05-06 14:27:23');

-- --------------------------------------------------------

--
-- Structure de la table `respcom_password_resets`
--

DROP TABLE IF EXISTS `respcom_password_resets`;
CREATE TABLE IF NOT EXISTS `respcom_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `respcom_password_resets_email_index` (`email`),
  KEY `respcom_password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `respdepts`
--

DROP TABLE IF EXISTS `respdepts`;
CREATE TABLE IF NOT EXISTS `respdepts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poste` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth` tinyint(1) NOT NULL,
  `refDept` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_Auth` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `respdepts_email_unique` (`email`),
  UNIQUE KEY `refDept` (`refDept`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `respdepts`
--

INSERT INTO `respdepts` (`id`, `name`, `prenom`, `email`, `password`, `remember_token`, `poste`, `auth`, `refDept`, `date_Auth`, `created_at`, `updated_at`) VALUES
(19, 'Dr NDOUMBE', 'Jean 3', 'respdeptTTIC@gmail.com', '$2y$10$Cw8WmmqHuBXPA5eq0uF7E.GAWpjWDe1bas5WrTymvqrwywHiQjj06', 'QTFo3hqRw2IqdkojO8GpsZxKBvvlmb1mVMVtK9H6AeSONIgmo1MKZELtAlom', 'Chef du Département TTIC', 0, 'TTIC', '2020-05-04 00:00:00', '2020-01-22 17:16:25', '2020-04-30 17:15:21'),
(20, 'Dr AMBA', 'Chil', 'respdeptGCI@gmail.com', '$2y$10$fX06nPrdk/cZEhuonCGFwOafY1v0wPasKvIF8sLNyHGFxfMm7gcPW', 'euxUaXlVBp8SJpAwbyWAS6Li4sxjylmXlxNVoYlQTasdfNbC6al8kcXAYS2Y', 'Chef du Département GCI', 1, 'GCI', NULL, '2020-01-22 17:16:25', '2020-02-23 21:20:57'),
(21, 'Dr NDOUMBE', 'Martin', 'respdeptGCH@gmail.com', '$2y$10$TlB6Ggt/9BJeJELtg1d6SOtAtKmVn8XUDx8U1IuIxaBxX0QNScXbW', 'de5CCkZY8n8l3f4vmBUlFxzKssQXm0XyRqe2gS8vaw0EYqYJLPpQBj167MOW', 'Chef du Département GCH', 0, 'GCH', NULL, '2020-01-22 17:16:25', '2020-05-06 14:07:09'),
(22, 'Dr NGAYIHI', 'Claude', 'respdeptTCI@gmail.com', '$2y$10$.AD2Us2xvacPZDvhj.h6UeI.7XOOA0neMyltJD4QSBrH.B2BiWp8G', 'kKrowG7faGtYzxvWmtMlcYz9TQTSpjpBJe6DEgOjZE0LF8Hg47cVIWEOQOnr', 'Chef du Département TCI', 1, 'TCI', NULL, '2020-01-22 17:16:25', '2020-04-09 19:50:54'),
(23, 'Dr NDOUMBE', 'Donald', 'respdeptGPR@gmail.com', '$2y$10$bRFYPdDvDCQcdgNLLPvL5.xMLXO6fUPM0qZbUonq.Lt.PJuokslTi', 'HS9jxXD3e2Bwi7NRlOtUofFWnYS8SAE0P67NFeRyGcPU5h9kh2KbrpALOVCg', 'Chef du Département GPR', 1, 'GPR', NULL, '2020-01-22 17:16:25', '2020-04-09 20:11:30'),
(24, 'Dr AYISSI', 'Zacharie', 'respdeptTAU@gmail.com', '$2y$10$LVw.tO/qYw9yMTjkRQJbtOv/16o73.g227/0okj93G2qfj6EO.n9y', 'h2bgYwa77yDOpeRafiipHkmfoZjXTB5TcFmYBJmP1EqfC4bL1MsiIE1SK4Fq', 'Chef du Département TAU', 1, 'TAU', NULL, '2020-01-22 17:16:25', '2020-03-16 13:41:37'),
(25, 'Dr YEREMOU', 'Aurelie', 'respdeptROI@gmail.com', '$2y$10$peLygzsjpCeiWYAFA8n9yuMQux0ueZ9BFkGu7JS0vTzjfvePhQwIG', 'nYa4B5nl10dmqtUYezicz5294Xq9mIufDM0yoD7Jcyn3EEiOTTx3mMr8I2Vp', 'Chef du Département ROI', 1, 'ROI', NULL, '2020-01-22 17:16:25', '2020-04-09 19:54:06'),
(28, 'Mme ILOUGA', 'Alice', 'respdeptPGM@gmail.com', '$2y$10$HCHov82oljS.mc6oopseNOVexX9Dz6PcjjNinoJo3B6myXc2d7pra', 'hdhP4UlS6qQX6D9HquiWURlTyY6RsPZYy2XwFauSIe2szzSSvQgJgQ6197Lh', 'Resdept PGM', 1, 'PGM', NULL, '2020-05-01 13:26:21', '2020-05-01 13:26:21'),
(27, 'Pr BITONDO', 'Dieudonné', 'respdeptHSSI@gmail.com', '$2y$10$LmDl5LScC2MUXrqjh2Lvk..rBGfI14x79ik4tNyIHdJ7K7xIga.6.', 'jiuVOVIcyEaIKAMiSQjBhTExOYkNcxhqYKZ1AgOp66uLL9TvE5kBqZGoxIX2', 'Chef du Département HSSI', 1, 'HSSI', NULL, '2020-01-22 17:16:25', '2020-04-09 19:42:55');

-- --------------------------------------------------------

--
-- Structure de la table `respdept_password_resets`
--

DROP TABLE IF EXISTS `respdept_password_resets`;
CREATE TABLE IF NOT EXISTS `respdept_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `respdept_password_resets_email_index` (`email`),
  KEY `respdept_password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `respecoledocts`
--

DROP TABLE IF EXISTS `respecoledocts`;
CREATE TABLE IF NOT EXISTS `respecoledocts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poste` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth` tinyint(1) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_Auth` datetime DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `respecoledocts_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `respecoledocts`
--

INSERT INTO `respecoledocts` (`id`, `name`, `prenom`, `poste`, `auth`, `email`, `password`, `date_Auth`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr MATAMA', 'Joe', 'Chef ecole doct', 1, 'respecoledoct@gmail.com', '$2y$10$dofFgrazStcbutnnHp0rBeDfhNzA.XVE77DAROkmMEBOOIqJEAX3C', '2020-05-06 14:17:21', 'YiWxFv9FKfuS6je5OYiCEtP0YXhbXIHTHwVfZUIfrrw3wEmK9c2HiIiDy21w', '2020-02-01 10:57:49', '2020-05-06 14:17:21');

-- --------------------------------------------------------

--
-- Structure de la table `respecoledoct_password_resets`
--

DROP TABLE IF EXISTS `respecoledoct_password_resets`;
CREATE TABLE IF NOT EXISTS `respecoledoct_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `respecoledoct_password_resets_email_index` (`email`),
  KEY `respecoledoct_password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `respecoledoct_password_resets`
--

INSERT INTO `respecoledoct_password_resets` (`email`, `token`, `created_at`) VALUES
('respecoledoct@gmail.com', '$2y$10$FamgP5HU6yuhoSBtStnLJ.Q.VkdUNwsHG4blsrcDLU9G6Qtm6Zr5C', '2020-03-21 18:15:14');

-- --------------------------------------------------------

--
-- Structure de la table `respforms`
--

DROP TABLE IF EXISTS `respforms`;
CREATE TABLE IF NOT EXISTS `respforms` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_Auth` datetime DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poste` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `respforms_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `respforms`
--

INSERT INTO `respforms` (`id`, `name`, `prenom`, `email`, `password`, `date_Auth`, `remember_token`, `poste`, `auth`, `created_at`, `updated_at`) VALUES
(3, 'KAMGA', 'Ive', 'respformdef@gmail.com', '$2y$10$eh5J3.7ESiTNBn0PlNE8HebnEBk.w9oFNIUYWmkvUllrr1Xg/gNR6', NULL, 'rLNdmUayzoY9Et7QdTFVmrsPghsEuXRZkj9XYtJKTGkMaUzgjXWbKw4wsi7p', 'respform', 0, '2020-01-29 09:17:02', '2020-05-06 14:35:45');

-- --------------------------------------------------------

--
-- Structure de la table `respform_password_resets`
--

DROP TABLE IF EXISTS `respform_password_resets`;
CREATE TABLE IF NOT EXISTS `respform_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `respform_password_resets_email_index` (`email`),
  KEY `respform_password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `respform_password_resets`
--

INSERT INTO `respform_password_resets` (`email`, `token`, `created_at`) VALUES
('respformdef@gmail.com', '$2y$10$E/EepXZfUgkVGoeyKDfXjOR0PTRjW6NWqVYUe2/.rxdwQuspFSso.', '2020-04-18 17:23:37');

-- --------------------------------------------------------

--
-- Structure de la table `telechargements`
--

DROP TABLE IF EXISTS `telechargements`;
CREATE TABLE IF NOT EXISTS `telechargements` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `media_id` int(10) UNSIGNED NOT NULL,
  `titreTelech` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `telechargements_titretelech_index` (`titreTelech`),
  KEY `telechargements_media_id_foreign` (`media_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `typemedia`
--

DROP TABLE IF EXISTS `typemedia`;
CREATE TABLE IF NOT EXISTS `typemedia` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `libelleType` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `typemedia`
--

INSERT INTO `typemedia` (`id`, `created_at`, `updated_at`, `libelleType`) VALUES
(26, '2020-01-22 17:16:25', NULL, 'img'),
(27, '2020-01-22 17:16:25', NULL, 'file'),
(28, '2020-01-22 17:16:25', NULL, 'video');

-- --------------------------------------------------------

--
-- Structure de la table `typemembre`
--

DROP TABLE IF EXISTS `typemembre`;
CREATE TABLE IF NOT EXISTS `typemembre` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `libelle` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `typemembre`
--

INSERT INTO `typemembre` (`id`, `created_at`, `updated_at`, `libelle`) VALUES
(1, NULL, NULL, 'Coordonnateur'),
(2, NULL, NULL, 'Membre d\'honneur'),
(3, NULL, NULL, 'Membre');

-- --------------------------------------------------------

--
-- Structure de la table `typepersonnel`
--

DROP TABLE IF EXISTS `typepersonnel`;
CREATE TABLE IF NOT EXISTS `typepersonnel` (
  `idTypePersonnel` int(11) NOT NULL AUTO_INCREMENT,
  `libelleTypePersonnel` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idTypePersonnel`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typepersonnel`
--

INSERT INTO `typepersonnel` (`idTypePersonnel`, `libelleTypePersonnel`) VALUES
(1, 'Mb'),
(2, 'Coord'),
(3, 'RespAcad'),
(4, 'RespStage'),
(5, 'MAdminCent'),
(6, 'MbH');

-- --------------------------------------------------------

--
-- Structure de la table `typepersonnel_personnel`
--

DROP TABLE IF EXISTS `typepersonnel_personnel`;
CREATE TABLE IF NOT EXISTS `typepersonnel_personnel` (
  `TypePersonnel_idTypePersonnel` int(11) NOT NULL,
  `Personnel_idPers` int(11) NOT NULL,
  `cocher` tinyint(1) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `Personnel_idPers` (`Personnel_idPers`),
  KEY `TypePersonnel_idTypePersonnel` (`TypePersonnel_idTypePersonnel`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typepersonnel_personnel`
--

INSERT INTO `typepersonnel_personnel` (`TypePersonnel_idTypePersonnel`, `Personnel_idPers`, `cocher`, `id`) VALUES
(4, 23, 1, 66),
(3, 47, 1, 57),
(5, 36, 1, 33),
(1, 23, 1, 25),
(6, 43, 1, 79),
(4, 46, 1, 56),
(4, 43, 1, 52),
(3, 44, 1, 53),
(5, 37, NULL, 36),
(2, 28, 1, 24),
(3, 45, 1, 55),
(4, 44, 1, 54),
(3, 43, 1, 51),
(3, 23, 1, 46),
(4, 47, 1, 58),
(3, 48, 1, 59),
(4, 48, 1, 60),
(3, 49, 1, 61),
(4, 49, 1, 62),
(5, 50, 1, 63),
(5, 51, 1, 64),
(5, 52, 1, 65),
(2, 37, 1, 76),
(3, 56, 1, 80),
(1, 59, 1, 87),
(1, 54, 1, 75),
(4, 56, 1, 84);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poste` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel` ADD FULLTEXT KEY `ind_full_nomPers_prenomPers` (`nomPers`,`prenomPers`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
