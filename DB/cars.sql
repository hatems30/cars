/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : cars

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2015-08-06 02:32:29
*/

SET FOREIGN_KEY_CHECKS=0;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of carmodel
-- ----------------------------
INSERT INTO `carmodel` VALUES ('1', 'لانوس');

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
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of carstbl
-- ----------------------------
INSERT INTO `carstbl` VALUES ('1', '1', '1', '1', '56465465465', '56465465', '75000', '74000', '75500', '546546546', '8798798798', '1', '5', '6');

-- ----------------------------
-- Table structure for `colors`
-- ----------------------------
DROP TABLE IF EXISTS `colors`;
CREATE TABLE `colors` (
  `color_id` int(11) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(255) NOT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of colors
-- ----------------------------
INSERT INTO `colors` VALUES ('1', 'ابيض');

-- ----------------------------
-- Table structure for `stores`
-- ----------------------------
DROP TABLE IF EXISTS `stores`;
CREATE TABLE `stores` (
  `store_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_name` varchar(255) NOT NULL,
  PRIMARY KEY (`store_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of stores
-- ----------------------------

-- ----------------------------
-- Table structure for `suppliers`
-- ----------------------------
DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(255) NOT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of suppliers
-- ----------------------------
