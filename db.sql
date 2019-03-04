-- MySQL dump 10.13  Distrib 8.0.15, for osx10.14 (x86_64)
--
-- Host: localhost    Database: ingagedb
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `google_plus` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'asdf@g.kl','Help People in flooded area','2019-05-21','Lot of people helpless due to flood in southern province','Galle','https://www.facebook.com/erandraj','https://twitter.com/era_ndra','www.gmail.com','https://getbootstrap.com/docs/4.0/components/list-group/'),(2,'asdf@g.kl','Clean Colombo','2019-12-12','Drains are blocked and colombo is the city that has highest dengue deaths','Colombo','https://www.facebook.com/erandraj','https://twitter.com/era_ndra','www.gmail.com','https://getbootstrap.com/docs/4.0/components/list-group/');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `post` varchar(200) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (13,'asdf@g.kl','Erandra Jayasundara ','Roads in Colombo city has polluted with man thrown garbage.','2019-03-03 20:50:24','01219.jpg'),(14,'asdf@g.kl','Erandra Jayasundara ','Floods and Galle. People are helpless','2019-03-03 20:52:22','flood_colombo.jpg'),(15,'asdf@g.kl','Erandra Jayasundara ','Illegal timber mill in sinharaja','2019-03-03 21:02:39','timber.jpg');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fName` varchar(50) DEFAULT NULL,
  `lName` varchar(50) DEFAULT NULL,
  `uName` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Erandra','Jayasundara','erandra','erandrajayasundara@gmail.com','Male','b37e0eec43049a49d6d22843dd7b1280','1993-05-21'),(2,'Madhavi','Jayarathne','madhij','upalakshi@gmail.com','Female','b37e0eec43049a49d6d22843dd7b1280','1995-08-26'),(3,'Erandra','Jayasundara','chickazone','asdf@g.kl','Male','d1205746e3192ca4641605d9f67cc897','1993-12-19');
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

-- Dump completed on 2019-03-04 21:08:23
