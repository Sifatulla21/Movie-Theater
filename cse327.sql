-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 07:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse327`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','editor','subscriber') COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'subscriber editor admin, subscriber, editor',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`) VALUES
(20, 'Sifat', 'sifat136479@gmail.com', NULL, 'admin', '$2y$10$GIW9bYBbMA4I1US85PpEa.OufQtLtl4MUMWOG0Nbc1FqEdHfNiq5G', '1rtdgqZ52L7sp0HG6HWmra1vyidN87pR4OwOTzKJy3spkSMw50ccHojHrCZn', '2022-09-07 22:07:29', '2022-09-07 22:30:38', '01959631391');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `sit_id` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `cin_id`, `user_id`, `sit_id`, `type`, `created_at`, `updated_at`) VALUES
(1, 6, 3, 1, 3, NULL, NULL),
(2, 6, 3, 2, 3, NULL, NULL),
(3, 6, 1, 3, 3, NULL, NULL),
(4, 6, 2, 4, 3, NULL, NULL),
(5, 6, 0, 5, 0, NULL, NULL),
(6, 6, 0, 6, 0, NULL, NULL),
(7, 6, 2, 7, 3, NULL, NULL),
(8, 6, 0, 8, 0, NULL, NULL),
(9, 6, 0, 9, 0, NULL, NULL),
(10, 6, 0, 10, 0, NULL, NULL),
(11, 6, 0, 11, 0, NULL, NULL),
(12, 6, 0, 12, 0, NULL, NULL),
(13, 6, 0, 13, 3, NULL, NULL),
(14, 6, 0, 14, 0, NULL, NULL),
(15, 6, 0, 15, 3, NULL, NULL),
(16, 6, 1, 16, 3, NULL, NULL),
(17, 6, 1, 17, 3, NULL, NULL),
(18, 6, 1, 18, 3, NULL, NULL),
(19, 6, 0, 19, 0, NULL, NULL),
(20, 6, 0, 20, 0, NULL, NULL),
(21, 7, 3, 0, 3, NULL, NULL),
(22, 7, 3, 0, 3, NULL, NULL),
(23, 7, 3, 0, 3, NULL, NULL),
(24, 7, 0, 0, 3, NULL, NULL),
(25, 7, 0, 0, 0, NULL, NULL),
(26, 7, 0, 0, 3, NULL, NULL),
(27, 7, 0, 0, 0, NULL, NULL),
(28, 7, 0, 0, 0, NULL, NULL),
(29, 7, 0, 0, 0, NULL, NULL),
(30, 7, 0, 0, 0, NULL, NULL),
(31, 7, 3, 0, 3, NULL, NULL),
(32, 7, 0, 0, 3, NULL, NULL),
(33, 7, 0, 0, 3, NULL, NULL),
(34, 7, 0, 0, 0, NULL, NULL),
(35, 7, 3, 0, 3, NULL, NULL),
(36, 7, 3, 0, 3, NULL, NULL),
(37, 7, 0, 0, 0, NULL, NULL),
(38, 7, 0, 0, 0, NULL, NULL),
(39, 7, 0, 0, 0, NULL, NULL),
(40, 7, 0, 0, 0, NULL, NULL),
(41, 8, 0, 0, 0, NULL, NULL),
(42, 8, 0, 0, 0, NULL, NULL),
(43, 8, 0, 0, 0, NULL, NULL),
(44, 8, 0, 0, 0, NULL, NULL),
(45, 8, 0, 0, 0, NULL, NULL),
(46, 8, 0, 0, 0, NULL, NULL),
(47, 8, 0, 0, 0, NULL, NULL),
(48, 8, 0, 0, 0, NULL, NULL),
(49, 8, 0, 0, 0, NULL, NULL),
(50, 8, 0, 0, 0, NULL, NULL),
(51, 8, 0, 0, 0, NULL, NULL),
(52, 8, 0, 0, 0, NULL, NULL),
(53, 8, 0, 0, 0, NULL, NULL),
(54, 8, 0, 0, 0, NULL, NULL),
(55, 8, 0, 0, 0, NULL, NULL),
(56, 8, 0, 0, 0, NULL, NULL),
(57, 8, 0, 0, 0, NULL, NULL),
(58, 8, 0, 0, 0, NULL, NULL),
(59, 8, 0, 0, 0, NULL, NULL),
(60, 8, 0, 0, 0, NULL, NULL),
(61, 9, 3, 0, 3, NULL, NULL),
(62, 9, 0, 0, 0, NULL, NULL),
(63, 9, 0, 0, 0, NULL, NULL),
(64, 9, 0, 0, 0, NULL, NULL),
(65, 9, 0, 0, 0, NULL, NULL),
(66, 9, 0, 0, 0, NULL, NULL),
(67, 9, 2, 0, 3, NULL, NULL),
(68, 9, 0, 0, 0, NULL, NULL),
(69, 9, 0, 0, 0, NULL, NULL),
(70, 9, 0, 0, 0, NULL, NULL),
(71, 9, 0, 0, 0, NULL, NULL),
(72, 9, 0, 0, 0, NULL, NULL),
(73, 9, 0, 0, 0, NULL, NULL),
(74, 9, 0, 0, 0, NULL, NULL),
(75, 9, 0, 0, 0, NULL, NULL),
(76, 9, 2, 0, 3, NULL, NULL),
(77, 9, 0, 0, 0, NULL, NULL),
(78, 9, 2, 0, 3, NULL, NULL),
(79, 9, 0, 0, 0, NULL, NULL),
(80, 9, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cinema_lists`
--

CREATE TABLE `cinema_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cinema_lists`
--

INSERT INTO `cinema_lists` (`id`, `name`, `price`, `image`, `date`, `time`, `created_at`, `updated_at`) VALUES
(7, 'Hawa', '700', 'cin\\1662471276.jpg', '10-22-22', '10.00 - 12', '2022-09-06 07:34:36', '2022-09-06 07:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_09_065817_create_admins_table', 1),
(9, '2022_08_15_145108_create_packages_table', 2),
(10, '2022_08_17_192103_create_districts_table', 2),
(11, '2022_08_17_192218_create_coverages_table', 3),
(12, '2022_08_17_214419_create_pays_table', 4),
(13, '2022_08_17_214535_create_banks_table', 4),
(14, '2022_08_17_214644_create_account_infos_table', 4),
(15, '2022_08_26_164040_create_contacts_table', 5),
(16, '2022_08_26_170901_create_abouts_table', 6),
(17, '2022_08_31_062156_create_corporate_internets_table', 7),
(18, '2022_09_03_121435_create_cinema_lists_table', 8),
(19, '2022_09_04_174924_create_sits_table', 9),
(20, '2022_09_04_180050_create_bookings_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `amount`, `address`, `status`, `transaction_id`, `currency`) VALUES
(42, 'Sifat Ulla', 'sifat136479@gmail.com', '01755234231', 1200, '1,2,', 'Processing', '631969c5207ec', 'BDT'),
(43, 'Sifat Ulla', 'sifat136479@gmail.com', '01755234231', 800, '61,', 'Pending', '63196d8db021f', 'BDT'),
(44, 'Sifat Ulla', 'sifat136479@gmail.com', '01755234231', 700, '36,', 'Pending', '63198115d0ea6', 'BDT'),
(45, 'Sifat Ulla', 'sifat136479@gmail.com', '01755234231', 700, '21,', 'Processing', '631998fd41131', 'BDT'),
(46, 'Sifat Ulla', 'sifat136479@gmail.com', '01755234231', 1400, '22,23,', 'Processing', '631b7baa92b26', 'BDT'),
(47, 'Sifat Ulla', 'sifat136479@gmail.com', '01755234231', 1400, '31,35,', 'Pending', '631b7edfe28b6', 'BDT');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sits`
--

CREATE TABLE `sits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(255) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sits`
--

INSERT INTO `sits` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, '1', 0, NULL, NULL),
(2, '2', 0, NULL, NULL),
(3, '3', 0, NULL, NULL),
(4, '4', 0, NULL, NULL),
(5, '5', 0, NULL, NULL),
(6, '6', 0, NULL, NULL),
(7, '7', 0, NULL, NULL),
(8, '8', 0, NULL, NULL),
(9, '9', 0, NULL, NULL),
(10, '10', 0, NULL, NULL),
(11, '11', 0, NULL, NULL),
(12, '12', 0, NULL, NULL),
(13, '13', 0, NULL, NULL),
(14, '14', 0, NULL, NULL),
(15, '15', 0, NULL, NULL),
(16, '16', 0, NULL, NULL),
(17, '17', 0, NULL, NULL),
(18, '18', 0, NULL, NULL),
(19, '19', 0, NULL, NULL),
(20, '20', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abdur rahman kazi', 'kay2333@email.com', NULL, '$2y$10$.9JYdilrIxH79fqjdz/3Uu5qO1tMJm4VKX6TK.Mdc/d8wayCB9Mka', NULL, '2022-08-09 07:18:02', '2022-08-09 07:18:02'),
(2, 'abdur rahman kazi', 'kaziar42@gmail.com', NULL, '$2y$10$FKBJl9yCzqrRO.3cXvD8i.e917CDe9gHM3X0IO3XatBzmPGIvZiDq', NULL, '2022-09-06 20:42:10', '2022-09-06 20:42:10'),
(3, 'Sifat Ulla', 'sifat136479@gmail.com', NULL, '$2y$10$d2P2v58eRTrwAdCRUpcT.OQMSM2LixNPuiXuNAwsH6ZveBw3mOsfe', NULL, '2022-09-07 22:03:46', '2022-09-07 22:03:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cinema_lists`
--
ALTER TABLE `cinema_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sits`
--
ALTER TABLE `sits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `cinema_lists`
--
ALTER TABLE `cinema_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sits`
--
ALTER TABLE `sits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
