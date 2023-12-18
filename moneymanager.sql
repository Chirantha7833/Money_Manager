-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2023 at 09:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moneymanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenditure_details`
--

CREATE TABLE `expenditure_details` (
  `id` bigint UNSIGNED NOT NULL,
  `userid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenditure_details`
--

INSERT INTO `expenditure_details` (`id`, `userid`, `name`, `date`, `description`, `amount`, `created_at`, `updated_at`) VALUES
(1, '1', 'test1', '2020', 'house rental', 7000.00, NULL, NULL),
(2, '1', 'test1', '2020-10-12', 'salary', 80000.00, NULL, NULL),
(3, '2', 'test2', '2021-10-25', 'vehicle rent', 20000.00, NULL, NULL),
(4, '1', 'test1', '2023-12-22', 'sdasdsa', 100000.00, NULL, NULL),
(5, '1', 'test1', '2023-12-15', 'rent', 100000.00, NULL, NULL),
(6, '1', 'test1', '2023-12-01', 'fgdfg', 1000.00, NULL, NULL),
(7, '1', 'test1', '2023-12-06', 'fgdh', 1000.00, NULL, NULL),
(8, '1', 'test1', '2023-12-09', 'daswdsdsd', 1000.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_08_053612_create_revenue_details_table', 2),
(6, '2023_12_08_081045_create_expenditure_details_table', 3),
(7, '2023_12_08_090045_create_balance_details_table', 4),
(8, '2023_12_12_094412_create_pass_books_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pass_books`
--

CREATE TABLE `pass_books` (
  `id` bigint UNSIGNED NOT NULL,
  `userid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `revenue` double(8,2) NOT NULL,
  `expenditure` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pass_books`
--

INSERT INTO `pass_books` (`id`, `userid`, `date`, `description`, `revenue`, `expenditure`, `created_at`, `updated_at`) VALUES
(1, '1', '2023-12-28', 'fghhg', 1000.00, 0.00, NULL, NULL),
(2, '1', '2023-12-28', 'fghhg', 1000.00, 0.00, NULL, NULL),
(3, '1', '2023-12-15', 'Electricity', 0.00, 41000.00, NULL, NULL),
(4, '4', '2023-12-02', 'aaa', 41000.00, 0.00, NULL, NULL),
(5, '1', '2023-12-15', 'aaaaaaaaaaaaa', 100000.00, 0.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `revenue_details`
--

CREATE TABLE `revenue_details` (
  `id` bigint UNSIGNED NOT NULL,
  `userid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `revenue_details`
--

INSERT INTO `revenue_details` (`id`, `userid`, `name`, `date`, `description`, `amount`, `created_at`, `updated_at`) VALUES
(1, '1', 'test1', '2020-10-12', 'first test', 5000.00, NULL, NULL),
(2, '2', 'test2', '2021-10-25', 'salary', 100000.00, NULL, NULL),
(3, '4', 'test4', '203-08-09', 'fd interest', 80000.00, NULL, NULL),
(4, '1', 'test1', '203-08-09', 'first test', 100000.00, NULL, NULL),
(5, '1', 'test1', '2023-11-28', 'hhkhkjhk', 100000.00, NULL, NULL),
(6, '1', 'test1', '2023-12-07', 'vehicle rent', 80000.00, NULL, NULL),
(7, '1', 'test1', '2023-12-07', 'vehicle rent', 80000.00, NULL, NULL),
(8, '1', 'test1', '2023-12-07', 'vehicle rent', 80000.00, NULL, NULL),
(9, '1', 'test1', '2023-12-07', 'vehicle rent', 80000.00, NULL, NULL),
(10, '1', 'test1', '2023-12-07', 'vehicle rent', 80000.00, NULL, NULL),
(11, '1', 'test1', '2023-12-07', 'sdsd', 100000.00, NULL, NULL),
(12, '1', 'test1', '2023-12-13', 'sdds', 80000.00, NULL, NULL),
(13, '1', 'test1', '2023-12-13', 'sdds', 80000.00, NULL, NULL),
(14, '1', 'test1', '2023-12-13', 'sdds', 80000.00, NULL, NULL),
(15, '1', 'test1', '2023-12-13', 'sdds', 80000.00, NULL, NULL),
(16, '1', 'test1', '2023-12-15', 'dsfsdfsdfsdf', 1000.00, NULL, NULL),
(17, '1', 'test1', '2023-12-13', 'ytyrt', 1000.00, NULL, NULL),
(18, '1', 'test1', '2023-12-14', 'tewrrewt', 1000.00, NULL, NULL),
(19, '1', 'test1', '2023-12-07', 'sdsd', 1000.00, NULL, NULL),
(20, '1', 'test1', '2023-12-07', 'sdsd', 1000.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'test1', 'test1@gmail.com', NULL, '$2y$12$FdZxZ6IyQU7vs2qRlGeyFO4GTnrhQod2MNClS5mEaRLK92A74e3JK', NULL, '2023-12-07 11:22:48', '2023-12-07 11:22:48'),
(2, 'test2', 'test2@gmail.com', NULL, '$2y$12$Zgc.brIY60OeHKCWphIzMuLK44coYTLjZRSel8FhNMWqApoXT6MRi', NULL, '2023-12-07 11:30:02', '2023-12-07 11:30:02'),
(3, 'test3', 'test3@gmail.com', NULL, '$2y$12$8K3ztpas/aukRiQRXpJCdeeCd2fKiMBaeGbNkp5g2U7LsKRw6gdQ6', NULL, '2023-12-07 22:28:02', '2023-12-07 22:28:02'),
(4, 'test4', 'test4@gmail.com', NULL, '$2y$12$4P4m4bJDRBK11rb4Ydu05uIJlJOxKVjU..hTLUP78nYfvwUaY5F6m', NULL, '2023-12-07 23:37:54', '2023-12-07 23:37:54'),
(5, 'test5', 'test5@gmail.com', NULL, '$2y$12$VV2him4t80SkiFlmLNaN8uV.5Z0AdQYjy5dpKLXofPZUVvZjTc/Eq', NULL, '2023-12-08 05:44:15', '2023-12-08 05:44:15'),
(6, 'test6', 'test6@email.com', NULL, '$2y$12$4uoqVGxYYExS5KfsopH1x.y82nNh/FeBmHr241MwYRI2KU/q/Y/3a', NULL, '2023-12-08 10:56:34', '2023-12-08 10:56:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenditure_details`
--
ALTER TABLE `expenditure_details`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pass_books`
--
ALTER TABLE `pass_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `revenue_details`
--
ALTER TABLE `revenue_details`
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
-- AUTO_INCREMENT for table `expenditure_details`
--
ALTER TABLE `expenditure_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pass_books`
--
ALTER TABLE `pass_books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `revenue_details`
--
ALTER TABLE `revenue_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
