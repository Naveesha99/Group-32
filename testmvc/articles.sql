-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2024 at 02:24 AM
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
  `Created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article_name`, `category`, `article_content`, `image`, `cw_id`, `Created_at`, `status`) VALUES
(33, 'Edipas Raja', 'Tragedy', ' Oedipus Rex by Sophocles is a Greek tragedy about a man who unknowingly fulfills a prophecy by killing his father and marrying his mother. It explores themes of fate, free will, and the consequences of unchecked pride.            ', 0x69332e6a7067, NULL, '2024-02-09 21:58:48', 1),
(34, 'Rawana', 'Musical', 'Ravana is the mythical multi-headed demon-king of Lanka in Hindu mythology. With ten heads and twenty arms, Ravana could change into any form he wished. Representing the very essence of evil, he famously fought and ultimately lost a series of epic battles against the hero Rama, seventh avatar of Vishnu.', 0x726177616e612e6a7067, NULL, '2024-02-09 21:58:48', 1),
(35, 'Aladin Saha Puduma Pahana', 'Comedy', 'A handsome young man comes across a magical lamp that can grant all his wishes. But alas it also causes him sadness and endless troubles. A castle disappears and the young man devises a plan to restore it to its original place.', 0x69372e6a7067, NULL, '2024-02-10 07:04:44', 1),
(36, 'Deyyoth danne na', 'Comedy', 'Wijaya Nandasiri, Kumara Thirimadura, Sarath Kulanga, Mihira Sirithilaka, Thushari Gunarathne and Tharaka Upendra starring, art direction of the play is by Jagath Padmasiri and stage lighting by Upali Weerasinghe. Acting motions will be by Sadda Uthpalakandage while Nirmani Prabashawari and Jagath Padmasiri done costume designing. “Deyyoth danne ne” is written by Ajith Mendis and produced by Jude Srimal of Nirmala Prakasha.\r\n\r\nWith Sarath Kulanga’s music composition, Sandasiri Adhikari has directed and Llewellin Vanderwal the stage management.', 0x69382e6a706567, NULL, '2024-02-11 23:21:56', 1),
(37, 'Tharawo Igilethi', 'Comedy', 'Tharawo Igilethi is a Sinhalese stage drama by Lucien Bulathsinhala, based on the twin brothers story on Singapore Country. This drama is directed and produced by Lucien Bulathsinhala. Tharawo Igilithi, by playwright Lucian Bulathsinhala’s stage play of the 1980s and 1990s has made a comeback after ten years as a new production', 0x7468617261776f2e6a706567, NULL, '2024-02-14 16:19:37', 1),
(38, 'Tharawo Igilethi', 'Comedy', '                Tharawo Igilethi is a Sinhalese stage drama by Lucien Bulathsinhala, based on the twin brothers story on Singapore Country. This drama is directed and produced by Lucien Bulathsinhala. Tharawo Igilithi, by playwright Lucian Bulathsinhala’s stage play of the 1980s and 1990s has made a comeback after ten years as a new production            ', 0x7468617261776f322e6a706567, NULL, '2024-02-14 16:21:34', 0),
(39, 'Sath Gunawath Horu', 'Comedy', 'Episode Description. Sath Gunawath Horu - A Sri Lankan stage drama from Melbourne that consists only of resources from Melbourne-based actors ...', 0x736174682067756e7761746820686f72752e6a7067, NULL, '2024-02-14 16:25:23', 1),
(40, 'Sinhabahu', 'Tragedy', 'Sinhabahu, a play directed by the celebrated dramatist Prof Ediriweera Sarachchandra is based on the legend of King Sinhabahu, the son of a lion and a royal princess—Suppa Devi. Emphasis has been given in the play to portray the humane feelings of the characters', 0x73696e6861626168754e65772e6a7067, NULL, '2024-02-14 17:42:26', 1),
(42, 'Meeharak', 'Comedy', 'An illiterate and sexually frustrated young man finds himself attracted to a chic woman from the city who has come to his rural village as a school teacher.', 0x6d6565686172616b2e6a706567, NULL, '2024-02-15 16:41:20', 1),
(43, 'Umuthsunwarsawa', 'Melodrama', 'An illiterate and sexually frustrated young man finds himself attracted to a chic woman from the city who has come to his rural village as a school teacher.', 0x756d7574687573756e776172736177612e6a7067, NULL, '2024-02-15 16:42:42', 1),
(44, 'Hithumathe adare', 'romantic', 'An illiterate and sexually frustrated young man finds himself attracted to a chic woman from the city who has come to his rural village as a school teacher.', 0x69352e6a706567, NULL, '2024-02-15 16:45:48', 1),
(45, 'Mano', 'Comedy', 'et in the fictional Arabian city of Agrabah, the story follows the familiar tale of a poor young man who is granted three wishes by a genie in a lamp, which he uses to woo a princess and to thwart the sultan\'s evil Grand Vizier.', 0x69362e6a7067, NULL, '2024-02-16 01:12:23', 1),
(46, 'Rassa Saha Parassa', 'Comedy', 'The drama Rassa-Parassa was based on a Sri Lankan Folktale about a village farming couple and their sudden fortune arising out of an \'unexpected arrival\'. Since its initial production, Rassa – Parassa has been a resounding success in Sri Lanka, for many years.', 0x72737361207361686120706172617373612e6a7067, NULL, '2024-02-18 21:44:28', 0),
(47, 'Hinawela Miniththuwak', 'Comedy', 'he latest play directed by Akhila Sapumal bagged no less than seven awards at the National Youth Awards ceremony, including Best Script, ...', 0x68696e6177656c61206d696e69746874687577616b2e6a706567, NULL, '2024-02-18 21:52:09', 0),
(48, 'Kaleni Palama', 'Melodrama', '\'Kelani Palama\' -- a play about the plight of poor keera kotu settlers who face the threat of floods -- still strikes a chord among today\'s audiences as it did 40 years ago when it first hit the stage.', 0x6b616c616e692070616c616d612e6a7067, NULL, '2024-02-18 21:57:52', 0),
(49, 'Balloth Ekka Ba', 'Comedy', 'When a dog bites a man, there is no story to tell, but when a man bites a dog that story is worth telling. That was my sentiment after seeing the Sri Lankan play—Balloth Ekka Bae—in Staten Island, New York.\r\n\r\nI saw something that I have never seen before. All of us have either seen or heard the stories about sleazy, venal politicians; impudent, presumptuous secretaries;   and impotent government officials; how the creator of this play chose to tell the story of our present Sri Lankan society, using a politician, his secretary, a government official, a prostitute, two Buddhist monks, and a make-up artist impressed me.', 0x62616c6c6f746820656b6b612062612e6a7067, NULL, '2024-02-18 22:05:33', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
