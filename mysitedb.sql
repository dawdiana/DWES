-- MariaDB dump 10.19  Distrib 10.11.3-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mysitedb
-- ------------------------------------------------------
-- Server version	10.11.3-MariaDB-1

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
-- Table structure for table `tCanciones`
--

DROP TABLE IF EXISTS `tCanciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tCanciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `url_imagen` varchar(3000) DEFAULT NULL,
  `tduracion` int(11) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tCanciones`
--

LOCK TABLES `tCanciones` WRITE;
/*!40000 ALTER TABLE `tCanciones` DISABLE KEYS */;
INSERT INTO `tCanciones` VALUES
(1,'Dulce introducción al caos','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuBsvT43Rlr-bGdiBbZUQTcEWtfs5luTM-jQ&usqp=CAU',456,'Extremoduro'),
(2,'Why\'d you only call me when you\'re high?','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdbrA1kE-mMo7lL_gUruesXPrzcf_KZWHYgA&usqp=CAU',162,'Arctic Monkeys'),
(3,'This is home','https://static.wikia.nocookie.net/cavetown/images/8/87/Cavetown_-_This_Is_Home.jpg/\nrevision/latest?cb=20220111041722',226,'Cavetown'),
(4,'Killer Queen','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT227OenIqwYcpT7RHe7TNJtuyF_yw05dAlwQ&usqp=CAU',192,'Queen'),
(5,'Mary on a cross','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcfywVfhiIU6telUMr4_C2qH3ZYTDSzi3EIA&usqp=CAU',245,'Ghost');
/*!40000 ALTER TABLE `tCanciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tComentarios`
--

DROP TABLE IF EXISTS `tComentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tComentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(2000) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `cancion_id` int(11) NOT NULL,
  `fechaP` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `cancion_id` (`cancion_id`),
  CONSTRAINT `tComentarios_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `tUsuarios` (`id`),
  CONSTRAINT `tComentarios_ibfk_2` FOREIGN KEY (`cancion_id`) REFERENCES `tCanciones` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tComentarios`
--

LOCK TABLES `tComentarios` WRITE;
/*!40000 ALTER TABLE `tComentarios` DISABLE KEYS */;
INSERT INTO `tComentarios` VALUES
(1,'Me encanta!!',2,4,'2023-10-12'),
(2,'Qué canción más rara',4,5,'2023-10-19'),
(3,'Me encanta que haya canciones que me representen tanto!',1,3,'2023-10-24'),
(4,'Qué arte!!',5,1,'2023-10-08'),
(5,'Mi disco favorito',3,2,'2023-10-18'),
(6,' Hola\r\n ',NULL,3,'2023-10-24'),
(7,' Jaja ',NULL,3,'2023-10-24'),
(8,' A ver si sale\r\n ',NULL,3,'2023-10-24'),
(9,' mierda ',NULL,3,'2023-10-24'),
(10,' Hola',NULL,3,'2023-10-24'),
(11,' kmcldkmsl',NULL,3,'2023-10-24'),
(12,' fbdffgh',NULL,3,'2023-10-24'),
(13,' thfjfyh',NULL,3,'2023-10-24'),
(14,' Ha salido :)\r\n',NULL,3,'2023-10-24'),
(15,' a ver a ver',NULL,3,'2023-10-24'),
(16,' El cantante es súper guapo :P',NULL,2,'2023-10-24'),
(17,' dmkvdslkvmslk',NULL,4,'2023-10-25'),
(18,' :)))))))',NULL,1,'2023-10-25'),
(19,' hola',NULL,1,'2023-11-09');
/*!40000 ALTER TABLE `tComentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tUsuarios`
--

DROP TABLE IF EXISTS `tUsuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tUsuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `contraseña` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tUsuarios`
--

LOCK TABLES `tUsuarios` WRITE;
/*!40000 ALTER TABLE `tUsuarios` DISABLE KEYS */;
INSERT INTO `tUsuarios` VALUES
(1,'Javiercito','López López','jacierLL@gmail.com','admksa21.A'),
(2,'Carmen','Camila Ramón','calimon@gmail.com','mvsklms.123.fsdm'),
(3,'Milanesa','Pollo Frito','milamilan@gmail.com','382keh_s'),
(4,'Antonella','Diva Divina','somoslasdivinas@gmail.com',''),
(5,'Joaquín','Shakin Llakin','shakillaki@gmail.com','NCLD1392.a');
/*!40000 ALTER TABLE `tUsuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-09 12:29:37
