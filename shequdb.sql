/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : shequdb

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 09/04/2020 14:56:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article`  (
  `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `article_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `article_content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `reg_time` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES (1, '健康讲座', '健康讲座！\r\n本周日上午9点，将在XX举行健康讲座，请有意愿的人员前去参加。', '2020-03-08 21:18:58');
INSERT INTO `article` VALUES (8, '拔河友谊赛', '明天早上10点将在社区的公园举行拔河比赛！\r\n有意参加的人员请在8点到场开始报名！\r\n比赛获胜的队伍将会获得小奖品！', '2020-04-07 15:15:49');

-- ----------------------------
-- Table structure for help
-- ----------------------------
DROP TABLE IF EXISTS `help`;
CREATE TABLE `help`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `reg_time` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of help
-- ----------------------------
INSERT INTO `help` VALUES (3, '张三', '12345678901', '114.30391, 35.75457', '2020-03-08 17:05:46');
INSERT INTO `help` VALUES (5, '李四', '12345678902', '123,321', '2020-03-08 17:05:52');
INSERT INTO `help` VALUES (6, '张三', '12345678901', '114.30391, 35.75457', '2020-03-31 17:06:12');
INSERT INTO `help` VALUES (10, '小溪流', '13939248103', '114.30391, 35.75457', '2020-03-30 23:09:08');

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login`  (
  `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varbinary(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `inshequ` int(10) NOT NULL,
  `reg_time` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  `manager_name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `manager_sex` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `manager_age` int(5) NOT NULL,
  `manager_idcard` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `manager_phone` int(11) NOT NULL,
  PRIMARY KEY (`id`, `name`, `manager_idcard`, `manager_phone`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES (1, 0x61646D696E, 'e10adc3949ba59abbe56e057f20f883e', 0, '2020-03-08 18:47:43', '', '', 0, '', 0);
INSERT INTO `login` VALUES (2, 0x61646D696E32, 'e10adc3949ba59abbe56e057f20f883e', 0, '2020-03-08 18:51:17', '', '', 0, '', 0);
INSERT INTO `login` VALUES (3, 0x61646D696E33, 'e10adc3949ba59abbe56e057f20f883e', 0, '2020-03-08 18:52:31', '', '', 0, '', 0);

-- ----------------------------
-- Table structure for oldperson
-- ----------------------------
DROP TABLE IF EXISTS `oldperson`;
CREATE TABLE `oldperson`  (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gender` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `minzu` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `age` int(5) NOT NULL,
  `shenfenzheng` varchar(18) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hunyin` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `duju` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `zinv` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Inshequ` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lianxiren` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lianxinrenphone` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `reg_date` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of oldperson
-- ----------------------------
INSERT INTO `oldperson` VALUES (1, '张三', '男', '汉族', 66, '41061119540101****', '已婚', '是', '有', '暂无', '12345678900', '河南省鹤壁市', '张某', '12345678901', '2020-03-08 21:49:58');
INSERT INTO `oldperson` VALUES (2, '李四', '男', '汉族', 65, '41061119550202****', '已婚', '否', '有', '暂无', '12345678911', '河南省鹤壁市', '李某', '12345678912', '2020-03-08 21:50:03');
INSERT INTO `oldperson` VALUES (3, '王五', '男', '汉族', 67, '41061119530303****', '未婚', '是', '无', '暂无', '12345678921', '', '王某', '12345678922', '2020-03-08 21:50:08');

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` datetime(0) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for shequmessage
-- ----------------------------
DROP TABLE IF EXISTS `shequmessage`;
CREATE TABLE `shequmessage`  (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `shequnum` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `shequname` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `shengfen` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `city` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `xianqu` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jiedao` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fuzherenname` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fuzherenphone` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `shequphone` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `shequaddress` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `reg_date` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
