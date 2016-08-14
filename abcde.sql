-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: query_system
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(100) DEFAULT NULL,
  `mid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer`
--

LOCK TABLES `answer` WRITE;
/*!40000 ALTER TABLE `answer` DISABLE KEYS */;
INSERT INTO `answer` VALUES (1,'fgfgfggf',0,3002),(2,'dtydtydtr',0,3004),(3,'dtydtydtr',0,3004),(4,'bkhhkj gnrht',0,3004),(5,'bhhhgjg',0,3004),(6,'hjhgg',0,3005),(7,'jhgjhgh',0,3004),(8,'bhbjhbh',1,3004),(9,'ggg',0,3004),(10,'njknjk',1,3004),(11,'uefg',0,3004),(12,'jfjkdkjgkgglglfjg',1,3004),(13,'uefg',0,3004),(14,'uefg',0,3004),(15,'hkjhfkjbhjfk',0,3004),(16,'bhbjjhh',1,3004),(17,'hkjhfkjbhjfk',0,3004),(18,'mahak',0,3004),(19,'jhfdhdjkkr',1,3004),(20,'jhsghggd',0,3004),(21,'jhghjgj',0,3004),(22,'bhbhjg',0,3004),(23,'mahaklksjlj',1,3004),(24,'hgjjhg',0,3006),(25,'vvbvb',1,3004),(26,'vvbvb',1,3004),(27,'vvbvb',1,3004),(28,'vvbvb',1,3004),(29,'vvbvb',1,3004),(30,'vvbvb',1,3004),(31,'vvbvb',1,3004),(32,'vvbvb',1,3004),(33,'vvbvb',1,3004),(34,'vvbvb',1,3004),(35,'vvbvb',1,3004),(36,'vvbvb',1,3004),(37,'vvbvb',1,3004),(38,'bbbhj',1,3004),(39,'bbbhj',1,3004),(40,'bbbhj',1,3004),(41,'bbbhj',1,3004),(42,'bbbhj',1,3004),(43,'ffbdfbgfnhfnnnnnnnnn',1,3004),(44,'ffbdfbgfnhfnnnnnnnnn',1,3004),(45,'ffbdfbgfnhfnnnnnnnnn',1,3004),(46,'MAHAKKKLLJL',0,3004),(47,'BB MBCV CXNV CN V',0,3004),(48,'HGF JHJHGJHGJ HGJHGJHG JHG',1,3007),(49,'dhsajk hd sakdkashdksajhdksa d sahkdj',0,3007),(50,'sdsahdsaj dgsadgjasd sadgsajdgsajdg asd as dgasgdha',0,3007),(51,'adsadsadasdas d sa das',1,3007),(52,'dsadsa dsadsad sa ',0,3007),(53,'hey hii ',0,3008),(54,'sadadasddsa ddsadsadas hi sir',1,3008),(55,'dsdsa dsadsa',0,3007),(56,'xbjdbckdbvfhbb v',0,3004),(57,'jjbkbb',0,3004);
/*!40000 ALTER TABLE `answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_user`
--

DROP TABLE IF EXISTS `login_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(500) NOT NULL,
  `rid` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `lname` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  KEY `rid` (`rid`),
  CONSTRAINT `login_user_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `roles` (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_user`
--

LOCK TABLES `login_user` WRITE;
/*!40000 ALTER TABLE `login_user` DISABLE KEYS */;
INSERT INTO `login_user` VALUES (10,'admin','mahakjain1010@gmail.com','mercury234',1,'approved',NULL),(11,'mentor1','mentor1@gmail.com','mentor1',2,'approved',NULL),(12,'mentee1','mentee1@gmail.com','mentee1',3,'approved',NULL),(13,'mentor2','mentor2@gmail.com','mentor2',2,'approved',NULL),(15,'mentor3','mentor3@gmail.com','mentor3',2,'approved','sharma'),(18,'qww','mmjiij@gbhbjhb','cdhduh',3,'approved','swwdyued'),(19,'hbjhj','hjhj@hh','hkkkj',3,'approved','gyug'),(20,'njfngdfg','vjbvjvj@jknkb','bhbbbnm',3,'approved','bhkk'),(21,'jjnjkn','bhigi@hhjjhi','hikjnkjh',3,'approved','njnjk'),(22,'dnvjdc','dgvdbgd@jijvdoijbkgfb','fdgsrhh',3,'approved','nchdbh'),(23,'cbgnbgfh','fegfe@ffd','esge',3,'approved','gfhgf'),(24,'cbgnbgfh','fegfe@fbvnm','vfgbfdn',3,'approved','gfhgf'),(25,'charu','charu@gmail.com','charujain',3,'pending','jain'),(26,'pooja','pooh@gmail.com','pooja',3,'pending','pooh'),(27,'bcncbnm','ggghjhj@jfbj','vfvfnvmfnv',3,'approved','cnxjnc'),(28,'Abhishek','abhishek.pareek@innoraft.com','1234',3,'approved','PAreek'),(29,'abhishek','abhi@gmail.com','$MVnTi@p',2,'approved','nfwdc'),(30,'sagar','sagar@gmail.com','J!LN0xzt',2,'approved','hjswg'),(31,'amanjain','aman@gmail.com','UQYhxRDS',2,'approved','unavd'),(32,'ankita','ank@gmail.com','m2sathu0',2,'approved','egwsq'),(33,'hjbxjh52','cbhdbcjhd@dhwb',' cbdbcjdbc',3,'pending','bhjdbcjhd2');
/*!40000 ALTER TABLE `login_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mentee_info`
--

DROP TABLE IF EXISTS `mentee_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mentee_info` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `mid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `lname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mentee_info`
--

LOCK TABLES `mentee_info` WRITE;
/*!40000 ALTER TABLE `mentee_info` DISABLE KEYS */;
INSERT INTO `mentee_info` VALUES (103,'cvv','bxnbx@nn','nkjb','pending',0,0,0,0,'vcv'),(104,'hgjhh','sweetsmartmahak@gmail.com','mercury234','pending',0,0,0,0,'kjnk');
/*!40000 ALTER TABLE `mentee_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menteeapproval`
--

DROP TABLE IF EXISTS `menteeapproval`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menteeapproval` (
  `maid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  PRIMARY KEY (`maid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menteeapproval`
--

LOCK TABLES `menteeapproval` WRITE;
/*!40000 ALTER TABLE `menteeapproval` DISABLE KEYS */;
/*!40000 ALTER TABLE `menteeapproval` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mentor_info`
--

DROP TABLE IF EXISTS `mentor_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mentor_info` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `expertise_area` varchar(100) DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`mid`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`),
  UNIQUE KEY `email_3` (`email`),
  UNIQUE KEY `email_4` (`email`),
  UNIQUE KEY `email_5` (`email`),
  UNIQUE KEY `email_6` (`email`),
  UNIQUE KEY `email_7` (`email`),
  UNIQUE KEY `email_8` (`email`),
  UNIQUE KEY `email_9` (`email`),
  UNIQUE KEY `email_10` (`email`),
  UNIQUE KEY `email_11` (`email`),
  UNIQUE KEY `email_12` (`email`),
  UNIQUE KEY `email_13` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mentor_info`
--

LOCK TABLES `mentor_info` WRITE;
/*!40000 ALTER TABLE `mentor_info` DISABLE KEYS */;
INSERT INTO `mentor_info` VALUES (1,'abhishek','abhi@gmail.com','php','rtu','approved'),(2,'sagar','sagar@gmail.com','drupal','rtu','approved'),(3,'amanjain','aman@gmail.com','designer','rtu','approved'),(4,'ankita','ank@gmail.com','sql','rtu','approved');
/*!40000 ALTER TABLE `mentor_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mentorlogininfo`
--

DROP TABLE IF EXISTS `mentorlogininfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mentorlogininfo` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `mid` int(11) DEFAULT NULL,
  `lname` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mentorlogininfo`
--

LOCK TABLES `mentorlogininfo` WRITE;
/*!40000 ALTER TABLE `mentorlogininfo` DISABLE KEYS */;
INSERT INTO `mentorlogininfo` VALUES ('abhishek','abhi@gmail.com','$MVnTi@p','approved',1,'nfwdc'),('sagar','sagar@gmail.com','J!LN0xzt','approved',2,'hjswg'),('amanjain','aman@gmail.com','UQYhxRDS','approved',3,'unavd'),('ankita','ank@gmail.com','m2sathu0','approved',4,'egwsq');
/*!40000 ALTER TABLE `mentorlogininfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `queries`
--

DROP TABLE IF EXISTS `queries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `queries` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `mid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB AUTO_INCREMENT=3011 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `queries`
--

LOCK TABLES `queries` WRITE;
/*!40000 ALTER TABLE `queries` DISABLE KEYS */;
INSERT INTO `queries` VALUES (3002,'bhmn','hvmmn',0,0,0),(3003,' n,nbbmbn','bbmnbmn',2,0,0),(3004,'vnbnvnbvnbvnbnbvbn','gksjdsfldfdksmv;fdmk;vlmfm.b,.cvbjfnvjkfhkvhfkgvjfkjghvkfjgvnkf',13,12,0),(3005,'what is ut nme','my anme is sn',13,12,0),(3006,'what is your projct','can i gget the link',13,18,0),(3007,'what is my namE??','SDASJKDSA DAS DHSA DHAS DHAS DJHS DJS DASJ',13,28,0),(3008,'dadasdas dsadas sadas ad sa','dhsgjdsa dgsajdgsjdsgdha dsgdjasgd asgdjas',15,28,0),(3009,'juhu','njnjjn',11,12,0),(3010,'what are the universites affiliated','Can get all the list of them',30,12,0);
/*!40000 ALTER TABLE `queries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `rid` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (0,'anonymous user'),(1,'admin'),(2,'mentor'),(3,'mentee');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-14  2:53:59
