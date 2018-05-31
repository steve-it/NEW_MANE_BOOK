-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: newbook
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Memoires','2018-02-15 18:34:27','2018-02-15 18:34:27'),(2,'Revues et Periodiques','2018-02-15 18:34:27','2018-02-15 18:34:27'),(3,'Textes et Decrets','2018-02-15 18:34:27','2018-02-15 18:34:27'),(4,'Livres','2018-02-15 18:34:27','2018-02-15 18:34:27');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consultations`
--

DROP TABLE IF EXISTS `consultations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consultations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `DateConsultations` date NOT NULL,
  `documents_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `consultations_documents_id_foreign` (`documents_id`),
  CONSTRAINT `consultations_documents_id_foreign` FOREIGN KEY (`documents_id`) REFERENCES `documents` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consultations`
--

LOCK TABLES `consultations` WRITE;
/*!40000 ALTER TABLE `consultations` DISABLE KEYS */;
INSERT INTO `consultations` VALUES (1,'2018-02-16 11:38:05','2018-02-16 11:38:05','2018-02-16',2);
/*!40000 ALTER TABLE `consultations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `TitreDocuments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsbnDocuments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IssnDocuments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CoteDocuments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumeroEntresDocuments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AnneePublicationDocuments` int(11) DEFAULT NULL,
  `EditionsDocuments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EditeurDocuments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NbreExemplaireEdition` int(11) DEFAULT NULL,
  `DateEditionDocuments` int(11) DEFAULT NULL,
  `LieuEditionDocuments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaisonEditionDocuments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LongueurEditionDocuments` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AdresseMaisonEdition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IllustrationDocuments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PeriodiciteDocuments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ReliureDocuments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbre_emprunt` int(11) DEFAULT NULL,
  `Section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Auteur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pagination` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumeroDecret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories_id` int(10) unsigned DEFAULT NULL,
  `sousdomaines_id` int(10) unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documents_categories_id_foreign` (`categories_id`),
  KEY `documents_sousdomaines_id_foreign` (`sousdomaines_id`),
  CONSTRAINT `documents_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `documents_sousdomaines_id_foreign` FOREIGN KEY (`sousdomaines_id`) REFERENCES `sousdomaines` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` VALUES (1,'2018-02-15 18:37:35','2018-02-15 18:37:35','Lutte contre la corruption dans les services publiques',NULL,NULL,'123. MEP','32323',2008,NULL,'Editeur Clé Yaoundé',1,2008,'Yaoundé',NULL,'12',NULL,'il en coule',NULL,'reliure','leg',NULL,'AUDIETEURS DE JUSTICE JUDICIAIRE','Manga Elom Paul','45 pages',NULL,1,NULL,NULL),(2,'2018-02-16 08:40:55','2018-03-20 14:43:59','Econmie et Societé : Sénegal, le travail dans ses etats','978-2-7535-5131-2',NULL,'338.9.663 BAU','3148',2016,'IRD','PUR',1,2016,'Rennes','Juste une note','24','Rennes','il en coule',NULL,'brochet','don',0,NULL,'Eveline Bauman',NULL,NULL,4,9,NULL),(3,'2018-02-16 11:16:24','2018-03-20 12:13:49','Marketing Management','978-2-35745-285-5',NULL,'381.3 KOT','3164',2015,'Donne les bases du management du marketing','Nouveau Horizon',1,2015,'Paris',NULL,'24','Paris','il en coule',NULL,'brochet','don',NULL,NULL,'Kotler Keller manceau','877 P',NULL,4,7,NULL),(4,'2018-02-16 12:12:15','2018-02-16 12:12:15','L\' ANARCHIE EXPLIQUEE A MA FILLE','978-2-35104-072-0',NULL,'808.87 PIP','3175',2014,'Atelier de création libertaire','Sicilia punto',1,2014,'LYON',NULL,'18','paris','il',NULL,'brochet','don',NULL,NULL,'PIPPO GURRIER','77P',NULL,4,10,NULL),(5,'2018-02-16 12:32:47','2018-02-16 12:32:47','Casamance A quand la paix','978-2-343-10426-3',NULL,'966.3 BAS','3152',2016,'L\'Harmattan','L\'Harmattan',1,2016,'Paris',NULL,'24','paris','il',NULL,'brochet','don',NULL,NULL,'René Capain BASSENE','274P',NULL,4,11,NULL),(6,'2018-02-19 07:43:38','2018-02-19 07:43:38','Developpement Durable et Haute Qualité environnementale','978-2-81860233-1',NULL,'338.9CHE','3159',2012,'Territorial',NULL,1,2012,'VOIRON',NULL,'30','paris','sans il',NULL,'brochet','don',NULL,NULL,'François CHENE ,Chritian le Grand','233',NULL,4,15,NULL),(7,'2018-02-19 07:52:37','2018-02-19 07:56:37','L\'Economie Congolaise de 2007à 2016:persistance des facteurs d\'enlisement en RDC','978-2-343-10566-6',NULL,'338.9.672 LUK','3150',2016,'L\'Harmattan','etudes africaines',1,NULL,'Paris',NULL,'24','paris','sans il',NULL,'brochet','don',NULL,NULL,'Gaston MUTAMBA LUKUSA',NULL,NULL,4,16,NULL),(8,'2018-02-19 08:15:56','2018-02-19 08:20:09','Le code de l\'indigenat ou le fondement des etats autocratiques en afrique francophone','978-2-343-09945-3',NULL,'321.5.6 DOH','3151',2017,'L\'Harmattan','etudes africaines',1,2017,'Paris',NULL,'24',NULL,'sans il',NULL,'brochet','don',NULL,NULL,'Gilbert DOHO',NULL,NULL,4,17,NULL),(9,'2018-02-19 08:28:35','2018-02-19 08:32:45','L\'ISLAM ou EXTREMISME d\'ou vient l\'amalgame?','9782359301892',NULL,'297.7 MUS','3178',2016,'Les points sur les i','MISE AU POINT',1,2016,'Paris',NULL,'21','Paris','sans il',NULL,'brochet','don',NULL,NULL,'MUSTAPHA Cherif',NULL,NULL,4,18,NULL),(10,'2018-02-19 09:17:39','2018-02-19 09:17:39','LaSorcelerie dans la mentalité Africaine','978-2-3-343-11072-1',NULL,'133.4 SEKE','3174',2016,'L\'Harmattan',NULL,1,2016,'Paris',NULL,'22','Paris','sans il',NULL,'brochet','don',NULL,NULL,'Boniface BAOULE SEKE','133',NULL,4,20,NULL),(11,'2018-02-16 16:24:31','2018-02-16 16:24:31','Petit Glossaire de l\'art préhistorique au paleotique','2-910550-46-X',NULL,'930.709.01 ROU','3146',1998,'confluence',NULL,1,1998,'Toulouse',NULL,'21','toulouse','sans il',NULL,'brochet','don',NULL,NULL,'Alain ROUSOT','62',NULL,4,21,NULL),(12,'2018-02-16 16:35:34','2018-02-16 16:35:34','Livres et manuel scolaires au Cameroun: la derive mercantiliste','978-2-84936-089-9',NULL,'371.32.671 ETO','3145',2016,'PUY','PUY',1,2016,'yaoundé',NULL,'20','Yaoundé',NULL,NULL,'brochet','don',NULL,NULL,'Marcelin VOUNDA ETOA','102',NULL,4,22,NULL),(13,'2018-02-16 16:43:29','2018-02-16 16:43:29','Les Humaités classiques Africaines pour les enfants: apprendre en s\'amusant de 4 à 14 ans','2-911372-87-5',NULL,'907.2 OMO','3142',2006,'MENAIBUBUC','MENAIBUBUC',1,2006,'Paris',NULL,'28','Paris','il en coule',NULL,'brochet','don',NULL,NULL,'jean phillipe Omotunde','93',NULL,4,23,NULL),(14,'2018-02-16 16:51:37','2018-02-16 16:51:37','NATIONS NEGRES  ET CULTURES','978-2-7087-0688-0',NULL,'809.3 CHE','3132',2017,'Présence Africaine','Présence Africaine',1,2017,'Mayenne',NULL,'18','Mayenne',NULL,NULL,'brochet','don',NULL,NULL,'CHEIKH  ANTA DIOP','564',NULL,4,24,NULL),(15,'2018-02-16 17:01:21','2018-02-16 17:01:21','VILLE CRUELLE','978-2-7087-0262-2',NULL,'809.3.671 EZA','3141',1971,'CPI',NULL,1,1971,'Paris',NULL,'18',NULL,'sans il',NULL,'brochet','don',NULL,NULL,'EZA BOTO','224',NULL,4,25,NULL),(16,'2018-02-16 17:08:51','2018-02-16 17:08:51','Le neo- colonialisme:','978-2-7087-094-8',NULL,'325.32 KWA','3156',1965,'presence Africaine',NULL,1,1965,'Londre',NULL,'18','londre','sans il',NULL,'brochet','don',NULL,NULL,'KWAME NKRUMAH','269',NULL,4,26,NULL),(17,'2018-02-16 18:58:59','2018-02-16 18:58:59','Plon: les sens de l\'histoire(1833-1962)','978-2-7535-4368-3',NULL,'909.8 SOR','3168',2015,'PUR',NULL,1,2015,'Renne',NULL,'24','Renne','sans il',NULL,'brochet','don',NULL,NULL,'Patricia SOREL','326',NULL,4,27,NULL),(18,'2018-02-16 19:08:48','2018-02-16 19:08:48','KAMERUN ! une Guerre cachée aux orgines de la francafrique 1948-1971','978-9956-473656',NULL,'909.82.671.DEL','3162',2012,'ifrikiya','ifrikiya',1,2012,'yaoundé',NULL,'24','Yaoundé','sans il',NULL,'brochet','don',NULL,NULL,'Thomas Deltombe, manuel DOMERGUE,Jacob TATSITSA','742',NULL,4,28,NULL),(19,'2018-02-16 19:16:01','2018-02-16 19:16:01','Finance d\'entreprise','978-2-35745-281-7',NULL,'338.8 DEM','3161',2014,'Nouveaux horizons','Nouveau Horizon',1,2014,'Paris',NULL,'24','paris','sans il',NULL,'brochet','don',NULL,NULL,'Peter DEMAZO,Joathan BERK et all','1129',NULL,4,29,NULL),(20,'2018-02-16 19:21:22','2018-02-16 19:21:22','L\'Economie de la culture','978-2-275-0478-7',NULL,'330.126.MAR','3182',2016,'Lextenso','Lextenso',1,2016,'Paris',NULL,'21',NULL,'sans il',NULL,'brochet','don',NULL,NULL,'Olivier MOREL MAROGER','190',NULL,4,30,NULL),(21,'2018-02-16 19:34:33','2018-02-16 14:58:51','Laproduction autrement','2-7384-1502-4',NULL,'338.01 ALE','3170',1994,'L\'Harmattan','L\'Harmattan',1,1994,'Paris',NULL,'18','paris','sans il',NULL,'brochet','don',NULL,NULL,'DOMINIQUE ALET, Bernard ROUX','125',NULL,4,31,'2018-02-16 14:58:51'),(22,'2018-02-16 14:52:56','2018-02-16 14:52:56','la productivité Autrement','2-7384-1502-4',NULL,'338.01 ALE','3170',1994,'L\'Harmattan','L\'Harmattan',1,1994,'Paris',NULL,'24','paris','sans il',NULL,'brochet','don',NULL,NULL,'DOMINIQUE ALET, Bernard ROUX','125',NULL,4,31,NULL),(23,'2018-02-16 15:11:36','2018-02-16 15:11:36','La grande désillusion','978-2-253-15538-6',NULL,'337.3.9 STI','3185',2003,NULL,'Fayard',1,2003,NULL,NULL,'18','paris','sans il',NULL,'brochet','don',NULL,NULL,'Joseph E. STIGLITZ','407',NULL,4,32,NULL),(24,'2018-02-16 20:19:45','2018-02-16 20:19:45','Quand le capitalisme  perd la tete','978-2-253-10931-0',NULL,'330.122 STI','3173',2005,'Fayard','le livre de poche',1,2013,'Paris',NULL,'18','paris','sans il',NULL,'brochet','don',NULL,NULL,'Joseph E. STIGLITZ','571',NULL,4,1,NULL),(25,'2018-02-16 20:34:31','2018-02-16 20:34:31','La mise en route des territoires dans le monde ARABE','978-2-343-10396-9',NULL,'796.78 BOU','3167',2016,'L\'Harmattan',NULL,1,2016,'Paris',NULL,'24','Paris','sans il',NULL,'brochet','don',NULL,NULL,'BOUALEM KADRI et DJAMAL BENHACINE','329 P',NULL,4,34,NULL),(26,'2018-02-16 20:50:45','2018-02-16 20:50:45','Le Francs CFA instrument de sous developpement','978-2-336-00278-1',NULL,'332.41 PRA','3171',2012,'L\'Harmattan','L\'Harmattan',1,2012,'Paris',NULL,'24','Paris','sans il',NULL,'brochet','don',NULL,NULL,'PRAO YAO Séraphin','446P',NULL,4,35,NULL),(27,'2018-02-16 20:56:06','2018-02-16 20:56:06','MONNAIE BANQUE ET Marchés financier','978-2-35745-227-5',NULL,'332.4 MIS','3153',2013,'Nouveaux horizons',NULL,1,2013,'Paris',NULL,'24','paris','sans il',NULL,'brochet','don',NULL,NULL,'MISHKIN Frederic','1041P',NULL,4,36,NULL),(28,'2018-02-16 21:02:52','2018-02-16 21:02:52','Lechemin de la décolonisation de l\'empire Français 1936-1956',NULL,NULL,'909.82.44 AGE','3169',1986,'CNRS','IHTP',1,1986,'Paris',NULL,'24',NULL,'sans il',NULL,'reliure','don',NULL,NULL,'Charles Robert Ageron','564 P',NULL,4,37,NULL),(29,'2018-02-16 21:10:50','2018-02-16 21:10:50','DROIT Administratif Général','2-7076-1267-7',NULL,'342.06 CHA','3183',2001,'Lextension','lextension',1,2001,'Paris',NULL,'22','paris',NULL,NULL,'brochet','don',NULL,NULL,'RENE CHAPUS','797P',NULL,4,38,NULL),(30,'2018-02-16 21:22:54','2018-02-16 21:22:54','Les MICRO-ETATS EUROPEENS : ETUDE HISTORIQUE JURIDIQUE ET FISCALE','978-2343-10015-9',NULL,'321.08 BLE','3163',2016,'L\'Harmattan','LOGIQUE JURIDIQUE',1,2016,'Paris',NULL,'24','paris','sans il',NULL,'brochet','don',NULL,NULL,'Pierre Alexis BLEVIN','615P',NULL,4,39,NULL),(31,'2018-02-16 21:27:20','2018-02-16 21:27:20','Le Pauvre Christ de Bomba','978-2-7087-0568-5',NULL,'809.3.671 MON','3140',1991,'presence Africaine','CPI',1,1991,'Paris',NULL,'18','Paris','sans il',NULL,'brochet','don',NULL,NULL,'MONGO BETI','349P',NULL,4,40,NULL),(32,'2018-02-16 21:36:11','2018-02-16 21:36:11','De l\'aerodynamique à l\'hydrolque:un siécle d\'étude sur modèles réduit','9782364930933',NULL,'607.2 BOI','3154',2014,'cépaduès',NULL,1,2014,'Toulouse',NULL,'24','toulouse','sans il',NULL,'brochet','don',NULL,NULL,'Henri Claude BOISSON ,Pierre CRAUSSE','182 P',NULL,4,41,NULL),(33,'2018-02-16 21:45:47','2018-02-16 21:45:47','Finaces d\'entreprise','978-2-35745-281-7',NULL,'332.6 BER','3161',2014,'Nouveau Horizon','Nouveau Horizon',1,2014,'Paris',NULL,'24','paris','sans il',NULL,'brochet','don',NULL,NULL,'Jonathan BERK et Peter DE MARZO','1129 P',NULL,4,42,NULL),(34,'2018-02-16 21:53:29','2018-02-16 21:53:29','INTRODUCTION A LA MICROECONOMIE','978-2-35745266-4',NULL,'338.5 VAR','3166',2014,'Nouveaux horizons','de boeck',1,2014,'Paris',NULL,'24','Paris','sans il',NULL,'brochet','don',NULL,NULL,'Varian Hal R.','889P',NULL,4,43,NULL),(35,'2018-02-16 14:56:17','2018-02-16 14:56:17','Fabien Eboussi Boulaga : la philosophie du Muntu','978-2-8111-02173',NULL,'153.4 KOM','3157',2009,'karthala','karthala',1,2009,'clamecy',NULL,'28',NULL,NULL,NULL,'brochet','don',NULL,NULL,'Amboise Kom','310',NULL,4,45,NULL),(36,'2018-02-16 15:18:48','2018-02-16 15:18:48','Je veux savoir... c\'est quoi le coran',NULL,NULL,'297.1 REH','3143',2016,'Dar Albouraq',NULL,1,2016,'beyrouth',NULL,'20',NULL,'il en coule',NULL,'brochet','don',NULL,NULL,'Irene REHAD','45',NULL,4,46,NULL),(37,'2018-04-01 12:37:37','2018-04-01 12:37:37','Le JIHAD Antithèse du Terrorisme','978-1-02250-172-9',NULL,'303.62 HAM','3139',2016,NULL,'albouraq',1,NULL,'Paris','l\'islam au présent','19','paris','sans il',NULL,'brochet','don',NULL,NULL,'DIDIER Hamouneau','108',NULL,4,47,NULL),(38,'2018-04-01 12:48:28','2018-04-01 12:48:28','ARABE Literaire de poche','978-2-7005-0443-9','2 109-6643','492.7 HAN','3180',2011,'ASSIMIL','Chennevères',1,2011,'Paris','collection langue de poche','15','Paris',NULL,NULL,'brochet','don',NULL,NULL,'Hans LEU','197',NULL,4,48,NULL),(39,'2018-04-01 12:56:48','2018-04-01 12:56:48','POWER POINT en Fiches','978-2-84425-977-6',NULL,'004.CHE','3131',2014,'EYROLLES','EYROLLES',1,NULL,'Schraag','Niveau debutant','24','paris','il',NULL,'brochet','don',NULL,NULL,'Jean Michel Chenet','64',NULL,4,49,NULL),(40,'2018-04-01 13:05:32','2018-04-01 13:05:32','Ce  que la science fait à la vie','978-2-7355-0847-1',NULL,'111.1.ADE','3184',2016,'CTHS',NULL,1,2016,'Paris','Orientation et methodes N0 31','22',NULL,NULL,NULL,NULL,'don',NULL,NULL,'Nicolas Adell et Jerome LAMY','415',NULL,4,50,NULL),(41,'2018-04-01 13:19:54','2018-04-01 13:19:54','MARKETING','979-2--35745-285-5',NULL,'658.84 KOT','3164',2015,'Nouveaux Horizons',NULL,1,2015,'Paris','15eme édition','24','paris','il en coule',NULL,'brochet','don',NULL,NULL,'Kotler Phillip, Keller Kevin , Delphine MANCEAU','877',NULL,4,51,NULL),(42,'2018-04-01 13:27:39','2018-04-01 13:27:39','Ibn Sina: le prince des savants','979-10-10-2250-176-7',NULL,'709.02 LEP','3181',2017,'Albouraq','Albouraq',1,NULL,'beyrouth','à la rencontre de ...','22','paris',NULL,NULL,NULL,'don',NULL,NULL,'Loic LEPART','130',NULL,4,52,NULL),(43,'2018-04-01 13:38:19','2018-04-01 13:38:19','Sciences économiques et techniques Commerciales : 2nd BAC PRO','978-2-8444-914-6',NULL,'373.246.DUB','3158',2013,'educargri',NULL,1,2013,'Dijon','conseil vente','27','paris','il en coule',NULL,'brochet','don',NULL,NULL,'E DerkanDubois, F Rancon, A Ribnet et all','139',NULL,4,53,NULL),(44,'2018-04-01 13:47:11','2018-04-01 13:47:11','Chretiens et Musulmans à la Renaissance',NULL,NULL,'291.7.BEN','3144',1998,'CESR','HONORE CHAMPION',1,1998,'Paris',NULL,'25','Paris','il',NULL,'brochet','don',NULL,NULL,'BARTOLOME BENNASSAR et ROBERT SAUZET','546',NULL,4,54,NULL),(45,'2018-04-01 13:54:13','2018-04-01 13:54:13','Misere Golopante du SUD Complicité du Nord Enjeux et Solutions','2-7068-1878-6',NULL,'337.1 FOK','3160',2005,'Maisonneuve & LAROSE','Maisonneuve & LAROSE',1,2005,'Paris',NULL,'24','paris','sans il',NULL,'brochet','don',NULL,NULL,'Dr Paul K.Fokam','159',NULL,4,55,NULL),(46,'2018-04-01 14:01:04','2018-04-01 14:01:04','Question de Sociologie','978-2-7073-1825-1',NULL,'152.1 BOU','3176',2002,'les éditions Minut','les éditions Minut',1,2002,'Normandie','reprise','19','paris','sans il',NULL,'brochet','don',NULL,NULL,'BOURDIEU Pierre','277',NULL,4,56,NULL),(47,'2018-04-01 14:05:56','2018-04-01 14:05:56','Le BAOBAB FOU','978-2-70087-0803-7',NULL,'809.3 KEN','3179',2009,'présence Africane','présence Africane',1,2009,'Paris',NULL,'18','paris','sans il',NULL,'brochet','don',NULL,NULL,'KEN BUGUL','222',NULL,4,57,NULL),(48,'2018-04-07 13:39:44','2018-04-07 13:39:44','informations sociales investisement social: repenser la protection sociale?','978-2-7071-8948-6',NULL,'344.02 COL','3124',2015,'informations sociales','informations sociales',1,2015,'Paris','revue informations sociales','24','paris','sans il',NULL,'brochet','don',NULL,NULL,'catherine collmbet et nathalie Morel','127',NULL,4,58,NULL),(49,'2018-04-07 13:47:15','2018-04-07 13:47:15','Inégalités','978-2-75786423',NULL,'337.3.9 ATK','3115',2016,'Edition du seuil','Edition du seuil',1,2016,'Paris','cllection Jacques génereux','17','paris','sans il',NULL,'brochet','don',NULL,NULL,'Anthony ATKINSON','600',NULL,4,59,NULL),(50,'2018-03-20 15:42:34','2018-03-20 15:42:34','African renaissaince : South Africa\'s Foreign policy and the Quest for African Devolpment','978-2- 3-43-05 -245-8',NULL,'320.54 ELE','3147',2014,'Harmattan','L\'Harmattan',1,2014,'yaoundé',NULL,'24','Yaoundé','sans il',NULL,'brochet','don',NULL,NULL,'ELESSA GUY','256',NULL,4,60,NULL),(51,'2018-03-20 15:48:31','2018-03-20 15:48:31','Globalisation institutions and Africa economic developpment','978-2-7178-5871-6',NULL,'338.9 CEA','3136',2008,'economica','BAD',1,2008,'Paris','economica','24','paris','sans il',NULL,'brochet','don',NULL,NULL,'conference économique Africaine','413',NULL,4,61,NULL),(52,'2018-03-20 15:55:12','2018-03-20 15:55:12','Life with Picasso','978-1-85381-2530',NULL,'750.18 GIL','3133',1990,'Viragot',NULL,1,1990,'MG GRAW-HILL',NULL,'20',NULL,'sans il',NULL,'brochet','don',NULL,NULL,'Françoise GILOT','0',NULL,4,62,NULL),(53,'2018-03-20 16:04:11','2018-03-20 16:04:11','STRATEGY and Technology towards  technology based sustenable competetive advantage','978-2-296-08311-0',NULL,'338.064 MAR','3134',2009,'l\'Harmattan',NULL,1,2009,'Paris','entreprise et management','22',NULL,'sans il',NULL,'brochet','don',NULL,NULL,'Victore de MARGERIE','292',NULL,4,63,NULL),(54,'2018-03-20 16:09:57','2018-03-20 16:09:57','CHANGE BY DISIGN','978-0-06-176608-4',NULL,'331.118.BRO','3135',2009,'HARPPER',NULL,1,2009,'New York','1er Édition','24','New York','sans il',NULL,'brochet',NULL,NULL,NULL,'TIM BROWN, RYKATZ','263',NULL,4,64,NULL),(55,'2018-03-20 17:20:50','2018-03-20 17:20:50','RÉVOLUTION NUMERIQUE ET ENSEIGNEMENT SPÉCIALISÉ DE LA MUSIQUE: quel impact sur les pratique professionnelles?','978-2-343-11286-2',NULL,'780.4.42  BAY','3172',2017,'l\'Harmattan','L\'Harmattan',1,2017,'Condé-sur-Noireau','Science de l\'éducation musicale','22','Condé-sur-Noireau','sans il',NULL,'reliure','don',NULL,NULL,'Marie-Aline BAYON','271',NULL,4,65,NULL);
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `domaines`
--

DROP TABLE IF EXISTS `domaines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `domaines` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `NomDomaines` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domaines`
--

LOCK TABLES `domaines` WRITE;
/*!40000 ALTER TABLE `domaines` DISABLE KEYS */;
INSERT INTO `domaines` VALUES (1,'2018-02-15 18:34:27','2018-02-15 18:34:27','Economie'),(2,'2018-02-15 18:34:27','2018-02-15 18:34:27','Politique'),(3,'2018-02-15 18:34:27','2018-02-15 18:34:27','Administration'),(4,'2018-02-16 12:03:07','2018-02-16 12:03:07','CONTES ET LEGENDES'),(5,'2018-02-16 12:21:31','2018-02-16 12:21:31','histoire de l\'Afrique'),(6,'2018-02-19 08:10:45','2018-02-19 08:10:45','Histoire de l\'esclavage'),(7,'2018-02-19 08:23:20','2018-02-19 08:23:20','Réligion'),(8,'2018-02-19 09:07:44','2018-02-19 09:07:44','Parapsychologi et Occultisme'),(9,'2018-02-16 15:39:34','2018-02-16 15:39:34','HISTOIRE'),(10,'2018-02-16 16:25:33','2018-02-16 16:25:33','MANUELS SCOLAIRES'),(11,'2018-02-16 16:44:09','2018-02-16 16:44:09','ROMAN'),(12,'2018-02-16 20:23:02','2018-02-16 20:23:02','Tourisme'),(13,'2018-02-16 21:04:13','2018-02-16 21:04:13','DROIT'),(14,'2018-02-16 21:12:54','2018-02-16 21:12:54','ETAT et GOUVERNEMENT'),(15,'2018-02-16 21:28:59','2018-02-16 21:28:59','RECHERCHE INDUSTRIELLE'),(16,'2018-02-16 14:50:20','2018-02-16 14:50:20','Philosophie de la pensée'),(17,'2018-02-16 15:13:53','2018-02-16 15:13:53','Le Coran et l\'ISLAM'),(18,'2018-04-01 12:37:37','2018-04-01 12:37:37','Conflits Sociaux'),(19,'2018-04-01 12:48:28','2018-04-01 12:48:28','Litterature'),(20,'2018-04-01 12:56:48','2018-04-01 12:56:48','Informatique'),(21,'2018-04-01 13:05:32','2018-04-01 13:05:32','PHILOSOPHIE'),(22,'2018-04-01 13:19:54','2018-04-01 13:19:54','MARKETING'),(23,'2018-04-01 13:38:19','2018-04-01 13:38:19','ENSEINGNEMENT TECHNIQUE'),(24,'2018-04-01 14:01:04','2018-04-01 14:01:04','SOCIOLOGIE'),(25,'2018-04-07 13:39:44','2018-04-07 13:39:44','Droit du travail'),(26,'2018-03-20 15:55:12','2018-03-20 15:55:12','ART'),(27,'2018-03-20 16:09:57','2018-03-20 16:09:57','Economie du travail'),(28,'2018-03-20 17:20:50','2018-03-20 17:20:50','MUSIQUE');
/*!40000 ALTER TABLE `domaines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emprunts`
--

DROP TABLE IF EXISTS `emprunts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emprunts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `NomEmprunteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CniEmprunteur` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateEmprunt` date NOT NULL,
  `DateEffRetourEmprunt` date DEFAULT NULL,
  `ObservationEmprunt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ObservationRetour` text COLLATE utf8mb4_unicode_ci,
  `statusEmprunteur` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cautionEmprunteur` int(11) NOT NULL,
  `Date_Retour` date DEFAULT NULL,
  `documents_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `emprunts_documents_id_foreign` (`documents_id`),
  CONSTRAINT `emprunts_documents_id_foreign` FOREIGN KEY (`documents_id`) REFERENCES `documents` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emprunts`
