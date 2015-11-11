-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2015 at 10:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `favueiuei`
--

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE IF NOT EXISTS `collections` (
  `collec_id` int(11) NOT NULL AUTO_INCREMENT,
  `collec_name` varchar(80) CHARACTER SET utf8 NOT NULL,
  `collec_desc` varchar(512) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`collec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `favoris`
--

CREATE TABLE IF NOT EXISTS `favoris` (
  `fav_id` int(11) NOT NULL AUTO_INCREMENT,
  `fav_date_ajout` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fav_name` varchar(80) CHARACTER SET utf8 NOT NULL DEFAULT 'Inconnu',
  `fav_artiste` varchar(80) CHARACTER SET utf8 NOT NULL DEFAULT 'Inconnu',
  `fav_tags` varchar(512) CHARACTER SET utf8 NOT NULL,
  `fav_adresse` varchar(128) CHARACTER SET utf8 NOT NULL,
  `fav_type` varchar(32) CHARACTER SET utf8 NOT NULL,
  `fav_nsfw` tinyint(1) NOT NULL DEFAULT '1',
  `fav_collection` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fav_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `favoris`
--

INSERT INTO `favoris` (`fav_id`, `fav_date_ajout`, `fav_name`, `fav_artiste`, `fav_tags`, `fav_adresse`, `fav_type`, `fav_nsfw`, `fav_collection`) VALUES
(9, '2015-11-10 18:20:20', '[Inconnu]', '[Inconnu]', 'Test', 'Test1', 'test', 1, 0),
(10, '2015-11-10 18:20:45', 'Loupa', 'Ditret', 'Ditret; Loupa; renard', 'ditret.com', 'image', 0, 0),
(11, '2015-11-10 18:21:01', 'Test2', '[Inconnu]', 'Test; blah', 'Test2', 'image', 0, 0),
(12, '2015-11-10 18:21:29', 'NSFW', '[Inconnu]', 'nsfw; loutre', 'personne de safe', 'image', 1, 0),
(13, '2015-11-10 21:12:14', '[Inconnu]', '[Inconnu]', 'Poutre; loutre', 'www.google.com', 'image', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
