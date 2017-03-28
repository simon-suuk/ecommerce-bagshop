CREATE DATABASE  IF NOT EXISTS `db__adwoba_bota` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db__adwoba_bota`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: db__adwoba_bota
-- ------------------------------------------------------
-- Server version	5.5.52-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bags`
--

DROP TABLE IF EXISTS `bags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bags` (
  `bno` int(11) NOT NULL AUTO_INCREMENT,
  `types` varchar(45) NOT NULL,
  PRIMARY KEY (`bno`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bags`
--

LOCK TABLES `bags` WRITE;
/*!40000 ALTER TABLE `bags` DISABLE KEYS */;
INSERT INTO `bags` VALUES (1,'sports'),(2,'travelling'),(3,'ladies\' bags'),(4,'mens\' bags'),(5,'schoolbags'),(6,'purse'),(7,'accessories');
/*!40000 ALTER TABLE `bags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `cno` bigint(5) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `zip` decimal(5,1) NOT NULL,
  `phone` char(12) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`cno`),
  KEY `zip` (`zip`),
  CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`zip`) REFERENCES `zipcodes` (`zip`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (16,'fred','Boateng','America',1.0,'0257896412','',''),(17,'Charles','Walker','east ',2.0,'0214569873','',''),(18,'Abigail','Nartey','north',3.0,'0214587952','','');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_type`
--

DROP TABLE IF EXISTS `emp_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_type`
--

LOCK TABLES `emp_type` WRITE;
/*!40000 ALTER TABLE `emp_type` DISABLE KEYS */;
INSERT INTO `emp_type` VALUES (1,'administrator'),(2,'Regular');
/*!40000 ALTER TABLE `emp_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `eno` bigint(4) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `zip` decimal(5,1) NOT NULL,
  `hdate` date NOT NULL,
  `username` varchar(45) NOT NULL,
  `pword` varchar(45) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`eno`),
  KEY `zip_idx` (`zip`),
  KEY `id_idx` (`id`),
  CONSTRAINT `zip` FOREIGN KEY (`zip`) REFERENCES `zipcodes` (`zip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `emp_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (3,'Adwoba','Bota',1.0,'2016-01-01','abota','abota',1),(6,'mawuli','kwofie',1.0,'0000-00-00','','d41d8cd98f00b204e9800998ecf8427e',2),(7,'Ama','serwaa',2.0,'0000-00-00','','d41d8cd98f00b204e9800998ecf8427e',2);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `odetails`
--

DROP TABLE IF EXISTS `odetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `odetails` (
  `ono` bigint(5) NOT NULL,
  `pno` bigint(5) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`ono`,`pno`),
  KEY `pno` (`pno`),
  CONSTRAINT `odetails_ibfk_1` FOREIGN KEY (`ono`) REFERENCES `orders` (`ono`),
  CONSTRAINT `odetails_ibfk_2` FOREIGN KEY (`pno`) REFERENCES `parts` (`pno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `odetails`
--

LOCK TABLES `odetails` WRITE;
/*!40000 ALTER TABLE `odetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `odetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `ono` bigint(5) NOT NULL AUTO_INCREMENT,
  `cno` bigint(5) NOT NULL,
  `eno` bigint(5) NOT NULL,
  `received` date NOT NULL,
  `shipped` date NOT NULL,
  PRIMARY KEY (`ono`),
  KEY `cno` (`cno`),
  KEY `eno` (`eno`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cno`) REFERENCES `customers` (`cno`),
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`eno`) REFERENCES `employees` (`eno`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (2,18,3,'2017-03-06','2017-03-22'),(3,18,3,'2017-03-06','2017-03-09'),(4,17,3,'2017-03-06','2017-03-10'),(5,18,3,'2017-03-06','2017-03-10');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parts`
--

DROP TABLE IF EXISTS `parts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parts` (
  `pno` bigint(5) NOT NULL AUTO_INCREMENT,
  `pname` varchar(30) NOT NULL,
  `qno` varchar(30) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `bno` int(11) NOT NULL,
  `olevel` int(11) NOT NULL,
  PRIMARY KEY (`pno`),
  KEY `bno_idx` (`bno`),
  CONSTRAINT `bno` FOREIGN KEY (`bno`) REFERENCES `bags` (`bno`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parts`
--

LOCK TABLES `parts` WRITE;
/*!40000 ALTER TABLE `parts` DISABLE KEYS */;
INSERT INTO `parts` VALUES (1,'golf','45',100.00,1,2),(2,'bowling','50',100.00,1,2),(3,'athletic-tennis','50',100.00,1,2),(6,'duffel','50',150.00,2,2),(7,'ski&snowboard','46',150.00,2,2),(8,'travel_suitcase','50',200.00,2,2),(9,'trolley_travel','50',200.00,2,2),(10,'hobo','50',70.00,3,1),(11,'satchel','50',70.00,3,1),(12,'tote','50',70.00,3,1),(14,'leather-briefcase','33',70.00,4,1),(15,'suitcase','50',70.00,4,1),(16,'leather_bags','49',70.00,4,1),(17,'backpack','50',45.00,5,5),(18,'rucksack','50',45.00,5,5),(20,'schoolbag','50',45.00,5,5),(21,'wristlet','50',70.00,6,1),(22,'muff','50',70.00,6,1),(23,'clutch','50',70.00,6,1),(25,'baguette','50',70.00,6,1),(26,'minaudiere','50',70.00,6,1),(27,'cosmetic_case','50',35.00,7,2),(28,'diaper_bags','50',35.00,7,2),(29,'shopping_bags','50',35.00,7,2);
/*!40000 ALTER TABLE `parts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) DEFAULT NULL,
  `datespan` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES (98,'41.79.97.5','2017-03-20 00:00:00'),(99,'41.79.97.5','2017-03-20 00:00:00'),(100,'41.79.97.5','2017-03-20 00:00:00'),(101,'41.79.97.5','2017-03-20 00:00:00'),(102,'41.79.97.5','2017-03-20 00:00:00'),(103,'41.79.97.5','2017-03-20 00:00:00'),(104,'41.79.97.5','2017-03-20 00:00:00'),(105,'41.79.97.5','2017-03-20 00:00:00'),(106,'41.79.97.5','2017-03-20 00:00:00'),(107,'41.79.97.5','2017-03-20 00:00:00'),(108,'41.79.97.5','2017-03-20 00:00:00'),(109,'41.79.97.5','2017-03-20 00:00:00'),(110,'127.0.0.1','2017-03-20 00:00:00'),(111,'41.79.97.5','2017-03-20 00:00:00'),(112,'41.79.97.5','2017-03-20 00:00:00'),(113,'41.79.97.5','2017-03-20 00:00:00'),(114,'41.79.97.5','2017-03-20 00:00:00'),(115,'41.79.97.5','2017-03-20 00:00:00'),(116,'41.79.97.5','2017-03-20 00:00:00'),(117,'127.0.0.1','2017-03-20 00:00:00'),(118,'127.0.0.1','2017-03-20 00:00:00'),(119,'127.0.0.1','2017-03-20 00:00:00'),(120,'127.0.0.1','2017-03-20 00:00:00'),(121,'41.79.97.5','2017-03-20 00:00:00'),(122,'41.189.163.60','2017-03-20 00:00:00'),(123,'41.79.97.5','2017-03-20 00:00:00'),(124,'41.79.97.5','2017-03-20 00:00:00'),(125,'41.79.97.5','2017-03-20 00:00:00');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zipcodes`
--

DROP TABLE IF EXISTS `zipcodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zipcodes` (
  `zip` decimal(5,1) NOT NULL,
  `city` varchar(30) NOT NULL,
  PRIMARY KEY (`zip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zipcodes`
--

LOCK TABLES `zipcodes` WRITE;
/*!40000 ALTER TABLE `zipcodes` DISABLE KEYS */;
INSERT INTO `zipcodes` VALUES (1.0,'Accra'),(2.0,'Kumasi'),(3.0,'Obuasi'),(4.0,'Takoradi'),(5.0,'Tema'),(6.0,'Koforidua'),(7.0,'volta');
/*!40000 ALTER TABLE `zipcodes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'db__adwoba_bota'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-27 13:34:18
