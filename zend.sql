-- MySQL dump 10.13  Distrib 5.5.31, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: zend
-- ------------------------------------------------------
-- Server version	5.5.31-0ubuntu0.12.10.1-log

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
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albums`
--

LOCK TABLES `albums` WRITE;
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;
INSERT INTO `albums` VALUES (2,'Florence + The Machine','Lungs',10003),(3,'Massive Attack','Heligoland',0),(4,'Andre Rieu','Forever Vienna',0),(5,'Sade','Soldier of Love',0),(6,'Sergey','Butvin',0),(8,'ÐÐ»Ð»Ð° ÐŸÑƒÐ³Ð°Ñ‡ÐµÐ²Ð°','ÐœÐ¸Ð»Ð»Ð¸Ð¾Ð½Ñ‹ Ð°Ð»Ñ‹Ñ… Ñ€Ð¾Ð·',0),(9,'Ð”Ð”Ð¢','Ð Ð¾Ð´Ð¸Ð½Ð°',0),(12,'dsds','gdffgfd',2012),(13,'adele','rolling in the deep',2013),(14,'fdsf','fdsf',2323);
/*!40000 ALTER TABLE `albums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `denomination` float NOT NULL,
  `priceMin` float NOT NULL,
  `priceMax` float NOT NULL,
  `notes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'butvin','bbbb@gmail.com',944564546,'growbox',2012,2.44,1.99,2.99,'what a fuck??fsdfsdfdsfsdf'),(2,'butvin','bbbb@gmail.com',944564546,'growbox',2012,2.44,1.99,2.99,'what a fuck??'),(3,'Advanced','bytvin@gmail.com',934901343,'Caar',2001,1.23,2.34,3.05,'fdds sdf ds  sdf sd sdf d'),(4,'Ð˜Ð²Ð²Ð°Ð½','butvin.sergey@gmail.com',934895745,'dd',1988,23432,543543,3443,'reff4rf erf efger'),(5,'serj','last@gmail.com',50,'ping pong',1988,0.83,2,2.99,'oy yeah!!!!!!'),(7,'valerA','valerd20@mail.ru',2147483647,'gass',1988,5.6,43,432,'fdsfsdfdsfsdsdgfsdrfges'),(8,'fdsf','bbbb@gmail.com',2147483647,'Lungs',2013,4334,34,43,'432423423423'),(9,'trre','bbbb@gmail.com',2147483647,'r34r',2012,34,43,43,'not normal'),(10,'Advanced','bbbb@gmail.com',934901343,'ping pong',2012,0.83,2,3.05,'fdfdfdfd'),(11,'admin','root@gmail.com',2147483647,'Caar',2012,0.83,2,243.994,'fdfdfdfdfd'),(12,'admin','root@gmail.com',2147483647,'Caar',2012,0.83,2,243.994,'cd /var/awww'),(13,'admin','root@gmail.com',2147483647,'Caarf',2012,0.83,22,243.994,'dsd fgf dfg df gdfvc');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2013-05-27 18:24:09
