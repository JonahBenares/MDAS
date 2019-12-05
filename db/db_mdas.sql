-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 01:27 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_mdas`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
`company_id` int(11) NOT NULL,
  `company_name` varchar(150) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`) VALUES
(1, 'Central Negros Power Reliability Inc.'),
(2, 'Energreen Power Inter-Island Corp.'),
(3, 'PROGEN Deiseltech'),
(4, 'Mindoro Harvest Energy Corp.');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
`department_id` int(11) NOT NULL,
  `department_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'Accounting Department'),
(2, 'IT Department'),
(3, 'Human Resource Department'),
(4, 'Finance Department'),
(5, 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
`employee_id` int(11) NOT NULL,
  `employee_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `employee_name`) VALUES
(1, 'Jonah Faye Benares'),
(2, 'Hennelen Tanan'),
(3, 'Mila Arana'),
(4, 'Syndey Sinoro'),
(5, 'Zyndyryn Rosales'),
(6, 'Maylen Cabaylo'),
(7, 'Stephine Severino'),
(8, 'Jason Flor');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
`location_id` int(11) NOT NULL,
  `location_name` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`) VALUES
(2, 'Bacolod'),
(3, 'Calapan'),
(4, 'Manila');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `employee_id` int(11) NOT NULL DEFAULT '0',
  `company_id` int(11) NOT NULL DEFAULT '0',
  `department_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `email` varchar(100) DEFAULT NULL,
  `usertype` int(11) NOT NULL DEFAULT '0' COMMENT '1=admin, 2=head, 3=employee'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`, `employee_id`, `company_id`, `department_id`, `status`, `email`, `usertype`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 0, 1, 1, 1, NULL, 1),
(2, 'hen', 'e811af40e80c396fb9dd59c45a1c9ce5', 'Hennelen Tanan', 0, 2, 3, 1, NULL, 2),
(3, 'jason', 'd38e99d9790733c939e88698afbc30b6', 'Jason Flor', 0, 3, 4, 2, 'jasonflor.cenpri@gmail.com', 2),
(4, 'tep', 'e6893ef750669444cb220cd64888e617', 'Stephine David Severino', 0, 4, 1, 2, NULL, 2),
(6, 'jonah', '827ccb0eea8a706c4c34a16891f84e7b ', 'Jonah Faye Benares', 0, 1, 2, 1, 'jonahbenares.cenpri@gmail.com', 2),
(7, 'lloyd', '344c8024766ac77d11d5346b85cab6ad', 'Lloyd Jamero', 0, 1, 2, 1, 'lloyd@gmail.com', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
 ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
 ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
 ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
