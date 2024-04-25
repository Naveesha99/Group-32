-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 06:55 AM
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
-- Table structure for table `reservationpayments`
--

CREATE TABLE `reservationpayments` (
  `id` int(11) NOT NULL,
  `reqid` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ispaid` int(11) NOT NULL,
  `orderId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservationpayments`
--

INSERT INTO `reservationpayments` (`id`, `reqid`, `fullname`, `mobile`, `email`, `ispaid`, `orderId`) VALUES
(1, 12, ' ', ' ', ' ', 1, NULL),
(2, 12, ' dqe', ' 1234567890', ' a@gmaill.com', 1, NULL),
(3, 12, ' srfgwrwts', ' 1234567890', ' aded@gmaill.com', 1, NULL),
(4, 12, ' njnbn', '1234567890', ' aded@gmaill.com', 0, NULL),
(5, 7, ' dfv', ' 1234567890', ' aded@gmaill.com', 0, NULL),
(6, 10, ' dw', ' 1234567890', ' aded@gmaill.com', 1, NULL),
(7, 10, ' dw', ' 1234567890', ' aded@gmaill.com', 1, NULL),
(8, 22, ' jbei', ' 1234567890', ' aded@gmaill.com', 1, NULL),
(9, 35, ' uygh', ' 1234567890', ' aded@gmaill.com', 0, NULL),
(10, 35, ' uygh', ' 1234567890', ' aded@gmaill.com', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservationpayments`
--
ALTER TABLE `reservationpayments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservationpayments`
--
ALTER TABLE `reservationpayments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
