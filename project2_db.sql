-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2025 at 07:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `user_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `contribution` text NOT NULL,
  `programm_language` varchar(255) NOT NULL,
  `fav_language` varchar(255) NOT NULL,
  `quotes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`user_id`, `name`, `contribution`, `programm_language`, `fav_language`, `quotes`) VALUES
(1, 'Kenneth Khorin', 'Team leader, Jobs page html and css, Create Database about table, convert all pages to .php', 'Ruby', 'Latin', 'Veni Vidi Vici\r\nTranslation = \"I came; I saw; I conquered\"'),
(2, 'Nuyang Rai', 'About us page html, css, Manage.php, and settings.php', 'Python', 'Dzongkha', 'འབྲུག་གི་འབྲུག་གི་སྒོའི་བསམ་གཏན།\r\nTranslation: The patience of the patient is tested by the patient'),
(3, 'Nahian Bin Saud', 'Apply page html, login and logout .php', 'C++', 'Bengali', 'জীবন সামান্য জিনিষের বৃহৎবন্দন।\r\nTranslation = Life is a great bond of small things'),
(4, 'Ethan Nguyen', 'Main page html, css, process_eoi.php', 'Ruby', 'Vietnamese', 'Ăn cháo đá bát\r\nTranslation: Kicking the bowl after eating all the porridge.');

-- --------------------------------------------------------

--
-- Table structure for table `eoi`
--

