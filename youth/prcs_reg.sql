-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2016 at 10:00 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prcs_reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `cnic` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pswd` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `province` varchar(100) NOT NULL,
  `comp_pro` varchar(100) NOT NULL,
  `comm_skill` varchar(100) NOT NULL,
  `first_aid` varchar(100) NOT NULL,
  `other` varchar(100) NOT NULL,
  `other_text` varchar(200) NOT NULL,
  `edu` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `interest` text NOT NULL,
  `urdu` varchar(100) NOT NULL DEFAULT '',
  `pashto` varchar(100) NOT NULL DEFAULT '',
  `punjabi` varchar(100) NOT NULL,
  `sindhi` varchar(100) NOT NULL,
  `balochi` varchar(100) NOT NULL,
  `english` varchar(100) NOT NULL,
  `crisis` varchar(100) NOT NULL,
  `comp_sc` varchar(100) NOT NULL,
  `month_know` varchar(100) NOT NULL,
  `year_know` varchar(100) NOT NULL,
  `university_know` varchar(100) NOT NULL,
  `options` varchar(100) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `days_work` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `terms` varchar(100) NOT NULL,
  `special` varchar(100) NOT NULL,
  `image1` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
