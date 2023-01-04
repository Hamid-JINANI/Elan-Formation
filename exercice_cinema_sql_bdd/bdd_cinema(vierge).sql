-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour cinema_hamid
CREATE DATABASE IF NOT EXISTS `cinema_hamid` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cinema_hamid`;

-- Listage de la structure de la table cinema_hamid. acteur
CREATE TABLE IF NOT EXISTS `acteur` (
  `id_acteur` int(11) NOT NULL AUTO_INCREMENT,
  `id_personne` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_acteur`),
  KEY `FK_acteur_personne` (`id_personne`),
  CONSTRAINT `FK_acteur_personne` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.acteur : ~0 rows (environ)
/*!40000 ALTER TABLE `acteur` DISABLE KEYS */;
/*!40000 ALTER TABLE `acteur` ENABLE KEYS */;

-- Listage de la structure de la table cinema_hamid. appartenir
CREATE TABLE IF NOT EXISTS `appartenir` (
  `id_film` int(11) NOT NULL,
  `id_genre_film` int(11) NOT NULL,
  KEY `FK_appartenir_film_2` (`id_film`),
  KEY `FK_appartenir_genre` (`id_genre_film`),
  CONSTRAINT `FK_appartenir_film_2` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  CONSTRAINT `FK_appartenir_genre` FOREIGN KEY (`id_genre_film`) REFERENCES `genre` (`id_genre_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.appartenir : ~0 rows (environ)
/*!40000 ALTER TABLE `appartenir` DISABLE KEYS */;
/*!40000 ALTER TABLE `appartenir` ENABLE KEYS */;

-- Listage de la structure de la table cinema_hamid. casting
CREATE TABLE IF NOT EXISTS `casting` (
  `id_film` int(11) DEFAULT NULL,
  `id_acteur` int(11) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  KEY `FK_casting_film` (`id_film`),
  KEY `FK_casting_role` (`id_role`),
  KEY `FK_casting_acteur_2` (`id_acteur`),
  CONSTRAINT `FK_casting_acteur_2` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`),
  CONSTRAINT `FK_casting_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  CONSTRAINT `FK_casting_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.casting : ~0 rows (environ)
/*!40000 ALTER TABLE `casting` DISABLE KEYS */;
/*!40000 ALTER TABLE `casting` ENABLE KEYS */;

-- Listage de la structure de la table cinema_hamid. film
CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `titre_film` varchar(250) NOT NULL,
  `date_sortie_fr` date NOT NULL,
  `duree_film` int(11) NOT NULL,
  `synopsis_film` text NOT NULL,
  `affiche_film` varchar(50) NOT NULL,
  `note_film` int(11) NOT NULL,
  `id_realisateur` int(11) NOT NULL,
  PRIMARY KEY (`id_film`),
  KEY `id_realisateur` (`id_realisateur`),
  CONSTRAINT `FK_film_realilsateur` FOREIGN KEY (`id_realisateur`) REFERENCES `realilsateur` (`id_realisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.film : ~0 rows (environ)
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
/*!40000 ALTER TABLE `film` ENABLE KEYS */;

-- Listage de la structure de la table cinema_hamid. genre
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre_film` int(11) NOT NULL AUTO_INCREMENT,
  `type_genre_film` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_genre_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.genre : ~0 rows (environ)
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;

-- Listage de la structure de la table cinema_hamid. personne
CREATE TABLE IF NOT EXISTS `personne` (
  `id_personne` int(11) NOT NULL AUTO_INCREMENT,
  `nom_personne` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prenom_personne` varchar(50) NOT NULL,
  `date_naiss_personne` date NOT NULL,
  `lieu_naiss_personne` varchar(50) NOT NULL,
  `genre_personne` varchar(50) NOT NULL,
  PRIMARY KEY (`id_personne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.personne : ~0 rows (environ)
/*!40000 ALTER TABLE `personne` DISABLE KEYS */;
/*!40000 ALTER TABLE `personne` ENABLE KEYS */;

-- Listage de la structure de la table cinema_hamid. realilsateur
CREATE TABLE IF NOT EXISTS `realilsateur` (
  `id_realisateur` int(11) NOT NULL AUTO_INCREMENT,
  `id_personne` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_realisateur`),
  KEY `FK_realilsateur_cinema_hamid.personne` (`id_personne`),
  CONSTRAINT `FK_realilsateur_cinema_hamid.personne` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.realilsateur : ~0 rows (environ)
/*!40000 ALTER TABLE `realilsateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `realilsateur` ENABLE KEYS */;

-- Listage de la structure de la table cinema_hamid. role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nom_role` varchar(50) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.role : ~0 rows (environ)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
