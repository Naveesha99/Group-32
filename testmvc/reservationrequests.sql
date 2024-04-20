-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 10:26 PM
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
  `reservationistId` varchar(256) NOT NULL,
  `rating` int(255) DEFAULT NULL,
  `review` varchar(255) DEFAULT NULL,
  `review_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservationrequests`
--

INSERT INTO `reservationrequests` (`id`, `hallno`, `name`, `date`, `startTime`, `endTime`, `hours`, `headCount`, `sounds`, `standings`, `message`, `amount`, `status`, `reservationistId`, `rating`, `review`, `review_date`) VALUES
(1, 'HALL01', 'shaikh anas 11', '2024-02-08', '10:00:00', '11:00:00', 1, 3, 'NO', 'NO', 'no msg dgs jibuidbuebf dklsnldnol', 0, 'pending', '', NULL, NULL, NULL),
(2, 'HALL01', 'Dilki Lenoraaaaa', '2024-02-23', '19:00:00', '20:00:00', 1, 3, 'NO', 'YES', 'mnhgdfyvsajbh', 0, 'rejected', '', NULL, NULL, NULL),
(3, 'HALL01', 'shaikh anas', '2024-02-25', '08:00:00', '11:00:00', 3, 3, 'YES', 'YES', 'uyfwu', 0, 'accepted', '', 2, 'review for this request for number 3 is hereeeee', '2024-04-13 07:37:28'),
(4, 'HALL01', 'PUNCHI THEATRE', '2024-02-14', '09:00:00', '12:00:00', 3, 3, 'YES', 'YES', 'hyugdyuv', 0, 'accepted', '', 4, 'review for id 4 updated\r\n', '2024-04-14 21:33:36'),
(5, 'HALL02', 'K.J.M.Fernando', '2024-02-16', '11:00:00', '13:00:00', 2, 2, 'YES', 'YES', 'iidcbiu', 0, 'pending', '', NULL, NULL, NULL),
(6, 'HALL02', 'annnnnn', '2024-02-29', '10:00:00', '12:00:00', 2, 3, 'YES', 'YES', 'nbuxbqo', 0, 'pending', '', NULL, NULL, NULL),
(7, 'HALL01', 'shaikh anas', '2024-02-24', '12:00:00', '13:00:00', 1, 3, 'NO', 'NO', 'mkobobdw', 0, 'accepted', '', 4, 'bsid number unknownnnnnnnnn ', '2024-04-14 21:34:15'),
(8, 'HALL01', 'dilkiiiiiiiii', '2024-02-16', '10:00:00', '12:00:00', 2, 7, 'NO', 'NO', 'bjdvbo', 0, 'pending', '', NULL, NULL, NULL),
(9, 'HALL02', 'rusiru achchi', '2024-02-23', '12:00:00', '13:00:00', 1, 2, 'NO', 'NO', 'no msg', 0, 'pending', '', NULL, NULL, NULL),
(10, 'HALL03', '\\ffe', '2024-02-23', '09:00:00', '10:00:00', 1, 4, 'NO', 'NO', 'nvgdjhkjnm', 0, 'accepted', '', 3, 'kmkmm', NULL),
(11, 'HALL03', 'K.J.M.Fernando', '2024-02-22', '11:00:00', '12:00:00', 1, 1, 'NO', 'NO', 'k ', 0, 'pending', '', NULL, NULL, NULL),
(12, 'HALL03', 'PUNCHI THEATRE', '2024-02-23', '18:00:00', '20:00:00', 2, 2, 'NO', 'NO', 'njbfwiw', 0, 'accepted', '', NULL, NULL, NULL),
(13, 'HALL02', 'abcd', '2024-02-23', '11:00:00', '13:00:00', 2, 3, 'NO', 'YES', 'nknos', 0, 'accepted', '', 3, 'to 13th one', NULL),
(14, 'HALL02', 'dilki lenoraa 2', '2024-02-23', '10:00:00', '13:00:00', 3, 10, 'YES', 'YES', 'abcdeubofweubfooo abcsdnhop', 0, 'pending', '', NULL, NULL, NULL),
(15, 'HALL01', 'PUNCHI THEATRE', '2024-02-25', '16:00:00', '17:00:00', 1, 3, 'NO', 'NO', 'bivediuvwfi', 1000, 'pending', '', NULL, NULL, NULL),
(16, 'HALL02', 'annaaaaaaaa mmmmmm', '2024-02-29', '10:00:00', '11:00:00', 1, 2, 'NO', 'NO', 'deds', 1500, 'pending', '', NULL, NULL, NULL),
(17, 'HALL01', 'as', '2024-02-24', '09:00:00', '11:00:00', 2, 3, 'NO', 'NO', 'nksn', 2000, 'accepted', '', 2, 'scd', NULL),
(19, 'HALL03', 'Dilki Lenora', '2024-04-13', '09:00:00', '11:00:00', 2, 4, 'YES', 'NO', 'nksn', 8000, 'pending', '', NULL, NULL, NULL),
(20, 'HALL03', 'huihuihuihuhi', '2024-04-13', '11:00:00', '12:00:00', 1, 4, 'NO', 'NO', 'fdvfvfdv', 4000, 'pending', '', NULL, NULL, NULL),
(21, 'HALL03', 'PUNCHI THEATRE', '2024-04-11', '11:00:00', '13:00:00', 2, 3, 'NO', 'NO', 'hvcv', 8000, 'pending', '', NULL, NULL, NULL),
(22, 'HALL03', 'nonononononon', '2024-04-20', '12:00:00', '13:00:00', 1, 2, 'YES', 'YES', 'sdvcsdc', 4000, 'accepted', '', NULL, NULL, NULL),
(23, 'HALL01', 'axs 23 req', '2024-04-25', '08:00:00', '09:00:00', 1, 2, 'NO', 'YES', 'cd', 1000, 'accepted', '', NULL, NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
