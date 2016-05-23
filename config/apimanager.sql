/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : apimanager

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2016-05-23 18:41:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for api
-- ----------------------------
DROP TABLE IF EXISTS `api`;
CREATE TABLE `api` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `api_no` int(11) NOT NULL,
  `api_name` varchar(255) DEFAULT NULL,
  `api_category` int(11) DEFAULT NULL,
  `api_url` varchar(255) DEFAULT NULL,
  `api_desc` text,
  `api_parameter` text,
  `api_errorCodes` varchar(255) DEFAULT NULL,
  `api_httpHeaders` varchar(255) DEFAULT NULL,
  `api_return` text,
  `api_doc_author_uid` int(11) DEFAULT NULL,
  `api_dev_uid` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of api
-- ----------------------------

-- ----------------------------
-- Table structure for api_category
-- ----------------------------
DROP TABLE IF EXISTS `api_category`;
CREATE TABLE `api_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_code` int(11) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `p_category_code` int(11) DEFAULT NULL,
  `create_uid` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of api_category
-- ----------------------------
INSERT INTO `api_category` VALUES ('1', '1001', '电销系统接口', '0', '1', null, null);
INSERT INTO `api_category` VALUES ('2', '1002', '审批系统接口', '0', '1', null, null);
INSERT INTO `api_category` VALUES ('3', '1003', 'APP接口', '0', '1', null, null);
INSERT INTO `api_category` VALUES ('4', '1001001', '线索', '1001', '1', null, null);
INSERT INTO `api_category` VALUES ('5', '1001002', '黑名单', '1001', '1', null, null);
INSERT INTO `api_category` VALUES ('6', '1002001', '保理', '1002', '1', null, null);
INSERT INTO `api_category` VALUES ('7', '1002002', '评分卡', '1002', '1', null, null);
INSERT INTO `api_category` VALUES ('8', '1003001', '授信', '1003', '1', null, null);
INSERT INTO `api_category` VALUES ('9', '1003002', '申请', '1004', '1', null, null);
INSERT INTO `api_category` VALUES ('10', '1001002001', '清算黑名单', '1001002', '1', null, null);
INSERT INTO `api_category` VALUES ('11', '1001002002', '审批黑名单', '1001002', '1', null, null);

-- ----------------------------
-- Table structure for error_code
-- ----------------------------
DROP TABLE IF EXISTS `error_code`;
CREATE TABLE `error_code` (
  `id` int(11) NOT NULL,
  `error_code` int(11) DEFAULT NULL,
  `error_desc` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of error_code
-- ----------------------------

-- ----------------------------
-- Table structure for field
-- ----------------------------
DROP TABLE IF EXISTS `field`;
CREATE TABLE `field` (
  `id` int(11) NOT NULL,
  `field_code` varchar(255) DEFAULT NULL,
  `field_name` varchar(255) DEFAULT NULL,
  `field_desc` varchar(255) DEFAULT NULL,
  `field_type` varchar(255) DEFAULT NULL,
  `field_must` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of field
-- ----------------------------

-- ----------------------------
-- Table structure for http_header
-- ----------------------------
DROP TABLE IF EXISTS `http_header`;
CREATE TABLE `http_header` (
  `id` int(11) NOT NULL,
  `header_name` varchar(255) DEFAULT NULL,
  `header_value` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of http_header
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_auth_api_list` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'xuechao', '123456', null, null, null);

-- ----------------------------
-- Table structure for user_group
-- ----------------------------
DROP TABLE IF EXISTS `user_group`;
CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `group_code` int(11) DEFAULT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `group_auth` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_group
-- ----------------------------
