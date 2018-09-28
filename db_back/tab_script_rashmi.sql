-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 12:35 PM
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
-- Table structure for table `tab_transportation`
--

CREATE TABLE `tab_transportation` (
  `id` int(10) NOT NULL,
  `vehicle_route` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `vehicle_number` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vehicle_capacity` int(10) DEFAULT NULL,
  `student_id` int(10) DEFAULT NULL,
  `pick_up_time` time DEFAULT NULL,
  `droppin_ time` time DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_transportation`
--

INSERT INTO `tab_transportation` (`id`, `vehicle_route`, `vehicle_number`, `vehicle_capacity`, `student_id`, `pick_up_time`, `droppin_ time`, `created_date`) VALUES
(1, 'Rajaji Nagar', 'KA-1234', 30, NULL, NULL, NULL, '2018-09-28 12:34:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_transportation`
--
ALTER TABLE `tab_transportation`
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
