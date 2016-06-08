/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : apimanager

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2016-06-08 16:38:44
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
INSERT INTO `api_category` VALUES ('1', '1001', '电销系统接口1', '0', '1', null, '2016');
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `error_code` int(11) DEFAULT NULL,
  `error_desc` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of error_code
-- ----------------------------
INSERT INTO `error_code` VALUES ('1', '201', '用户名或密码错误', '1', null, null);
INSERT INTO `error_code` VALUES ('2', '202', '禁止访问', '1', '1464248801', '1464248801');
INSERT INTO `error_code` VALUES ('3', '203', 'fsdkjasd', '1', '1464248803', '2016');
INSERT INTO `error_code` VALUES ('4', '204', 'dsfa', '1', '1464248803', '2016');
INSERT INTO `error_code` VALUES ('5', '202', '禁止访问', '1', '1464248804', '1464248804');
INSERT INTO `error_code` VALUES ('6', '202', '禁止访问', '1', '1464248804', '1464248804');
INSERT INTO `error_code` VALUES ('7', '202', '禁止访问', '1', '1464248804', '1464248804');
INSERT INTO `error_code` VALUES ('8', '202', '禁止访问', '1', '1464248804', '1464248804');
INSERT INTO `error_code` VALUES ('9', '202', '禁止访问', '1', '1464248804', '1464248804');
INSERT INTO `error_code` VALUES ('10', '202', '禁止访问', '1', '1464248805', '1464248805');
INSERT INTO `error_code` VALUES ('11', '202', '禁止访问', '1', '1464248805', '1464248805');
INSERT INTO `error_code` VALUES ('12', '202', '禁止访问', '1', '1464248805', '1464248805');
INSERT INTO `error_code` VALUES ('13', '202', '禁止访问', '1', '1464248805', '1464248805');
INSERT INTO `error_code` VALUES ('14', '202', '禁止访问', '1', '1464248805', '1464248805');
INSERT INTO `error_code` VALUES ('15', '202', '禁止访问', '1', '1464248806', '1464248806');
INSERT INTO `error_code` VALUES ('16', '202', '禁止访问', '1', '1464248806', '1464248806');
INSERT INTO `error_code` VALUES ('17', '202', '禁止访问', '1', '1464248806', '1464248806');
INSERT INTO `error_code` VALUES ('18', '202', '禁止访问', '1', '1464248806', '1464248806');
INSERT INTO `error_code` VALUES ('19', '202', '禁止访问', '1', '1464248807', '1464248807');
INSERT INTO `error_code` VALUES ('20', '202', '禁止访问', '1', '1464248807', '1464248807');
INSERT INTO `error_code` VALUES ('21', '202', '禁止访问', '1', '1464248807', '1464248807');
INSERT INTO `error_code` VALUES ('22', '202', '禁止访问', '1', '1464248807', '1464248807');
INSERT INTO `error_code` VALUES ('23', '202', '禁止访问', '1', '1464248807', '1464248807');
INSERT INTO `error_code` VALUES ('24', '202', '禁止访问', '1', '1464248808', '1464248808');
INSERT INTO `error_code` VALUES ('25', '202', '禁止访问', '1', '1464248808', '1464248808');
INSERT INTO `error_code` VALUES ('26', '202', '禁止访问', '1', '1464248808', '1464248808');
INSERT INTO `error_code` VALUES ('27', '202', '禁止访问', '1', '1464248808', '1464248808');
INSERT INTO `error_code` VALUES ('28', '333', 'fadsfadsfasd', null, '2016', '2016');

