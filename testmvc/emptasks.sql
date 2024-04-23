-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2024 at 05:57 PM
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
-- Table structure for table `emptasks`
--

CREATE TABLE `emptasks` (
  `id` int(11) NOT NULL,
  `task` varchar(255) DEFAULT NULL,
  `place` varchar(255) NOT NULL,
  `relavant_date` date DEFAULT NULL,
  `relavant_time` time DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `Created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emptasks`
--

INSERT INTO `emptasks` (`id`, `task`, `place`, `relavant_date`, `relavant_time`, `status`, `Created_at`) VALUES
(1, 'Cleaning the hall', 'Hall 01', '2024-04-10', '08:30:00', 'Completed', '2024-04-09 20:51:26'),
(2, 'Cleaning the theatre', 'Theatre', '2024-04-10', '14:30:00', 'To do', '2024-04-09 20:52:41'),
(3, 'Cleaning the hall', 'Hall 02', '2024-04-09', '12:30:00', 'Completed', '2024-04-09 20:54:27'),
(4, 'Cleaning the hall', 'Hall 02', '2024-04-03', '00:00:08', 'Completed', '2024-04-09 20:54:27'),
(5, 'Cleaning the theatre', 'Theatre', '2024-04-10', '08:30:00', 'Completed', '2024-04-09 20:55:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emptasks`
--
ALTER TABLE `emptasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emptasks`
--
ALTER TABLE `emptasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
