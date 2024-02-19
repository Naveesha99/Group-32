-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 06:11 AM
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
-- Table structure for table `reservationists`
--

CREATE TABLE `reservationists` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactNumber` varchar(20) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservationists`
--

INSERT INTO `reservationists` (`id`, `fullname`, `username`, `email`, `contactNumber`, `nic`, `password`, `date`) VALUES
(1, 'ama lenora', 'amal', 'amal@gmail.com', '1111111111', '200155400475', 'amal', '2024-01-28'),
(2, 'dilki lenora', 'dilki', 'dillenora@gmail.com', '1111111111', '200155400473', 'dilki', '2024-01-28'),
(3, 'dilki lenora', 'dilkil', 'dillenora@gmail.com', '0123423416', '200044688765', 'dilkil', '2024-02-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservationists`
--
ALTER TABLE `reservationists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservationists`
--
ALTER TABLE `reservationists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
