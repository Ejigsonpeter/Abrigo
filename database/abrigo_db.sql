-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2018 at 10:10 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abrigo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `lanlords`
--

DROP TABLE IF EXISTS `lanlords`;
CREATE TABLE IF NOT EXISTS `lanlords` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(1000) NOT NULL,
  `phoneno` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `passport` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lanlords`
--

INSERT INTO `lanlords` (`id`, `fullname`, `phoneno`, `password`, `passport`) VALUES
(1, 'Ejigson Peter', 'ejigson', 'password', 'image/profiel.jpg'),
(2, 'Peter ojonugwa Ejiga', '09033476627', 'password', 'image/WIN_20180228_12_28_55_Pro.jpg'),
(3, 'i', 'i', '1', 'image/profiel.jpg'),
(4, 'Miafat Lodge', 'i', '1', 'image/profiel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `props`
--

DROP TABLE IF EXISTS `props`;
CREATE TABLE IF NOT EXISTS `props` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(2000) NOT NULL,
  `type` varchar(2000) NOT NULL,
  `price` varchar(2000) NOT NULL,
  `room` varchar(2000) NOT NULL,
  `bathroom` varchar(2000) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `campus` varchar(2000) NOT NULL,
  `fullname` varchar(2000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `phoneno` varchar(2000) NOT NULL,
  `photo1` text NOT NULL,
  `photo2` text NOT NULL,
  `photo3` text NOT NULL,
  `photo4` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `props`
--

INSERT INTO `props` (`id`, `title`, `type`, `price`, `room`, `bathroom`, `address`, `campus`, `fullname`, `email`, `phoneno`, `photo1`, `photo2`, `photo3`, `photo4`) VALUES
(1, 'Miafat Lodge', 'self contain', '150000', '2', '1', 'Nigeria', 'Gidan Kwano', 'Peter Ejiga', 'ejigsonpeter@gmail.com', '09033476627', 'image/11.PNG', 'image/Capture.PNG', 'image/Capture.PNG', 'image/Capture.PNG'),
(2, 'Miafat Lodge', 'self contain\r\n', '250000', '2', '1', 'Nigeria', 'Gidan Kwano', 'Peter Ejiga', 'ejigsonpeter@gmail.com', '09033476627', 'image/properties-1.jpg', 'image/properties-1.jpg', 'image/properties-1.jpg', 'image/properties-1.jpg'),
(3, 'Mafiat Lodge', 'self contain', '45000', '2', '1', 'Opposite Shaban Lodge Gidan Kwano Minna', 'Gidan Kwano', 'Ejiga Peter', 'ejigsonp@gmail.com', '09033476627', 'image/properties-1.jpg', 'image/properties-2.jpg', 'image/properties-3.jpg', 'image/properties-4.jpg'),
(4, 'dsdddds', 'self contain', '5555', '2', '1', 'dsssssssssssssss', 'Gidan Kwano', '', '', '', 'image/properties-2.jpg', 'image/properties-2.jpg', 'image/properties-2.jpg', ''),
(5, 'Mafiat Lodge', 'self contain', '45000', '5', '4', 'Opposite Shaban Lodge Gidan Kwano Minna', 'Gidan Kwano', 'Ejiga Peter', 'ejigsonpeter@gmail.com', '09033476627', 'image/Capcopy.png', 'image/git1.PNG', 'image/22.PNG', 'image/Capture.PNG'),
(6, 'abrigo', 'self contain', '45000', '1', '1', 'Opposite Shaban Lodge Gidan Kwano Minna', 'Gidan Kwano', 'Ejiga Peter', 'ejigsonpeter@gmail.com', '09033476627', 'image/1.jpg', 'image/2.jpg', 'image/3.jpg', 'image/5.jpg'),
(7, 'abrigo', 'self contain', '45000', '1', '1', 'Opposite Shaban Lodge Gidan Kwano Minna', 'Gidan Kwano', 'Ejiga Peter', 'ejigsonpeter@gmail.com', '09033476627', 'image/1.jpg', 'image/2.jpg', 'image/3.jpg', 'image/5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_id`
--

DROP TABLE IF EXISTS `student_id`;
CREATE TABLE IF NOT EXISTS `student_id` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `studentid` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_id`
--

INSERT INTO `student_id` (`id`, `studentid`) VALUES
(1, 'M1503324'),
(2, 'm1503232'),
(3, 'M1503325'),
(4, 'm1503233'),
(5, 'M1503326'),
(6, 'm1503234'),
(7, 'M1503327'),
(8, 'm1503235');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `sn` int(100) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(1000) NOT NULL,
  `studentid` varchar(1000) NOT NULL,
  `level` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL,
  `faculty` varchar(1000) NOT NULL,
  `phonenumber` varchar(1000) NOT NULL,
  `gender` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `passport` varchar(1000) NOT NULL,
  `alcohol` varchar(10) NOT NULL,
  `smoke` varchar(200) NOT NULL,
  `cook` varchar(200) NOT NULL,
  `guest` varchar(200) NOT NULL,
  `clean` varchar(200) NOT NULL,
  `studious` varchar(200) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sn`, `fullname`, `studentid`, `level`, `department`, `faculty`, `phonenumber`, `gender`, `password`, `passport`, `alcohol`, `smoke`, `cook`, `guest`, `clean`, `studious`) VALUES
(1, 'Ejiga Peter', 'M1503324', '400 ', 'Mehatronics', 'SICT', '08097695430', 'Male', '12', 'image/WIN_20180228_12_30_01_Pro.jpg', 'yes', 'no', 'no', 'yes', 'yes', 'no'),
(2, 'oja_egwemi ukatane', 'M1503325', '300', 'CPT', 'SEET', '09033476627', 'Male', '123', 'image/WIN_20180228_12_30_01_Pro.jpg', 'yes', 'no', 'yes', 'yes', 'yes', 'no');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
