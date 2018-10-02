-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2018 at 01:31 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_management`
--
CREATE DATABASE IF NOT EXISTS `school_management` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `school_management`;

-- --------------------------------------------------------

--
-- Table structure for table `tab_basic`
--

CREATE TABLE IF NOT EXISTS `tab_basic` (
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `browser_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_access` datetime NOT NULL,
  `id` int(10) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- Table structure for table `tab_blood_group`
--

CREATE TABLE IF NOT EXISTS `tab_blood_group` (
  `id` int(10) DEFAULT NULL,
  `group_name` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_blood_group`
--

INSERT INTO `tab_blood_group` (`id`, `group_name`) VALUES
(1, 'A'),
(2, 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `tab_class`
--

CREATE TABLE IF NOT EXISTS `tab_class` (
  `id` int(50) NOT NULL DEFAULT '0',
  `class_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_class`
--

INSERT INTO `tab_class` (`id`, `class_name`) VALUES
(1, 'I Standard'),
(2, 'II Standard'),
(3, 'III Standard'),
(4, 'IV Standard'),
(5, 'V Standard'),
(6, 'VI Standard'),
(7, 'VII Standard'),
(8, 'VIII Standard'),
(9, 'IX Standard'),
(10, 'X Standard');

-- --------------------------------------------------------

--
-- Table structure for table `tab_country`
--

CREATE TABLE IF NOT EXISTS `tab_country` (
  `id` int(10) DEFAULT NULL,
  `country_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_country`
--

INSERT INTO `tab_country` (`id`, `country_name`) VALUES
(1, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `tab_parents`
--

CREATE TABLE IF NOT EXISTS `tab_parents` (
  `id` int(50) NOT NULL DEFAULT '0',
  `status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender_id` int(20) DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blood_group_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qualification` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profession` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `displaypicture` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `student_id` int(50) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_parents`
--

INSERT INTO `tab_parents` (`id`, `status`, `user_type`, `first_name`, `middle_name`, `last_name`, `email`, `date_of_birth`, `gender_id`, `phone`, `blood_group_id`, `qualification`, `profession`, `displaypicture`, `student_id`, `created_date`) VALUES
(1, 'Active', 'Parents', 'Ravish', 'C', 'Patil', 'tested@gmail.com', '1965-05-03', 1, '8282783829', '1', 'SSLC', 'Police', 'Capture.jpg', 1, '2018-10-01 23:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `tab_region`
--

CREATE TABLE IF NOT EXISTS `tab_region` (
  `id` int(10) NOT NULL,
  `region_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_region`
--

INSERT INTO `tab_region` (`id`, `region_name`) VALUES
(1, 'NORTH'),
(2, 'EAST'),
(3, 'SOUTH'),
(4, 'WEST');

-- --------------------------------------------------------

--
-- Table structure for table `tab_registration`
--

CREATE TABLE IF NOT EXISTS `tab_registration` (
  `id` int(10) NOT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ent_id` int(10) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `img_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(10) NOT NULL,
  `imei` int(15) NOT NULL,
  `pc_login` int(10) NOT NULL,
  `mobi_login` int(10) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_registration`
--

INSERT INTO `tab_registration` (`id`, `first_name`, `middle_name`, `last_name`, `user_type`, `email_id`, `username`, `password`, `ent_id`, `created_date`, `status`, `img_name`, `mobile_no`, `address`, `gender`, `imei`, `pc_login`, `mobi_login`) VALUES
(1, 'Basanagouda', 'D', 'Patil', '1', 'basupatil71@gmail.com', 'Basanagouda', 'NzI1OTk5OTI4Mg==', 1, '2018-07-31 10:56:03', 'Active', 'IMG11.jpg', '7259999282', 'H.No 336/2C Neelambhika Nivas\r\nQuality Buildings Panth nagar \r\nPanth Balekundri BK Belgaum - 591103\r\nState - Karnataka', 0, 0, 1, 0),
(2, 'Ramesh', 'R', 'Pujeri', '3', 'ganu@gmail.com', 'Basu7838483', 'MTIzNDU2Nzg=', 2, '2018-10-01 23:09:18', 'Active', 'Capture.jpg', '9876543234', 'iiufdhcskc', 1, 0, 0, 0),
(3, 'Ramesh', 'R', 'Pujeri', '3', 'ganu@gmail.com', 'Basu7838483', 'MTIzNDU2Nzg=', 3, '2018-10-01 23:13:41', 'Active', 'Capture.jpg', '9876543234', 'iiufdhcskc', 1, 0, 0, 0),
(4, 'Ramesh', 'R', 'Pujeri', '3', 'ganu@gmail.com', 'Basu7838483', 'MTIzNDU2Nzg=', 4, '2018-10-01 23:15:45', 'Active', 'Capture.jpg', '9876543234', 'iiufdhcskc', 1, 0, 0, 0),
(5, 'Ravish', 'C', 'Patil', '5', 'tested@gmail.com', 'User14253', 'MTIzNDU2Nzg=', 5, '2018-10-01 23:15:46', 'Active', 'Capture.jpg', '8282783829', 'iiufdhcskc', 1, 0, 0, 0),
(6, 'Ramesh', 'R', 'Pujeri', '3', 'ganu@gmail.com', 'Basu7838483', 'MTIzNDU2Nzg=', 6, '2018-10-01 23:21:57', 'Active', 'Capture.jpg', '9876543234', 'iiufdhcskc', 1, 0, 0, 0),
(7, 'Ravish', 'C', 'Patil', '5', 'tested@gmail.com', 'User14253', 'MTIzNDU2Nzg=', 7, '2018-10-01 23:21:57', 'Active', 'Capture.jpg', '8282783829', 'iiufdhcskc', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tab_route_mapping`
--

CREATE TABLE IF NOT EXISTS `tab_route_mapping` (
  `id` int(10) DEFAULT NULL,
  `vehicle_id` int(10) DEFAULT NULL,
  `route_name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_route_mapping`
--

INSERT INTO `tab_route_mapping` (`id`, `vehicle_id`, `route_name`) VALUES
(1, 2, 'Ashok Nagar'),
(2, 3, 'Mahantesh nagar');

-- --------------------------------------------------------

--
-- Table structure for table `tab_section`
--

CREATE TABLE IF NOT EXISTS `tab_section` (
  `id` int(50) NOT NULL DEFAULT '0',
  `count` int(10) NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` int(10) DEFAULT NULL,
  `class_capacity` int(20) DEFAULT NULL,
  `class_number` int(20) DEFAULT NULL,
  `class_location` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `class_section` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_section`
--

INSERT INTO `tab_section` (`id`, `count`, `status`, `class_id`, `class_capacity`, `class_number`, `class_location`, `created_date`, `class_section`) VALUES
(1, 2, 'Active', 1, 30, 101, '1st Floor', '2018-10-01 23:21:57', 'A'),
(2, 1, 'Active', 1, 30, 102, '1st Floor', '2018-09-01 05:34:13', 'B'),
(3, 1, 'Active', 2, 30, 103, '1st Floor', '2018-09-01 05:34:13', 'A'),
(4, 1, 'Active', 2, 30, 104, '1st Floor', '2018-09-01 05:34:13', 'B'),
(5, 1, 'Active', 3, 30, 201, '2nd Floor', '2018-09-01 05:34:13', 'A'),
(6, 1, 'Active', 3, 30, 202, '2nd Floor', '2018-09-01 05:34:13', 'B'),
(7, 1, 'Active', 4, 30, 203, '2nd Floor', '2018-09-01 05:34:13', 'A'),
(8, 1, 'Active', 4, 30, 204, '2nd Floor', '2018-09-01 05:34:13', 'B'),
(9, 1, 'Active', 5, 30, 301, '3rd Floor', '2018-09-01 05:34:13', 'A'),
(10, 1, 'Active', 5, 30, 302, '3rd Floor', '2018-09-01 05:34:13', 'B'),
(11, 1, 'Active', 6, 30, 303, '3rd Floor', '2018-09-29 18:04:48', 'A'),
(12, 1, 'Active', 6, 30, 304, '3rd Floor', '2018-09-29 18:45:05', 'B'),
(13, 1, 'Active', 7, 30, 401, '4st Floor', '2018-09-01 05:34:13', 'A'),
(14, 1, 'Active', 7, 30, 402, '4st Floor', '2018-09-01 05:34:13', 'B'),
(15, 1, 'Active', 8, 30, 403, '4st Floor', '2018-09-01 05:34:13', 'A'),
(16, 1, 'Active', 8, 30, 404, '4st Floor', '2018-09-01 05:34:13', 'B'),
(17, 1, 'Active', 9, 30, 501, '5st Floor', '2018-09-01 05:34:13', 'A'),
(18, 1, 'Active', 9, 30, 502, '5st Floor', '2018-09-01 05:34:13', 'B'),
(19, 1, 'Active', 10, 30, 503, '5st Floor', '2018-09-01 05:34:13', 'A'),
(20, 1, 'Active', 10, 30, 504, '5st Floor', '2018-09-01 05:34:13', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tab_series`
--

CREATE TABLE IF NOT EXISTS `tab_series` (
  `id` int(50) NOT NULL,
  `user_type` int(30) DEFAULT NULL,
  `count` int(50) DEFAULT NULL,
  `changed_datetime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_series`
--

INSERT INTO `tab_series` (`id`, `user_type`, `count`, `changed_datetime`) VALUES
(1, 4, 1005, '2018-09-27 15:24:07'),
(2, 3, 2, '2018-10-01 23:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `tab_sex`
--

CREATE TABLE IF NOT EXISTS `tab_sex` (
  `id` int(10) DEFAULT NULL,
  `gender_type` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_sex`
--

INSERT INTO `tab_sex` (`id`, `gender_type`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `tab_students`
--

CREATE TABLE IF NOT EXISTS `tab_students` (
  `id` int(50) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admission_no` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender_id` int(20) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_id` int(30) DEFAULT NULL,
  `zipcode` int(10) DEFAULT NULL,
  `per_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `per_city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `per_country_id` int(20) DEFAULT NULL,
  `per_zipcode` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blood_group_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_joining` date DEFAULT NULL,
  `date_of_leaving` date NOT NULL,
  `roll_num` int(50) DEFAULT NULL,
  `class_id` int(20) DEFAULT NULL,
  `section_id` int(10) NOT NULL,
  `route_id` int(10) DEFAULT NULL,
  `pickup_time` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drop_time` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `displaypicture` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_students`
--

INSERT INTO `tab_students` (`id`, `status`, `user_type`, `admission_no`, `first_name`, `middle_name`, `last_name`, `email`, `date_of_birth`, `gender_id`, `address`, `city`, `country_id`, `zipcode`, `per_address`, `per_city`, `per_country_id`, `per_zipcode`, `phone`, `blood_group_id`, `date_of_joining`, `date_of_leaving`, `roll_num`, `class_id`, `section_id`, `route_id`, `pickup_time`, `drop_time`, `displaypicture`, `created_date`) VALUES
(1, 'Active', 'Student', '2018 - 1', 'Ramesh', 'R', 'Pujeri', 'ganu@gmail.com', '1991-05-17', 1, 'H.No 336/2c Neelambhika nivas ', 'Belgaum', 1, 591103, 'iiufdhcskc', 'City123', 1, '637262', '9876543234', '1', '2018-10-01', '0000-00-00', 1, 1, 1, 2, '09:00 AM', '06:50 PM', 'Capture.jpg', '2018-10-01 23:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `tab_subjects`
--

CREATE TABLE IF NOT EXISTS `tab_subjects` (
  `id` int(10) DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` int(10) DEFAULT NULL,
  `sub_teacher_id` int(10) DEFAULT '0',
  `created_date_time` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_subjects`
--

INSERT INTO `tab_subjects` (`id`, `status`, `sub_name`, `class_id`, `sub_teacher_id`, `created_date_time`) VALUES
(1, 'Active', 'Science', 1, 4, '2018-09-28 13:23:54'),
(2, 'Active', 'Naaa', 1, 2, '2018-09-28 13:22:36'),
(3, 'Active', 'AAA', 1, 1, '2018-09-28 13:27:15'),
(4, 'Active', 'QQQ', 1, 1, '2018-09-27 18:28:04'),
(5, 'Active', 'Masths', 1, 3, '2018-09-28 13:27:08'),
(6, 'Active', 'Kannada', 1, 3, '2018-09-28 13:23:42'),
(7, 'Active', 'Kannada', 2, 2, '2018-09-28 13:19:11'),
(8, 'Active', 'Science', 2, 4, '2018-09-28 13:20:29'),
(9, 'Active', 'Maths', 2, 4, '2018-09-28 13:20:55'),
(10, 'Active', 'Hindi', 1, 2, '2018-09-29 14:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `tab_teachers`
--

CREATE TABLE IF NOT EXISTS `tab_teachers` (
  `id` int(50) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender_id` int(30) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_id` int(50) DEFAULT NULL,
  `zipcode` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blood_group_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qualification` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_joining` date DEFAULT NULL,
  `displaypicture` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_teachers`
--

INSERT INTO `tab_teachers` (`id`, `status`, `user_type`, `first_name`, `middle_name`, `last_name`, `email`, `date_of_birth`, `gender_id`, `address`, `city`, `country_id`, `zipcode`, `phone`, `blood_group_id`, `qualification`, `position`, `date_of_joining`, `displaypicture`, `emp_code`) VALUES
(1, 'Active', '4', 'Sunita', 'Ashwin', 'Kooli', 'sunita@gmail.com', '1998-12-19', 2, '#121,RB Road,Hasan', 'Hasan', 1, '500089', '4443332221', '1', 'M.Sc', 'Class Teacher', '2018-09-19', 'grass.jpg', 'Teacher - 1001'),
(2, 'Active', '4', 'Ashwin', 'Udaya', 'Patil', 'ashwin@gmail.com', '2018-09-12', 1, '#34,yagna building, Kodagu', 'Kodagu', 1, '500010', '5555566666', '2', 'M.Scccc', 'Class Teacher', '2018-10-04', 'animals-admin.jpg', 'Teacher - 1002'),
(3, 'Active', '4', 'Veena', 'C', 'ZA', 'veena@hm.com', '2018-09-26', 2, 'dgdtdtyt', 'kk', 1, '888888', '7777777777', '1', 'hh', 'Class Teacher', '2018-10-02', 'Capture.jpg', 'Teacher - 1003'),
(4, 'Active', '4', 'Vidya', 'Jai', 'simha', 'vidya@gmail.com', '2018-09-04', 2, '43,fdgdsff', 'cvbcvb', 1, '666666', '5555566666', '2', 'hhhhh', 'Class Teacherrrrrrrr', '2016-06-01', 'Capture.jpg', 'Teacher - 1004');

-- --------------------------------------------------------

--
-- Table structure for table `tab_teacher_assignment`
--

CREATE TABLE IF NOT EXISTS `tab_teacher_assignment` (
  `id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  `section_id` int(10) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_teacher_assignment`
--

INSERT INTO `tab_teacher_assignment` (`id`, `class_id`, `section_id`, `teacher_id`) VALUES
(1, 1, 1, 0),
(2, 2, 2, 0),
(3, 3, 3, 0),
(4, 4, 4, 0),
(5, 5, 5, 0),
(6, 6, 6, 0),
(7, 7, 7, 0),
(8, 8, 8, 0),
(9, 9, 9, 0),
(10, 10, 10, 0),
(11, 1, 11, 0),
(12, 2, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tab_transportation`
--

CREATE TABLE IF NOT EXISTS `tab_transportation` (
  `id` int(10) NOT NULL,
  `vehicle_number` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vehicle_capacity` int(10) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `region_id` int(10) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_transportation`
--

INSERT INTO `tab_transportation` (`id`, `vehicle_number`, `vehicle_capacity`, `created_date`, `region_id`) VALUES
(1, 'KA-1234', 100, '2018-09-28 18:25:15', 1),
(2, 'MH-3456', 50, '2018-09-30 12:09:34', 2),
(3, 'BA-6666', 40, '2018-09-30 12:13:53', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tab_user_type`
--

CREATE TABLE IF NOT EXISTS `tab_user_type` (
  `id` int(10) NOT NULL,
  `user_type_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_user_type`
--

INSERT INTO `tab_user_type` (`id`, `user_type_name`) VALUES
(1, 'Admin'),
(2, 'Principal'),
(3, 'Student'),
(4, 'Teacher'),
(5, 'Parent');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
