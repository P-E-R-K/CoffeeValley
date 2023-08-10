-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 06:30 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `bean`
--

CREATE TABLE `bean` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `sale_price` float NOT NULL,
  `sale_number` int(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bean`
--

INSERT INTO `bean` (`id`, `nama`, `slug`, `description`, `sale_price`, `sale_number`, `created_at`, `updated_at`) VALUES
(1, 'Cubita', 'cubita', 'Cubita Coffee is sun dried and hand sorted', 11, 15, '2023-08-10 05:21:55', '2023-08-10 05:21:55'),
(2, 'Costa Rican', 'costa-rican', 'Arabica set aside for the demanding Northern European', 12.3, 6, '2023-08-10 05:21:55', '2023-08-10 05:21:55'),
(3, 'Special Blend', 'special', 'A Mix of Arabica and Chili Powder', 0, 0, '2023-08-10 05:24:32', '2023-08-10 05:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`id`, `nama`, `kota`, `created_at`, `updated_at`) VALUES
(1, 'Beans R Us', 'jakarta', '2023-08-10 06:17:05', '2023-08-10 06:17:05'),
(2, 'Buzz Night', 'Bekasi', '2023-08-10 06:17:18', '2023-08-10 06:17:18'),
(3, 'Malam Sunyi', 'Malang', '2023-08-10 06:17:18', '2023-08-10 06:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role` varchar(12) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama`, `role`, `created_at`, `updated_at`) VALUES
('user1', 'user1', 'Test user 1', 'distributor', '2023-08-10 04:42:05', '2023-08-10 04:42:05'),
('username2', 'user2', 'Test user 2', 'user', '2023-08-10 04:42:05', '2023-08-10 04:42:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bean`
--
ALTER TABLE `bean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bean`
--
ALTER TABLE `bean`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
