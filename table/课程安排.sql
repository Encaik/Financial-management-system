/*
Navicat MySQL Data Transfer

Source Server         : mydb
Source Server Version : 50712
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 50712
File Encoding         : 65001

Date: 2017-04-20 19:16:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for 课程安排
-- ----------------------------
DROP TABLE IF EXISTS `课程安排`;
CREATE TABLE `课程安排` (
  `num/day` varchar(200) DEFAULT NULL,
  `Monday` varchar(200) DEFAULT NULL,
  `Tuesday` varchar(200) DEFAULT NULL,
  `Wednesday` varchar(200) DEFAULT NULL,
  `Thursday` varchar(200) DEFAULT NULL,
  `Friday` varchar(200) DEFAULT NULL,
  `Saturday` varchar(200) DEFAULT NULL,
  `Sunday` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
