-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2023 at 02:29 AM
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
-- Table structure for table `imagegallery`
--

CREATE TABLE `imagegallery` (
  `id` int(11) NOT NULL,
  `imageTitle` varchar(200) NOT NULL,
  `imageDescription` varchar(1000) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagegallery`
--

INSERT INTO `imagegallery` (`id`, `imageTitle`, `imageDescription`, `createdOn`, `createdBy`) VALUES
(11, 'Yash', 'Dwaadw', '2023-09-08 14:23:37', 'Admin'),
(12, 'Yash', 'YAshashas', '2023-09-08 14:24:24', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(11) NOT NULL,
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

INSERT INTO `student_registration` (`id`, `student_name`, `student_mobile`, `course`, `student_email`, `student_password`, `status`, `createdOn`, `createdBy`) VALUES
(1, 'Yash', '978456123', 'Basic &amp; Typing (6 Months)', 'yash@gmail.com', '12345', 0, '2023-09-08 03:43:45', 'Yash'),
(2, 'Yash', '978456123', 'Basic &amp; Typing (6 Months)', 'yash@gmail.com', '12345', 0, '2023-09-08 03:44:35', 'Yash'),
(3, 'Anshu', '987\\42852', 'Advance Diploma In Computer Application(ADCA) (1 Year)', 'anshu@gmail.com', '1234567898520', 0, '2023-09-08 03:45:12', 'Anshu'),
(4, 'No', '978456132', 'Basic &amp; Typing (6 Months)', 'anshu@gmail.com', '123', 0, '2023-09-08 04:58:00', 'No');

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
-- Dumping data for table `studymaterial`
--

INSERT INTO `studymaterial` (`id`, `materialTitle`, `materialDescription`, `createdOn`, `createdBy`) VALUES
(3, 'Bio Notes', 'Bio Notes By Yash', '2023-09-08 14:11:00', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagegallery`
--
ALTER TABLE `imagegallery`
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
-- AUTO_INCREMENT for table `imagegallery`
--
ALTER TABLE `imagegallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `studymaterial`
--
ALTER TABLE `studymaterial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
