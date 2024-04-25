-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 06:36 AM
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
  `time` time NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b_time`
--

INSERT INTO `b_time` (`id`, `drama_id`, `date`, `time`, `title`) VALUES
(1, 20, '2024-04-25', '03:30:00', 'RAWANA'),
(2, 26, '2024-04-11', '09:00:00', 'NARI BANA'),
(3, 26, '2024-04-11', '11:00:00', 'NARI BANA'),
(4, 11, '2024-02-28', '11:00:00', ''),
(5, 11, '2024-02-28', '04:00:00', ''),
(6, 11, '2024-02-29', '09:00:00', ''),
(7, 12, '2024-02-28', '09:00:00', ''),
(8, 13, '2024-02-19', '11:00:00', ''),
(9, 13, '2024-03-01', '04:00:00', ''),
(10, 15, '2024-02-25', '11:00:00', 'KELANI PALAMA'),
(11, 33, '2024-04-12', '09:00:00', ''),
(12, 41, '2024-04-10', '19:00:00', 'KAPUWA KAPOTHI'),
(13, 42, '2024-04-13', '20:00:00', 'NARI BANA'),
(14, 43, '2024-04-13', '16:00:00', ''),
(15, 44, '2024-04-13', '18:30:00', ''),
(16, 49, '2024-04-19', '16:00:00', ''),
(17, 50, '2024-04-26', '17:30:00', 'KOLAMA'),
(18, 52, '2024-04-26', '09:00:00', 'ELADIN SAHA PUDUMA PAHANA'),
(19, 53, '2024-04-26', '15:00:00', 'MANAME'),
(21, 42, '2024-04-27', '21:00:00', 'NARI BANA'),
(22, 21, '2024-04-29', '03:30:00', 'PANDORA'),
(23, 21, '2024-04-29', '06:30:00', 'PANDORA'),
(24, 20, '2024-04-30', '03:30:00', 'RAWANA'),
(25, 16, '2024-05-01', '03:30:00', 'ELADIN SAHA PUDUMA PAHANA'),
(26, 52, '2024-05-02', '03:30:00', 'ELADIN SAHA PUDUMA PAHANA'),
(27, 18, '2024-05-09', '03:30:00', 'DEYYOTH DANNE NA'),
(28, 18, '2024-05-10', '03:30:00', 'DEYYOTH DANNE NA'),
(29, 44, '2024-05-11', '03:30:00', 'THARAWO IGILETHI'),
(30, 44, '2024-05-12', '03:30:00', 'THARAWO IGILETHI'),
(31, 44, '2024-05-11', '06:30:00', 'THARAWO IGILETHI'),
(32, 44, '2024-05-12', '06:30:00', 'THARAWO IGILETHI'),
(33, 54, '2024-05-07', '03:30:00', 'HHH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_time`
--
ALTER TABLE `b_time`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_time`
--
ALTER TABLE `b_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
