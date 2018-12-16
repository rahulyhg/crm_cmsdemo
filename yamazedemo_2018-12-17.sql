# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.21)
# Database: yamazedemo
# Generation Time: 2018-12-16 16:28:41 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table y_auth_group
# ------------------------------------------------------------

DROP TABLE IF EXISTS `y_auth_group`;

CREATE TABLE `y_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `y_auth_group` WRITE;
/*!40000 ALTER TABLE `y_auth_group` DISABLE KEYS */;

INSERT INTO `y_auth_group` (`id`, `title`, `status`, `rules`)
VALUES
	(1,'管理员组',1,'1,2,3,4,5,6');

/*!40000 ALTER TABLE `y_auth_group` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table y_auth_group_access
# ------------------------------------------------------------

DROP TABLE IF EXISTS `y_auth_group_access`;

CREATE TABLE `y_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uid_group_id` (`group_id`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `y_auth_group_access` WRITE;
/*!40000 ALTER TABLE `y_auth_group_access` DISABLE KEYS */;

INSERT INTO `y_auth_group_access` (`uid`, `group_id`, `username`, `password`)
VALUES
	(1,1,'yang','123456');

/*!40000 ALTER TABLE `y_auth_group_access` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table y_auth_rule
# ------------------------------------------------------------

DROP TABLE IF EXISTS `y_auth_rule`;

CREATE TABLE `y_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `nid` mediumint(8) unsigned NOT NULL,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `icon` varchar(30) DEFAULT NULL,
  `backend_summary` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

LOCK TABLES `y_auth_rule` WRITE;
/*!40000 ALTER TABLE `y_auth_rule` DISABLE KEYS */;

INSERT INTO `y_auth_rule` (`id`, `nid`, `name`, `title`, `type`, `status`, `condition`, `icon`, `backend_summary`)
VALUES
	(1,0,'auth','系统设置',1,1,'','am-icon-gear',NULL),
	(2,1,'index/auth/group','用户组管理',1,1,'','am-icon-group','Amaze UI 遵循 Semantic Versioning 规范，版本格式采用 主版本号.次版本号.修订号 的形式，版本号递增规则如下：<br>\n                主版本号：做了不兼容的API 修改，如整体风格变化、大规模重构等；<br>\n                次版本号：做了向下兼容的功能性新增；<br>\n                修订号：做了向下兼容的问题修正、细节调整等。<br>\n\nAmaze UI 遵循 Semantic Versioning 规范，版本格式采用 主版本号.次版本号.修订号 的形式，版本号递增规则如下：<br>\n                主版本号：做了不兼容的API 修改，如整体风格变化、大规模重构等；<br>\n                次版本号：做了向下兼容的功能性新增；<br>\n                修订号：做了向下兼容的问题修正、细节调整等。<br>'),
	(3,1,'index/auth/user','用户管理',1,1,'','am-icon-user-plus',NULL),
	(4,1,'index/auth/authlist','栏目设置',1,1,'','am-icon-tasks',NULL),
	(5,0,'rule','贯穿始终的开发规范',1,1,'',NULL,NULL),
	(6,5,'index/rule/template','自定义模板',1,1,'',NULL,NULL);

/*!40000 ALTER TABLE `y_auth_rule` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
