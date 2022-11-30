-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2022 at 05:48 AM
-- Server version: 5.7.36
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcw`
--

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `sub_title` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `photo` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `create_by` int(3) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `create_by` (`create_by`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `start_date`, `end_date`, `url`, `photo`, `status`, `create_by`, `created_at`, `updated_at`) VALUES
(1, 'title ', 'sub title', '2022-11-27', '2023-11-28', 'http://localhost/dcw/', '271122093857.jpg', 1, 1, '2022-11-26 03:59:27', '2022-11-26 03:59:27'),
(2, 'title', 'sub title', '2022-11-27', '2023-11-28', 'http://localhost/dcw/', '271122093817.jpg', 1, 1, '2022-11-23 08:20:05', '2022-11-23 08:20:05'),
(13, 'title', 'sub title', '2022-11-26', '2022-11-27', 'http://localhost/dcw/', '271122093924.jpg', 1, 1, '2022-11-27 09:39:24', '2022-11-27 09:39:24'),
(14, 'title', 'sub title', '2022-11-13', '2022-11-25', 'http://localhost/dcw/', '271122094710.jpg', 1, 1, '2022-11-27 09:47:10', '2022-11-27 09:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `token` varchar(150) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `photo`, `status`, `token`, `email_verified_at`, `createtime`, `updatetime`) VALUES
(1, 'kawsar ahmed', 'kawsarahmed1512@gmail.com', '$2y$10$echBo.FBIE67NSGS3rzXkuyEyv7CU74UXeZ22Qsmk1pyhY3GkwMQy', NULL, 1, '638321b06f76e', NULL, '2022-11-21 04:59:59', '2022-11-27 08:37:30'),
(5, 'ashif hossain', 'admin@gmail.com', '$2y$10$zVEX0xt/HpolF80PxlYB7u2uqXMAunf426pwaoEnrDuju4yv0o6LG', NULL, 0, NULL, NULL, '2022-11-23 06:40:03', '2022-11-23 06:40:03'),
(6, 'ashif hossain', 'bdadmin@gmail.com', '$2y$10$bPvuhq3dgHhI69/2D68oF.NfQqJaxCiRd9vYiCz/iA8vepwoY9oue', NULL, 0, NULL, NULL, '2022-11-23 10:25:29', '2022-11-23 10:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `works_items`
--

DROP TABLE IF EXISTS `works_items`;
CREATE TABLE IF NOT EXISTS `works_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(3) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `create_by` int(3) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `create_by` (`create_by`),
  KEY `menu_id` (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `works_items`
--

INSERT INTO `works_items` (`id`, `menu_id`, `title`, `photo`, `status`, `create_by`, `created_at`, `updated_at`) VALUES
(1, 11, 'title', '261122051702.jpg', 1, 1, '2022-11-26 17:17:02', '2022-11-26 17:17:02'),
(3, 13, 'title', '261122052116.jpg', 1, 1, '2022-11-26 17:21:16', '2022-11-26 17:21:16'),
(4, 12, 'title', '271122101910.jpg', 1, 1, '2022-11-27 10:19:10', '2022-11-27 10:19:10'),
(6, 12, 'test', '271122102556.jpg', 1, 1, '2022-11-27 10:25:56', '2022-11-27 10:25:56'),
(7, 9, 'test', '271122102613.jpg', 1, 1, '2022-11-27 10:26:13', '2022-11-27 10:26:13'),
(8, 11, 'titl', '271122102643.jpg', 1, 1, '2022-11-27 10:26:43', '2022-11-27 10:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `works_menu`
--

DROP TABLE IF EXISTS `works_menu`;
CREATE TABLE IF NOT EXISTS `works_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `slug` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `create_by` int(3) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `create_by` (`create_by`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `works_menu`
--

INSERT INTO `works_menu` (`id`, `name`, `slug`, `status`, `create_by`, `created_at`, `updated_at`) VALUES
(9, 'web development', 'web-development', 1, 1, '2022-11-26 12:40:26', '2022-11-26 12:40:26'),
(10, 'html', 'html', 1, 1, '2022-11-26 12:40:28', '2022-11-26 12:40:28'),
(11, 'css', 'css', 1, 1, '2022-11-26 12:40:30', '2022-11-26 12:40:30'),
(12, 'java script', 'java-script', 1, 1, '2022-11-26 12:40:33', '2022-11-26 12:40:33'),
(13, 'java', 'java', 1, 1, '2022-11-26 17:06:55', '2022-11-26 17:06:55');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_ibfk_1` FOREIGN KEY (`create_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `works_items`
--
ALTER TABLE `works_items`
  ADD CONSTRAINT `works_items_ibfk_1` FOREIGN KEY (`create_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `works_items_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `works_menu` (`id`);

--
-- Constraints for table `works_menu`
--
ALTER TABLE `works_menu`
  ADD CONSTRAINT `works_menu_ibfk_1` FOREIGN KEY (`create_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
