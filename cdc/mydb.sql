-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 01:19 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `id_child` int(20) NOT NULL,
  `fname` varchar(40) DEFAULT NULL,
  `lname` varchar(40) DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `dob` varchar(40) DEFAULT NULL,
  `doe` varchar(40) DEFAULT NULL,
  `sponsored_by` varchar(40) DEFAULT NULL,
  `sponsored_type` varchar(40) DEFAULT NULL,
  `term` varchar(40) DEFAULT NULL,
  `adopted_by` varchar(40) DEFAULT NULL,
  `education` varchar(40) DEFAULT NULL,
  `school` varchar(40) DEFAULT NULL,
  `medical_issue` varchar(40) DEFAULT NULL,
  `diseasase` varchar(40) DEFAULT NULL,
  `suffering_since` varchar(40) DEFAULT NULL,
  `current_history` varchar(40) DEFAULT NULL,
  `dod` varchar(20) DEFAULT NULL,
  `hospital_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id_child`, `fname`, `lname`, `gender`, `dob`, `doe`, `sponsored_by`, `sponsored_type`, `term`, `adopted_by`, `education`, `school`, `medical_issue`, `diseasase`, `suffering_since`, `current_history`, `dod`, `hospital_name`) VALUES
(1, 'Maimuna', 'Afreen', 'Female', '2018-11-22', '2019-01-10', 'N/a', 'N/a', 'Short', 'Jasmine', 'Play', 'Sunflower baby school', 'N/a', 'N/a', '', 'Entry', '', 'N/a'),
(2, 'Anik', 'Islam', 'Male', '2018-12-05', '2019-02-01', 'Pran Ltd', 'Donation', 'Long', 'Israt Jahan', 'N/a', 'N/a', 'Slightly', 'Fever', '2019-05-01', '100 degree fever', '', 'Bubt hospital');

-- --------------------------------------------------------

--
-- Table structure for table `families`
--

CREATE TABLE `families` (
  `id_families` int(20) NOT NULL,
  `fname` varchar(40) DEFAULT NULL,
  `lname` varchar(40) DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `dob` varchar(40) DEFAULT NULL,
  `doe` varchar(40) DEFAULT NULL,
  `sponsored` varchar(40) DEFAULT NULL,
  `donation_amount` varchar(40) DEFAULT NULL,
  `count_of_kids_adopted` varchar(40) DEFAULT NULL,
  `short_term_plan` varchar(40) DEFAULT NULL,
  `long_term_plan` varchar(40) DEFAULT NULL,
  `term_duration` varchar(40) DEFAULT NULL,
  `education` varchar(40) DEFAULT NULL,
  `medical` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `myinfo`
--

CREATE TABLE `myinfo` (
  `id` int(11) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myinfo`
--

INSERT INTO `myinfo` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(16, 'Abdur', 'Rahman', 'arcse3048@gmail.com', '1234'),
(17, 'Jesmine', 'tripti', 'jasminetripti5@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(20) NOT NULL,
  `fname` varchar(40) DEFAULT NULL,
  `lname` varchar(40) DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `contact` varchar(40) DEFAULT NULL,
  `dob` varchar(40) DEFAULT NULL,
  `doj` varchar(40) DEFAULT NULL,
  `child_count` varchar(40) DEFAULT NULL,
  `work_duration` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `fname`, `lname`, `gender`, `email`, `contact`, `dob`, `doj`, `child_count`, `work_duration`) VALUES
(1, 'Ratan', 'Kumar', 'Male', 'ratan@yahoo.com', '0158897556522', '1992-05-05', '', 'h', '7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id_child`);

--
-- Indexes for table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id_families`);

--
-- Indexes for table `myinfo`
--
ALTER TABLE `myinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `id_child` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `families`
--
ALTER TABLE `families`
  MODIFY `id_families` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `myinfo`
--
ALTER TABLE `myinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
