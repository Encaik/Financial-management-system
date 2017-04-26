/*
Navicat MySQL Data Transfer

Source Server         : mydb
Source Server Version : 50712
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 50712
File Encoding         : 65001

Date: 2017-04-22 17:34:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for 助学申请未发放
-- ----------------------------
DROP TABLE IF EXISTS `助学申请未发放`;
CREATE TABLE `助学申请未发放` (
  `姓名` varchar(20) NOT NULL,
  `班级` varchar(100) NOT NULL,
  `学号` varchar(100) NOT NULL,
  `联系电话` varchar(11) NOT NULL,
  `财务编号` varchar(30) NOT NULL,
  `身份证号` varchar(20) DEFAULT NULL,
  `助学申请额` varchar(10) DEFAULT NULL,
  `贫困等级` varchar(5) DEFAULT NULL,
  `是否发放` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of 助学申请未发放
-- ----------------------------
INSERT INTO `助学申请未发放` VALUES ('皮皮', '软件1602', '161303204', '13519815241', '20171462', '320156615102156156', '2000', '一般困难', '否');
INSERT INTO `助学申请未发放` VALUES ('321', '123456987', '', '', '', '', '', null, null);
INSERT INTO `助学申请未发放` VALUES ('123', '123485691', '', '', '', '', '', null, null);
