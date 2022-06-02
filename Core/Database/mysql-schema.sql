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
  `image` varchar(100) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
('cat-5ece4797eaf5e', 'earrings', '/static/imgs/categories\\earrings.jpeg', '2022-05-31 10:16:47.000000', '2022-05-31 10:16:47.000000'),
('cat-62962f89b29b3', 'rings', '/static/imgs/categories\\rings.jpeg', '2022-06-01 10:16:47.000000', '2022-06-01 10:16:47.000000'),
('cat-62962f98473f6', 'anklets', '/static/imgs/categories\\anklets.jpeg', '2022-06-02 10:16:47.000000', '2022-06-02 10:16:47.000000'),
('cat-62962fb1d0ca6', 'bracelets', '/static/imgs/categories\\bracelets.jpeg', '2022-06-03 10:16:47.000000', '2022-06-03 10:16:47.000000'),
('cat-62962ffec3fe7', 'belts', '/static/imgs/categories\\belts.jpeg', '2022-06-03 10:16:47.000000', '2022-06-03 10:16:47.000000'),
('cat-629785244dce4', 'necklaces', '/static/imgs/categories\\necklaces.jpeg', '2022-06-03 10:16:47.000000', '2022-06-03 10:16:47.000000');

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
  ADD UNIQUE KEY `name` (`name`);

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
