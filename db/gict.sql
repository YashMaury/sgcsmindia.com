-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2023 at 10:44 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gict`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_email`, `admin_password`, `status`, `createdOn`, `createdBy`) VALUES
(1, 'Yash', 'yash@gmail.com', '12345', 0, '2023-09-09 02:51:09', 'Yash');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `exam_course` varchar(1000) NOT NULL,
  `no_question` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `exam_name`, `exam_course`, `no_question`, `status`, `created_on`, `created_by`) VALUES
(2, 'QUIZ', 'Diploma In Mobile Maintenance (DMM) (6 Months)', '1', 0, '2023-09-27 15:24:50', '1'),
(3, 'TEST !', 'Diploma In Basic Programming (DBP) (6 Months)', '50', 0, '2023-09-27 14:03:23', '1'),
(4, 'CCC', 'Basic &amp; Typing (6 Months)', '20', 0, '2023-09-27 02:41:24', '1');

-- --------------------------------------------------------

--
-- Table structure for table `franchise_registration`
--

CREATE TABLE `franchise_registration` (
  `id` int(11) NOT NULL,
  `center_name` varchar(300) NOT NULL,
  `center_director` varchar(255) NOT NULL,
  `login_email` varchar(200) NOT NULL,
  `login_password` varchar(200) NOT NULL,
  `center_state` varchar(255) NOT NULL,
  `center_district` varchar(255) NOT NULL,
  `center_block` varchar(255) NOT NULL,
  `center_city` varchar(255) NOT NULL,
  `center_pincode` varchar(100) NOT NULL,
  `center_email` varchar(200) NOT NULL,
  `center_mobile` varchar(30) NOT NULL,
  `center_message` varchar(1000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(300) NOT NULL,
  `updatedOn` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedBy` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `franchise_registration`
--

INSERT INTO `franchise_registration` (`id`, `center_name`, `center_director`, `login_email`, `login_password`, `center_state`, `center_district`, `center_block`, `center_city`, `center_pincode`, `center_email`, `center_mobile`, `center_message`, `status`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(1, 'GICT COMPUTER', 'Brijendra Sir', 'gictcomputer.edu@gmail.com', 'brijendra897443', 'Uttar Pradesh', 'Jaunpur', 'Mungra Badshahpur', 'Jaunpur', '222202', 'gictcomputer.edu@gmail.com', '9988757620', 'no message no message no message no message no message no message no message no message no message no message no message no message no message ', 1, '2023-09-24 04:27:02', 'GICT COMPUTER', '2023-09-24 04:17:51', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `imagegallery`
--

CREATE TABLE `imagegallery` (
  `id` int(11) NOT NULL,
  `franchise_id` varchar(200) NOT NULL,
  `imageTitle` varchar(200) NOT NULL,
  `imageDescription` varchar(1000) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `exam_id` varchar(200) NOT NULL,
  `question_name` varchar(1000) NOT NULL,
  `option_1` varchar(300) NOT NULL,
  `option_2` varchar(300) NOT NULL,
  `option_3` varchar(300) NOT NULL,
  `option_4` varchar(300) NOT NULL,
  `correct_option` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `exam_id`, `question_name`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_option`, `status`, `created_on`, `created_by`) VALUES
(2, '2', 'What is ?', 'a', 'b', 'c', 'd', '2', 0, '2023-09-28 03:50:55', '1'),
(3, '4', 'WHAT IS CCC?', 'CCC', 'NOTHING', 'EVERYTHING', 'NONE OF THESE', '1', 0, '2023-09-27 14:42:19', '1'),
(4, '4', 'Question is ?', 'wuestion', 'question', 'nothing ', 'anything', '2', 0, '2023-09-28 09:38:41', '1'),
(5, '4', 'Question guess karo', 'question 4', 'question 1', 'question 3', 'question 5', '1', 0, '2023-09-28 09:39:49', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(11) NOT NULL,
  `franchise_id` varchar(100) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `student_mobile` varchar(200) NOT NULL,
  `course` varchar(1000) NOT NULL,
  `student_email` varchar(200) NOT NULL,
  `student_password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `franchise_id`, `student_name`, `student_mobile`, `course`, `student_email`, `student_password`, `status`, `createdOn`, `createdBy`) VALUES
(11, '1', 'Yash', '9988776655', 'Diploma In Mobile Maintenance (DMM) (6 Months)', 'yash@gmail.com', '12345', 0, '2023-09-24 15:47:46', '1'),
(12, '1', 'Yash', '789465132', 'Basic &amp; Typing (6 Months)', 'yash@gmail.com', '123456789', 0, '2023-09-24 05:25:27', '1');

-- --------------------------------------------------------

--
-- Table structure for table `studymaterial`
--

CREATE TABLE `studymaterial` (
  `id` int(11) NOT NULL,
  `materialTitle` varchar(200) NOT NULL,
  `materialDescription` varchar(1000) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franchise_registration`
--
ALTER TABLE `franchise_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagegallery`
--
ALTER TABLE `imagegallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studymaterial`
--
ALTER TABLE `studymaterial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `franchise_registration`
--
ALTER TABLE `franchise_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `imagegallery`
--
ALTER TABLE `imagegallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `studymaterial`
--
ALTER TABLE `studymaterial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
