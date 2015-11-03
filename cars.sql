-- MySQL dump 10.13  Distrib 5.6.26, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: cars
-- ------------------------------------------------------
-- Server version	5.6.26

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
-- Table structure for table `authassignment`
--

DROP TABLE IF EXISTS `authassignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authassignment`
--

LOCK TABLES `authassignment` WRITE;
/*!40000 ALTER TABLE `authassignment` DISABLE KEYS */;
INSERT INTO `authassignment` VALUES ('admin','1',NULL,NULL),('user','2',NULL,NULL);
/*!40000 ALTER TABLE `authassignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authitem`
--

DROP TABLE IF EXISTS `authitem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authitem` (
  `name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authitem`
--

LOCK TABLES `authitem` WRITE;
/*!40000 ALTER TABLE `authitem` DISABLE KEYS */;
INSERT INTO `authitem` VALUES ('operation1',0,'',NULL,'N;',6),('admin',2,'',NULL,'N;',7),('user',2,'',NULL,'N;',8),('operation2',0,'',NULL,'N;',9),('operation3',0,'',NULL,'N;',10);
/*!40000 ALTER TABLE `authitem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authitemchild`
--

DROP TABLE IF EXISTS `authitemchild`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authitemchild`
--

LOCK TABLES `authitemchild` WRITE;
/*!40000 ALTER TABLE `authitemchild` DISABLE KEYS */;
INSERT INTO `authitemchild` VALUES ('admin','operation1'),('admin','operation2'),('admin','operation3'),('user','operation3');
/*!40000 ALTER TABLE `authitemchild` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bankofferstbl`
--

DROP TABLE IF EXISTS `bankofferstbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bankofferstbl` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_date` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `code_id` int(11) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `banker` varchar(255) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `offer_status` varchar(50) NOT NULL,
  `results` text,
  `notes` text,
  PRIMARY KEY (`offer_id`),
  KEY `offer_customer_id` (`customer_id`),
  KEY `offer_brand_id` (`brand_id`),
  KEY `offer_model_id` (`model_id`),
  KEY `offer_code_id` (`code_id`),
  KEY `offer_bank_id` (`bank_id`),
  KEY `offer_employee_id` (`employee_id`),
  KEY `offer_branch_id` (`branch_id`),
  CONSTRAINT `offer_bank_id` FOREIGN KEY (`bank_id`) REFERENCES `banks` (`bank_id`) ON UPDATE NO ACTION,
  CONSTRAINT `offer_branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branchs` (`branch_id`) ON UPDATE NO ACTION,
  CONSTRAINT `offer_brand_id` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`) ON UPDATE NO ACTION,
  CONSTRAINT `offer_code_id` FOREIGN KEY (`code_id`) REFERENCES `carcode` (`code_id`) ON UPDATE NO ACTION,
  CONSTRAINT `offer_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON UPDATE NO ACTION,
  CONSTRAINT `offer_employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON UPDATE NO ACTION,
  CONSTRAINT `offer_model_id` FOREIGN KEY (`model_id`) REFERENCES `carmodel` (`model_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bankofferstbl`
--

LOCK TABLES `bankofferstbl` WRITE;
/*!40000 ALTER TABLE `bankofferstbl` DISABLE KEYS */;
INSERT INTO `bankofferstbl` VALUES (1,'2015-09-09',1,4,5,10,1,'fghfhfh',1,1,'قيد الاجراء','fghfh','ghfghfghf');
/*!40000 ALTER TABLE `bankofferstbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banks` (
  `bank_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`bank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banks`
--

LOCK TABLES `banks` WRITE;
/*!40000 ALTER TABLE `banks` DISABLE KEYS */;
INSERT INTO `banks` VALUES (1,'البنك الاهلى'),(2,'بنك مصر');
/*!40000 ALTER TABLE `banks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branchs`
--

DROP TABLE IF EXISTS `branchs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `branchs` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(255) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branchs`
--

LOCK TABLES `branchs` WRITE;
/*!40000 ALTER TABLE `branchs` DISABLE KEYS */;
INSERT INTO `branchs` VALUES (1,'مدينة نصر'),(2,'المنيا'),(3,'المهندسين');
/*!40000 ALTER TABLE `branchs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (4,'KIA'),(5,'HYUNDAI'),(6,'lpll'),(7,'نيسان'),(8,'لادا'),(9,'متسوبيشي'),(10,'رينو');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `callstbl`
--

DROP TABLE IF EXISTS `callstbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `callstbl` (
  `call_id` int(11) NOT NULL AUTO_INCREMENT,
  `call_date` date NOT NULL,
  `call_time` time NOT NULL,
  `car_data` varchar(255) NOT NULL,
  `call_employee_id` int(11) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `service_employee_id` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `how` varchar(255) NOT NULL,
  `notes` text,
  PRIMARY KEY (`call_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `callstbl`
--

LOCK TABLES `callstbl` WRITE;
/*!40000 ALTER TABLE `callstbl` DISABLE KEYS */;
INSERT INTO `callstbl` VALUES (1,'2015-09-10','14:15:00','kia ',1,'mahmoud','01002537952',2,'cairo','net',NULL);
/*!40000 ALTER TABLE `callstbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carcode`
--

DROP TABLE IF EXISTS `carcode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carcode` (
  `code_id` int(11) NOT NULL AUTO_INCREMENT,
  `code_name` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model_id` int(10) NOT NULL,
  `code_01` varchar(20) NOT NULL,
  `code_02` varchar(20) NOT NULL,
  `code_03` varchar(20) NOT NULL,
  `code_04` varchar(20) NOT NULL,
  `code_05` varchar(20) NOT NULL,
  `code_06` varchar(20) NOT NULL,
  `code_07` varchar(20) NOT NULL,
  `code_08` varchar(20) NOT NULL,
  `code_09` varchar(20) NOT NULL,
  `code_10` varchar(20) NOT NULL,
  `code_11` varchar(20) NOT NULL,
  `code_12` varchar(20) NOT NULL,
  `code_13` varchar(20) NOT NULL,
  `code_14` varchar(20) NOT NULL,
  `code_15` varchar(20) NOT NULL,
  `code_16` varchar(20) NOT NULL,
  `code_17` varchar(20) NOT NULL,
  `code_18` varchar(20) NOT NULL,
  `code_19` varchar(20) NOT NULL,
  `code_20` varchar(20) NOT NULL,
  `code_21` varchar(20) NOT NULL,
  `code_22` varchar(20) NOT NULL,
  `code_23` varchar(20) NOT NULL,
  `code_24` varchar(20) NOT NULL,
  `code_25` varchar(20) NOT NULL,
  `code_26` varchar(20) NOT NULL,
  `code_27` varchar(20) NOT NULL,
  `code_28` varchar(20) NOT NULL,
  `code_29` varchar(20) NOT NULL,
  `code_30` varchar(20) NOT NULL,
  `code_31` varchar(20) NOT NULL,
  `code_32` varchar(20) NOT NULL,
  `code_33` varchar(20) NOT NULL,
  `code_34` varchar(20) NOT NULL,
  `code_35` varchar(20) NOT NULL,
  `code_36` varchar(20) NOT NULL,
  `code_37` varchar(20) NOT NULL,
  `code_38` varchar(20) NOT NULL,
  `code_39` varchar(20) NOT NULL,
  `code_40` varchar(20) NOT NULL,
  `code_41` varchar(255) DEFAULT NULL,
  `code_42` varchar(255) DEFAULT NULL,
  `code_43` varchar(255) DEFAULT NULL,
  `code_44` varchar(255) DEFAULT NULL,
  `code_45` varchar(255) DEFAULT NULL,
  `code_46` varchar(255) DEFAULT NULL,
  `code_47` varchar(255) DEFAULT NULL,
  `code_48` varchar(255) DEFAULT NULL,
  `code_49` varchar(255) DEFAULT NULL,
  `code_50` varchar(255) DEFAULT NULL,
  `code_51` varchar(255) DEFAULT NULL,
  `code_52` varchar(255) DEFAULT NULL,
  `code_53` varchar(255) DEFAULT NULL,
  `code_54` varchar(255) DEFAULT NULL,
  `code_55` varchar(255) DEFAULT NULL,
  `code_56` varchar(255) DEFAULT NULL,
  `code_57` varchar(255) DEFAULT NULL,
  `code_58` varchar(255) DEFAULT NULL,
  `code_59` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`code_id`),
  KEY `brand` (`brand_id`),
  KEY `carmodel` (`model_id`),
  CONSTRAINT `brand` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`) ON UPDATE NO ACTION,
  CONSTRAINT `carmodel` FOREIGN KEY (`model_id`) REFERENCES `carmodel` (`model_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carcode`
--

LOCK TABLES `carcode` WRITE;
/*!40000 ALTER TABLE `carcode` DISABLE KEYS */;
INSERT INTO `carcode` VALUES (8,'V303',5,6,'يدوي','لون السيارة','ريموت','عادي','كهرباء2','لايوجد','الكتروني','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','45','1600','110','4','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','عادي','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','فرش جلد','جلد','يوجد','17',NULL),(9,'v400',5,6,'اتوماتيك','كروم','بصمة','ابانوس','كهرباء4','لايوجد','هيدروليك','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','50','1599','120','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,'C500',4,5,'ستيبترونيك','كروم','بصمة','عادي','كهرباء4','يوجد','هيدروليك','لايوجد','يوجد','يوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','55','1600','115','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,'tyryr',5,6,'يدوي','لون السيارة','ريموت','عادي','كهرباء4','لايوجد','هيدروليك','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','45','160045','110','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,'L303',10,8,'اتوماتيك','لون السيارة','ريموت','عادي','كهرباء4','لايوجد','هيدروليك','لايوجد','لايوجد','لايوجد','لايوجد','يوجد','يوجد','يوجد','يوجد','لايوجد','يوجد','لايوجد','لايوجد','تاتش','يوجد','لايوجد','لايوجد','يوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','لايوجد','50','1600','110','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `carcode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carmodel`
--

DROP TABLE IF EXISTS `carmodel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carmodel` (
  `model_id` int(11) NOT NULL AUTO_INCREMENT,
  `model_name` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  PRIMARY KEY (`model_id`),
  KEY `brand_carmodel` (`brand_id`),
  CONSTRAINT `brand_carmodel` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carmodel`
--

LOCK TABLES `carmodel` WRITE;
/*!40000 ALTER TABLE `carmodel` DISABLE KEYS */;
INSERT INTO `carmodel` VALUES (5,'cerato',4),(6,'VERNA',5),(7,'kjhjk',4),(8,'لوجان',10);
/*!40000 ALTER TABLE `carmodel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carpricetbl`
--

DROP TABLE IF EXISTS `carpricetbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carpricetbl` (
  `price_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_id` int(11) DEFAULT NULL,
  `cost_price` double NOT NULL,
  `off_price` double NOT NULL,
  `sale_price_from` double NOT NULL,
  `sale_price_to` double NOT NULL,
  PRIMARY KEY (`price_id`),
  UNIQUE KEY `price_car_id` (`car_id`) USING BTREE,
  CONSTRAINT `price_car_id` FOREIGN KEY (`car_id`) REFERENCES `carstbl` (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carpricetbl`
--

LOCK TABLES `carpricetbl` WRITE;
/*!40000 ALTER TABLE `carpricetbl` DISABLE KEYS */;
INSERT INTO `carpricetbl` VALUES (2,4,13132,1222,122,12212),(3,9,99000,105000,104000,106000);
/*!40000 ALTER TABLE `carpricetbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carstbl`
--

DROP TABLE IF EXISTS `carstbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carstbl` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `code_id` int(11) NOT NULL,
  `car_spec` varchar(255) DEFAULT NULL,
  `color_id` int(11) NOT NULL,
  `car_year` year(4) NOT NULL,
  `chass_no` varchar(255) NOT NULL,
  `motor_no` varchar(255) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `store_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `add_date` date NOT NULL,
  `cost_price` double DEFAULT NULL,
  `off_price` double DEFAULT NULL,
  `sale_price_from` double DEFAULT NULL,
  `sale_price_to` double DEFAULT NULL,
  `notes` text,
  PRIMARY KEY (`car_id`),
  UNIQUE KEY `chass_no` (`chass_no`) USING BTREE,
  KEY `brand_id` (`brand_id`),
  KEY `model_id` (`model_id`),
  KEY `color_id` (`color_id`),
  KEY `cars_branch_id` (`branch_id`),
  KEY `store_id` (`store_id`),
  KEY `supplier_id` (`supplier_id`),
  KEY `code_id` (`code_id`),
  CONSTRAINT `brand_id` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`) ON UPDATE NO ACTION,
  CONSTRAINT `cars_branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branchs` (`branch_id`) ON UPDATE NO ACTION,
  CONSTRAINT `code_id` FOREIGN KEY (`code_id`) REFERENCES `carcode` (`code_id`) ON UPDATE NO ACTION,
  CONSTRAINT `color_id` FOREIGN KEY (`color_id`) REFERENCES `colors` (`color_id`) ON UPDATE NO ACTION,
  CONSTRAINT `store_id` FOREIGN KEY (`store_id`) REFERENCES `stores` (`store_id`) ON UPDATE NO ACTION,
  CONSTRAINT `supplier_id` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`supplier_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carstbl`
--

LOCK TABLES `carstbl` WRITE;
/*!40000 ALTER TABLE `carstbl` DISABLE KEYS */;
INSERT INTO `carstbl` VALUES (3,5,6,8,'AT/AC',1,2015,'1122','1122-22',1,2,2,'2015-09-01',88000,95500,95000,96000,'0'),(4,4,5,10,'ABS/AAA',3,2016,'555','555333',1,2,4,'2015-09-03',145000,155000,154000,156000,'helloooooo'),(5,5,6,9,'AT/ABS',1,2015,'8888','8888-888',1,2,2,'2015-09-05',91000,98000,97000,99000,'768687'),(6,4,5,10,'BBS',2,2016,'100001','20002',1,1,2,'2015-08-04',146000,160000,158000,162000,'moody'),(7,5,6,8,'mooody',1,2016,'1400014','1500015',1,2,1,'2015-09-10',66666,99000,99500,105000,'5456456'),(8,4,5,10,'765765',2,2016,'657657','567656',2,3,2,'2015-09-17',44,55,66,77,''),(9,10,8,12,'07756788',3,2016,'776655','889910',1,1,1,'2015-09-10',NULL,NULL,NULL,NULL,'88'),(10,10,8,12,'11122',5,2016,'444333','444-9999',1,1,1,'2015-09-11',NULL,NULL,NULL,NULL,''),(11,5,6,8,'675757',1,0000,'89798','89789',1,1,1,'2015-10-10',NULL,NULL,NULL,NULL,'');
/*!40000 ALTER TABLE `carstbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colors`
--

DROP TABLE IF EXISTS `colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colors` (
  `color_id` int(11) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(255) NOT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colors`
--

LOCK TABLES `colors` WRITE;
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
INSERT INTO `colors` VALUES (1,'ابيض'),(2,'اسود'),(3,'فيراني'),(4,'ازرق'),(5,'فضي');
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companiestbl`
--

DROP TABLE IF EXISTS `companiestbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companiestbl` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companiestbl`
--

LOCK TABLES `companiestbl` WRITE;
/*!40000 ALTER TABLE `companiestbl` DISABLE KEYS */;
INSERT INTO `companiestbl` VALUES (1,'carteck',''),(2,'ايجى تيك','');
/*!40000 ALTER TABLE `companiestbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companysalestbl`
--

DROP TABLE IF EXISTS `companysalestbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companysalestbl` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_date` date NOT NULL,
  `branch_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `price` double(10,2) NOT NULL,
  `company_id` int(11) NOT NULL,
  `notes` text,
  `cust_pic` varchar(255) DEFAULT NULL,
  `confirm_stat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`invoice_id`),
  UNIQUE KEY `comp_car_id` (`car_id`) USING BTREE,
  KEY `comp_branch_id` (`branch_id`),
  KEY `comp_employee_id` (`employee_id`),
  KEY `company_id` (`company_id`),
  CONSTRAINT `comp_branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branchs` (`branch_id`) ON UPDATE NO ACTION,
  CONSTRAINT `comp_car_id` FOREIGN KEY (`car_id`) REFERENCES `carstbl` (`car_id`) ON UPDATE NO ACTION,
  CONSTRAINT `comp_employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON UPDATE NO ACTION,
  CONSTRAINT `company_id` FOREIGN KEY (`company_id`) REFERENCES `companiestbl` (`company_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companysalestbl`
--

LOCK TABLES `companysalestbl` WRITE;
/*!40000 ALTER TABLE `companysalestbl` DISABLE KEYS */;
INSERT INTO `companysalestbl` VALUES (2,'2015-09-15',1,1,5,76767.00,1,'jshdak','صورة','غيرمعتمد');
/*!40000 ALTER TABLE `companysalestbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `controllers`
--

DROP TABLE IF EXISTS `controllers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `controllers` (
  `controller_id` int(11) NOT NULL AUTO_INCREMENT,
  `controller_code_name` varchar(255) NOT NULL,
  `controller_form_name` varchar(255) NOT NULL,
  PRIMARY KEY (`controller_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controllers`
--

LOCK TABLES `controllers` WRITE;
/*!40000 ALTER TABLE `controllers` DISABLE KEYS */;
INSERT INTO `controllers` VALUES (1,'Banks','البنوك'),(2,'Branchs','الفروع'),(3,'Brands','الماركات'),(4,'carmodel','الموديلات'),(5,'carcode','الاكواد'),(6,'colors','الالوان'),(7,'stores','المخازن'),(8,'suppliers','الموردين'),(9,'employees','الموظفين'),(10,'inscomps','شركات التأمين'),(11,'customers','عملاء البيع'),(12,'Companiestbl','عملاء الشركات'),(13,'dealerstbl','عملاء البيع التجاري'),(14,'traffictbl','وحدات المرور'),(15,'mcenterstbl','مراكز الصيانة'),(16,'carstbl','بيانات السيارات'),(17,'innersaletbl','التحويل بين الفروع'),(18,'holdtbl','حجز سيارة'),(19,'salestbl','مبيعات العملاء'),(20,'companysalestbl','مبيعات الشركات'),(21,'dealersalestbl','مبيعات التجاري'),(22,'bankofferstbl','عروض البنوك'),(23,'paperstbl','تبليغ الاوراق'),(24,'Licensetbl','التراخيص'),(25,'Maintenancetbl','حجز صيانة'),(26,'salesreport','تقرير مبيعات النقدي'),(27,'Banksalesreport','تقرير مبيعات البنوك'),(28,'Premiumsalesreport','تقرير مبيعات التقسيط'),(29,'Dealersalesreport','تقرير مبيعات الموزعين'),(30,'Companysalesreport','تقرير مبيعات الشركات'),(31,'Bankoffersreport','تقرير عروض البنك'),(32,'Holdsreport','تقرير الحجوزات'),(33,'carstock','السيارات المتاحة'),(34,'callstbl','المكالمات'),(35,'User','بيانات المستخدمين'),(36,'userpertbl','الصلاحيات'),(37,'carprice','اسعار السيارات');
/*!40000 ALTER TABLE `controllers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `license_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'محمد عغبد العليم','010025465465','56465465','65465465'),(2,'سعيد رضوان','01006800459','89798798','89798798'),(3,'احمد عبد الله سليمان','66106611','465465465','656464655');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dealersalestbl`
--

DROP TABLE IF EXISTS `dealersalestbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dealersalestbl` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_date` date NOT NULL,
  `branch_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `dealer_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `notes` text,
  `confirm_stat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`invoice_id`),
  UNIQUE KEY `dealer_car_id` (`car_id`) USING BTREE,
  KEY `dealer_branch_id` (`branch_id`),
  KEY `dealer_employee_id` (`employee_id`),
  KEY `dealer_id` (`dealer_id`),
  CONSTRAINT `dealer_branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branchs` (`branch_id`) ON UPDATE NO ACTION,
  CONSTRAINT `dealer_car_id` FOREIGN KEY (`car_id`) REFERENCES `carstbl` (`car_id`) ON UPDATE NO ACTION,
  CONSTRAINT `dealer_employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON UPDATE NO ACTION,
  CONSTRAINT `dealer_id` FOREIGN KEY (`dealer_id`) REFERENCES `dealerstbl` (`dealer_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dealersalestbl`
--

LOCK TABLES `dealersalestbl` WRITE;
/*!40000 ALTER TABLE `dealersalestbl` DISABLE KEYS */;
INSERT INTO `dealersalestbl` VALUES (1,'2015-09-09',1,1,1,7,767868,'786','معتمد');
/*!40000 ALTER TABLE `dealersalestbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dealerstbl`
--

DROP TABLE IF EXISTS `dealerstbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dealerstbl` (
  `dealer_id` int(11) NOT NULL AUTO_INCREMENT,
  `dealer_name` varchar(255) NOT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`dealer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dealerstbl`
--

LOCK TABLES `dealerstbl` WRITE;
/*!40000 ALTER TABLE `dealerstbl` DISABLE KEYS */;
INSERT INTO `dealerstbl` VALUES (1,'موزع معتمد','');
/*!40000 ALTER TABLE `dealerstbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(255) NOT NULL,
  `employee_type` varchar(30) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `manager_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`employee_id`),
  KEY `branch` (`branch_id`),
  KEY `manager` (`manager_id`),
  KEY `employee_name` (`employee_name`),
  CONSTRAINT `branch` FOREIGN KEY (`branch_id`) REFERENCES `branchs` (`branch_id`) ON UPDATE NO ACTION,
  CONSTRAINT `manager` FOREIGN KEY (`manager_id`) REFERENCES `employees` (`employee_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'محممود عطية','مبيعات',1,1),(2,'اسلام','',2,2),(3,'حاتم عطية','مبيعات',1,1);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `holdtbl`
--

DROP TABLE IF EXISTS `holdtbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `holdtbl` (
  `hold_id` int(11) NOT NULL AUTO_INCREMENT,
  `hold_date` date NOT NULL,
  `branch_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `sale_type` varchar(255) NOT NULL,
  `price` double(10,0) NOT NULL,
  `hold_amount` double NOT NULL,
  `notes` text,
  PRIMARY KEY (`hold_id`),
  UNIQUE KEY `car_id` (`car_id`) USING BTREE,
  KEY `hold_customer_id` (`customer_id`),
  KEY `hold_branch_id` (`branch_id`),
  KEY `hold_employee_id` (`employee_id`),
  CONSTRAINT `hold_branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branchs` (`branch_id`) ON UPDATE NO ACTION,
  CONSTRAINT `hold_car_id` FOREIGN KEY (`car_id`) REFERENCES `carstbl` (`car_id`) ON UPDATE NO ACTION,
  CONSTRAINT `hold_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON UPDATE NO ACTION,
  CONSTRAINT `hold_employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `holdtbl`
--

LOCK TABLES `holdtbl` WRITE;
/*!40000 ALTER TABLE `holdtbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `holdtbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innersaletbl`
--

DROP TABLE IF EXISTS `innersaletbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innersaletbl` (
  `trs_id` int(11) NOT NULL AUTO_INCREMENT,
  `trs_date` date NOT NULL,
  `from_branch_id` int(11) NOT NULL,
  `to_branch_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `price` double(10,0) NOT NULL,
  `notes` text,
  PRIMARY KEY (`trs_id`),
  KEY `from_branch_id` (`from_branch_id`),
  KEY `to_branch_id` (`to_branch_id`),
  KEY `inner_car_id` (`car_id`),
  CONSTRAINT `from_branch_id` FOREIGN KEY (`from_branch_id`) REFERENCES `branchs` (`branch_id`) ON UPDATE NO ACTION,
  CONSTRAINT `inner_car_id` FOREIGN KEY (`car_id`) REFERENCES `carstbl` (`car_id`) ON UPDATE NO ACTION,
  CONSTRAINT `to_branch_id` FOREIGN KEY (`to_branch_id`) REFERENCES `branchs` (`branch_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innersaletbl`
--

LOCK TABLES `innersaletbl` WRITE;
/*!40000 ALTER TABLE `innersaletbl` DISABLE KEYS */;
INSERT INTO `innersaletbl` VALUES (2,'2015-09-03',2,1,8,6757657,'0');
/*!40000 ALTER TABLE `innersaletbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inscomps`
--

DROP TABLE IF EXISTS `inscomps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inscomps` (
  `insurance_comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `insurance_comp_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`insurance_comp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscomps`
--

LOCK TABLES `inscomps` WRITE;
/*!40000 ALTER TABLE `inscomps` DISABLE KEYS */;
INSERT INTO `inscomps` VALUES (1,'مصر للتامين'),(2,'الشرق للتامين');
/*!40000 ALTER TABLE `inscomps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `licensetbl`
--

DROP TABLE IF EXISTS `licensetbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `licensetbl` (
  `License_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `traffic_id` int(11) NOT NULL,
  `super_employee_id` int(11) NOT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `cotchnier` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`License_id`),
  KEY `License_branch_id` (`branch_id`),
  KEY `License_car_id` (`car_id`),
  KEY `License_employee_id` (`employee_id`),
  KEY `License_traffic_id` (`traffic_id`),
  KEY `License_super_employee_id` (`super_employee_id`),
  CONSTRAINT `License_branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branchs` (`branch_id`) ON UPDATE NO ACTION,
  CONSTRAINT `License_car_id` FOREIGN KEY (`car_id`) REFERENCES `carstbl` (`car_id`) ON UPDATE NO ACTION,
  CONSTRAINT `License_employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON UPDATE NO ACTION,
  CONSTRAINT `License_super_employee_id` FOREIGN KEY (`super_employee_id`) REFERENCES `employees` (`employee_id`) ON UPDATE NO ACTION,
  CONSTRAINT `License_traffic_id` FOREIGN KEY (`traffic_id`) REFERENCES `traffictbl` (`traffic_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `licensetbl`
--

LOCK TABLES `licensetbl` WRITE;
/*!40000 ALTER TABLE `licensetbl` DISABLE KEYS */;
INSERT INTO `licensetbl` VALUES (1,1,3,2,1,1,'0','صورة');
/*!40000 ALTER TABLE `licensetbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maintenancetbl`
--

DROP TABLE IF EXISTS `maintenancetbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maintenancetbl` (
  `m_hold_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_hold_date` date NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `car_data` varchar(255) NOT NULL,
  `m_type` varchar(255) NOT NULL,
  `m_center_id` int(11) NOT NULL,
  `m_date` date NOT NULL,
  `m_area` varchar(255) NOT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`m_hold_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maintenancetbl`
--

LOCK TABLES `maintenancetbl` WRITE;
/*!40000 ALTER TABLE `maintenancetbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `maintenancetbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mcenterstbl`
--

DROP TABLE IF EXISTS `mcenterstbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mcenterstbl` (
  `m_center_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_center_name` varchar(255) NOT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`m_center_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mcenterstbl`
--

LOCK TABLES `mcenterstbl` WRITE;
/*!40000 ALTER TABLE `mcenterstbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `mcenterstbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oman`
--

DROP TABLE IF EXISTS `oman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oman` (
  `oman_id` int(11) NOT NULL DEFAULT '0',
  `oman_name` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT '0',
  PRIMARY KEY (`oman_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oman`
--

LOCK TABLES `oman` WRITE;
/*!40000 ALTER TABLE `oman` DISABLE KEYS */;
/*!40000 ALTER TABLE `oman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paperstbl`
--

DROP TABLE IF EXISTS `paperstbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paperstbl` (
  `paper_id` int(11) NOT NULL AUTO_INCREMENT,
  `paper_date` date NOT NULL,
  `branch_id` int(11) NOT NULL,
  `sale_type` varchar(50) NOT NULL,
  `car_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `paper_status` varchar(50) NOT NULL,
  `notes` text,
  `cust_lic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`paper_id`),
  KEY `paper_branch_id` (`branch_id`),
  KEY `paper_car_id` (`car_id`),
  KEY `paper_supplier_id` (`supplier_id`),
  CONSTRAINT `paper_branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branchs` (`branch_id`) ON UPDATE NO ACTION,
  CONSTRAINT `paper_car_id` FOREIGN KEY (`car_id`) REFERENCES `carstbl` (`car_id`) ON UPDATE NO ACTION,
  CONSTRAINT `paper_supplier_id` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`supplier_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paperstbl`
--

LOCK TABLES `paperstbl` WRITE;
/*!40000 ALTER TABLE `paperstbl` DISABLE KEYS */;
INSERT INTO `paperstbl` VALUES (1,'2015-09-09',1,'بيع مباشر',3,1,'جاهزة','0','صورة');
/*!40000 ALTER TABLE `paperstbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salestbl`
--

DROP TABLE IF EXISTS `salestbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salestbl` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_date` date NOT NULL,
  `branch_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `finance_type` varchar(255) NOT NULL,
  `cach_price` double DEFAULT NULL,
  `downpayment` double DEFAULT NULL,
  `monthly_premium` double DEFAULT NULL,
  `months_count` int(11) DEFAULT NULL,
  `interest_rate` double DEFAULT NULL,
  `premium_price` double(10,2) DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `transfer_amount` double DEFAULT NULL,
  `bank_down_amount` double DEFAULT NULL,
  `expenses` double DEFAULT NULL,
  `bank_price` double(10,2) DEFAULT NULL,
  `insurance_comp_id` int(11) DEFAULT NULL,
  `insurance_type` varchar(255) DEFAULT NULL,
  `insurance_amount` double DEFAULT NULL,
  `insurance_rate` double DEFAULT NULL,
  `notes` text,
  `cust_pic` varchar(255) DEFAULT NULL,
  `confirm_stat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`invoice_id`),
  UNIQUE KEY `car_id` (`car_id`) USING BTREE,
  KEY `branch_id` (`branch_id`),
  KEY `customer_id` (`customer_id`),
  KEY `bank_id` (`bank_id`),
  KEY `insurance_comp_id` (`insurance_comp_id`),
  KEY `employee_id` (`employee_id`),
  CONSTRAINT `bank_id` FOREIGN KEY (`bank_id`) REFERENCES `banks` (`bank_id`) ON UPDATE NO ACTION,
  CONSTRAINT `branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branchs` (`branch_id`) ON UPDATE NO ACTION,
  CONSTRAINT `car_id` FOREIGN KEY (`car_id`) REFERENCES `carstbl` (`car_id`) ON UPDATE NO ACTION,
  CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON UPDATE NO ACTION,
  CONSTRAINT `employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON UPDATE NO ACTION,
  CONSTRAINT `insurance_comp_id` FOREIGN KEY (`insurance_comp_id`) REFERENCES `inscomps` (`insurance_comp_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salestbl`
--

LOCK TABLES `salestbl` WRITE;
/*!40000 ALTER TABLE `salestbl` DISABLE KEYS */;
INSERT INTO `salestbl` VALUES (1,'2015-10-08',1,1,3,2,'نقدي',675765,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'تحمل',878,6,'','صورة','معتمد'),(2,'2015-10-08',1,1,11,2,'قسط مباشر',NULL,33333,333,33,3,120000.00,NULL,NULL,NULL,NULL,NULL,2,'تحمل',77,7,'',NULL,NULL),(3,'2015-10-02',1,1,6,2,'نقدي',76786,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'تحمل',66,6,'','صورة العميل','غيرمعتمد');
/*!40000 ALTER TABLE `salestbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicetbl`
--

DROP TABLE IF EXISTS `servicetbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicetbl` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_date` date NOT NULL,
  `service_type` varchar(10) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `notes` text,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicetbl`
--

LOCK TABLES `servicetbl` WRITE;
/*!40000 ALTER TABLE `servicetbl` DISABLE KEYS */;
INSERT INTO `servicetbl` VALUES (5,'2015-08-12','صيانة',2,7,'23132132');
/*!40000 ALTER TABLE `servicetbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stores`
--

DROP TABLE IF EXISTS `stores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stores` (
  `store_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_name` varchar(255) NOT NULL,
  `branch_id` int(11) NOT NULL,
  PRIMARY KEY (`store_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stores`
--

LOCK TABLES `stores` WRITE;
/*!40000 ALTER TABLE `stores` DISABLE KEYS */;
INSERT INTO `stores` VALUES (1,'ساحة ميدان رابعة',1),(2,'جراج المعرض',1),(3,'ساحة النادي',2);
/*!40000 ALTER TABLE `stores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stud`
--

DROP TABLE IF EXISTS `stud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `address` (`address`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stud`
--

LOCK TABLES `stud` WRITE;
/*!40000 ALTER TABLE `stud` DISABLE KEYS */;
INSERT INTO `stud` VALUES (1,'mahmoud','666m');
/*!40000 ALTER TABLE `stud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(255) NOT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--

LOCK TABLES `suppliers` WRITE;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` VALUES (1,'ياسين جروب'),(2,'مودرن كار'),(3,'شركة سيارات القرش'),(4,'سيارات محمد زكي');
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (1,'mahmoud','54646'),(2,'Ali','989898'),(3,'mona','7788');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES (1,'mahmoud'),(2,'ali');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `traffictbl`
--

DROP TABLE IF EXISTS `traffictbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `traffictbl` (
  `traffic_id` int(11) NOT NULL AUTO_INCREMENT,
  `traffic_name` varchar(255) NOT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`traffic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `traffictbl`
--

LOCK TABLES `traffictbl` WRITE;
/*!40000 ALTER TABLE `traffictbl` DISABLE KEYS */;
INSERT INTO `traffictbl` VALUES (1,'وحدة مرور العجوزة','0');
/*!40000 ALTER TABLE `traffictbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `branch_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_branch_id` (`branch_id`),
  KEY `user_emp_id` (`employee_id`),
  CONSTRAINT `user_branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branchs` (`branch_id`) ON UPDATE NO ACTION,
  CONSTRAINT `user_emp_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'mahmoud','$2a$13$bWL72P8XVdx6csMltHJMI.z1gDYUQq./lpFFxXbvtvNvc5O1wb7tK','',NULL,NULL,NULL,NULL,NULL,1,1),(2,'hatem','$2y$13$cE5y99/D4BemU2t8WN5FRO4jDz7HEo5a8eNos4lSHlVex.Sm3s/bS','',NULL,NULL,NULL,NULL,NULL,1,3),(3,'ali','12345','',NULL,NULL,NULL,NULL,NULL,1,1),(4,'mooody','','',NULL,NULL,NULL,NULL,NULL,1,1),(5,'moody','$2y$13$eq0m6E4ksPBqy2Yw8emuSOAqXwzKj1fc9FFRLMRzhLpOqfK5utMOC','',NULL,NULL,NULL,NULL,NULL,1,1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usernew`
--

DROP TABLE IF EXISTS `usernew`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usernew` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usernew`
--

LOCK TABLES `usernew` WRITE;
/*!40000 ALTER TABLE `usernew` DISABLE KEYS */;
/*!40000 ALTER TABLE `usernew` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userpertbl`
--

DROP TABLE IF EXISTS `userpertbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userpertbl` (
  `per_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `controller_id` int(11) NOT NULL,
  `per_type` varchar(255) NOT NULL,
  PRIMARY KEY (`per_id`),
  UNIQUE KEY `contid_userid` (`user_id`,`controller_id`) USING BTREE,
  KEY `controller_id` (`controller_id`),
  CONSTRAINT `controller_id` FOREIGN KEY (`controller_id`) REFERENCES `controllers` (`controller_id`) ON UPDATE NO ACTION,
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userpertbl`
--

LOCK TABLES `userpertbl` WRITE;
/*!40000 ALTER TABLE `userpertbl` DISABLE KEYS */;
INSERT INTO `userpertbl` VALUES (1,1,1,'ReadWrite'),(2,1,2,'ReadWrite'),(3,1,3,'ReadWrite'),(4,1,6,'ReadWrite'),(5,2,3,'ReadWrite'),(6,1,4,'ReadWrite'),(7,1,5,'ReadWrite'),(9,1,35,'ReadWrite'),(10,1,36,'ReadWrite'),(11,1,12,'ReadWrite'),(12,1,19,'ReadWrite'),(14,1,8,'ReadWrite'),(15,1,16,'ReadWrite'),(16,5,6,'ReadWrite'),(17,1,9,'ReadWrite'),(18,1,20,'ReadWrite'),(19,1,21,'ReadWrite'),(20,1,24,'ReadWrite'),(21,1,23,'ReadWrite'),(22,2,20,'ReadWrite');
/*!40000 ALTER TABLE `userpertbl` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-08  1:26:44
