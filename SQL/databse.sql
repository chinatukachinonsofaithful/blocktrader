-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2025 at 07:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blocktraderinvestments`
--

-- --------------------------------------------------------

--
-- Table structure for table `copy_experts`
--

CREATE TABLE `copy_experts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'no-picture.png',
  `bio` text DEFAULT NULL,
  `specialty` varchar(255) DEFAULT NULL,
  `win_count` int(11) NOT NULL DEFAULT 0,
  `loss_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `copy_experts`
--

INSERT INTO `copy_experts` (`id`, `profile_name`, `image`, `bio`, `specialty`, `win_count`, `loss_count`, `created_at`, `updated_at`) VALUES
(263, 'james879', 'no-picture.png', 'Best trading invstors', 'Monthly', 37, 2, '2025-01-07 10:09:32', NULL),
(274, 'Kenny6273', 'no-picture.png', 'Best trading invstors', 'Yearly', 76, 4, '2025-01-08 10:09:35', NULL),
(324, 'Sandar000', 'no-picture.png', 'Best trading invstors', 'Monthly', 92, 43, '2025-01-29 10:09:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL,
  `user_id` int(55) NOT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `payment_option` int(55) NOT NULL,
  `reference_id` varchar(255) NOT NULL,
  `transaction_type` varchar(255) NOT NULL DEFAULT 'Deposit',
  `payment_proof` varchar(255) DEFAULT NULL,
  `status` enum('pending','approved','declined') NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

CREATE TABLE `investments` (
  `id` int(11) NOT NULL,
  `user_id` int(55) NOT NULL,
  `plan_id` int(55) NOT NULL,
  `copy_expert_id` int(55) DEFAULT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `total_return` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `roi` varchar(255) DEFAULT NULL,
  `reference_id` varchar(255) NOT NULL,
  `transaction_type` varchar(255) NOT NULL DEFAULT 'Investment',
  `status` enum('completed','processing','cancelled','active') DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(11) NOT NULL,
  `user_id` int(55) DEFAULT NULL,
  `ssn` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `wallet_address` varchar(255) DEFAULT NULL,
  `reference_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_12_26_141923_create_deposit_table', 0),
(2, '2024_12_26_141923_create_failed_jobs_table', 0),
(3, '2024_12_26_141923_create_investments_table', 0),
(4, '2024_12_26_141923_create_password_reset_tokens_table', 0),
(5, '2024_12_26_141923_create_payment_options_table', 0),
(6, '2024_12_26_141923_create_plans_table', 0),
(7, '2024_12_26_141923_create_settings_table', 0),
(8, '2024_12_26_141923_create_users_table', 0),
(9, '2024_12_26_141923_create_withdraw_table', 0),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2025_01_02_073031_create_copy_experts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_options`
--

CREATE TABLE `payment_options` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `short_name` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `website_address` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_options`
--

