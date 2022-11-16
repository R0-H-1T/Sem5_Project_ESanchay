-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 02, 2022 at 01:47 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eregain`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `msgId` int(11) NOT NULL AUTO_INCREMENT,
  `UName` text NOT NULL,
  `UEmail` varchar(255) NOT NULL,
  `UPhone` bigint(20) UNSIGNED NOT NULL,
  `UMessage` text NOT NULL,
  PRIMARY KEY (`msgId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;