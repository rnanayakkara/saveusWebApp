-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2013 at 02:45 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `saveus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldonations`
--

CREATE TABLE IF NOT EXISTS `tbldonations` (
  `DonationId` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Type` varchar(20) NOT NULL,
  PRIMARY KEY (`DonationId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tbldonations`
--

INSERT INTO `tbldonations` (`DonationId`, `Date`, `UserName`, `Amount`, `Type`) VALUES
(1, '2013-11-18', 'kalani@gmail.com', 1, 'Child'),
(2, '2013-11-18', 'kalani@gmail.com', 1, 'Child'),
(3, '2013-11-18', 'kalani@gmail.com', 1, 'Child'),
(4, '2013-11-18', 'kalani@gmail.com', 1, 'Child'),
(5, '2013-11-18', 'kalani@gmail.com', 1, 'Child'),
(6, '2013-11-18', 'kalani@gmail.com', 1, 'Child'),
(7, '2013-11-18', 'kalani@gmail.com', 1, 'Child'),
(8, '2013-11-18', 'kalani@gmail.com', 5, 'Child'),
(9, '2013-11-18', 'rnanayakkara1992@gmail.com', 10, 'Project'),
(10, '2013-11-18', 'rnanayakkara1992@gmail.com', 5, 'Child'),
(11, '2013-11-18', 'rnanayakkara1992@gmail.com', 5, 'Child'),
(12, '2013-11-18', 'madhusha.piumini@gmail.com', 10, 'Project'),
(13, '2013-11-18', 'madhusha.piumini@gmail.com', 5, 'Fund'),
(14, '2013-11-17', 'rnanayakkara1992@gmail.com', 5, 'Project'),
(15, '2013-11-18', 'kavindudilshan@gmail.com', 5, 'Fund'),
(18, '2013-11-18', 'chanitha@gmail.com', 1, 'Child'),
(19, '2013-11-18', 'sdfsf@111.aa.com', 10, 'Child'),
(20, '2013-11-19', 'rnanayakkara1992@gmail.com', 1, 'Child'),
(21, '2013-11-19', 'rnanayakkara1992@gmail.com', 10, 'Child'),
(22, '2013-11-20', 'rnanayakkara1992@gmail.com', 10, 'Child'),
(23, '2013-11-20', 'kavindudilshan@gmail.com', 10, 'Fund'),
(24, '2013-11-20', 'kalani@gmail.com', 1, 'Child'),
(25, '2013-11-22', 'rnanayakkara1992@gmail.com', 5, 'Child');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
