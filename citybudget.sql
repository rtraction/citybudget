-- phpMyAdmin SQL Dump
-- version 3.3.7deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2010 at 01:54 AM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-1ubuntu9.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `citybudget`
--

-- --------------------------------------------------------

--
-- Table structure for table `amounts`
--

CREATE TABLE IF NOT EXISTS `amounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `program` varchar(45) NOT NULL,
  `amount` float NOT NULL,
  `grouping` varchar(140) NOT NULL,
  `organization_id` int(10) unsigned NOT NULL,
  `year` int(10) unsigned NOT NULL,
  `type` enum('approved','actual') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `amounts`
--

INSERT INTO `amounts` (`id`, `program`, `amount`, `grouping`, `organization_id`, `year`, `type`) VALUES
(1, 'Open Data Website', 100000, '', 1, 2010, 'approved'),
(2, 'Fancy Helmets', 20000, 'Uniforms', 2, 2010, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(140) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `name`) VALUES
(1, 'Web Development Services'),
(2, 'Fire Services');
