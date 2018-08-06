# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.38)
# Database: mother_day
# Generation Time: 2018-08-06 06:01:36 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table competitors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `competitors`;

CREATE TABLE `competitors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text,
  `province` varchar(50) DEFAULT NULL,
  `canton` varchar(50) DEFAULT NULL,
  `mother_province` varchar(50) DEFAULT NULL,
  `mother_canton` varchar(50) DEFAULT NULL,
  `reason` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `competitors` WRITE;
/*!40000 ALTER TABLE `competitors` DISABLE KEYS */;

INSERT INTO `competitors` (`id`, `name`, `email`, `phone`, `address`, `province`, `canton`, `mother_province`, `mother_canton`, `reason`, `created_at`)
VALUES
	(1,'Jr','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(2,'aJr2','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(3,'bJr3','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(4,'cJr4','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(5,'dJr5','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(6,'zdJr5','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(7,'xdJr5','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(8,'vdJr5','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(9,'ndJr5','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(10,'mdJr5','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(11,'sdJr5','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(12,'fdJr5','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(13,'gdJr5','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(14,'hdJr5','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(15,'kjdJr5','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(16,'ldJr5','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(17,'pdJr5','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(18,'odJr5','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02'),
	(19,'udJr5','junior!text.com','888888','asdjadjash','puntarenas','san jose','san jose','acosta','asdjbasdkjasdkjasdasdasdas\n','2018-08-05 22:46:02');

/*!40000 ALTER TABLE `competitors` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `email`, `password`)
VALUES
	(0,'juniorov','juniorov@gmail.com','29d60b9678338330d6c1285933efa753'),
	(0,'admin','admin@admin.com','2a4fc63b2ea423c7550fd852b9f3e2dd');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