-- ----------------------------
-- Table structure for field
-- ----------------------------
DROP TABLE IF EXISTS `field`;
CREATE TABLE `field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_code` varchar(255) DEFAULT NULL,
  `field_type` varchar(255) DEFAULT NULL,
  `field_default` varchar(255) DEFAULT NULL,
  `field_desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of field
-- ----------------------------
INSERT INTO `field` VALUES ('1', 'accountManagerUID', 'int', '', '运营专员', '2016-06-03 16:02:06', '2016-06-03 08:02:06');
INSERT INTO `field` VALUES ('2', 'agency', 'varchar', '', '代理机构', '2016-06-03 16:01:08', '2016-06-03 16:01:08');
INSERT INTO `field` VALUES ('3', 'agentBranch', 'varchar', '', '所属分支机构', '2016-06-03 16:01:08', '2016-06-03 16:01:08');
INSERT INTO `field` VALUES ('4', 'appId', 'int', '', '商户ID', '2016-06-03 16:01:08', '2016-06-03 16:01:08');
INSERT INTO `field` VALUES ('5', 'applyMobilePhone', 'varchar', '', '实际申请人手机号码', '2016-06-03 16:01:08', '2016-06-03 16:01:08');
INSERT INTO `field` VALUES ('6', 'applyName', 'varchar', '', '实际申请人姓名', '2016-06-03 16:01:08', '2016-06-03 16:01:08');
INSERT INTO `field` VALUES ('7', 'areaManagerUID', 'int', '', '大区经理', '2016-06-03 16:01:08', '2016-06-03 16:01:08');
INSERT INTO `field` VALUES ('8', 'bizRegisterNo', 'varchar', '', '营业执照注册号', '2016-06-03 16:01:08', '2016-06-03 16:01:08');
INSERT INTO `field` VALUES ('9', 'corporateCity', 'varchar', '', '注册城市', '2016-06-03 16:01:08', '2016-06-03 16:01:08');
INSERT INTO `field` VALUES ('10', 'corporateName', 'varchar', '', '注册名称', '2016-06-03 16:01:08', '2016-06-03 16:01:08');
INSERT INTO `field` VALUES ('11', 'corporateState', 'varchar', '', '注册省份', '2016-06-03 16:01:08', '2016-06-03 16:01:08');
INSERT INTO `field` VALUES ('12', 'createUID', 'int', '', '创建人UID', '2016-06-03 16:01:08', '2016-06-03 16:01:08');
INSERT INTO `field` VALUES ('13', 'crmCashadvStatus', 'varchar', '', 'CRM保理状态', '2016-06-03 16:01:08', '2016-06-03 16:01:08');
INSERT INTO `field` VALUES ('14', 'crmLeadId', 'int', '', 'CRM线索ID', '2016-06-03 16:01:09', '2016-06-03 16:01:09');
INSERT INTO `field` VALUES ('15', 'crmLeadStatus', 'varchar', '', 'CRM线索状态', '2016-06-03 16:01:09', '2016-06-03 16:01:09');
INSERT INTO `field` VALUES ('16', 'crmMerchantStatus', 'varchar', '', 'CRM商户状态', '2016-06-03 16:01:09', '2016-06-03 16:01:09');
INSERT INTO `field` VALUES ('17', 'departmentId', 'int', '', '所属部门', '2016-06-03 16:01:09', '2016-06-03 16:01:09');
INSERT INTO `field` VALUES ('18', 'mid', 'varchar', '', '商编', '2016-06-03 16:01:09', '2016-06-03 16:01:09');
INSERT INTO `field` VALUES ('19', 'owneName', 'varchar', '', '法人姓名', '2016-06-03 16:01:09', '2016-06-03 16:01:09');
INSERT INTO `field` VALUES ('20', 'ownerId', 'int', '', '线下客户经理ID', '2016-06-03 16:01:09', '2016-06-03 16:01:09');
INSERT INTO `field` VALUES ('21', 'ownerMobilePhone', 'varchar', '', '法人手机号', '2016-06-03 16:01:09', '2016-06-03 16:01:09');
INSERT INTO `field` VALUES ('22', 'reNewAppId', 'int', '', '续签APPID', '2016-06-03 16:01:09', '2016-06-03 16:01:09');
INSERT INTO `field` VALUES ('23', 'source', 'varchar', '', '来源', '2016-06-03 16:01:09', '2016-06-03 16:01:09');
INSERT INTO `field` VALUES ('24', 'tmId', 'int', '', '线上客户经理ID', '2016-06-03 16:01:09', '2016-06-03 16:01:09');
INSERT INTO `field` VALUES ('25', 'tmLeadId', 'int', '', '电销系统线索ID', '2016-06-03 16:01:09', '2016-06-03 16:01:09');
INSERT INTO `field` VALUES ('26', 'uid', 'int', '', 'CRM中的用户ID', '2016-06-03 16:01:09', '2016-06-03 16:01:09');
INSERT INTO `field` VALUES ('28', 'rwerwrw', 'int', '23423', 'fsdfadsr53543', '2016-06-03 08:11:43', '2016-06-03 08:11:43');

-- ----------------------------
-- Table structure for http_header
-- ----------------------------
DROP TABLE IF EXISTS `http_header`;
CREATE TABLE `http_header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header_name` varchar(255) DEFAULT NULL,
  `header_value` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of http_header
-- ----------------------------
INSERT INTO `http_header` VALUES ('1', 'X-CRM-USER-ID', '用户ID', '1', null, null);
INSERT INTO `http_header` VALUES ('5', 'X-APPLICATION-ID', '应用ID', '1', '1464248856', '1464248856');
INSERT INTO `http_header` VALUES ('7', 'X-APPLICATION-ID12', '应用IDwfsd', '1', '1464248856', '2016');
INSERT INTO `http_header` VALUES ('8', 'X-APPLICATION-ID', '应用ID', '1', '1464248856', '1464248856');
INSERT INTO `http_header` VALUES ('9', 'X-APPLICATION-ID', '应用ID', '1', '1464248856', '1464248856');
INSERT INTO `http_header` VALUES ('10', 'X-APPLICATION-ID', '应用ID', '1', '1464248857', '1464248857');
INSERT INTO `http_header` VALUES ('12', 'X-APPLICATION-ID', '应用ID', '1', '1464248857', '1464248857');
INSERT INTO `http_header` VALUES ('13', 'X-APPLICATION-ID', '应用ID', '1', '1464248857', '1464248857');
INSERT INTO `http_header` VALUES ('14', 'X-APPLICATION-ID', '应用ID', '1', '1464248857', '1464248857');
INSERT INTO `http_header` VALUES ('15', 'X-APPLICATION-ID', '应用ID', '1', '1464248858', '1464248858');
INSERT INTO `http_header` VALUES ('16', 'X-APPLICATION-ID', '应用ID', '1', '1464248858', '1464248858');
INSERT INTO `http_header` VALUES ('17', 'X-APPLICATION-ID', '应用ID', '1', '1464248858', '1464248858');
INSERT INTO `http_header` VALUES ('18', 'X-APPLICATION-ID', '应用ID', '1', '1464248858', '1464248858');
INSERT INTO `http_header` VALUES ('19', 'X-APPLICATION-ID', '应用ID', '1', '1464248859', '1464248859');
INSERT INTO `http_header` VALUES ('20', 'X-APPLICATION-ID', '应用ID', '1', '1464248859', '1464248859');
INSERT INTO `http_header` VALUES ('21', 'X-APPLICATION-ID', '应用ID', '1', '1464248859', '1464248859');
INSERT INTO `http_header` VALUES ('22', 'X-APPLICATION-ID', '应用ID', '1', '1464248859', '1464248859');
INSERT INTO `http_header` VALUES ('23', 'X-APPLICATION-ID', '应用ID', '1', '1464248860', '1464248860');
INSERT INTO `http_header` VALUES ('24', 'X-APPLICATION-ID', '应用ID', '1', '1464248860', '1464248860');
INSERT INTO `http_header` VALUES ('25', 'X-APPLICATION-ID', '应用ID', '1', '1464248860', '1464248860');
INSERT INTO `http_header` VALUES ('26', 'X-APPLICATION-ID', '应用ID', '1', '1464248860', '1464248860');
INSERT INTO `http_header` VALUES ('28', 'X-APPLICATION-ID', '应用ID', '1', '1464248861', '1464248861');
INSERT INTO `http_header` VALUES ('29', 'X-APPLICATION-ID', '应用ID', '1', '1464248861', '1464248861');
INSERT INTO `http_header` VALUES ('30', 'X-APPLICATION-ID', '应用ID', '1', '1464248861', '1464248861');
INSERT INTO `http_header` VALUES ('31', 'X-APPLICATION-ID', '应用ID', '1', '1464248862', '1464248862');
INSERT INTO `http_header` VALUES ('32', 'X-APPLICATION-ID', '应用ID', '1', '1464248862', '1464248862');
INSERT INTO `http_header` VALUES ('33', 'fdsa', 'fsafdsfsad', null, '2016', '2016');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_group` int(11) DEFAULT NULL,
  `user_auth_api_list` text,
  `last_login` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'xuechao', '123456', null, null, null, null, null);
