/*
Navicat MySQL Data Transfer

Source Server         : mydb
Source Server Version : 50712
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 50712
File Encoding         : 65001

Date: 2017-04-20 19:16:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for 个人总信息表
-- ----------------------------
DROP TABLE IF EXISTS `个人总信息表`;
CREATE TABLE `个人总信息表` (
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `number` varchar(9) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `cellphone` varchar(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `certificate` varchar(18) NOT NULL,
  `Financial number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
