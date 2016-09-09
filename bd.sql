-- MySQL dump 10.13  Distrib 5.7.13, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: papp
-- ------------------------------------------------------
-- Server version	5.7.13-0ubuntu0.16.04.2

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
-- Table structure for table `bills`
--

DROP TABLE IF EXISTS `bills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  `amount_temp` decimal(9,2) NOT NULL,
  `start_date` date NOT NULL,
  `completed` int(11) NOT NULL DEFAULT '0',
  `notes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bills_customer_id_foreign` (`customer_id`),
  CONSTRAINT `bills_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bills`
--

LOCK TABLES `bills` WRITE;
/*!40000 ALTER TABLE `bills` DISABLE KEYS */;
INSERT INTO `bills` VALUES (1,1,1000.00,500.00,'2016-09-08',0,'2016/09/08','2016-09-08 05:00:00','2016-09-08 05:00:00'),(2,2,1000.00,1000.00,'2016-09-09',0,'Primer Prestamo','2016-09-09 22:43:33','2016-09-09 22:43:33'),(3,9,15000.00,15000.00,'2016-09-09',0,'Primer Prestamo','2016-09-09 22:48:44','2016-09-09 22:48:44'),(4,9,15000.00,15000.00,'2016-09-09',0,'Primer Prestamo','2016-09-09 22:49:28','2016-09-09 22:49:28');
/*!40000 ALTER TABLE `bills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comissions`
--

DROP TABLE IF EXISTS `comissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `bill_id` int(10) unsigned NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comissions_user_id_foreign` (`user_id`),
  KEY `comissions_bill_id_foreign` (`bill_id`),
  CONSTRAINT `comissions_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`),
  CONSTRAINT `comissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comissions`
--

LOCK TABLES `comissions` WRITE;
/*!40000 ALTER TABLE `comissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `comissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suburb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cel_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `completed_bill` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `customers_staff_id_foreign` (`staff_id`),
  CONSTRAINT `customers_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,1,'Estefania','Torres','Treviño','Abasolo Norte 67','Michoacán de Ocampo','Jacona','Jacona de Plancarte Centro','59800','5164378','3511234567','2016-09-06 23:34:01','2016-09-06 23:34:01',1),(2,1,'Estefania','Torres','Treviño','Abasolo Norte 67','Michoacán de Ocampo','Jacona','Jacona de Plancarte Centro','59800','5164378','3511234567','2016-09-06 23:34:30','2016-09-06 23:34:30',1),(3,1,'Estefania','Torres','Treviño','Abasolo Norte 67','Michoacán de Ocampo','Jacona','Jacona de Plancarte Centro','59800','5164378','3511234567','2016-09-06 23:34:49','2016-09-06 23:34:49',0),(4,1,'Estefania','Torres','Treviño','Abasolo Norte 67','Michoacán de Ocampo','Jacona','Jacona de Plancarte Centro','59800','5164378','3511234567','2016-09-06 23:35:10','2016-09-06 23:35:10',0),(5,1,'Mario','Badillo','Algo','sdjfhol','Jalisco','San Juan de los Lagos','La Martinica','47020','3511451236','1451236789','2016-09-06 23:37:47','2016-09-06 23:37:47',0),(6,1,'Mario','Badillo','Algo','sdjfhol','Jalisco','San Juan de los Lagos','La Martinica','47020','3511451236','1451236789','2016-09-06 23:38:23','2016-09-06 23:38:23',0),(7,1,'Mario','Badillo','Algo','sdjfhol','Jalisco','San Juan de los Lagos','La Martinica','47020','3511451236','1451236789','2016-09-06 23:41:22','2016-09-06 23:41:22',0),(8,1,'Carlos','Guzman','Ramirez','General Coronado 623','Jalisco','Guadalajara','Villaseñor','44600','1234567890','1234567890','2016-09-07 20:37:41','2016-09-07 20:37:41',0),(9,1,'Edgar','Hernandez','Barajas','djkfhlasjd','Jalisco','Guadalajara','Insurgentes 3a Secc','44820','333333333','3333333333','2016-09-08 22:49:46','2016-09-08 22:49:46',1);
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deposits`
--

DROP TABLE IF EXISTS `deposits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deposits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bill_id` int(10) unsigned NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  `start_date` date NOT NULL,
  `notes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `deposits_bill_id_foreign` (`bill_id`),
  CONSTRAINT `deposits_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deposits`
--

LOCK TABLES `deposits` WRITE;
/*!40000 ALTER TABLE `deposits` DISABLE KEYS */;
INSERT INTO `deposits` VALUES (1,1,100.00,'2016-09-09','-','2016-09-09 23:51:31','2016-09-09 23:51:31'),(2,1,100.00,'2016-09-09','-','2016-09-09 23:53:19','2016-09-09 23:53:19'),(3,1,100.00,'2016-09-09','-','2016-09-09 23:57:01','2016-09-09 23:57:01'),(4,1,100.00,'2016-09-09','-','2016-09-09 23:57:40','2016-09-09 23:57:40'),(5,1,100.00,'2016-09-09','-','2016-09-10 04:04:05','2016-09-10 04:04:05');
/*!40000 ALTER TABLE `deposits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endorsements`
--

DROP TABLE IF EXISTS `endorsements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `endorsements` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suburb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cel_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `endorsements_customer_id_foreign` (`customer_id`),
  CONSTRAINT `endorsements_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endorsements`
--

LOCK TABLES `endorsements` WRITE;
/*!40000 ALTER TABLE `endorsements` DISABLE KEYS */;
/*!40000 ALTER TABLE `endorsements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_09_03_144521_create_customers_table',1),('2016_09_03_163420_create_bills_table',1),('2016_09_03_165615_create_endorsements_table',1),('2016_09_03_170056_create_deposits_table',1),('2016_09_03_174400_create_comissions_table',1),('2016_09_03_180654_create_zones_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suburb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cel_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zone_id` int(10) unsigned NOT NULL,
  `type` enum('Staff','Supervisor') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Luis','Torres','Treviño','Abasolo Norte','Michoacan','Jacona','centro','59800','5164378','3511433666','luisgot123@gmail.com','$2y$10$LCPWtcqQZXv9hgJFfEqF/e4kxNEqu3Wo9oy/I1fQDTqF3v9JNSUcm',0,'Staff','iMXFwB5x9McVHfdYX5Z7umvCO2LEi5uZTYHrp7d8L2ldFpMJS9onUiIYDp02','2016-09-05 23:51:15','2016-09-06 02:19:53');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zones`
--

DROP TABLE IF EXISTS `zones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `zone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zones`
--

LOCK TABLES `zones` WRITE;
/*!40000 ALTER TABLE `zones` DISABLE KEYS */;
/*!40000 ALTER TABLE `zones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-09 18:16:52
