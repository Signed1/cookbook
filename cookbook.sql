-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 12. Mrz 2014 um 15:25
-- Server Version: 5.6.16
-- PHP-Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `cookbook`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ingredient`
--

CREATE TABLE IF NOT EXISTS `ingredient` (
  `INGREDIENTID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(255) DEFAULT NULL,
  `AMOUNT` float DEFAULT NULL,
  `UNIT` varchar(255) DEFAULT NULL,
  `RECIPEID` int(11) DEFAULT NULL,
  PRIMARY KEY (`INGREDIENTID`),
  KEY `FK109C5DD1778CF33C` (`RECIPEID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `recipe`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `utensil`
--

CREATE TABLE IF NOT EXISTS `utensil` (
  `UTENSILID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(255) DEFAULT NULL,
  `RECIPEID` int(11) DEFAULT NULL,
  PRIMARY KEY (`UTENSILID`),
  KEY `FK23B9CC2E778CF33C` (`RECIPEID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `ingredient`
--
ALTER TABLE `ingredient`
  ADD CONSTRAINT `FK109C5DD1778CF33C` FOREIGN KEY (`RECIPEID`) REFERENCES `recipe` (`RECIPEID`);

--
-- Constraints der Tabelle `utensil`
--
ALTER TABLE `utensil`
  ADD CONSTRAINT `FK_RECIPE_ID` FOREIGN KEY (`RECIPEID`) REFERENCES `recipe` (`RECIPEID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
