-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 02:39 PM
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
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `empName` varchar(100) NOT NULL,
  `empEmail` varchar(100) NOT NULL,
  `empNIC` varchar(20) NOT NULL,
  `empDOB` date NOT NULL,
  `empAddress` varchar(255) NOT NULL,
  `empContact` varchar(20) NOT NULL,
  `empRoll` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `empName`, `empEmail`, `empNIC`, `empDOB`, `empAddress`, `empContact`, `empRoll`, `date`, `password`) VALUES
(1, 'Saman Kumara', 'saman@gmail.com', '754269548V', '1975-05-08', 'Matara', '0775856549', 'Set Designer', '2024-04-08 11:05:20', ''),
(2, 'Kanchana Anuradhi', 'kanchana@gmail.com', '952365784V', '1995-05-06', 'colombo', '0778569542', 'Set Designer', '2024-04-08 11:15:22', '952365784V'),
(3, 'NAveesha Lakshan', 'lnaveesha4@gmail.com', '200106102441', '2001-03-01', 'Gangasirimawatha', '0759368552', 'Light Engineer', '2024-04-08 21:12:25', '200106102441'),
(5, 'Sahan Kaveesha', 'sahan@gmail.com', '200106124558', '2001-12-05', 'Colombo', '0778569214', 'Content Writer', '2024-04-21 21:52:56', '200106124558'),
(6, 'Kasun Kalhara', 'kalhara@gmail.com', '956825426V', '1995-05-12', 'Kandy', '07789652418', 'Light Engineer', '2024-04-22 01:27:20', '$2y$10$T1rg5H29/rYJVKRSqknlF.EE/eqMo81L4QiZd/LgySaT2RkbunpG2'),
(7, 'Siripala', 'siripala@gmail.com', '682545845v', '1968-03-17', 'Anuradhapura', '0417586254', 'Cleaner', '2024-04-23 13:46:12', '$2y$10$MiIYaddcXdURAJCAjzIELeUTsRwU91Bc6rXwd1OcjQqX7OmteznI6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
