-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2015 at 02:48 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobhut`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `cont_id` int(4) NOT NULL AUTO_INCREMENT,
  `cont_fnm` varchar(30) NOT NULL,
  `cont_email` varchar(30) NOT NULL,
  `cont_query` varchar(300) NOT NULL,
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_id`, `cont_fnm`, `cont_email`, `cont_query`) VALUES
(1, 'Zaheer Ahmad', 'xee.bee@live.com', 'XYZ');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `ee_id` int(4) NOT NULL AUTO_INCREMENT,
  `ee_fnm` varchar(30) NOT NULL,
  `ee_gender` varchar(1) NOT NULL,
  `ee_email` varchar(30) NOT NULL,
  `ee_add` varchar(300) NOT NULL,
  `ee_mobileno` varchar(10) NOT NULL,
  `ee_qualification` varchar(10) NOT NULL,
  `ee_profile` varchar(300) NOT NULL,
  `ee_resume` longtext NOT NULL,
  PRIMARY KEY (`ee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ee_id`, `ee_fnm`, `ee_gender`, `ee_email`, `ee_add`, `ee_mobileno`, `ee_qualification`, `ee_profile`, `ee_resume`) VALUES
(1, 'Zaheer Ahmad', 'm', 'xee.bee@live.com', 'Street #5 Millat Colony Bahawalpur, Pakistan', '0333637086', 'bsit', 'I am a Web Developer', 'uploads/xeebee.doc');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `team_id` int(4) NOT NULL AUTO_INCREMENT,
  `team_user` varchar(30) NOT NULL,
  `team_pwd` varchar(10) NOT NULL,
  `team_email` varchar(30) NOT NULL,
  `team_fnm` varchar(30) NOT NULL,
  `team_gender` varchar(1) NOT NULL,
  `team_add` varchar(100) NOT NULL,
  `team_ph` varchar(15) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_user`, `team_pwd`, `team_email`, `team_fnm`, `team_gender`, `team_add`, `team_ph`) VALUES
(1, 'admin', '123456789', 'xee.bee@live.com', 'Zaheer Ahmad', 'm', 'Street #5 Millat Colony Bahawalpur, Pakistan', '0333637086');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
