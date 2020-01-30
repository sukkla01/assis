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

 Date: 21/01/2020 08:26:50
*/



-- ----------------------------
-- Table structure for smart_assis_info
-- ----------------------------
DROP TABLE IF EXISTS `smart_assis_info`;
CREATE TABLE `smart_assis_info`  (
  `dep` char(3) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `text1` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NULL DEFAULT NULL,
  `text2` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NULL DEFAULT NULL,
  `text3` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`dep`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = tis620 COLLATE = tis620_thai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of smart_assis_info
-- ----------------------------
INSERT INTO `smart_assis_info` VALUES ('010', 'วัดความดันที่เครื่องวัดความดัน', 'นั่งรอเจ้าหน้าที่ซักประวัติเรียกรับบริการ', NULL);
INSERT INTO `smart_assis_info` VALUES ('021', 'นั่งรอเจ้าหน้าที่เรียกรับบริการ', NULL, NULL);
INSERT INTO `smart_assis_info` VALUES ('014', 'นั่งรอเจ้าหน้าที่เรียกรับบริการ', NULL, NULL);
INSERT INTO `smart_assis_info` VALUES ('011', 'นั่งรอเจ้าหน้าที่เรียกรับบริการ', NULL, NULL);
INSERT INTO `smart_assis_info` VALUES ('005', 'นั่งรอเจ้าหน้าที่เรียกรับบริการ', NULL, NULL);
INSERT INTO `smart_assis_info` VALUES ('012', 'นั่งรอเจ้าหน้าที่เรียกรับบริการ', NULL, NULL);
INSERT INTO `smart_assis_info` VALUES ('007', 'นั่งรอเจ้าหน้าที่เรียกรับบริการ', NULL, NULL);
INSERT INTO `smart_assis_info` VALUES ('016', 'นั่งรอเจ้าหน้าที่เรียกรับบริการ', NULL, NULL);
INSERT INTO `smart_assis_info` VALUES ('030', 'นั่งรอเจ้าหน้าที่เรียกรับบริการ', NULL, NULL);


