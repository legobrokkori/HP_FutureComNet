<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

INFO - 2016-01-10 00:11:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:11:02 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:11:02 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:11:02 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:11:02 --> Fuel\Core\Request::execute - Called
ERROR - 2016-01-10 00:11:03 --> Fatal Error - Call to a member function rows_limit() on array in /Users/lego/work/fuelphp/fuel/app/classes/controller/admin/applicants.php on line 25
INFO - 2016-01-10 00:11:07 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:11:07 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:11:07 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:11:07 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:11:07 --> Fuel\Core\Request::execute - Called
ERROR - 2016-01-10 00:11:07 --> Fatal Error - Call to a member function rows_limit() on array in /Users/lego/work/fuelphp/fuel/app/classes/controller/admin/applicants.php on line 25
INFO - 2016-01-10 00:11:37 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:11:37 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:11:37 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:11:37 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
ERROR - 2016-01-10 00:11:37 --> Parsing Error - syntax error, unexpected '$this' (T_VARIABLE) in /Users/lego/work/fuelphp/fuel/app/classes/controller/admin/applicants.php on line 30
INFO - 2016-01-10 00:12:20 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:12:20 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:12:20 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:12:20 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
ERROR - 2016-01-10 00:12:20 --> Parsing Error - syntax error, unexpected '$this' (T_VARIABLE) in /Users/lego/work/fuelphp/fuel/app/classes/controller/admin/applicants.php on line 30
INFO - 2016-01-10 00:12:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:12:32 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:12:32 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:12:32 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:12:32 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:27:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:27:47 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:27:47 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:27:47 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:27:47 --> Fuel\Core\Request::execute - Called
ERROR - 2016-01-10 00:27:47 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'applicants.id' in 'order clause' with query: "SELECT `t0`.`id` AS `t0_c0`, `t0`.`entrycategory` AS `t0_c1`, `t0`.`entrydate` AS `t0_c2`, `t0`.`occupation` AS `t0_c3`, `t0`.`applicant` AS `t0_c4`, `t0`.`applicantkana` AS `t0_c5`, `t0`.`sex` AS `t0_c6`, `t0`.`birthdate` AS `t0_c7`, `t0`.`age` AS `t0_c8`, `t0`.`postCode1` AS `t0_c9`, `t0`.`postCode2` AS `t0_c10`, `t0`.`adressprefectural` AS `t0_c11`, `t0`.`adressmunicipality` AS `t0_c12`, `t0`.`adressstreet` AS `t0_c13`, `t0`.`telno` AS `t0_c14`, `t0`.`mailadress` AS `t0_c15`, `t0`.`skillExcell` AS `t0_c16`, `t0`.`skillWord` AS `t0_c17`, `t0`.`skillPowerPoint` AS `t0_c18`, `t0`.`skillVisio` AS `t0_c19`, `t0`.`appealPoint` AS `t0_c20`, `t0`.`remarks` AS `t0_c21`, `t0`.`created_at` AS `t0_c22`, `t0`.`updated_at` AS `t0_c23`, `t1`.`id` AS `t1_c0`, `t1`.`name` AS `t1_c1` FROM `applicants` AS `t0` LEFT JOIN `entrycategory` AS `t1` ON (`t0`.`entrycategory` = `t1`.`id`) ORDER BY `applicants`.`id` DESC" in /Users/lego/work/fuelphp/fuel/core/classes/database/pdo/connection.php on line 272
INFO - 2016-01-10 00:28:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:28:47 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:28:47 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:28:47 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:28:47 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:30:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:30:12 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:30:12 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:30:12 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:30:12 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:30:35 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:30:35 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:30:35 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:30:35 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:30:35 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:30:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/2"
INFO - 2016-01-10 00:30:39 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:30:39 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:30:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-10 00:30:39 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:30:39 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:40:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:40:16 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:40:16 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:40:16 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:40:16 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:40:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:40:28 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:40:28 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:40:28 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:40:28 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:40:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/2"
INFO - 2016-01-10 00:40:32 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:40:32 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:40:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-10 00:40:32 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:40:32 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:41:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/2"
INFO - 2016-01-10 00:41:36 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:41:36 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:41:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-10 00:41:36 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:41:36 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:43:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:43:13 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:43:13 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:43:13 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:43:13 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:43:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:43:16 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:43:16 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:43:16 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:43:16 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:43:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:43:24 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:43:24 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:43:24 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:43:24 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:43:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:43:30 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:43:30 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:43:30 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:43:30 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:43:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/2"
INFO - 2016-01-10 00:43:33 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:43:33 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:43:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-10 00:43:33 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:43:33 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:43:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:43:49 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:43:49 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:43:49 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:43:49 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:46:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:46:41 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:46:41 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:46:41 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:46:41 --> Fuel\Core\Request::execute - Called
ERROR - 2016-01-10 00:46:41 --> Fatal Error - Method Fuel\Core\Pagination::__toString() must not throw an exception in /Users/lego/work/fuelphp/fuel/app/views/admin/template.php on line 0
INFO - 2016-01-10 00:46:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:46:52 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:46:52 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:46:52 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:46:52 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:46:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:46:58 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:46:58 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:46:58 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:46:58 --> Fuel\Core\Request::execute - Called
ERROR - 2016-01-10 00:46:58 --> Fatal Error - Method Fuel\Core\Pagination::__toString() must not throw an exception in /Users/lego/work/fuelphp/fuel/app/views/admin/template.php on line 0
INFO - 2016-01-10 00:47:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:47:04 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:47:04 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:47:04 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:47:04 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:47:07 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/2"
INFO - 2016-01-10 00:47:07 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:47:07 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:47:07 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-10 00:47:07 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:47:07 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:47:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/3"
INFO - 2016-01-10 00:47:11 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:47:11 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:47:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-10 00:47:11 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:47:11 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:51:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:51:45 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:51:45 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:51:46 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:51:46 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:52:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/2"
INFO - 2016-01-10 00:52:11 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:52:11 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:52:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-10 00:52:11 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:52:11 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:52:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/2"
INFO - 2016-01-10 00:52:17 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:52:17 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:52:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-10 00:52:17 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:52:17 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:52:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 00:52:27 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 00:52:27 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 00:52:27 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 00:52:27 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 01:02:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 01:02:24 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 01:02:24 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 01:02:25 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 01:02:25 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 01:02:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/2"
INFO - 2016-01-10 01:02:47 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 01:02:47 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 01:02:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-10 01:02:47 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 01:02:47 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:05:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 10:05:50 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:05:50 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:05:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/login"
INFO - 2016-01-10 10:05:50 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:05:50 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:05:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/login"
INFO - 2016-01-10 10:05:54 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:05:54 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:05:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 10:05:55 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:05:55 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:05:55 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 10:05:55 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:05:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/2"
INFO - 2016-01-10 10:05:59 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:05:59 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:05:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-10 10:05:59 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:05:59 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:06:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/2"
INFO - 2016-01-10 10:06:04 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:06:04 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:06:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-10 10:06:04 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:06:04 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:06:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 10:06:16 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:06:16 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:06:16 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 10:06:16 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:06:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/2"
INFO - 2016-01-10 10:06:24 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:06:24 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:06:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-10 10:06:24 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:06:24 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:06:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/1"
INFO - 2016-01-10 10:06:28 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:06:28 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:06:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-10 10:06:28 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:06:28 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:14:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin"
INFO - 2016-01-10 10:14:15 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:14:15 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:14:15 --> Fuel\Core\Request::__construct - Creating a new HMVC Request with URI = "admin/applicants"
INFO - 2016-01-10 10:14:15 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:15:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/applicants/view/0150"
INFO - 2016-01-10 10:15:02 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:15:02 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:19:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "admin/3"
INFO - 2016-01-10 10:19:26 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:19:26 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2016-01-10 10:19:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2016-01-10 10:19:26 --> Fuel\Core\Request::execute - Called
INFO - 2016-01-10 10:19:26 --> Fuel\Core\Request::execute - Setting main Request
