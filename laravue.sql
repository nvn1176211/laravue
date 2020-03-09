/*
 Navicat Premium Data Transfer

 Source Server         : nvn
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : laravue

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 09/03/2020 17:10:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for answers
-- ----------------------------
DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question_id` int(10) UNSIGNED NOT NULL,
  `detail` mediumblob NULL,
  `created_by` int(10) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_by` int(10) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `question_id`(`question_id`) USING BTREE,
  CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of answers
-- ----------------------------
INSERT INTO `answers` VALUES (1, 1, 0x3C703E266C743B3F5048503C2F703E3C703E2464617461203D2027776861746576657220796F752772652073657269616C697A696E67273B3C2F703E3C703E6865616465722827436F6E74656E742D547970653A206170706C69636174696F6E2F6A736F6E27293B3C2F703E3C703E6563686F206A736F6E5F656E636F6465282464617461293B3C2F703E, NULL, NULL, NULL, NULL);
INSERT INTO `answers` VALUES (2, 1, 0x74657374, NULL, NULL, NULL, NULL);
INSERT INTO `answers` VALUES (3, 2, 0x74657374, NULL, NULL, NULL, NULL);
INSERT INTO `answers` VALUES (4, 3, 0x74657374, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for questions
-- ----------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag` int(10) UNSIGNED NOT NULL,
  `heading` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `detail` mediumblob NULL,
  `created_by` int(10) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_by` int(10) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tag`(`tag`) USING BTREE,
  CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`tag`) REFERENCES `tags` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES (1, 1, 'Returning JSON from a PHP Script\r\nReturning JSON from a PHP Script', 0x3C703E492077616E7420746F2072657475726E204A534F4E2066726F6D206120504850207363726970742E3C2F703E3C703E446F2049206A757374206563686F2074686520726573756C743F20446F2049206861766520746F207365742074686520436F6E74656E742D54797065206865616465723F3C2F703E);
INSERT INTO `questions` VALUES (2, 2, 'test', 0x74657374);
INSERT INTO `questions` VALUES (3, 2, 'test', 0x74657374);

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES (1, 'php');
INSERT INTO `tags` VALUES (2, 'html');
INSERT INTO `tags` VALUES (3, 'css');
INSERT INTO `tags` VALUES (4, 'javascript');
INSERT INTO `tags` VALUES (5, 'vue');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin1', '$2y$10$hQoy458eP/7riJnpOxkL5OgGr0LUhabufeney0dVawUHPWs9WAKvu');

SET FOREIGN_KEY_CHECKS = 1;
