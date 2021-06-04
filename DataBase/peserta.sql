

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for peserta
-- ----------------------------
DROP TABLE IF EXISTS `peserta`;
CREATE TABLE `peserta`  (
  `no_urut` smallint NOT NULL,
  `nama_peserta` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `menang` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hadiah` smallint NULL DEFAULT NULL,
  PRIMARY KEY (`no_urut`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of peserta
-- ----------------------------
INSERT INTO `peserta` VALUES (1, 'Mahmud Riyadi', 'F', 0);
INSERT INTO `peserta` VALUES (2, 'Asbath Ali', 'F', 0);
INSERT INTO `peserta` VALUES (3, 'Wachyu Din', 'F', 0);
INSERT INTO `peserta` VALUES (4, 'Dicky Aulia', 'F', 0);
INSERT INTO `peserta` VALUES (5, 'Setiawan', 'F', 0);
INSERT INTO `peserta` VALUES (6, 'Machmud', 'F', 0);
INSERT INTO `peserta` VALUES (7, 'Blind Wolf', 'F', 0);
INSERT INTO `peserta` VALUES (8, 'Daeng Buana', 'F', 0);
INSERT INTO `peserta` VALUES (9, 'Avitz Zoel', 'F', 0);
INSERT INTO `peserta` VALUES (10, 'Heru Soewono', 'F', 0);
INSERT INTO `peserta` VALUES (11, 'Black Lyds', 'F', 0);
INSERT INTO `peserta` VALUES (12, 'Asep Tjyg Alf', 'F', 0);
INSERT INTO `peserta` VALUES (13, 'BF Kasep', 'F', 0);
INSERT INTO `peserta` VALUES (14, 'Chies Solo', 'F', 0);
INSERT INTO `peserta` VALUES (15, 'P. Sulaiman', 'F', 0);
INSERT INTO `peserta` VALUES (16, 'Agus Endy', 'F', 0);
INSERT INTO `peserta` VALUES (17, 'Pak Har', 'F', 0);
INSERT INTO `peserta` VALUES (18, 'Arief Akbar', 'F', 0);
INSERT INTO `peserta` VALUES (19, 'Ipunk', 'F', 0);
INSERT INTO `peserta` VALUES (20, 'Pramiadi Rahma Putra', 'F', 0);
INSERT INTO `peserta` VALUES (21, 'Willi Wongky', 'F', 0);
INSERT INTO `peserta` VALUES (22, 'Fhuffron J', 'F', 0);
INSERT INTO `peserta` VALUES (23, 'Abi Iswandi', 'F', 0);
INSERT INTO `peserta` VALUES (24, 'no name', 'F', 0);
INSERT INTO `peserta` VALUES (25, 'Mad Spion', 'F', 0);
INSERT INTO `peserta` VALUES (26, 'Nurman D. Taurias', 'F', 0);
INSERT INTO `peserta` VALUES (27, 'Wasis', 'F', 0);
INSERT INTO `peserta` VALUES (28, 'Ahmad S. Nusil', 'F', 0);
INSERT INTO `peserta` VALUES (29, 'Abdullah Gani', 'F', 0);
INSERT INTO `peserta` VALUES (30, 'Arif Arta', 'F', 0);
INSERT INTO `peserta` VALUES (31, 'Muhammad Ainul Yaqin', 'F', 0);
INSERT INTO `peserta` VALUES (32, 'Hendri Jaynikarta', 'F', 0);
INSERT INTO `peserta` VALUES (33, 'Abdurrofi Kahfi', 'F', 0);
INSERT INTO `peserta` VALUES (34, 'Wahyuono Eko', 'F', 0);
INSERT INTO `peserta` VALUES (35, 'Ku Zha', 'F', 0);
INSERT INTO `peserta` VALUES (36, 'Udin Sipatuhang', 'F', 0);
INSERT INTO `peserta` VALUES (37, 'Jaya Kafher', 'F', 0);
INSERT INTO `peserta` VALUES (38, 'Joko Bima', 'F', 0);
INSERT INTO `peserta` VALUES (39, 'Dodik Pukiz', 'F', 0);
INSERT INTO `peserta` VALUES (40, 'Jo Romanus', 'F', 0);

SET FOREIGN_KEY_CHECKS = 1;
