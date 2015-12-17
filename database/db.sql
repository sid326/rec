-- MySQL dump 10.13  Distrib 5.6.21, for Win32 (x86)
--
-- Host: localhost    Database: userdetails
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `ad`
--

DROP TABLE IF EXISTS `ad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ad` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `qu_desc` varchar(300) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `true_ans` varchar(2) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ad`
--

LOCK TABLES `ad` WRITE;
/*!40000 ALTER TABLE `ad` DISABLE KEYS */;
/*!40000 ALTER TABLE `ad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(13) NOT NULL,
  `domain` varchar(30) NOT NULL,
  `branch` varchar(13) NOT NULL,
  `year` varchar(13) NOT NULL,
  `reg_no` varchar(13) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'mehul jain','webdevelopment','cse','2','223232323'),(2,'sumit mehra','appdevelopment','cse','2','223232323'),(3,'suvojit','webdesigning','cse','2','223232323'),(4,'shantnu','vfx','cse','2','223232323'),(5,'praneeth','graphicdesigning','cse','2','223232323'),(11,'rajesh','webdevelopment','cse','2','232323233'),(12,'madhur','webdevelopment','cse','3','23343233'),(13,'harish','webdevelopment','cse','3','23344333'),(14,'ayush','graphicdesigning','cse','3','23232323232');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = cp850 */ ;
