-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2018 at 05:01 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acta`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'hrDQNIKvx8VjqDEFKwgY6TFxhhKhU4wx', 1, '2018-11-06 15:14:16', '2018-11-06 15:14:16', '2018-11-06 15:14:16'),
(2, 2, 'd8sBef2Z2b3IKdYXvLk7LgrPpnob37sN', 1, '2018-11-06 15:14:16', '2018-11-06 15:14:16', '2018-11-06 15:14:16'),
(3, 3, 'CKRuyR72wf3mhe8hyTaYbapmKJW6nh1d', 1, '2018-11-06 15:14:16', '2018-11-06 15:14:16', '2018-11-06 15:14:16'),
(4, 4, 'BxFwprYhMAISAE32KBNBPY0V9VQdlwaL', 1, '2018-11-06 16:12:21', '2018-11-06 16:12:21', '2018-11-06 16:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `date_birth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `in` text COLLATE utf8_unicode_ci NOT NULL,
  `bvn` text COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `challenge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `relationship` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kin_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kin_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kin_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institution` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year_ob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institution_ob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `po` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cnature` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rnumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `marital` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `step_1` int(11) NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `step_2` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `date_birth`, `lga`, `mi`, `in`, `bvn`, `size`, `challenge`, `full_name`, `relationship`, `kin_address`, `kin_email`, `kin_phone`, `institution`, `year_ob`, `institution_ob`, `po`, `co`, `cname`, `cnature`, `caddress`, `rnumber`, `remail`, `first_name`, `last_name`, `other_name`, `phone_number`, `gender`, `marital`, `nation`, `state`, `email`, `image`, `step_1`, `user_id`, `step_2`, `created_at`, `updated_at`) VALUES
(1, '13 November, 2018', 'sanga', 'http://127.0.0.1:9000/images/1541521176.png', '6674587487', '65564778', '12', 'no', 'john Ayuba', 'son', 'jos', 'john@gmail.com', '0977653256366', 'secondary schooll', '7 November, 2018', 'NIGERA', 'nxcjk', 'hjasjh', 'BCJ', 'HJHJFDJ', 'HJHJCDH', 'JHJJDC', 'CD@HGDSHJ', 'ayuba', 'john', 'adams', '080328551135', 'male', 'Married', 'Nigeria', 'Kaduna', 'adams@gmail.com', 'http://127.0.0.1:9000/images/1541521176.png', 1, 4, 0, '2018-11-06 16:19:36', '2018-11-06 16:19:36');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `course_resourse_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resource_file_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resource_file_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resource_file_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enterprises`
--

CREATE TABLE `enterprises` (
  `id` int(10) UNSIGNED NOT NULL,
  `rnumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_r` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `en_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `cor_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enterprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `core_enterprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `operation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_workers` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `main_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anual_turnover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `critical_cost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `challenge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enterpriseus`
--

CREATE TABLE `enterpriseus` (
  `id` int(10) UNSIGNED NOT NULL,
  `en_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `cor_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enterprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `core_enterprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `operation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_workers` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `main_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anual_turnover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `critical_cost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `challenge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enterpriseus`
--

INSERT INTO `enterpriseus` (`id`, `en_name`, `user_id`, `cor_address`, `location`, `enterprise`, `core_enterprise`, `operation`, `category`, `num_workers`, `main_product`, `anual_turnover`, `critical_cost`, `challenge`, `first_name`, `last_name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'HJCXHJH', 4, 'JHJHDCJ', 'JHHJSJ', 'primary processing', 'JCDHJ', 'perenial', 'micro', 'HJBXCHJXHJ', 'HJHJSX', 'HJHXJCHJ', 'JHHJXSJ', 'yes', 'ayuba', 'john', 'adams@gmail.com', '080328551135', '2018-11-06 16:20:42', '2018-11-06 16:20:42'),
(2, 'hjchjc', 4, 'hbdhshj', 'jhjhsdj', 'primary processing', 'hgxcgh', 'seasonal', 'small', 'hjdhshj', 'jhhjxchj', 'jhhjsxj', 'jhhjshj', 'yes', 'ayuba', 'john', 'adams@gmail.com', '080328551135', '2018-11-06 16:30:05', '2018-11-06 16:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(10) UNSIGNED NOT NULL,
  `loan_id` int(10) UNSIGNED DEFAULT NULL,
  `project_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pri_commodity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `asso_commodities` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `b_prospective` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `b_existing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_prospective` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_existing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pri_activities` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `loan_id`, `project_name`, `pri_commodity`, `asso_commodities`, `b_prospective`, `b_existing`, `s_prospective`, `s_existing`, `first_name`, `last_name`, `gender`, `phone`, `pri_activities`, `created_at`, `updated_at`) VALUES
