/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : kk-blog

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2018-12-14 11:35:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for imgs
-- ----------------------------
DROP TABLE IF EXISTS `imgs`;
CREATE TABLE `imgs` (
  `imgId` int(11) NOT NULL AUTO_INCREMENT COMMENT '图片id',
  `imgSrc` text COMMENT '图片地址',
  `imgName` varchar(255) DEFAULT NULL COMMENT '图片名',
  `imgTitle` varchar(255) DEFAULT NULL COMMENT '图片标题',
  `addTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `lastModifyTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后修改时间',
  `status` int(1) DEFAULT '1' COMMENT '状态值：1为正常显示，0为回收站',
  PRIMARY KEY (`imgId`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of imgs
-- ----------------------------
INSERT INTO `imgs` VALUES ('1', 'admin/Upload/20180322/aff9ef68d380aa85d8d74c5c2e97abdb.jpg', null, null, '2018-03-22 20:08:39', '2018-03-22 22:18:52', '1');
INSERT INTO `imgs` VALUES ('2', 'admin/Upload/20180322/8fabcfeece982c55197f0c88c3b04e6b.jpg', null, null, '2018-03-22 21:15:53', '2018-03-22 21:15:53', '1');
INSERT INTO `imgs` VALUES ('3', 'admin/Upload/20180322/d7ed889dab713b2b7f07bc9522e2ef51.jpg', null, null, '2018-03-22 21:15:53', '2018-03-22 21:15:53', '1');
INSERT INTO `imgs` VALUES ('4', 'admin/Upload/20180322/38fd7535e157c6848adae88ad72a1c67.jpg', null, null, '2018-03-22 21:15:53', '2018-03-22 21:15:53', '1');
INSERT INTO `imgs` VALUES ('5', 'admin/Upload/20180322/a25baab5837089e15d807461db8cdaae.jpg', null, null, '2018-03-22 21:15:53', '2018-03-22 21:15:53', '1');
INSERT INTO `imgs` VALUES ('6', 'admin/Upload/20180322/1d927989b8b4705dab38b41288812c1e.jpg', null, null, '2018-03-22 21:15:53', '2018-03-22 21:15:53', '1');
INSERT INTO `imgs` VALUES ('7', 'admin/Upload/20180322/33dbc138a472eeff572831d74e349df1.jpg', null, null, '2018-03-22 21:15:53', '2018-03-22 21:15:53', '1');
INSERT INTO `imgs` VALUES ('8', 'admin/Upload/20180322/28c27271395117215c743ab7416d1820.jpg', null, null, '2018-03-22 21:15:53', '2018-03-22 21:15:53', '1');
INSERT INTO `imgs` VALUES ('9', 'admin/Upload/20180322/b89a8eac392872c6b0f46acfaccb9ddd.jpg', null, null, '2018-03-22 21:22:21', '2018-03-22 21:22:21', '1');
INSERT INTO `imgs` VALUES ('10', 'admin/Upload/20180322/95a49e247af2e7bdbe59daf146cbf044.jpg', null, null, '2018-03-22 21:53:44', '2018-03-22 21:53:44', '1');
INSERT INTO `imgs` VALUES ('11', 'admin/Upload/20180322/ec6877fc22349363be9d90861811b27c.jpg', null, null, '2018-03-22 21:55:20', '2018-03-22 21:55:20', '1');
INSERT INTO `imgs` VALUES ('12', 'admin/Upload/20180322/bfce830f0dbb76c932c001ec0b246039.jpg', null, null, '2018-03-22 21:56:36', '2018-03-22 21:56:36', '1');
INSERT INTO `imgs` VALUES ('13', 'admin/Upload/20180322/6093cc1b27b53cafc76a3f09099ca877.jpg', null, null, '2018-03-22 21:56:36', '2018-03-22 21:56:36', '1');
INSERT INTO `imgs` VALUES ('14', 'admin/Upload/20180322/8110b871e70e0b2772910775e674690c.jpg', null, null, '2018-03-22 21:56:36', '2018-03-22 21:56:36', '1');
INSERT INTO `imgs` VALUES ('15', 'admin/Upload/20180322/fc69978a08184a5db4077c97187944c9.jpg', null, null, '2018-03-22 21:56:36', '2018-03-22 22:04:14', '1');
INSERT INTO `imgs` VALUES ('16', 'admin/Upload/20180322/331f40ee72aea84579e05a64757b72bb.jpg', null, null, '2018-03-22 21:56:36', '2018-03-22 21:56:36', '1');
INSERT INTO `imgs` VALUES ('17', 'admin/Upload/20180322/d3fe5a34e26b8716a79f89cad2208d2b.jpg', null, null, '2018-03-22 21:56:36', '2018-03-22 21:56:36', '1');
INSERT INTO `imgs` VALUES ('18', 'admin/Upload/20180322/372ba23acad698af3dc836443f28eab9.jpg', null, null, '2018-03-22 21:56:36', '2018-03-22 21:56:36', '1');
INSERT INTO `imgs` VALUES ('19', 'admin/Upload/20180323/7a01a8d7475f920d00df20b4ab2c26eb.jpg', null, null, '2018-03-23 08:50:49', '2018-03-23 08:50:49', '1');
INSERT INTO `imgs` VALUES ('20', 'admin/Upload/20180323/2c456fd077e7abad68754a4c98ecc352.jpg', null, null, '2018-03-23 08:50:50', '2018-03-23 08:50:50', '1');
INSERT INTO `imgs` VALUES ('21', 'admin/Upload/20180323/b55611dd1de79d602eeb7cea4ae7901e.jpg', null, null, '2018-03-23 08:50:50', '2018-03-23 08:50:50', '1');
INSERT INTO `imgs` VALUES ('22', 'admin/Upload/20180323/e5163faa3ca235f8e1c67b5b16ea1c59.jpg', null, null, '2018-03-23 08:50:50', '2018-03-23 08:50:50', '1');
INSERT INTO `imgs` VALUES ('23', 'admin/Upload/20180323/772889ef608341e7f09cd3846e0fd3ff.jpg', null, null, '2018-03-23 08:50:50', '2018-03-23 08:50:50', '1');
INSERT INTO `imgs` VALUES ('24', 'admin/Upload/20180323/7b324d3680ca9a706dfc7fae97c73742.jpg', null, null, '2018-03-23 08:50:50', '2018-03-23 08:50:50', '1');
INSERT INTO `imgs` VALUES ('25', 'admin/Upload/20180323/6e5bbce9cc98d09c6cedfbf0c255f396.jpg', null, null, '2018-03-23 08:50:50', '2018-03-23 08:50:50', '1');
INSERT INTO `imgs` VALUES ('26', 'admin/Upload/20180323/6981c95d7307e10d68ab055368c39763.jpg', null, null, '2018-03-23 08:50:50', '2018-03-23 08:50:50', '1');
INSERT INTO `imgs` VALUES ('27', 'admin/Upload/20180323/bc124ba07544fdd40d5489a8d0a8a443.jpg', null, null, '2018-03-23 08:50:50', '2018-03-23 08:50:50', '1');
INSERT INTO `imgs` VALUES ('28', 'admin/Upload/20180323/ae8c9040938e59a90a10306ef737d210.jpg', null, null, '2018-03-23 08:50:51', '2018-03-23 08:50:51', '1');
INSERT INTO `imgs` VALUES ('29', 'admin/Upload/20180323/ee65398af3250f7d60e164423e904a83.jpg', null, null, '2018-03-23 08:50:51', '2018-03-23 08:50:51', '1');
INSERT INTO `imgs` VALUES ('30', 'admin/Upload/20180323/d54bae1d70dfb77b24d3c925603eaec5.jpg', null, null, '2018-03-23 08:50:51', '2018-03-23 08:50:51', '1');
INSERT INTO `imgs` VALUES ('31', 'admin/Upload/20180323/b135f0f73de442830c0d334c5bcc7bf5.jpg', null, null, '2018-03-23 08:50:51', '2018-03-23 08:50:51', '1');
INSERT INTO `imgs` VALUES ('32', 'admin/Upload/20180323/b6b37dbb09f3c6d34fb578555a8fbc24.jpg', null, null, '2018-03-23 08:50:51', '2018-03-23 08:50:51', '1');
INSERT INTO `imgs` VALUES ('33', 'admin/Upload/20180323/cb6c7b837210055e58ecec5019b2550d.jpg', null, null, '2018-03-23 08:50:51', '2018-03-23 08:50:51', '1');
INSERT INTO `imgs` VALUES ('34', 'admin/Upload/20180323/38ac32e24160a522108a4a20709f34dc.jpg', null, null, '2018-03-23 08:50:51', '2018-03-23 08:50:51', '1');
INSERT INTO `imgs` VALUES ('35', 'admin/Upload/20180323/bda947957dcda49f6adf55fd6e7a4e95.jpg', null, null, '2018-03-23 08:50:51', '2018-03-23 08:50:51', '1');
INSERT INTO `imgs` VALUES ('36', 'admin/Upload/20180323/3c15240a1f6acb2058049498ae1afb1a.jpg', null, null, '2018-03-23 08:50:51', '2018-03-23 08:50:51', '1');
INSERT INTO `imgs` VALUES ('37', 'admin/Upload/20180323/2315682c3eae97c5cd128077562af302.jpg', null, null, '2018-03-23 08:50:51', '2018-03-23 08:50:51', '1');
INSERT INTO `imgs` VALUES ('38', 'admin/Upload/20180323/32bb21d5ad319ce2ed5ea9eb56a662e8.jpg', null, null, '2018-03-23 08:50:51', '2018-03-23 08:50:51', '1');
INSERT INTO `imgs` VALUES ('39', 'admin/Upload/20180323/8be85f78087529eb99bd24ad6f91e013.jpg', null, null, '2018-03-23 10:28:14', '2018-03-23 10:28:14', '1');
INSERT INTO `imgs` VALUES ('40', 'admin/Upload/20180323/6a4c5202f92f1bed23983c0ba87d0045.jpg', null, null, '2018-03-23 10:28:14', '2018-03-23 10:28:14', '1');
INSERT INTO `imgs` VALUES ('41', 'admin/Upload/20180323/85e547e5f0da7fa75d60ee6380e616d6.jpg', null, null, '2018-03-23 10:28:14', '2018-03-23 10:28:14', '1');
INSERT INTO `imgs` VALUES ('42', 'admin/Upload/20180323/ddff3fac22773ffae1d77f4c721eee79.jpg', null, null, '2018-03-23 10:28:14', '2018-03-23 10:28:14', '1');
INSERT INTO `imgs` VALUES ('43', 'admin/Upload/20180323/24766c8fb1577ac8c22b06f5e6b59562.jpg', null, null, '2018-03-23 10:28:14', '2018-03-23 10:28:14', '1');
INSERT INTO `imgs` VALUES ('44', 'admin/Upload/20180323/a039cd54b407c96270b652f54fe358d4.jpg', null, null, '2018-03-23 10:28:14', '2018-03-23 10:28:14', '1');
INSERT INTO `imgs` VALUES ('45', 'admin/Upload/20180323/b5787cc3ebab4a5e49bde2a04ef8e22a.jpg', null, null, '2018-03-23 10:28:14', '2018-03-23 10:28:14', '1');
INSERT INTO `imgs` VALUES ('46', 'admin/Upload/20180323/a3ac663d0be012c0fdd3596703db169b.jpg', null, null, '2018-03-23 10:35:54', '2018-03-23 10:35:54', '1');
INSERT INTO `imgs` VALUES ('47', 'admin/Upload/20180323/59504a265837c94869fef0907e59fdb4.jpg', null, null, '2018-03-23 10:35:54', '2018-03-23 10:35:54', '1');
INSERT INTO `imgs` VALUES ('48', 'admin/Upload/20180323/9d2d8a4f7034b7d3e08207ea7bfcc226.jpg', null, null, '2018-03-23 10:35:54', '2018-03-23 10:35:54', '1');
INSERT INTO `imgs` VALUES ('49', 'admin/Upload/20180323/b82026f6c49117afd74ff8d5975c3d40.jpg', null, null, '2018-03-23 10:35:54', '2018-03-23 10:35:54', '1');
INSERT INTO `imgs` VALUES ('50', 'admin/Upload/20180323/dd715f7d57068b308c1feee64c676e5f.jpg', null, null, '2018-03-23 10:35:54', '2018-03-23 10:35:54', '1');
INSERT INTO `imgs` VALUES ('51', 'admin/Upload/20180323/a1698a22f12c95c4b9f59f4c74d892fe.jpg', null, null, '2018-03-23 10:35:54', '2018-03-23 10:35:54', '1');
INSERT INTO `imgs` VALUES ('52', 'admin/Upload/20180323/f50392c7c25a87ed0712e3a6fd9c7664.jpg', null, null, '2018-03-23 10:35:54', '2018-03-23 10:35:54', '1');
INSERT INTO `imgs` VALUES ('53', 'admin/Upload/20180323/4c7d85a18a2b67f99ead817654ace5cc.jpg', null, null, '2018-03-23 10:35:54', '2018-03-23 10:35:54', '1');
INSERT INTO `imgs` VALUES ('54', 'admin/Upload/20180323/324ee936addf4a4e0fe33d3a8a8192c8.jpg', null, null, '2018-03-23 10:35:54', '2018-03-23 10:35:54', '1');
INSERT INTO `imgs` VALUES ('55', 'admin/Upload/20180323/328c4e3f8dd4bd3cd428f5a8278cbf15.jpg', null, null, '2018-03-23 10:35:54', '2018-03-23 10:35:54', '1');
INSERT INTO `imgs` VALUES ('56', 'admin/Upload/20180323/74db2a8fac99ff1b0679c684a2e1f6d8.jpg', null, null, '2018-03-23 10:35:54', '2018-03-23 10:35:54', '1');
INSERT INTO `imgs` VALUES ('57', 'admin/Upload/20180323/bc1359da5374ceccb9212e1d72b67753.jpg', null, null, '2018-03-23 10:35:55', '2018-03-23 10:35:55', '1');
INSERT INTO `imgs` VALUES ('58', 'admin/Upload/20180323/f5f3ad644e4927d1529b9c20b57d429a.jpg', null, null, '2018-03-23 10:35:55', '2018-03-23 10:35:55', '1');
INSERT INTO `imgs` VALUES ('59', 'admin/Upload/20180323/d6a23b6df9a9453cebdcfc00bd5b2a49.jpg', null, null, '2018-03-23 10:35:55', '2018-03-23 10:35:55', '1');
INSERT INTO `imgs` VALUES ('60', 'admin/Upload/20180323/186beeeddec294ccce5091b486c3ea02.jpg', null, null, '2018-03-23 10:35:55', '2018-03-23 10:35:55', '1');
INSERT INTO `imgs` VALUES ('61', 'admin/Upload/20180323/821533d450f5126ce248cbbfb5c61b49.jpg', null, null, '2018-03-23 10:35:55', '2018-03-23 10:35:55', '1');
INSERT INTO `imgs` VALUES ('62', 'admin/Upload/20180323/16fc9f777af455bd3d4844020200e922.jpg', null, null, '2018-03-23 10:35:55', '2018-03-23 10:35:55', '1');
INSERT INTO `imgs` VALUES ('63', 'admin/Upload/20180323/6a468554b7b50d0d69a12dc55d6317b8.jpg', null, null, '2018-03-23 10:35:55', '2018-03-23 10:35:55', '1');
INSERT INTO `imgs` VALUES ('64', 'admin/Upload/20180323/5466e4ffb03e2d4ba93c3609682cb0c6.jpg', null, null, '2018-03-23 10:35:55', '2018-03-23 10:35:55', '1');
INSERT INTO `imgs` VALUES ('65', 'admin/Upload/20180323/2980415e96c9a64115d30f77bf74fa4f.jpg', null, null, '2018-03-23 10:35:55', '2018-03-23 10:35:55', '1');
INSERT INTO `imgs` VALUES ('66', 'admin/Upload/20180323/73c83bfd3e0927f8002f6d840c7ff450.jpg', null, null, '2018-03-23 10:38:36', '2018-03-23 10:38:36', '1');
INSERT INTO `imgs` VALUES ('67', 'admin/Upload/20180323/1d8977dc9cacdcc9cff1e21626152701.jpg', null, null, '2018-03-23 10:45:22', '2018-03-23 10:45:22', '1');
INSERT INTO `imgs` VALUES ('68', 'admin/Upload/20180323/beb26958d58595c1c40199e3cddbd1a5.jpg', null, null, '2018-03-23 10:45:22', '2018-03-23 10:45:22', '1');
INSERT INTO `imgs` VALUES ('69', 'admin/Upload/20180323/d7ca0ed39cfd268b3408128cf9cfde67.jpg', null, null, '2018-03-23 10:45:22', '2018-03-23 10:45:22', '1');
INSERT INTO `imgs` VALUES ('70', 'admin/Upload/20180323/d3ecdac193d2db891301d2b79dc50a79.jpg', null, null, '2018-03-23 10:45:22', '2018-03-23 10:45:22', '1');
INSERT INTO `imgs` VALUES ('71', 'admin/Upload/20180323/30bd92f96cefea873915e544160c3099.jpg', null, null, '2018-03-23 10:45:22', '2018-03-23 10:45:22', '1');
INSERT INTO `imgs` VALUES ('72', 'admin/Upload/20180323/117305944f5ed0667037241af532bd8b.jpg', null, null, '2018-03-23 10:45:22', '2018-03-23 10:45:22', '1');
INSERT INTO `imgs` VALUES ('73', 'admin/Upload/20180323/bc9fad379291f20fa044e15d08841d0f.jpg', null, null, '2018-03-23 10:45:22', '2018-03-23 10:45:22', '1');
INSERT INTO `imgs` VALUES ('74', 'admin/Upload/20180323/a9f5268f21474f0eaae575bdb926bdbc.jpg', null, null, '2018-03-23 10:45:22', '2018-03-23 10:45:22', '1');
INSERT INTO `imgs` VALUES ('75', 'admin/Upload/20180323/7f2bf7901e2a6819f30da2f39c28a010.jpg', null, null, '2018-03-23 10:45:22', '2018-03-23 10:45:22', '1');
INSERT INTO `imgs` VALUES ('76', 'admin/Upload/20180323/fa11c34557c620f87d420ea82e495a28.jpg', null, null, '2018-03-23 10:45:22', '2018-03-23 10:45:22', '1');
INSERT INTO `imgs` VALUES ('77', 'admin/Upload/20180323/4784d48cabcdadd3be9639c8c3dd4a99.jpg', null, null, '2018-03-23 10:45:23', '2018-03-23 10:45:23', '1');
INSERT INTO `imgs` VALUES ('78', 'admin/Upload/20180323/87aeb40f994f217cda8612684687dab8.jpg', null, null, '2018-03-23 10:45:23', '2018-03-23 10:45:23', '1');
INSERT INTO `imgs` VALUES ('79', 'admin/Upload/20180323/dbb6ee61f20ac84d636e6604853fe17c.jpg', null, null, '2018-03-23 10:45:23', '2018-03-23 10:45:23', '1');
INSERT INTO `imgs` VALUES ('80', 'admin/Upload/20180323/c4bb9ae64afc3f10287b5f86763528eb.jpg', null, null, '2018-03-23 10:45:23', '2018-03-23 10:45:23', '1');
INSERT INTO `imgs` VALUES ('81', 'admin/Upload/20180323/18120908bf0ea42868e4e98e578d4ab2.jpg', null, null, '2018-03-23 10:45:23', '2018-03-23 10:45:23', '1');
INSERT INTO `imgs` VALUES ('82', 'admin/Upload/20180323/c58e0341493f9848cd34ddf6df709e3d.jpg', null, null, '2018-03-23 10:45:23', '2018-03-23 10:45:23', '1');
INSERT INTO `imgs` VALUES ('83', 'admin/Upload/20180323/da5eea66f73e7d319bdcb7412038dc2e.jpg', null, null, '2018-03-23 10:45:23', '2018-03-23 10:45:23', '1');
INSERT INTO `imgs` VALUES ('84', 'admin/Upload/20180323/c91de644c319a4740a8f954e3e6be855.jpg', null, null, '2018-03-23 10:45:23', '2018-03-23 10:45:23', '1');
INSERT INTO `imgs` VALUES ('85', 'admin/Upload/20180323/2a13ab616e33e9986a1598805f8f158e.jpg', null, null, '2018-03-23 10:45:23', '2018-03-23 10:45:23', '1');
INSERT INTO `imgs` VALUES ('86', 'admin/Upload/20180323/673a9e72d08cdcbe60e02bf404ed03fc.jpg', null, null, '2018-03-23 10:45:23', '2018-03-23 10:45:23', '1');
INSERT INTO `imgs` VALUES ('87', 'admin/Upload/20180323/6340d025c6b101d434b16aea227c65b3.jpg', null, null, '2018-03-23 11:03:35', '2018-03-23 11:03:35', '1');
INSERT INTO `imgs` VALUES ('88', 'admin/Upload/20180323/4f70bcab1fb3497df281180d370aa8dd.jpg', null, null, '2018-03-23 11:03:35', '2018-03-23 11:03:35', '1');
INSERT INTO `imgs` VALUES ('89', 'admin/Upload/20180323/126bf6a3474aad3043054f9fa42dacac.jpg', null, null, '2018-03-23 11:03:35', '2018-03-23 11:03:35', '1');
INSERT INTO `imgs` VALUES ('90', 'admin/Upload/20180323/f4f7fb6bc63e442aa06a6051760661bd.jpg', null, null, '2018-03-23 11:03:35', '2018-03-23 11:03:35', '1');
INSERT INTO `imgs` VALUES ('91', 'admin/Upload/20180323/e9fa54faca2dabf0e48eb71284d23f89.jpg', null, null, '2018-03-23 11:03:35', '2018-03-23 11:03:35', '1');
INSERT INTO `imgs` VALUES ('92', 'admin/Upload/20180323/790f8a11e260817099b5a421cc3bb8e2.jpg', null, null, '2018-03-23 11:03:35', '2018-03-23 11:03:35', '1');
INSERT INTO `imgs` VALUES ('93', 'admin/Upload/20180323/c0b8435bb613a6b950c63c8c03231c81.jpg', null, null, '2018-03-23 11:03:35', '2018-03-23 11:03:35', '1');
INSERT INTO `imgs` VALUES ('94', 'admin/Upload/20180323/c24c3944e7ee2a4e1b98912956531bb7.jpg', null, null, '2018-03-23 11:03:35', '2018-03-23 11:03:35', '1');
INSERT INTO `imgs` VALUES ('95', 'admin/Upload/20180323/1e9a5cbf0ea33c361b014ef96abe7a98.jpg', null, null, '2018-03-23 11:03:35', '2018-03-23 11:03:35', '1');
INSERT INTO `imgs` VALUES ('96', 'admin/Upload/20180323/c3c890156122985d4a228aa0b4b05945.jpg', null, null, '2018-03-23 11:03:35', '2018-03-23 11:03:35', '1');
INSERT INTO `imgs` VALUES ('97', 'admin/Upload/20180323/ab2f461c0854a070486b38d5b55e8778.jpg', null, null, '2018-03-23 11:03:35', '2018-03-23 11:03:35', '1');
INSERT INTO `imgs` VALUES ('98', 'admin/Upload/20180323/cc0dbf05f2faa243b022e6e2eb206d54.jpg', null, null, '2018-03-23 11:03:35', '2018-03-23 11:03:35', '1');
INSERT INTO `imgs` VALUES ('99', 'admin/Upload/20180323/583bce43d02dd9d5bd309d3ec37a9afc.jpg', null, null, '2018-03-23 11:03:35', '2018-03-23 11:03:35', '1');
INSERT INTO `imgs` VALUES ('100', 'admin/Upload/20180323/0aed95f87431de35c79b1cf9227cfa76.jpg', null, null, '2018-03-23 11:03:36', '2018-03-23 11:03:36', '1');
INSERT INTO `imgs` VALUES ('101', 'admin/Upload/20180323/ed6a07e318a261b36fa97fb0140f0455.jpg', null, null, '2018-03-23 11:03:36', '2018-03-23 11:03:36', '1');
INSERT INTO `imgs` VALUES ('102', 'admin/Upload/20180323/8e575f365dab5f55b60c305bc0a506fc.jpg', null, null, '2018-03-23 11:03:36', '2018-03-23 11:03:36', '1');
INSERT INTO `imgs` VALUES ('103', 'admin/Upload/20180323/bb5f75337e5bbadfbbc97f02c4d6fc5d.jpg', null, null, '2018-03-23 11:03:36', '2018-03-23 11:03:36', '1');
INSERT INTO `imgs` VALUES ('104', 'admin/Upload/20180323/a77cb168d8d8d0edeab42e7c11340332.jpg', null, null, '2018-03-23 11:03:36', '2018-03-23 11:03:36', '1');
INSERT INTO `imgs` VALUES ('105', 'admin/Upload/20180323/27f030c7cb6bff509ff434fefc059135.jpg', null, null, '2018-03-23 11:03:36', '2018-03-23 11:03:36', '1');
INSERT INTO `imgs` VALUES ('106', 'admin/Upload/20180323/5d8f76d1528377ff0080d6b6b4435355.jpg', null, null, '2018-03-23 11:03:36', '2018-03-23 11:03:36', '1');
INSERT INTO `imgs` VALUES ('107', 'admin/Upload/20180324/9e7ca202d551abd2e64d0ef0df789ca2.jpg', null, null, '2018-03-24 16:37:09', '2018-03-24 16:37:09', '1');
INSERT INTO `imgs` VALUES ('108', 'admin/Upload/20180324/34338ca7a7e21013313a98fd70bed968.jpg', null, null, '2018-03-24 17:11:23', '2018-03-24 17:11:23', '1');
INSERT INTO `imgs` VALUES ('109', 'admin/Upload/20180324/2b89e4cff160951e7acfdeba66515433.jpg', null, null, '2018-03-24 17:11:54', '2018-03-24 17:11:54', '1');
INSERT INTO `imgs` VALUES ('110', 'admin/Upload/20180324/84647ed4a456d3d0a65a2975054e42af.jpg', null, null, '2018-03-24 17:11:55', '2018-03-24 17:11:55', '1');
INSERT INTO `imgs` VALUES ('111', 'admin/Upload/20180324/d003bf1bf8f8a891087f79ca53e22286.jpg', null, null, '2018-03-24 17:11:55', '2018-03-24 17:11:55', '1');
INSERT INTO `imgs` VALUES ('112', 'admin/Upload/20180324/60ecc693322bdd9d7d8ef213bb479344.jpg', null, null, '2018-03-24 17:11:55', '2018-03-24 17:11:55', '1');
