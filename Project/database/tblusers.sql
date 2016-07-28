-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2013 at 02:46 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`EmailAddress`, `Type`, `Password`, `RegDate`, `SecurityQuestion`, `Answer`, `FirstName`, `LastName`, `Country`, `PhoneNumber`, `CardType`, `CardNo`) VALUES
('kalani@gmail.com', 'User', '12345k', '2013-11-17', 'Your 1st Pets Name', 'Cat', 'Kalani', 'Dimanthika', 'Sri Lanka', '0771212343', 'Amex Card', '990088776678'),
('kasun@gmail.com', 'User', '1234567', '2013-11-22', 'Your 1st Pets Name', 'kitty', 'kasun', 'nayanajith', 'Sri Lanka', '0758879927', 'Visa Card', '1233535436474744'),
('kavindudilshan@gmail.com', 'User', '12345k', '2013-11-18', 'City You were Born', 'Galle', 'Kavindu', 'Dilshan', 'Sri Lanka', '0778889090', 'Amex Card', '123434323454'),
('madhusha.piumini@gmail.com', 'User', '12345m', '2013-11-17', 'Your 1st Pets Name', 'Cat', 'Madhusha', 'Peumini', 'Sri Lanka', '0778989898', 'Visa Card', '123456789090'),
('rnanayakkara1992@gmail.com', 'User', '12345r', '2013-11-17', 'Your 1st Pets Name', 'Dog', 'Rasanjana', 'Nanayakkara', 'Bangladesh', '0774643408', 'Master Card', '122090908899'),
('saveus.sl@gmail.com', 'Admin', 'adminsaveus', '2013-11-19', 'Admin', 'Admin', 'Admin', 'Admin', 'Sri Lanka', '0000000000', 'Admin', '0000000000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
