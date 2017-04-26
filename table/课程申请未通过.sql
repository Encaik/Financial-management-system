/*
Navicat MySQL Data Transfer

Source Server         : mydb
Source Server Version : 50712
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 50712
File Encoding         : 65001

Date: 2017-04-22 17:34:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for 课程申请未通过
-- ----------------------------
DROP TABLE IF EXISTS `课程申请未通过`;
CREATE TABLE `课程申请未通过` (
  `课程名称` varchar(20) NOT NULL,
  `课程编号` varchar(100) NOT NULL,
  `教师姓名` varchar(11) NOT NULL,
  `联系电话` varchar(30) NOT NULL,
  `课程时间` varchar(20) DEFAULT NULL,
  `审批进程` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of 课程申请未通过
-- ----------------------------
INSERT INTO `课程申请未通过` VALUES ('象拔蚌养殖', '161303204', '皮皮', '13415161632', '周六上午1-4节', '审批中');
INSERT INTO `课程申请未通过` VALUES ('321', '', '', '', '', null);
INSERT INTO `课程申请未通过` VALUES ('123', '', '', '', '', null);
