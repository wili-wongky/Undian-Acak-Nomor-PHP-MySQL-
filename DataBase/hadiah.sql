SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for hadiah
-- ----------------------------
DROP TABLE IF EXISTS `hadiah`;
CREATE TABLE `hadiah`  (
  `no_hadiah` smallint NOT NULL AUTO_INCREMENT,
  `nama_hadiah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sudah_keluar` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`no_hadiah`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hadiah
-- ----------------------------
INSERT INTO `hadiah` VALUES (1, 'Pipa MCP', 'F');
INSERT INTO `hadiah` VALUES (2, 'Pipa MCP', 'F');
INSERT INTO `hadiah` VALUES (3, 'Pipa MCP', 'F');
INSERT INTO `hadiah` VALUES (4, 'Pipa MCP', 'F');
INSERT INTO `hadiah` VALUES (5, 'Pipa MCP', 'F');
INSERT INTO `hadiah` VALUES (6, 'Ipunk Cigar', 'F');
INSERT INTO `hadiah` VALUES (7, 'Ipunk Cigar', 'F');
INSERT INTO `hadiah` VALUES (8, 'Travel Pouch + Bako Linting', 'F');
INSERT INTO `hadiah` VALUES (9, 'Travel Pouch + Bako Linting', 'F');
INSERT INTO `hadiah` VALUES (10, 'Buku + Bako Linting + 1 Tin Bako Pipa', 'F');
INSERT INTO `hadiah` VALUES (11, '2 Tin Bako Pipa + Tamper', 'F');
INSERT INTO `hadiah` VALUES (12, '2 Tin Bako Pipa + Tamper', 'F');
INSERT INTO `hadiah` VALUES (13, '2 Tin Bako Pipa + 1 Bulk Bako Pipa', 'F');
INSERT INTO `hadiah` VALUES (14, '2 Bulk Bako Pipa + 1 Tin Bako Pipa', 'F');
INSERT INTO `hadiah` VALUES (15, 'Bako Linting', 'F');

SET FOREIGN_KEY_CHECKS = 1;