/*!50003 SET character_set_results = cp850 */ ;
/*!50003 SET collation_connection  = cp850_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adminlogin` (
  `name` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL DEFAULT 'abc',
  `domain` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminlogin`
--

LOCK TABLES `adminlogin` WRITE;
/*!40000 ALTER TABLE `adminlogin` DISABLE KEYS */;
INSERT INTO `adminlogin` VALUES ('mehul jain','abc','webdevelopment'),('sumit mehra','abc','appdevelopment'),('suvojit','abc','webdesigning'),('shantnu','abc','vfx'),('praneeth','abc','graphicdesigning'),('rajesh','abc','webdevelopment'),('madhur','abc','webdevelopment'),('harish','abc','webdevelopment'),('ayush','abc','graphicdesigning');
/*!40000 ALTER TABLE `adminlogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gd`
--

DROP TABLE IF EXISTS `gd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gd` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `qu_desc` varchar(300) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `true_ans` varchar(2) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gd`
--

LOCK TABLES `gd` WRITE;
/*!40000 ALTER TABLE `gd` DISABLE KEYS */;
/*!40000 ALTER TABLE `gd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `user_id` varchar(13) NOT NULL,
  `password` varchar(130) NOT NULL,
  `chk` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('azsxwdefr','25f9e794323b453885f5181f1b624d0b',0),('qazwsxedc','c0b9963cca3816a39eff2a947a21cf0b',0),('qwwdndsdsd','25f9e794323b453885f5181f1b624d0b',0),('sdfwertyu','ad198a36c4a282982870e3e2e65ae3c6',0),('ssdsdedeeeee','25f9e794323b453885f5181f1b624d0b',0);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recruit`
--

DROP TABLE IF EXISTS `recruit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recruit` (
  `fname` varchar(40) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `reg_no` varchar(15) NOT NULL DEFAULT '',
  `email` varchar(50) DEFAULT NULL,
  `mobile_no` bigint(10) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `department` varchar(10) DEFAULT NULL,
  `year` int(3) DEFAULT NULL,
  `applyfor` varchar(130) DEFAULT NULL,
  `knowweb` varchar(120) DEFAULT NULL,
  `joinweb` varchar(120) DEFAULT NULL,
  `exceptweb` varchar(120) DEFAULT NULL,
  `user_id` varchar(13) NOT NULL,
  `password` varchar(130) NOT NULL,
  PRIMARY KEY (`reg_no`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `mobile_no` (`mobile_no`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruit`
--

LOCK TABLES `recruit` WRITE;
/*!40000 ALTER TABLE `recruit` DISABLE KEYS */;
INSERT INTO `recruit` VALUES ('naved','seth','12121212121','naved@gmail.com',9962778940,'cse','cse',1,'webdevelopmentwebdesigningvfx','sddddddddd','dddddddddddddddddd','dddddddddddddddddddddd','ssdsdedeeeee','25f9e794323b453885f5181f1b624d0b'),('nilesh','mehta','1221232332322','nil@gmail.com',2323112121,'cse','cse',3,'webdevelopmentwebdesigninggraphicdesigning','sxxsxxxxxx','xxxxxxxxxxxxxx','sxxxxxxxx','qwwdndsdsd','25f9e794323b453885f5181f1b624d0b'),('rajesh','jain','12222222222','mehuljain160@gmail.com',1233333333,'cse','cse',4,'webdevelopmentwebdesigninggraphicdesigningvfxappdevelopment','sdddddddddddddddddd','ddddddddddddddd','dddddddddddddd','qazwsxedc','c0b9963cca3816a39eff2a947a21cf0b'),('ram','singh','21322323434','ram@gmail.com',2232122122,'cse','cse',2,'webdevelopmentwebdesigninggraphicdesigningvfxappdevelopment','sddddd','dddddddddddddddd','ddddddddddd','sdfwertyu','ad198a36c4a282982870e3e2e65ae3c6'),('navneet','singh','2332332323','nav@gmail.com',2312545454,'cse','cse',1,'webdevelopmentwebdesigninggraphicdesigningvfxappdevelopment','dsssssssssssss','dsssssssssssssss','sssssssssssss','azsxwdefr','25f9e794323b453885f5181f1b624d0b');
/*!40000 ALTER TABLE `recruit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `score`
--

DROP TABLE IF EXISTS `score`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `score` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `domain` varchar(20) DEFAULT NULL,
  `score` int(3) DEFAULT NULL,
  `test_attempt` int(3) DEFAULT NULL,
  `user` varchar(13) DEFAULT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `def` (`user`),
  CONSTRAINT `def` FOREIGN KEY (`user`) REFERENCES `login` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `score`
--

LOCK TABLES `score` WRITE;
/*!40000 ALTER TABLE `score` DISABLE KEYS */;
INSERT INTO `score` VALUES (16,'webdevelopment',0,NULL,'qazwsxedc'),(17,'webdesigning',8,NULL,'qazwsxedc'),(18,'vfx',0,NULL,'qazwsxedc'),(19,'graphicdesigning',NULL,NULL,'qazwsxedc'),(20,'appdevelopment',NULL,NULL,'qazwsxedc'),(21,'webdevelopment',NULL,NULL,'sdfwertyu'),(22,'webdesigning',NULL,NULL,'sdfwertyu'),(23,'vfx',NULL,NULL,'sdfwertyu'),(24,'graphicdesigning',NULL,NULL,'sdfwertyu'),(25,'appdevelopment',NULL,NULL,'sdfwertyu'),(26,'webdevelopment',NULL,NULL,'azsxwdefr'),(27,'webdesigning',NULL,NULL,'azsxwdefr'),(28,'vfx',NULL,NULL,'azsxwdefr'),(29,'graphicdesigning',NULL,NULL,'azsxwdefr'),(30,'appdevelopment',NULL,NULL,'azsxwdefr'),(31,'webdevelopment',NULL,NULL,'qwwdndsdsd'),(32,'webdesigning',NULL,NULL,'qwwdndsdsd'),(33,'graphicdesigning',NULL,NULL,'qwwdndsdsd'),(34,'webdevelopment',NULL,NULL,'ssdsdedeeeee'),(35,'webdesigning',NULL,NULL,'ssdsdedeeeee'),(36,'vfx',NULL,NULL,'ssdsdedeeeee');
/*!40000 ALTER TABLE `score` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verify`
--

DROP TABLE IF EXISTS `verify`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verify` (
  `token` char(40) NOT NULL,
  `username` varchar(45) NOT NULL,
  `tstamp` int(10) unsigned NOT NULL,
  PRIMARY KEY (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verify`
--

LOCK TABLES `verify` WRITE;
/*!40000 ALTER TABLE `verify` DISABLE KEYS */;
/*!40000 ALTER TABLE `verify` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vf`
--

DROP TABLE IF EXISTS `vf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vf` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `qu_desc` varchar(300) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `true_ans` varchar(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vf`
--

LOCK TABLES `vf` WRITE;
/*!40000 ALTER TABLE `vf` DISABLE KEYS */;
INSERT INTO `vf` VALUES (1,'In general which of the following functions should be faster for sending information to a file?','int printf(const char *format, ...);','int fprintf(FILE *stream, const char *format, ...);','ssize_t write(int fd, const void *buf, size_t count);','int scanf(const char *format, ...);','b'),(2,'How many bytes of memory are used to store a long long data type?','32 bytes','4 bytes','8 bytes',' 4 bytes','a'),(3,'Which of the following is the correct way to declare a function pointer named pMyFunc that returns an int and has an int parameter?','*(int pMyFunc(int));','int ()(int)* pMyFunc;',' int (*pMyFunc)(int);','(int *pMyFunc int);','a'),(4,'The benefits of a standard relational language include which of the following?','Reduced training costs','Applications are not needed.','All of the above','Increased dependence on a single vendor','c'),(5,'When mapping a regular entity into a relation which of the following is true?','One relation is created.','Two relations are created.','Three relations are created.','Four relations are created.','b'),(6,'An oval represents which of the following in an ERD?','Attribute','Entity','Optional One','Relationship','a'),(7,'SQL stands for','Structured Query Language','Sequential Query Language','Structured Question Language','Sequential Question Language','d'),(8,'ODBC core SQL grammar contains which of the following?:','Stored procedures only','Both 1 and 3 above are contained in the ODBC core SQL.','INSERT, UPDATE, DELETE only','Full SELECT (includes subqueries) only','c'),(9,'Which of the following refers to an entity in which the identifier of one entity includes the identifier of another entity?','Weak entity','Strong entity','ID-dependent entity','ID-independent entity','b'),(10,'Which of the following situation requires the use of ID-dependent entities?','Association relationships only','Multivalued attributes only','Archetype/instance relationships only','All of the above use ID dependent entities','d'),(11,'The ODBC core API consists of which of the following functions?','Commit or rollback transactions only','Connect to data sources only','Both 1 and 3 above are in the OBDC core API.','Connect to data sources with driver-specific information only','a'),(12,'A server-side extension is needed to do what?','Allow a request from a client to access the database.','Allow a request from a client to access a HTML-formatted page','Allow a request from a client to access Web pages.',' All of the above.','c');
/*!40000 ALTER TABLE `vf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wb`
--

DROP TABLE IF EXISTS `wb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wb` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `qu_desc` varchar(300) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `true_ans` varchar(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wb`
--

LOCK TABLES `wb` WRITE;
/*!40000 ALTER TABLE `wb` DISABLE KEYS */;
INSERT INTO `wb` VALUES (1,'In general which of the following functions should be faster for sending information to a file?','int printf(const char *format, ...);','int fprintf(FILE *stream, const char *format, ...);','ssize_t write(int fd, const void *buf, size_t count);','int scanf(const char *format, ...);','b'),(2,'How many bytes of memory are used to store a long long data type?','32 bytes','4 bytes','8 bytes',' 4 bytes','a'),(3,'Which of the following is the correct way to declare a function pointer named pMyFunc that returns an int and has an int parameter?','*(int pMyFunc(int));','int ()(int)* pMyFunc;',' int (*pMyFunc)(int);','(int *pMyFunc int);','a'),(4,'The benefits of a standard relational language include which of the following?','Reduced training costs','Applications are not needed.','All of the above','Increased dependence on a single vendor','c'),(5,'When mapping a regular entity into a relation which of the following is true?','One relation is created.','Two relations are created.','Three relations are created.','Four relations are created.','b'),(6,'An oval represents which of the following in an ERD?','Attribute','Entity','Optional One','Relationship','a'),(7,'SQL stands for','Structured Query Language','Sequential Query Language','Structured Question Language','Sequential Question Language','d'),(8,'ODBC core SQL grammar contains which of the following?:','Stored procedures only','Both 1 and 3 above are contained in the ODBC core SQL.','INSERT, UPDATE, DELETE only','Full SELECT (includes subqueries) only','c'),(9,'Which of the following refers to an entity in which the identifier of one entity includes the identifier of another entity?','Weak entity','Strong entity','ID-dependent entity','ID-independent entity','b'),(10,'Which of the following situation requires the use of ID-dependent entities?','Association relationships only','Multivalued attributes only','Archetype/instance relationships only','All of the above use ID dependent entities','d'),(11,'The ODBC core API consists of which of the following functions?','Commit or rollback transactions only','Connect to data sources only','Both 1 and 3 above are in the OBDC core API.','Connect to data sources with driver-specific information only','a'),(12,'A server-side extension is needed to do what?','Allow a request from a client to access the database.','Allow a request from a client to access a HTML-formatted page','Allow a request from a client to access Web pages.',' All of the above.','c');
/*!40000 ALTER TABLE `wb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wd`
--

DROP TABLE IF EXISTS `wd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wd` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `qu_desc` varchar(300) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `true_ans` varchar(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wd`
--

LOCK TABLES `wd` WRITE;
/*!40000 ALTER TABLE `wd` DISABLE KEYS */;
INSERT INTO `wd` VALUES (1,'A server-side extension is needed to do what?',' Allow a request from a client to access the database.','Allow a request from a client to access a HTML-formatted page','Allow a request from a client to access Web pages.','All of the above.','b'),(2,'2 2','rtrrrrerrerr','gfgfg1','errteretetretr','tyddydyttyd','jh');
/*!40000 ALTER TABLE `wd` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-17 14:16:30
