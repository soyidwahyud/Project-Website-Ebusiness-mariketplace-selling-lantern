-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 08:15 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebisnis`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_img_name`, `qty`, `price`) VALUES
(1, 'LAMP1', 'Lampion Kerdus motif Shape', 'product-2.1.jpg', 24, '35000.00'),
(2, 'LAMP2', 'Lampion kerdus Motif garis', 'product-3.1.jpg', 6, '47000.00'),
(3, 'LAMP3', 'Lampion Kardus Motif Lengkung', 'product-4.1.jpg', 30, '45500.00'),
(4, 'LAMP4', 'Lampion Sendok Plastik Motif Daun', 'product-5.1.jpg', 14, '35500.00'),
(5, 'LAMP5', 'Lampion Gelas Bekas Motif Bintang', 'product-6.1.jpg', 28, '39000.00'),
(6, 'LAMP6', 'Lampion Kerdus Karton Edisi Valentine', 'product-7.jpg', 40, '56500.00'),
(7, 'LAMP7', 'Lampion Kerdus Karton Edisi Idola', 'product-8.jpg', 49, '49500.00'),
(8, 'LAMP8', 'Lampion Siluet', 'product-9.jpg', 13, '42500.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
