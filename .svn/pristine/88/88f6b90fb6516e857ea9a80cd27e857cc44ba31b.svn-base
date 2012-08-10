/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : jshout

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2012-08-09 11:06:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `jshout`
-- ----------------------------
DROP TABLE IF EXISTS `jshout`;
CREATE TABLE `jshout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shout` longblob,
  `stamp` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jshout
-- ----------------------------
INSERT INTO `jshout` VALUES ('7', 0x4572726F722067657474696E6720646174612061727261792E, '2012-08-09 11:05:59', 'j-Shout', '0');

-- ----------------------------
-- Table structure for `jshout_private`
-- ----------------------------
DROP TABLE IF EXISTS `jshout_private`;
CREATE TABLE `jshout_private` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` blob,
  `from` varchar(255) DEFAULT NULL,
  `to` varchar(255) DEFAULT NULL,
  `stamp` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jshout_private
-- ----------------------------

-- ----------------------------
-- Table structure for `jshout_stats`
-- ----------------------------
DROP TABLE IF EXISTS `jshout_stats`;
CREATE TABLE `jshout_stats` (
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`count`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jshout_stats
-- ----------------------------

-- ----------------------------
-- Table structure for `jshout_user`
-- ----------------------------
DROP TABLE IF EXISTS `jshout_user`;
CREATE TABLE `jshout_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `auth` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jshout_user
-- ----------------------------

-- ----------------------------
-- Table structure for `jshout_v3`
-- ----------------------------
DROP TABLE IF EXISTS `jshout_v3`;
CREATE TABLE `jshout_v3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shout` longblob,
  `stamp` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jshout_v3
-- ----------------------------