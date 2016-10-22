# Host: localhost  (Version: 5.5.47)
# Date: 2016-10-23 00:28:40
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "tb_balance"
#

DROP TABLE IF EXISTS `tb_balance`;
CREATE TABLE `tb_balance` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `balance` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "tb_balance"
#

/*!40000 ALTER TABLE `tb_balance` DISABLE KEYS */;
INSERT INTO `tb_balance` VALUES (1,4019.00);
/*!40000 ALTER TABLE `tb_balance` ENABLE KEYS */;

#
# Structure for table "tb_incomeandcost"
#

DROP TABLE IF EXISTS `tb_incomeandcost`;
CREATE TABLE `tb_incomeandcost` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `whatName` varchar(64) NOT NULL DEFAULT '',
  `Money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `When` date NOT NULL DEFAULT '0000-00-00',
  `systemTimeStamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `classification` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

#
# Data for table "tb_incomeandcost"
#

/*!40000 ALTER TABLE `tb_incomeandcost` DISABLE KEYS */;
INSERT INTO `tb_incomeandcost` VALUES (1,'r',3.00,'2016-10-21','2016-10-21 22:54:14','income'),(55,'红包',55.00,'2016-10-21','0000-00-00 00:00:00','income'),(56,'老公资助',30.00,'2016-10-21','0000-00-00 00:00:00','income'),(57,'老公资助',55.00,'2016-10-21','2016-10-21 22:59:57','income'),(58,'红包',44.00,'2016-10-21','2016-10-22 00:01:21','income'),(59,'工资',10000.00,'2016-10-22','2016-10-22 00:01:41','income'),(60,'老公资助',500.00,'2016-10-22','2016-10-22 00:26:28','income'),(61,'老公资助',555.00,'2016-10-22','2016-10-22 00:36:37','income'),(62,'红包',555.00,'2016-10-22','2016-10-22 00:38:55','income'),(63,'ss',4.00,'2016-10-22','2016-10-22 00:40:48','income'),(64,'老婆资助',300.00,'2016-10-22','2016-10-22 19:34:37','income'),(65,'浪',30.00,'2016-10-22','2016-10-22 19:52:24','cost'),(66,'GG',30.00,'2016-10-22','2016-10-22 19:53:12','cost'),(67,'GG',55.00,'2016-10-22','2016-10-22 19:56:45','cost'),(68,'B',2.00,'2016-10-22','2016-10-22 19:57:01','cost');
/*!40000 ALTER TABLE `tb_incomeandcost` ENABLE KEYS */;

#
# Structure for table "tb_saysomething"
#

DROP TABLE IF EXISTS `tb_saysomething`;
CREATE TABLE `tb_saysomething` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

#
# Data for table "tb_saysomething"
#

/*!40000 ALTER TABLE `tb_saysomething` DISABLE KEYS */;
INSERT INTO `tb_saysomething` VALUES (1,'别乱花钱~傻猪猪',1),(2,'无钱问老公拿~任性~虽然距无',2),(3,'你又买什么啦？不要折磨钱包~',3),(4,'你又买什么啦？不要折磨钱包~',4),(5,'无钱问老公拿~任性~虽然距无',5),(6,'别乱花钱~傻猪猪',6),(7,'你又买什么啦？不要折磨钱包~',7),(8,'无钱问老公拿~任性~虽然距无',8),(9,'别乱花钱~傻猪猪',9),(10,'你又买什么啦？不要折磨钱包~',10),(11,'无钱问老公拿~任性~虽然距无',11),(12,'别乱花钱~傻猪猪',12);
/*!40000 ALTER TABLE `tb_saysomething` ENABLE KEYS */;

#
# Structure for table "tb_what"
#

DROP TABLE IF EXISTS `tb_what`;
CREATE TABLE `tb_what` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `whatName` varchar(255) NOT NULL DEFAULT '',
  `classification` varchar(64) NOT NULL DEFAULT '',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

#
# Data for table "tb_what"
#

/*!40000 ALTER TABLE `tb_what` DISABLE KEYS */;
INSERT INTO `tb_what` VALUES (1,'红包','income','0000-00-00 00:00:00'),(2,'工资','income','0000-00-00 00:00:00'),(3,'老公资助','income','0000-00-00 00:00:00'),(4,'浪','cost','0000-00-00 00:00:00'),(5,'吃','cost','0000-00-00 00:00:00'),(6,'ss','income','0000-00-00 00:00:00'),(7,'老婆资助','income','0000-00-00 00:00:00'),(8,'GG','cost','0000-00-00 00:00:00'),(9,'B','cost','2016-10-22 19:57:01');
/*!40000 ALTER TABLE `tb_what` ENABLE KEYS */;
