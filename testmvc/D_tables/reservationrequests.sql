-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 08:01 AM
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
-- Table structure for table `reservationrequests`
--

CREATE TABLE `reservationrequests` (
  `id` int(11) NOT NULL,
  `hallno` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `hours` int(11) NOT NULL,
  `headCount` int(11) NOT NULL,
  `sounds` varchar(255) NOT NULL,
  `standings` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `reservationistId` int(11) NOT NULL,
  `rating` int(255) DEFAULT NULL,
  `review` varchar(255) DEFAULT NULL,
  `review_date` datetime DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `acceptedTime` timestamp NULL DEFAULT NULL,
  `ispaid` int(11) DEFAULT NULL,
  `hasArrived` int(11) DEFAULT NULL,
  `refundedAmount` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservationrequests`
--

INSERT INTO `reservationrequests` (`id`, `hallno`, `name`, `date`, `startTime`, `endTime`, `hours`, `headCount`, `sounds`, `standings`, `message`, `amount`, `status`, `reservationistId`, `rating`, `review`, `review_date`, `reason`, `acceptedTime`, `ispaid`, `hasArrived`, `refundedAmount`) VALUES
(35, 'Hall01', 'jhb', '2024-04-25', '11:00:00', '12:00:00', 1, 1, 'YES', 'YES', 'no msg', 1000, 'refund', 7, 4, 'for req  jlbnbblb;', '2024-04-28 15:57:01', NULL, '2024-04-28 13:57:01', 1, NULL, 1000),
(36, 'Hall01', 'wd', '2024-04-30', '16:00:00', '18:00:00', 2, 2, 'YES', 'YES', 'mjh', 2000, 'refund', 7, NULL, NULL, NULL, NULL, '2024-04-28 21:59:19', 1, NULL, 2000),
(37, 'Hall01', 'wd', '2024-04-23', '16:00:00', '18:00:00', 2, 2, 'YES', 'YES', 'mjh', 2000, 'refund', 7, 5, 'no review for this nonon', '2024-04-28 15:57:11', NULL, '2024-04-29 04:16:02', 1, NULL, 2000),
(38, 'Hall01', 'wd', '2024-04-30', '16:00:00', '18:00:00', 2, 2, 'YES', 'YES', 'mjh', 2000, 'refund', 7, NULL, NULL, NULL, NULL, '2024-04-29 04:42:06', 1, NULL, 2000),
(39, 'Hall01', 'wd', '2024-04-30', '16:00:00', '18:00:00', 2, 2, 'YES', 'YES', 'mjh', 2000, 'accepted', 7, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0),
(40, 'Hall01', 'wd', '2024-04-30', '16:00:00', '18:00:00', 2, 2, 'YES', 'YES', 'mjh', 3000, 'rejected', 7, NULL, NULL, NULL, NULL, '2024-04-21 09:24:20', 0, NULL, 0),
(42, 'Hall01', 'wd', '2024-04-30', '16:00:00', '18:00:00', 2, 2, 'YES', 'YES', 'mjh', 2000, 'rejected', 7, NULL, NULL, NULL, NULL, '2024-04-22 09:48:56', 0, NULL, 0),
(43, 'Hall01', 'ces', '1900-01-24', '10:00:00', '12:00:00', 2, 1, 'NO', 'NO', 'hvcv', 2000, 'refund', 7, 3, 'kmlkm mkmk', '2024-04-28 15:12:56', NULL, '2024-04-28 21:04:19', 1, NULL, 2000),
(44, 'Hall01', 'ces', '2024-04-30', '10:00:00', '12:00:00', 2, 1, 'NO', 'NO', 'hvcv', 2000, 'refund', 7, NULL, NULL, NULL, NULL, '2024-04-28 21:47:53', 1, NULL, 2000),
(45, 'Hall01', 'ces', '2024-04-30', '10:00:00', '12:00:00', 2, 1, 'NO', 'NO', 'hvcv', 2000, 'refund', 7, NULL, NULL, NULL, NULL, '2024-04-28 21:49:13', 1, NULL, 2000),
(46, 'Hall03', 'Dilki Lenora', '2024-04-24', '10:00:00', '12:00:00', 2, 3, 'NO', 'NO', ',kjhvc', 8000, 'refund', 7, 0, 'review', '2024-04-28 15:02:58', NULL, '2024-04-28 21:50:23', 1, NULL, 8000),
(47, 'Hall01', 'Dilki Lenora', '2024-04-30', '10:00:00', '12:00:00', 2, 90, 'YES', 'YES', 'jhb', 2000, 'accepted', 7, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0),
(48, 'Hall01', 'dilkiiii', '2024-04-30', '13:00:00', '15:00:00', 2, 40, 'YES', 'YES', 'b4nosivoi4n5ob3nwij5ij', 3000, 'accepted', 7, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0),
(49, 'Hall02', 'ama', '2024-04-30', '12:00:00', '14:00:00', 2, 80, 'YES', 'NO', 'hvcv', 1500, 'accepted', 7, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0),
(50, 'Hall01', 'No Name', '2024-04-30', '13:00:00', '14:00:00', 1, 57, 'YES', 'NO', 'bihbd', 1500, 'refund', 7, NULL, NULL, NULL, NULL, '2024-04-28 20:46:47', 1, NULL, 1500),
(51, 'Hall03', 'Req now', '2024-05-01', '11:00:00', '14:00:00', 3, 50, 'YES', 'YES', 'no', 14000, 'rejected', 7, NULL, NULL, NULL, NULL, '2024-04-27 21:21:13', 0, NULL, 0),
(52, 'Hall02', 'dilki', '2024-05-02', '11:00:00', '12:00:00', 1, 3, 'YES', 'YES', 'nin', 2000, 'refund', 7, NULL, NULL, NULL, NULL, '2024-04-29 05:06:21', 1, NULL, 2000),
(53, 'Hall02', 'nb', '2024-05-10', '16:00:00', '17:00:00', 1, 3, 'NO', 'NO', 'fe', 1000, 'refund', 7, NULL, NULL, NULL, NULL, '2024-04-29 05:00:40', 1, NULL, 1000);

--
-- Triggers `reservationrequests`
--
DELIMITER $$
CREATE TRIGGER `update_accepted_time_trigger` BEFORE UPDATE ON `reservationrequests` FOR EACH ROW BEGIN
    IF NEW.status = 'accepted' THEN
        SET NEW.acceptedTime = NOW();
    END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservationrequests`
--
ALTER TABLE `reservationrequests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservationrequests`
--
ALTER TABLE `reservationrequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
