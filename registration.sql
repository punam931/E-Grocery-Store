-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 05:43 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `address`, `gst`, `contact_no`, `email`, `password`, `confirm_password`) VALUES
('dhanshri', 'nasik', '12345', 123456789, 'dhanshri1806@gmail.com', 'Aniket@123', 'Aniket@123'),
('punam', 'nasik', '9090900900', 2147483647, 'punam@gmail.com', 'idontknow', 'idontknow'),
('punam', 'nasik', '9090900900', 2147483647, 'punam@gmail.com', 'idontknow', 'idontknow'),
('punam', 'nasik', '9090900900', 2147483647, 'punam@gmail.com', 'idontknow', 'idontknow'),
('punam', 'nasik', '9090900900', 2147483647, 'punam@gmail.com', 'idontknow', 'idontknow'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '12345678', 2147483647, 'kingslayiaal18@gmail.com', 'lkjhgfd', 'lkjhgfd'),
('', 'anuja', '12345678', 2147483647, 'kingslayiaal18@gmail.com', 'lkjhgfd', 'lkjhgfd'),
('', 'anuja', '12345678', 2147483647, 'kingslayiaal18@gmail.com', 'lkjhgfd', 'lkjhgfd'),
('harsh', 'asd', '12345678', 1234567890, 'dhanshri1806@gmail.com', 'qwerty', 'qwerty'),
('harsh', 'asd', '12345678', 1234567890, 'dhanshri1806@gmail.com', 'qwerty', 'qwerty'),
('harsh', 'asd', '12345678', 1234567890, 'dhanshri1806@gmail.com', 'qwerty', 'qwerty'),
('harsh', 'asd', '12345678', 1234567890, 'dhanshri1806@gmail.com', 'qwerty', 'qwerty'),
('harsh', 'asd', '12345678', 1234567890, 'dhanshri1806@gmail.com', 'qwerty', 'qwerty'),
('harsh', 'asd', '12345678', 1234567890, 'dhanshri1806@gmail.com', 'qwerty', 'qwerty'),
('harsh', 'asd', '12345678', 1234567890, 'dhanshri1806@gmail.com', 'qwerty', 'qwerty'),
('harsh', 'asd', '12345678', 1234567890, 'dhanshri1806@gmail.com', 'qwerty', 'qwerty'),
('harsh', 'asd', '12345678', 1234567890, 'dhanshri1806@gmail.com', 'qwerty', 'qwerty'),
('harsh', 'asd', '12345678', 1234567890, 'dhanshri1806@gmail.com', 'qwerty', 'qwerty'),
('harsh', 'asd', '12345678', 1234567890, 'dhanshri1806@gmail.com', 'qwerty', 'qwerty'),
('harsh', 'asd', '12345678', 1234567890, 'dhanshri1806@gmail.com', 'qwerty', 'qwerty'),
('harsh', 'asd', '12345678', 1234567890, 'dhanshri1806@gmail.com', 'qwerty', 'qwerty'),
('harsh', 'asd', '12345678', 1234567890, 'dhanshri1806@gmail.com', 'qwerty', 'qwerty'),
('harsh', 'asd', '12345678', 1234567890, 'dhanshri1806@gmail.com', 'qwerty', 'qwerty'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh'),
('', 'anuja', '846438', 2147483647, 'dfs@gmail.com', 'asdfgh', 'asdfgh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
