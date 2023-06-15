-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 11:34 AM
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
-- Database: `data`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_08_143456_create_userinfos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `userinfos`
--

CREATE TABLE `userinfos` (
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userinfos`
--

INSERT INTO `userinfos` (`name`, `phone`, `email`, `password`, `username`, `company`, `nationality`, `is_admin`, `created_at`, `updated_at`) VALUES
('Tiger Oneal', '1-330-563-3873', 'a.auctor.non@aol.org', 'vXqIF11GSI6Bt', 'Stephanie', 'Pellentesque Massa Lobortis Inc.', 'Austria', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31'),
('Admin', '0878889999', 'admin-extreme@gmail.com', '$2y$10$DsZDGrlh4LU8cyWiM40Qo.tahTfPxCMCJv3DLBjOO3u6qvfl9ZIGa', 'Administrator', 'Electronic Extreme', 'Thai', 1, '2023-06-13 01:58:02', '2023-06-13 01:58:02'),
('Bethany Martinez', '(344) 341-3583', 'dapibus.quam@outlook.couk', 'eIqCV98NVL2Ft', 'Dante', 'Lorem Vitae Corporation', 'Australia', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31'),
('Inga Dudley', '(785) 320-8427', 'diam.luctus@yahoo.org', 'oEeJB37YRE5Pp', 'Samson', 'Eu PC', 'India', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31'),
('Cora Foreman', '(533) 823-6188', 'eget.ipsum.suspendisse@outlook.edu', 'hBxGG22QEY8Ge', 'Oscar', 'Vivamus Molestie LLP', 'United States', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31'),
('Mallory Reeves', '1-655-719-7060', 'eleifend.nec@yahoo.com', 'sIlKI65BEC0Ds', 'Judah', 'Aliquam Erat Industries', 'Colombia', NULL, '2023-06-13 02:18:39', '2023-06-13 02:18:39'),
('Cara Arnold', '1-248-752-1173', 'eu.placerat@outlook.couk', 'dKcOD51TUQ3Aq', 'Maris', 'Neque Non Quam Incorporated', 'Philippines', NULL, '2023-06-13 02:18:39', '2023-06-13 02:18:39'),
('Nero Woodard', '1-756-145-6998', 'eu@outlook.ca', 'wChEM48XRS5Ps', 'Aphrodite', 'Vestibulum Foundation', 'Germany', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31'),
('Dean Clements', '1-177-836-7163', 'facilisis.eget.ipsum@yahoo.com', 'jKsEU25HAT2Uo', 'Bryar', 'Aliquet Vel Vulputate Institute', 'Poland', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31'),
('Daphne Solomon', '(465) 633-1234', 'facilisis@hotmail.net', 'kXwSX24ASJ0Eq', 'Ila', 'Non LLP', 'Philippines', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31'),
('Adria Mcclure', '1-966-100-7223', 'faucibus.ut@protonmail.couk', 'iHkRY42LBR8Rw', 'Gil', 'Egestas Fusce Aliquet Industries', 'Italy', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31'),
('Farrah Bartlett', '1-975-537-1622', 'hendrerit.a@google.couk', 'hMmHQ80SSX3Rv', 'Brynne', 'Consectetuer Incorporated', 'Belgium', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31'),
('Emery Harrington', '(750) 611-1035', 'ligula@aol.org', 'iKiWG74WQM2Tn', 'Stephanie', 'Euismod Foundation', 'Colombia', NULL, '2023-06-13 02:18:39', '2023-06-13 02:18:39'),
('Drew Payne', '1-964-982-5491', 'mauris@hotmail.com', 'mJbFX15JKQ3Vu', 'Adrian', 'Molestie Associates', 'Norway', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31'),
('PASIT Nonnatchaya', '0972291455', 'nonnatchaya.pp@gmail.com', '$2y$10$2WpKhHUORac7vGCClfG3FuPRCf4OQWBgMgJ1dAozQvA4l54O5NH6u', 'Platinum', 'nonemusic', 'thai', NULL, '2023-06-13 01:55:11', '2023-06-13 01:55:11'),
('Pikachu', '0745669999', 'pikachu@gmail.com', '$2y$10$B2ank8Yu8WRw5d6KjJwiqeYmd8AEywDxqKYe.vtl4P0tbfd26jlZ2', 'pikapika', 'pokemon', 'thai', NULL, '2023-06-13 01:30:37', '2023-06-13 01:30:37'),
('Laith Tillman', '(946) 933-3197', 'purus.nullam.scelerisque@yahoo.net', 'hHbMJ30BNT5Ms', 'Uriah', 'Gravida Molestie Company', 'Indonesia', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31'),
('Hanae Bond', '1-853-416-6337', 'sem.consequat.nec@protonmail.net', 'qCsNY75RIM0Li', 'Marah', 'Malesuada Consulting', 'Philippines', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31'),
('Price Watson', '1-265-555-4354', 'sem.egestas@hotmail.org', 'oUqRC54QPQ7Xl', 'Kylynn', 'Donec Ltd', 'Australia', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31'),
('Hakeem Gillespie', '1-824-119-7226', 'semper.erat.in@protonmail.ca', 'uHkGP44PZG1Ki', 'Rowan', 'Vulputate Velit Eu Incorporated', 'Australia', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31'),
('Salvador Robles', '(149) 416-0327', 'ut.nec.urna@aol.com', 'hSfZR22LDE5Js', 'Moana', 'Sagittis Felis LLC', 'Nigeria', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31'),
('Olga Harmon', '(535) 736-8745', 'vel.venenatis@yahoo.edu', 'iIsNH42FEK2Gr', 'Louis', 'Eu Industries', 'Peru', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31'),
('Micah Figueroa', '(175) 897-5654', 'vestibulum.ut@aol.net', 'hPbID53PBJ8Yl', 'Aimee', 'Tempor Diam Company', 'Norway', NULL, '2023-06-13 02:12:31', '2023-06-13 02:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `userinfos`
--
ALTER TABLE `userinfos`
  ADD UNIQUE KEY `userinfos_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
