-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 08:14 AM
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `postcode` int(6) NOT NULL,
  `notelp` int(12) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `price`, `units`, `total`, `date`, `email`, `nama`, `alamat`, `kota`, `postcode`, `notelp`, `payment`) VALUES
(14, 'LAMP3', 'Lampion Kardus Motif Lengkung', 45500, 1, 45500, '2019-12-07 08:03:58', 'victorbayu@ymail.com', '', '', '', 0, 0, 'cod'),
(15, 'LAMP2', 'Lampion kerdus Motif garis', 47000, 1, 47000, '2019-12-07 08:03:58', 'victorbayu@ymail.com', '', '', '', 0, 0, 'cod'),
(16, 'LAMP3', 'Lampion Kardus Motif Lengkung', 45500, 1, 45500, '2019-12-07 10:46:21', 'Alfarizqi@gmail.com', '', '', '', 0, 0, 'cod'),
(18, 'LAMP3', 'Lampion Kardus Motif Lengkung', 45500, 1, 45500, '2019-12-07 12:04:19', 'Alfarizqi@gmail.com', 'wahyu', 'Halim', 'Jakarta', 136101, 2147483647, 'payment'),
(19, 'LAMP5', 'Lampion Gelas Bekas Motif Bintang', 39000, 1, 39000, '2019-12-07 14:55:10', 'handika@gmail.com', 'dika', 'Remujung', 'Malang', 1234, 2147483647, 'payment');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