INSERT INTO `user` VALUES ('2', 'user2', '123456', '1', null, '1464247033', '1464247033', '1464247033');
INSERT INTO `user` VALUES ('3', 'user3', '123456', '1', null, '1464247039', '1464247039', '1464247039');
INSERT INTO `user` VALUES ('4', 'user4', '123456', '1', null, '1464247044', '1464247044', '1464247044');
INSERT INTO `user` VALUES ('5', 'user4', '123456', '1', null, '1464247048', '1464247048', '1464247048');
INSERT INTO `user` VALUES ('6', 'user4', '123456', '1', null, '1464247048', '1464247048', '1464247048');
INSERT INTO `user` VALUES ('7', 'user4', '123456', '1', null, '1464247048', '1464247048', '1464247048');
INSERT INTO `user` VALUES ('8', 'user4', '123456', '1', null, '1464247049', '1464247049', '1464247049');
INSERT INTO `user` VALUES ('9', 'user4', '123456', '1', null, '1464247049', '1464247049', '1464247049');
INSERT INTO `user` VALUES ('10', 'user4', '123456', '1', null, '1464247049', '1464247049', '1464247049');
INSERT INTO `user` VALUES ('11', 'user4', '123456', '1', null, '1464247050', '1464247050', '1464247050');
INSERT INTO `user` VALUES ('12', 'user4', '123456', '1', null, '1464247050', '1464247050', '1464247050');
INSERT INTO `user` VALUES ('13', 'user4', '123456', '1', null, '1464247050', '1464247050', '1464247050');
INSERT INTO `user` VALUES ('14', 'user4', '123456', '1', null, '1464247050', '1464247050', '1464247050');
INSERT INTO `user` VALUES ('15', 'user4', '123456', '1', null, '1464247050', '1464247050', '1464247050');
INSERT INTO `user` VALUES ('16', 'user4', '123456', '1', null, '1464247051', '1464247051', '1464247051');
INSERT INTO `user` VALUES ('17', 'user4', '123456', '1', null, '1464247051', '1464247051', '1464247051');
INSERT INTO `user` VALUES ('18', 'user4', '123456', '1', null, '1464247051', '1464247051', '1464247051');
INSERT INTO `user` VALUES ('19', 'user4', '123456', '1', null, '1464247051', '1464247051', '1464247051');

-- ----------------------------
-- Table structure for user_group
-- ----------------------------
DROP TABLE IF EXISTS `user_group`;
CREATE TABLE `user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_code` int(11) DEFAULT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `group_auth` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_group
-- ----------------------------
INSERT INTO `user_group` VALUES ('1', '1', 'admin', null);
INSERT INTO `user_group` VALUES ('2', '2', 'dev', null);
INSERT INTO `user_group` VALUES ('3', '3', 'guest', null);
