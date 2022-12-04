-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2020 at 07:53 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atm`
--

-- --------------------------------------------------------

--
-- Table structure for table `passbook`
--

DROP TABLE IF EXISTS `passbook`;
CREATE TABLE IF NOT EXISTS `passbook` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `details` varchar(20) NOT NULL,
  `amount` int(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `date_transaction` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passbook`
--

INSERT INTO `passbook` (`id`, `details`, `amount`, `user`, `date_transaction`) VALUES
(1, 'demo', 56000, 'admin', '0000-00-00 00:00:00'),
(3, 'janki', 500, 'kk', '2020-02-01 18:30:00'),
(4, 'jndf', 200, 'sdfds', '2020-05-05 18:30:00'),
(5, 'dfda', 500, 'admin', '2020-02-01 18:30:00'),
(6, 'dfda', 1000, 'admin', '2020-02-01 18:30:00'),
(7, 'jay', 10000, 'admin', '2020-02-01 18:30:00'),
(8, 'jan', 20, 'admin', '2020-02-01 18:30:00'),
(9, 'ewe', 2, 'admin', '2020-04-09 19:28:11'),
(10, 'dsa', -522, 'admin', '2020-04-09 19:30:36'),
(11, '1st', 1000, 'jay', '2020-04-09 19:39:29'),
(12, '1st wd', -100, 'jay', '2020-04-09 19:39:54'),
(13, '1st deposit', 5000, 'jaysoni', '2020-04-09 19:45:32'),
(14, '1st wd', -2000, 'jaysoni', '2020-04-09 19:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_transaction` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `date_transaction`) VALUES
(1, 'admin', 'admin', '2018-11-28 12:31:56'),
(2, 'jay', 'jay', '2020-04-10 01:08:32'),
(3, 'jaysoni', 'jaysoni', '2020-04-10 01:14:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
