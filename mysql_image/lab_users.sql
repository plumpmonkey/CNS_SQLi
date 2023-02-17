-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: HR-DB
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `credentials` (
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `EID` varchar(20) DEFAULT NULL,
  `Salary` int DEFAULT NULL,
  `Birth` varchar(20) DEFAULT NULL,
  `NationalInsuranceNo` varchar(20) DEFAULT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Email` varchar(300) DEFAULT NULL,
  `Password` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `credentials` WRITE;
/*!40000 ALTER TABLE `credentials` DISABLE KEYS */;
INSERT INTO `credentials` VALUES  (1,'Ian','10',80000,'10/07','NB12746325B','','','245a58a5dc42397caf57bc06c2c0afd2'),
                                  (2,'Phil','20',75000,'20/04','DA83762163V','','','9ec75097ce44559e94e404d6a2d395ab'),
                                  (3,'Jon','30',40000,'01/08','JC834645277B','','','48bc893fcbc0a33ed3ad2cf2d5d57cfe'),
                                  (4,'Alan','40',90000,'11/01','EF2747556298A','','','ec8b63c05f999a15a8c8567002a560a8'),
                                  (5,'Thomas','50',55000,'11/03','OP63624164B','','','2042101ac1f6e7741bfe43f3672e6d7c'),
                                  (6,'Adam','60',50000,'23/02','JY2734827C','','','7efd721c8bfff2937c66235f2d0dbac1'),
                                  (7,'Admin','99',null,'','','','','c418f34f261efe1473465ade95bfc22c');
/*!40000 ALTER TABLE `credentials` ENABLE KEYS */;
UNLOCK TABLES;

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `dept_no` char(4) NOT NULL,
  `dept_name` varchar(40) NOT NULL,
  PRIMARY KEY (`dept_no`),
  UNIQUE KEY `dept_name` (`dept_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES ('d009','Cyber Security'),('d005','Creative Tech'),('d002','Business Computing'),('d003','Computer Science'),('d001','Executive Admin');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;
