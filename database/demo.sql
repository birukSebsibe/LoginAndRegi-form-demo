-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 03:28 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `email`) VALUES
(2, 'bethelhem', '$2y$10$qKrpCnS.Oyg5lUJAi5RV0e7vb/9ya3Vus84dasj99d1.y8DnxCkni', '2021-09-21 12:58:21', ''),
(3, 'tyty', '$2y$10$4pmlOrh3o6MTy63VvHWPYeIhjaM87NpYr1a6Nq7WGO8P.aq85GHQq', '2021-09-23 09:52:41', ''),
(4, 'user', '$2y$10$A5uoi8qfbZvc9x8BtqrGOu1k8kU4V3Zm85b2vIUV1V.6QfbR7nHbm', '2021-09-23 09:53:16', ''),
(5, 'bee', '$2y$10$Sg1aGhbuO/lBpjIspIL2puRe/6QToLqO/TB87bVbNQf76/MVKX3x2', '2021-09-23 09:56:34', ''),
(6, 'kim', '$2y$10$5BhvR0o6Saq8UwDVY1Zq1uzYHtyABsLMSzOwNFg1UfG7VNWW.B3XW', '2021-09-23 16:24:18', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
