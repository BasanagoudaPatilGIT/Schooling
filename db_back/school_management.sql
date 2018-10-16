-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 01:37 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_basic`
--

CREATE TABLE `tab_basic` (
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `browser_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_access` datetime NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_basic`
--

INSERT INTO `tab_basic` (`user_id`, `browser_name`, `last_access`, `id`) VALUES
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 10', '2018-09-21 07:09:07', 1),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 10', '2018-09-21 07:19:37', 2),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 10', '2018-09-21 07:27:26', 3),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 10', '2018-09-21 08:55:31', 4),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 10', '2018-09-21 09:13:42', 5),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 10', '2018-09-21 09:22:23', 6),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 10', '2018-09-21 09:36:04', 7),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-09-23 09:41:03', 8),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-09-23 12:14:04', 9),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-09-23 13:49:36', 10),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-09-23 16:48:35', 11),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-09-24 08:18:13', 12),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-09-24 09:54:47', 13),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-09-24 18:49:01', 14),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-09-25 07:00:33', 15),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-09-26 07:15:11', 16),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-09-26 16:18:21', 17),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-09-27 11:44:07', 18),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-09-27 18:28:38', 19),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 10', '2018-09-28 09:37:49', 20),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 10', '2018-09-29 06:05:12', 21),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 10', '2018-09-29 06:27:57', 22),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 10', '2018-09-29 07:23:00', 23),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-09-30 08:00:40', 24),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-09-30 12:23:45', 25),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-09-30 15:32:15', 26),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 10', '2018-10-01 12:41:17', 27),
('Nagamma yoga', 'Chrome;69.0.3497.100;;Windows 10', '2018-10-01 12:52:43', 28),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 10', '2018-10-01 12:55:35', 29),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-10-10 10:41:40', 30),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-10-10 10:44:12', 31),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-10-10 13:03:32', 32),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-10-10 17:28:40', 33),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-10-11 08:31:05', 34),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-10-11 11:54:52', 35),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-10-11 12:00:24', 36),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-10-15 09:35:18', 37),
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-10-16 10:42:20', 38);

-- --------------------------------------------------------

--
-- Table structure for table `tab_blood_group`
--

