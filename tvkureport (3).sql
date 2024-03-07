-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 02:10 AM
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
-- Database: `tvkureport`
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
-- Table structure for table `masterlogbooks`
--

CREATE TABLE `masterlogbooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `kejadian` varchar(255) DEFAULT NULL,
  `resiko` varchar(255) DEFAULT NULL,
  `tindakan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masterlogbooks`
--

INSERT INTO `masterlogbooks` (`id`, `user_id`, `unit`, `lokasi`, `tanggal`, `kejadian`, `resiko`, `tindakan`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(23, 1, '2', 'test', '2024-02-16 00:00:00', 'test', 'Low', 'test', 'test', 'on Progress', '2024-02-16 09:39:28', '2024-02-16 21:06:27'),
(24, 1, '4', 'test', '2024-02-17 00:00:00', 'test2', 'Medium', 'test2', 'test2', 'new', '2024-02-16 21:00:57', '2024-02-16 21:00:57'),
(25, 1, '2', 'test3', '2024-02-17 00:00:00', 'test3', 'Low', 'test3', 'test3', 'new', '2024-02-16 21:01:38', '2024-02-16 21:01:38'),
(27, 3, '2', 'semarang', '2024-03-03 00:00:00', 'test1', 'Low', 'jajaja', 'jajaja', 'new', '2024-03-02 21:11:34', '2024-03-02 21:11:34'),
(28, 3, '2', 'asdaasdsa', '2024-03-03 11:12:00', 'dsadsadas', 'Low', 'adsasd', 'sdasdsa', 'new', '2024-03-02 21:12:53', '2024-03-02 21:12:53');

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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_02_16_124249_create_masterlogbooks_table', 1),
(7, '2024_02_16_151640_create_unitmodels_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `unitmodels`
--

CREATE TABLE `unitmodels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unitmodels`
--

INSERT INTO `unitmodels` (`id`, `kode`, `unit`, `created_at`, `updated_at`) VALUES
(2, '0004', 'TEST', '2024-02-16 08:33:04', '2024-02-16 08:33:04'),
(3, '00041', 'test2', '2024-02-16 08:34:01', '2024-02-16 08:34:01'),
(4, '909', 'test3', '2024-02-16 08:34:07', '2024-02-16 08:34:07'),
(5, '002', 'Semarang', '2024-03-02 20:43:56', '2024-03-02 20:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nip` varchar(225) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `nip`, `jabatan`, `kode`, `image`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aaa', 'admin1', '1111111777', 'Kepala Bidang', '0.0.1', '2024021817423x4_img_haris.jpg', 'Admin', NULL, NULL, '$2y$12$NA9qZA9Nfab0wRYDxRk8sebq8xL/T7RljKDNCRemLBh5.V4DTRe.a', NULL, '2024-02-16 05:50:48', '2024-02-18 10:42:24'),
(3, 'admin2', 'admin2', '123', 'Kepala Bidang', '0.0.0.2', NULL, 'user', 'admin2@gmail.com', NULL, '$2y$12$vy6grW/rfE7l/gOqvScPCu/JxNLWcTd5oAWlZIDbHSniNjxPExrPq', NULL, '2024-02-16 09:37:33', '2024-02-16 09:37:33'),
(4, 'Haris Adiyatma Farhan', 'admin3', '0.0.0.1', 'Kepala Bidang', '0004', NULL, 'Admin', 'admin3@gmail.com', NULL, '$2y$12$s64jJ7zv7Os/SDp8N26JpOrMPUNjBDbMnDskIRRNpAkLrw24FHqaS', NULL, '2024-02-18 06:54:33', '2024-02-18 08:03:22'),
(5, 'test', 'test2', NULL, 'Staff', NULL, NULL, 'Admin', 'test2@gmail.com', NULL, '$2y$12$L6dGjip1TSG3vDqkkfnPDeSSFhee1NKJw0goRGmqeIenpu7On3hJu', NULL, '2024-02-18 06:54:56', '2024-02-18 08:03:31'),
(22, 'coba15', 'coba12', '0.0.0.1', 'Kepala Bidang', NULL, NULL, 'Admin', 'coba15@gmail.com', NULL, '$2y$12$3FxBjL8BvkrzreBLaJHhl.Taad79zk5QcgWzPQW3n6FHGeclZ8LuW', NULL, '2024-02-18 07:51:57', '2024-02-18 07:51:57'),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18 10:25:02', '2024-02-18 10:25:02'),
(34, NULL, 'admin001', NULL, NULL, NULL, NULL, 'user', NULL, NULL, '$2y$12$L2vxw9fe8TE1FbVIs/n/Yua1VCx5hqJpdcvJuLkkFNtVa8ZiEYPCm', NULL, '2024-02-18 11:20:25', '2024-02-18 11:20:25'),
(35, NULL, 'sdadasdas', NULL, NULL, NULL, NULL, 'user', NULL, NULL, '$2y$12$b8xkQUt/QkSlfPcw21kpSOOWlWHtZzYpkW9Y4.pw7yWIwlSiePaDC', NULL, '2024-02-18 11:36:46', '2024-02-18 11:36:46');

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
-- Indexes for table `masterlogbooks`
--
ALTER TABLE `masterlogbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `unitmodels`
--
ALTER TABLE `unitmodels`
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
-- AUTO_INCREMENT for table `masterlogbooks`
--
ALTER TABLE `masterlogbooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unitmodels`
--
ALTER TABLE `unitmodels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
