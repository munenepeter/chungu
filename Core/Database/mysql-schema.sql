-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2022 at 09:09 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Chungu`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `slug` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`,  `image`, `created_at`, `updated_at`) VALUES
('cat-5ece4797eaf5e', 'earrings',  '/static/imgs/categories\\earring.svg', '2022-06-29 10:16:47.000000', '2022-06-29 11:10:47.000000'),
('cat-62962f89b29b3', 'rings',  '/static/imgs/categories\\ring.svg', '2022-06-11 10:16:47.000000', '2022-06-01 10:26:47.000000'),
('cat-62962f98473f6', 'anklets',  '/static/imgs/categories\\anklet.svg', '2022-06-22 10:16:47.000000', '2022-06-27 10:16:47.000000'),
('cat-62962fb1d0ca6', 'bracelets',  '/static/imgs/categories\\bracelet.svg', '2022-06-29 10:16:47.000000', '2022-06-24 10:16:47.000000'),
('cat-62962ffec3fe7', 'belts',  '/static/imgs/categories\\belt.svg', '2022-06-20 10:16:47.000000', '2022-06-16 10:26:47.000000'),
('cat-62ac4aec68b30', 'perfume',  '/static/imgs/categories\\perfume.svg', '2022-06-13 10:16:47.000000', '2022-06-26 10:16:47.000000'),
('cat-629785244dce4', 'necklaces',  '/static/imgs/categories\\necklace.svg', '2022-06-23 10:16:47.000000', '2022-06-23 10:16:47.000000');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `color` tinytext NOT NULL,
  `price` float NOT NULL,
  `quantity` int(4) NOT NULL DEFAULT '5',
  `status` varchar(20) NOT NULL DEFAULT 'Available',
  `image` varchar(100) NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT '81dc9bdb52d04dc20036dbd8313ed055',
  `role` varchar(10) NOT NULL DEFAULT 'user',
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
('CU-62987786c0e97', 'admin', 'admin@chungu.co.ke', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', '2022-03-24 06:33:40.000000', '2022-03-24 06:33:40.000000'),
('CU-629877a242cc5', 'maeve', 'maeve@chungu.co.ke', '81dc9bdb52d04dc20036dbd8313ed055', 'user', '2022-03-24 06:33:40.000000', '2022-03-24 06:33:40.000000'),
('CU-629877b873c95', 'peter', 'peter@chungu.co.ke', '81dc9bdb52d04dc20036dbd8313ed055', 'user', '2022-03-24 06:33:40.000000', '2022-03-24 06:33:40.000000'),
('CU-629877cb94079', 'Test', 'test@chungu.co.ke', '81dc9bdb52d04dc20036dbd8313ed055', 'user', '2022-03-24 06:33:40.000000', '2022-03-24 06:33:40.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD FOREIGN KEY (`category_id`) REFERENCES categories(`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
