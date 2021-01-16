-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: Kaadu
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (2,'adhnan','$2y$10$c7jYkkbJzyWWHu5/6ahDmuimLhiqldDQuARfJPeEMNw76pviHYPqe','2021-01-08 09:09:22'),(3,'aniruddh','$2y$10$NXeNGnAcRcc/k2j.TCRm8ub0uTmG.WL21y32VWJ7gnGziIINXsdZq','2021-01-08 09:09:52'),(4,'admin','$2y$10$2IM1SXNPUklmw2JXtgEGVukftWNE4PXfwfBc8atzEda3QM/gcmZm.','2021-01-08 09:10:32');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `animalview`
--

DROP TABLE IF EXISTS `animalview`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `animalview` (
  `SPECIES` varchar(50) DEFAULT NULL,
  `COUNT` int DEFAULT NULL,
  `LOCATION` varchar(50) DEFAULT NULL,
  `DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animalview`
--

LOCK TABLES `animalview` WRITE;
/*!40000 ALTER TABLE `animalview` DISABLE KEYS */;
INSERT INTO `animalview` VALUES ('Tiger',4,'KV Power Line','2021-01-15'),('Tiger',2,'Temple  Tank','2021-01-15'),('Leopard',1,'Khymara','2021-01-15'),('Black panther',1,'KV Tank','2021-01-15'),('Elephant',12,'Back Waters','2021-01-15'),('Wild Dog',7,'Barballe','2021-01-15'),('Sloth Bear',1,'M M Road','2021-01-15'),('Brown Fish Owl',1,'Bisalwadi','2021-01-15');
/*!40000 ALTER TABLE `animalview` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `booking` (
  `name` varchar(50) DEFAULT NULL,
  `count` int DEFAULT NULL,
  `room` varchar(20) DEFAULT NULL,
  `nights` int DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking`
--

LOCK TABLES `booking` WRITE;
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` VALUES ('Admin',2,'Maharaja Bunglow',3,'2021-01-11'),('Sanaullah',2,'Tented Cottage',3,'2021-01-15'),('Abhishek',4,'Maharaja Bunglow',4,'2021-01-22'),('Akash',2,'Dormitory',1,'2021-01-22');
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `naturalist`
--

DROP TABLE IF EXISTS `naturalist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `naturalist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `naturalist`
--

LOCK TABLES `naturalist` WRITE;
/*!40000 ALTER TABLE `naturalist` DISABLE KEYS */;
INSERT INTO `naturalist` VALUES (1,'admin','$2y$10$UdzetOkrNrzyxxE/vCs23ewb3xAgVM0rsmQQ9BKZOAJGYU3Uhg4yu','2021-01-08 08:59:21'),(2,'adhnan','$2y$10$g4qORsTmJMcyaCaF6j4wOOriThYUCpgKbfgGIiA8zhVcCCBcL.1sG','2021-01-15 16:37:06'),(3,'aniruddh','$2y$10$l4copaNnPrNojRwD8UORNOX1DQ4Z3VdvsrxumPQ8jtgIfsWyc/RNW','2021-01-15 16:37:28');
/*!40000 ALTER TABLE `naturalist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `review` (
  `user` varchar(20) DEFAULT NULL,
  `review` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` VALUES ('admin','HI wonderful experience'),('Python Manju','Breathtaking Experience\r\n'),('Sanaullah','Never felt so good!!!!!!!!!');
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','$2y$10$8m/LMsW4laV2OkiAm.RJseJUTbSZYTKPEU79B2GkJ2WI2WpwudoZ2','2021-01-08 08:56:59'),(2,'sanaullah','$2y$10$FU4uFC4rCnvPuID4V7fTA.nugHEElY92jR0LsUjskpRmB5RIJ11I2','2021-01-15 16:35:22'),(3,'abhishek','$2y$10$dZQWBtGn/IC0A5sNM5gV2OAFbi518nGXLnjPqF77r2zkRsBw2zRfa','2021-01-15 16:35:45'),(4,'pythonmanju','$2y$10$6bLmKg2ydqWntdm2tqGjAuMp1S15Hc/HLC3oNzK5u8QI.PlyKdrQG','2021-01-15 16:36:17');
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

-- Dump completed on 2021-01-15 23:58:03
