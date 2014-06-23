-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2014 at 08:34 AM
-- Server version: 5.5.35-0ubuntu0.13.10.2
-- PHP Version: 5.5.3-1ubuntu2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cookbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE IF NOT EXISTS `ingredient` (
  `INGREDIENTID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(255) DEFAULT NULL,
  `AMOUNT` float DEFAULT NULL,
  `UNIT` varchar(255) DEFAULT NULL,
  `RECIPEID` int(11) DEFAULT NULL,
  PRIMARY KEY (`INGREDIENTID`),
  KEY `FK109C5DD1778CF33C` (`RECIPEID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`INGREDIENTID`, `NAME`, `AMOUNT`, `UNIT`, `RECIPEID`) VALUES
(1, 'flour', 1.5, 'cups', 2),
(2, 'water', 300, 'ml', 1),
(3, 'water', 1, 'cup', 2);

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE IF NOT EXISTS `recipe` (
  `RECIPEID` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRIPTION` varchar(255) DEFAULT NULL,
  `PICTURE` varchar(255) DEFAULT NULL,
  `DEGREE` int(11) DEFAULT NULL,
  `DURATION` int(11) DEFAULT NULL,
  `TITLE` varchar(255) DEFAULT NULL,
  `AUTHOR` varchar(255) DEFAULT NULL,
  `NOTE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`RECIPEID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`RECIPEID`, `DESCRIPTION`, `PICTURE`, `DEGREE`, `DURATION`, `TITLE`, `AUTHOR`, `NOTE`) VALUES
(1, '1, cook\r\n2, clean', 'images/userimage.jpg', 3, 1, 'Spaghetti ', '', ''),
(2, '1. cook\r\n2. clean', 'images/Horse.png', 5, 45, 'Horse', '', ''),
(3, '1. preheat oven\r\n2. put chicken in over', 'images/Roast.', 4, 120, 'Roast', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `utensil`
--

CREATE TABLE IF NOT EXISTS `utensil` (
  `UTENSILID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(255) DEFAULT NULL,
  `RECIPEID` int(11) DEFAULT NULL,
  PRIMARY KEY (`UTENSILID`),
  KEY `FK23B9CC2E778CF33C` (`RECIPEID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `utensil`
--

INSERT INTO `utensil` (`UTENSILID`, `NAME`, `RECIPEID`) VALUES
(3, 'spoon', 1),
(4, 'fork', 1),
(5, 'glass', 2),
(6, 'cup', 2),
(17, 'food', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD CONSTRAINT `FK109C5DD1778CF33C` FOREIGN KEY (`RECIPEID`) REFERENCES `recipe` (`RECIPEID`);

--
-- Constraints for table `utensil`
--
ALTER TABLE `utensil`
  ADD CONSTRAINT `FK_RECIPE_ID` FOREIGN KEY (`RECIPEID`) REFERENCES `recipe` (`RECIPEID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