CREATE TABLE `tab_blood_group` (
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

CREATE TABLE `tab_class` (
  `id` int(50) NOT NULL DEFAULT '0',
  `class_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
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

CREATE TABLE `tab_country` (
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
-- Table structure for table `tab_event`
--

CREATE TABLE `tab_event` (
  `id` int(10) DEFAULT NULL,
  `event_created_by` int(10) DEFAULT NULL,
  `event_name` varchar(30) DEFAULT NULL,
  `about_event` varchar(255) DEFAULT NULL,
  `created_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_event`
--

INSERT INTO `tab_event` (`id`, `event_created_by`, `event_name`, `about_event`, `created_date_time`, `created_date`) VALUES
(1, 1, 'Dasara', 'dhandiya', '2018-10-16 15:33:51', '2018-10-16'),
(2, 1, 'Flag hosting', 'Pared', '2018-10-16 16:09:40', '2018-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `tab_event_images`
--

CREATE TABLE `tab_event_images` (
  `id` int(10) DEFAULT NULL,
  `event_id` int(10) DEFAULT NULL,
  `image_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_event_images`
--

INSERT INTO `tab_event_images` (`id`, `event_id`, `image_name`) VALUES
(1, 1, 'chicken.jpg'),
(2, 1, 'food1.jpg'),
(3, 1, 'food2.jpg'),
(4, 1, 'food3.jpg'),
(5, 1, 'product.jpg'),
(6, 2, '4.jpg'),
(7, 2, '2.jpg'),
(8, 2, '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tab_parents`
--

CREATE TABLE `tab_parents` (
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
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tab_region`
--

CREATE TABLE `tab_region` (
  `id` int(10) NOT NULL,
  `region_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL
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

CREATE TABLE `tab_registration` (
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
  `mobi_login` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_registration`
--

INSERT INTO `tab_registration` (`id`, `first_name`, `middle_name`, `last_name`, `user_type`, `email_id`, `username`, `password`, `ent_id`, `created_date`, `status`, `img_name`, `mobile_no`, `address`, `gender`, `imei`, `pc_login`, `mobi_login`) VALUES
(1, 'Basanagouda', 'D', 'Patil', '1', 'basupatil71@gmail.com', 'Basanagouda', 'NzI1OTk5OTI4Mg==', 1, '2018-07-31 10:56:03', 'Active', 'IMG11.jpg', '7259999282', 'H.No 336/2C Neelambhika Nivas\r\nQuality Buildings Panth nagar \r\nPanth Balekundri BK Belgaum - 591103\r\nState - Karnataka', 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tab_route_mapping`
--

CREATE TABLE `tab_route_mapping` (
  `id` int(10) DEFAULT NULL,
  `vehicle_id` int(10) DEFAULT NULL,
  `route_name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
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

CREATE TABLE `tab_section` (
  `id` int(50) NOT NULL DEFAULT '0',
  `count` int(10) NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` int(10) DEFAULT NULL,
  `class_capacity` int(20) DEFAULT NULL,
  `class_number` int(20) DEFAULT NULL,
  `class_location` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `class_section` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_section`
--

INSERT INTO `tab_section` (`id`, `count`, `status`, `class_id`, `class_capacity`, `class_number`, `class_location`, `created_date`, `class_section`) VALUES
(1, 1, 'Active', 1, 30, 101, '1st Floor', '2018-10-01 18:32:29', 'A'),
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

CREATE TABLE `tab_series` (
  `id` int(50) NOT NULL,
  `user_type` int(30) DEFAULT NULL,
  `count` int(50) DEFAULT NULL,
  `changed_datetime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_series`
--

INSERT INTO `tab_series` (`id`, `user_type`, `count`, `changed_datetime`) VALUES
(1, 4, 1005, '2018-09-27 15:24:07'),
(2, 3, 1, '2018-10-01 18:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `tab_sex`
--

CREATE TABLE `tab_sex` (
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

CREATE TABLE `tab_students` (
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
  `pickup_time` time DEFAULT NULL,
  `drop_time` time DEFAULT NULL,
  `displaypicture` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tab_subjects`
--

CREATE TABLE `tab_subjects` (
  `id` int(10) DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` int(10) DEFAULT NULL,
  `sub_teacher_id` int(10) DEFAULT '0',
  `created_date_time` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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

CREATE TABLE `tab_teachers` (
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
  `emp_code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
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

CREATE TABLE `tab_teacher_assignment` (
  `id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  `section_id` int(10) NOT NULL,
  `teacher_id` int(10) NOT NULL
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

CREATE TABLE `tab_transportation` (
  `id` int(10) NOT NULL,
  `vehicle_number` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vehicle_capacity` int(10) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `region_id` int(10) NOT NULL
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

CREATE TABLE `tab_user_type` (
  `id` int(10) NOT NULL,
  `user_type_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_basic`
--
ALTER TABLE `tab_basic`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tab_class`
--
ALTER TABLE `tab_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_event`
--
ALTER TABLE `tab_event`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tab_event_images`
--
ALTER TABLE `tab_event_images`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tab_parents`
--
ALTER TABLE `tab_parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_region`
--
ALTER TABLE `tab_region`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tab_registration`
--
ALTER TABLE `tab_registration`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tab_route_mapping`
--
ALTER TABLE `tab_route_mapping`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tab_section`
--
ALTER TABLE `tab_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_series`
--
ALTER TABLE `tab_series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_students`
--
ALTER TABLE `tab_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_subjects`
--
ALTER TABLE `tab_subjects`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tab_teachers`
--
ALTER TABLE `tab_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_teacher_assignment`
--
ALTER TABLE `tab_teacher_assignment`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tab_transportation`
--
ALTER TABLE `tab_transportation`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tab_user_type`
--
ALTER TABLE `tab_user_type`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
