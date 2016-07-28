-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2015 at 10:06 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsaveus`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tbldonations`
--

INSERT INTO `tbldonations` (`DonationId`, `Date`, `UserName`, `Amount`, `Type`) VALUES
(33, '2015-02-01', 'rnanayakkara1992@gmail.com', 1, 'Child'),
(34, '2015-02-01', 'rnanayakkara1992@gmail.com', 10, 'Project'),
(35, '2015-02-01', 'rnanayakkara1992@gmail.com', 5, 'Fund'),
(36, '2015-02-01', 'dilshan@gmail.com', 5, 'Project'),
(37, '2015-02-01', 'dilshan@gmail.com', 10, 'Project');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
