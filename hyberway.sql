-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 11:57 AM
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
-- Database: `hyberway`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basics`
--

CREATE TABLE `basics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `video`, `created_at`, `updated_at`) VALUES
(1, '9e3aca36-6696-4cce-8181-cfbb4d17e4f9.jpg', NULL, '2023-09-08 05:28:23', '2023-09-08 05:28:23'),
(3, '5089271b-69d4-4e71-a735-4e1238dbebb2.jpg', NULL, '2023-09-08 05:31:11', '2023-09-08 05:31:11'),
(4, '8a43f93d-aac4-41f9-976b-4f8f0b758a32.jpg', NULL, '2023-09-08 05:31:21', '2023-09-08 05:31:21'),
(5, '936ae2ce-17fa-448a-a348-8ba1defeb5f2.jpg', NULL, '2023-09-08 05:31:33', '2023-09-08 05:31:33'),
(6, '5d024d52-06f8-45d0-b832-914bf00500d7.jpg', NULL, '2023-09-08 05:31:43', '2023-09-08 05:31:43'),
(7, '3ce9b717-416f-45aa-aebe-8821f0551402.jpg', NULL, '2023-09-08 05:31:50', '2023-09-08 05:31:50'),
(8, '42e24994-e322-48ff-9cbf-256a10a32e5f.jpg', NULL, '2023-09-08 05:55:39', '2023-09-08 05:55:39'),
(9, '0786e8c4-fb92-4b58-8c84-10cff7e02c50.jpg', NULL, '2023-09-08 05:57:05', '2023-09-08 05:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `gallery1s`
--

CREATE TABLE `gallery1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery1s`
--

INSERT INTO `gallery1s` (`id`, `video`, `created_at`, `updated_at`) VALUES
(2, '7e736382-383c-4385-8391-f3834e4ac319.mp4', '2023-09-08 06:01:03', '2023-09-08 06:01:03'),
(3, '19691be8-7845-4873-a8de-5bfca64fbe76.mp4', '2023-09-08 06:01:15', '2023-09-08 06:01:15'),
(4, '94d8d1e4-8a14-4f4c-b874-ab0f8acc0efc.mp4', '2023-09-08 06:03:08', '2023-09-08 06:03:08'),
(5, '909fcbed-f9e4-4a5c-bb9f-1c537e0c85bd.mp4', '2023-09-08 06:04:07', '2023-09-08 06:04:07'),
(6, '79899f50-f045-406e-ab0f-0a747a6b15c7.mp4', '2023-09-08 06:07:02', '2023-09-08 06:07:02'),
(7, '60ce0113-f6ee-409d-be85-8301861fbb32.mp4', '2023-09-08 06:09:24', '2023-09-08 06:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `image`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, 'b4a10f44-9a18-455f-83da-e24bafb67e5e.png', 'Transport', 'Hundreds of new airports and ports will be constructed.', '2023-09-08 00:56:41', '2023-09-08 00:57:55'),
(2, '4de6dd8e-7762-4819-aa69-0141951f3f3a.png', 'Science & Technology', 'Our country will develop the best in Space, Science and Technology amongst the other nations.', '2023-09-08 01:07:57', '2023-09-08 04:50:04'),
(3, 'dfd7fd83-56f4-4ebc-bf51-41f9b1200128.png', 'Hypercities', '400 Hyper cities will be constructed with a living capacity of 60-70 crores.', '2023-09-08 01:08:52', '2023-09-08 01:08:52'),
(4, 'be3e52ed-f36d-4450-bc38-ea667cdcc28d.png', 'Agriculture', 'Agriculture will become the most important\r\nand profitable business all over the country.', '2023-09-08 01:09:53', '2023-09-08 01:09:53'),
(5, '9c15bfd6-553b-4aba-b23f-6d548ee88976.png', 'Rivers', 'Inter-state river water disputes shall be\r\nresolved and all the rivers in the country will\r\nbe interlinked.', '2023-09-08 01:10:45', '2023-09-08 01:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin');

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
(5, '2023_09_05_125457_create_basics_table', 1),
(6, '2023_09_07_042153_create_homes_table', 1),
(7, '2023_09_07_042229_create_abouts_table', 1),
(8, '2023_09_07_042241_create_contacts_table', 1),
(9, '2023_09_07_042253_create_obligations_table', 1),
(10, '2023_09_07_042304_create_galleries_table', 1),
(11, '2023_09_07_060925_create_gallery1s_table', 1),
(12, '2023_09_07_101411_create_resources_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obligations`
--

CREATE TABLE `obligations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obligations`
--

INSERT INTO `obligations` (`id`, `image`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, '4c9cc30a-64c3-4a9e-8a14-91f19d7ed994.jpg', 'Economy', 'A gradual and steady increase in the revenue of the government to 2000 lakh crores and more (2 Quadrillion).', '2023-09-08 07:01:02', '2023-09-08 07:01:02'),
(5, 'b074287e-d9f7-466a-802f-272159dc514d.jpg', 'Economy', 'India’s GDP will upsurge to $30 trillion and more by 2030.', '2023-09-09 00:01:39', '2023-09-09 00:01:39'),
(6, 'c18d9271-6709-47e3-b21e-fe9ec51d6a37.jpg', 'Economy', 'GDP per capita will be $21,512', '2023-09-09 00:42:07', '2023-09-09 00:42:07'),
(7, 'f4e7dbad-c292-43e3-8bc3-9231f5b77ea5.jpg', 'Economy', 'Our country will become the fastest growing economy in the world.', '2023-09-09 00:42:39', '2023-09-09 00:42:39'),
(8, '5417174c-96d1-4bb7-a82b-9093a75b27dc.jpg', 'Economy', 'India will hold the Foreign exchange reserves of 4000 Billion USD.', '2023-09-09 02:00:44', '2023-09-09 02:00:44'),
(9, 'b240f57f-f17b-4426-8dc4-b4ab4918f9eb.jpg', 'Economy', 'Gold reserves 10,000 - 20,000 tonnes.', '2023-09-09 02:01:37', '2023-09-09 02:01:37'),
(10, 'df844d99-b7f3-4359-aa6d-b944299b41c4.jpg', 'Growth', '100% employment opportunities will be guaranteed to every citizen of the country with a minimum salary of Rs.25,000 per month.', '2023-09-09 02:03:56', '2023-09-09 02:03:56'),
(11, '9fbf1cd9-2239-4281-9d7c-867d87705a66.jpg', 'Growth', 'Owning a house is a prevailing dream in most of us. By 2030, it will be redesigned with the possibility of making that dream memorable.', '2023-09-09 02:07:26', '2023-09-09 02:07:26'),
(12, '459b4d14-4808-46b6-a7e4-65f5e45c050d.jpg', 'Growth', 'Apart from the golden quadrilateral highway; which is considered as one of the longest highways in the world, India will have the longest road length and express hyper way networks for 1,00,000 km.', '2023-09-09 02:09:33', '2023-09-09 02:09:33'),
(13, '035d98af-b658-41cf-8f94-45ce15bb1a40.jpg', 'Growth', '400 Hyper cities will be constructed with a living capacity of 60-70 crores.', '2023-09-09 02:11:51', '2023-09-09 02:11:51'),
(14, '137c063e-1008-4369-9994-2bc9524e77a7.jpg', 'Growth', 'India, now being the world’s fourth longest railway network in the world, has an operating route length of 65,000 km nation wide. Increased rail capacity for people and freight, biggest high speed projects, bullet trains, hyperloop for 1,00,000 km connecting places across the country will lead India to have the longest and busiest railway networks amongst the world countries.', '2023-09-09 02:13:11', '2023-09-09 02:17:55'),
(15, '57f0e9d6-924f-4251-b1f2-895487c1592c.jpg', 'Growth', 'Air travel has become an integral part of life. India’s powerful economy, fairly high income per capita, extensive business environment will lead to have the highest number of air passengers in the world.', '2023-09-09 02:23:52', '2023-09-09 02:23:52'),
(16, 'b39efbfe-7751-4dc4-a204-0a56b6b5adee.jpg', 'Achievment', 'Our country will have the highest number of billionaires and happiest people in the world.', '2023-09-09 02:27:58', '2023-09-09 02:27:58'),
(17, '8d886708-ca37-4851-9961-f6524816de88.jpg', 'Achievment', 'Indian currency will be transacted as the global currency.', '2023-09-09 02:33:36', '2023-09-09 02:33:36'),
(18, '0e05dadc-6d31-4980-bf11-cbb415a23ae7.jpg', 'Achievment', 'India will rank first in having the strongest world\'s military power.', '2023-09-09 02:36:18', '2023-09-09 02:36:18'),
(19, 'c8c62045-4dd3-488c-bd90-e9ff9abb94a2.png', 'Achievment', '100% employment opportunities will be guaranteed to every citizen of the country with a minimum salary of Rs.25,000 per month.', '2023-09-09 02:39:25', '2023-09-09 02:39:25');

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
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `image`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, '62a38bf3-b925-4df2-b7fc-61aca09ccb25.png', 'Petroleum', 'Petrol and diesel prices will be lowered to\r\nless than Rs.30 per liter.', '2023-09-08 03:58:53', '2023-09-08 03:58:53'),
(2, 'd0639ba3-437e-4a03-9852-460e6f04251f.jpg', 'Gold', 'Gold reserves 10,000 - 20,000 tonnes.', '2023-09-08 04:13:21', '2023-09-08 04:13:21'),
(3, '67cbe48d-ac4f-4457-ba0a-ca11ec940680.jpg', 'Military', 'Indian will rank first in having the strongest world\'s military power.', '2023-09-08 04:34:20', '2023-09-08 04:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basics`
--
ALTER TABLE `basics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery1s`
--
ALTER TABLE `gallery1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obligations`
--
ALTER TABLE `obligations`
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
-- Indexes for table `resources`
--
ALTER TABLE `resources`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basics`
--
ALTER TABLE `basics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery1s`
--
ALTER TABLE `gallery1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `obligations`
--
ALTER TABLE `obligations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
