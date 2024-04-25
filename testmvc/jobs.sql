-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 02:39 PM
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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(20) NOT NULL,
  `jobTitle` varchar(255) NOT NULL,
  `jobSummary` text NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `jobTitle`, `jobSummary`, `startTime`, `endTime`, `salary`) VALUES
(1, 'Cleaner', ' The theater cleaner is responsible for maintaining cleanliness and hygiene standards in the theater facility. Duties include sweeping, mopping, and vacuuming floors, cleaning restrooms, disposing of trash, and ensuring common areas are presentable. The cleaner must work efficiently to meet high standards of cleanliness, providing a comfortable and enjoyable environment for patrons.', '08:00:00', '16:00:00', 10000),
(2, 'Light Engineer', 'The Theater Light Engineer oversees the design, installation, and operation of lighting systems in a theater. They collaborate with production teams to create atmospheric lighting designs that enhance performances. Responsibilities include equipment maintenance, programming light cues, and troubleshooting technical issues. A keen eye for artistic detail and technical proficiency in lighting technology are crucial for creating immersive and visually compelling theatrical experiences.', '08:00:00', '18:00:00', 60000),
(4, 'Sound Engineer', 'aaaaa', '08:00:00', '17:00:00', 60000),
(6, 'Stage Manager', 'The stage manager is responsible for coordinating all aspects of the production during rehearsals and performances. They work closely with the director, cast, and crew to ensure smooth and efficient operations backstage', '08:00:00', '17:00:00', 65000),
(7, 'Set Designer', 'Set designers in drama theater create the physical environment of the production. They design sets that enhance the storytelling, complement the script, and provide a visual backdrop for the actors.', '08:00:00', '17:00:00', 50000),
(8, 'Content Writer', 'Write Content', '00:00:00', '12:00:00', 100000),
(9, 'Front Desk Officer', 'Check Tickets, issue physical tickets, issue refund payments', '08:00:00', '17:00:00', 45000),
(10, 'Content Writer', 'Write articles for drama portal', '08:00:00', '17:00:00', 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
