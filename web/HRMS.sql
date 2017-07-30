-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2017 at 09:44 AM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HRMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `user_id` int(30) NOT NULL,
  `salary` int(30) DEFAULT NULL,
  `cl` int(10) NOT NULL DEFAULT '0',
  `sl` int(10) NOT NULL DEFAULT '0',
  `pl` int(10) NOT NULL DEFAULT '0',
  `basic` float NOT NULL DEFAULT '0',
  `hra` float NOT NULL DEFAULT '0',
  `special_alw` float NOT NULL DEFAULT '0',
  `convey_alw` float DEFAULT '0',
  `medical_alw` float NOT NULL DEFAULT '0',
  `pf` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`user_id`, `salary`, `cl`, `sl`, `pl`, `basic`, `hra`, `special_alw`, `convey_alw`, `medical_alw`, `pf`) VALUES
(103, 2000, 5, 2, 3, 0, 0, 0, 0, 0, 0),
(105, NULL, 5, 5, 15, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `issue_id` varchar(20) NOT NULL,
  `user_id` varchar(30) DEFAULT NULL,
  `resource` varchar(40) NOT NULL,
  `description` varchar(40) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`issue_id`, `user_id`, `resource`, `description`, `type`, `status`) VALUES
('10001', '103', 'REQ', 'Issue me  book', 'BK', 0),
('10002', '103', 'FC', 'CD is not woking properly', 'SW', -1),
('10005', '103', 'SW', 'Linux installation not done', 'FC', 0),
('10006', '103', 'SW', 'xgcfh', 'REQ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `leave_id` varchar(20) NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `reason` varchar(60) NOT NULL,
  `description` varchar(60) NOT NULL,
  `cl` int(2) NOT NULL DEFAULT '0',
  `sl` int(2) NOT NULL DEFAULT '0',
  `pl` int(2) NOT NULL DEFAULT '0',
  `status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`leave_id`, `user_id`, `date_from`, `date_to`, `reason`, `description`, `cl`, `sl`, `pl`, `status`) VALUES
('1032016-11-10', 103, '2016-11-10', '2016-11-13', 'hghh', 'Description', 0, 0, 1, 0),
('1032016-11-11', 103, '2016-11-11', '2016-11-15', 'Hello world', 'Description', 0, 1, 0, 0),
('1032016-11-13', 103, '2016-11-13', '2016-11-15', 'Hello world', 'Description', 1, 0, 0, 0),
('1032017-05-02', 103, '2017-05-02', '2017-05-04', 'ear', 'desc', 0, 1, 0, 0),
('1032017-05-03', 103, '2017-05-03', '2017-05-04', 'reason', 'desc', 0, 1, 0, 0),
('1032017-05-10', 103, '2017-05-10', '2017-05-12', 'sick', 'dont know', 0, 0, 1, 1),
('1032017-05-15', 103, '2017-05-15', '2017-05-16', 'reason', 'Kitab lage', 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(30) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  `user_type` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `phone_emergency` int(20) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `doa` date DEFAULT NULL,
  `doj` date NOT NULL,
  `education` varchar(60) DEFAULT NULL,
  `skillset` varchar(100) DEFAULT NULL,
  `prev_role` varchar(40) DEFAULT NULL,
  `current_role` varchar(40) DEFAULT NULL,
  `approval` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `user_type`, `email`, `phone`, `phone_emergency`, `address`, `dob`, `doa`, `doj`, `education`, `skillset`, `prev_role`, `current_role`, `approval`) VALUES
('101', 'Paban', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'paban@simplisticsolutions.in', 12346, 6454, 'Colorado', '2016-11-23', '2016-11-16', '0000-00-00', 'regdgrg', 'gerer', 'ref', 'Junior Developer', 1),
('102', 'Phookan', '81dc9bdb52d04dc20036dbd8313ed055', 2, 'email@gmail.com', 111, 222, '', '2016-10-10', '2016-01-04', '0000-00-00', 'eng', 'cc', 'dev', '', 1),
('103', 'Chandan Das', '81dc9bdb52d04dc20036dbd8313ed055', 3, 'hghj@gmail.com', 0, 654646, 'Down town, Guwahati', '1992-06-06', '1993-06-06', '0000-00-00', 'B.Tech', 'Python', 'Developer', '', 1),
('105', NULL, '81dc9bdb52d04dc20036dbd8313ed055', 3, 'hghj@gmail.como', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
