-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2013 at 08:57 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iptv`
--

-- --------------------------------------------------------

--
-- Table structure for table `iptv_vid`
--

CREATE TABLE IF NOT EXISTS `iptv_vid` (
  `id_vid` int(11) NOT NULL AUTO_INCREMENT,
  `vid_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vid_src` text COLLATE utf8_unicode_ci NOT NULL,
  `vid_cover_src` text COLLATE utf8_unicode_ci NOT NULL,
  `duration` time NOT NULL DEFAULT '00:00:00',
  `vid_desc` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `iptv_vid`
--

INSERT INTO `iptv_vid` (`id_vid`, `vid_name`, `vid_src`, `vid_cover_src`, `duration`, `vid_desc`) VALUES
(1, 'Silent Hill Revelation', '(link ke video 1)', '(link ke pic video 1)', '01:55:00', 'Silent Hill Revelation'),
(2, 'Lord of The Rings: The Fellowship of The Ring', '(path ke video 2)', '(path ke pic video 2)', '02:00:00', 'Lord of The Rings sekuel 1'),
(3, 'Lord of The Rings: The Two Towers', '(path ke video 3)', '(path ke pic video 3)', '02:01:00', 'Lord of The Rings sekuel 2'),
(4, 'Lord of The Rings: The Return of The King', '(path ke video 4)', '(path ke pic video 4)', '02:10:00', 'Lord of The Rings sekuel 3');
