-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2019 at 12:27 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamidlemar`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_fee` bigint(20) DEFAULT '0',
  `received_amount` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `phone`, `poc`, `total_fee`, `received_amount`, `created_at`, `updated_at`) VALUES
(1, 'e', 'r', '4', 'f', 0, 0, '2019-10-07 03:28:20', '2019-10-07 03:28:20'),
(2, 'amt_admin', 'khair khana, kabul', '0791643460', 'f', 0, 0, '2019-10-07 03:28:35', '2019-10-07 03:28:35'),
(3, 'amt_admin', 'karte naw', '0791643460', 'f', 0, 0, '2019-10-07 03:38:36', '2019-10-07 03:38:36'),
(4, 'amt_admin', 'مارکیت', '0791643460', 'f', 0, 0, '2019-10-07 04:36:24', '2019-10-07 04:36:24'),
(5, 'Someone', 'چهل متره', '0791643460', 'f', 0, 0, '2019-10-07 10:57:40', '2019-10-07 10:57:40'),
(6, 'test', 'test', '0791643460', 'f', 0, 0, '2019-10-18 02:52:36', '2019-10-18 02:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `daily_expenses`
--

DROP TABLE IF EXISTS `daily_expenses`;
CREATE TABLE IF NOT EXISTS `daily_expenses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `daily_expenses_staff_id_foreign` (`staff_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_expenses`
--

INSERT INTO `daily_expenses` (`id`, `staff_id`, `amount`, `date`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 12, '2019-10-04', '12', '2019-10-18 23:53:51', '2019-10-18 23:53:51'),
(2, 2, 344, '2019-10-10', 'sgfrsdfg', '2019-10-18 23:54:16', '2019-10-18 23:54:16');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `part_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `part_number`, `item_location`, `description`, `created_at`, `updated_at`) VALUES
(1, 'PORZA', '', '', 'NEW POZAA', '2019-10-07 11:25:25', '2019-10-07 11:25:25'),
(2, 'another item', '', '', 'good item', '2019-10-07 11:28:37', '2019-10-07 11:28:37'),
(3, 'new porza', '', '', 'h', '2019-10-18 01:07:28', '2019-10-18 01:07:28'),
(4, 'new test', 'A5', 'gg', 'a,jfdsn', '2019-10-18 02:41:01', '2019-10-18 02:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_06_112149_create_customers_table', 1),
(4, '2019_10_07_101606_create_items_table', 2),
(5, '2019_10_07_161257_create_stocks_table', 3),
(6, '2019_10_18_072809_create_staff_table', 4),
(7, '2019_10_18_082758_create_daily_expenses_table', 5),
(8, '2019_10_19_051224_create_recevied_orders_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recevied_orders`
--

DROP TABLE IF EXISTS `recevied_orders`;
CREATE TABLE IF NOT EXISTS `recevied_orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `recevied_orders_customer_id_foreign` (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recevied_orders`
--

INSERT INTO `recevied_orders` (`id`, `customer_id`, `order_number`, `order_date`, `items`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 2, '8', '2019-10-12', '[\"4\"]', '{\"4\":\"77\"}', '2019-10-19 07:04:17', '2019-10-19 07:04:17'),
(2, 4, '17', '2019-10-24', '[\"1\",\"3\"]', '{\"3\":\"66\",\"1\":\"78\"}', '2019-10-19 07:04:56', '2019-10-19 07:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'sajad', 4, '2019-10-18 03:21:32', '2019-10-18 03:21:32'),
(2, 'cdfsda', 45, '2019-10-18 03:21:40', '2019-10-18 03:21:40'),
(3, 'fsd', 43, '2019-10-18 03:55:14', '2019-10-18 03:55:14'),
(4, 'fsd', 43, '2019-10-18 03:55:15', '2019-10-18 03:55:15'),
(5, 'fsd', 43, '2019-10-18 03:55:15', '2019-10-18 03:55:15'),
(6, 'fsd', 43, '2019-10-18 03:55:16', '2019-10-18 03:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

DROP TABLE IF EXISTS `stocks`;
CREATE TABLE IF NOT EXISTS `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `part_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `buy_amount` int(11) NOT NULL,
  `sale_amount` int(11) NOT NULL,
  `item_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stocks_item_id_foreign` (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `item_id`, `part_number`, `quantity`, `buy_amount`, `sale_amount`, `item_location`, `details`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, '12', 12, 5, 23, 'w', 'sd', '2121-12-12', '2019-10-08 12:06:43', '2019-10-08 12:06:43'),
(2, 4, NULL, 1200, 250, 306, NULL, 'sdfa', '2019-10-04', '2019-10-18 02:45:12', '2019-10-18 02:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
