-- MariaDB dump 10.19  Distrib 10.4.18-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: api
-- ------------------------------------------------------
-- Server version	10.4.18-MariaDB

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`adminid`),
  UNIQUE KEY `adminid_UNIQUE` (`adminid`),
  UNIQUE KEY `userid_UNIQUE` (`userid`),
  KEY `userid_idx` (`userid`),
  CONSTRAINT `adminuserid` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `affiliatemarketer`
--

DROP TABLE IF EXISTS `affiliatemarketer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `affiliatemarketer` (
  `amid` int(11) NOT NULL AUTO_INCREMENT,
  `affiliatelink` varchar(255) NOT NULL,
  `earnings` float NOT NULL DEFAULT 0,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`amid`),
  UNIQUE KEY `amid_UNIQUE` (`amid`),
  UNIQUE KEY `affiliatelink_UNIQUE` (`affiliatelink`),
  UNIQUE KEY `userid_UNIQUE` (`userid`),
  CONSTRAINT `amuserid` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `affiliatemarketer`
--

LOCK TABLES `affiliatemarketer` WRITE;
/*!40000 ALTER TABLE `affiliatemarketer` DISABLE KEYS */;
/*!40000 ALTER TABLE `affiliatemarketer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session` (
  `sessionid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `sessionkey` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sessionid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session`
--

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `stid` int(11) NOT NULL AUTO_INCREMENT,
  `warningcount` int(11) DEFAULT 0,
  `sessioncount` int(11) DEFAULT 0,
  `ratings` int(11) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`stid`),
  UNIQUE KEY `stid_UNIQUE` (`stid`),
  UNIQUE KEY `userid_UNIQUE` (`userid`),
  CONSTRAINT `studentuserid` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (3,0,0,NULL,104);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `subjectid` int(11) NOT NULL,
  `subjectname` varchar(45) NOT NULL,
  `tuid` int(11) NOT NULL,
  PRIMARY KEY (`subjectid`),
  UNIQUE KEY `subjectid_UNIQUE` (`subjectid`),
  UNIQUE KEY `subjectname_UNIQUE` (`subjectname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutor` (
  `tuid` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) DEFAULT 0,
  `sessioncount` int(11) DEFAULT 0,
  `warningcount` int(11) DEFAULT 0,
  `bio` varchar(255) DEFAULT 'I''am a Tutor.',
  `userid` int(11) NOT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `workplace` varchar(45) DEFAULT NULL,
  `occupation` varchar(45) DEFAULT NULL,
  `qualification` varchar(45) DEFAULT NULL,
  `files` varchar(255) DEFAULT NULL,
  `status` varchar(45) DEFAULT 'pending',
  PRIMARY KEY (`tuid`),
  UNIQUE KEY `tuid_UNIQUE` (`tuid`),
  UNIQUE KEY `userid_UNIQUE` (`userid`),
  KEY `userid_idx` (`userid`),
  CONSTRAINT `tutoruserid` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor`
--

LOCK TABLES `tutor` WRITE;
/*!40000 ALTER TABLE `tutor` DISABLE KEYS */;
/*!40000 ALTER TABLE `tutor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `startdate` datetime DEFAULT NULL,
  `phoneno` varchar(15) NOT NULL,
  `city` varchar(45) DEFAULT NULL,
  `role` varchar(2) NOT NULL,
  `photourl` varchar(255) NOT NULL,
  `dob` datetime DEFAULT NULL,
  `subscription` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`userid`,`role`),
  UNIQUE KEY `userid_UNIQUE` (`userid`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `phoneno_UNIQUE` (`phoneno`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (104,'Kesara1','Kesara','Karannagoda','kdkarannagoda@gmail.com','8cf47231c9a9711ec27ee7e193cfbe40373bf9a8e535ec39fb0ebe16e63c205c','2021-10-19 00:00:00','0778813384','Badulla','st','default.webp','1995-02-13 00:00:00',0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-20 17:54:17
