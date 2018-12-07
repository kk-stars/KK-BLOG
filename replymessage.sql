/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : kk-blog

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2018-05-21 23:08:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for replymessage
-- ----------------------------
DROP TABLE IF EXISTS `replymessage`;
CREATE TABLE `replymessage` (
  `replyId` int(11) NOT NULL AUTO_INCREMENT,
  `replyContent` text,
  `replyMid` int(11) DEFAULT NULL,
  `mname` varchar(12) DEFAULT NULL,
  `ator` varchar(20) DEFAULT NULL COMMENT '随机姓名',
  `atorIP` varchar(36) DEFAULT NULL,
  `addTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`replyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of replymessage
-- ----------------------------
