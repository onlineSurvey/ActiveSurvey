-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2014 at 06:46 AM
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
  `title` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`questions_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questions_id`, `survey_id`, `title`, `type`) VALUES
(1, 1, 'What is the rating of this website.', 'radio button'),
(2, 1, 'This website is fully user friendly.', 'radio button'),
(3, 1, 'Write your opinion of this website.', 'textarea');

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

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`survey_id`, `ownerID`, `description`, `startdate`, `enddate`, `category`, `title`, `isActive`) VALUES
(1, 1, 'This survey gives questions about this website.', '2014-04-25', '2014-04-30', 'Online Survey', 'Survey On this Websi', 'Yes');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `userresponses`
--

INSERT INTO `userresponses` (`userresponses_id`, `survey_id`, `questions_id`, `answer`) VALUES
(3, 1, 1, '7.0FemaleGood'),
(4, 1, 1, '8.0FemaleGood'),
(5, 1, 1, '7.0FemaleGood'),
(6, 1, 1, '8.0FemaleGood'),
(7, 1, 1, '3.0FemaleGood'),
(8, 1, 1, '9.0FemaleGood'),
(9, 1, 1, '6.0FemaleGood'),
(10, 1, 1, '5.0FemaleGood'),
(11, 1, 1, '6.0AgreeGood'),
(12, 1, 1, '4.0Agree'),
(13, 1, 1, '3.0Agreevarin'),
(14, 1, 1, '9.0AgreeGood');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `birthdate`, `username`, `password`, `emailid`, `phoneno`, `city`, `address`, `postalcode`) VALUES
(23, 'Varin', 'Upadhyay', '1960-01-01', 'varin', '1234', 'varin6033@gmail.com', 2147483647, 'Toronto', '1901 Etobicoke', ''),
(24, 'Varin', 'Upadhyay', '1961-01-01', 'varin', 'asnldnaslkdna', 'varin6033@gmail.com', 2147483647, 'Toronto', '1901 Etobicoke', 'M9V3T1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