CREATE TABLE `eoi` (
  `EOInumber` int(11) NOT NULL,
  `JobReferenceNumber` varchar(6) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` enum('female','male','nonbinary','prefer-not') NOT NULL,
  `StreetAddress` varchar(40) NOT NULL,
  `SuburbTown` varchar(40) NOT NULL,
  `State` enum('VIC','NSW','QLD','NT','WA','SA','TAS','ACT') NOT NULL,
  `Postcode` char(4) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(12) NOT NULL,
  `Skills` text NOT NULL,
  `OtherSkills` text DEFAULT NULL,
  `Status` enum('New','Current','Final') DEFAULT 'New',
  `SubmittedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eoi`
--

INSERT INTO `eoi` (`EOInumber`, `JobReferenceNumber`, `FirstName`, `LastName`, `DOB`, `Gender`, `StreetAddress`, `SuburbTown`, `State`, `Postcode`, `Email`, `PhoneNumber`, `Skills`, `OtherSkills`, `Status`, `SubmittedAt`) VALUES
(1, 'CA202', 'Diesel', 'Williams', '2025-04-29', 'male', 'My street', 'My Suburb', 'VIC', '3142', 'dieselwilliams06@gmail.com', '0436483403', 'html,css,js', 'code. code. code.', 'New', '2025-10-23 02:41:24'),
(2, 'DSE222', 'Misty', 'Larsen', '2001-09-08', 'male', '1577 Miller Points Apt. 245', 'Rosebery', 'NT', '0832', 'wilcoxbrian@gmail.com', '0468462737', 'html,css', 'Python programming', 'New', '2025-10-23 02:41:24'),
(3, 'CSA121', 'Wesley', 'Taylor', '1985-02-01', 'female', '6851 Pearson Isle', 'Bakewell', 'NT', '0832', 'bryanenglish@gmail.com', '0438737089', 'html,js', 'Web development', 'New', '2025-10-23 02:41:24'),
(4, 'CA202', 'Connie', 'Greene', '2004-11-11', 'female', '447 Leon Port', 'Kingston', 'ACT', '7050', 'alex48@gmail.com', '0437534576', 'html,css,js', 'Data analysis', 'New', '2025-10-23 02:41:24'),
(5, 'DSE222', 'Natasha', 'Lopez', '1976-04-22', 'male', '80821 Anthony Creek Suite 187', 'Rosebery', 'NT', '0832', 'paulkaiser@gmail.com', '0413067080', 'html', 'Customer service', 'New', '2025-10-23 02:41:24'),
(6, 'CSA121', 'Andrea', 'Durham', '1989-11-02', 'female', '026 Clark Lock Apt. 403', 'Blackmans Bay', 'TAS', '7052', 'dominiquedavis@gmail.com', '0443756362', 'html,css,js,git', 'Project management', 'New', '2025-10-23 02:41:24'),
(7, 'CA202', 'Cindy', 'Johnson', '1980-10-10', 'female', '7636 Mckenzie Ford', 'Penrith', 'NSW', '2750', 'zhernandez@gmail.com', '0460419858', 'html,css,comm', 'Graphic design', 'New', '2025-10-23 02:41:24'),
(8, 'DSE222', 'Stacy', 'Parker', '2000-09-01', 'male', '87263 Cameron Drive', 'Blackmans Bay', 'TAS', '7052', 'emeza@gmail.com', '0446606801', 'html,js,git', 'Database management', 'New', '2025-10-23 02:41:24'),
(9, 'CSA121', 'Joshua', 'Berry', '1994-01-01', 'female', '93327 Peter Underpass', 'Rosebery', 'NT', '0832', 'austin72@gmail.com', '0426695376', 'html,css,js', 'Technical writing', 'New', '2025-10-23 02:41:24'),
(10, 'CA202', 'Daniel', 'Larson', '1982-05-30', 'female', '307 Wiggins Tunnel', 'Joondalup', 'WA', '6027', 'staceywhitehead@gmail.com', '0457609452', 'html,css,js,git', 'Cybersecurity', 'New', '2025-10-23 02:41:24'),
(11, 'DSE222', 'James', 'Estrada', '1967-07-02', 'male', '1389 Daniel Well Apt. 370', 'New Norfolk', 'TAS', '7140', 'zprice@gmail.com', '0446896826', 'html,js', 'Machine learning', 'New', '2025-10-23 02:41:24'),
(12, 'CSA121', 'Noah', 'Rice', '1996-07-31', 'male', '60960 Pineda Creek', 'St Kilda', 'VIC', '3182', 'stephanie65@gmail.com', '0489052211', 'html,css,git', 'Cloud computing', 'New', '2025-10-23 02:41:24'),
(13, 'CA202', 'Jerry', 'Sutton', '1969-09-01', 'female', '3711 Mendoza Viaduct', 'Cannington', 'WA', '6107', 'smiller@gmail.com', '0487387414', 'html,css,js,git', 'Networking', 'New', '2025-10-23 02:41:24'),
(14, 'DSE222', 'Sheila', 'Gonzalez', '2002-03-17', 'male', '1843 West Isle Suite 327', 'Glenelg', 'SA', '5045', 'vcombs@gmail.com', '0416042579', 'html,js,git', 'Mobile app development', 'New', '2025-10-23 02:41:24'),
(15, 'CSA121', 'Megan', 'Evans', '1988-10-20', 'nonbinary', '531 John Plain', 'Nightcliff', 'NT', '0810', 'kelly65@gmail.com', '0493211533', 'html,css,js', 'UI/UX design', 'New', '2025-10-23 02:41:24'),
(16, 'CA202', 'Jeffery', 'Ramsey', '1986-10-31', 'male', '160 Derek Lane', 'Bakewell', 'NT', '0832', 'barrettsophia@gmail.com', '0414726005', 'html,css,js,git,comm', 'Agile methodologies', 'New', '2025-10-23 02:41:24'),
(17, 'DSE222', 'Joshua', 'Duran', '1990-06-13', 'female', '701 Gutierrez Bypass', 'Rockingham', 'WA', '6168', 'latasha92@gmail.com', '0482653523', 'html,css,comm', 'Social media marketing', 'New', '2025-10-23 02:41:24'),
(18, 'CSA121', 'Chad', 'Mcgee', '1968-06-03', 'female', '1990 Williams Green Suite 192', 'Mawson Lakes', 'SA', '5095', 'richarddean@gmail.com', '0428243205', 'html,css,js', 'Digital illustration', 'New', '2025-10-23 02:41:24'),
(19, 'CA202', 'Nathaniel', 'James', '1990-03-17', 'male', '1394 Gray Parkways', 'Prospect', 'SA', '5082', 'nicholas79@gmail.com', '0461062792', 'html,comm', 'Business analysis', 'New', '2025-10-23 02:41:24'),
(20, 'DSE222', 'Christy', 'Griffin', '1972-08-28', 'male', '7463 Smith Station Apt. 377', 'Blackmans Bay', 'TAS', '7052', 'taylormary@gmail.com', '0465190181', 'html,css', 'Search engine optimization', 'New', '2025-10-23 02:41:24'),
(21, 'CSA121', 'Gina', 'Santos', '1986-06-14', 'male', '104 Tracy Extensions', 'Lutana', 'TAS', '7009', 'ccampbell@gmail.com', '0429770723', 'html,comm', 'Help desk support', 'New', '2025-10-23 02:41:24'),
(22, 'CA202', 'Emma', 'Williams', '1967-03-04', 'male', '22449 Michael Ranch Apt. 094', 'New Norfolk', 'TAS', '7140', 'mcleanmary@gmail.com', '0470062663', 'html,js', 'Python programming', 'New', '2025-10-23 02:41:24'),
(23, 'DSE222', 'Shawn', 'Simpson', '1999-08-04', 'female', '3785 Chambers Land Suite 473', 'New Norfolk', 'TAS', '7140', 'jonathanstanley@gmail.com', '0471698904', 'html,css,js', 'Web development', 'New', '2025-10-23 02:41:24'),
(24, 'CSA121', 'Robert', 'Lee', '1972-12-08', 'female', '0821 Robinson Overpass Suite 822', 'Glenelg', 'SA', '5045', 'reedkara@gmail.com', '0498451126', 'html,js', 'Data analysis', 'New', '2025-10-23 02:41:24'),
(25, 'CA202', 'Sarah', 'Cortez', '1978-12-24', 'male', '97724 Brittney Run Suite 324', 'Hornsby', 'NSW', '2077', 'dproctor@gmail.com', '0410618142', 'html,comm', 'Customer service', 'New', '2025-10-23 02:41:24'),
(26, 'DSE222', 'Heather', 'Howard', '1990-10-03', 'male', '89846 Hunter Drives', 'Redcliffe', 'QLD', '4020', 'thomas54@gmail.com', '0446993571', 'html,css,git,comm', 'Project management', 'New', '2025-10-23 02:41:24'),
(27, 'CSA121', 'James', 'Hood', '2005-02-02', 'male', '736 Charles Square', 'Bakewell', 'NT', '0832', 'amber71@gmail.com', '0429130589', 'html,css', 'Graphic design', 'New', '2025-10-23 02:41:24'),
(28, 'CA202', 'Samantha', 'Short', '1975-10-25', 'female', '433 Medina Junction', 'Cannington', 'WA', '6107', 'nelsonwesley@gmail.com', '0459085868', 'html,js,git', 'Database management', 'New', '2025-10-23 02:41:24'),
(29, 'DSE222', 'Elizabeth', 'Taylor', '1968-02-19', 'female', '989 Margaret Prairie', 'Chermside', 'QLD', '4032', 'margaretjefferson@gmail.com', '0492647388', 'html,css,js,comm', 'Technical writing', 'New', '2025-10-23 02:41:24'),
(30, 'CSA121', 'Lawrence', 'Mcdaniel', '1968-10-09', 'male', '9918 Mary Stream', 'Footscray', 'VIC', '3011', 'hjohnson@gmail.com', '0451864685', 'html,css,js,git', 'Cybersecurity', 'New', '2025-10-23 02:41:24'),
(31, 'CA202', 'Tina', 'Arnold', '1971-01-19', 'male', '539 Perez Circles', 'Redcliffe', 'QLD', '4020', 'wesleysmith@gmail.com', '0453995763', 'html,js', 'Machine learning', 'New', '2025-10-23 02:41:24'),
(32, 'DSE222', 'Betty', 'Lynch', '1990-02-06', 'female', '5690 Fowler Island Suite 087', 'Fortitude Valley', 'QLD', '4006', 'qolsen@gmail.com', '0438735140', 'html,css,js,git', 'Cloud computing', 'New', '2025-10-23 02:41:24'),
(33, 'CSA121', 'Gregory', 'Chen', '1966-12-26', 'male', '852 Jones Plains Suite 255', 'Blacktown', 'NSW', '2148', 'christopherchang@gmail.com', '0476755718', 'html,css,js,git', 'Networking', 'New', '2025-10-23 02:41:24'),
(34, 'CA202', 'Laurie', 'Johnson', '2001-10-21', 'female', '2508 Samantha Wells', 'Chermside', 'QLD', '4032', 'loganteresa@gmail.com', '0418011583', 'html,js', 'Mobile app development', 'New', '2025-10-23 02:41:24'),
(35, 'DSE222', 'Tom', 'Jordan', '2007-03-03', 'male', '2650 Kathryn Extensions Suite 813', 'Blacktown', 'NSW', '2148', 'kenneth67@gmail.com', '0497109142', 'html,css,js', 'UI/UX design', 'New', '2025-10-23 02:41:24'),
(36, 'CSA121', 'Thomas', 'Baldwin', '1979-08-27', 'male', '013 Jones Wells Suite 258', 'Salisbury', 'SA', '5108', 'youngmartha@gmail.com', '0487774119', 'html,css,git,comm', 'Agile methodologies', 'New', '2025-10-23 02:41:24'),
(37, 'CA202', 'Jeffery', 'Hale', '1975-11-14', 'female', '9830 Morrow Ferry Apt. 756', 'Baldivis', 'WA', '6171', 'boothmelissa@gmail.com', '0412370888', 'html,css,comm', 'Social media marketing', 'New', '2025-10-23 02:41:24'),
(38, 'DSE222', 'April', 'Harmon', '1970-04-03', 'female', '79011 Brian Roads Suite 101', 'Watson', 'ACT', '2602', 'johnsonharold@gmail.com', '0488491626', 'html,css,js', 'Digital illustration', 'New', '2025-10-23 02:41:24'),
(39, 'CSA121', 'Rachel', 'Williams', '1979-12-28', 'male', '106 Le Terrace Suite 895', 'Subiaco', 'WA', '6008', 'jimmymooney@gmail.com', '0417353794', 'html,comm', 'Business analysis', 'New', '2025-10-23 02:41:24'),
(40, 'CA202', 'Eric', 'Day', '2005-08-25', 'male', '3157 Sydney Fort Apt. 902', 'Kingston', 'TAS', '7050', 'ellisjohn@gmail.com', '0432620483', 'html,css', 'Search engine optimization', 'New', '2025-10-23 02:41:24'),
(41, 'DSE222', 'Christy', 'Miller', '1980-05-10', 'female', '860 Todd Way Suite 103', 'Liverpool', 'NSW', '2170', 'rjones@gmail.com', '0489822232', 'html,css,js,comm', 'Help desk support', 'New', '2025-10-23 02:41:24'),
(42, 'CSA121', 'Kevin', 'Spencer', '1997-06-23', 'female', '04852 Colleen Road', 'Bakewell', 'NT', '0832', 'zacharyjames@gmail.com', '0483223434', 'html,js', 'Python programming', 'New', '2025-10-23 02:41:24'),
(43, 'CA202', 'Joshua', 'Liu', '2001-09-22', 'female', '4950 Wade Isle', 'Narrabundah', 'ACT', '2604', 'anthony17@gmail.com', '0459546959', 'html,css,js', 'Web development', 'New', '2025-10-23 02:41:24'),
(44, 'DSE222', 'David', 'Powell', '1976-11-30', 'male', '184 Erin Mall Apt. 275', 'Fortitude Valley', 'QLD', '4006', 'smithkelly@gmail.com', '0424435800', 'html,css,js,git', 'Data analysis', 'New', '2025-10-23 02:41:24'),
(45, 'CSA121', 'Cathy', 'Rodriguez', '1968-10-20', 'male', '39970 Jill Dam Apt. 828', 'Penrith', 'NSW', '2750', 'connerbrandon@gmail.com', '0463429197', 'html,comm', 'Customer service', 'New', '2025-10-23 02:41:24'),
(46, 'CA202', 'Ronald', 'Santos', '1993-11-18', 'male', '9708 Rodriguez Land Suite 736', 'Narrabundah', 'ACT', '2604', 'angelamitchell@gmail.com', '0417097657', 'html,css,git,comm', 'Project management', 'New', '2025-10-23 02:41:24'),
(47, 'DSE222', 'James', 'Fuentes', '1999-04-09', 'female', '460 Shawn Lock', 'Bakewell', 'NT', '0832', 'patrickpruitt@gmail.com', '0451874493', 'html,css', 'Graphic design', 'New', '2025-10-23 02:41:24'),
(48, 'CSA121', 'Frank', 'Ramirez', '1968-03-29', 'female', '864 Allison Unions Apt. 759', 'Norwood', 'SA', '5067', 'urhodes@gmail.com', '0465225756', 'html,js,git', 'Database management', 'New', '2025-10-23 02:41:24'),
(49, 'CA202', 'Matthew', 'Bartlett', '2004-08-16', 'female', '47303 Hardy Motorway', 'Carlton', 'VIC', '3053', 'esantiago@gmail.com', '0460082528', 'html,css,js,comm', 'Technical writing', 'New', '2025-10-23 02:41:24'),
(50, 'DSE222', 'Melissa', 'Ramirez', '1977-07-23', 'male', '4919 Makayla Hills', 'Narrabundah', 'ACT', '2604', 'dawn21@gmail.com', '0459263154', 'html,css,js,git', 'Cybersecurity', 'New', '2025-10-23 02:41:24'),
(51, 'CSA121', 'Thomas', 'Ward', '2006-06-23', 'male', '244 Taylor Well', 'Sunnybank', 'QLD', '4109', 'beltranchelsea@gmail.com', '0483957834', 'html,js', 'Machine learning', 'New', '2025-10-23 02:41:24'),
(52, 'CA202', 'Michael', 'Roberts', '1978-12-05', 'male', '4760 Allen Rue Suite 622', 'Rosebery', 'NT', '0832', 'carlosjuarez@gmail.com', '0456474739', 'html,css,js,git', 'Cloud computing', 'New', '2025-10-23 02:41:24'),
(53, 'DSE222', 'Michael', 'Scott', '1980-06-28', 'female', '465 Heather Springs Apt. 229', 'Glenelg', 'SA', '5045', 'robertwilliams@gmail.com', '0493840662', 'html,css,js,git', 'Networking', 'New', '2025-10-23 02:41:24'),
(54, 'CSA121', 'Ronald', 'Phillips', '1993-05-12', 'female', '917 Andrew Meadow', 'Bakewell', 'NT', '0832', 'rwalker@gmail.com', '0446576614', 'html,js', 'Mobile app development', 'New', '2025-10-23 02:41:24'),
(55, 'CA202', 'Courtney', 'Mcdowell', '1983-10-06', 'female', '014 Smith Springs', 'Carlton', 'VIC', '3053', 'andrewjones@gmail.com', '0430585716', 'html,css,js', 'UI/UX design', 'New', '2025-10-23 02:41:24'),
(56, 'DSE222', 'Emily', 'Russell', '2001-05-31', 'nonbinary', '0297 Murphy Lodge', 'Toowong', 'QLD', '4066', 'andersoncrystal@gmail.com', '0479061807', 'html,css,git,comm', 'Agile methodologies', 'New', '2025-10-23 02:41:24'),
(57, 'CSA121', 'Rodney', 'Wong', '1966-12-05', 'male', '044 Alexander Brook', 'Rosebery', 'NT', '0832', 'matthew51@gmail.com', '0430833649', 'html,css,comm', 'Social media marketing', 'New', '2025-10-23 02:41:24'),
(58, 'CA202', 'David', 'Bruce', '1967-01-24', 'male', '621 Castro Isle Apt. 307', 'Kingston', 'ACT', '7050', 'roy53@gmail.com', '0484243317', 'html,css,js', 'Digital illustration', 'New', '2025-10-23 02:41:24'),
(59, 'DSE222', 'Robyn', 'Henderson', '1997-02-22', 'nonbinary', '683 Mark Cape Apt. 136', 'Hornsby', 'NSW', '2077', 'agarcia@gmail.com', '0421158449', 'html,comm', 'Business analysis', 'New', '2025-10-23 02:41:24'),
(60, 'CSA121', 'Tracy', 'Pittman', '1995-06-17', 'male', '026 Alvarado Springs Suite 712', 'Chermside', 'QLD', '4032', 'joseph90@gmail.com', '0491484355', 'html,css,js,git', 'Search engine optimization', 'New', '2025-10-23 02:41:24'),
(61, 'CA202', 'Jacqueline', 'Cook', '1968-06-14', 'male', '10710 Collier Pass Suite 072', 'Coconut Grove', 'NT', '0810', 'emmamiller@gmail.com', '0432665211', 'html,css,js,comm', 'Help desk support', 'New', '2025-10-23 02:41:24'),
(62, 'DSE222', 'David', 'Eaton', '1994-10-31', 'male', '931 Murray Spurs', 'Dandenong', 'VIC', '3175', 'karen26@gmail.com', '0486037250', 'html,js', 'Python programming', 'New', '2025-10-23 02:41:24'),
(63, 'CSA121', 'Louis', 'Chandler', '1972-06-12', 'male', '6313 Vaughn Fort Suite 310', 'Liverpool', 'NSW', '2170', 'heatherdeleon@gmail.com', '0430801989', 'html,css,js', 'Web development', 'New', '2025-10-23 02:41:24'),
(64, 'CA202', 'Michael', 'Roman', '1990-02-09', 'male', '07171 Kevin Crossing', 'Joondalup', 'WA', '6027', 'kevin83@gmail.com', '0459068289', 'html,js', 'Data analysis', 'New', '2025-10-23 02:41:24'),
(65, 'DSE222', 'Timothy', 'Williams', '2003-03-20', 'female', '856 Amber Mills', 'Footscray', 'VIC', '3011', 'michaellee@gmail.com', '0458909202', 'html,comm', 'Customer service', 'New', '2025-10-23 02:41:24'),
(66, 'CSA121', 'Susan', 'White', '2003-05-04', 'male', '30101 Daniel Heights Suite 491', 'Prospect', 'SA', '5082', 'cvaldez@gmail.com', '0429825423', 'html,css,git,comm', 'Project management', 'New', '2025-10-23 02:41:24'),
(67, 'CA202', 'Joshua', 'Thomas', '1967-01-03', 'female', '499 Brown Ville Suite 062', 'Lutana', 'TAS', '7009', 'jason37@gmail.com', '0439611495', 'html,css', 'Graphic design', 'New', '2025-10-23 02:41:24'),
(68, 'DSE222', 'Dustin', 'Thompson', '1990-12-03', 'female', '70320 Santos Plains Apt. 104', 'Prospect', 'SA', '5082', 'trevinocynthia@gmail.com', '0472962969', 'html,js,git', 'Database management', 'New', '2025-10-23 02:41:24'),
(69, 'CSA121', 'Jason', 'Pineda', '1996-03-31', 'male', '642 Raymond Extensions Apt. 638', 'Cannington', 'WA', '6107', 'davisjody@gmail.com', '0431627042', 'html,css,js,comm', 'Technical writing', 'New', '2025-10-23 02:41:24'),
(70, 'CA202', 'Brandon', 'Miller', '1984-05-21', 'female', '313 Michael Lake Apt. 640', 'Moonah', 'TAS', '7009', 'ryanbishop@gmail.com', '0435605659', 'html,css,js,git', 'Cybersecurity', 'New', '2025-10-23 02:41:24'),
(71, 'DSE222', 'Darrell', 'King', '1987-05-03', 'male', '1561 Rush Hollow Suite 782', 'Nightcliff', 'NT', '0810', 'justinwhite@gmail.com', '0410493935', 'html,js', 'Machine learning', 'New', '2025-10-23 02:41:24'),
(72, 'CSA121', 'Jennifer', 'Gay', '1996-02-23', 'male', '8162 Harmon Road Suite 951', 'Lyneham', 'ACT', '2602', 'smiller@gmail.com', '0493746418', 'html,css,js,git', 'Cloud computing', 'New', '2025-10-23 02:41:24'),
(73, 'CA202', 'Kenneth', 'Zuniga', '1964-07-21', 'male', '33229 Sarah Landing', 'Hornsby', 'NSW', '2077', 'robert55@gmail.com', '0430172140', 'html,css,js,git', 'Networking', 'New', '2025-10-23 02:41:24'),
(74, 'DSE222', 'Kurt', 'Cobb', '2005-05-21', 'male', '1190 Murphy Plains', 'Baldivis', 'WA', '6171', 'bentonshaun@gmail.com', '0443059107', 'html,js', 'Mobile app development', 'New', '2025-10-23 02:41:24'),
(75, 'CSA121', 'Caroline', 'Sanders', '1989-05-07', 'female', '8316 Katherine Via', 'St Kilda', 'VIC', '3182', 'mitchellbrown@gmail.com', '0474826341', 'html,css,js', 'UI/UX design', 'New', '2025-10-23 02:41:24'),
(76, 'CA202', 'Nancy', 'Adams', '1997-09-26', 'male', '27145 Jackson Run', 'Norwood', 'SA', '5067', 'michaelturner@gmail.com', '0471772544', 'html,css,git,comm', 'Agile methodologies', 'New', '2025-10-23 02:41:24'),
(77, 'DSE222', 'James', 'Rodriguez', '1968-11-13', 'nonbinary', '4534 Angelica Views', 'Bakewell', 'NT', '0832', 'harry84@gmail.com', '0448285814', 'html,css,comm', 'Social media marketing', 'New', '2025-10-23 02:41:24'),
(78, 'CSA121', 'Alexis', 'Silva', '1972-01-27', 'male', '1368 Kristen Rapids', 'Norwood', 'SA', '5067', 'hjoseph@gmail.com', '0452243365', 'html,css,js', 'Digital illustration', 'New', '2025-10-23 02:41:24'),
(79, 'CA202', 'Katie', 'Bates', '1998-09-08', 'male', '797 Diana Station', 'Carlton', 'VIC', '3053', 'weaverkelly@gmail.com', '0499286688', 'html,comm', 'Business analysis', 'New', '2025-10-23 02:41:24'),
(80, 'DSE222', 'Jennifer', 'Gallagher', '1985-07-30', 'male', '689 Brad Coves', 'Moonah', 'TAS', '7009', 'cynthiapeterson@gmail.com', '0421995064', 'html,css,js,git', 'Search engine optimization', 'New', '2025-10-23 02:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` varchar(6) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `reports_to` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `title`, `description`, `reports_to`) VALUES
('CA202', 'Cybersecurity Analyst', 'As a Cybersecurity Analyst at Vangarde, you will be at the forefront of protecting our digital assets. You will monitor networks for security breaches, investigate incidents, and implement security measures to safeguard our systems. Your analytical skills and attention to detail will be crucial in identifying vulnerabilities and ensuring compliance with security policies.', 'Cybersecurity Manager'),
('CSA121', 'Cloud Security Architect', 'As a Cloud Security Architect at Vangarde, you will be responsible for designing and implementing secure cloud architectures that protect our data and applications. You will work closely with cloud engineers, developers, and security teams to ensure that our cloud environments are resilient against threats and compliant with industry standards. Your expertise in cloud security best practices and architecture design will be essential in guiding our cloud strategy.', 'Chief Information Security Officer'),
('DSE222', 'DevSecOps Engineer', 'As a DevSecOps Engineer at Vangarde, you will play a critical role in integrating security practices into our DevOps processes. You will collaborate with development, operations, and security teams to ensure that security is embedded throughout the software development lifecycle. Your expertise in automation, infrastructure as code, and continuous integration/continuous deployment (CI/CD) pipelines will help us deliver secure applications efficiently.', 'Director of Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `preferred_skills`
--

CREATE TABLE `preferred_skills` (
  `job_id` varchar(6) NOT NULL,
  `bp1` text NOT NULL,
  `bp2` text DEFAULT NULL,
  `bp3` text DEFAULT NULL,
  `bp4` text DEFAULT NULL,
  `bp5` text DEFAULT NULL,
  `bp6` text DEFAULT NULL,
  `bp7` text DEFAULT NULL,
  `bp8` text DEFAULT NULL,
  `bp9` text DEFAULT NULL,
  `bp10` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preferred_skills`
--

INSERT INTO `preferred_skills` (`job_id`, `bp1`, `bp2`, `bp3`, `bp4`, `bp5`, `bp6`, `bp7`, `bp8`, `bp9`, `bp10`) VALUES
('CA202', 'Experience with threat intelligence platforms and threat hunting.\r\n', 'Knowledge of incident response and digital forensics.\r\n', 'Familiarity with cloud security (AWS, Azure, or Google Cloud).\r\n', 'Understanding of data privacy regulations (e.g., GDPR, ISO 27001, PCI-DSS).\r\n', 'Experience with security tools like Splunk, Wireshark, or Nessus.\r\n', 'Interest in staying current with emerging threats and attack techniques.\r\n', NULL, NULL, NULL, NULL),
('DSE222', 'Experience with service mesh technologies (Istio, Linkerd).\r\n', 'Knowledge of secrets management tools (HashiCorp Vault, AWS Secrets Manager).\r\n', 'Familiarity with zero-trust security architectures.\r\n', 'Understanding of software composition analysis and dependency scanning.\r\n', 'Experience with API security and web application firewalls.\r\n', 'Contributions to open-source security projects.\r\n', 'Interest in emerging DevSecOps practices and tools.\r\n', NULL, NULL, NULL),
('CSA121', 'Experience with cloud-native security tools (GuardDuty, Security Hub, Defender).\r\n', 'Knowledge of zero-trust architecture principles and implementation.\r\n', 'Familiarity with CSPM and CWPP solutions.\r\n', 'Understanding of serverless security best practices.\r\n', 'Experience with security automation and orchestration (SOAR).\r\n', 'Multi-cloud security experience across AWS, Azure, and GCP.\r\n', 'Interest in emerging cloud security trends and technologies.\r\n', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `required_skills`
--

CREATE TABLE `required_skills` (
  `job_id` varchar(6) NOT NULL,
  `bp1` text NOT NULL,
  `bp2` text DEFAULT NULL,
  `bp3` text DEFAULT NULL,
  `bp4` text DEFAULT NULL,
  `bp5` text DEFAULT NULL,
  `bp6` text DEFAULT NULL,
  `bp7` text DEFAULT NULL,
  `bp8` text DEFAULT NULL,
  `bp9` text DEFAULT NULL,
  `bp10` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `required_skills`
--

INSERT INTO `required_skills` (`job_id`, `bp1`, `bp2`, `bp3`, `bp4`, `bp5`, `bp6`, `bp7`, `bp8`, `bp9`, `bp10`) VALUES
('CA202', 'Bachelor’s degree in Computer Science, Information Technology, or related field.\r\n', '2+ years of experience in a related field.\r\n', 'Experience with security information and event management (SIEM) tools.\r\n', 'Knowledge of network protocols and security technologies.\r\n', 'Strong analytical and problem-solving skills.\r\n', 'Relevant certifications (e.g., CISSP, CEH) are a plus.\r\n', NULL, NULL, NULL, NULL),
('DSE222', 'Bachelor’s degree in Computer Science, Information Technology, or related field.\r\n', '3+ years of experience in DevOps, software development, or IT operations with a focus on security.\r\n', 'Experience with CI/CD tools (e.g., Jenkins, GitLab CI, CircleCI).\r\n', 'Knowledge of cloud platforms (AWS, Azure, GCP) and containerization (Docker, Kubernetes).\r\n', 'Strong scripting skills (e.g., Python, Bash, PowerShell).\r\n', 'Relevant certifications (e.g., AWS Certified Security - Specialty, Certified Kubernetes Security Specialist) are a plus.\r\n', NULL, NULL, NULL, NULL),
('CSA121', 'Bachelor’s degree in Computer Science, Information Technology, or related field.\r\n', '5+ years of experience in cloud architecture, cloud security, or related field.\r\n', 'Experience with cloud platforms (AWS, Azure, GCP) and cloud security tools.\r\n', 'Strong understanding of network security, identity and access management (IAM), encryption, and compliance frameworks (e.g., GDPR, HIPAA).\r\n', 'Industry-recognized certifications like CISSP, CISM, CCSP or equivalent are a significant advantage.\r\n', 'Proven competency in operating both autonomously and collaboratively in team settings.\r\n', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `responsibilities`
--

CREATE TABLE `responsibilities` (
  `job_id` varchar(6) NOT NULL,
  `bp1` text NOT NULL,
  `bp2` text DEFAULT NULL,
  `bp3` text DEFAULT NULL,
  `bp4` text DEFAULT NULL,
  `bp5` text DEFAULT NULL,
  `bp6` text DEFAULT NULL,
  `bp7` text DEFAULT NULL,
  `bp8` text DEFAULT NULL,
  `bp9` text DEFAULT NULL,
  `bp10` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `responsibilities`
--

INSERT INTO `responsibilities` (`job_id`, `bp1`, `bp2`, `bp3`, `bp4`, `bp5`, `bp6`, `bp7`, `bp8`, `bp9`, `bp10`) VALUES
('CA202', 'Monitor and analyze network traffic, security logs, and system activity to detect suspicious behavior or potential intrusions.\r\n', 'Conduct regular vulnerability assessments and support penetration testing to identify and address weaknesses.\r\n', 'Investigate security incidents and breaches.\r\n', 'Develop and implement security policies and procedures.\r\n', 'Work with IT, engineering, and business teams to raise security awareness, train staff on safe practices such as phishing prevention, and provide clear reporting on risks and incidents to management.\r\n', NULL, NULL, NULL, NULL, NULL),
('DSE222', 'Design, implement, and maintain secure CI/CD pipelines that integrate automated security testing at every stage of the software lifecycle.\r\n', 'Collaborate with development and operations teams to design and implement secure infrastructure as code (IaC) solutions.\r\n', 'Conduct threat modeling and risk assessments for new applications and services.\r\n', 'Monitor cloud and on-premise environments for misconfigurations, vulnerabilities, and compliance issues.\r\n', 'Develop and maintain logging, monitoring, and alerting systems to detect and respond to security events in real time.\r\n', NULL, NULL, NULL, NULL, NULL),
('CSA121', 'Develop and implement secure cloud-based solutions across AWS, Azure, or GCP.\r\n', 'Conduct risk assessments and threat modeling for cloud environments.\r\n', 'Develop and enforce cloud security policies, standards, and best practices.\r\n', 'Partner with development, DevOps, and infrastructure teams to embed security controls into CI/CD pipelines and infrastructure-as-code.\r\n', 'Provide hands-on expertise to secure cloud integrations.\r\n', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `salary_and_benefits`
--

CREATE TABLE `salary_and_benefits` (
  `job_id` varchar(6) NOT NULL,
  `bp1` text NOT NULL,
  `bp2` text DEFAULT NULL,
  `bp3` text DEFAULT NULL,
  `bp4` text DEFAULT NULL,
  `bp5` text DEFAULT NULL,
  `bp6` text DEFAULT NULL,
  `bp7` text DEFAULT NULL,
  `bp8` text DEFAULT NULL,
  `bp9` text DEFAULT NULL,
  `bp10` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary_and_benefits`
--

INSERT INTO `salary_and_benefits` (`job_id`, `bp1`, `bp2`, `bp3`, `bp4`, `bp5`, `bp6`, `bp7`, `bp8`, `bp9`, `bp10`) VALUES
('CA202', 'Salary range: $80,000 - $90,000 per year + Bonus.\r\n', 'Comprehensive health insurance plans.\r\n', 'Generous superannuation.\r\n', 'Opportunities for professional development and certifications.\r\n', 'Flexible work arrangements, including remote work options.\r\n', 'Good work/life balance.\r\n', NULL, NULL, NULL, NULL),
('DSE222', 'Salary range: $110,000 - $140,000 per year + Bonus.\r\n', 'Comprehensive health insurance plans.\r\n', 'Generous superannuation.\r\n', 'Options for remote, hybrid, or flexible hours to support work-life balance.\r\n', 'Generous annual leave, sick leave, and additional paid time off for personal needs.\r\n', 'Work with a supportive team where security, innovation, and growth are priorities.\r\n', NULL, NULL, NULL, NULL),
('CSA121', 'Salary range: $135,000 - $160,000 per year + Bonus.\r\n', 'Comprehensive health insurance plans.\r\n', 'Generous superannuation.\r\n', 'Opportunities for professional development and certifications.\r\n', 'Flexible work arrangements, including remote work options.\r\n', 'Good work/life balance.\r\n', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'manager@gmail.com', '$2y$10$JBvE2EO/EeeIiTzOB18Z4ORFntFZOYpSsclnA0r6Ik44n5Y7KGf9K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `eoi`
--
ALTER TABLE `eoi`
  ADD PRIMARY KEY (`EOInumber`),
  ADD KEY `idx_job_ref` (`JobReferenceNumber`),
  ADD KEY `idx_email` (`Email`),
  ADD KEY `idx_status` (`Status`),
  ADD KEY `idx_state` (`State`),
  ADD KEY `idx_submitted` (`SubmittedAt`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `eoi`
--
ALTER TABLE `eoi`
  MODIFY `EOInumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
