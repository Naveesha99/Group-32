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
-- Table structure for table `refund`
--

CREATE TABLE `refund` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cancel_seats` varchar(50) NOT NULL,
  `remain_seat` varchar(160) NOT NULL,
  `refund` float NOT NULL,
  `refund_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `refund`
--

INSERT INTO `refund` (`id`, `order_id`, `email`, `cancel_seats`, `remain_seat`, `refund`, `refund_status`) VALUES
(12, '661bacdc1d279', 'ishanchami9@gmail.com', 'A17,', '0', 375, 'pending'),
(13, '661b7482658e2', 'ishanchami9@gmail.com', 'A16,', '0', 375, 'pending'),
(16, '661d9e85eedb1', 'ishanchami9@gmail.com', 'A13,A14,A15,', 'A16,A17,', 1125, 'pending'),
(18, '661bac96ea06e', 'ishanchami9@gmail.com', 'A13,A14,A15,', 'A21,A22,', 1125, 'pending'),
(20, '661e358f84478', 'ishanchami9@gmail.com', 'A7,A8,A9,', '0', 1125, 'pending'),
(22, '6624ea30a499e', 'ishanchami9@gmail.com', 'A66,', '0', 300, 'pending'),
(23, '6626016be4615', 'ishanchami9@gmail.com', 'A26,A27,', '0', 600, 'pending'),
(24, '6628c325722e2', 'ishanchami9@gmail.com', 'A24,A26,A36,', '0', 900, 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `refund`
--
ALTER TABLE `refund`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `refund`
--
ALTER TABLE `refund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
