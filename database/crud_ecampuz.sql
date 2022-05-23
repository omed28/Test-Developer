/*
 Navicat Premium Data Transfer

 Source Server         : serverair
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : 192.168.0.100:3306
 Source Schema         : crud_ecampuz

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 23/05/2022 16:30:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_admin
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin`  (
  `id_user` int(1) NOT NULL AUTO_INCREMENT,
  `nama` varchar(85) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(55) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` enum('root','pengelola','kolektif') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `blokir` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `last_login` date NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES (1, 'Santomi Fitrada', 'santomif', '85775e17b548843ba56da01ce7b9d6bd', 'root', 'N', NULL);
INSERT INTO `tb_admin` VALUES (2, 'Administrasi', 'adminair', '87882dff2743febb6042a49800830d2e', 'pengelola', 'N', NULL);

-- ----------------------------
-- Table structure for tb_anggota
-- ----------------------------
DROP TABLE IF EXISTS `tb_anggota`;
CREATE TABLE `tb_anggota`  (
  `id_anggota` int(255) NOT NULL AUTO_INCREMENT,
  `id_instansi` int(255) NULL DEFAULT NULL,
  `nama_anggota` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat_anggota` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telp_anggota` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_date` datetime(0) NULL DEFAULT NULL,
  `modified_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `modified_date` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_anggota`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_anggota
-- ----------------------------
INSERT INTO `tb_anggota` VALUES (2, 1, 'Prince TChalla', 'Istana Wakanda', '-', 'santomif', '2022-05-23 15:47:12', NULL, NULL);
INSERT INTO `tb_anggota` VALUES (3, 5, 'Naruto', 'Konoha Eks Defender', '-', 'santomif', '2022-05-23 15:53:36', 'santomif', '2022-05-23 16:27:50');

-- ----------------------------
-- Table structure for tb_instansi
-- ----------------------------
DROP TABLE IF EXISTS `tb_instansi`;
CREATE TABLE `tb_instansi`  (
  `id_instansi` int(255) NOT NULL AUTO_INCREMENT,
  `nama_instansi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `deskripsi_instansi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat_instansi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telp_instansi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_date` datetime(0) NULL DEFAULT NULL,
  `modified_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `modified_date` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_instansi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_instansi
-- ----------------------------
INSERT INTO `tb_instansi` VALUES (1, 'Instansi Wakanda', 'Wakanda sebuah instansi yang di ketuai oleh prince tchalla', 'Unknown', '-', '', '2022-05-23 12:46:10', NULL, NULL);
INSERT INTO `tb_instansi` VALUES (5, 'Instansi Konoha', 'Sebuah instansi yang diketuai oleh seorang hokage, terakhir yang menjadi hokage adalah naruto', 'Konoha Jepang', '+031224331', 'santomif', '2022-05-23 14:43:42', 'santomif', '2022-05-23 15:24:26');
INSERT INTO `tb_instansi` VALUES (6, 'Instansi Avenger', 'sebuah kumpulan superhero yang diprakarsai nickfurry', 'New York State', '-', 'santomif', '2022-05-23 15:49:21', NULL, NULL);
INSERT INTO `tb_instansi` VALUES (7, 'Instansi Defender', 'Sebuah kumpulan street superhero', 'New Jersey', '+031224331', 'santomif', '2022-05-23 15:51:58', NULL, NULL);
INSERT INTO `tb_instansi` VALUES (8, 'Instansi Srimulat', 'Grup Lawak Legendaris', '-', '0213762245', 'santomif', '2022-05-23 16:29:10', 'santomif', '2022-05-23 16:29:29');

SET FOREIGN_KEY_CHECKS = 1;
