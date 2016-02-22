/*
Navicat MySQL Data Transfer

Source Server         : ITlocalhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : phamlookdb

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-02-22 18:38:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sib_model_contact
-- ----------------------------
DROP TABLE IF EXISTS `sib_model_contact`;
CREATE TABLE `sib_model_contact` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `info` text,
  `code` varchar(100) DEFAULT NULL,
  `is_activate` int(2) DEFAULT NULL,
  `extra` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sib_model_contact
-- ----------------------------
