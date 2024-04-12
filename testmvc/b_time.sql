-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 12:03 PM
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
-- Table structure for table `b_time`
--

CREATE TABLE `b_time` (
  `id` int(11) NOT NULL,
  `drama_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b_time`
--

INSERT INTO `b_time` (`id`, `drama_id`, `date`, `time`) VALUES
(1, 26, '2024-04-11', '09:00:00'),
(3, 26, '2024-04-11', '11:00:00'),
(4, 11, '2024-02-28', '11:00:00'),
(5, 11, '2024-02-28', '04:00:00'),
(6, 11, '2024-02-29', '09:00:00'),
(7, 12, '2024-02-28', '09:00:00'),
(8, 13, '2024-02-19', '11:00:00'),
(9, 13, '2024-03-01', '04:00:00'),
(10, 15, '2024-04-11', '09:00:00'),
(11, 13, '2024-03-01', '04:00:00'),
(12, 15, '2024-02-25', '11:00:00'),
(16, 33, '2024-04-12', '09:00:00'),
(17, 41, '2024-04-10', '19:00:00'),
(18, 42, '2024-04-13', '20:00:00'),
(19, 43, '2024-04-13', '16:00:00'),
(20, 44, '2024-04-13', '18:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_time`
--
ALTER TABLE `b_time`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drama_id` (`drama_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_time`
--
ALTER TABLE `b_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
