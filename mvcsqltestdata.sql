/*
 Navicat Premium Dump SQL

 Source Server         : localhost
 Source Server Type    : MariaDB
 Source Server Version : 110806 (11.8.6-MariaDB-0+deb13u1 from Debian)
 Source Host           : localhost:3306
 Source Schema         : mvc

 Target Server Type    : MariaDB
 Target Server Version : 110806 (11.8.6-MariaDB-0+deb13u1 from Debian)
 File Encoding         : 65001

 Date: 22/10/2026 20:18:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tblTest
-- ----------------------------
DROP TABLE IF EXISTS `tblTest`;
CREATE TABLE `tblTest`  (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `data` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_uca1400_ai_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_uca1400_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tblTest
-- ----------------------------
INSERT INTO `tblTest` VALUES (0000000001, 'datensatz1');
INSERT INTO `tblTest` VALUES (0000000002, 'datensatz2');
INSERT INTO `tblTest` VALUES (0000000003, 'datensatz3');
INSERT INTO `tblTest` VALUES (0000000004, 'datensatz4');

SET FOREIGN_KEY_CHECKS = 1;
