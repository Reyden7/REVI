-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 28 mars 2022 à 20:24
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
-- Base de données : `bdd_revi_students`
--

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) DEFAULT NULL,
  `PRENOM` varchar(255) DEFAULT NULL,
  `PROMOTION` varchar(255) DEFAULT NULL,
  `ADD_MAIL` varchar(255) DEFAULT NULL,
  `NUM_TEL` varchar(255) DEFAULT NULL,
  `STAGE_ALTERNANCE` varchar(255) DEFAULT NULL,
  `POST_STAGE` varchar(255) DEFAULT NULL,
  `POST_ACTUEL` varchar(255) DEFAULT NULL,
  `ACCEPTED` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`ID`, `NOM`, `PRENOM`, `PROMOTION`, `ADD_MAIL`, `NUM_TEL`, `STAGE_ALTERNANCE`, `POST_STAGE`, `POST_ACTUEL`, `ACCEPTED`) VALUES
(1, 'ABEL', 'ROSELINE', '2020-2021', '\r\nroseline.abel@orange.fr', '06 07 85 97 52', 'Stage de 6 mois', 'Chargee de veille et etudes marketing', 'Chargee de veille marketing chez MATMUT', 0),
(3, 'ANDRE', 'ALEXANDRE', '2020-2021', 'alexandre.andre220197@gmail.com', '-', 'Stage de 6 mois', 'Community Manager chez SAVOYE', 'Agent de Gestion locative pour CDC Habitat', 0),
(4, 'ANTHONY-GERROLDT', 'LAURE HELENE', '2012-2013', 'laurehelene.anthony@free.fr', '-', '-', '-', 'Professeure de Recherche a L UB', 0),
(5, 'ARCE', 'JORGE', '-', 'arce.jorge@hotmail.fr\r\n', '-', '-', '-', 'Professeur contractuel d Espagnol au college Monge', 0),
(6, 'ASLOT', 'KASSANDRE', '2013-2014', 'aslotkassandre@gmail.com', '06 95 02 61 40\r\n', '-', '-', 'Professeure agregee d espagnol Ph-D Student : Universite Sorbonne Nouvelle, Paris', 0),
(7, 'AYED', 'RIHAB', '2012-2013', 'rihab_a@sfr.fr', '06 26 59 08 09', 'Stage de 6 mois', 'Chargee de veille et etudes marketing', 'Professeur d anglais a l UB', 0),
(8, 'BARGACH', 'NISRINE', '2016-2017', 'nbargach@gmai.com', '06 64 56 83 15', '-', '-', 'Professeur d anglais', 0),
(9, 'BOUCHEREAU', 'MARINE', '2017-2018', 'bouchereau.marine9@gmail.com', '07 81 15 29 14', '-', '-', 'Traductrice freelance', 0),
(10, 'BRIAN', 'ANNE-SOPHIE', '-', 'a.sophie.brian@gmail.com', '06 18 91 43 50', '-', '-', 'Contractuelle pour l Education Nationale et agregative', 0),
(11, 'CASTELNAUD', 'ADELINE', '2016-2017', 'adeline.castelnaud@laposte.net', '447 399 251 383', '', '', 'Gestionnaire de recouvrement pour S/Three, entreprise privee specialisee dans le recrutement mondiale dans l industrie STEM', 0),
(13, 'GAHROUT', 'LEA', '2020-2021', 'l.gahrout@yahoo.fr', '-', 'Stage de 6 mois', 'Chargee de veille chez Opinion Act', 'Chargee de veille chez Opinion Act', 0),
(12, 'DIEUSAERT', 'MANON', '2013-2014', 'manon.dieusaert@live.fr', '-', '-', '-', 'Responsable Investigation Luxe chez WebDrone - SAS', 0),
(14, 'LALUNE', 'ERIC', '2020-2021', 'eric.lalune21@gmail.com', '-', 'Stage de 6 mois', 'Consultant de veille E-reputation et social Media chez IDAOS', '-', 0),
(15, 'MONTILLOT', 'JULIETTE', '2020-2021', 'juliettemontillot36@gmail.com', '-', 'Alternance', 'Analyste en Business intelligence chez FIRST ECO', 'Analyste en Business intelligence chez FIRST ECO', 0),
(16, 'ROUET', 'MARINE', '2015-2016', 'marine.rouet@kamitis.com', '-', '-', '-', 'Archiviste chez Xelians', 0),
(17, 'VERNILLET', 'ALEX', '2015-2016', 'alex.vernillet@hotmail.fr', '-', '-', '-', 'Charge de TD en anglais des affaires', 0),
(18, 'VICKERS', 'CHARLINE', '2013-2014', 'charline.vickers@hotmail.fr', '-', '-', '-', 'Gestionnaire de prets bibliotheque chez Bibliotheque Municipale Mediatheque', 0),
(19, 'VIENNET', 'EMILIE', '2018-2019', 'eviennet@laposte.net', '-', '-', '-', 'travaille dans le domaine de la recherche a l UB', 0),
(20, 'MORAIS', 'JADE', '2020-2021', 'jade.morais@gmail.com', '06 22 52 68 85', 'Alternance', 'Chargee de veille chez WebDrone - SAS', 'Chargee de veille chez WebDrone - SAS', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
