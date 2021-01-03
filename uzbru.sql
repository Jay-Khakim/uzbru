-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2021 at 12:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uzbru`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('photo','video') COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_uz` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ru` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_en` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_uz` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` varchar(1600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_uz` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ru` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_en` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_uz` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_ru` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_en` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_uz` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_ru` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_en` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_number` int(11) DEFAULT NULL,
  `inn` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `desc_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_uz` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_uz` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(1500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `status`, `name_en`, `name_uz`, `name_ru`, `slug_en`, `certificate_number`, `inn`, `year`, `value`, `expiry_date`, `desc_en`, `desc_uz`, `desc_ru`, `file`, `web`, `email`, `phone`, `address_en`, `address_uz`, `address_ru`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'active', 'Jay Khakim', 'Jay Khakim', 'Jay Khakim', NULL, 1234, 234235234, 2020, NULL, '2021-01-29', NULL, NULL, NULL, NULL, NULL, 'mgmediajay@gmail.com', '+18903378856', 'Sergeli-7-18-28', NULL, NULL, 'membership/9dbf53d2f20c55f6282046000f1f2c58.jpg', NULL, '2021-01-03 05:02:28', '2021-01-03 05:02:28');

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
(4, '2020_12_29_072937_create_staff_table', 2),
(5, '2020_12_29_072938_create_memberships_table', 2),
(6, '2020_12_29_072939_create_partners_table', 2),
(7, '2020_12_29_072940_create_news_table', 2),
(8, '2020_12_29_072941_create_media_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('association','all') COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_uz` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ru` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_en` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_uz` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_en` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_uz` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_ru` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` varchar(1600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(1600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(1600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(1600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `type`, `title_en`, `title_uz`, `title_ru`, `slug_en`, `body_en`, `body_uz`, `body_ru`, `author_en`, `author_uz`, `author_ru`, `link`, `image1`, `image2`, `image3`, `image4`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'association', 'asdafas', 'dfasdfasdfa', 'sdfasdfasf', NULL, '<p>asdfasdfasdfa</p>', '<p>sdfasdfasdfasdf</p>', '<p>asdfasdfasdfasdfasdf</p>', NULL, NULL, NULL, NULL, 'news/824c8ab6b8d59d9195350996a2315dd2.jpg', NULL, NULL, NULL, NULL, '2021-01-01 23:13:43', '2021-01-01 23:13:43'),
(3, 'association', 'asdafas', 'dfasdfasdfa', 'sdfasdfasf', NULL, '<p>asdfasdfasdfa</p>', '<p>sdfasdfasdfasdf</p>', '<p>asdfasdfasdfasdfasdf</p>', NULL, NULL, NULL, NULL, 'news/824c8ab6b8d59d9195350996a2315dd2.jpg', NULL, NULL, NULL, NULL, '2021-01-02 08:44:06', '2021-01-02 08:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_uz` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ru` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_en` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_uz` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_ru` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_uz` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(1500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_uz` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ru` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_en` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_uz` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_ru` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reception_time_en` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reception_time_uz` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reception_time_ru` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(1500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name_en`, `name_uz`, `name_ru`, `position_en`, `position_uz`, `position_ru`, `reception_time_en`, `reception_time_uz`, `reception_time_ru`, `email`, `facebook`, `instagram`, `linkedin`, `twitter`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Yorkin Malikov', 'Yorkin Malikov', 'Ёркин Маликов', 'Chairman of the Board', 'Boshqaruv raisi', 'Председатель Совета', 'Monday 10:00-12:00', 'Dushanba 10:00-12:00', 'Dushanba 10:00-12:00 ru', NULL, NULL, 'fafaklsjdflkajsdlfkj', NULL, NULL, 'staff/f0dc297c6a4ab178428cc6bd4607845b.jpg', NULL, '2021-01-02 08:37:41', '2021-01-02 10:03:11');

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
(1, 'Jay Khakim', 'mgmediajay@gmail.com', NULL, '$2y$10$.zw5rHxjFvv6NOjvs/FO/eHZxgwuiP9Sz/gT9ooSHIEXcPeSIYU/S', NULL, '2020-12-29 02:42:08', '2020-12-29 02:42:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_slug_en_unique` (`slug_en`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `memberships_slug_en_unique` (`slug_en`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_en_unique` (`slug_en`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
