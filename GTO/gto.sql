-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 25, 2019 at 04:22 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gto`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `accountId` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) DEFAULT NULL,
  `passsword` varchar(30) DEFAULT NULL,
  `role` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`accountId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountId`, `email`, `passsword`, `role`) VALUES
(1, 'abc@cd.ef', '1212', 'Tutor'),
(2, 'client@gto.com', '1212', 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Clientid` int(11) NOT NULL AUTO_INCREMENT,
  `Fullname` text NOT NULL,
  `Phonenumber` int(56) NOT NULL,
  `Email` varchar(89) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Dateofbirth` date NOT NULL,
  PRIMARY KEY (`Clientid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Clientid`, `Fullname`, `Phonenumber`, `Email`, `Password`, `Dateofbirth`) VALUES
(6, 'Fireayehu Zekarias', 928970038, 'fere@gmail.com', 'a01610228fe998f515a72dd730294d87', '2019-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL,
  `ContactReason` varchar(100) NOT NULL,
  `Message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Name`, `Email`, `Phone`, `ContactReason`, `Message`) VALUES
(1, 'qqq', 'yowielijah@gmail.com', 12345, 'About the service', 'loved it');

-- --------------------------------------------------------

--
-- Table structure for table `elemntarycourses`
--

DROP TABLE IF EXISTS `elemntarycourses`;
CREATE TABLE IF NOT EXISTS `elemntarycourses` (
  `elemId` int(11) NOT NULL AUTO_INCREMENT,
  `english` varchar(50) NOT NULL,
  `maths` varchar(50) NOT NULL,
  `biology` varchar(50) NOT NULL,
  `physics` varchar(50) NOT NULL,
  `chemistry` varchar(50) NOT NULL,
  `science` varchar(50) NOT NULL,
  `social` varchar(50) NOT NULL,
  `civics` varchar(50) NOT NULL,
  `IT` varchar(50) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  PRIMARY KEY (`elemId`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elemntarycourses`
--

