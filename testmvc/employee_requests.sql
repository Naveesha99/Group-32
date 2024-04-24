-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2024 at 05:56 PM
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
-- Table structure for table `employee_requests`
--

CREATE TABLE `employee_requests` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `leave_type` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reason` text NOT NULL,
  `state` varchar(100) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `Created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_requests`
--

INSERT INTO `employee_requests` (`id`, `employee_name`, `leave_type`, `start_date`, `end_date`, `reason`, `state`, `emp_id`, `Created_at`) VALUES
(1, 'Kasun', 'Vacation Leave', '2024-04-18', '2024-04-20', 'syxwgddgg', 'accepted', NULL, '2024-04-07 15:22:00'),
(2, 'Nimal', 'Vacation Leave', '2024-04-26', '2024-04-27', 'gycyty', 'rejected', NULL, '2024-04-07 18:58:42'),
(8, 'Kasun', 'Vacation Leave', '2024-04-11', '2024-04-12', 'gvaytaatysafysy', 'pending', NULL, '2024-04-09 18:38:10'),
(9, 'Kasun', 'Sick Leave', '2024-04-13', '2024-04-14', 'uyudueuuev', 'pending', NULL, '2024-04-09 18:43:09'),
(10, 'Jennifer', 'Personal Leave', '2024-04-18', '2024-04-19', 'for personal thing', 'pending', NULL, '2024-04-17 11:46:06'),
(11, 'Jane', 'Vacation Leave', '2024-04-26', '2024-04-27', 'jjfirjgijgij', 'pending', NULL, '2024-04-17 11:54:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_requests`
--
ALTER TABLE `employee_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_requests`
--
ALTER TABLE `employee_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_requests`
--
ALTER TABLE `employee_requests`
  ADD CONSTRAINT `employee_requests_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
