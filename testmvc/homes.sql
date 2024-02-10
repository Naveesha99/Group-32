-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2024 at 01:39 PM
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
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(11) NOT NULL,
  `title` varchar(244) NOT NULL,
  `description` varchar(244) NOT NULL,
  `image` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `title`, `description`, `image`) VALUES
(10, 'SINHABAHU', 'The year 2011 marks fifty years after the first staging of Professor Sarachchandra’s play Sinhabahu which shares with his own Maname (1956) the record of enduring presence among theatre goers in Sri Lanka since the day they were first staged. T', 'i1.jpg'),
(11, 'MANAME', 'dhb wdhf d dddddd', 'i2.jpg'),
(12, 'MIHARAK', 'sdh hddddddddddddddd', 'i3.jpg'),
(13, 'ZZZZZZZZ', 'nnnnnnnn nnnnnnnnn nnnnnn', 'i1.jpg'),
(14, 'ggggggggggggg', 'kjdf dn', 'i2.jpg'),
(15, 'HHHHHHHHHH', 'df sdfm', 'i3.jpg'),
(16, 'JJJJJJJJJ', 'sddddddddd d', 'i4.jpg'),
(17, 'KKKKKKKKsdfs', 'fdsf', 'i1.jpg'),
(18, 'FFFFFFFFF', 'sdf sfd', 'i3.jpg'),
(19, 'JJJJJJJ', 'df  mef jqe qe ', 'i7.jpg'),
(20, 'TTTTTTTTT', 'sdfn sdf ksdf ', 'i6.jpg'),
(21, 'UUUUUUUUU', 'sdf sd sdj', 'i8.jpg'),
(22, 'LLLLLLL', 'ksdf sfg sdf', 'i2.jpg'),
(23, 'BBBBBB ', 'sdn df', 'i5.jpeg'),
(24, 'DDDDDD', 'sdf sdf sdf', 'i8.jpg'),
(25, 'SDDDDD', 'sfn erf frh', 'i4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
