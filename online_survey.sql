-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2014 at 06:54 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_survey`
--
CREATE DATABASE IF NOT EXISTS `online_survey` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `online_survey`;

-- --------------------------------------------------------

--
-- Table structure for table `questionoptions`
--

CREATE TABLE IF NOT EXISTS `questionoptions` (
  `questionoptions_id` int(11) NOT NULL AUTO_INCREMENT,
  `questions_id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`questionoptions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `questions_id` int(11) NOT NULL AUTO_INCREMENT,
  `survey_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`questions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `questiontypes`
--

CREATE TABLE IF NOT EXISTS `questiontypes` (
  `questionsType_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`questionsType_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE IF NOT EXISTS `surveys` (
  `survey_id` int(11) NOT NULL DEFAULT '0',
  `ownerID` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `category` varchar(55) NOT NULL,
  `title` varchar(20) NOT NULL,
  `isActive` varchar(5) NOT NULL,
  PRIMARY KEY (`survey_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userresponses`
--

CREATE TABLE IF NOT EXISTS `userresponses` (
  `userresponses_id` int(11) NOT NULL AUTO_INCREMENT,
  `survey_id` int(11) NOT NULL,
  `questions_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  PRIMARY KEY (`userresponses_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `birthdate` date NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `emailid` varchar(55) NOT NULL,
  `phoneno` int(12) NOT NULL,
  `city` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `postalcode` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `birthdate`, `username`, `password`, `emailid`, `phoneno`, `city`, `address`, `postalcode`) VALUES
(1, 'Varin', 'Upadhyay', '1992-08-23', 'varin6033@gmail.com', '123456789', 'varin6033@gmail,com', 2147483647, 'Toronto', 'Canada', 'M9V3T1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
