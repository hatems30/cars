/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : cars

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2015-08-18 02:34:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `banks`
-- ----------------------------
DROP TABLE IF EXISTS `banks`;
CREATE TABLE `banks` (
  `bank_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`bank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banks
-- ----------------------------
INSERT INTO `banks` VALUES ('1', 'البنك الاهلى');
INSERT INTO `banks` VALUES ('2', 'بنك مصر');

-- ----------------------------
-- Table structure for `branchs`
-- ----------------------------
DROP TABLE IF EXISTS `branchs`;
CREATE TABLE `branchs` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(255) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of branchs
-- ----------------------------
INSERT INTO `branchs` VALUES ('1', 'مدينة نصر');
INSERT INTO `branchs` VALUES ('2', 'المنيا');
INSERT INTO `branchs` VALUES ('3', 'المهندسين');

-- ----------------------------
-- Table structure for `brands`
-- ----------------------------
DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of brands
-- ----------------------------
INSERT INTO `brands` VALUES ('1', 'شيفرولية');
INSERT INTO `brands` VALUES ('2', 'هيونداي');
INSERT INTO `brands` VALUES ('3', 'كيا');

-- ----------------------------
-- Table structure for `carmodel`
-- ----------------------------
DROP TABLE IF EXISTS `carmodel`;
CREATE TABLE `carmodel` (
  `model_id` int(11) NOT NULL AUTO_INCREMENT,
  `model_name` varchar(255) NOT NULL,
  PRIMARY KEY (`model_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of carmodel
-- ----------------------------
INSERT INTO `carmodel` VALUES ('1', 'لانوس');
INSERT INTO `carmodel` VALUES ('2', 'سيراتو');
INSERT INTO `carmodel` VALUES ('3', 'اكسنت');
INSERT INTO `carmodel` VALUES ('4', 'النترا');
INSERT INTO `carmodel` VALUES ('5', 'فيرنا');
INSERT INTO `carmodel` VALUES ('6', 'اوبترا');

-- ----------------------------
-- Table structure for `carstbl`
-- ----------------------------
DROP TABLE IF EXISTS `carstbl`;
CREATE TABLE `carstbl` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `chass_no` varchar(255) NOT NULL,
  `motor_no` varchar(255) NOT NULL,
  `off_price` double DEFAULT NULL,
  `cost_price` double DEFAULT NULL,
  `sale_price` double DEFAULT NULL,
  `car_code` varchar(255) NOT NULL,
  `car_spec` varchar(255) DEFAULT NULL,
  `branch_id` int(11) NOT NULL,
  `store_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `notes` text,
  `soled` int(11) DEFAULT '0',
  PRIMARY KEY (`car_id`),
  UNIQUE KEY `chass_no` (`chass_no`) USING BTREE,
  KEY `brand_id` (`brand_id`),
  KEY `model_id` (`model_id`),
  KEY `color_id` (`color_id`),
  KEY `cars_branch_id` (`branch_id`),
  KEY `store_id` (`store_id`),
  KEY `supplier_id` (`supplier_id`),
  CONSTRAINT `brand_id` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`) ON UPDATE NO ACTION,
  CONSTRAINT `cars_branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branchs` (`branch_id`) ON UPDATE NO ACTION,
  CONSTRAINT `color_id` FOREIGN KEY (`color_id`) REFERENCES `colors` (`color_id`) ON UPDATE NO ACTION,
  CONSTRAINT `model_id` FOREIGN KEY (`model_id`) REFERENCES `carmodel` (`model_id`) ON UPDATE NO ACTION,
  CONSTRAINT `store_id` FOREIGN KEY (`store_id`) REFERENCES `stores` (`store_id`) ON UPDATE NO ACTION,
  CONSTRAINT `supplier_id` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`supplier_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of carstbl
-- ----------------------------
INSERT INTO `carstbl` VALUES ('5', '3', '2', '3', '666', '666-6', '171900', '170000', '171900', '46546465', 'A/T ', '1', '1', '4', '6546465', '0');
INSERT INTO `carstbl` VALUES ('6', '2', '3', '4', '888', '888-99', '140000', '135000', '140000', '98798798', '23132123', '2', '2', '2', '0', '1');
INSERT INTO `carstbl` VALUES ('7', '2', '5', '5', '333', '333-33', '95000', '92000', '96000', '56465465', '8979798', '1', '2', '3', '0', '1');

-- ----------------------------
-- Table structure for `colors`
-- ----------------------------
DROP TABLE IF EXISTS `colors`;
CREATE TABLE `colors` (
  `color_id` int(11) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(255) NOT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of colors
-- ----------------------------
INSERT INTO `colors` VALUES ('1', 'ابيض');
INSERT INTO `colors` VALUES ('2', 'اسود');
INSERT INTO `colors` VALUES ('3', 'فيراني');
INSERT INTO `colors` VALUES ('4', 'ازرق');
INSERT INTO `colors` VALUES ('5', 'فضي');

-- ----------------------------
-- Table structure for `customers`
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `license_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customers
-- ----------------------------
INSERT INTO `customers` VALUES ('1', 'محمد عغبد العليم', '010025465465', '56465465', '65465465');
INSERT INTO `customers` VALUES ('2', 'سعيد رضوان', '01006800459', '89798798', '89798798');

-- ----------------------------
-- Table structure for `holdtbl`
-- ----------------------------
DROP TABLE IF EXISTS `holdtbl`;
CREATE TABLE `holdtbl` (
  `hold_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `sales_man_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `notes` text,
  PRIMARY KEY (`hold_id`),
  UNIQUE KEY `car_id` (`car_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of holdtbl
-- ----------------------------
INSERT INTO `holdtbl` VALUES ('1', '6', '2', '1', '5645665', '0');

-- ----------------------------
-- Table structure for `inscomps`
-- ----------------------------
DROP TABLE IF EXISTS `inscomps`;
CREATE TABLE `inscomps` (
  `insurance_comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `insurance_comp_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`insurance_comp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inscomps
-- ----------------------------
INSERT INTO `inscomps` VALUES ('1', 'مصر للتامين');
INSERT INTO `inscomps` VALUES ('2', 'الشرق للتامين');

-- ----------------------------
-- Table structure for `oman`
-- ----------------------------
DROP TABLE IF EXISTS `oman`;
CREATE TABLE `oman` (
  `oman_id` int(11) NOT NULL DEFAULT '0',
  `oman_name` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT '0',
  PRIMARY KEY (`oman_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of oman
-- ----------------------------

-- ----------------------------
-- Table structure for `salesmantbl`
-- ----------------------------
DROP TABLE IF EXISTS `salesmantbl`;
CREATE TABLE `salesmantbl` (
  `sales_man_id` int(11) NOT NULL AUTO_INCREMENT,
  `sales_man_name` varchar(255) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`sales_man_id`),
  KEY `sales_man_branch_id` (`branch_id`),
  KEY `manager_id` (`manager_id`),
  CONSTRAINT `manager_id` FOREIGN KEY (`manager_id`) REFERENCES `salesmantbl` (`sales_man_id`) ON UPDATE NO ACTION,
  CONSTRAINT `sales_man_branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branchs` (`branch_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of salesmantbl
-- ----------------------------
INSERT INTO `salesmantbl` VALUES ('1', 'محممود عطية', '1', '1');
INSERT INTO `salesmantbl` VALUES ('2', 'اسلام', '1', '2');

-- ----------------------------
-- Table structure for `salestbl`
-- ----------------------------
DROP TABLE IF EXISTS `salestbl`;
CREATE TABLE `salestbl` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_date` date NOT NULL,
  `branch_id` int(11) NOT NULL,
  `sales_man_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `finance_type` varchar(255) NOT NULL,
  `cach_price` double DEFAULT NULL,
  `downpayment` double DEFAULT NULL,
  `monthly_premium` double DEFAULT NULL,
  `months_count` int(11) DEFAULT NULL,
  `interest_rate` double DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `transfer_amount` double DEFAULT NULL,
  `bank_down_amount` double DEFAULT NULL,
  `expenses` double DEFAULT NULL,
  `insurance_comp_id` int(11) DEFAULT NULL,
  `insurance_type` varchar(255) DEFAULT NULL,
  `insurance_amount` double DEFAULT NULL,
  `insurance_rate` double DEFAULT NULL,
  `notes` text,
  PRIMARY KEY (`invoice_id`),
  UNIQUE KEY `car_id` (`car_id`) USING BTREE,
  KEY `branch_id` (`branch_id`),
  KEY `sales_man_id` (`sales_man_id`),
  KEY `customer_id` (`customer_id`),
  KEY `bank_id` (`bank_id`),
  KEY `insurance_comp_id` (`insurance_comp_id`),
  CONSTRAINT `bank_id` FOREIGN KEY (`bank_id`) REFERENCES `banks` (`bank_id`) ON UPDATE NO ACTION,
  CONSTRAINT `branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branchs` (`branch_id`) ON UPDATE NO ACTION,
  CONSTRAINT `car_id` FOREIGN KEY (`car_id`) REFERENCES `carstbl` (`car_id`) ON UPDATE NO ACTION,
  CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON UPDATE NO ACTION,
  CONSTRAINT `insurance_comp_id` FOREIGN KEY (`insurance_comp_id`) REFERENCES `inscomps` (`insurance_comp_id`) ON UPDATE NO ACTION,
  CONSTRAINT `sales_man_id` FOREIGN KEY (`sales_man_id`) REFERENCES `salesmantbl` (`sales_man_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of salestbl
-- ----------------------------
INSERT INTO `salestbl` VALUES ('3', '2015-10-10', '3', '1', '6', '1', 'نقدي', '5465', null, null, null, null, '1', null, null, null, '1', '', '0', '0', '046546');
INSERT INTO `salestbl` VALUES ('4', '2015-12-05', '2', '1', '7', '2', 'نقدي', '96000', null, null, null, null, '1', null, null, null, '2', 'تحمل', null, null, '0');

-- ----------------------------
-- Table structure for `servicetbl`
-- ----------------------------
DROP TABLE IF EXISTS `servicetbl`;
CREATE TABLE `servicetbl` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_date` date NOT NULL,
  `service_type` varchar(10) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `notes` text,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of servicetbl
-- ----------------------------
INSERT INTO `servicetbl` VALUES ('4', '2015-08-13', 'شكاوي', '1', '6', '55646546546');

-- ----------------------------
-- Table structure for `stores`
-- ----------------------------
DROP TABLE IF EXISTS `stores`;
CREATE TABLE `stores` (
  `store_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_name` varchar(255) NOT NULL,
  PRIMARY KEY (`store_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of stores
-- ----------------------------
INSERT INTO `stores` VALUES ('1', 'ساحة ميدان رابعة');
INSERT INTO `stores` VALUES ('2', 'جراج المعرض');

-- ----------------------------
-- Table structure for `stud`
-- ----------------------------
DROP TABLE IF EXISTS `stud`;
CREATE TABLE `stud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `address` (`address`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of stud
-- ----------------------------
INSERT INTO `stud` VALUES ('1', 'mahmoud', '666m');

-- ----------------------------
-- Table structure for `suppliers`
-- ----------------------------
DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(255) NOT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of suppliers
-- ----------------------------
INSERT INTO `suppliers` VALUES ('1', 'ياسين جروب');
INSERT INTO `suppliers` VALUES ('2', 'مودرن كار');
INSERT INTO `suppliers` VALUES ('3', 'شركة سيارات القرش');
INSERT INTO `suppliers` VALUES ('4', 'سيارات محمد زكي');

-- ----------------------------
-- Table structure for `tbl_user`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', 'mahmoud', '54646');
INSERT INTO `tbl_user` VALUES ('2', 'Ali', '989898');
INSERT INTO `tbl_user` VALUES ('3', 'mona', '7788');
