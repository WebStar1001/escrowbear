-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2021 at 02:28 PM
-- Server version: 10.3.30-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escrowbear_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `invitations`
--

CREATE TABLE `invitations` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `invite_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `invitations`
--

INSERT INTO `invitations` (`id`, `email`, `invite_code`, `created_at`, `updated_at`) VALUES
(1, 'eric9178vadim@gmail.com', 'NzXRyY1PSIn1lUXv', '2021-06-15 13:39:53', '2021-06-15 13:39:53'),
(2, 'fullstack19940927@gmail.com', 'sLoWoy2r7VPvDaTJ', '2021-06-16 06:04:16', '2021-06-16 06:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `kyc_verifications`
--

CREATE TABLE `kyc_verifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'reviewing',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kyc_verifications`
--

INSERT INTO `kyc_verifications` (`id`, `user_id`, `type`, `card_image`, `reason`, `status`, `created_at`, `updated_at`) VALUES
(43, 2, 'passport', 'kyc1623337597.jpg', NULL, 'verified', '2021-06-10 15:06:37', '2021-06-17 15:25:51'),
(44, 2, 'passport', 'kyc1623343182.jpg', NULL, 'verified', '2021-06-10 16:39:42', '2021-06-17 15:25:51'),
(45, 3, 'passport', 'kyc1623854547.png', NULL, 'verified', '2021-06-16 14:42:27', '2021-06-16 14:42:27'),
(46, 2, 'passport', 'kyc1623943547.png', NULL, 'verified', '2021-06-17 15:25:47', '2021-06-17 15:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `direction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ltr',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `short_code`, `icon`, `is_active`, `direction`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', '1d40d16afd304f4b21dca78ea9ffebd4.png', 1, 'ltr', NULL, NULL),
(3, 'عربي', 'ar', '_ar_.png', 1, 'rtl', NULL, '2021-03-15 04:14:50'),
(4, 'کوردی', 'ku', '_ku_.png', 1, 'rtl', '2021-03-15 04:15:43', '2021-03-15 04:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2017_09_15_051156_setup_coinpayment_tables', 2),
(5, '2018_03_24_032432_create_callback_address_table', 2),
(6, '2018_05_07_123123_fix_transactions_table', 2),
(7, '2018_05_08_037214_cp_create_mass_withdrawal', 2),
(8, '2018_07_01_112608_add_column_dest_tag_to_transactions_table', 2),
(9, '2019_01_26_221915_create_coinpayment_transactions_table', 3),
(10, '2020_11_30_030150_create_coinpayment_transaction_items_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google2fa_secret` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google2fa_enable` tinyint(4) DEFAULT NULL,
  `master_escrow_code` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `last_login_ip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `country`, `email_verified_at`, `password`, `profile_path`, `google2fa_secret`, `google2fa_enable`, `master_escrow_code`, `role`, `remember_token`, `last_login_at`, `last_login_ip`, `created_at`, `updated_at`) VALUES
(2, 'Yegor Loginov', 'eric9178vadim@gmail.com', '+7896536632', 'Russia', NULL, '$2y$10$OH1K./MqlDy9xT9AZH8Zde.SuYzEIdFlDo5ot.nr22FZJZPUgdCIW', '1623181863.jpg', 'BJ5Q33K3HRLV7Q6J', 1, NULL, 'user', NULL, '2021-06-29 13:19:55', '188.43.136.32', '2021-06-08 19:50:39', '2021-06-29 13:19:55'),
(3, 'full', 'fullstack19940927@gmail.com', '+7383948309', 'Russia', NULL, '$2y$10$pL5x0remDE0Rolz61vtxoOtJjrFkGQ2mbRE5nGVOjekZSzpa.xqtq', '1623854160.jpg', 'ZCXDKIYX4ICHQFRK', 1, NULL, 'user', NULL, '2021-06-21 14:11:41', '188.43.136.32', '2021-06-16 06:37:03', '2021-06-21 14:15:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING BTREE;

--
-- Indexes for table `invitations`
--
ALTER TABLE `invitations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `kyc_verifications`
--
ALTER TABLE `kyc_verifications`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `kyc_verifications_user_id_index` (`user_id`) USING BTREE,
  ADD KEY `kyc_verifications_status_index` (`status`) USING BTREE;

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `languages_id_unique` (`id`) USING BTREE,
  ADD UNIQUE KEY `languages_name_unique` (`name`) USING BTREE,
  ADD UNIQUE KEY `languages_short_code_unique` (`short_code`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE,
  ADD UNIQUE KEY `users_phone_unique` (`phone`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invitations`
--
ALTER TABLE `invitations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kyc_verifications`
--
ALTER TABLE `kyc_verifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
