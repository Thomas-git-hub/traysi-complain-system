/*
 Navicat MySQL Data Transfer

 Source Server         : local-conn
 Source Server Type    : MySQL
 Source Server Version : 100425 (10.4.25-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : cs-db

 Target Server Type    : MySQL
 Target Server Version : 100425 (10.4.25-MariaDB)
 File Encoding         : 65001

 Date: 12/11/2022 20:40:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for complain_tbl
-- ----------------------------
DROP TABLE IF EXISTS `complain_tbl`;
CREATE TABLE `complain_tbl`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `toda_id` int NOT NULL,
  `offense_id` int NOT NULL,
  `driver_id` int NOT NULL,
  `others` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `upload_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'R' COMMENT 'R-Receiving\r\nP-Processing\r\nRS-Resolved',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id` ASC) USING BTREE,
  INDEX `toda_id`(`toda_id` ASC) USING BTREE,
  INDEX `offense_id`(`offense_id` ASC) USING BTREE,
  INDEX `driver_id`(`driver_id` ASC) USING BTREE,
  CONSTRAINT `complain_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `complain_tbl_ibfk_2` FOREIGN KEY (`toda_id`) REFERENCES `toda_tbl` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `complain_tbl_ibfk_3` FOREIGN KEY (`offense_id`) REFERENCES `offense_tbl` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `complain_tbl_ibfk_4` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of complain_tbl
-- ----------------------------
INSERT INTO `complain_tbl` VALUES (1, 1, 1, 1, 1, 'I hate this driver', NULL, 'R', '2022-11-11 21:42:50', '2022-11-11 21:42:50');
INSERT INTO `complain_tbl` VALUES (2, 1, 2, 1, 2, 'test', NULL, 'R', '2022-11-11 21:49:46', '2022-11-11 21:49:46');

-- ----------------------------
-- Table structure for driver
-- ----------------------------
DROP TABLE IF EXISTS `driver`;
CREATE TABLE `driver`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `plate_no` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_no` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `toda_id` int NOT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Active' COMMENT 'Active or Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `toda_id`(`toda_id` ASC) USING BTREE,
  CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`toda_id`) REFERENCES `toda_tbl` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of driver
-- ----------------------------
INSERT INTO `driver` VALUES (1, 'driver1', 'EDS638', 09473482764, 'driver1@gmail.com', 1, 'Active', '2022-11-11 21:33:57', '2022-11-11 21:33:57');
INSERT INTO `driver` VALUES (2, 'driver2', 'APG4985', 09864379964, 'driver2@gmail.com', 2, 'Active', '2022-11-11 21:38:51', '2022-11-11 21:38:51');

-- ----------------------------
-- Table structure for offense_tbl
-- ----------------------------
DROP TABLE IF EXISTS `offense_tbl`;
CREATE TABLE `offense_tbl`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `offense_desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of offense_tbl
-- ----------------------------
INSERT INTO `offense_tbl` VALUES (1, 'foul words', '1st', '2022-11-11 21:42:02', '2022-11-11 21:42:02');

-- ----------------------------
-- Table structure for president
-- ----------------------------
DROP TABLE IF EXISTS `president`;
CREATE TABLE `president`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_no` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `toda_id` int NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Active' COMMENT 'Active or Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `toda_id`(`toda_id` ASC) USING BTREE,
  CONSTRAINT `president_ibfk_1` FOREIGN KEY (`toda_id`) REFERENCES `toda_tbl` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of president
-- ----------------------------
INSERT INTO `president` VALUES (1, 'pres1', 'pres1@gmail.com', 09876543210, 1, 'jdf12', 'Active', '2022-11-11 21:25:41', '2022-11-11 21:29:17');
INSERT INTO `president` VALUES (2, 'pres2', 'pres2@gmail.com', 09876543210, 2, 'kdjxg', 'Active', '2022-11-11 21:36:15', '2022-11-11 21:36:15');

-- ----------------------------
-- Table structure for reply_tbl
-- ----------------------------
DROP TABLE IF EXISTS `reply_tbl`;
CREATE TABLE `reply_tbl`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `pres_id` int NOT NULL,
  `message` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id` ASC) USING BTREE,
  INDEX `pres_id`(`pres_id` ASC) USING BTREE,
  CONSTRAINT `reply_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `reply_tbl_ibfk_2` FOREIGN KEY (`pres_id`) REFERENCES `president` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reply_tbl
-- ----------------------------

-- ----------------------------
-- Table structure for toda_pres
-- ----------------------------
DROP TABLE IF EXISTS `toda_pres`;
CREATE TABLE `toda_pres`  (
  `toda_id` int NOT NULL,
  `pres_id` int NOT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Active' COMMENT 'Active or Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  INDEX `toda_id`(`toda_id` ASC) USING BTREE,
  INDEX `pres_id`(`pres_id` ASC) USING BTREE,
  CONSTRAINT `toda_pres_ibfk_1` FOREIGN KEY (`toda_id`) REFERENCES `toda_tbl` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `toda_pres_ibfk_2` FOREIGN KEY (`pres_id`) REFERENCES `president` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of toda_pres
-- ----------------------------
INSERT INTO `toda_pres` VALUES (1, 1, 'Active', '2022-11-11 21:31:53', '2022-11-11 21:31:53');
INSERT INTO `toda_pres` VALUES (2, 2, 'Active', '2022-11-11 21:36:44', '2022-11-11 21:36:44');

-- ----------------------------
-- Table structure for toda_tbl
-- ----------------------------
DROP TABLE IF EXISTS `toda_tbl`;
CREATE TABLE `toda_tbl`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `toda_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `from_point` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `to_point` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `color` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of toda_tbl
-- ----------------------------
INSERT INTO `toda_tbl` VALUES (1, 'test', 'from test', 'to test', 'red', '2022-11-11 21:22:25', '2022-11-11 21:22:25');
INSERT INTO `toda_tbl` VALUES (2, 'test toda 1', 'from test 1', 'to test 1', 'green', '2022-11-11 21:36:01', '2022-11-11 21:36:01');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_no` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'user1', 'user1@gmail.com', 09123456789, '2022-11-11 21:19:27', '2022-11-11 21:30:11');

SET FOREIGN_KEY_CHECKS = 1;