INSERT INTO `payment_options` (`id`, `name`, `short_name`, `icon`, `website_address`, `created_at`, `updated_at`) VALUES
(1, 'Bitcoin', 'BTC', 'btc.svg', '1Fhv4jtqv6bChqgyRr86FeAH6Mi8zEr8HD', '2024-12-23 10:55:59', '2024-12-28 21:19:10'),
(2, 'Ethereum', 'ETH', 'eth.svg', '0x247c9a48e6713c38f046709f084d82b67ad7f3a0', '2024-12-23 10:55:59', '2024-12-28 21:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `min` double NOT NULL DEFAULT 0,
  `max` double NOT NULL DEFAULT 0,
  `roi` double NOT NULL DEFAULT 0,
  `duration` varchar(255) DEFAULT NULL,
  `capital` enum('yes','no') NOT NULL DEFAULT 'yes',
  `commission` double NOT NULL DEFAULT 0,
  `terms` enum('short','long') NOT NULL,
  `status` enum('active','disabled') NOT NULL DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `amount`, `min`, `max`, `roi`, `duration`, `capital`, `commission`, `terms`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Starter', 5000, 5000, 15000, 20, '30', 'yes', 3, 'short', 'active', '2024-12-22 12:35:30', '2024-12-22 12:35:30'),
(2, 'Premium', 10000, 10000, 25000, 30, '14', 'yes', 3, 'short', 'active', '2024-12-22 12:35:30', '2024-12-22 12:35:30'),
(3, 'Gold', 25000, 25000, 75000, 45, '7', 'yes', 5, 'short', 'active', '2024-12-22 12:35:30', '2024-12-22 12:35:30'),
(4, 'Classic', 70000, 70000, 100000, 20, '30', 'yes', 3, 'long', 'active', '2024-12-22 12:35:30', '2024-12-22 12:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `settings_key` text NOT NULL,
  `settings_value` text NOT NULL,
  `settings_description` text NOT NULL,
  `settings_type` enum('website information') DEFAULT NULL,
  `settings_input_type` enum('text','number','checkbox','file') NOT NULL DEFAULT 'text',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `settings_key`, `settings_value`, `settings_description`, `settings_type`, `settings_input_type`, `created_at`, `updated_at`) VALUES
(1, 'website_name', 'Blockchain', 'Name', 'website information', 'text', '2024-06-04 17:30:17', '2024-06-04 17:30:17'),
(2, 'official_phone', '08114313795', 'Official Phone', 'website information', 'text', '2024-06-04 17:30:17', '2024-06-04 17:30:17'),
(3, 'official_address', '500 E Las Olas Blvd, FL 33301', 'Official Address', 'website information', 'text', '2024-06-04 17:30:17', '2024-06-04 17:30:17'),
(4, 'official_email', 'support@alldarkcodes.com', 'Official Email', 'website information', 'text', '2024-06-04 17:30:17', '2024-06-04 17:30:17'),
(5, 'live_chat', 'https://embed.tawk.to/6683eb249d7f358570d622f8/1i1pkt2ji', 'Tawk To Live Chat', 'website information', 'text', '2024-06-04 17:30:17', '2024-06-04 17:30:17'),
(8, 'loan_features', 'off', 'Loan On/Off toggle', 'website information', 'text', '2024-06-04 17:30:17', '2024-06-04 17:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `balance` double NOT NULL DEFAULT 0,
  `pending_balance` double NOT NULL DEFAULT 0,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role_id` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1 = user, 2 = admin',
  `survey` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 = not filled, 1 = filled',
  `refid` varchar(255) DEFAULT NULL,
  `referral_id` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `copy_expert_id` int(55) DEFAULT 0,
  `account` int(55) NOT NULL DEFAULT 0,
  `crypto_type` varchar(255) DEFAULT NULL,
  `account_address` varchar(255) DEFAULT NULL,
  `kyc_status` enum('0','1','2','3') NOT NULL DEFAULT '0' COMMENT '0 = off, 1 = submitted, 2 = approve, 3 = rejected',
  `idFront` varchar(255) DEFAULT NULL,
  `idBack` varchar(255) DEFAULT NULL,
  `wallet_status` int(55) NOT NULL DEFAULT 0,
  `recovery_phrase` varchar(255) DEFAULT NULL,
  `wallet_type` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `balance`, `pending_balance`, `date_of_birth`, `address`, `country`, `image`, `role_id`, `survey`, `refid`, `referral_id`, `email_verified_at`, `password`, `copy_expert_id`, `account`, `crypto_type`, `account_address`, `kyc_status`, `idFront`, `idBack`, `wallet_status`, `recovery_phrase`, `wallet_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ofofonobs Developer', 'ofofonobs@gmail.com', '2348114313795', 0, 0, '1997-01-23', '54, Alaka Ibadan, Oyo State', 'Nigeria', '5c0TtHo5D4Y21DnZ9iTr5ULLMfNSfuAB9cT0xOOV.png', '2', '1', '786shs33982', NULL, '2024-12-25 09:40:18', '$2y$10$GvESYvpe6vYllRs5GvquiOCieanLtQIFp2cc4mT/fFc.DHmyKAv5O', 263, 1, '1', 'Fdgfxhcgchfgxdfdsjhgsjfdg', '2', '4tMEI6gSgh4BHZNHcuGDm8nFKFp7RHkSS2cdmT6N.jpg', '4joBQJisNXdgKbKKlYQ4hsvLl7m6cFXFpNelooXU.jpg', 1, 'house car bank key fish bike care link food school help dog cat', 'trust wallet', NULL, '2024-12-18 09:40:18', '2025-01-25 17:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `user_id` int(55) NOT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `reference_id` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `transaction_type` varchar(255) NOT NULL DEFAULT 'Withdraw',
  `status` enum('pending','approved','declined') NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `copy_experts`
--
ALTER TABLE `copy_experts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `investments`
--
ALTER TABLE `investments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_options`
--
ALTER TABLE `payment_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `copy_experts`
--
ALTER TABLE `copy_experts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investments`
--
ALTER TABLE `investments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_options`
--
ALTER TABLE `payment_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
