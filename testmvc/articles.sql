-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2024 at 01:20 PM
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
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `article_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `image` blob NOT NULL,
  `cw_id` int(11) DEFAULT NULL,
  `Created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article_name`, `category`, `article_content`, `image`, `cw_id`, `Created_at`) VALUES
(1, 'naribana', 'DramaHistory', '“Nari Bana” emerges as a crowning jewel in Dayananda Gunawardena\'s illustrious career. This drama book, with its enchanting title, translates to “The Dance of Women” in English.', 0x6e61726962616e612e6a706567, NULL, '2024-02-09 21:58:48'),
(23, 'Sokari', 'DramaHistory', 'A drama by the celebrated dramatist, Prof Ediriweera Sarachchandra, that utilises the traditions of nadagama (a type of rural folk theatre in Sri Lanka).', 0x736f6b6172692e6a706567, NULL, '2024-02-09 21:58:48'),
(24, 'balloth ekka be', 'DramaHistory', 'ffffg x djosnxk', 0x73696e6861626168752e6a706567, NULL, '2024-02-09 21:58:48'),
(25, 'maname', 'DramaHistory', 'jdgdshjgcdsjcgsdycgsdj', 0x61727469636c652e706e67, NULL, '2024-02-09 21:58:48'),
(32, 'sinhabahu', 'Tragedy', 'jhgjfj', 0x73696e6861626168752e6a706567, NULL, '2024-02-09 21:58:48'),
(33, 'Edipas raja', 'Tragedy', 'Oedipus Rex by Sophocles is a Greek tragedy about a man who unknowingly fulfills a prophecy by killing his father and marrying his mother. It explores themes of fate, free will, and the consequences of unchecked pride.', 0x69332e6a7067, NULL, '2024-02-09 21:58:48'),
(34, 'Rawana', 'Melodrama', 'Ravana is the mythical multi-headed demon-king of Lanka in Hindu mythology. With ten heads and twenty arms, Ravana could change into any form he wished. Representing the very essence of evil, he famously fought and ultimately lost a series of epic battles against the hero Rama, seventh avatar of Vishnu.', 0x6931302e6a706567, NULL, '2024-02-09 21:58:48'),
(35, 'Aladin Saha Puduma Pahana', 'Comedy', 'A handsome young man comes across a magical lamp that can grant all his wishes. But alas it also causes him sadness and endless troubles. A castle disappears and the young man devises a plan to restore it to its original place.', 0x69372e6a7067, NULL, '2024-02-10 07:04:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cw_id` (`cw_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`cw_id`) REFERENCES `content_writers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
