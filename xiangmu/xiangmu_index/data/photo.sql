/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : 127.0.0.1:3306
Source Database       : photo

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2015-06-30 15:16:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'admin888');

-- ----------------------------
-- Table structure for `album`
-- ----------------------------
DROP TABLE IF EXISTS `album`;
CREATE TABLE `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(32) DEFAULT NULL,
  `add_name` varchar(32) DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `p_desc` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `uid` int(11) NOT NULL COMMENT '用户id',
  `p_count` smallint(6) NOT NULL DEFAULT '0' COMMENT '图片数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of album
-- ----------------------------
INSERT INTO `album` VALUES ('1', 'VN', '神级灭杀', '2', '__PUBLIC__/Uploads/54731ff0e5bcd.jpg', '最强ADC', '2014-11-24 20:09:20', '2', '0');
INSERT INTO `album` VALUES ('3', '阿狸', '青花', '2', '__PUBLIC__/Uploads/547324d0b11eb.jpg', '最爱阿狸', '2014-11-24 20:30:08', '2', '0');
INSERT INTO `album` VALUES ('4', 'AKL', '挥起镰刀', '2', '__PUBLIC__/Uploads/5473255731458.jpg', '最强刺客', '2014-11-24 20:32:23', '1', '0');
INSERT INTO `album` VALUES ('5', '菲奥娜', '无双剑姬', '2', '__PUBLIC__/Uploads/547325aa4a191.jpg', '一秒5刀，带你体验秒杀', '2014-11-24 20:33:46', '1', '3');
INSERT INTO `album` VALUES ('7', '枫叶1', '独行者', '1', '__PUBLIC__/Uploads/54746388e6f80.jpg', '枫叶红枫叶红枫叶红', '2015-05-07 15:49:01', '1', '7');
INSERT INTO `album` VALUES ('8', '床上秀', '匿名', '4', '__PUBLIC__/Uploads/54743e1e765c9.jpg', '嘿嘿', '2014-11-25 16:30:22', '1', '6');
INSERT INTO `album` VALUES ('9', '阿尔法罗密欧', '大爱车模', '5', '__PUBLIC__/Uploads/54743f70f1aa3.jpg', '一定要买下', '2014-11-25 16:36:00', '1', '3');
INSERT INTO `album` VALUES ('10', '曼曼', '月黄昏', '3', '__PUBLIC__/Uploads/547443f6893b4.jpg', '疏笔横斜水清浅', '2014-11-25 16:55:18', '1', '2');
INSERT INTO `album` VALUES ('12', '手机', '兴风', '7', '__PUBLIC__/Uploads/5498dc2a46edc.jpg', '手机手机手机', '2014-12-23 11:06:18', '1', '3');
INSERT INTO `album` VALUES ('13', '菲亚特', '张静', '5', '__PUBLIC__/Uploads/54bf3ce912386.jpg', '菲亚特菲亚特菲亚特', '2015-01-21 13:45:13', '1', '0');
INSERT INTO `album` VALUES ('14', 'bmw', '张静', '5', '__PUBLIC__/Uploads/54bf3d28dac43.jpg', 'bmw,宝马', '2015-01-21 13:46:16', '1', '0');
INSERT INTO `album` VALUES ('15', '保时捷', '兴风', '5', '__PUBLIC__/Uploads/54bf3d6779574.jpg', ' 保时捷保时捷', '2015-01-21 13:47:19', '1', '0');
INSERT INTO `album` VALUES ('16', '桂林山水', '张静', '1', '__PUBLIC__/Uploads/54bf3db98929d.jpg', '桂林山水桂林山水', '2015-01-21 13:48:41', '1', '0');
INSERT INTO `album` VALUES ('17', '黄山', '张静', '1', '__PUBLIC__/Uploads/54bf3dd8c5d17.jpg', '黄山黄山黄山黄山', '2015-01-21 13:49:12', '1', '0');
INSERT INTO `album` VALUES ('18', '泰山', '张静', '1', '__PUBLIC__/Uploads/54bf3e00e402f.jpg', '泰山泰山泰山', '2015-01-21 13:49:52', '2', '2');
INSERT INTO `album` VALUES ('19', '佟丽娅', '张静', '3', '__PUBLIC__/Uploads/54bf3f52da5f3.jpg', '佟丽娅佟丽娅', '2015-01-21 13:55:30', '2', '0');
INSERT INTO `album` VALUES ('20', '刘亦菲', '张静', '3', '__PUBLIC__/Uploads/54bf40630d61f.jpg', '刘亦菲刘亦菲', '2015-01-21 14:00:03', '1', '1');
INSERT INTO `album` VALUES ('21', '张馨予', '兴风', '3', '__PUBLIC__/Uploads/54bf4083d0c97.jpg', '张馨予张馨予', '2015-01-21 14:00:35', '1', '2');
INSERT INTO `album` VALUES ('24', '泰山2', null, '1', '__PUBLIC__/Uploads/54d1d7e667760.jpg', '泰山2泰山2泰山2泰山2泰山2', '2015-02-04 16:27:18', '1', '0');
INSERT INTO `album` VALUES ('25', '五一后街游', null, '1', '__PUBLIC__/Uploads/55417cef56cd3.jpg', '五一后街游五一后街游', '2015-05-07 16:31:44', '1', '3');
INSERT INTO `album` VALUES ('26', '测试', null, '1', '__PUBLIC__/Uploads/554b29c7b52ad.jpg', '测试测试', '2015-05-07 17:00:55', '1', '5');
INSERT INTO `album` VALUES ('28', '测试n', null, '1', '__PUBLIC__/Uploads/558df87f3d4a5.jpg', '这些都是啥', '2015-06-27 09:12:31', '9', '5');
INSERT INTO `album` VALUES ('29', '性感美女', null, '4', '__PUBLIC__/Uploads/558dfca6451e2.jpg', '美女', '2015-06-27 09:30:14', '9', '4');
INSERT INTO `album` VALUES ('30', '教主', null, '3', '__PUBLIC__/Uploads/558dfd4d39e99.jpg', '千秋万载，一统江湖', '2015-06-27 09:33:01', '9', '6');

-- ----------------------------
-- Table structure for `album_type`
-- ----------------------------
DROP TABLE IF EXISTS `album_type`;
CREATE TABLE `album_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(32) DEFAULT NULL,
  `t_desc` varchar(255) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `sort` smallint(6) NOT NULL DEFAULT '0' COMMENT '排序',
  `isshow` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否显示',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of album_type
