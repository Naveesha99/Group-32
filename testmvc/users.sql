-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2024 at 07:09 PM
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
  `username` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `nic` text NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `nic`, `dob`, `password`, `date`) VALUES
(1, 'naveesha lakshan', 'naveesha', 'naveesha@gmail.com', '1234567890', '2001-03-01', '1234', '2023-12-26 17:42:21'),
(2, 'lakshan', 'lakshan', 'lakshan@gmail.com', '777777777', '2001-03-01', '1234', '2023-12-29 18:01:18'),
(5, 'kumara', 'kumara', 'kumara@gmail.com', '1234567890', '0000-00-00', 'Kumara@123', '2024-01-03 23:58:39'),
(6, 'lakshan', 'lakshan', 'lak@gmail.com', '1234', '0000-00-00', 'Navee@123', '2024-01-04 16:14:24'),
(7, 'naveesha lakshan', 'naveesha', 'lakshannaveesha10@gmail.com', '200106102441', '0000-00-00', 'Navee@123', '2024-01-07 23:52:59'),
(8, 'Sahan', 'sahan', 'sahan@gmail.com', '983456785V', '0000-00-00', 'Sahan@123', '2024-02-12 21:24:28');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
