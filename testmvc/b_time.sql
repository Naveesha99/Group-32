-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 07:05 PM
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
(1, 10, '2024-02-21', '09:00:00'),
(3, 11, '2024-02-28', '09:00:00'),
(4, 11, '2024-02-28', '11:00:00'),
(5, 11, '2024-02-28', '04:00:00'),
(6, 11, '2024-02-29', '09:00:00'),
(7, 12, '2024-02-28', '09:00:00'),
(8, 13, '2024-02-19', '11:00:00'),
(9, 13, '2024-03-01', '04:00:00'),
(10, 15, '2024-02-25', '11:00:00'),
(11, 13, '2024-03-01', '04:00:00'),
(12, 15, '2024-02-25', '11:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `b_time`
--
ALTER TABLE `b_time`
  ADD CONSTRAINT `drama_id` FOREIGN KEY (`drama_id`) REFERENCES `homes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
