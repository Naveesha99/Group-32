-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 06:37 AM
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
(14, 'KAPUWA KAPOTHI', 'An adaptation from ‘The Marriage’, a comedy by Russian writer Nikolai Gogol, Kapuwa Kapothi’s screenplay is by Prof Ediriweera Sarachchandra and E P Gunarathne. It is produced by Lalitha Sarachchandra and the cast consists of Wijaya Nandasiri, Deepani Silva, Sarath Kulathunge, Lalith Rajapakshe, Wasantha Vittachchi, Ariyarathne Kaluarachchi, Kumudu Prashanthi and Kumari.', 'i5.webp'),
(15, 'KELANI PALAMA', 'The riveting stage drama ‘Kelani Palama’ was screened for the first time in Sri Lanka in 1978. Produced and directed by R.R Samarakoon, a veteran in Sri Lankan theatre, this drama tells the story of the underprivileged people who live in shanties under the Kelani Bridge. In rainy seasons the river overflows causing floods which drive the shanty folk on to the bridge, as they have no where else to go. This leads to disputes with the authorities, who are unsympathetic to the woeful cries of these poor people. The plot thickens when a son of one of the shanty folk becomes a police officer and turns against his own people. The story takes many more twists and turns, keeping the audience captivated till the very end.\n\nDirector             R.R.Samarakoon\nProducer           R.R.Samarakoon', 'i23.jpeg'),
(16, 'ELADIN SAHA PUDUMA PAHANA', 'Aladdin and the lamp of wonder\nAladdin\'s father Mustafa, mother Fatima. Aladdin is the only son of this couple. Twenty years old. However, Aladdin is a gamer. This young man, who does not obey his parents\' words, does not try to take any responsibility at home.\nAladdin, who always hangs out with his friends, sometimes fights with his friends. Also Aladdin had a great trouble for the neighbors. Because they often lose at the hands of Aladdin. Because of this, Aladdin\'s mother and father often had to hear complaints from the neighbors.\nMustafa, who was always worried about his only son, dies suddenly. ', 'i7.jpg'),
(17, 'KEMA LASTHI', 'Directed by : Ajith Mendis\n\nSriyantha Mendis, Madini Malwattege, Janaka Kumbukage, Wasantha Wittachchi, Saman Hemarathne, Keerthi K Ratnayake, Pradeep Arugama and Samantha Paranaliyanage playing the main characters. The roles such as music direction, sound manager, set designer and stage managemer behind the screen are played by Sarath Kulanga, Chandana Nishantha Pieris, Luvoline Wandawall and Sameera Hettiarachchi respectively. ', 'i22.jpeg'),
(18, 'DEYYOTH DANNE NA', 'sdf sfd', 'i8.jpeg'),
(20, 'RAWANA', 'sdfn sdf ksdf ', 'i10.jpeg'),
(21, 'PANDORA', 'Written and Directed by: Mihira Sirithilaka\n\nSarath Kothalawela, Mihira Sirithilaka, Chinthaka Peiris', 'i11.jpg'),
(22, 'SUDU SAHA KALU', 'Directed by Sriyantha Mendis\n\nSriyantha Mendis, Kusum Renu, Roshan Pilapitiya, Jayalal Rohana, Wasantha Wittachchi, Nadeeshani Peliarachchi, Mahendra Weerarathna, Rathna D.Nambuge, Prageeth Eraegama, Uditha Gunarathne, Shan Amanda along with many artist will perform in the play while Jagath P. Wijeweera compose the music. ', 'i21.jpeg'),
(25, 'HINAWELA', 'Directed by: Akhila Sapumal\n\nMusic by Lahiru Madivila, Original Script by Akila Sapumal, Ishara Pramuditha Wickramasinghe, Nayomi Thakshila, Chanu Dissanayaka, Thilan Warnajith Wijesingha, Thilanka Gamage\nNational Youth Drama Festival – 2015\nBest Script, Best Actor, Best Actress, Best Supporting Actress, Best Supporting Actor, Best Music,\nBest Direction.', 'i15.jpg'),
(26, 'NARI BANA', 'A drama by the celebrated dramatist, Prof Ediriweera Sarachchandra, that utilises the traditions of nadagama (a type of rural folk theatre in Sri Lanka). Naribana is a combination of theatrical craft, poetic sophistication and drama in which the elements in the folk theatre tradition have been adapted to modern stage. Naribana features popular artistes like Sanath Wimalasiri, Namal Weerabahu, Janaka Munasinghe, Rajitha Hewathanthrige, Kasun Jayakody, Tharanga Kumari, Lakshani Amarathunga, Ganga Paranavithana, Hiran Nisha de Costa, Chaminda Mirihagalla and Upamali Ranathunga.', 'i12.jpg'),
(33, 'RATHU HATTAKARI', 'This popular 80’s play is both written and directed by Lucien Bulathsinghala. The cast includes Niroshan Wijesinghe, Ishara Wickramasinghe, Jayanath Bandara, Gamini Samarakoon, Anura Bandara Rajaguru, Tiran Warnajith, Buddhika Premathilake, Naraka Senaratne, Subuddhi Lakmali, Randima Thilini and more. ', 'i20.jpeg'),
(41, 'KAPUWA KAPOTHI', 'An adaptation from ‘The Marriage’, a comedy by Russian writer Nikolai Gogol, Kapuwa Kapothi’s screenplay is by Prof Ediriweera Sarachchandra and E P Gunarathne. It is produced by Lalitha Sarachchandra and the cast consists of Wijaya Nandasiri, Deepani Silva, Sarath Kulathunge, Lalith Rajapakshe, Wasantha Vittachchi, Ariyarathne Kaluarachchi, Kumudu Prashanthi and Kumari.', 'i19.jpg'),
(42, 'SINHABAHU', 'A drama by the celebrated dramatist, Prof Ediriweera Sarachchandra, that utilises the traditions of nadagama (a type of rural folk theatre in Sri Lanka). Maname is a combination of theatrical craft, poetic sophistication and drama in which the elements in the folk theatre tradition have been adapted to modern stage. Maname features popular artistes like Sanath Wimalasiri, Namal Weerabahu, Janaka Munasinghe, Rajitha Hewathanthrige, Kasun Jayakody, Tharanga Kumari, Lakshani Amarathunga, Ganga Paranavithana, Hiran Nisha de Costa, Chaminda Mirihagalla and Upamali Ranathunga.', 'i1.jpg'),
(43, 'MANO', 'Directed by : Sumith Rathnayake\n\nProduced By: Maduka Madawala\n\nSumith Rathnayake’s new Stage Drama. Staring Saranga disasekara, Sarath Chandrasiri, Nalin Pradeep Udawela, Sumith Rathnayake, Mahesh Uyanwaththa.\n\nKala Suri Kala Keerthi Dr Jayalath Manoratne (71), who departed from our midst last week, was an acting colossus who straddled the worlds of drama, television and film. ', 'i4.jpg'),
(44, 'THARAWO IGILETHI', 'Tharawo Igilethi is a Sinhalese stage drama by Lucien Bulathsinhala, based on the twin brothers story on Singapore Country. This drama is directed and produced by Lucien Bulathsinhala. The play made a comeback after ten years as a new production in 2018. Music is produced by Gunadasa Kapuge. The first cast included Vijaya Nandasiri, Neil Alles, Jayalath Manoratne, Jayasiri Chandrajith, Rodney Warnakula, Anula Bulathsinhala, Padmini Divithurugama and Lucian himself. Harsha Bulathsinhala, Jackson Anthony, Rodney Warnakula, Mercy Edirisinghe, Anula Bulathsinhala are the current actors in this drama.', 'i6.jpg'),
(49, 'RAJA KAPURU', 'Rajakapuru is a very popular stage drama in Sri Lanka. It has been on stage over three decades exceeding 1500 performances. Speciality of this drama is the message it tries to relay is still valid despite its age and majority of original actors are still visible on stage. \n\nDrama is directed by veteran dramatist, Mr Janak Premalal based on Folklore which was first staged in year 1980’s.\n\nRajakapuru is an award-winning popular drama with humour, sarcasm and attractive songs. “Suwada Saban Anga Gala Hai Hai” was a very popular song in Sri Lankan media for over two decades.\n\nOrganised by RIDMA Foundation, Drama went on stage at Swan Park Theatre on 10th of March, 2018. There were around 550 spectators.', 'i16.png'),
(50, 'KOLAMA', 'Kolama features popular artistes like Sanath Wimalasiri, Namal Weerabahu, Janaka Munasinghe, Rajitha Hewathanthrige, Kasun Jayakody, Tharanga Kumari, Lakshani Amarathunga, Ganga Paranavithana, Hiran Nisha de Costa, Chaminda Mirihagalla and Upamali Ranathunga.', 'i8.jpg'),
(51, 'GARU THARU', 'Written and Directed by Mihira Sirithilaka. Maname features popular artistes like Sanath Wimalasiri, Namal Weerabahu, Janaka Munasinghe, Rajitha Hewathanthrige, Kasun Jayakody, Tharanga Kumari, Lakshani Amarathunga, Ganga Paranavithana, Hiran Nisha de Costa, Chaminda Mirihagalla and Upamali Ranathunga.\n\nRodney Warnakula, Ferni Roshini, Ishara Pramuditha Wickramasinghe, Thilan Warnajith Wijesingha, Nayanthara De Silva', 'i13.jpg'),
(52, 'ELADIN SAHA PUDUMA PAHANA', 'Aladdin and the lamp of wonder\nAladdin\'s father Mustafa, mother Fatima. Aladdin is the only son of this couple. Twenty years old. However, Aladdin is a gamer. This young man, who does not obey his parents\' words, does not try to take any responsibility at home.\nAladdin, who always hangs out with his friends, sometimes fights with his friends. Also Aladdin had a great trouble for the neighbors. Because they often lose at the hands of Aladdin. Because of this, Aladdin\'s mother and father often had to hear complaints from the neighbors.\nMustafa, who was always worried about his only son, dies suddenly. ', 'i7.jpg'),
(53, 'MANAME', 'A drama by the celebrated dramatist, Prof Ediriweera Sarachchandra, that utilises the traditions of nadagama (a type of rural folk theatre in Sri Lanka). Maname is a combination of theatrical craft, poetic sophistication and drama in which the elements in the folk theatre tradition have been adapted to modern stage. Maname features popular artistes like Sanath Wimalasiri, Namal Weerabahu, Janaka Munasinghe, Rajitha Hewathanthrige, Kasun Jayakody, Tharanga Kumari, Lakshani Amarathunga, Ganga Paranavithana, Hiran Nisha de Costa, Chaminda Mirihagalla and Upamali Ranathunga.', 'i2.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
