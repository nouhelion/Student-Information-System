-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 26, 2021 at 10:06 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ada`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `login` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`login`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `filieres`
--

DROP TABLE IF EXISTS `filieres`;
CREATE TABLE IF NOT EXISTS `filieres` (
  `nom` varchar(40) NOT NULL,
  `nbr` int(11) NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `filieres`
--

INSERT INTO `filieres` (`nom`, `nbr`) VALUES
('Aéronautique et astronautique', 3),
('Génie Biologique', 3),
('Ingénieur Chimiste', 2),
('Génie Civil et Environnemental', 4),
('Données, Systèmes et Société', 7),
('Génie Électrique et Informatique', 5),
('Science et Génie des Matériaux', 11),
('Génie Mécanique', 4),
('Génie Médical et Science', 4),
('Science et Génie Nucléaires', 3),
('Arts et Sciences Médiatiques', 1),
('Etudes et Planification Urbaines', 1),
('Management', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

DROP TABLE IF EXISTS `questionnaire`;
CREATE TABLE IF NOT EXISTS `questionnaire` (
  `comment` varchar(40) NOT NULL,
  `nbr` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `questionnaire`
--

INSERT INTO `questionnaire` (`comment`, `nbr`) VALUES
('Journaux', 1),
('Internet', 0),
('Forum', 0),
('Famille,Amis,..', 1),
('Visite de ADA-IT', 0),
('Journées Portes Ouvertes', 0),
('Événement Parascolaire', 1);

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

DROP TABLE IF EXISTS `series`;
CREATE TABLE IF NOT EXISTS `series` (
  `nom` varchar(50) NOT NULL,
  `nbr` int(11) NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`nom`, `nbr`) VALUES
('Sciences de la Vie et de la Terre', 11),
('Sciences Physiques et Chimiques', 14),
('Sciences Maths A', 9),
('Sciences Maths B', 8),
('Sciences Economiques', 2),
('Techniques de Gestion et de Comptabilité', 2),
('Sciences et Technologies Electriques', 2),
('Sciences et Technologies Mécaniques', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `nom_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sexe_user` varchar(2) NOT NULL,
  `mail_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adresse_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tel_user` int(30) NOT NULL,
  `login_user` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password_user` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cin_user` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `filiere` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `serie_bacc` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ville` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`login_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`nom_user`, `sexe_user`, `mail_user`, `adresse_user`, `tel_user`, `login_user`, `password_user`, `cin_user`, `filiere`, `serie_bacc`, `ville`) VALUES
('Nirmine Kamelia', 'F', 'NirmineKamel@gmail.com', 'rue Mohamed Diouri, resid. Mawlid V 3°et. n°37', 616265485, 'Nir_Ka', 'Nirmine12', 'AD24475', 'Aéronautique et astronautique', 'Sciences Physiques et Chimiques', 'Rabat-Salé-Kénitra'),
('Zakia Bazzar', 'F', 'ZakiaBazzar@gmail.com', '6, rue de Salonique', 610354748, 'Zak_Baz', 'Zakia12', 'ER4567', 'Aéronautique et astronautique', 'Sciences de la Vie et de la Terre', 'Tanger – Tétouan – Al Hoceima'),
('Reda Ichchou', 'M', 'RedaIchchou@gmail.com', ' bd Hassan II, 85000', 658971238, 'Reda_Ich', 'Reda12', 'aaa44', 'Génie Civil et Environnemental', 'Techniques de Gestion et de Comptabilité', 'Rabat-Salé-Kénitra'),
('Soufiane Moussa', 'M', 'SoufianeMoussa@gmail.com', 'bd. Chouhada, place Heintz', 655216689, 'Souf_Mous', 'Soufiane12', 'huy5', 'Génie Civil et Environnemental', 'Sciences Maths B', 'Souss-Massa'),
('Aya Rhounia', 'F', 'AyaRhounia@gmail.com', '365, route d\' El jadida', 658971238, 'Aya_Rho', 'Aya12', 'dhh45', 'Génie Électrique et Informatique', 'Sciences et Technologies Electriques', 'Guelmim-Oued Noun'),
('Abdelilah Merdi', 'M', 'AbdelilahMerdi@gmail.com', 'rue Ibn Katir, resid. Mawlid imm. C rdc n°8', 652166895, 'Abdel_merd', 'Abdelilah12', 'huu56', 'Génie Médical et Science', 'Sciences Maths A', 'Rabat-Salé-Kénitra'),
('Hatima  Soulaimani', 'F', 'Haitimasoulaimani@gmail.com', 'avenue Al Moukaouama - ex Résistance, Ocean', 623243788, 'Hait_soul', 'Haitima12', 'AD244', 'Science et Génie des Matériaux', 'Sciences et Technologies Electriques', 'Drâa-Tafilalet'),
('Imane Lehdioui ', 'F', 'ImaneLehdioui@gmail.com', 'rue Moulay Ismail, 2°et. bloc 9 ancien souk, Tadla-Azilal', 623243788, 'Ima_Leh', 'Imane12', 'AD244', 'Arts et Sciences Médiatiques', 'Sciences Physiques et Chimiques', 'Guelmim-Oued Noun'),
('Hanine Bazzou', 'M', 'HanineBazzou@gmail.com', '303, avenue Oued Daoura, Hadj Fateh', 567891256, 'Han_Bazz', 'Hanine12', 'A777', 'Génie Biologique', 'Sciences Maths A', 'Tanger – Tétouan – Al Hoceima'),
('Ayoub Baina', 'M', 'AyoubBaina@gmail.com', '160, avenue de Nice', 623243788, 'Ayo_Bai', 'Ayoub12', 'AD244', 'Science et Génie Nucléaires', 'Sciences Physiques et Chimiques', 'Guelmim-Oued Noun'),
('Hajar Salimi', 'F', 'HajarSalimi@gmail.com', '92, zone industrielle, Sidi Brahim II', 567891256, 'Haj_Sal', 'Hajar12', 'add88', 'Données, Systèmes et Société', 'Sciences Physiques et Chimiques', 'Rabat-Salé-Kénitra'),
('Israe Behri', 'F', 'IsraeBehri@gmail.com', 'place Zellaqa, Tour Atlas, Grand Casablanca', 567891278, 'Isr_Beh', 'Israe12', 'q45g', 'Génie Électrique et Informatique', 'Sciences Maths A', 'Drâa-Tafilalet'),
('Safae Belkra', 'F', 'SafaeBelkra@gmail.com', ' Hay Ryad, city centre Riad, av. Almelia', 567891256, 'Saf_Bel', 'Safae12', 'AD244', 'Génie Mécanique', 'Sciences Physiques et Chimiques', 'Tanger – Tétouan – Al Hoceima'),
('Janat Ben Youssef', 'F', 'JanatBenYoussef@gmail.com', 'hay Moulay Abdallah (Ain Chok), rue 89 n°100 bd. T', 623243788, 'Jan_Ben', 'Janat12', 'AD244', 'Science et Génie Nucléaires', 'Sciences de la Vie et de la Terre', 'Marrakech-Safi'),
('Adam Chnioui', 'M', 'AdamChnioui@gmailcom', 'rue Dimachk (Damas) ang. Al Kahira, 10000', 567891256, 'Ad_Chn', 'Adam12', 'AD244', 'Génie Médical et Science', 'Sciences Maths B', 'Drâa-Tafilalet'),
('Israe Azza ', 'F', 'IsraeAzza@gmail.com', '14, Av. Moulay Abdallah', 623243788, 'Is_Az', 'Israe12', 'A777', 'Données, Systèmes et Société', 'Sciences Maths A', 'Marrakech-Safi'),
('Ghizlane Diouk', 'F', 'GhizlaneDiouk@gmail.com', '10, rue Oulad Bouzid - ex Bartholdi', 623243788, 'Ghiz_Dio', 'Ghizlane12', 'AD244', 'Science et Génie des Matériaux', 'Sciences Physiques et Chimiques', 'Guelmim-Oued Noun'),
('Raouia Gherbaoui', 'F', 'RaouiaGherbaoui@gmail.com', '102, route de Safi, q.i. Sidi Ghanem', 623243788, 'Rao_Gher', 'Raouia12', 'AD244', 'Science et Génie des Matériaux', 'Techniques de Gestion et de Comptabilité', 'Souss-Massa'),
('Khadija El Mlih', 'F', 'KhadijaElMlih@gmail.com', '16 Bis, bd Hassan II, rue Ibn Rochd', 567891256, 'Khad_ElM', 'Khadija12', 'AD244', 'Science et Génie des Matériaux', 'Sciences de la Vie et de la Terre', 'Oriental'),
('Nada Hamraoui', 'F', 'NadaHamraoui@gmail.com', 'quartier Beausite, 20250 Quartier: Aïn Sebaâ', 623243788, 'Nad_Ham', 'Nada12', 'AD244', 'Génie Médical et Science', 'Sciences de la Vie et de la Terre', 'Souss-Massa'),
('Amal Marouane', 'F', 'AmalMarouane@gmail.com', '112, avenue du Deux Mars', 623243788, 'Ama_Mar', 'Amal12', 'AD244', 'Science et Génie des Matériaux', 'Sciences Maths A', 'Tanger – Tétouan – Al Hoceima'),
('Aya Moujahid', 'F', 'AyaMoujahid@gmail.com', 'hay Katafa (Sidi Bernoussi), rue 5 n°41', 567891256, 'Ay_Mouj', 'Aya12', 'A777', 'Génie Électrique et Informatique', 'Sciences de la Vie et de la Terre', 'Tanger – Tétouan – Al Hoceima'),
('Chaimae El karine', 'F', 'ChaimaeElkarine@gmail.com', '8, rue du Parthénon, q. des Hôpitaux', 623243788, 'Chai_Elkar', 'Chaimae12', 'AD244', 'Données, Systèmes et Société', 'Sciences de la Vie et de la Terre', 'Souss-Massa'),
('Anis Saoudi', 'F', 'AnisSaoudi@gmail.com', 'Derb Chabab A n°152 ElAlia, 20800', 623243788, 'Ani_Sao', 'Anis12', 'AD244', 'Génie Mécanique', 'Sciences de la Vie et de la Terre', 'Rabat-Salé-Kénitra'),
('Mouad Boudrae', 'M', 'Etu_KAMEL.Nouhaila@e', 'Bd. ElFatouaki, 2°et., L\'Oriental', 567891256, 'Mou_Bou', 'Mouad12', 'add88', 'Génie Civil et Environnemental', 'Sciences Economiques', 'Drâa-Tafilalet'),
('Mohammed Naghmouch', 'M', 'MohammedNaghmouch@gmail.com', '74, avenue Mohamed Bouziane, hay Mly Rachid', 623243788, 'Moha_Nagh', 'Mohammed12', 'add88', 'Données, Systèmes et Société', 'Sciences Maths A', 'Marrakech-Safi'),
('Ikram Okroum', 'F', 'IkramOkroum@gmail.com', 'rue de Monastir Hay Boujdour., 20550 Quartier: Nouvelle Médina', 616912087, 'Ikr_Okr', 'Ikram12', 'A777', 'Science et Génie des Matériaux', 'Sciences Maths A', 'Drâa-Tafilalet'),
('Maroua Houdana', 'F', 'MarouaHoudana@gmail.com', '34, rue Ahmed Joumari -ex Auvergne', 623243788, 'Mar_Hou', 'Maroua12', 'A777', 'Science et Génie des Matériaux', 'Sciences Physiques et Chimiques', 'Marrakech-Safi'),
('Yaya Mouad', 'F', 'YayaMouad@gmail.com', '265, bd. Mohamed V', 623243788, 'Ya_Mou', 'Yaya12', 'A777', 'Science et Génie des Matériaux', 'Sciences Maths A', 'Marrakech-Safi'),
('Anouar El Majoudi', 'M', 'AnouarElMajoudi@gmail.com', '1455, bd Mohammed VI, Jamila I', 623243788, 'An_ElMaj', 'Anouar12', 'AD244', 'Science et Génie des Matériaux', 'Sciences de la Vie et de la Terre', 'Fès - Meknès'),
('Fatim Zahra Housini', 'F', 'FatimZahraHousini@gmail.com', '21, av. Goundafa (qu. Youssoufia ouest), secteur est', 610354748, 'FatiZ_Hou', 'FatimZahra12', 'A777', 'Données, Systèmes et Société', 'Sciences Maths B', 'Rabat-Salé-Kénitra'),
('Wissal Ben Amchich', 'F', 'WissalBenAmchich@gmail.com', 'rue El Fourat-ex Roncevaux (Maarif), 4°et. n°4', 567891256, 'Wis_Am', 'Wissal12', 'AD244', 'Science et Génie des Matériaux', 'Sciences Maths B', 'Béni Mellal-Khénifra'),
('Rania Al Fadli', 'F', 'RaniaAlFadli@gmail.com', '10, rue Aregane -ex Soulac (Casa Elfida), kiss. Chamal', 567891256, 'Ran_Fad', 'Rania12', 'add88', 'Génie Électrique et Informatique', 'Sciences Maths B', 'Béni Mellal-Khénifra'),
('Ahmed Zin Din', 'M', 'AhmedZinDin@gmail.com', '9.rue Mly Abdeslam, 93000', 623243788, 'Ahm_Din', 'Ahmed12', 'trf489', 'Aéronautique et astronautique', 'Sciences Maths B', 'Béni Mellal-Khénifra'),
('Malak Hasbani', 'F', 'MalakHasbani@gmail.com', 'imm. Dhl, Sidi Maârouf, rte Nouasseur', 623243788, 'Mal_Has', 'Malak12', 'AD244', 'Ingénieur Chimiste', 'Sciences Physiques et Chimiques', 'Oriental'),
('Ryad Mohammed Ali', 'M', 'RyadMohammedAli@gmail.com', '53, bd Rahal El Meskini', 623243788, 'Ry_MohA', 'Ryad12', 'AD244', 'Management', 'Sciences Economiques', 'Marrakech-Safi'),
('Ahmed el Amrani', 'M', 'AhmedAmrani@gmail.com', 'Avenue yaacoub el mansour ,Res zohor 4', 720002108, 'Ahmed_ELA', 'Ahmed12', 'RF5677', 'Génie Biologique', 'Sciences Physiques et Chimiques', 'Tanger – Tétouan – Al Hoceima'),
('Asmae Cherkaoui', 'F', 'asmaecherkaoui@gmail.com', 'Avenue hassan 2 villa num 34', 766689900, 'Asmae_cherk', 'Asmae12', 'A67899', 'Génie Médical et Science', 'Sciences Maths A', 'Oriental'),
('Mohammed EL Ktaibi', 'M', 'MohammedKtaibi@gmail.com', 'Avenue Ibn Rochd, Res', 666654402, 'Med_Ktaibi', 'Mohammed12', 'JF5633', 'Science et Génie Nucléaires', 'Sciences Maths B', 'Casablanca-Settat'),
('Rayhana Lahlou', 'F', 'RayhanaLahlou@gmail.com', 'Avenue el mouahidine, villa 45', 655432201, 'Rayhana_Lah', 'Rayhana12', 'GT4566', 'Génie Biologique', 'Sciences de la Vie et de la Terre', 'Laâyoune-Sakia El Hamra'),
('Oussama el kenani', 'M', 'Oussamakenani@gmail.com', '545, boulevard Panoramique, Californie, casablanca', 709882344, 'Oussama_ken', 'Oussama12', 'R6788', 'Science et Génie des Matériaux', 'Sciences Physiques et Chimiques', 'Dakhla-Oued Ed Dahab'),
('Aya el Ouali', 'F', 'ayaelouali@gmail.com', 'Rue el makhazin , villa 11', 789345560, 'Aya_ouali', 'Aya12', 'RT556', 'Données, Systèmes et Société', 'Sciences Physiques et Chimiques', 'Tanger – Tétouan – Al Hoceima'),
('Karim ahmadi', 'M', 'Karimahmadi@gmail.com', 'Rue el yacout, villa 55', 647483647, 'Karim_ahm', 'Karim12', 'DF66799', 'Génie Électrique et Informatique', 'Sciences Physiques et Chimiques', 'Rabat-Salé-Kénitra'),
('Houda filali', 'F', 'Houdafilali@gmail.com', 'Rue el mouahidin, villa12', 747483647, 'Houda_fil', 'Houda12', 'D858711', 'Etudes et Planification Urbaines', 'Sciences Physiques et Chimiques', 'Drâa-Tafilalet'),
('Nouhaila chamsi', 'F', 'Nouhailachamsi@gmail.com', 'Rue el koutoubia, villa 66', 665439870, 'Nouhaila_cham', 'Nouhaila12', 'AT6678', 'Ingénieur Chimiste', 'Sciences de la Vie et de la Terre', 'Drâa-Tafilalet'),
('Amine layi', 'M', 'aminelayi@gmail.com', 'Avenue med5, villa 55', 655890124, 'Amine_la', 'Amine12', 'RJ8879', 'Génie Civil et Environnemental', 'Sciences de la Vie et de la Terre', 'Marrakech-Safi'),
('Asmae moueden', 'F', 'asmaemoueden@hmail.com', 'Avenue ibn khaldoun, villa 12', 661667834, 'Asmae_Mou', 'Asmae12', 'YU988', 'Données, Systèmes et Société', 'Sciences Physiques et Chimiques', 'Guelmim-Oued Noun'),
('Ayoub fathi', 'M', 'ayoubfathi@gmail.com', 'Avenue elkoumariyin, villa 31', 743668012, 'Ayoub_fat', 'Ayoub12', 'HJ9899', 'Génie Mécanique', 'Sciences Maths B', 'Souss-Massa'),
('Anbar Sadrati', 'F', 'AnbarSadrati@gmail.com', '29, q.i. Bensouda', 618871373, 'An_Sadr', 'Anbar12', 'QWE588', 'Génie Mécanique', 'Sciences et Technologies Mécaniques', 'Dakhla-Oued Ed Dahab');

-- --------------------------------------------------------

--
-- Table structure for table `villes`
--

DROP TABLE IF EXISTS `villes`;
CREATE TABLE IF NOT EXISTS `villes` (
  `nom` varchar(50) NOT NULL,
  `nbr` int(11) NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `villes`
--

INSERT INTO `villes` (`nom`, `nbr`) VALUES
('Tanger – Tétouan – Al Hoceima', 7),
('Oriental', 3),
('Fès - Meknès', 1),
('Rabat-Salé-Kénitra', 7),
('Béni Mellal-Khénifra', 3),
('Casablanca-Settat', 1),
('Marrakech-Safi', 7),
('Drâa-Tafilalet', 7),
('Souss-Massa', 5),
('Guelmim-Oued Noun', 5),
('Laâyoune-Sakia El Hamra', 1),
('Dakhla-Oued Ed Dahab', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
