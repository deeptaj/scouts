-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 04:21 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scouts`
--

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `value` int(11) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`id`, `name`, `value`, `comments`) VALUES
(1, 'NO_OF_TOPICS_PER_ROW', 4, 'This is the number of topics, per row, on home page'),
(2, 'NO_OF_QUESTIONS_TO_SHOW', 5, 'The number of Question per quiz');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `school_id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `year_founded` year(4) DEFAULT NULL,
  `school_type` varchar(30) DEFAULT NULL,
  `current_enrollment` int(4) DEFAULT NULL,
  `total_students_served` int(5) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `state_name` varchar(20) DEFAULT 'Andhra Pradesh',
  `state_code` varchar(2) DEFAULT 'AP',
  `zip_code` varchar(10) DEFAULT NULL,
  `keywords` varchar(100) DEFAULT 'blind',
  `image_name` varchar(50) DEFAULT 'generic_logo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`school_id`, `name`, `description`, `year_founded`, `school_type`, `current_enrollment`, `total_students_served`, `mobile`, `website`, `email`, `address`, `state_name`, `state_code`, `zip_code`, `keywords`, `image_name`) VALUES
(1, 'Sri Shirdi Sai Deenajana Seva Samithi', 'Inspired by the teachings of Lord Krishna and Shirdi Sai Baba - Viz. \"Worship of God through service to His Creation\" - some service-minded retired individuals started this Society with the sole aim to uplift the needy. To fulfill this aim, the Samithi has been organizing various projects since March 1996.', 1995, 'private', 80, 400, NULL, 'http://saisevasamithi.thisisjava.com', NULL, 'Brodipet, Guntur, Andhra Pradesh 522002, India', 'Andhra Pradesh', 'AP', '522006', 'blind, orphans, poor', 'sssdss_color.png'),
(2, 'Netra Vidyalaya', 'Nethra Vidyalaya provides education for blind in India and is a part of the Jeeyar Educational Trust (JET) founded by HH Sri Sri Sri Tridandi Chinna Srimannarayana Ramanuja Jeeyar Swamiji.   Nethra Vidyalaya provides education from primary level to high school, junior & senior college, where hundred', 2001, 'private', 100, 1855, '+91 99896 95888', 'https://www.nethravidyalaya.org/', NULL, '13-239, Bhimli Beach Rd Chapaluppada Post, Village, Mangamari Peta, Visakhapatnam, AP 530045', 'Andhra Pradesh', 'AP', '530045', 'blind', 'Nethra-Vidyalaya-School-For-Blind.png'),
(3, 'Vijaya Mary Integrated School For The Blind', '', NULL, 'unknown', NULL, NULL, '+91 866 245 058', 'http://www.google.com', NULL, 'caramel nagar,, Gunadala, Vijayawada, Andhra Pradesh 520004, India', 'Andhra Pradesh', 'AP', '520004', 'blind', 'generic_logo.jpg'),
(4, 'SPECIAL', ' To Be done ', 0000, '3', 90, 91, 'http://scouts.icsbin', 'http://scouts.icsbin.com/notfound.html', '', ' Tarvanipeta,beside Sri Krishna Theater Street 4-17-14,MANDAPeta, Mandapeta, Andhra Pradesh 533308, India ', 'Andhra Pradesh', 'AP', '533308', 'blind', 'generic_logo.jpg'),
(5, 'Luthrean High School For The Blind', 'The Institution for the Blind was established in 1911 by a German Missionary Mrs. Mr. Albrecht to cater the needs of the Blinds of Andhra area. It was established with one student at a village called Rentachintala, GurazalaThaluk of Andhra Pradesh. With that origin, it had functioned there up to 1964 as Higher Elementary School with 8 classes. This was the first Institution started in Andhra Pradesh to meet the Educational needs for the Blinds.', 1911, NULL, NULL, NULL, NULL, 'http://scouts.icsbin.com/generic.html', NULL, 'Prakash Nagar, Narasaraopeta, Andhra Pradesh 522601, India', 'Andhra Pradesh', 'AP', '522601', 'blind, christian', 'generic_logo.jpg'),
(6, 'Zion Blind School', '', NULL, NULL, NULL, NULL, NULL, '+91 99856 72920', NULL, 'CTRI junction, Rajahmundry, Andhra Pradesh, India', 'Andhra Pradesh', 'AP', NULL, 'blind', 'generic_logo.jpg'),
(7, 'Blind School Mandapeta', 'to be done', NULL, NULL, NULL, NULL, '+91 88552 34523', 'http://scouts.icsbin.com/generic.html', NULL, 'Address: 4-17-14 ,tarvanipeta street,, Mandapeta, Andhra Pradesh, India', 'Andhra Pradesh', 'AP', NULL, 'blind', 'blind_school_mandapeta.png'),
(8, 'Navajeevan Blind Relief Centre', '', NULL, 'private', NULL, NULL, '+91 877 223 999', 'https://www.navajeevan.org/', 'sreenavajeevan@gmail.com', 'Sri Ayyappa Swamy Temple, Tiruchanoor Road Near, Tiruchanur, Tirupati, Andhra Pradesh 517503, India', 'Andhra Pradesh', 'AP', '517503', 'blind, deaf, dumb', 'navjeevan_blind_relief_center.png'),
(9, 'Govt Residential School For Visually Handicapped', 'Govt Residential School For Visually Handicapped', NULL, 'public', NULL, NULL, NULL, 'http://scouts.icsbin.com/generic.html', NULL, 'Sagar Nagar, Visakhapatnam, Andhra Pradesh 530045, India', 'Andhra Pradesh', 'AP', '530045', NULL, 'generic_logo.jpg'),
(10, 'Asian Aid School for Blind', 'Asian Aid School for Blind', NULL, NULL, NULL, NULL, '+91 96181 95297', 'http://scouts.icsbin.com/generic.html', NULL, 'Narayanappavalasa, Andhra Pradesh 535558, India', 'Andhra Pradesh', 'AP', '535558', 'blind', 'asian_aid_school_for_blind.png'),
(11, 'Amma Andhula Patashala Blind School', 'Amma Andhula Patashala Blind School', NULL, NULL, NULL, NULL, '+91 9703353474', 'http://scouts.icsbin.com/generic.html', NULL, 'pasupula, kurnool district, AP, India - 518220', 'Andhra Pradesh', 'AP', '518220', 'blind', 'amma_blind_school.jpg'),
(12, 'Visakha Model School For The Blind', 'Visakha Model School For The Blind', NULL, NULL, NULL, NULL, '+91 89127 81269', 'http://scouts.icsbin.com/generic.html', NULL, 'Correspondent Near Law College, yendada, Madhurawada, Visakhapatnam, Andhra Pradesh 530041, India', 'Andhra Pradesh', 'AP', '530041', NULL, 'generic_logo.jpg'),
(13, 'Dwarakamaye School For Visually Impared', 'Dwarakamaye School For Visually Impared', NULL, NULL, NULL, NULL, '+91 89222 77111', 'http://scouts.icsbin.com/generic.html', NULL, 'Sai Krupa Seva Samstha, Ananda Gajapathi Rd, Hanuman Nagar, Phool Bagh Colony, Phool Bagh, Vizianagaram, Andhra Pradesh 535002, India', 'Andhra Pradesh', 'AP', '535002', 'blind', 'generic_logo.jpg'),
(14, 'Government Residential School For Visually Challenged Girls', 'Government Residential School For Visually Challenged Girls', NULL, 'public', NULL, NULL, NULL, 'http://scouts.icsbin.com/generic.html', NULL, 'Bheemili Beach Rd, Bhemili, Endada, Visakhapatnam, Andhra Pradesh 531145, India', 'Andhra Pradesh', 'AP', NULL, 'blind, girls', 'generic_logo.jpg'),
(15, 'Hellen Kellar Blind School', 'Hellen Kellar Blind School', NULL, NULL, NULL, NULL, '+91 92923 03755', 'http://scouts.icsbin.com/generic.html', NULL, 'Vepagunta - Sabbavaram Rd, Port Colony, MES Layout, Chintalagraharam, Kavali, Visakhapatnam, Andhra Pradesh 530047, India', 'Andhra Pradesh', 'AP', '530047', 'blind', 'generic_logo.jpg'),
(16, 'Kalabharathi School For Blind', 'Kalabharathi School For Blind', NULL, NULL, NULL, NULL, '+91 90005 01323', 'http://www.kalabharathiblindschool.com/', 'kswsblindschool@gmail.com', 'Plot No.125, Sai Nagar ,2nd Lane,\r\nChuttugunta Center, Guntur,A.P', 'Andhra Pradesh', 'AP', '522003', 'blind', 'kalabharathi_blind_school.png'),
(17, 'Dr. Siva\'s Blind School', 'Dr. Siva\'s Blind School', NULL, NULL, NULL, NULL, NULL, 'http://scouts.icsbin.com/generic.html', NULL, 'Laxmi Nagar, Ramji Nagar, Nellore, Andhra Pradesh 524002, India', 'Andhra Pradesh', 'AP', '524002', 'blind', 'generic_logo.jpg'),
(18, 'Louis Blind School', 'Louis Blind School', NULL, NULL, NULL, NULL, NULL, 'http://scouts.icsbin.com/generic.html', NULL, 'Sri Rama Nagar, Amalapuram, Andhra Pradesh 533201, India', 'Andhra Pradesh', 'AP', '533201', 'blind', 'generic_logo.jpg'),
(19, 'St. Louis Institute for Deaf and Blind', 'St. Louis Marie de Montfort, a priest in the 17th century France founded three religious congregations, Daughters of Wisdom for Religious Nuns, Company of Mary for Religious Priests, Brothers of St. Gabriel. These congregations are responsible for the successful running of many educational & technical institutions and social action centers especially catering to the less privileged, marginalized, dis-advantaged and the differently abled in the society.These congregations have been rendering thei', NULL, 'christian', NULL, NULL, '+91 44 2491 0886', 'http://stlouisdeafblindadyar.org/', 'info@stlouisdeafblindadyar.org', 'No 25, Canal Bank Road, Adyar\r\nChennai - 600020', 'Tamilnadu', 'TN', NULL, 'blind, deaf', 'saint_louis_institute_for_deaf_and_blind.png'),
(20, 'Blind School Mandapeta', 'Blind School Mandapeta', NULL, NULL, NULL, NULL, ' +91 88552 34523', 'http://scouts.icsbin.com/generic.html', NULL, '4-17-14 ,tarvanipeta street,, Mandapeta, Andhra Pradesh, India', 'Andhra Pradesh', 'AP', NULL, 'blind', 'generic_logo.jpg'),
(21, 'Phanendra Chunduri Institute for Visually Challenged', 'Phanendra Chunduri Institute for Visually Challenged', NULL, 'private', NULL, NULL, NULL, 'http://scouts.icsbin.com/generic.html', NULL, 'Gannavaram Nuzividu Rd, Thotapalle, Andhra Pradesh 521211, India', 'Andhra Pradesh', 'AP', '521211', 'blind', 'generic_logo.jpg'),
(22, 'Viswabharathi Andhula Pathashala ', 'Viswabharathi Andhula Pathashala  (School for blind)', NULL, NULL, NULL, NULL, NULL, 'http://scouts.icsbin.com/generic.html', NULL, 'udicial Quarters, Revenue Colony, Nellore, Andhra Pradesh 524004, India', 'Andhra Pradesh', 'AP', '524004', 'blind', 'generic_logo.jpg'),
(23, 'Al-Kamra School For Blind', 'Al-Kamra School For Blind', NULL, NULL, NULL, NULL, '+91 99595 76929', 'http://scouts.icsbin.com/generic.html', NULL, 'Islampet, Ongole, Andhra Pradesh 523001, India', 'Andhra Pradesh', 'AP', '523001', 'blind', 'generic_logo.jpg'),
(25, 'Yashma Gupta', '  asdf', 1990, '10', 10, 2147483647, 'http://scouts.icsbin', 'http://scouts.icsbin.com/generic.html', 'yashma.gupta@gmail.com', '3659 Windmill Curve', '', '', '55129', 'blind', 'carpet_1.jpg'),
(26, 'Yashma Gupta', '  ', 1990, '10', 10, 2147483647, 'http://scouts.icsbin', 'http://scouts.icsbin.com/generic.html', 'yashma.gupta@gmail.com', '3659 Windmill Curve', '', '', '55129', 'blind', 'car_receipt_10_19_2019.jpg'),
(29, 'helloho', 'how are you  ', 1990, '10', 10, 0, 'http://scouts.icsbin', 'http://scouts.icsbin.com/generic.html', '', '  ', '', '', '', 'blind', 'Slide2.JPG'),
(32, 'testing junk space ', ' testing junk   hello how are you', 0000, '100', 890, 0, 'http://www.metroics.', 'http://www.metroics.com', 'siva.jasthi100@gmail.com', ' 951 Earley Lake curv \r\nBurnsville', '', '', '55306', 'blind, deaf', 'Slide46.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(75) NOT NULL,
  `hash` varchar(200) NOT NULL,
  `active` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  `modified_time` date NOT NULL,
  `created_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `hash`, `active`, `role`, `modified_time`, `created_time`) VALUES
(1, 'Deepta', 'Jasthi', 'jdeepta@gmail.com', '$2y$10$zFAG5GBNtf.5BpowMqZSputSLeG8OzfKACpjAMsePjZhu.TnvU/Bu', 'yes', 'admin', '0000-00-00', '0000-00-00'),
(3, 'SILC', 'Tester', 'test@silcmn.com', '$2y$10$zFAG5GBNtf.5BpowMqZSputSLeG8OzfKACpjAMsePjZhu.TnvU/Bu', 'yes', 'admin', '0000-00-00', '0000-00-00'),
(4, 'siva', 'silc', 'siva@silcmn.com', '$2y$10$zFAG5GBNtf.5BpowMqZSputSLeG8OzfKACpjAMsePjZhu.TnvU/Bu', 'yes', 'admin', '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `preferences`
--
ALTER TABLE `preferences`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `school_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
