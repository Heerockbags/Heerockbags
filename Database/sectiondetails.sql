-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 01:29 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heerock`
--

-- --------------------------------------------------------

--
-- Table structure for table `sectiondetails`
--

CREATE TABLE `sectiondetails` (
  `name` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sectiondetails`
--

INSERT INTO `sectiondetails` (`name`, `section`) VALUES
('Women', 'Category'),
('Men', 'Category'),
('Kids', 'Category'),
('HandBag', 'SubCategory'),
('ShoulderBag', 'SubCategory'),
('BackPack', 'SubCategory'),
('Travel', 'SubCategory'),
('Luggage', 'SubCategory');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
