-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 06:38 AM
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
-- Table structure for table `ticket_price`
--

CREATE TABLE `ticket_price` (
  `id` int(11) NOT NULL,
  `drama_id` int(10) NOT NULL,
  `t_type` varchar(255) NOT NULL,
  `t_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_price`
--

INSERT INTO `ticket_price` (`id`, `drama_id`, `t_type`, `t_price`) VALUES
(5, 42, 'Normal', 850),
(6, 43, 'Normal', 900),
(7, 41, 'Normal', 570),
(8, 33, 'Normal', 1200),
(9, 26, 'Normal', 1500),
(10, 44, 'Normal', 550),
(11, 45, 'Normal', 0),
(12, 45, 'Normal', 0),
(13, 45, 'Normal', 0),
(15, 49, 'Normal', 750),
(16, 25, 'Normal', 800),
(17, 50, 'Normal', 720),
(18, 52, 'Normal', 550),
(19, 52, 'Normal', 560),
(20, 53, 'Normal', 600),
(21, 41, 'Normal', 900),
(22, 41, 'Normal', 900),
(23, 20, 'Normal', 450),
(24, 21, 'Normal', 500),
(25, 20, 'Normal', 500),
(26, 20, 'Normal', 500),
(27, 16, 'Normal', 700),
(28, 52, 'Normal', 600),
(29, 18, 'Normal', 600),
(30, 44, 'Normal', 600),
(31, 54, 'Normal', 800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket_price`
--
ALTER TABLE `ticket_price`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket_price`
--
ALTER TABLE `ticket_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
