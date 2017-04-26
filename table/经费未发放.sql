/*
Navicat MySQL Data Transfer

Source Server         : mydb
Source Server Version : 50712
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 50712
File Encoding         : 65001

Date: 2017-04-22 17:34:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for 经费未发放
-- ----------------------------
DROP TABLE IF EXISTS `经费未发放`;
CREATE TABLE `经费未发放` (
  `申请理由` varchar(20) NOT NULL,
  `申请类别` varchar(100) NOT NULL,
  `申请人` varchar(100) NOT NULL,
  `联系电话` varchar(11) NOT NULL,
  `财务编号` varchar(30) NOT NULL,
  `申请款额` varchar(20) DEFAULT NULL,
  `审批进程` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of 经费未发放
-- ----------------------------
INSERT INTO `经费未发放` VALUES ('留学生欢送会', '报销', '皮皮', '13519815241', '20171462', '500', '审批中');
INSERT INTO `经费未发放` VALUES ('321', '123456987', '', '', '', '', null);
INSERT INTO `经费未发放` VALUES ('123', '123485691', '', '', '', '', null);
