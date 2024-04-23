-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 06:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `hallfacilities`
--

CREATE TABLE `hallfacilities` (
  `id` int(11) NOT NULL,
  `hallno` varchar(255) NOT NULL,
  `facility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hallfacilities`
--

INSERT INTO `hallfacilities` (`id`, `hallno`, `facility`) VALUES
(1, 'Hall01', 'Charging Points'),
(2, 'Hall01', 'Free wifi'),
(3, 'Hall01', 'Multimedia Projectors'),
(4, 'Hall01', 'Air Condition'),
(5, 'Hall01', 'Whiteboard'),
(6, 'Hall02', 'Charging Points'),
(7, 'Hall02', 'Free wifi'),
(8, 'Hall02', 'Multimedia Projectors'),
(9, 'Hall02', 'Air Condition'),
(10, 'Hall02', 'Whiteboard'),
(11, 'Hall03(Theatre)', 'Charging Points'),
(12, 'Hall03(Theatre)', 'Air Condition');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hallfacilities`
--
ALTER TABLE `hallfacilities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hallfacilities`
--
ALTER TABLE `hallfacilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
