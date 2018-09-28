CREATE TABLE IF NOT EXISTS `tab_transportation` (
  `id` int(10) NOT NULL,
  `vehicle_route` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `vehicle_number` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vehicle_capacity` int(10) DEFAULT NULL,
  `student_id` int(10) DEFAULT NULL,
  `pick_up_time` time DEFAULT NULL,
  `droppin_ time` time DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `region_id` int(10) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `tab_transportation` (`id`, `vehicle_route`, `vehicle_number`, `vehicle_capacity`, `student_id`, `pick_up_time`, `droppin_ time`, `created_date`, `region_id`) VALUES
(1, '', 'KA-1234', 100, NULL, NULL, NULL, '2018-09-28 18:25:15', 1);


CREATE TABLE IF NOT EXISTS `tab_region` (
  `id` int(10) NOT NULL,
  `region_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `tab_region` (`id`, `region_name`) VALUES
(1, 'NORTH'),
(2, 'EAST'),
(3, 'SOUTH'),
(4, 'WEST');
