
CREATE TABLE IF NOT EXISTS `tab_class` (
  `id` int(50) NOT NULL DEFAULT '0',
  `count` int(10) NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_capacity` int(20) DEFAULT NULL,
  `class_number` int(20) DEFAULT NULL,
  `class_teacher_id` int(30) DEFAULT NULL,
  `class_starting_date` date DEFAULT NULL,
  `class_ending_date` date DEFAULT NULL,
  `class_location` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `class_section` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `tab_class` (`id`, `count`, `status`, `class_name`, `class_capacity`, `class_number`, `class_teacher_id`, `class_starting_date`, `class_ending_date`, `class_location`, `created_date`, `class_section`) VALUES
(1, 20, 'Active', 'I std', 25, 101, 1, '0000-00-00', '0000-00-00', '3rd Floor', '0000-00-00 00:00:00', 'A'),
(2, 1, 'Active', 'II std', 50, 102, 1, '2018-09-01', '2018-10-01', '4th Floor', '2018-09-01 05:34:13', 'B');