-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.36-community-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema citybudget
--

CREATE DATABASE IF NOT EXISTS citybudget;
USE citybudget;

--
-- Definition of table `budgets`
--

DROP TABLE IF EXISTS `budgets`;
CREATE TABLE `budgets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(140) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budgets`
--

/*!40000 ALTER TABLE `budgets` DISABLE KEYS */;
INSERT INTO `budgets` (`id`,`name`) VALUES 
 (1,'2008 Net Actual'),
 (2,'2009 Approved Net Budget'),
 (3,'2009 Revised Net Budget'),
 (4,'2010 Approved Net Budget');
/*!40000 ALTER TABLE `budgets` ENABLE KEYS */;


--
-- Definition of table `organizations`
--

DROP TABLE IF EXISTS `organizations`;
CREATE TABLE `organizations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(140) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizations`
--

/*!40000 ALTER TABLE `organizations` DISABLE KEYS */;
/*!40000 ALTER TABLE `organizations` ENABLE KEYS */;


--
-- Definition of table `uses`
--

DROP TABLE IF EXISTS `uses`;
CREATE TABLE `uses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `program` varchar(45) NOT NULL,
  `amount` float NOT NULL,
  `grouping` varchar(140) NOT NULL,
  `organization_id` int(10) unsigned NOT NULL,
  `budget_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uses`
--

/*!40000 ALTER TABLE `uses` DISABLE KEYS */;
/*!40000 ALTER TABLE `uses` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
