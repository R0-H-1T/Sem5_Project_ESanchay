-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 20, 2022 at 05:27 PM
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
-- Table structure for table `users`
--
CREATE Database eregain;
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` bigint(20) UNSIGNED NOT NULL,
  `UserPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `unique` (`UserName`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;