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
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(11) NOT NULL,
  `title` varchar(244) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `title`, `description`, `image`) VALUES
(11, 'MANAME', 'A drama by the celebrated dramatist, Prof Ediriweera Sarachchandra, that utilises the traditions of nadagama (a type of rural folk theatre in Sri Lanka). Maname is a combination of theatrical craft, poetic sophistication and drama in which the elements in the folk theatre tradition have been adapted to modern stage. Maname features popular artistes like Sanath Wimalasiri, Namal Weerabahu, Janaka Munasinghe, Rajitha Hewathanthrige, Kasun Jayakody, Tharanga Kumari, Lakshani Amarathunga, Ganga Paranavithana, Hiran Nisha de Costa, Chaminda Mirihagalla and Upamali Ranathunga.', 'i2.jpg'),
(12, 'NARI BANA', 'Dayananda Gunawardena’s two popular dramas ‘Nari Bana’ and ‘Jasaya Saha Lenchin’ will be staged at the Borella Namel Malini Punchi Theatre.\n\nWith popular artist in the cast include Bandula Wijeweera, Rodny Warnakula, Sarath Kulanga, Tharanga Kumari, Rathnasheela Perera, Sunil Thilakarathne, Nilmini Kottegoda, Jayanath Bandara and Indika Jayasinghe. With Pubudu Walpita’s music, this drama is organised by Jude Shrimal and tickets are available at Namel Malani Punchi Theater Borella. All seats have been Box planed.\n\n', 'i3.jpg'),
(13, 'MANO', 'Directed by Gayan Kanishka Rajapaksha, MANO is a comical drama featuring Jagath Chamila, Jagath Manuwarana, Sarath Karunarathne, Thilanka Gamage. This drama is a combination of theatrical craft, poetic sophistication and drama in which the elements in the folk theatre tradition have been adapted to modern stage. This Drama features popular artistes like Sanath Wimalasiri, Namal Weerabahu, Janaka Munasinghe, Rajitha Hewathanthrige, Kasun Jayakody, Tharanga Kumari, Lakshani Amarathunga, Ganga Paranavithana, Hiran Nisha de Costa, Chaminda Mirihagalla and Upamali Ranathunga.', 'i4.jpg'),
(14, 'KAPUWA KAPOTHI', 'An adaptation from ‘The Marriage’, a comedy by Russian writer Nikolai Gogol, Kapuwa Kapothi’s screenplay is by Prof Ediriweera Sarachchandra and E P Gunarathne. It is produced by Lalitha Sarachchandra and the cast consists of Wijaya Nandasiri, Deepani Silva, Sarath Kulathunge, Lalith Rajapakshe, Wasantha Vittachchi, Ariyarathne Kaluarachchi, Kumudu Prashanthi and Kumari.', 'i5.webp'),
(15, 'THARAWO IGILETHI', 'Tharawo Igilethi is a Sinhalese stage drama by Lucien Bulathsinhala, based on the twin brothers story on Singapore Country. This drama is directed and produced by Lucien Bulathsinhala. The play made a comeback after ten years as a new production in 2018. Music is produced by Gunadasa Kapuge. First staged on July 24, 1981 at Lumbini Theatre, Colombo, the play was popular among the Sri Lankan theatre lovers and shows were staged around the country. The first cast included Vijaya Nandasiri are the current actors in this drama.', 'i6.jpg'),
(16, 'ELADIN SAHA PUDUMA PAHANA', 'Aladdin and the lamp of wonder\nAladdin\'s father Mustafa, mother Fatima. Aladdin is the only son of this couple. Twenty years old. However, Aladdin is a gamer. This young man, who does not obey his parents\' words, does not try to take any responsibility at home.\nAladdin, who always hangs out with his friends, sometimes fights with his friends. Also Aladdin had a great trouble for the neighbors. Because they often lose at the hands of Aladdin. Because of this, Aladdin\'s mother and father often had to hear complaints from the neighbors.\nMustafa, who was always worried about his only son, dies suddenly. ', 'i7.jpg'),
(17, 'KOLAM NATAKAYA', 'fdsf', 'i8.jpg'),
(18, 'DEYYOTH DANNE NA', 'sdf sfd', 'i8.jpeg'),
(19, 'JJJJJJJ', 'df  mef jqe qe ', 'i9.jpeg'),
(20, 'RAWANA', 'sdfn sdf ksdf ', 'i10.jpeg'),
(21, 'UUUUUUUUU', 'sdf sd sdj', 'i11.jpg'),
(22, 'NARIBANA', 'ksdf sfg sdf', 'i12.jpg'),
(23, 'BBBBBB ', 'sdn df', 'i13.jpg'),
(25, 'HINAWELA', 'sfn erf frh', 'i15.jpg'),
(26, 'SINHABAHU', 'A drama by the celebrated dramatist, Prof Ediriweera Sarachchandra, that utilises the traditions of nadagama (a type of rural folk theatre in Sri Lanka). Maname is a combination of theatrical craft, poetic sophistication and drama in which the elements in the folk theatre tradition have been adapted to modern stage. Maname features popular artistes like Sanath Wimalasiri, Namal Weerabahu, Janaka Munasinghe, Rajitha Hewathanthrige, Kasun Jayakody, Tharanga Kumari, Lakshani Amarathunga, Ganga Paranavithana, Hiran Nisha de Costa, Chaminda Mirihagalla and Upamali Ranathunga.', 'i1.jpg'),
(33, 'RATHU HATTAKARI', 'kshdf ifshvbdf vdfihbv dfvid fvdfv hd', 'i1.jpg'),
(41, 'RAJA KADUWA', 'kshdf ifshvbdf vdfihbv dfvid fvdfv hd', 'i5.webp'),
(42, 'GALLENA', 'This is a great one', 'i2.jpg'),
(43, 'MIHARAK', 'This is a great one', 'i4.jpg'),
(44, 'ROSAKALE', 'This is a great one', 'i6.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