-- ----------------------------
INSERT INTO `album_type` VALUES ('1', '风景', '唯美风景图合集', '2014', '12', '1');
INSERT INTO `album_type` VALUES ('2', 'LOL', 'LOL精选图片', '2014', '11', '1');
INSERT INTO `album_type` VALUES ('3', '美女', '各大美女，嘿嘿', '2014', '13', '1');
INSERT INTO `album_type` VALUES ('4', '性感尤物', '挺哥丢了...', '2014', '0', '1');
INSERT INTO `album_type` VALUES ('5', '名车', '有车真好', '2014', '10', '0');
INSERT INTO `album_type` VALUES ('7', '科技产品', '手机', '2014', '0', '0');
INSERT INTO `album_type` VALUES ('8', '测试分类', '测试分类测试分类测试分类', '2015', '1', '0');

-- ----------------------------
-- Table structure for `photo`
-- ----------------------------
DROP TABLE IF EXISTS `photo`;
CREATE TABLE `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(20) DEFAULT NULL,
  `t_id` int(10) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `a_desc` text,
  `a_addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of photo
-- ----------------------------
INSERT INTO `photo` VALUES ('12', '美丽的枫叶', '7', '__PUBLIC__/Uploads/54746403d2d1e.jpg', '美丽的枫叶', '2014-11-25 15:41:56');
INSERT INTO `photo` VALUES ('13', '美丽的枫叶', '7', '__PUBLIC__/Uploads/5474642420a05.jpg', '美丽的枫叶', '2014-11-25 15:41:56');
INSERT INTO `photo` VALUES ('14', '美丽的枫叶', '7', '__PUBLIC__/Uploads/5474644440620.jpg', '美丽的枫叶', '2014-11-25 16:24:16');
INSERT INTO `photo` VALUES ('16', '你好，妹纸', '8', '__PUBLIC__/Uploads/54743ed1b0c65.jpg', '胡涛未成年', '2014-11-25 16:33:21');
INSERT INTO `photo` VALUES ('17', '你好，妹纸', '8', '__PUBLIC__/Uploads/54743ed1b41e5.jpg', '胡涛未成年', '2014-11-25 16:33:21');
INSERT INTO `photo` VALUES ('18', '你好，妹纸', '8', '__PUBLIC__/Uploads/54743ed1bbfdc.jpg', '胡涛未成年', '2014-11-25 16:33:21');
INSERT INTO `photo` VALUES ('19', '你好，妹纸', '8', '__PUBLIC__/Uploads/54743ed1be317.jpg', '胡涛未成年', '2014-11-25 16:33:21');
INSERT INTO `photo` VALUES ('20', '霸气', '9', '__PUBLIC__/Uploads/5474406891f75.jpg', ' 霸气', '2014-11-25 16:40:08');
INSERT INTO `photo` VALUES ('21', '霸气', '9', '__PUBLIC__/Uploads/5474406895b4e.jpg', ' 霸气', '2014-11-25 16:40:08');
INSERT INTO `photo` VALUES ('22', '霸气', '9', '__PUBLIC__/Uploads/54744068979ae.jpg', ' 霸气', '2014-11-25 16:40:08');
INSERT INTO `photo` VALUES ('23', '唯一', '10', '__PUBLIC__/Uploads/547445d08d402.jpg', ' 唯一', '2014-11-25 17:03:12');
INSERT INTO `photo` VALUES ('24', '唯一', '10', '__PUBLIC__/Uploads/54745ed3dc225.gif', '唯一', '2014-11-25 18:42:56');
INSERT INTO `photo` VALUES ('27', '第二张', '7', '__PUBLIC__/Uploads/54747f021aad2.jpg', '第二张', '2014-11-25 21:07:14');
INSERT INTO `photo` VALUES ('29', '第二张', '8', '__PUBLIC__/Uploads/54747ff701e7d.jpg', '第二张', '2014-11-25 21:11:19');
INSERT INTO `photo` VALUES ('30', 'aaa', '7', '__PUBLIC__/Uploads/547481e3b1ef9.jpg', 'aaa', '2014-11-25 21:19:31');
INSERT INTO `photo` VALUES ('32', 'htc', '12', '__PUBLIC__/Uploads/5498dc6137be4.jpg', 'htchtc', '2014-12-23 11:07:13');
INSERT INTO `photo` VALUES ('33', 'nokia', '12', '__PUBLIC__/Uploads/5498dc613823d.jpg', 'nokianokia', '2014-12-23 11:07:13');
INSERT INTO `photo` VALUES ('34', 'fsdfsd', '12', '__PUBLIC__/Uploads/54be159cb4eae.jpg', '', '2015-01-20 16:45:16');
INSERT INTO `photo` VALUES ('35', '旭日初升', '18', '__PUBLIC__/Uploads/54dcd2ff85608.jpg', '旭日初升好风光', '2015-02-13 00:21:19');
INSERT INTO `photo` VALUES ('36', '后街1', '25', '__PUBLIC__/Uploads/55417d8d29c47.jpg', '后街1后街1后街1', '2015-04-30 08:55:41');
INSERT INTO `photo` VALUES ('37', '后街2', '25', '__PUBLIC__/Uploads/554b1e847b51c.jpg', '后街2后街2', '2015-05-07 16:12:52');
INSERT INTO `photo` VALUES ('38', '后街3', '25', '__PUBLIC__/Uploads/554b1e84802c2.jpg', '后街3后街3', '2015-05-07 16:12:52');
INSERT INTO `photo` VALUES ('39', '张磬予1', '21', '__PUBLIC__/Uploads/554b1f97d4a18.jpg', '张磬予1张磬予1', '2015-05-07 16:17:27');
INSERT INTO `photo` VALUES ('40', '张磬予2', '21', '__PUBLIC__/Uploads/554b1f97d5627.jpg', '张磬予2，张磬予2', '2015-05-07 16:17:27');
INSERT INTO `photo` VALUES ('41', '测试1', '26', '__PUBLIC__/Uploads/554b29ff71d15.jpg', '测试1', '2015-05-07 17:01:51');
INSERT INTO `photo` VALUES ('42', 'fg', '26', '__PUBLIC__/Uploads/558df6070b936.jpg', 'dfgf', '2015-06-27 09:01:59');
INSERT INTO `photo` VALUES ('43', '1', '28', '__PUBLIC__/Uploads/558df8cbb0f8c.jpg', '1', '2015-06-27 09:13:47');
INSERT INTO `photo` VALUES ('44', '2', '28', '__PUBLIC__/Uploads/558df8cbb3e65.jpg', '2', '2015-06-27 09:13:47');
INSERT INTO `photo` VALUES ('45', '3', '28', '__PUBLIC__/Uploads/558df8cbb5ab3.jpg', '3', '2015-06-27 09:13:47');
INSERT INTO `photo` VALUES ('46', '4', '28', '__PUBLIC__/Uploads/558df8cbb7c24.jpg', '4', '2015-06-27 09:13:47');
INSERT INTO `photo` VALUES ('47', '5', '28', '__PUBLIC__/Uploads/558df8cbb9fa7.jpg', '5', '2015-06-27 09:13:47');
INSERT INTO `photo` VALUES ('48', '刘亦菲', '20', '__PUBLIC__/Uploads/558dfbb550f6e.jpg', '', '2015-06-27 09:26:13');
INSERT INTO `photo` VALUES ('49', '美女1', '29', '__PUBLIC__/Uploads/558dfd1625ea7.jpg', '', '2015-06-27 09:32:06');
INSERT INTO `photo` VALUES ('50', '美女2', '29', '__PUBLIC__/Uploads/558dfd1627cc0.jpg', '', '2015-06-27 09:32:06');
INSERT INTO `photo` VALUES ('51', '美女3', '29', '__PUBLIC__/Uploads/558dfd162ae48.jpg', '', '2015-06-27 09:32:06');
INSERT INTO `photo` VALUES ('52', '美女4', '29', '__PUBLIC__/Uploads/558dfd162dd1e.jpg', '', '2015-06-27 09:32:06');
INSERT INTO `photo` VALUES ('53', '陈教主', '30', '__PUBLIC__/Uploads/558dfda96c155.jpg', '千秋万载', '2015-06-27 09:34:33');
INSERT INTO `photo` VALUES ('54', '陈教主', '30', '__PUBLIC__/Uploads/558dfda971eb2.jpg', '一统江湖', '2015-06-27 09:34:33');
INSERT INTO `photo` VALUES ('55', '11', '5', '__PUBLIC__/Uploads/558dfe4fa30b6.jpg', '', '2015-06-27 09:37:19');
INSERT INTO `photo` VALUES ('56', '22', '5', '__PUBLIC__/Uploads/558dfe4fa56ee.jpg', '', '2015-06-27 09:37:19');
INSERT INTO `photo` VALUES ('57', '33', '5', '__PUBLIC__/Uploads/558dfe4fa8031.jpg', '', '2015-06-27 09:37:19');
INSERT INTO `photo` VALUES ('62', '测试100', '26', '__PUBLIC__/Uploads/5590add7add74.jpg', '测试100测试100测试100', '2015-06-29 10:30:47');

-- ----------------------------
-- Table structure for `userinfo`
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `nickname` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `createtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COMMENT='注册用户';

-- ----------------------------
-- Records of userinfo
-- ----------------------------
INSERT INTO `userinfo` VALUES ('1', 'xingfeng', '兴风', '111111', '0');
INSERT INTO `userinfo` VALUES ('2', 'test1', '测试帐号1', '111111', '0');
INSERT INTO `userinfo` VALUES ('3', 'test2', '测试帐号2', '111111', '0');
INSERT INTO `userinfo` VALUES ('4', 'xingfeng2', '兴风2', '111111', '0');
INSERT INTO `userinfo` VALUES ('5', 'xingfeng6', '兴风6', '111111', '0');
INSERT INTO `userinfo` VALUES ('6', 'xingfeng7', '兴风7', '111111', '0');
INSERT INTO `userinfo` VALUES ('7', 'testuser7', '测试用户7', '111111', '0');
INSERT INTO `userinfo` VALUES ('8', 'admina', '呵呵哒', '123456', '0');
INSERT INTO `userinfo` VALUES ('9', 'admin', 'admin', 'admin888', '0');
INSERT INTO `userinfo` VALUES ('10', 'zhangsan', '张三', '123456', '0');
