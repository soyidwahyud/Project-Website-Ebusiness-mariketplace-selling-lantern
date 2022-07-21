-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 07:33 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `iduser` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`iduser`, `name`, `username`, `email`, `password`, `password2`) VALUES
(1, 'soyid', 'wdarma56', 'ssasas@ymail.com', '$2y$10$wG6XZKfxiuLxY9Za/17lOOuVkqZeU5rUGFji3tvGDltH0xbnW2tia', 'wahyu24'),
(6, 'Victor', 'victorbayu', 'victorbayu@gmail.com', '$2y$10$LCOnt3JbxGRGO4Bc3eH7fej1YllPK8l11pUzKSqDg8ZnFynhYSKNW', 'victor27'),
(7, 'Achmad Handika', 'handika01', 'handika@gmail.com', '$2y$10$yG79KmFgVJJPTeZQHDaV8OuNQa0RGXkjjNq.au3CwuLnr48u2jig2', 'handika01'),
(8, 'Alfarizqi Abiyyu', 'abiyyu04', 'abiyyu@ymail.com', '$2y$10$lqU0q4P16vJuSMIfr3aiOuYv2vEVir9mrcd0IGTkoYF/fp/rSPk9C', 'abiyyu04'),
(9, 'Devany', 'devany07', 'devany@yahoo.co.id', '$2y$10$0gm57KD6OS4hrWyztNuxo.URifnSrf7K7dEYM00dYkWrUsxSyaIJm', 'devany07'),
(11, 'bayu', 'bayu05', 'bayu@gmail.com', '$2y$10$PgrmImsmQrqroS7VWgHE9.7qUVKyHBQy6bHNp6NPlkR4z5bEv9o/6', 'bayu05');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `idcontact` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`idcontact`, `fname`, `lname`, `email`, `subject`, `message`) VALUES
(1, 'ssss', 'ssss', 'handika@gmail.com', 'ssss', 'sssss');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`) VALUES
(1, 'Steve', 'Jobs', 'Infinite Loop', 'California', 95014, 'sjobs@apple.com', 'steve'),
(3, 'Victor', 'Bayu', 'Ikan Tombro', 'Malang', 1741, 'victorbayu@ymail.com', 'victor27'),
(5, 'Alfarizqi', 'Abiyyuo', 'Sawojajar', 'Malang ', 19651, 'Alfarizqi@gmail.com', 'biyyu04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idcontact`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `idcontact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
