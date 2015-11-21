/*

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50534
 Source Host           : localhost
 Source Database       : phptest

 Target Server Type    : MySQL
 Target Server Version : 50534

 Date: 11/21/2015 15:04:15 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `comments`
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `ipAddress` varchar(255) DEFAULT NULL,
  `userAgent` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `comments`
-- ----------------------------
BEGIN;
INSERT INTO `comments` VALUES ('1', 'rajan', 'rajanrauniyar@gmail.com', 'This is my first comment. hope this works well.', '2015-11-21 13:44:21', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36'), ('2', 'Test', 'test@gmail.com', 'this should work well', '2015-11-21 13:44:41', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36'), ('3', 'new comment', 'new.comment@test.com', 'new comment should be at the top.', '2015-11-21 14:06:07', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36'), ('4', 'test', 'test1@gmail.com', 'test', '2015-11-21 14:49:45', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