INSERT INTO `elemntarycourses` (`elemId`, `english`, `maths`, `biology`, `physics`, `chemistry`, `science`, `social`, `civics`, `IT`, `tutor_id`) VALUES
(16, 'Elementary-English', 'Elementary-Mathematics', '', '', '', 'Elementary-Science', '', '', '', 55),
(17, '', '', 'Elementary-Biology', 'Elementary-Physics', '', '', 'Elementary-Social', '', '', 56);

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
CREATE TABLE IF NOT EXISTS `grade` (
  `gradeId` int(11) NOT NULL AUTO_INCREMENT,
  `kg` int(11) NOT NULL,
  `elemntary` int(11) NOT NULL,
  `highschool` int(11) NOT NULL,
  PRIMARY KEY (`gradeId`)
) ENGINE=MyISAM AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`gradeId`, `kg`, `elemntary`, `highschool`) VALUES
(136, 0, 0, 3),
(135, 1, 0, 0),
(134, 0, 2, 0),
(133, 0, 0, 3),
(132, 1, 0, 0),
(131, 0, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `highschoolcourses`
--

DROP TABLE IF EXISTS `highschoolcourses`;
CREATE TABLE IF NOT EXISTS `highschoolcourses` (
  `highId` int(11) NOT NULL AUTO_INCREMENT,
  `maths` varchar(50) NOT NULL,
  `english` varchar(50) NOT NULL,
  `IT` varchar(50) NOT NULL,
  `biology` varchar(50) NOT NULL,
  `physics` varchar(50) NOT NULL,
  `chemistry` varchar(50) NOT NULL,
  `economics` varchar(50) NOT NULL,
  `business` varchar(50) NOT NULL,
  `geography` varchar(50) NOT NULL,
  `history` varchar(50) NOT NULL,
  `civics` varchar(50) NOT NULL,
  `drawing` varchar(50) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  PRIMARY KEY (`highId`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `highschoolcourses`
--

INSERT INTO `highschoolcourses` (`highId`, `maths`, `english`, `IT`, `biology`, `physics`, `chemistry`, `economics`, `business`, `geography`, `history`, `civics`, `drawing`, `tutor_id`) VALUES
(44, 'Highschool-English', 'Highschool-Mathematics', 'Highschool-IT', '', '', '', '', '', '', '', '', '', 55),
(45, '', '', '', '', 'Highschool-Chemistry', '', 'Highschool-Business', 'Highschool-Economics', '', '', '', '', 56);

-- --------------------------------------------------------

--
-- Table structure for table `kgcourses`
--

DROP TABLE IF EXISTS `kgcourses`;
CREATE TABLE IF NOT EXISTS `kgcourses` (
  `kgId` int(11) NOT NULL AUTO_INCREMENT,
  `english` varchar(50) NOT NULL,
  `maths` varchar(50) NOT NULL,
  `science` varchar(50) NOT NULL,
  `art` varchar(50) NOT NULL,
  `music` varchar(50) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  PRIMARY KEY (`kgId`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kgcourses`
--

INSERT INTO `kgcourses` (`kgId`, `english`, `maths`, `science`, `art`, `music`, `tutor_id`) VALUES
(83, '', '', 'KG-Science', 'KG-Art', 'KG-Music', 56),
(82, 'KG-English', 'KG-Mathematics', 'KG-Science', '', '', 55);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

DROP TABLE IF EXISTS `rate`;
CREATE TABLE IF NOT EXISTS `rate` (
  `rateId` int(10) NOT NULL AUTO_INCREMENT,
  `cliId` int(10) DEFAULT NULL,
  `tuId` int(10) DEFAULT NULL,
  `value` int(10) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`rateId`),
  KEY `tuId` (`tuId`),
  KEY `cliId` (`cliId`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`rateId`, `cliId`, `tuId`, `value`, `comment`) VALUES
(35, 6, 56, 1, 'Lash lash............. lol'),
(32, 6, 55, 4, 'your a one hell of smart girl.');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
CREATE TABLE IF NOT EXISTS `tutor` (
  `tutorId` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` char(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phoneno` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `story` text NOT NULL,
  `img` varchar(50) NOT NULL,
  PRIMARY KEY (`tutorId`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`tutorId`, `fullname`, `dob`, `gender`, `email`, `password`, `phoneno`, `address`, `story`, `img`) VALUES
(55, 'Meron Alemu', '2019-08-13', 'Female', 'yowielijah@gmail.com', '1212', 12345, 'Bahir Dar', 'I am a hardworking and ambitious individual with a great passion for technology and leadership. I am currently in my forth year of studying Electrical and Computer Engineering at AAiT. I have excellent communication skills, enabling me to effectively communicate with a wide range of people. I am seeing a part-time position in the industry in which I can put into practice my knowledge and experience, ultimately benefiting myself and the operations of the organisation that I work for', 'memi.jpg'),
(56, 'Yewoineshet Elias', '2019-08-13', 'Female', 'yowielijah@gmail.com', '1234', 12345, 'Addis Abeba', 'I am a hardworking and ambitious individual with a great passion for technology and leadership. I am currently in my forth year of studying Electrical and Computer Engineering at AAiT. I have excellent communication skills, enabling me to effectively communicate with a wide range of people. I am seeing a part-time position in the industry in which I can put into practice my knowledge and experience, ultimately benefiting myself and the operations of the organisation that I work for', 'WIN_20190812_11_27_19_Pro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tutor2`
--

DROP TABLE IF EXISTS `tutor2`;
CREATE TABLE IF NOT EXISTS `tutor2` (
  `tutor2Id` int(11) NOT NULL AUTO_INCREMENT,
  `eduStatus` varchar(50) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `school` varchar(50) NOT NULL,
  `pay` double NOT NULL,
  `cv` varchar(50) NOT NULL,
  `tutor_id` varchar(200) NOT NULL,
  PRIMARY KEY (`tutor2Id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor2`
--

INSERT INTO `tutor2` (`tutor2Id`, `eduStatus`, `experience`, `school`, `pay`, `cv`, `tutor_id`) VALUES
(90, 'Bachelor Degree', '1-5 yrs', 'AAiT, Electrical and Computer Engineering', 250, 'Mita.pdf', '55'),
(91, 'Bachelor Degree', '1-5 yrs', 'AAiT, SECE', 300, 'Mita Cover letter.docx', '56');

-- --------------------------------------------------------

--
-- Table structure for table `tutorgrade`
--

DROP TABLE IF EXISTS `tutorgrade`;
CREATE TABLE IF NOT EXISTS `tutorgrade` (
  `tgId` int(11) NOT NULL AUTO_INCREMENT,
  `gradeId` int(11) NOT NULL,
  `tutorId` int(11) NOT NULL,
  PRIMARY KEY (`tgId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutorsubject`
--

DROP TABLE IF EXISTS `tutorsubject`;
CREATE TABLE IF NOT EXISTS `tutorsubject` (
  `tsId` int(11) NOT NULL AUTO_INCREMENT,
  `elemId` int(11) NOT NULL,
  `highId` int(11) NOT NULL,
  `kgId` int(11) NOT NULL,
  PRIMARY KEY (`tsId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
