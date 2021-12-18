-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: academico
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aluno`
--

DROP TABLE IF EXISTS `aluno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `aluno` (
  `id_aluno` int NOT NULL AUTO_INCREMENT,
  `nome_aluno` varchar(100) NOT NULL,
  `email_aluno` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_aluno`),
  UNIQUE KEY `id_aluno` (`id_aluno`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aluno`
--

LOCK TABLES `aluno` WRITE;
/*!40000 ALTER TABLE `aluno` DISABLE KEYS */;
INSERT INTO `aluno` VALUES (1,'NijuNey','eyakobowit0@intel.com'),(2,'Fraser','fofairy1@skyrock.com'),(3,'Jamey','jlyddiatt2@imdb.com'),(4,'Amargo','achristoforou3@aboutads.info'),(5,'Cloris','ccasella4@bloglovin.com'),(6,'Rod','rarthan5@weebly.com'),(8,'Esther','ewoodford7@blogspot.com'),(9,'Mike','mvear8@wikipedia.org'),(10,'Vonni','vcruikshanks9@pinterest.com'),(11,'Teodorico','theindricka@feedburner.com'),(12,'Gabriela','gsainesb@geocities.jp'),(13,'Bertie','bbarrouxc@weibo.com'),(14,'Malinde','mnelthorpd@woothemes.com'),(15,'Tanya','tasife@google.es'),(16,'Alvera','asinclarf@google.co.uk'),(17,'Dana','dramsellg@woothemes.com'),(18,'Iseabal','izukermanh@paypal.com'),(19,'Jill','jfrancisi@ovh.net'),(20,'Larisa','lkeepj@google.nl'),(21,'Dorothea','dnoirk@archive.org'),(22,'Jamill','jnarramorl@ebay.com'),(23,'Syman','schalfontm@eventbrite.com'),(24,'Hedda','hginnanen@tripadvisor.com'),(25,'Eben','edowningo@boston.com'),(26,'Sabina','sleftlyp@jiathis.com'),(27,'Gusty','gnurseq@clickbank.net'),(28,'Martica','mmacgahyr@friendfeed.com'),(29,'Nicolina','nbernhardssons@statcounter.com');
/*!40000 ALTER TABLE `aluno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disciplina`
--

DROP TABLE IF EXISTS `disciplina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `disciplina` (
  `id_disciplina` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id_disciplina`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disciplina`
--

LOCK TABLES `disciplina` WRITE;
/*!40000 ALTER TABLE `disciplina` DISABLE KEYS */;
INSERT INTO `disciplina` VALUES (1,'Desenvolvimento de Sistemas I'),(2,'Desenvolvimento de Sistemas II'),(3,'Desenvolvimento de Sistemas III'),(4,'Engenharia de Software I'),(5,'Engenharia de Software II'),(6,'Algoritmos e Programação I'),(7,'Algoritmos e Programação II'),(8,'Estruturas de Dados');
/*!40000 ALTER TABLE `disciplina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inscricao`
--

DROP TABLE IF EXISTS `inscricao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inscricao` (
  `id_inscricao` int NOT NULL AUTO_INCREMENT,
  `aluno` int NOT NULL,
  `turma` int NOT NULL,
  PRIMARY KEY (`id_inscricao`),
  UNIQUE KEY `id_inscricao_UNIQUE` (`id_inscricao`),
  KEY `fk_inscricao_1_idx` (`aluno`),
  KEY `fk_inscricao_2_idx` (`turma`),
  CONSTRAINT `fk_inscricao_1` FOREIGN KEY (`aluno`) REFERENCES `aluno` (`id_aluno`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `fk_inscricao_2` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscricao`
--

LOCK TABLES `inscricao` WRITE;
/*!40000 ALTER TABLE `inscricao` DISABLE KEYS */;
INSERT INTO `inscricao` VALUES (2,1,3);
/*!40000 ALTER TABLE `inscricao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turma`
--

DROP TABLE IF EXISTS `turma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `turma` (
  `id_turma` int NOT NULL AUTO_INCREMENT,
  `id_disciplina` int NOT NULL,
  `ano` int NOT NULL,
  `semestre` int DEFAULT NULL,
  PRIMARY KEY (`id_turma`),
  KEY `fk_turma_1_idx` (`id_disciplina`),
  CONSTRAINT `fk_turma_1` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id_disciplina`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turma`
--

LOCK TABLES `turma` WRITE;
/*!40000 ALTER TABLE `turma` DISABLE KEYS */;
INSERT INTO `turma` VALUES (1,1,2021,2),(2,2,2021,2),(3,3,2021,2),(4,4,2021,2),(5,5,2021,2);
/*!40000 ALTER TABLE `turma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (7,'admin@admin.com','$2y$10$kYXn79yMyPRiXWpJs.l9pOedVGuCDTB9XElOSO2/QmkGITTiTLlXm');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-18 19:53:27
