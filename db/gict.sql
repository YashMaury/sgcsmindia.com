-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2023 at 02:42 AM
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
-- AUTO_INCREMENT for table `franchise_registration`
--
ALTER TABLE `franchise_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `imagegallery`
--
ALTER TABLE `imagegallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `studymaterial`
--
ALTER TABLE `studymaterial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
