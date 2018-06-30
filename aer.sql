-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2018 at 01:09 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aer`
--

-- --------------------------------------------------------

--
-- Table structure for table `regist`
--

CREATE TABLE `regist` (
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `usertype` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regist`
--

INSERT INTO `regist` (`username`, `password`, `usertype`) VALUES
('admin', 'pass@123', 'a'),
('VIS1903110917', 'sukhmeet1', 's');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `app_id` varchar(15) DEFAULT NULL,
  `team_name` varchar(50) DEFAULT NULL,
  `project_name` varchar(200) DEFAULT NULL,
  `award_cat` varchar(10) DEFAULT NULL,
  `problem` varchar(255) DEFAULT NULL,
  `other_problem` varchar(255) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `spoc_name` varchar(100) DEFAULT NULL,
  `spoc_email` varchar(100) DEFAULT NULL,
  `spoc_mobile` varchar(10) DEFAULT NULL,
  `inst_name` varchar(255) DEFAULT NULL,
  `inst_pid` varchar(20) DEFAULT NULL,
  `inst_address` varchar(255) DEFAULT NULL,
  `inst_city` varchar(50) DEFAULT NULL,
  `inst_state` varchar(100) DEFAULT NULL,
  `inst_principal` varchar(50) DEFAULT NULL,
  `inst_contact` varchar(20) DEFAULT NULL,
  `inst_email` varchar(100) DEFAULT NULL,
  `spoc_address` varchar(255) DEFAULT NULL,
  `spoc_pin` varchar(6) DEFAULT NULL,
  `eci_registration` varchar(20) DEFAULT NULL,
  `abstract` varchar(2000) DEFAULT NULL,
  `mentor_name` varchar(50) DEFAULT NULL,
  `mentor_desi` varchar(20) DEFAULT NULL,
  `stream` varchar(20) DEFAULT NULL,
  `qualification` varchar(20) DEFAULT NULL,
  `mentor_address` varchar(100) DEFAULT NULL,
  `mentor_pin` varchar(6) DEFAULT NULL,
  `mentor_mobile` varchar(10) DEFAULT NULL,
  `mentor_email` varchar(100) DEFAULT NULL,
  `similar_area` varchar(10) DEFAULT NULL,
  `society_problem` varchar(10) DEFAULT NULL,
  `publications` varchar(10) DEFAULT NULL,
  `student_feedback` varchar(10) DEFAULT NULL,
  `achievement` varchar(10) DEFAULT NULL,
  `patents` varchar(10) DEFAULT NULL,
  `mentor_f` varchar(1) DEFAULT NULL,
  `institute_f` varchar(1) DEFAULT NULL,
  `abstract_f` varchar(2) DEFAULT NULL,
  `app_status` varchar(15) DEFAULT NULL,
  `Sr_No` int(11) NOT NULL,
  `Q1` varchar(2000) DEFAULT NULL,
  `Q2` varchar(2000) DEFAULT NULL,
  `Q3` varchar(2000) DEFAULT NULL,
  `Q4` varchar(2000) DEFAULT NULL,
  `Q5` varchar(2000) DEFAULT NULL,
  `Q6` varchar(2000) DEFAULT NULL,
  `Q7` varchar(2000) DEFAULT NULL,
  `Q8` varchar(2000) DEFAULT NULL,
  `Q9` varchar(2000) DEFAULT NULL,
  `Q10` varchar(2000) DEFAULT NULL,
  `flagsec1` varchar(5) NOT NULL,
  `flagsec2` varchar(5) DEFAULT NULL,
  `flagsec3` varchar(5) DEFAULT NULL,
  `flagsec4` varchar(5) DEFAULT NULL,
  `flagsec5` varchar(5) DEFAULT NULL,
  `flagsec6` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`app_id`, `team_name`, `project_name`, `award_cat`, `problem`, `other_problem`, `password`, `spoc_name`, `spoc_email`, `spoc_mobile`, `inst_name`, `inst_pid`, `inst_address`, `inst_city`, `inst_state`, `inst_principal`, `inst_contact`, `inst_email`, `spoc_address`, `spoc_pin`, `eci_registration`, `abstract`, `mentor_name`, `mentor_desi`, `stream`, `qualification`, `mentor_address`, `mentor_pin`, `mentor_mobile`, `mentor_email`, `similar_area`, `society_problem`, `publications`, `student_feedback`, `achievement`, `patents`, `mentor_f`, `institute_f`, `abstract_f`, `app_status`, `Sr_No`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `flagsec1`, `flagsec2`, `flagsec3`, `flagsec4`, `flagsec5`, `flagsec6`) VALUES
