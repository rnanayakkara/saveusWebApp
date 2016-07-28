-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2015 at 10:05 AM
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
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
  `EmailAddress` varchar(100) NOT NULL,
  `Type` varchar(6) NOT NULL DEFAULT 'User',
  `Password` varchar(20) NOT NULL,
  `RegDate` date NOT NULL,
  `SecurityQuestion` varchar(50) NOT NULL,
  `Answer` varchar(20) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Country` varchar(16) NOT NULL,
  `PhoneNumber` varchar(12) NOT NULL,
  `CardType` varchar(12) NOT NULL,
  `CardNo` varchar(16) NOT NULL,
  PRIMARY KEY (`EmailAddress`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`EmailAddress`, `Type`, `Password`, `RegDate`, `SecurityQuestion`, `Answer`, `FirstName`, `LastName`, `Country`, `PhoneNumber`, `CardType`, `CardNo`) VALUES
('kavindudilshan@gmail.com', 'User', '12345k', '2015-01-18', 'City You were Born', 'Galle', 'Kavindu', 'Dilshan', 'Sri Lanka', '0778889090', 'Amex Card', '123434323454'),
('rnanayakkara1992@gmail.com', 'User', '12345r', '2015-01-17', 'Your 1st Pets Name', 'Dog', 'Rasanjana', 'Nanayakkara', 'Bangladesh', '0774643408', 'Master Card', '122090908899'),
('saveus.sl@gmail.com', 'Admin', 'adminsaveus', '2015-01-17', 'Admin', 'Admin', 'Admin', 'Admin', 'Sri Lanka', '0000000000', 'Admin', '0000000000'),
('dilshan@gmail.com', 'User', '12345d', '2015-02-15', 'Your 1st Pets Name', 'Ruu', 'Dilshan', 'Kavi', 'Sri Lanka', '0981213235', 'Master Card', '33091243');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
