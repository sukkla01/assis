/*
 Navicat Premium Data Transfer

 Source Server         : hosxp
 Source Server Type    : MySQL
 Source Server Version : 100119
 Source Host           : 10.10.10.10:3306
 Source Schema         : hos

 Target Server Type    : MySQL
 Target Server Version : 100119
 File Encoding         : 65001

 Date: 21/01/2020 08:27:32
*/



-- ----------------------------
-- Table structure for smart_assis_log
-- ----------------------------
DROP TABLE IF EXISTS `smart_assis_log`;
CREATE TABLE `smart_assis_log`  (
  `uuid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'UUID',
  `hn` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `view` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`uuid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
