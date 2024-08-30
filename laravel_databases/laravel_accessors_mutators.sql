-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 06:27 AM
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
-- Database: `laravel_accessors_mutators`
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
(1, '2024_05_28_064619_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `age`, `salary`, `dob`, `password`) VALUES
(1, 'rohit', 'rohit@gmail.com', 43, 12100, '2007-04-14', '$2y$12$hSf7GOrcOKCbn0/SHPdXP.bR7LuxOCLTPEq6WtUpBWLPwIbprTaae'),
(2, 'Dr. Graham Rolfson IV', 'berneice93@example.net', 0, 8259, '2015-03-25', 'zqsnUrcpAN'),
(3, 'Mr. Clark Konopelski', 'glover.cathrine@example.com', 0, 2296, '1991-09-12', 'otKIWJRSec'),
(4, 'Mr. Willy Nienow DDS', 'rasheed.bartoletti@example.org', 0, 5251, '2004-11-21', 'zK31sXgGmG'),
(5, 'Ms. Trinity Hessel DVM', 'hayes.gina@example.org', 0, 2919, '2007-04-14', 'x2mKHtwgpf'),
(6, 'Jaunita Gorczany', 'flittel@example.net', 0, 9157, '2002-11-24', 'n3sNYxK916'),
(7, 'Arnulfo Schuster', 'adeckow@example.net', 0, 2130, '1976-04-12', 'hBJVeTckxI'),
(8, 'Miss Eveline Gibson', 'julien89@example.com', 0, 2545, '1979-06-11', 'EJL6d3hzzM'),
(9, 'Clark Hudson Jr.', 'ywelch@example.org', 0, 2540, '2006-01-17', 'kOF2KgH2TB'),
(10, 'Leatha Heller', 'general46@example.com', 0, 1878, '2022-09-23', 'pMSqM0d4yX'),
(12, 'mehakss', 'test@gmail.com', 0, 3000, '2001-12-02', '222'),
(13, 'rajvinders singh', 'raj@gmail.com', 0, 20000, '2001-12-03', '658498'),
(16, 'abishek sharma', 'sahrma@gmail.com', 34, 34000, '2024-07-26', '$2y$12$ZaDIg7c3fSBPkoKZhedZZ.XE2mlkMBSjudRVQDoWKNMX.8lbut1u.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
