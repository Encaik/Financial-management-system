/*
Navicat MySQL Data Transfer

Source Server         : mydb
Source Server Version : 50712
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 50712
File Encoding         : 65001

Date: 2017-04-22 17:34:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for 老师工资未发放
-- ----------------------------
DROP TABLE IF EXISTS `老师工资未发放`;
CREATE TABLE `老师工资未发放` (
  `姓名` varchar(20) NOT NULL,
  `教职工编号` varchar(100) NOT NULL,
  `联系电话` varchar(11) NOT NULL,
  `财务编号` varchar(30) NOT NULL,
  `身份证号` varchar(20) DEFAULT NULL,
  `基本工资` varchar(10) DEFAULT NULL,
  `奖金` varchar(5) DEFAULT NULL,
  `是否发放` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of 老师工资未发放
-- ----------------------------
INSERT INTO `老师工资未发放` VALUES ('皮皮', '161303204', '13519815241', '20171462', '320156615102156156', '2000', '1000', '否');
INSERT INTO `老师工资未发放` VALUES ('321', '', '', '', '', '', null, null);
INSERT INTO `老师工资未发放` VALUES ('123', '', '', '', '', '', null, null);
