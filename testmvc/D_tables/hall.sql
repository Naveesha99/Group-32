-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 05:59 AM
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
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `id` int(11) NOT NULL,
  `hallno` varchar(256) NOT NULL,
  `amountOneHour` int(11) NOT NULL,
  `amountSounds` int(11) NOT NULL,
  `amountStandings` int(11) NOT NULL,
  `headCount` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `content` mediumtext DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`id`, `hallno`, `amountOneHour`, `amountSounds`, `amountStandings`, `headCount`, `image`, `content`, `status`) VALUES
(1, 'Hall01', 1000, 0, 0, 50, 'hallHall01.jpg', 'Elevate your events at Conference Hall A. With cutting-edge facilities and a capacity of up to 20, we ensure seamless meetings and conferences. Clear sound, comfortable seating, and high-speed Wi-Fi guarantee a productive experience. Welcome to the epitome of functionality and comfort.', 'active'),
(2, 'Hall02', 1000, 0, 0, 100, 'hallHall02.jpg', 'Welcome to the epitome of modern sophistication at Conference Hall B. With a capacity of up to 15 guests, our hall is a haven of smart technology. From intuitive lighting to interactive displays, every aspect is designed to enhance your event. Experience seamless connectivity and innovation in every detail.', 'active'),
(3, 'Hall03', 10000, 0, 0, 250, 'hallHall03(Theatre).jpg', 'Enter a realm of theatrical excellence at our Stage Drama Theater, where each production is a testament to artistic brilliance. Our main stage, equipped with cutting-edge technology, sets the scene for unforgettable performances. Immerse yourself in comfort amidst sophisticated seating, enhanced by impeccable sound and lighting. Steeped in history yet pulsating with modernity, our theater serves as a distinguished hub for the arts, fostering creativity and community engagement.', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
