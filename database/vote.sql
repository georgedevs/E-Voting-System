-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2023 at 03:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `party` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `position`, `firstname`, `lastname`, `year_level`, `gender`, `img`, `party`) VALUES
(24, 'Head Prefect', 'AWOBIYI', 'TENIOLA', 'SS2', 'Female', 'upload/AWOBIYI TENIOLA.JPG', ''),
(25, 'Head Prefect', 'DANIEL-JIYA ', 'TEHILLA', 'SS2', 'Male', 'upload/DANIEL-JIYA TEHILLA.JPG', ''),
(26, 'Head Prefect', 'ONYEKWERE ', 'GANETO', 'SS2', 'Female', 'upload/ONYEKWERE GANETO.JPG', ''),
(27, 'Health Prefect', 'AMUCHE', 'DARAORIAKU ', 'SS2', 'Female', 'upload/DARAORIAKU AMUCHE.JPG', ''),
(28, 'Health Prefect', 'OLIVIA', 'UKOH-GODWIN ', 'SS2', 'Female', 'upload/UKOH-GODWIN OLIVIA.JPG', ''),
(30, 'Social Prefect', 'LOUIS', 'ANAZIA', 'SS2', 'Male', 'upload/ANAZIA LOUIS.JPG', ''),
(31, 'Chapel Prefect', 'TIMBYEN', 'FAMWANG ', 'SS2', 'Female', 'upload/FAMWANG TIMBYEN.JPG', ''),
(32, 'Chapel Prefect', 'FUNMIKE', 'OGUNLAJA ', 'SS2', 'Female', 'upload/OGUNLAJA FUNMIKE.JPG', ''),
(33, 'Chapel Prefect', ' ESTHER', 'OGUNLEYE', 'SS2', 'Female', 'upload/OGUNLEYE ESTHER.JPG', ''),
(34, 'Dining Hall Prefect', 'DANIELLA', 'ADEYEMI ', 'SS2', 'Female', 'upload/ADEYEMI DANIELLA.JPG', ''),
(35, 'Sport Prefect', 'GANEFE', 'ONYEKWERE ', 'SS2', 'Female', 'upload/ONYEKWERE GANEFE.JPG', ''),
(36, 'Laboratory Prefect', 'GBEMINIYI', 'ODUSOTE ', 'SS2', 'Male', 'upload/ODUSOTE GBEMINIYI.JPG', ''),
(37, 'Laboratory Prefect', 'ISREAL', 'EKANEM ', 'SS2', 'Male', 'upload/EKANEM ISREAL.JPG', ''),
(38, 'Sport Prefect', ' MIRACLE', 'MANDU', 'SS2', 'Male', 'upload/MANDU MIRACLE.JPG', ''),
(42, 'Labour Prefect', 'SUBOMI', 'AKIN-OLUNLE ', 'SS2', 'Male', 'upload/AKIN-OLUNLE SUBOMI.JPG', ''),
(43, 'Time Keeper', 'TOMISIN', 'OLUWAYEMI ', 'SS1', 'Female', 'upload/OLUWAYEMI TOMISIN.JPG', ''),
(44, 'Time Keeper', 'TUMININU', 'ONADEKO ', 'SS1', 'Female', 'upload/ONADEKO TUMININU.JPG', ''),
(46, 'Time Keeper', 'FEMI', 'ZACCHEAUS ', 'SS1', 'Male', 'upload/ZACCHEAUS FEMI.JPG', ''),
(54, 'Labour Prefect', 'THERESA', 'IGWILO ', 'SS2', 'Female', 'upload/IGWILO THERESA.JPG', ''),
(58, 'Library Prefect', 'FORTUNE', 'ARCHIBALD', 'SS2', 'Female', 'upload/ARCHIBALD FORTUNE.JPG', ''),
(59, 'Library Prefect', 'SHARONGOLD', 'ANTHONY-OLOWONIHI ', 'SS2', 'Female', 'upload/ANTHONY-OLOWONIHI SHARONGOLD.JPG', '');

