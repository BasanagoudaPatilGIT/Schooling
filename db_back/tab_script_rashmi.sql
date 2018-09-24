-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2018 at 02:14 PM
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
('Basanagouda Patil', 'Chrome;69.0.3497.100;;Windows 7', '2018-09-24 09:54:47', 13);

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
  `id` int(50) DEFAULT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_capacity` int(20) DEFAULT NULL,
  `class_number` int(20) DEFAULT NULL,
  `class_teacher_id` int(30) DEFAULT NULL,
  `class_starting_date` date DEFAULT NULL,
  `class_ending_date` date DEFAULT NULL,
  `class_location` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_class`
--

INSERT INTO `tab_class` (`id`, `status`, `class_name`, `class_capacity`, `class_number`, `class_teacher_id`, `class_starting_date`, `class_ending_date`, `class_location`, `created_date`) VALUES
(1, 'Active', 'A', 25, 3, 5, '0000-00-00', '0000-00-00', 'Belgaum', '0000-00-00 00:00:00');

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
-- Table structure for table `tab_parents`
--

CREATE TABLE `tab_parents` (
  `id` int(50) DEFAULT NULL,
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

--
-- Dumping data for table `tab_parents`
--

INSERT INTO `tab_parents` (`id`, `status`, `user_type`, `first_name`, `middle_name`, `last_name`, `email`, `date_of_birth`, `gender_id`, `phone`, `blood_group_id`, `qualification`, `profession`, `displaypicture`, `student_id`, `created_date`) VALUES
(1, 'Active', '5', 'Shiva', 'Hanumanth', 'Singh', 'shiva@gmail.com', '1978-10-25', 1, '6666666666', '1', 'B.A', 'Farmer', 'maleimg3.jpg', 1, '2018-09-24 14:34:04');

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
(1, 'Basanagouda', 'D', 'Patil', '1', 'basupatil71@gmail.com', 'Basanagouda', 'NzI1OTk5OTI4Mg==', 1, '2018-07-31 10:56:03', 'Active', 'IMG11.jpg', '7259999282', 'H.No 336/2C Neelambhika Nivas\r\nQuality Buildings Panth nagar \r\nPanth Balekundri BK Belgaum - 591103\r\nState - Karnataka', 0, 0, 1, 0),
(2, 'Rani', 'Shiva', 'singh', '3', 'rani@gmail.com', 'rani123', 'MTIzNDU2Nzg=', 2, '2018-09-24 14:34:04', 'Active', 'img1.jpg', '8889990000', '#33,JP Nagar Bangalore', 2, 0, 0, 0),
(3, 'Shiva', 'Hanumanth', 'Singh', '5', 'shiva@gmail.com', 'shiva123', 'MTIzNDU2Nzg=', 3, '2018-09-24 14:34:04', 'Active', 'maleimg3.jpg', '6666666666', '#33,JP Nagar Bangalore', 1, 0, 0, 0),
(4, 'Savita', 'V', 'gouda', '4', 'savita@gmail.com', 'savita123', 'MTIzNDU2Nzg=', 4, '2018-09-24 17:21:23', 'Active', 'img1.jpg', '3333333333', '#13,Raadev galli,Shapur', 2, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tab_series`
--

CREATE TABLE `tab_series` (
  `id` int(50) NOT NULL,
  `user_type` int(30) DEFAULT NULL,
  `count` int(50) DEFAULT NULL,
  `modified_datetime` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_series`
--

INSERT INTO `tab_series` (`id`, `user_type`, `count`, `modified_datetime`) VALUES
(1, 4, 1003, '0000-00-00 00:00:00');

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
  `per_city` int(20) DEFAULT NULL,
  `per_country_id` int(20) DEFAULT NULL,
  `per_zipcode` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blood_group_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_joining` date DEFAULT NULL,
  `roll_num` int(50) DEFAULT NULL,
  `class_id` int(20) DEFAULT NULL,
  `displaypicture` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_students`
--

INSERT INTO `tab_students` (`id`, `status`, `user_type`, `first_name`, `middle_name`, `last_name`, `email`, `date_of_birth`, `gender_id`, `address`, `city`, `country_id`, `zipcode`, `per_address`, `per_city`, `per_country_id`, `per_zipcode`, `phone`, `blood_group_id`, `date_of_joining`, `roll_num`, `class_id`, `displaypicture`, `created_date`) VALUES
(1, 'Active', '3', 'Rani', 'Shiva', 'singh', 'rani@gmail.com', '1998-12-09', 2, '#33,JP Nagar Bangalore', 'Bangalore', 1, 530000, '#33,JP Nagar Bangalore', 0, 1, '530000', '8889990000', '2', '2011-06-01', 1, 1, 'img1.jpg', '2018-09-24 14:34:04');

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
  `emp_code` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_teachers`
--

INSERT INTO `tab_teachers` (`id`, `status`, `user_type`, `first_name`, `middle_name`, `last_name`, `email`, `date_of_birth`, `gender_id`, `address`, `city`, `country_id`, `zipcode`, `phone`, `blood_group_id`, `qualification`, `position`, `date_of_joining`, `displaypicture`, `emp_code`) VALUES
(1, 'Active', '4', 'Savita', 'V', 'gouda', 'savita@gmail.com', '1985-06-11', 2, '#13,Raadev galli,Shapur', 'Gulbarga', 1, '450000', '3333333333', '2', 'M.Sc', 'Class Teacher', '2017-06-20', 'img1.jpg', 1002);

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
-- Indexes for table `tab_registration`
--
ALTER TABLE `tab_registration`
  ADD UNIQUE KEY `id` (`id`);

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
-- Indexes for table `tab_teachers`
--
ALTER TABLE `tab_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_user_type`
--
ALTER TABLE `tab_user_type`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
