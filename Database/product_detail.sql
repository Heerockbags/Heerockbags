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
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `image` varchar(100) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `releasedate` date DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `subcategory` varchar(30) DEFAULT NULL,
  `discount` int(10) DEFAULT NULL,
  `sold` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`image`, `name`, `price`, `releasedate`, `details`, `category`, `subcategory`, `discount`, `sold`) VALUES
('download (1).jpg', 'Kids1', 500, '2000-01-01', 'kids bag', 'Kids', 'Luggage', 0, 5),
('download (2).jpg', 'Kids MM', 800, '2020-05-03', 'SpiderMan Print', 'Kids', 'Luggage', 0, 1),
('download (3).jpg', 'Kids Barbie', 750, '2020-03-05', 'Barbie Print Bag', 'Kids', 'Luggage', 0, 0),
('download (4).jpg', 'Kids Spiderman', 900, '2020-03-04', 'SpiderMan Print 2', 'Kids', 'Luggage', 0, 6),
('images (1).jpg', 'Kids MM2', 900, '2020-06-04', 'Mickey Mouse Print 2', 'Kids', 'BackPack', 0, 8),
('images (1).jpg', 'Kids2', 600, '2020-03-11', 'kids bag 2', 'Kids', 'BackPack', 0, 0),
('images (2).jpg', 'Kids Doraemon', 650, '2020-06-21', 'Doraemon Print', 'Kids', 'BackPack', 0, 3),
('images (3).jpg', 'Kids dora', 800, '2020-08-30', 'dora print', 'Kids', 'BackPack', 0, 4),
('images (4).jpg', 'Kids Barbie 2', 1500, '2020-11-15', 'trolley luggage bag', 'Kids', 'Luggage', 0, 3),
('images (5).jpg', 'Kids4', 1100, '2020-10-22', 'stylish bag', 'Kids', 'BackPack', 0, 1),
('images (6).jpg', 'Kids flower', 1000, '2020-10-10', 'flower print', 'Kids', 'BackPack', 0, 0),
('images.jpg', 'Kids3', 950, '2020-09-15', 'rocket styled bag', 'Kids', 'BackPack', 0, 0),
('1.jpg', 'Men bag1', 1500, '2020-10-10', 'men hand bag', 'Men', 'HandBag', 0, 10),
('download.jpg', 'Men bag2', 1550, '2020-10-15', 'men shoulder bag', 'Men', 'ShoulderBag', 0, 0),
('3.jpg', 'Men bag3', 1750, '2021-01-01', 'men bag shoulder bag', 'Men', 'ShoulderBag', 0, 0),
('4.jpg', 'Men bag4', 2000, '2020-11-10', 'men hand bag', 'Men', 'HandBag', 0, 0),
('5.jpg', 'Men bag5', 2100, '2020-11-15', 'men hand bag', 'Men', 'HandBag', 0, 0),
('6.jpg', 'Men bag6', 2100, '2020-10-31', 'men bag shoulder bag', 'Men', 'ShoulderBag', 0, 6),
('7.jpg', 'Men bag7', 2100, '2020-11-05', 'men bag shoulder bag', 'Men', 'ShoulderBag', 0, 5),
('8.jpg', 'Men bag8', 2200, '2020-11-08', 'men hand bag', 'Men', 'HandBag', 0, 7),
('9.jpg', 'bag1', 1000, '2020-09-10', 'shoulder bag', 'Men', 'BackPack', 0, 5),
('10.jpg', 'bag2', 1500, '2020-09-15', 'backpack bag', 'Men', 'BackPack', 0, 7),
('11.jpg', 'bag3', 1500, '2020-09-15', 'backpack bag', 'Men', 'BackPack', 0, 8),
('12.jpg', 'bag4', 1600, '2020-09-22', 'backpack bag', 'Men', 'BackPack', 0, 6),
('13.jpg', 'bag5', 1600, '2020-09-25', 'backpack bag', 'Women', 'BackPack', 0, 4),
('14.jpg', 'bag6', 1500, '2020-09-27', 'backpack bag', 'Men', 'BackPack', 0, 7),
('15.jpg', 'bag7', 1550, '2020-09-09', 'backpack bag', 'Men', 'BackPack', 0, 0),
('16.jpg', 'bag8', 1550, '2020-09-29', 'backpack bag', 'Men', 'BackPack', 0, 0),
('16.jpg', 'bag9', 1650, '2020-09-29', 'backpack bag', 'Men', 'BackPack', 0, 0),
('17.jpg', 'travel1', 2000, '2020-10-01', 'travel luggage', 'Men', 'Luggage', 0, 10),
('18.jpg', 'travel2', 1400, '2020-11-10', 'travel luggae', 'Men', 'Luggage', 0, 4),
('19.jpg', 'travel3', 1500, '2020-11-10', 'trolley luggage bag', 'Men', 'Luggage', 0, 2),
('20.jpg', 'travel4', 1600, '2020-11-15', 'luggage bag ', 'Women', 'Luggage', 0, 6),
('21.jpg', 'travel5', 2500, '2020-11-20', 'travel luggage bag', 'Men', 'Travel', 0, 11),
('22.jpg', 'travel6', 1500, '2020-11-10', 'luggage bag ', 'Men', 'Luggage', 0, 5),
('23.jpg', 'travel7', 2500, '2020-11-30', 'travel luggage bag', 'Men', 'Travel', 0, 12),
('23.jpg', 'travel7', 2500, '2020-11-30', 'travel luggage bag', 'Women', 'Travel', 0, 11),
('24.jpg', 'travel8', 2000, '2020-11-20', 'luggage bag ', 'Women', 'Luggage', 0, 2),
('25.jpg', 'travel9', 2000, '2020-11-20', 'luggage bag ', 'Men', 'Luggage', 0, 4),
('26.jpg', 'travel10', 2500, '2020-11-25', 'luggage bag ', 'Men', 'Luggage', 0, 5),
('28.jpg', 'women1', 1500, '2020-10-12', 'women shoulder bag', 'Women', 'ShoulderBag', 0, 15),
('29.jpg', 'women2', 1500, '2020-11-02', 'women shoulder bag', 'Women', 'ShoulderBag', 0, 15),
('30.jpg', 'women3', 1600, '2020-11-10', 'women hand bag', 'Women', 'HandBag', 0, 13),
('31.jpg', 'women4', 1300, '2020-11-13', 'women hand bag', 'Women', 'HandBag', 0, 12),
('33.jpg', 'women5', 2000, '2020-11-15', 'women shoulder bag', 'Women', 'ShoulderBag', 0, 26),
('34.jpg', 'women6', 2000, '2020-11-16', 'women shoulder bag', 'Women', 'ShoulderBag', 0, 16),
('35.jpg', 'women7', 1750, '2020-11-16', 'women shoulder bag', 'Women', 'ShoulderBag', 0, 15),
('36.jpg', 'women8', 2000, '2020-11-23', 'women backpack bag', 'Women', 'BackPack', 0, 15),
('37.jpg', 'women9', 2000, '2020-11-25', 'women shoulder bag', 'Women', 'ShoulderBag', 0, 15),
('38.jpg', 'women10', 2500, '2020-11-30', 'women backpack bag', 'Women', 'BackPack', 0, 15),
('39.png', 'women11', 2100, '2020-11-24', 'women shoulder bag', 'Women', 'ShoulderBag', 0, 13);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
