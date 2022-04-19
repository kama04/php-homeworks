-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: films_for_evening
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

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
-- Table structure for table `actors`
--

DROP TABLE IF EXISTS `actors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actors` (
  `aid` int NOT NULL,
  `name` char(20) NOT NULL,
  `age` date DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actors`
--

LOCK TABLES `actors` WRITE;
/*!40000 ALTER TABLE `actors` DISABLE KEYS */;
INSERT INTO `actors` VALUES (1,'Майкл Кларк Дункан','1957-12-10'),(2,'Тим Роббинс','1958-10-16'),(3,'Франсуа Клюзе','1955-09-21'),(4,'Киану Ривз','1964-09-02'),(5,'Маколей Калкин','1980-08-24'),(6,'Том Холланд','1996-06-01'),(7,'Тэрон Эджертон','1989-11-10');
/*!40000 ALTER TABLE `actors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cinema`
--

DROP TABLE IF EXISTS `cinema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cinema` (
  `cid` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `year` year DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `genre` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cinema`
--

LOCK TABLES `cinema` WRITE;
/*!40000 ALTER TABLE `cinema` DISABLE KEYS */;
INSERT INTO `cinema` VALUES (1,'Зеленая миля',1999,'США','фантастика'),(2,'Побег из Шоушенка',1994,'США','драма'),(3,'1+1',2011,'Франция','драма'),(4,'Матрица',1999,'Франция','Научная фантастика'),(5,'Один дома',1990,'США','комедия'),(6,'Человек-паук: Нет пути домой',2021,'США','супергеройский боевик'),(7,'Kingsman: Секретная служба',2015,'США','боевик');
/*!40000 ALTER TABLE `cinema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filmmaker`
--

DROP TABLE IF EXISTS `filmmaker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `filmmaker` (
  `fid` int NOT NULL,
  `f_name` char(20) NOT NULL,
  `is_famous` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filmmaker`
--

LOCK TABLES `filmmaker` WRITE;
/*!40000 ALTER TABLE `filmmaker` DISABLE KEYS */;
INSERT INTO `filmmaker` VALUES (1,'Фрэнк Дарабонт',1),(2,'Оливье Накаш',0),(3,'Лана Вачовски',1),(4,'Крис Коламбус',0),(5,'Джон Уоттс',1),(6,'Мэттью Вон',0);
/*!40000 ALTER TABLE `filmmaker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ratio`
--

DROP TABLE IF EXISTS `ratio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ratio` (
  `cinema_id` int DEFAULT NULL,
  `filmmaker_id` int DEFAULT NULL,
  `actor_id` int DEFAULT NULL,
  KEY `cinema_id` (`cinema_id`),
  KEY `filmmaker_id` (`filmmaker_id`),
  KEY `actor_id` (`actor_id`),
  CONSTRAINT `ratio_ibfk_1` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`cid`),
  CONSTRAINT `ratio_ibfk_2` FOREIGN KEY (`filmmaker_id`) REFERENCES `filmmaker` (`fid`),
  CONSTRAINT `ratio_ibfk_3` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ratio`
--

LOCK TABLES `ratio` WRITE;
/*!40000 ALTER TABLE `ratio` DISABLE KEYS */;
INSERT INTO `ratio` VALUES (1,1,1),(2,1,2),(3,2,3),(4,3,4),(5,4,5),(6,5,6),(7,6,7);
/*!40000 ALTER TABLE `ratio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-18 13:00:38
