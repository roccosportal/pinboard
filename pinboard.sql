-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2013 at 11:50 AM
-- Server version: 5.5.31-0ubuntu0.12.04.1
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pinboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `commentId` int(11) NOT NULL AUTO_INCREMENT,
  `postId` int(11) NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`commentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `postId` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`postId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Table structure for table `Subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `subscriberId` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `postId` int(11) NOT NULL,
  PRIMARY KEY (`subscriberId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `Tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `tagId` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  PRIMARY KEY (`tagId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `TagsPosts`
--

CREATE TABLE IF NOT EXISTS `tagsPosts` (
  `tagsPostsId` int(11) NOT NULL AUTO_INCREMENT,
  `postId` int(11) NOT NULL,
  `tagId` int(11) NOT NULL,
  PRIMARY KEY (`tagsPostsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
