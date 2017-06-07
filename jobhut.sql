-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2016 at 09:14 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobhut`
--
CREATE DATABASE IF NOT EXISTS `jobhut` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jobhut`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_id`, `cont_fnm`, `cont_email`, `cont_query`) VALUES
(1, 'Zaheer Ahmad', 'xee.bee@live.com', 'XYZ'),
(2, 'Muhammad Numan', 'M_Numan215@yahoo.com', 'MCS A.'),
(3, 'asif', 'asifbsit@gmail.com', 'ddd'),
(4, 'sfds', 'hggdgfd@gmil.com', 'xzfdsfd'),
(5, 'muhammad ishfaq', 'dogargee33@gmail.com', 'about jobs\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `ee_id` int(4) NOT NULL AUTO_INCREMENT,
  `ee_fnm` varchar(30) NOT NULL,
  `password` int(11) NOT NULL,
  `ee_gender` varchar(1) NOT NULL,
  `ee_email` varchar(30) NOT NULL,
  `ee_add` varchar(300) NOT NULL,
  `ee_mobileno` varchar(10) NOT NULL,
  `ee_qualification` varchar(10) NOT NULL,
  `ee_profile` varchar(300) NOT NULL,
  `ee_resume` longtext NOT NULL,
  `jobid` int(11) NOT NULL,
  PRIMARY KEY (`ee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ee_id`, `ee_fnm`, `password`, `ee_gender`, `ee_email`, `ee_add`, `ee_mobileno`, `ee_qualification`, `ee_profile`, `ee_resume`, `jobid`) VALUES
(1, 'Zaheer Ahmad', 1234, 'm', 'xee.bee@live.com', 'Street #5 Millat Colony Bahawalpur, Pakistan', '0333637086', 'bsit', 'I am a Web Developer', 'uploads/xeebee.doc', 2),
(2, 'bilal', 1234, 'M', 'expert.it143@gmail.com', 'Bahawalpur', '0303845176', 'Matric', 'Computer Operator', 'uploads/FINAL PROJECTS LIST.docx', 0),
(11, 'asif', 1234, 'M', 'asifbsit@gmail.com', 'xx', '0302806687', 'Msc', 'xc', 'uploads/v850-400x400.jpg', 1),
(12, 'Zoleekha', 0, 'f', 'chnavied@yahoo.com', 'ddd', '0302806687', 'Msc', 'asdd', 'uploads/Voice-V700.jpg', 4),
(13, 'Saqib', 0, 'M', 'sslatif@gmail.com', 'Abu Bakar Hal Bwp Old Campas University chock', '0302806687', 'Acca', 'Acca Qualified', 'uploads/861_1410643263_48449.jpg', 5),
(14, 'Ishfaq', 0, 'M', 'ishfaq@gmail.com', 'skjgsidgfsdfgsdk', '+923453453', 'ksdjksjhfs', 'hgfiwegfigwigwei', 'uploads/12721745_201765356856699_1271482249_n.jpg', 1),
(15, 'Ashfaq', 0, 'M', 'ashfaq@gmail.com', 'IUB', '0027373287', 'BSIT', 'ABC', 'uploads/4.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `jobs_cagtegory`
--

CREATE TABLE IF NOT EXISTS `jobs_cagtegory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jobs_cagtegory`
--

INSERT INTO `jobs_cagtegory` (`id`, `job_name`) VALUES
(1, 'Web Developer'),
(2, 'Web Designer');

-- --------------------------------------------------------

--
-- Table structure for table `job_detail`
--

CREATE TABLE IF NOT EXISTS `job_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(100) NOT NULL,
  `job_type` varchar(100) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `Nts_date` varchar(20) NOT NULL,
  `Skils` int(11) NOT NULL,
  `Creterea` varchar(100) NOT NULL,
  `discription` text NOT NULL,
  `emply_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `job_detail`
--

INSERT INTO `job_detail` (`id`, `job_name`, `job_type`, `Qualification`, `Nts_date`, `Skils`, `Creterea`, `discription`, `emply_id`) VALUES
(5, 'Line Manager', 'Manager', 'Cima', 'Sat_Aug_2015', 16, 'online', 'fk;kreg;regre', 0),
(6, 'networking', 'paid', 'bsit', 'Tue_Jun_2016', 0, 'after graduation', 'iub', 0),
(7, 'network', 'paid', 'it', 'Tue_Jun_2016', 0, 'through nts', 'age over 25', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_user`, `team_pwd`, `team_email`, `team_fnm`, `team_gender`, `team_add`, `team_ph`) VALUES
(1, 'admin', 'asif', 'xee.bee@live.com', 'Zaheer Ahmad', 'm', 'Street #5 Millat Colony Bahawalpur, Pakistan', '0333637086'),
(2, 'Ashfaq', '12345', 'ashfaq@gmail.com', 'Ashfaq Dogar', 'm', 'ABC', '03047038144'),
(3, 'muhammad', '1122', 'dogargee33@gmail', '', 'm', 'ali hall', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
