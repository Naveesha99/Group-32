-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 12:03 PM
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(70) NOT NULL,
  `payment` int(7) NOT NULL,
  `refund` varchar(7) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` int(15) NOT NULL,
  `drama_id` int(7) NOT NULL,
  `drama_date` varchar(15) NOT NULL,
  `drama_time` varchar(15) NOT NULL,
  `seat_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `payment`, `refund`, `username`, `email`, `phone`, `drama_id`, `drama_date`, `drama_time`, `seat_id`) VALUES
(1, '65db171283f3e', 0, '12345', '', '', 0, 0, '', '', ''),
(2, '65db1d7005f10', 1000, '500', 'ishan', 'ishan@gmail.com', 763454332, 10, '2024-03-12', '09:00:00', 'A11'),
(3, '65db49be95fbb', 9000, '200', 'ishan', 'ishan@gmail.com', 763454332, 10, '2024-03-12', '09:00:00', 'A11'),
(4, '65db633854a74', 2000, 'no', '2021cs180', 'ishanchami9@gmail.com', 763951331, 10, '2024-03-01', '09:00:00', 'A3'),
(5, '6611975508498', 2000, 'no', 'ishan chamika', 'ishanchami9@gmail.com', 763951331, 10, '2024-04-11', '09:00:00', ''),
(6, '6611a0ef95710', 2000, 'no', 'ishan chamika', 'ishanchami9@gmail.com', 763951331, 10, '2024-04-11', '09:00:00', ''),
(7, '6611a497bb16e', 2000, 'no', 'thenuka wijewardane', 'thenuka@gmail.com', 777888888, 10, '2024-04-11', '09:00:00', ''),
(8, '661245acb13fb', 3000, 'no', 'thenuka wijewardane', 'thenuka@gmail.com', 777888888, 10, '2024-04-11', '09:00:00', ''),
(9, '6612471a86b11', 3000, 'no', 'hhh', 'hhh@gmail.com', 777888888, 10, '2024-04-11', '09:00:00', '6,10,2024-04-11,09:00:00,A6,free,,,,0,'),
(10, '66124ad164459', 3000, 'no', 'sss', 's@gmail.com', 777888888, 10, '2024-04-11', '09:00:00', ''),
(11, '66124b50436ab', 3000, 'no', 'sss', 's@gmail.com', 777888888, 10, '2024-04-11', '09:00:00', ''),
(12, '66124be7c6b77', 3000, 'no', 'ishan', 's@gmail.com', 777888888, 10, '2024-04-11', '09:00:00', ''),
(13, '66124f1beead8', 2000, 'no', 'ishan', 's@gmail.com', 777888888, 10, '2024-04-11', '09:00:00', ''),
(14, '66124f858d6e6', 2000, 'no', 'ishan', 's@gmail.com', 777888888, 10, '2024-04-11', '09:00:00', '4,10,2024-04-11,09:00:00,A4,free,,,,0,'),
(15, '6612500d5a5c7', 3000, 'no', 'ishan', 's@gmail.com', 777888888, 10, '2024-04-11', '09:00:00', ',,,,,,,,,,'),
(16, '661252813a38e', 3000, 'no', '2021cs180', 's@gmail.com', 777888888, 10, '2024-04-11', '09:00:00', ''),
(17, '661253e88cee9', 4000, 'no', '2021cs180', 's@gmail.com', 777888888, 10, '2024-04-11', '09:00:00', '5,10,2024-04-11,09:00:00,A5,free,,,,0,'),
(18, '661259366a1c4', 4000, 'no', '2021cs180', 's@gmail.com', 777888888, 10, '2024-04-11', '09:00:00', 'Array,Array,Array,Array'),
(19, '66125a4433902', 4000, 'no', 'djfg djg', 'ishanchami9@gmail.com', 763951331, 10, '2024-04-11', '09:00:00', 'A1,A4,A5,A6'),
(20, '6612615b197d1', 5000, 'no', 'djfg djg', 'ishanchami9@gmail.com', 763951331, 10, '2024-04-11', '09:00:00', 'A1,A7,A9,A10,A11'),
(21, '661261ecd8007', 5000, 'no', 'djfg djg', 'ishanchami9@gmail.com', 763951331, 10, '2024-04-11', '09:00:00', 'A1,A5,A6,A7,A8'),
(22, '6613a0be282a2', 3000, 'no', 'djfg djg', 'ishanchami9@gmail.com', 763951331, 10, '2024-04-11', '09:00:00', 'A5,A7,A8'),
(23, '661429fca36da', 3000, 'no', 'Senanayake', 'ishanchami9@gmail.com', 763951331, 10, '2024-04-11', '09:00:00', 'A1,A4,A5'),
(24, '661439b61b6ca', 4000, 'no', 'Shen zing', 'ishanchami9@gmail.com', 763951331, 10, '2024-04-11', '09:00:00', 'A1,A4,A6,A7'),
(25, '66143adbe260d', 4000, 'no', 'Shen zing', 'ishanchami9@gmail.com', 763951331, 10, '2024-04-11', '09:00:00', 'A1,A4,A6,A7'),
(26, '661441506a144', 4000, 'no', 'Shen zing', 'ishanchami9@gmail.com', 763951331, 10, '2024-04-11', '09:00:00', 'A1,A4,A5,A6'),
(27, '6614441ad6fed', 4000, 'no', 'Shen zing', 'ishanchami9@gmail.com', 763951331, 10, '2024-04-11', '09:00:00', 'A1,A3,A4,A5'),
(28, '66144b52671ae', 3000, 'no', 'Shen zing', 'ishanchami9@gmail.com', 763951331, 10, '2024-04-11', '09:00:00', 'A11,A12,A14'),
(29, '66163c666f237', 1800, 'no', '2021cs180', 'ishanchami9@gmail.com', 777888888, 43, '2024-04-13', '16:00:00', 'A12,A13'),
(30, '661641fd9a1ff', 1800, 'no', 'ishan chamika', 'ishanchami9@gmail.com', 763951331, 43, '2024-04-13', '16:00:00', 'A1,A2'),
(31, '6616462e8aec2', 2400, 'no', 'ishan chamika', 'ishanchami9@gmail.com', 763951331, 33, '2024-04-12', '09:00:00', 'A1,A2'),
(32, '6616a182ec0f3', 3000, 'no', 'ishan chamika', 'ishanchami9@gmail.com', 763951331, 26, '2024-04-11', '09:00:00', 'A1,A2'),
(33, '6616a28d52633', 1800, 'no', 'ishan chamika', 'ishanchami9@gmail.com', 763951331, 43, '2024-04-13', '16:00:00', 'A3,A4'),
(34, '6616af866fdf8', 1140, 'no', 'ishan chamika', 'ishanchami9@gmail.com', 763951331, 41, '2024-04-10', '19:00:00', 'A1,A2'),
(35, '6616b023f3fef', 1140, 'no', 'ishan chamika', 'ishanchami9@gmail.com', 763951331, 41, '2024-04-10', '19:00:00', 'A3,A5'),
(36, '6616b0861dbc4', 1700, 'no', 'ishan chamika', 'ishanchami9@gmail.com', 763951331, 42, '2024-04-13', '20:00:00', 'A1,A2'),
(37, '6616d9c595e8f', 2400, 'no', 'ishan chamika', 'ishanchami9@gmail.com', 763951331, 33, '2024-04-12', '09:00:00', 'A11,A12'),
(38, '6616eaf06fad8', 1650, 'no', 'ishan chamika', 'ishanchami9@gmail.com', 763951331, 44, '2024-04-13', '18:30:00', 'A1,A2,A5'),
(39, '6618d5f92b349', 2400, 'no', 'kalana chathuranga', 'kalana@gmail.com', 777863676, 33, '2024-04-12', '09:00:00', 'A3,A4'),
(40, '6618dcd548c62', 1100, 'no', '2021cs180', 'ishanchami9@gmail.com', 763951331, 44, '2024-04-13', '18:30:00', 'A7,A8'),
(41, '6618e3ad2df82', 1100, 'no', '2021cs180', 'ishanchami9@gmail.com', 763951331, 44, '2024-04-13', '18:30:00', 'A13,A14'),
(42, '6618e4dee96a1', 1100, 'no', '2021cs180', 'ishanchami9@gmail.com', 763951331, 44, '2024-04-13', '18:30:00', 'A38,A39'),
(43, '6618e69ae580e', 1100, 'no', '2021cs180', 'ishanchami9@gmail.com', 763951331, 44, '2024-04-13', '18:30:00', 'A6,A10'),
(44, '6618eb61539d0', 550, 'no', '2021cs180', 'ishanchami9@gmail.com', 763951331, 44, '2024-04-13', '18:30:00', 'A16'),
(45, '6618ec6d1eb4d', 1100, 'no', '2021cs180', 'ishanchami9@gmail.com', 763951331, 44, '2024-04-13', '18:30:00', 'A21,A22'),
(46, '6618ef1763b10', 1100, 'no', '2021cs180', 'ishanchami9@gmail.com', 763951331, 44, '2024-04-13', '18:30:00', 'A3,A4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`,`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
