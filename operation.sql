/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : kk-blog

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2018-12-10 10:41:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for operation
-- ----------------------------
DROP TABLE IF EXISTS `operation`;
CREATE TABLE `operation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `op_admin` varchar(64) DEFAULT NULL COMMENT '操作 管理员',
  `op_ip` varchar(20) DEFAULT NULL COMMENT '操作 IP',
  `op_type` varchar(30) DEFAULT NULL COMMENT '操作类型：1为登录，2为修改操作，3为删除操作，4为添加操作， default为其它操作',
  `op_module` varchar(18) DEFAULT NULL COMMENT '操作模块',
  `op_details` varchar(99) DEFAULT NULL COMMENT '操作详情',
  `op_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '操作时间',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '状态值：1表示正常显示，0表示已被删除 。默认为1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of operation
-- ----------------------------
INSERT INTO `operation` VALUES ('1', '满天星', '0.0.0.0', 'login', '登录', '登录成功', '2018-06-21 20:45:21', '1');
INSERT INTO `operation` VALUES ('2', '满天星', '0.0.0.0', 'update', '文章', ' 在PHP中如何使用Redis', '2018-06-21 20:48:02', '1');
INSERT INTO `operation` VALUES ('3', '满天星', '0.0.0.0', 'login', '登录', '登录成功', '2018-07-10 13:23:02', '1');
INSERT INTO `operation` VALUES ('4', '满天星', '0.0.0.0', 'add', '文章', 'linux的命令操作', '2018-07-10 13:33:32', '1');
INSERT INTO `operation` VALUES ('5', '满天星', '0.0.0.0', 'add', '栏目', 'Linux', '2018-07-10 13:34:19', '1');
INSERT INTO `operation` VALUES ('6', '满天星', '0.0.0.0', 'update', '文章', 'linux的命令操作', '2018-07-10 13:34:32', '1');
INSERT INTO `operation` VALUES ('7', '满天星', '0.0.0.0', 'update', '文章', 'linux的命令操作', '2018-07-10 14:58:42', '1');
INSERT INTO `operation` VALUES ('8', '满天星', '0.0.0.0', 'update', '栏目', 'Linux', '2018-07-10 14:59:08', '1');
INSERT INTO `operation` VALUES ('9', '满天星', '0.0.0.0', 'update', '栏目', 'Linux', '2018-07-10 15:11:03', '1');
INSERT INTO `operation` VALUES ('10', '满天星', '0.0.0.0', 'update', '栏目', 'Linux', '2018-07-10 15:11:39', '1');
INSERT INTO `operation` VALUES ('11', '满天星', '0.0.0.0', 'update', '栏目', 'Linux', '2018-07-10 15:12:10', '1');
INSERT INTO `operation` VALUES ('12', '满天星', '0.0.0.0', 'update', '栏目', 'Linux', '2018-07-10 15:16:00', '1');
INSERT INTO `operation` VALUES ('13', '满天星', '0.0.0.0', 'update', '栏目', 'Linux', '2018-07-10 15:16:51', '1');
INSERT INTO `operation` VALUES ('14', '访问者：寇雅', '0.0.0.0', 'add', '评论', '评论ID：1', '2018-07-17 13:20:45', '1');
INSERT INTO `operation` VALUES ('15', '满天星', '127.0.0.1', 'login', '登录', '登录成功', '2018-07-26 16:30:56', '1');
