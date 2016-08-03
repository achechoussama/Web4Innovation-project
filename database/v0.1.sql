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

CREATE TABLE `t_assoc_sw`
(
`id_assoc_sw`       INTEGER       AUTO_INCREMENT          PRIMARY KEY ,
`name`              VARCHAR(50)                               NOT NULL,
`description`       VARCHAR(255),
`logo`              VARCHAR(50),
`website`           VARCHAR(50)
);


--
-- Dumping data for table `t_assoc_sw`
--

INSERT INTO `t_assoc_sw` (`id`, `name`, `description`, `logo`, `website`) VALUES
(1, 'nutella', 'description', 'logo', 'site.com');

-- --------------------------------------------------------

--
-- Table structure for table `t_project`
--

CREATE TABLE `t_project`
(
`id_project`           INTEGER           AUTO_INCREMENT           PRIMARY KEY ,
`name`                 VARCHAR(50) 							      NOT NULL,
`description`          VARCHAR(255)     						  NOT NULL,
`budget`               NUMBER, 									
`deadline`             DATETIME									
`status`               VARCHAR(50),
`document`             VARCHAR(50),
`assoc_sw_id`          int,

FOREIGN KEY (`assoc_sw_id`) REFERENCES `t_assoc_sw`(`id_assoc_sw`)
);

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

CREATE TABLE `t_submission`
(
`id_submission`         INTEGER     AUTO_INCREMENT      PRIMARY KEY ,
`bid`                   NUMBER ,
`project_id`            int ,
`submission_date`      DATETIME,

FOREIGN KEY (`project_id`) REFERENCES `t_project`(`id_project`)
);

-- --------------------------------------------------------

--
-- Table structure for table `t_login`
--




CREATE TABLE `user`
(
`id`                INTEGER         AUTO_INCREMENT        Primary key ,
`type`           VARCHAR(50)		NOT NULL 			check in ("assoc_sw","student"),
`login`			varchar(40)			NOT NULL,
`pwd`                 VARCHAR(50)	NOT NULL	
);

-- --------------------------------------------------------

--
-- Table structure for table `t_studiant`
--


CREATE TABLE `t_student`
(
  `id_student`        INTEGER        AUTO_INCREMENT            PRIMARY key ,
  `name_student`      varchar(40)                                  Not NULL,
  `surname_student`   varchar(40)                                  NOT NULL,
  `email`              varchar(40)                                  NOT NULL,
  `school`              varchar(40)                                  NOT NULL       check in ("ENSI","ESPRIT","ENISO")
 );


-- --------------------------------------------------------

--
-- Table structure for table `t_task`
--


CREATE TABLE `t_task`
(
  `id_task`        				INTEGER        AUTO_INCREMENT           	 	PRIMARY key ,
  `name_task`      				varchar(40)                                  	Not NULL,
  `description`   				varchar(40)                                  	NOT NULL,
  `start_date`            		DATETIME										NOT NULL,
  `end_date`            		DATETIME                                        NOT NULL,      
 `comments`			 			VARCHAR(255),
 `hour_number`					NUMBER											NOT NULL,
 `project_id`					NUMBER,
 


 FOREIGN KEY (`project_id`) REFERENCES `t_project`(`id_project`)

 );

- --------------------------------------------------------

--
-- Table structure for table `t_team`
--
 





- --------------------------------------------------------

--
-- Table structure for table `t_task`
--

CREATE TABLE `affectation`
(
 `affectation_id`	NUMBER 		AUTO_INCREMENT		PRIMARY KEY,
 `student_id`		NUMBER,
 `project_id`       NUMBER,




 FOREIGN KEY (`project_id`) REFERENCES `t_project`(`id_project`),
 FOREIGN KEY (`student_id`) REFERENCES `t_student`(`id_student`)

);


.