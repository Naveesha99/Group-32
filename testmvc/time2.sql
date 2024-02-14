-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 05:05 AM
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
-- Table structure for table `time2`
--

CREATE TABLE `time2` (
  `id` int(11) NOT NULL,
  `drama_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `seat_id` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time2`
--

INSERT INTO `time2` (`id`, `drama_id`, `date`, `time`, `seat_id`, `status`, `username`, `email`, `phone`) VALUES
(1, 10, '2024-01-26', '11:00:00', 'A1', 'free', '', '', ''),
(2, 10, '2024-01-26', '11:00:00', 'A2', 'free', '', '', ''),
(3, 10, '2024-01-26', '11:00:00', 'A3', 'free', '', '', ''),
(4, 10, '2024-01-26', '11:00:00', 'A4', 'free', '', '', ''),
(5, 10, '2024-01-26', '11:00:00', 'A5', 'free', '', '', ''),
(6, 10, '2024-01-26', '11:00:00', 'A6', 'free', '', '', ''),
(7, 10, '2024-01-26', '11:00:00', 'A7', 'free', '', '', ''),
(8, 10, '2024-01-26', '11:00:00', 'A8', 'free', '', '', ''),
(9, 10, '2024-01-26', '11:00:00', 'A8', 'free', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `time2`
--
ALTER TABLE `time2`
  ADD PRIMARY KEY (`id`,`drama_id`,`date`,`time`,`seat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `time2`
--
ALTER TABLE `time2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
