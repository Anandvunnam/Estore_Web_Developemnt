-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 27, 2021 at 04:25 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estore`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `message`) VALUES
('pranesh', 'pranesh.bellurkar@gmail.com', 'hi welcometo my world');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1 COMMENT='Products of a ecommerce website';

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'OnePlus 8 Pro', 54999),
(2, 'OnePlus 7T', 35999),
(3, 'OnePlus 7T Pro', 47999),
(4, 'iphone 11 Pro Max', 117000),
(5, 'iphone 11 Pro', 106600),
(6, 'iphone 11', 68300),
(7, 'iphone XS Max', 99999),
(8, 'iphone XR', 53999),
(9, 'iphone 8', 41999),
(10, 'iphone 7', 29999),
(11, 'iphone 6s Plus', 42990),
(12, 'iphone SE(2020)', 46999),
(13, 'Google Pixal 3a XL', 34999),
(14, 'Vivo V19', 30990),
(15, 'Vivo V15 Pro', 21099),
(16, 'Realme 6 Pro', 16999),
(17, 'Redmi Note 8', 9999),
(18, 'Redmi K20 Pro', 29999),
(19, 'Samsung Galaxy S20 Ultra', 97999),
(20, 'Samsung Galaxy S10 Plus', 129999),
(21, 'Samsung Galaxy A51', 25250),
(22, 'Samsung Galaxy S9', 22999),
(23, 'Oppo Reno 3 Pro', 30249),
(24, 'LG X Cam', 10990);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq` (`email`,`contact`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='Users of a mobile store website';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Pranesh', 'pranesh.bellurkar@gmail.com', 'abcdef', 9848405545, 'Hyderabad', 'Basheerbagh');

-- --------------------------------------------------------

--
-- Table structure for table `user_products`
--

DROP TABLE IF EXISTS `user_products`;
CREATE TABLE IF NOT EXISTS `user_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  `order_purchase_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `users_product_2` (`product_id`),
  KEY `users_product_1` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_products`
--

INSERT INTO `user_products` (`id`, `user_id`, `product_id`, `status`) VALUES
(1, 1, 1, 'Added to cart'),
(2, 1, 2, 'Added to cart');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_products`
--
ALTER TABLE `user_products`
  ADD CONSTRAINT `users_product_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_product_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
