-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 02:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group_32`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `nic` text NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `nic`, `dob`, `password`, `date`, `user_type`) VALUES
(1, 'Naveesha Lakshan', 'lnaveesha4@gmail.com', '200106102441', '2001-03-01', '$2y$10$3gW2wi2CZ7ptW/lYRIZxMuXPk62oO9UtvgUOAFCyQsPUwXe4T1vQu', '2024-04-21 15:39:18', 'admin'),
(2, 'Sahan Kaveesha', 'sahan@gmail.com', '200106124558', '2001-12-05', '$2a$04$uzZRPqX3x2zqgKShHUR0YuckRWvPiegmM9Hm5q7payZ/UJa2gQ74C', '2024-04-21 21:52:56', 'Content Writer'),
(3, 'Kasun Kalhara', 'kalhara@gmail.com', '956825426V', '1995-05-12', '$2y$10$T1rg5H29/rYJVKRSqknlF.EE/eqMo81L4QiZd/LgySaT2RkbunpG2', '2024-04-22 01:27:20', 'Employee'),
(4, 'Siripala', 'siripala@gmail.com', '682545845v', '1968-03-17', '$2y$10$MiIYaddcXdURAJCAjzIELeUTsRwU91Bc6rXwd1OcjQqX7OmteznI6', '2024-04-23 13:46:12', 'Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
