-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 09, 2023 at 08:32 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myedu`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `cart_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `carts_course_id_index` (`course_id`),
  KEY `carts_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

DROP TABLE IF EXISTS `cart_details`;
CREATE TABLE IF NOT EXISTS `cart_details` (
  `cart_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cart_details_id`),
  KEY `cart_details_cart_id_foreign` (`cart_id`),
  KEY `cart_details_course_id_foreign` (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `course_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`course_id`),
  UNIQUE KEY `course_course_id_unique` (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `created_at`, `updated_at`, `course_name`, `course_description`, `subject`, `teacher_name`, `price`, `status`, `course_img`) VALUES
(2, '2023-07-08 05:00:25', '2023-07-08 05:00:37', 'cs', '\"cs\"', 'cs', 'ratana', 12, 0, 'OnlinePayU-removebg-preview.png');

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_06_28_150218_create_myedus_table', 1),
(4, '2023_07_04_174559_cart', 1),
(5, '2023_07_04_174815_order', 1),
(6, '2023_07_05_182254_course', 1),
(7, '2023_07_05_182559_registerusers', 1),
(8, '2023_07_05_182815_store', 1);

-- --------------------------------------------------------

--
-- Table structure for table `myedus`
--

DROP TABLE IF EXISTS `myedus`;
CREATE TABLE IF NOT EXISTS `myedus` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `orders_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `order_detail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_detail_id`),
  KEY `order_details_order_id_foreign` (`order_id`),
  KEY `order_details_course_id_foreign` (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registerusers`
--

DROP TABLE IF EXISTS `registerusers`;
CREATE TABLE IF NOT EXISTS `registerusers` (
  `registerUser_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `registerUser_firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registerUser_lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`registerUser_id`),
  UNIQUE KEY `registerusers_registeruser_id_unique` (`registerUser_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registerusers`
--

INSERT INTO `registerusers` (`registerUser_id`, `created_at`, `updated_at`, `registerUser_firstname`, `registerUser_lastname`, `email`, `password`, `email_verified_at`, `remember_token`) VALUES
(2, '2023-07-08 04:54:56', '2023-07-08 04:54:56', 'ratana', 'soth', 'ratana@gmail.com', '$2y$10$hM4P.rNQRPD4yZB38nxgre/iC.ViFiIaLMk1trmC0T.auBe784M/e', NULL, NULL),
(3, '2023-07-08 04:55:16', '2023-07-08 04:55:16', 'Chumvisotdaroth', 'som', 'daroth@gmail.com', '$2y$10$EgOGy9xsBPubNFvCvqC47ejo1EEdzChAtjrZb6Zx81wv1.yr6aYfa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

DROP TABLE IF EXISTS `store`;
CREATE TABLE IF NOT EXISTS `store` (
  `store_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `store_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`store_id`),
  UNIQUE KEY `store_store_id_unique` (`store_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `created_at`, `updated_at`, `store_name`, `store_description`, `subject`, `store_img`, `teacher_name`, `status`) VALUES
(1, '2023-07-08 04:56:44', '2023-07-08 04:56:44', 'Cs', 'Cs', 'Cs', 'OnlinePayU-removebg-preview.png', 'Cs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$fmGvZkpdablHWtfUazpPqerPBKl4lXDLLPGHKyn.Ett8RyPJR58PW', NULL, '2023-07-08 04:58:26', '2023-07-08 04:58:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