--

LOCK TABLES `emprunts` WRITE;
/*!40000 ALTER TABLE `emprunts` DISABLE KEYS */;
INSERT INTO `emprunts` VALUES (1,'2018-02-16 11:44:53','2018-02-16 11:44:53','Koucha Manpassi','AJJ','Eleve-AJJ','2018-02-08','2018-02-15','ras','ras','Etudiants',1000,'2018-02-15',2,NULL);
/*!40000 ALTER TABLE `emprunts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (34,'2014_10_12_000000_create_users_table',1),(35,'2014_10_12_100000_create_password_resets_table',1),(36,'2017_11_11_092741_CreateAuteursTable',1),(37,'2017_11_11_093111_CreateCategoriesTable',1),(38,'2017_11_11_093518_CreateDomainesTable',1),(39,'2017_11_11_093714_CreateSousdomainesTable',1),(40,'2017_11_11_094401_CreateDocumentsTable',1),(41,'2017_11_11_100412_CreateAuteursDocumentsTable',1),(42,'2017_11_18_161944_CreateConsultationsTable',1),(43,'2017_11_20_122157_CreateEmpruntsTable',1),(44,'2018_02_01_020509_create_softDelete_Column',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sousdomaines`
--

DROP TABLE IF EXISTS `sousdomaines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sousdomaines` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `NomSousDomaines` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domaines_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sousdomaines_domaines_id_foreign` (`domaines_id`),
  CONSTRAINT `sousdomaines_domaines_id_foreign` FOREIGN KEY (`domaines_id`) REFERENCES `domaines` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sousdomaines`
--

LOCK TABLES `sousdomaines` WRITE;
/*!40000 ALTER TABLE `sousdomaines` DISABLE KEYS */;
INSERT INTO `sousdomaines` VALUES (1,'2018-02-15 18:34:27','2018-02-15 18:34:27','Capitalisme',1),(2,'2018-02-15 18:34:27','2018-02-15 18:34:27','Communisme',1),(3,'2018-02-15 18:34:27','2018-02-15 18:34:27','Geo-Polique',2),(4,'2018-02-15 18:34:27','2018-02-15 18:34:27','Science Politique',2),(5,'2018-02-15 18:34:27','2018-02-15 18:34:27','Administration du travail',3),(6,'2018-02-15 18:34:27','2018-02-15 18:34:27','Administration parlementaire',3),(7,'2018-02-16 11:16:24','2018-02-16 11:16:24','Marketing et Commerce',1),(8,'2018-02-16 11:33:17','2018-02-16 11:33:17','Travail',1),(9,'2018-02-16 11:56:34','2018-02-16 11:56:34','Senegal',1),(10,'2018-02-16 12:12:15','2018-02-16 12:12:15','HUMOUR',4),(11,'2018-02-16 12:32:47','2018-02-16 12:32:47','CASAMACE',5),(15,'2018-02-19 07:43:38','2018-02-19 07:43:38','Environnement',1),(16,'2018-02-19 07:52:37','2018-02-19 07:52:37','Developpement',1),(17,'2018-02-19 08:15:56','2018-02-19 08:15:56','Esclavage',6),(18,'2018-02-19 08:28:35','2018-02-19 08:28:35','L\'ISLAM et L\'EXTREMISME',7),(20,'2018-02-19 09:17:39','2018-02-19 09:17:39','Sorcelerie en Afrique',8),(21,'2018-02-16 16:24:31','2018-02-16 16:24:31','Préhistoire',9),(22,'2018-02-16 16:35:34','2018-02-16 16:35:34','Methodes d\'enseignement et etudes',10),(23,'2018-02-16 16:43:29','2018-02-16 16:43:29','Egyptologie',9),(24,'2018-02-16 16:51:37','2018-02-16 16:51:37','L\'Afrique',11),(25,'2018-02-16 17:01:21','2018-02-16 17:01:21','Fiction',11),(26,'2018-02-16 17:08:51','2018-02-16 17:08:51','Clonisation- Imperialisme',9),(27,'2018-02-16 18:58:58','2018-02-16 18:58:58','Histoire de la France 1883 1962',9),(28,'2018-02-16 19:08:48','2018-02-16 19:08:48','KAMERUN : france afrique',9),(29,'2018-02-16 19:16:01','2018-02-16 19:16:01','Planification Financière',1),(30,'2018-02-16 19:21:21','2018-02-16 19:21:21','Economie culturelle',1),(31,'2018-02-16 19:34:33','2018-02-16 19:34:33','Economie Productivité',1),(32,'2018-02-16 15:11:36','2018-02-16 15:11:36','Economie Internationale',1),(34,'2018-02-16 20:34:31','2018-02-16 20:34:31','culture',12),(35,'2018-02-16 20:50:45','2018-02-16 20:50:45','Monaie dans les rélations internationales',1),(36,'2018-02-16 20:56:06','2018-02-16 20:56:06','Système économique',1),(37,'2018-02-16 21:02:51','2018-02-16 21:02:51','Décolonisation',9),(38,'2018-02-16 21:10:50','2018-02-16 21:10:50','Droit administratif : domaine publique',13),(39,'2018-02-16 21:22:54','2018-02-16 21:22:54','Souverainété formes d\'Etat',14),(40,'2018-02-16 21:27:20','2018-02-16 21:27:20','Fiction',11),(41,'2018-02-16 21:36:11','2018-02-16 21:36:11','L\'aerodynamique',15),(42,'2018-02-16 21:45:47','2018-02-16 21:45:47','Entreprise et Finance',1),(43,'2018-02-16 21:53:29','2018-02-16 21:53:29','Microéconomie',1),(45,'2018-02-16 14:56:17','2018-02-16 14:56:17','Epistémologie2009',16),(46,'2018-02-16 15:18:48','2018-02-16 15:18:48','Le coran',17),(47,'2018-04-01 12:37:37','2018-04-01 12:37:37','Le JIHAH',18),(48,'2018-04-01 12:48:28','2018-04-01 12:48:28','litterature arabe',19),(49,'2018-04-01 12:56:48','2018-04-01 12:56:48','POWER POINT',20),(50,'2018-04-01 13:05:32','2018-04-01 13:05:32','EXISTANCE',21),(51,'2018-04-01 13:19:54','2018-04-01 13:19:54','Clients et distribution',22),(52,'2018-04-01 13:27:39','2018-04-01 13:27:39','Civilisation',11),(53,'2018-04-01 13:38:19','2018-04-01 13:38:19','Sciences économiques : techniques comerciales',23),(54,'2018-04-01 13:47:11','2018-04-01 13:47:11','Chretiens et Musulmans',7),(55,'2018-04-01 13:54:13','2018-04-01 13:54:13','Developement et Société',1),(56,'2018-04-01 14:01:04','2018-04-01 14:01:04','Pensée Philosophique',24),(57,'2018-04-01 14:05:56','2018-04-01 14:05:56','Conte du Senégal',11),(58,'2018-04-07 13:39:44','2018-04-07 13:39:44','protection sociale',25),(59,'2018-04-07 13:47:15','2018-04-07 13:47:15','Mondialisation',1),(60,'2018-03-20 15:42:34','2018-03-20 15:42:34','Nationalisme Panafricanisme',2),(61,'2018-03-20 15:48:30','2018-03-20 15:48:30','Developpement Africaine',1),(62,'2018-03-20 15:55:12','2018-03-20 15:55:12','Picasso',26),(63,'2018-03-20 16:04:11','2018-03-20 16:04:11','Industrie et technologie',1),(64,'2018-03-20 16:09:57','2018-03-20 16:09:57','Productivité',27),(65,'2018-03-20 17:20:50','2018-03-20 17:20:50','ENSEINGNEMENT DE LA  MUSIQUE',28);
/*!40000 ALTER TABLE `sousdomaines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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

-- Dump completed on 2018-03-20 16:13:20