(1, 4, 'hjdshj', '`hjhjjd', 'hjhjcj', 'jhhcdxjh', 'jhjhcxhj', 'jhjhcv', 'kjjkcdkj', 'ayuba', 'john', 'male', '080328551135', 'jhjhcdvn', '2018-11-06 16:29:10', '2018-11-06 16:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(34, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(35, '2017_01_21_155005_create_courses_table', 1),
(36, '2018_10_16_140358_create_clients_table', 1),
(37, '2018_10_16_140425_create_messages_table', 1),
(38, '2018_10_16_140449_create_loans_table', 1),
(39, '2018_10_18_121311_create_enterpriseus_table', 1),
(40, '2018_10_18_125238_create_enterprises_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(10, 4, 'p2m9AY5jskxjYkfnz9o2FV6QD0XXZQAq', '2018-11-06 16:28:45', '2018-11-06 16:28:45'),
(11, 4, 'shJdz39IsjFtc6cTIPp3CxV1m9eOS4Md', '2018-11-06 16:28:46', '2018-11-06 16:28:46'),
(12, 4, 'eUIFMKJqlhwpVgUg43cWIclxE1rg569Q', '2018-11-06 16:28:46', '2018-11-06 16:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, NULL, NULL),
(2, 'lecturer', 'Lecturer', NULL, NULL, NULL),
(3, 'student', 'Student', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-11-06 15:14:16', '2018-11-06 15:14:16'),
(2, 2, '2018-11-06 15:14:16', '2018-11-06 15:14:16'),
(3, 3, '2018-11-06 15:14:16', '2018-11-06 15:14:16'),
(4, 3, '2018-11-06 16:12:21', '2018-11-06 16:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2018-11-06 16:17:19', '2018-11-06 16:17:19'),
(2, NULL, 'ip', '127.0.0.1', '2018-11-06 16:17:19', '2018-11-06 16:17:19'),
(3, 4, 'user', NULL, '2018-11-06 16:17:19', '2018-11-06 16:17:19'),
(4, NULL, 'global', NULL, '2018-11-06 16:17:19', '2018-11-06 16:17:19'),
(5, NULL, 'ip', '127.0.0.1', '2018-11-06 16:17:19', '2018-11-06 16:17:19'),
(6, 4, 'user', NULL, '2018-11-06 16:17:20', '2018-11-06 16:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marital` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `step_2` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `other_name`, `phone_number`, `gender`, `marital`, `status`, `nation`, `state`, `step_2`, `created_at`, `updated_at`) VALUES
(1, 'admin@lms.com', '$2y$10$bF7jD0CAyWBT6REDx9Uydu77luRyzKSjCllO4FRDknRzwsZMS4pA2', NULL, '2018-11-06 16:21:14', 'Mohammed', 'admin', NULL, '1234567890', NULL, NULL, NULL, NULL, NULL, 0, '2018-11-06 15:14:15', '2018-11-06 16:21:14'),
(2, 'agent@lms.com', '$2y$10$VZQYp/G00CBQ/USYaFAtUOaS70G2t/2AEhrBAshLSg0aikRHkS8ae', NULL, NULL, 'Boss', 'Agent', NULL, '1234567890', NULL, NULL, NULL, NULL, NULL, 0, '2018-11-06 15:14:16', '2018-11-06 15:14:16'),
(3, 'user@lms.com', '$2y$10$7cHzkXBN360fhtEm5m2ew.7JxniPZR1xChf/DZ2C68Im33KV2hORe', NULL, NULL, 'kate', 'User', NULL, '1234567890', NULL, NULL, NULL, NULL, NULL, 0, '2018-11-06 15:14:16', '2018-11-06 15:14:16'),
(4, 'adams@gmail.com', '$2y$10$kj0PpMXajQQnMmIP/ubvGO5gkJmVUgKK/nPMn7d/UABE5rc5HGosS', NULL, '2018-11-06 16:28:46', 'ayuba', 'john', 'adams', '080328551135', 'male', 'Married', NULL, 'Nigeria', 'Kaduna', 0, '2018-11-06 16:12:21', '2018-11-06 16:28:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_user_id_foreign` (`user_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enterprises`
--
ALTER TABLE `enterprises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enterprises_user_id_foreign` (`user_id`);

--
-- Indexes for table `enterpriseus`
--
ALTER TABLE `enterpriseus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enterpriseus_user_id_foreign` (`user_id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loans_loan_id_foreign` (`loan_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enterprises`
--
ALTER TABLE `enterprises`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enterpriseus`
--
ALTER TABLE `enterpriseus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `enterprises`
--
ALTER TABLE `enterprises`
  ADD CONSTRAINT `enterprises_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `enterpriseus`
--
ALTER TABLE `enterpriseus`
  ADD CONSTRAINT `enterpriseus_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `loans`
--
ALTER TABLE `loans`
  ADD CONSTRAINT `loans_loan_id_foreign` FOREIGN KEY (`loan_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
