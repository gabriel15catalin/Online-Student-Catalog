-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: GABRIEL
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `absente`
--

DROP TABLE IF EXISTS `absente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `absente` (
  `id` int(10) unsigned NOT NULL,
  `disciplina` varchar(50) NOT NULL,
  `semestru` int(10) unsigned NOT NULL,
  `data` varchar(30) NOT NULL,
  `absenta` enum('motivata','nemotivata') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `absente`
--

LOCK TABLES `absente` WRITE;
/*!40000 ALTER TABLE `absente` DISABLE KEYS */;
INSERT INTO `absente` VALUES (5,'Educație fizică',2,'2021-05-16','motivata'),(8,'Chimie',1,'2020-10-10','nemotivata'),(9,'Română',1,'2020-09-18','nemotivata'),(9,'Geografie',1,'2020-11-03','nemotivata'),(10,'Istorie',2,'2021-02-23','motivata');
/*!40000 ALTER TABLE `absente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elevi`
--

DROP TABLE IF EXISTS `elevi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elevi` (
  `id` int(10) unsigned NOT NULL,
  `nume` varchar(20) NOT NULL,
  `prenume` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elevi`
--

LOCK TABLES `elevi` WRITE;
/*!40000 ALTER TABLE `elevi` DISABLE KEYS */;
INSERT INTO `elevi` VALUES (1,'Popescu','Adrian'),(2,'Iordache','Razvan'),(3,'Ionita','Denisa'),(4,'Ionescu','Alexandra'),(5,'Nicolae','Marian'),(6,'Constantin','Vlad'),(7,'Stroe','Emilia'),(8,'Balan','Oana-Andreea'),(9,'Dinu','Ionut'),(10,'Munteanu','Robert-Cristian'),(11,'Voicu','Ioana'),(2,'',''),(2,'',''),(2,'','');
/*!40000 ALTER TABLE `elevi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `note`
--

DROP TABLE IF EXISTS `note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `note` (
  `id` int(10) unsigned NOT NULL,
  `disciplina` varchar(50) NOT NULL,
  `semestru` int(10) unsigned NOT NULL,
  `nota` int(10) unsigned NOT NULL,
  `data` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `note`
--

LOCK TABLES `note` WRITE;
/*!40000 ALTER TABLE `note` DISABLE KEYS */;
INSERT INTO `note` VALUES (1,'Romana',1,10,'2020-04-12'),(1,'Engleza',1,10,'2020-10-20'),(1,'Chimie',2,7,'2020-03-27'),(4,'Franceză',2,9,'2021-05-13'),(7,'Franceză',2,6,'2021-03-11'),(3,'Informatică',1,7,'2020-09-27');
/*!40000 ALTER TABLE `note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'zanfirag123','$2y$10$lZJjn9LUa0v1zEu83..tpOSGsD6RVPaaAj9FhBau1tl7USvSzBovK','2021-05-11 10:40:45');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-16 14:00:08