-- --------------------------------------------------------

--
-- Table structure for table `ids`
--

CREATE TABLE `ids` (
  `id_number` varchar(100) NOT NULL,
  `names` varchar(225) NOT NULL,
  `started` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ids`
--

INSERT INTO `ids` (`id_number`, `names`, `started`) VALUES
('', '', ''),
('1', 'Fadipe Damilola', '09/11/2023'),
('10', 'Oluwaseyi Ileri ', '09/11/2023'),
('100', 'Richard Comfort', '09/11/2023'),
('101', 'Ikeola Ayomide', '09/11/2023'),
('102', 'Eze Tehilla', '09/11/2023'),
('103', 'Ezikiel Olusola', '09/11/2023'),
('104', 'Okereke Micheal', '09/11/2023'),
('105', 'Oladapo Deborah', '09/11/2023'),
('106', 'Iroko Daniel', '09/11/2023'),
('107', 'Abatan Mofopefoluwa', '09/11/2023'),
('108', 'Felix Briella', '09/11/2023'),
('109', 'Adigun Iyanuoluwa', '09/11/2023'),
('11', 'Oluwatunmibi Daniel', '09/11/2023'),
('110', 'Ajelero Iremide', '09/11/2023'),
('111', 'Agbedion Stephen', '09/11/2023'),
('112', 'Amechi Golden', '09/11/2023'),
('113', 'Akindele Iyinoluwa', '09/11/2023'),
('114', 'Joseph Anjola', '09/11/2023'),
('115', 'Olaiya Timileyin', '09/11/2023'),
('116', 'Phillip Michael', '09/11/2023'),
('117', 'Odusote Gbemisayo', '09/11/2023'),
('118', 'Arize Kamsisochukwu', '09/11/2023'),
('119', 'Oyelude Ruth', '09/11/2023'),
('12', 'Oluwayemi Tomiwa', '09/11/2023'),
('120', 'Ogunlana Ibukun', '09/11/2023'),
('121', 'Onigbinde Daniel', '09/11/2023'),
('122', 'Asala Daniel', '09/11/2023'),
('123', 'Ayo-Majaro Adediwura', '09/11/2023'),
('124', 'Okafor Emmanuella', '09/11/2023'),
('125', 'Adigun David', '09/11/2023'),
('126', 'Ugokwe Fortune', '09/11/2023'),
('127', 'Udorie Emmanuel', '09/11/2023'),
('128', 'Idienumah Benedicta', '09/11/2023'),
('129', 'Owolabani Sarah', '09/11/2023'),
('13', 'Omoyemi Dominion ', '09/11/2023'),
('130', 'Alase Bright', '09/11/2023'),
('131', 'Ariyo Ayomide', '09/11/2023'),
('132', 'Chijioke Ifeoma', '09/11/2023'),
('133', 'Dada Demilade', '09/11/2023'),
('134', 'Adekunle Moyinoluwa', '09/11/2023'),
('135', 'Ayodeji Toluwanimi', '09/11/2023'),
('136', 'Babalola David', '09/11/2023'),
('137', 'Obele Gabriella', '09/11/2023'),
('138', 'Ayodeji Oreoluwa', '09/11/2023'),
('139', 'Oladimeji Abraham', '09/11/2023'),
('14', 'Onafowope Mayode ', '09/11/2023'),
('140', 'Chinagorom Chikamso', '09/11/2023'),
('141', 'Odeyemi Morifeoluwa', '09/11/2023'),
('142', 'Amorin Flourish', '09/11/2023'),
('143', 'Ogunnimo Oluwayimika', '09/11/2023'),
('144', 'Bello Oluwadunsin', '09/11/2023'),
('145', 'Onyewueke Angel', '09/11/2023'),
('146', 'Anuge Osose', '09/11/2023'),
('147', 'Daramola Olayinka', '09/11/2023'),
('148', 'Ajayi-Samuel Ewaoluwa', '09/11/2023'),
('149', 'Uti Christine', '09/11/2023'),
('15', 'Onigbide Felix', '09/11/2023'),
('150', 'Adesokan David ', '09/11/2023'),
('151', 'Ayinlaron Oloruntoni', '09/11/2023'),
('152', 'Obi Janel', '09/11/2023'),
('153', 'Abiri Kamila', '09/11/2023'),
('154', 'Akinwande Iyanuoluwa', '09/11/2023'),
('155', 'Oguwalu Victor', '09/11/2023'),
('156', 'Osose Bryran', '09/11/2023'),
('157', 'Oseghale Godswill', '09/11/2023'),
('158', 'Aru Mary', '09/11/2023'),
('159', 'Akinrodoye Afikeola', '09/11/2023'),
('16', 'Popoola Arise ', '09/11/2023'),
('160', 'Yusuf Semilore', '09/11/2023'),
('161', 'Durojaye Feyifoluwa', '09/11/2023'),
('162', 'Williams David', '09/11/2023'),
('163', 'Wusu Obaloluwa', '09/11/2023'),
('164', 'Adelani Ifeoluwa', '09/11/2023'),
('165', 'Daniel-Jiya Ejurah', '09/11/2023'),
('166', 'Dada Eniade', '09/11/2023'),
('167', 'Obidare Moyinoluwa', '09/11/2023'),
('168', 'Adumadeyin Joshua', '09/11/2023'),
('169', 'Olawoyin Ahmad', '09/11/2023'),
('17', 'Sobande Nifemi', '09/11/2023'),
('170', 'Shoriola Irehankan', '09/11/2023'),
('171', 'Atoki Donald', '09/11/2023'),
('172', 'Iyoha Bryan', '09/11/2023'),
('173', 'Akindele Noah', '09/11/2023'),
('174', 'Dara-oriaku David', '09/11/2023'),
('175', 'Israel Ayide Tega', '09/11/2023'),
('176', 'David -Adekule Jermaine', '09/11/2023'),
('177', 'Asaju Jordan', '09/11/2023'),
('178', 'Adeyeye Oreofe', '09/11/2023'),
('179', 'Bello Abiola', '09/11/2023'),
('18', 'Victor Samuel', '09/11/2023'),
('180', 'Sobire Crystal', '09/11/2023'),
('181', 'Ikeola Temidayo', '09/11/2023'),
('182', 'Owoleye Romilayo', '09/11/2023'),
('183', 'Onodipe Mofetoluwa ', '09/11/2023'),
('184', 'Davis Elizabeth', '09/11/2023'),
('185', 'Bello Kelvin', '09/11/2023'),
('186', 'Okonwo  Zinachi', '09/11/2023'),
('187', 'Ilechukwu Nkemdilim', '09/11/2023'),
('188', 'Agbongboheliu Hugo', '09/11/2023'),
('189', 'Dayo-Obatowose  Enioluwafe', '09/11/2023'),
('19', 'Walter-Cosmas Israel ', '09/11/2023'),
('190', 'Ogbara Victoria', '09/11/2023'),
('191', 'Bassey Emmanuel ', '09/11/2023'),
('192', 'Igboeli Tobechukwu', '09/11/2023'),
('193', 'Okonkwo Peace ', '09/11/2023'),
('194', 'Olayiwola Deborah', '09/11/2023'),
('195', 'Osaigbovo Grace ', '09/11/2023'),
('196', 'Ohwojero Isabella', '09/11/2023'),
('197', 'Olugbuyi Emmanuel', '09/11/2023'),
('198', 'Iyangbe David', '09/11/2023'),
('199', 'Odulaja Tofunmi', '09/11/2023'),
('2', 'Durojaye Fope ', '09/11/2023'),
('20', 'Ukoh-Godwin Olivia', '09/11/2023'),
('200', 'Ajala Pamilerin', '09/11/2023'),
('201', 'Ogunmodede Semilore', '09/11/2023'),
('202', 'Olayiwola Mary', '09/11/2023'),
('203', 'Onuzulike Desmond', '09/11/2023'),
('204', 'Imonieroh Gad', '09/11/2023'),
('205', 'Onoh David ', '09/11/2023'),
('206', 'Iroebgu Daniel', '09/11/2023'),
('207', 'Igbinedion Epe', '09/11/2023'),
('208', 'Johnson Mercy', '09/11/2023'),
('209', 'Jeje Jumoke', '09/11/2023'),
('21', 'Olalegan Damola', '09/11/2023'),
('210', 'Ikhimokpa Owena', '09/11/2023'),
('211', 'Oyenuga Timileyin', '09/11/2023'),
('212', 'Abe Priscillia', '09/11/2023'),
('213', 'Walter-Cosmas Joan', '09/11/2023'),
('214', 'Fategbe Fredrick', '09/11/2023'),
('215', 'Aidanemhen Hero', '09/11/2023'),
('216', 'Ayowole Inidapumola', '09/11/2023'),
('217', 'Alli Gbemileke', '09/11/2023'),
('218', 'Ben-Ebelebe Sochi', '09/11/2023'),
('219', 'Hamisu Yusra ', '09/11/2023'),
('22', 'Akinwande Inioluwa', '09/11/2023'),
('220', 'Dauda Esther ', '09/11/2023'),
('221', 'Okon Confidence', '09/11/2023'),
('222', 'Anopueme Bianca', '09/11/2023'),
('223', 'Adeoti Joseph', '09/11/2023'),
('224', 'Christian Best', '09/11/2023'),
('225', 'Oloko Elizabeth', '09/11/2023'),
('226', 'Ibrahim Ariel', '09/11/2023'),
('227', 'Balogun Darasimi', '09/11/2023'),
('228', 'Archibald Breakthrough ', '09/11/2023'),
('229', 'Arize Chikamso', '09/11/2023'),
('23', 'Obi David', '09/11/2023'),
('230', 'Adeosun Damilola', '09/11/2023'),
('231', 'Josiah Temofe', '09/11/2023'),
('232', 'Aina Andrew', '09/11/2023'),
('233', 'Alloysius Cindy', '09/11/2023'),
('234', 'Attah-Ibe-Martha', '09/11/2023'),
('235', 'Efunuga Amen', '09/11/2023'),
('236', 'Chigbo Mercy ', '09/11/2023'),
('237', 'Chikwendu Chimela', '09/11/2023'),
('238', 'Farinu Semilola', '09/11/2023'),
('239', 'Folarori Shola ', '09/11/2023'),
('24', 'Odusote Gbeminiyi', '09/11/2023'),
('240', 'Idenhere Eboseta Zara', '09/11/2023'),
('241', 'Ezeribe KingDavid', '09/11/2023'),
('242', 'Kofon Caleb', '09/11/2023'),
('243', 'Ben-edo Osagie Jewel', '09/11/2023'),
('244', 'Joseph Kishiloreoluwa', '09/11/2023'),
('245', 'Nwofia David', '09/11/2023'),
('246', 'Okojie Samuel', '09/11/2023'),
('247', 'Olayiwola Elizabeth', '09/11/2023'),
('248', 'Olayiwola Samuel', '09/11/2023'),
('249', 'Oyekunle Eyinjuoluwa', '09/11/2023'),
('25', 'Daraoriaku Amuche', '09/11/2023'),
('250', 'Olla Jimi', '09/11/2023'),
('251', 'Shofela Nifemi', '09/11/2023'),
('252', 'Unegbu Victor', '09/11/2023'),
('253', 'Uzomba Clinton', '09/11/2023'),
('254', 'Uzor-Jeff-Chidera', '09/11/2023'),
('255', 'Williams Runo', '09/11/2023'),
('256', 'Yusuf Allim', '09/11/2023'),
('257', 'Adelani Inioluwa', '09/11/2023'),
('258', 'Anazia Hilary', '09/11/2023'),
('259', 'Faluyi Oluwadamilola', '09/11/2023'),
('26', 'Awobiyi Teniolaoluwa', '09/11/2023'),
('260', 'Igwilo Daniella', '09/11/2023'),
('261', 'Ikhimokpa Eliana', '09/11/2023'),
('262', 'Joneb Rhema', '09/11/2023'),
('263', 'Oduala Omowunmi', '09/11/2023'),
('264', 'Obafemi Samuel', '09/11/2023'),
('265', 'Nathan Gracious', '09/11/2023'),
('266', 'Oduyebo Oluwadarasimi', '09/11/2023'),
('267', 'Ogundipe Christopher', '09/11/2023'),
('268', 'Ogunlana Oluwayseyi', '09/11/2023'),
('269', 'Okereke Milan', '09/11/2023'),
('27', 'Onyekwere Ganeto', '09/11/2023'),
('270', 'Onyekweke Diamond', '09/11/2023'),
('271', 'Osaro Emmanuel', '09/11/2023'),
('272', 'Pascal Gold', '09/11/2023'),
('273', 'Senboye Oluwadarasimi', '09/11/2023'),
('274', 'Adebanjo Emmanuel', '09/11/2023'),
('275', 'Adebosoye Victorienne', '09/11/2023'),
('276', 'Ajayi-mercy Darasimi', '09/11/2023'),
('277', 'Ariyo Daniel', '09/11/2023'),
('278', 'Bamidele Toluwalogo', '09/11/2023'),
('279', 'Bello Deborah Inioluwa', '09/11/2023'),
('28', 'Akporigho Emmanuella', '09/11/2023'),
('280', 'Chiwenze Desmond', '09/11/2023'),
('288', 'Dada Olamide', '09/11/2023'),
('289', 'Fadairo Nataniel', '09/11/2023'),
('29', 'Ayanwale Victory', '09/11/2023'),
('290', 'Idienumah Michelle', '09/11/2023'),
('291', 'Kofon Joshua', '09/11/2023'),
('292', 'Akingbade Emmanuel', '09/11/2023'),
('293', 'Nduka Francis', '09/11/2023'),
('294', 'Oladipo Joy', '09/11/2023'),
('295', 'Onafowope Pemiwa', '09/11/2023'),
('296', 'Onigbinde Emmanuel', '09/11/2023'),
('297', 'Osunde David', '09/11/2023'),
('298', ' Philips Temidayo', '09/11/2023'),
('299', 'Adigun Esther', '09/11/2023'),
('3', 'Ayanbadejo Esther', '09/11/2023'),
('30', 'Ogunlaja Oluwafunmike', '09/11/2023'),
('300', 'Aikhure Joshua', '09/11/2023'),
('301', 'Ayilaran Daniel', '09/11/2023'),
('302', 'Amechi Daniella', '09/11/2023'),
('303', 'Bakare Ayosubomi', '09/11/2023'),
('304', 'Biobawu Ayomikun', '09/11/2023'),
('305', 'Chigoziem Marnel', '09/11/2023'),
('306', 'Elekura John Mikel', '09/11/2023'),
('307', 'Fategbe Francis', '09/11/2023'),
('308', 'Hilton David', '09/11/2023'),
('309', 'Hamisu', '09/11/2023'),
('31', 'Famwang Timbyen', '09/11/2023'),
('310', 'ijulusi Demilade ', '09/11/2023'),
('311', 'Lawal Darabimi', '09/11/2023'),
('314', 'Otono Jason', '09/11/2023'),
('315', 'Yusuf Tamilore', '09/11/2023'),
('316', 'Zikora Nwachuckwu', '09/11/2023'),
('317', 'Adeyeye Inioluwa', ''),
('318', 'Aleyomi Jeffrey ', ''),
('319', 'Amao Ayodeji ', ''),
('32', 'Anthony Olowonihi Sharon Gold', '09/11/2023'),
('320', 'Andrew Oluwademilade', ''),
('321', 'Chidi DAVID', ''),
('322', 'Ibi duwmouye Eniola', ''),
('323', 'Ithiel Akindele', ''),
('324', 'Ogundelu Oluwafindara', ''),
('325', 'Okiti Kidochukwu', ''),
('326', 'Olatunji Eniola ', ''),
('327', 'Oluwadunsiun Rapheal', ''),
('328', 'Omokhafe Righteous', ''),
('329', 'Onijingun Toluwani', ''),
('33', 'Ekanem Israel', '09/11/2023'),
('330', 'Osipintan Joseph', ''),
('331', 'Oyatogun Erioluwa', ''),
('332', 'Soremilekun Oluwanifemi', ''),
('333', 'Titus Ayomide', ''),
('334', 'Ukanda Richard', ''),
('335', 'Nwachukwu Chinazaram', ''),
('34', 'Mandu Miracle', '09/11/2023'),
('35', 'Olatunji Oluwadunsin', '09/11/2023'),
('36', 'Adebosye John', '09/11/2023'),
('37', 'Adelani Havilah', '09/11/2023'),
('38', 'Akin-Olule Subomi', '09/11/2023'),
('39', 'Gabari Noel', '09/11/2023'),
('4', 'Hamza Moyin ', '09/11/2023'),
('40', 'Ekanem Dennis Diamond', '09/11/2023'),
('41', 'Igwilo Theresa', '09/11/2023'),
('42', 'Anazia Louis', '09/11/2023'),
('43', 'Omilabu Praise', '09/11/2023'),
('44', 'David Adekunle Jason', '09/11/2023'),
('45', 'Adeyemi Daniella', '09/11/2023'),
('46', 'Afolabi Damilola', '09/11/2023'),
('47', 'Opabiyi Stephen', '09/11/2023'),
('48', 'Daniel-Jiya Tehillah', '09/11/2023'),
('49', 'Chijioke Emmanuel', '09/11/2023'),
('5', 'Imonieroh David ', '09/11/2023'),
('50', 'Ogunleye Esther', '09/11/2023'),
('51', 'Ikuenomore Bernice', '09/11/2023'),
('52', 'Archibald Fortune', '09/11/2023'),
('53', 'Onyekwere Ganefe', '09/11/2023'),
('54', 'Okonkwo Martin', '09/11/2023'),
('55', 'Farinu Adepoju', '09/11/2023'),
('56', 'Oluwatunmibi Enoch', '09/11/2023'),
('57', 'Abiri Zafir', '09/11/2023'),
('58', 'Osunde Roberta', '09/11/2023'),
('59', 'Onadeko Oluwatumininu', '09/11/2023'),
('6', 'Jiya Esther', '09/11/2023'),
('60', 'Asala David', '09/11/2023'),
('61', 'Okolo Divine', '09/11/2023'),
('62', 'Ukoh-Godwin Nathania', '09/11/2023'),
('63', 'Ochefu Anthony', '09/11/2023'),
('64', 'Izebuno Imone', '09/11/2023'),
('65', 'Kayode Timilehin', '09/11/2023'),
('66', 'Oluwayemi Oluwatomisin', '09/11/2023'),
('67', 'Egenmonye Greatness', '09/11/2023'),
('68', 'Adebosoye Imisioluwa', '09/11/2023'),
('69', 'Osaigbovo Deborah', '09/11/2023'),
('7', 'Kolade Toyosi', '09/11/2023'),
('70', 'Abatan Mofiyinfoluwa', '09/11/2023'),
('71', 'Awobiyi Tiyioluwa', '09/11/2023'),
('72', 'Okonti Isaac', '09/11/2023'),
('73', 'Agholor Wisdom', '09/11/2023'),
('74', 'Ibrahim Olivia Olamiposi', '09/11/2023'),
('75', 'Olufemi Richsoul', '09/11/2023'),
('76', 'Mohie Daniel', '09/11/2023'),
('77', 'Anopume Genevieve', '09/11/2023'),
('78', 'Mustafa Fiyinfoluwa', '09/11/2023'),
('79', 'Iruaregbon Dante', '09/11/2023'),
('8', 'Olajide Jenyo', '09/11/2023'),
('80', 'Ogbonna Oluwashida', '09/11/2023'),
('81', 'Ogunruimo Kamukun', '09/11/2023'),
('82', 'Olurunsuyo Fiyin ', '09/11/2023'),
('83', 'Lawal Tobiloba', '09/11/2023'),
('84', 'Zacchaeus Femi', '09/11/2023'),
('85', 'Afieroho orairo', '09/11/2023'),
('86', 'Alabi Elizabeth', '09/11/2023'),
('87', 'Onoh Treasure', '09/11/2023'),
('88', 'Imohbio Samuel', '09/11/2023'),
('89', 'Fawehinmi Erioluwa', '09/11/2023'),
('9', 'Olusola Joshua Temioluwa', '09/11/2023'),
('90', 'Omoyemi King David', '09/11/2023'),
('91', 'Imokha Danesi-Obemeeta', '09/11/2023'),
('92', 'Fadipe Timilehin', '09/11/2023'),
('93', 'Owoyele Demilayo', '09/11/2023'),
('94', 'Sarunmi Damilare', '09/11/2023'),
('95', 'Imonieroh Ephraim ', '09/11/2023'),
('96', 'Alade Irede', '09/11/2023'),
('97', 'Bamidele Tioluwalase', '09/11/2023'),
('98', 'Unegbu Chimamanda', '09/11/2023'),
('99', 'Alamoh Tanitoluwa', '09/11/2023');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `login_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `total_voters`
--

CREATE TABLE `total_voters` (
  `position` varchar(100) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_voters`
--

INSERT INTO `total_voters` (`position`, `total`) VALUES
('Chapel Prefect', 0),
('Dining Hall Prefect', 0),
('Head Prefect', 0),
('Health Prefect', 0),
('Laboratory Prefect', 0),
('Labour Prefect', 0),
('Library Prefect', 0),
('Social Prefect', 0),
('Sport Prefect', 0),
('Time Keeper', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `Phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`, `Phone`, `email`) VALUES
(1, 'admin', 'admin', 'Ukoh-Godwin', 'George', 2147483647, 'ukohgodwingeorge@gmail.com'),
(2, 'admin2', 'admin2', 'My', 'G', 2147483647, 'ukohgodwingeorge@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL DEFAULT 260,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `voters_id` int(11) NOT NULL,
  `id_number` varchar(12) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL DEFAULT 'Inactive',
  `date` date DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`voters_id`, `id_number`, `firstname`, `lastname`, `gender`, `year_level`, `status`, `account`, `date`, `password`) VALUES
(141, '1', 'Fadipe', 'Damilola', 'Male', 'SS3', 'Unvoted', 'Inactive', '2023-11-09', 'dami');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `vote_id` int(255) NOT NULL,
  `candidate_id` varchar(255) DEFAULT NULL,
  `voters_id` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `year_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE election_results (
    result_id INT AUTO_INCREMENT PRIMARY KEY,
    session_term VARCHAR(255) NOT NULL,
    position VARCHAR(255) NOT NULL,
    candidate_id INT NOT NULL,
    candidate_name VARCHAR(255) NOT NULL,
    male_votes INT NOT NULL,
    female_votes INT NOT NULL,
    total_votes INT NOT NULL,
    male_percentage FLOAT NOT NULL,
    female_percentage FLOAT NOT NULL,
    save_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (candidate_id) REFERENCES candidate(candidate_id)
);

--

-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `ids`
--
ALTER TABLE `ids`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `total_voters`
--
ALTER TABLE `total_voters`
  ADD PRIMARY KEY (`position`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`voters_id`),
  ADD UNIQUE KEY `id_number` (`id_number`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`vote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `voters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `vote_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
