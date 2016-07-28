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
-- Table structure for table `tblmessages`
--

CREATE TABLE IF NOT EXISTS `tblmessages` (
  `MID` int(11) NOT NULL AUTO_INCREMENT,
  `MessageDate` date NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Message` varchar(300) NOT NULL,
  PRIMARY KEY (`MID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblmessages`
--

INSERT INTO `tblmessages` (`MID`, `MessageDate`, `Email`, `Name`, `Phone`, `Message`) VALUES
(1, '2015-01-20', 'rnanayakkara1992@gmail.com', 'Rasanjana Nanayakkar', 716904710, 'Hello, its nice'),
(2, '2015-01-20', 'rnanayakkara1992@gmail.com', 'Rasanjana Nanayakkar', 716904710, 'Hello, this is really good and hope to join you and help with your projects.'),
(5, '2015-01-20', 'sumudu@gmail.com', 'Sumudu Perera', 987676431, 'Hi Save Us Team,\r\nWell Done. Hope to join your team.'),
(7, '2015-03-01', 'ad@s.com', 'Default', 987781110, 'dsfsfsf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
