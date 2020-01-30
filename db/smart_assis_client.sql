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

 Date: 21/01/2020 08:24:26
*/


-- ----------------------------
-- Table structure for smart_assis_client
-- ----------------------------
DROP TABLE IF EXISTS `smart_assis_client`;
CREATE TABLE `smart_assis_client`  (
  `cid` varchar(13) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE tis620_thai_ci NULL DEFAULT NULL,
  `hn` varchar(255) CHARACTER SET utf8 COLLATE tis620_thai_ci NULL DEFAULT NULL,
  `pname` varchar(255) CHARACTER SET utf8 COLLATE tis620_thai_ci NULL DEFAULT NULL,
  `fname` varchar(255) CHARACTER SET utf8 COLLATE tis620_thai_ci NULL DEFAULT NULL,
  `lname` varchar(255) CHARACTER SET utf8 COLLATE tis620_thai_ci NULL DEFAULT NULL,
  `sex` varchar(255) CHARACTER SET utf8 COLLATE tis620_thai_ci NULL DEFAULT NULL,
  `birth` varchar(255) CHARACTER SET utf8 COLLATE tis620_thai_ci NULL DEFAULT NULL,
  `hospcode` varchar(255) CHARACTER SET utf8 COLLATE tis620_thai_ci NULL DEFAULT NULL,
  `approved` enum('yes','no') CHARACTER SET utf8 COLLATE tis620_thai_ci NULL DEFAULT NULL,
  `dupdate` varchar(255) CHARACTER SET utf8 COLLATE tis620_thai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`cid`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = tis620 COLLATE = tis620_thai_ci ROW_FORMAT = Dynamic;


