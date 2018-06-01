-- MySQL dump 10.16  Distrib 10.2.15-MariaDB, for osx10.13 (x86_64)
--
-- Host: localhost    Database: gsb
-- ------------------------------------------------------
-- Server version	10.2.15-MariaDB

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
-- Table structure for table `calendar_events`
--

DROP TABLE IF EXISTS `calendar_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calendar_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creator` int(11) NOT NULL,
  `all_day` tinyint(1) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calendar_events`
--

LOCK TABLES `calendar_events` WRITE;
/*!40000 ALTER TABLE `calendar_events` DISABLE KEYS */;
/*!40000 ALTER TABLE `calendar_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clinic_id` int(11) NOT NULL,
  `speciality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctor`
--

LOCK TABLES `doctor` WRITE;
/*!40000 ALTER TABLE `doctor` DISABLE KEYS */;
/*!40000 ALTER TABLE `doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expense_report`
--

DROP TABLE IF EXISTS `expense_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expense_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `totalPrice` double NOT NULL,
  `attachement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statut` int(11) NOT NULL,
  `refundedPortion` double DEFAULT NULL,
  `lastStatutUpdate` date DEFAULT NULL,
  `statutUpdateBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_280A6917E3C61F9` (`owner_id`),
  CONSTRAINT `FK_280A6917E3C61F9` FOREIGN KEY (`owner_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expense_report`
--

LOCK TABLES `expense_report` WRITE;
/*!40000 ALTER TABLE `expense_report` DISABLE KEYS */;
/*!40000 ALTER TABLE `expense_report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manufacturer`
--

DROP TABLE IF EXISTS `manufacturer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(2048) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manufacturer`
--

LOCK TABLES `manufacturer` WRITE;
/*!40000 ALTER TABLE `manufacturer` DISABLE KEYS */;
INSERT INTO `manufacturer` VALUES (4,'3M Santé','Boulevard de l\\\'Oise','95006','France','Cergy Pontoise Cedex','0130318282',NULL),(5,'BAYER Santé','13 rue Jean Jaurès','92807','France','Puteaux Cedex','0149065600',NULL),(6,'BIOCODEX','7 avenue Gallieni','94257','France','Gentilly Cedex','0141243000',NULL),(7,'BIORGA','8 rue Laugier','75017','France','Paris','0156331111',NULL),(8,'BOIRON','20 rue de la Libération, BP 45','69110','France','Sainte-Foy-lès-Lyon','0472164000',NULL),(9,'Cardinal Health France','74 rue Principale','67930','France','Beinheim','0388633131',NULL),(10,'CHEMINEAU','93 route de Monnaie','37210','France','Vouvray','0247527030',NULL),(11,'CODEPHARMA','80-82 Rue Gallieni','92100','France','Boulogne-Billancourt','0141316635',NULL),(12,'CRINEX','3 rue de Gentilly, BP 337','92541','France','Montrouge Cedex','0142532851',NULL),(13,'DECLEOR','31 rue Henri-Rochefort','75017','France','Paris','0172767373',NULL),(14,'DELPHARM','Le Petit Paris','91731','France','Brétigny sur Orge Cedex','0169887900',NULL),(15,'ETHYPHARM','194 Bureaux de la Colline','92213','France','Saint-Cloud','0141121720',NULL),(16,'GENÉVRIER','280 rue de Goa, BP 47','06901','France','Sophia-Antipolis Cedex','0492911560',NULL);
/*!40000 ALTER TABLE `manufacturer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` VALUES ('20180528181558'),('20180528181642'),('20180528182424'),('20180528182557');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dose` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D34A04ADA23B42D` (`manufacturer_id`),
  KEY `IDX_D34A04AD64C19C1` (`category`),
  CONSTRAINT `FK_D34A04AD64C19C1` FOREIGN KEY (`category`) REFERENCES `product_category` (`id`),
  CONSTRAINT `FK_D34A04ADA23B42D` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_category`
--

LOCK TABLES `product_category` WRITE;
/*!40000 ALTER TABLE `product_category` DISABLE KEYS */;
INSERT INTO `product_category` VALUES (1,'Analgésiques et Anti-inflammatoires'),(2,'Antibiotiques et Antibactériens'),(3,'Antituberculeux et Antilépreux'),(4,'Antimycosiques'),(5,'Antiviraux'),(6,'Cardiologie'),(7,'Dermatologie'),(8,'Diététique et Nutrition'),(9,'Endocrinologie'),(10,'Gastro-entérologie et hépatologie'),(11,'Gynécologie obstétrique et contraception'),(12,'Hématologie'),(13,'Immunologie Allergologie'),(14,'Médicaments des troubles métaboliques'),(15,'Neurologie'),(16,'Ophtalmologie'),(17,'Oto-rhino-laryngologie'),(18,'Parasitologie'),(19,'Pneumologie'),(20,'Psychiatrie'),(21,'Réanimation toxicologie'),(22,'Rhumatologie'),(23,'Stomatologie'),(24,'Urologie'),(25,'Vaccins, immunoglobulines, sérothérapie'),(26,'Cancérologie'),(27,'Anesthésiques locaux');
/*!40000 ALTER TABLE `product_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `memberOf` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8D93D64928671D40` (`memberOf`),
  CONSTRAINT `FK_8D93D64928671D40` FOREIGN KEY (`memberOf`) REFERENCES `manufacturer` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (33,'Sebastien','Mercier','pro.sebastienmercier@gmail.com','1993-11-01','s.mercier','$2y$13$q4Yx8H9SHd8o.39pzYNbTurzVYVWXOvaNl5ecPkeX274sGCsOcybq','[\"ROLE_ADMIN\"]',NULL,NULL),(34,'Atman','FARES','afares@gsb.com','1977-05-04','a.fares','$2y$13$OKC3JZJoULht/KzHRDfJHuFx3GHdzK8oyjQlJIDQnn/n8XmptK9xK','[\"ROLE_MANAGER\"]',NULL,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_calendar_events`
--

DROP TABLE IF EXISTS `user_calendar_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_calendar_events` (
  `user_id` int(11) NOT NULL,
  `calendar_events_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`calendar_events_id`),
  KEY `IDX_EB3D2399A76ED395` (`user_id`),
  KEY `IDX_EB3D2399DE069B2F` (`calendar_events_id`),
  CONSTRAINT `FK_EB3D2399A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EB3D2399DE069B2F` FOREIGN KEY (`calendar_events_id`) REFERENCES `calendar_events` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_calendar_events`
--

LOCK TABLES `user_calendar_events` WRITE;
/*!40000 ALTER TABLE `user_calendar_events` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_calendar_events` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-01 22:59:00
