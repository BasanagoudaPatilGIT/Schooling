ALTER TABLE `tab_transportation` DROP `vehicle_route`, DROP `pick_up_time`, DROP `droppin_ time`, DROP `student_id`;

INSERT INTO `tab_series`(`id`, `user_type`, `count`, `changed_datetime`) VALUES (1,2,101,'');

ALTER TABLE `tab_students` ADD `route_id` INT(10) NULL DEFAULT NULL AFTER `section_id`, ADD `pickup_time` TIME NULL DEFAULT NULL AFTER `route_id`, ADD `drop_time` TIME NULL DEFAULT NULL AFTER `pickup_time`;