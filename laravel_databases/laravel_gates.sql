-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 06:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_gates`
--

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
(1, '2024_06_04_044557_create_users_table', 1),
(2, '2024_06_04_052032_create_posts_table', 2),
(3, '2024_06_04_083412_create_users_table', 3),
(4, '2024_06_04_083441_create_posts_table', 3),
(5, '2024_06_04_084225_create_posts_table', 4),
(6, '2024_06_04_084419_create_posts_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Title One', 'Lorem ipsum dolor sit amet consectetur adipisicing.', 1, NULL, NULL),
(2, 'Title Two', 'Lorem ipsum dolor sit amet consectetur adipisicing.', 3, NULL, NULL),
(3, 'Title Three', 'Lorem ipsum dolor sit amet consectetur adipisicing.', 2, NULL, NULL),
(4, 'Title Four', 'Lorem ipsum dolor sit amet consectetur adipisicing.', 3, NULL, NULL),
(5, 'Title five', 'Lorem ipsum dolor sit amet consectetur adipisicing.', 1, NULL, NULL),
(6, 'Title seven', 'Lorem ipsum dolor sit amet consectetur adipisicing.', 2, NULL, NULL),
(7, 'Title eight', 'Lorem ipsum dolor sit amet consectetur adipisicing.', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `age`, `role`, `created_at`, `updated_at`) VALUES
(1, 'rajvinder', 'rajvinder@gmail.com', '$2y$12$00Kc.GXvRzSm471TlzDC4.OvJcbCKRklc2E8.ReY8OA0VXiqkn5La', '21', 'admin', '2024-06-04 03:06:36', '2024-06-04 03:06:36'),
(2, 'mehak', 'mehak@gmail.com', '$2y$12$OCECyk7fccJtbRr1SrMfiuNUBDOrrbV4h4cfC2hsgfptDKSOblVWK', '25', 'auther', '2024-06-04 03:07:41', '2024-06-04 03:07:41'),
(3, 'sonu', 'sonu@gmail.com', '$2y$12$FRdh2qInm.cwX57B3a20Bu1L5Vj.KyA6AxbvjvPmSLqj5usCyfhrK', '17', 'admin', '2024-06-04 03:08:09', '2024-06-04 03:08:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
