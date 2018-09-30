ALTER TABLE `tab_transportation` DROP `vehicle_route`, DROP `pick_up_time`, DROP `droppin_ time`, DROP `student_id`;

INSERT INTO `tab_series`(`id`, `user_type`, `count`, `changed_datetime`) VALUES (1,2,101,'');

ALTER TABLE `tab_students` ADD `route_id` INT(10) NULL DEFAULT NULL AFTER `section_id`, ADD `pickup_time` TIME NULL DEFAULT NULL AFTER `route_id`, ADD `drop_time` TIME NULL DEFAULT NULL AFTER `pickup_time`;



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `tab_route_mapping` (
  `id` int(10) DEFAULT NULL,
  `vehicle_id` int(10) DEFAULT NULL,
  `route_name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `tab_route_mapping` (`id`, `vehicle_id`, `route_name`) VALUES
(1, 2, 'Ashok Nagar'),
(2, 3, 'Mahantesh nagar');


ALTER TABLE `tab_route_mapping`
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

