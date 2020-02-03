/*
 Navicat Premium Data Transfer

 Source Server         : nvn
 Source Server Type    : MySQL
 Source Server Version : 100408
 Source Host           : localhost:3306
 Source Schema         : laravue

 Target Server Type    : MySQL
 Target Server Version : 100408
 File Encoding         : 65001

 Date: 03/02/2020 13:36:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for post_types
-- ----------------------------
DROP TABLE IF EXISTS `post_types`;
CREATE TABLE `post_types`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id`(`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of post_types
-- ----------------------------
INSERT INTO `post_types` VALUES (1, 'Front End');
INSERT INTO `post_types` VALUES (2, 'PHP');
INSERT INTO `post_types` VALUES (3, 'Laravel');
INSERT INTO `post_types` VALUES (4, 'CI');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `heading` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` mediumblob NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `type_id`(`type_id`) USING BTREE,
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `post_types` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (1, 1, 'test1', 0x7465737431, NULL, NULL, NULL, NULL);
INSERT INTO `posts` VALUES (2, 2, 'heading 1', 0x3C703E436F6E74656E74206F662074686520656469746F722E3C2F703E, '2020-02-01 10:27:03', NULL, NULL, NULL);
INSERT INTO `posts` VALUES (3, 1, '1111111111111111111111111111111111111111111111', 0x3C703E436F6E74656E74206F662074686520656469746F722E3C2F703E, '2020-02-01 10:50:08', NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
