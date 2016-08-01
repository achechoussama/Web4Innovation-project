-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2016 at 01:16 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 7.0.9-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web4i`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_assoc_sw`
--

CREATE TABLE `t_assoc_sw` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_assoc_sw`
--

INSERT INTO `t_assoc_sw` (`id`, `name`, `description`, `logo`, `website`) VALUES
(1, 'nutella', 'description', 'logo', 'site.com');

-- --------------------------------------------------------

--
-- Table structure for table `t_project`
--

CREATE TABLE `t_project` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `budget` int(11) NOT NULL,
  `deadline` datetime DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `document` varchar(50) NOT NULL,
  `assoc_sw_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_project`
--

INSERT INTO `t_project` (`id`, `name`, `description`, `budget`, `deadline`, `status`, `document`, `assoc_sw_id`) VALUES
(8, 'title', 'description', 50, '2015-11-24 10:24:24', 'status', 'document', 1),
(9, 'asd', 'adfs', 50, '2015-11-24 10:24:24', 'draft', 'document', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_submission`
--

CREATE TABLE `t_submission` (
  `id` int(11) NOT NULL,
  `bid` double DEFAULT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_assoc_sw`
--
ALTER TABLE `t_assoc_sw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_project`
--
ALTER TABLE `t_project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_assoc` (`assoc_sw_id`);

--
-- Indexes for table `t_submission`
--
ALTER TABLE `t_submission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_project` (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_assoc_sw`
--
ALTER TABLE `t_assoc_sw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_project`
--
ALTER TABLE `t_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `t_submission`
--
ALTER TABLE `t_submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_project`
--
ALTER TABLE `t_project`
  ADD CONSTRAINT `t_project_ibfk_1` FOREIGN KEY (`assoc_sw_id`) REFERENCES `t_assoc_sw` (`id`);

--
-- Constraints for table `t_submission`
--
ALTER TABLE `t_submission`
  ADD CONSTRAINT `t_submission_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `t_project` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
