/*
Navicat MySQL Data Transfer

Source Server         : mydb
Source Server Version : 50712
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 50712
File Encoding         : 65001

Date: 2017-04-20 19:16:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for 计算机二级
-- ----------------------------
DROP TABLE IF EXISTS `计算机二级`;
CREATE TABLE `计算机二级` (
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `certificate` varchar(18) NOT NULL,
  `cellphone` varchar(11) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