('VIS1903110917', 'Amandeep Rai', 'project_name', 'Degree', '1', NULL, 'sukhmeet1', 'Sukhmeet Kaur', 'er.sukhmeetkaur@gmail.com', '8802453909', 'qww', '123', 'abcd', '123456', 'har', 'xyz', '2345', 'a@a', 'qacdr', '121', NULL, '', 'oijlkweaf', 'dx', 'hoisad', 'Phd', 'awf', '897', '9789', 'sadf@saf', '978', '9456', '7895', '789', '786', '896', 'Y', 'Y', 'Y', 'Submitted', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS1903111055', '', '', NULL, NULL, NULL, 'sukhmeet1', 'Sukhmeet Kaur', 'er.sukhmeetkaur@gmail.com', '8802453909', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS1903112236', '', '', NULL, NULL, NULL, 'sukhmeet1', 'Sukhmeet Kaur', 'er.sukhmeetkaur@gmail.com', '8802453909', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003103503', '', '', NULL, NULL, NULL, 'ss', 'Sukhmeet Kaur', 'er.sukhmeetkaur@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003103719', '', '', NULL, NULL, NULL, '123', 'Sukhmeet Kaur', 'er.sukhmeetkaur@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003113331', '', '', NULL, NULL, NULL, 'aa', 'sukhmeet', 'egov@aicte-india.org', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003113443', '', '', NULL, NULL, NULL, '', 's', 'egov@aicte-india.org', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003113507', '', '', NULL, NULL, NULL, '12', 'Sukhmeet Kaur', 'egov@aicte-india.org', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003113552', '', '', NULL, NULL, NULL, '1234', 'a', 'er.sukhmeetkaur@gmail.com', '234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003113642', '', '', NULL, NULL, NULL, '1234', '123', 'a@gmail.com', '12324', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003113751', '', '', NULL, NULL, NULL, '1234', 'aas', 'a@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003113823', '', '', NULL, NULL, NULL, '1234', 'a', 'a@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003113949', '', '', NULL, NULL, NULL, '12345', 'aa', 'aa@g', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003114701', '', '', NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003114912', '', '', NULL, NULL, NULL, '1234', '', 'a@a.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003115107', '', '', NULL, NULL, NULL, '1234', 'a', 'a@a.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003115127', '', '', NULL, NULL, NULL, '1234', 'a', 'a@a.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003115216', '', '', NULL, NULL, NULL, '1234', '', 'a@a.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003115339', '', '', NULL, NULL, NULL, '1234', '', 'a@a.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003115356', '', '', NULL, NULL, NULL, '1234', 'a', 'a@a.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003115551', '', '', NULL, NULL, NULL, '1234', 'abcd', 'a@a.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003123127', '', '', NULL, NULL, NULL, '1234', 'aasfg', 'a@gmail.com1', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003123227', '', '', NULL, NULL, NULL, '1234', 'abcd', 'a@a', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003123320', '', '', NULL, NULL, NULL, '1234', 'asd', 'as@a', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2003123354', '', '', NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2303152225', '', '', NULL, NULL, NULL, 'sukhmeet1', 'sukhmeet', 'er.sukhmeetkaur@gmail.com', '8802453909', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2303152905', '', '', NULL, NULL, NULL, 'sukhmeet1', 'sukhmeet', 'er.sukhmeetkaur@gmail.com', '8802453909', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2303153234', '', '', NULL, NULL, NULL, 'sukhmeet1', 'sukhmeet', 'er.sukhmeetkaur@gmail.com', '8802453909', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2303154022', '', '', NULL, NULL, NULL, '1234', 'sukhmeet', 'er.sukhmeetkaur@gmail.com', '8802453909', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
('VIS2303154219', '', '', NULL, NULL, NULL, '4444', 'wwww', 'er.sukhmeetkaur@gmail.com', '4444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teammember`
--

CREATE TABLE `teammember` (
  `app_id` varchar(15) DEFAULT NULL,
  `member_name` varchar(25) DEFAULT NULL,
  `member_email` varchar(100) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `father_name` varchar(30) DEFAULT NULL,
  `stream` varchar(30) DEFAULT NULL,
  `year` varchar(15) DEFAULT NULL,
  `team_mobile` varchar(10) DEFAULT NULL,
  `roll` varchar(20) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Sr_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teammember`
--

INSERT INTO `teammember` (`app_id`, `member_name`, `member_email`, `gender`, `father_name`, `stream`, `year`, `team_mobile`, `roll`, `timestamp`, `Sr_No`) VALUES
('VIS2003115356', 'a', 'a@a.com', NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-20 06:25:38', 1),
('VIS2003123320', 'asd', 'as@a', NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-20 07:03:20', 5),
('VIS2003123354', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-20 07:03:54', 6),
('1', '1', '1', 'M', 'S', 'QER', '123', '124', NULL, '2018-03-20 07:33:35', 7),
('', 'ww', 'a@a.com', 'Male', 'ww', 'ww', 'IInd Year', 'ww', 'ww', '2018-06-04 12:29:06', 18),
('', 'dsdvcrryrt', 'a@a.com', 'Female', 'fhvytr', 'dsff', 'Ist Year', '8287299698', 'ww', '2018-06-05 10:46:33', 19),
('VIS1903110917', 'mias', 'zd@saa', 'Male', 'aksj', 'ans', 'Ist Year', '9798', '8798', '2018-06-14 06:54:25', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regist`
--
ALTER TABLE `regist`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Sr_No`),
  ADD UNIQUE KEY `app_id` (`app_id`);

--
-- Indexes for table `teammember`
--
ALTER TABLE `teammember`
  ADD UNIQUE KEY `Sr_No` (`Sr_No`),
  ADD UNIQUE KEY `Sr_No_2` (`Sr_No`) USING BTREE,
  ADD KEY `app_id_2` (`app_id`),
  ADD KEY `app_id` (`app_id`) USING BTREE;
ALTER TABLE `teammember` ADD FULLTEXT KEY `app_id_3` (`app_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Sr_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `teammember`
--
ALTER TABLE `teammember`
  MODIFY `Sr_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
