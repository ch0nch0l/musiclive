-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 07:41 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(2, 'Srilanka'),
(3, 'Afghanistan'),
(4, 'Albania'),
(5, 'Algeria'),
(6, 'Andorra'),
(7, 'Angola'),
(8, 'Antigua and Barbuda'),
(9, 'Argentina'),
(10, 'Armenia'),
(11, 'Australia'),
(12, 'Austria'),
(13, 'Azerbaijan'),
(14, 'Bahamas, The'),
(15, 'Bahrain'),
(16, 'Bangladesh'),
(17, 'Barbados'),
(18, 'Belarus'),
(19, 'Belgium'),
(20, 'Belize'),
(21, 'Benin'),
(22, 'Bhutan'),
(23, 'Bolivia'),
(24, 'Bosnia and Herzegovina'),
(25, 'Botswana'),
(26, 'Brazil'),
(27, 'Brunei'),
(28, 'Bulgaria'),
(29, 'Burkina Faso'),
(30, 'Burma'),
(31, 'Burundi'),
(32, 'Cambodia'),
(33, 'Cameroon'),
(34, 'Canada'),
(35, 'Cape Verde'),
(36, 'Central Africa'),
(37, 'Chad'),
(38, 'Chile'),
(39, 'China'),
(40, 'Colombia'),
(41, 'Comoros'),
(42, 'Congo, Democratic Republic of the'),
(43, 'Costa Rica'),
(44, 'Cote dIvoire'),
(45, 'Crete'),
(46, 'Croatia'),
(47, 'Cuba'),
(48, 'Cyprus'),
(49, 'Czech Republic'),
(50, 'Denmark'),
(51, 'Djibouti'),
(52, 'Dominican Republic'),
(53, 'East Timor'),
(54, 'Ecuador'),
(55, 'Egypt'),
(56, 'El Salvador'),
(57, 'Equatorial Guinea'),
(58, 'Eritrea'),
(59, 'Estonia'),
(60, 'Ethiopia'),
(61, 'Fiji'),
(62, 'Finland'),
(63, 'France'),
(64, 'Gabon'),
(65, 'Gambia, The'),
(66, 'Georgia'),
(67, 'Germany'),
(68, 'Ghana'),
(69, 'Greece'),
(70, 'Grenada'),
(71, 'Guadeloupe'),
(72, 'Guatemala'),
(73, 'Guinea'),
(74, 'Guinea-Bissau'),
(75, 'Guyana'),
(76, 'Haiti'),
(77, 'Holy See'),
(78, 'Honduras'),
(79, 'Hong Kong'),
(80, 'Hungary'),
(81, 'Iceland'),
(82, 'India'),
(83, 'Indonesia'),
(84, 'Iran'),
(85, 'Iraq'),
(86, 'Ireland'),
(87, 'Israel'),
(88, 'Italy'),
(89, 'Ivory Coast'),
(90, 'Jamaica'),
(91, 'Japan'),
(92, 'Jordan'),
(93, 'Kazakhstan'),
(94, 'Kenya'),
(95, 'Kiribati'),
(96, 'Korea, North'),
(97, 'Korea, South'),
(98, 'Kosovo'),
(99, 'Kuwait'),
(100, 'Kyrgyzstan'),
(101, 'Laos'),
(102, 'Latvia'),
(103, 'Lebanon'),
(104, 'Lesotho'),
(105, 'Liberia'),
(106, 'Libya'),
(107, 'Liechtenstein'),
(108, 'Lithuania'),
(109, 'Macau'),
(110, 'Macedonia'),
(111, 'Madagascar'),
(112, 'Malawi'),
(113, 'Malaysia'),
(114, 'Maldives'),
(115, 'Mali'),
(116, 'Malta'),
(117, 'Marshall Islands'),
(118, 'Mauritania'),
(119, 'Mauritius'),
(120, 'Mexico'),
(121, 'Micronesia'),
(122, 'Moldova'),
(123, 'Monaco'),
(124, 'Mongolia'),
(125, 'Montenegro'),
(126, 'Morocco'),
(127, 'Mozambique'),
(128, 'Namibia'),
(129, 'Nauru'),
(130, 'Nepal'),
(131, 'Netherlands'),
(132, 'New Zealand'),
(133, 'Nicaragua'),
(134, 'Niger'),
(135, 'Nigeria'),
(136, 'North Korea'),
(137, 'Norway'),
(138, 'Oman'),
(139, 'Pakistan'),
(140, 'Palau'),
(141, 'Panama'),
(142, 'Papua New Guinea'),
(143, 'Paraguay'),
(144, 'Peru'),
(145, 'Philippines'),
(146, 'Poland'),
(147, 'Portugal'),
(148, 'Qatar'),
(149, 'Romania'),
(150, 'Russia'),
(151, 'Rwanda'),
(152, 'Saint Lucia'),
(153, 'Saint Vincent and the Grenadines'),
(154, 'Samoa'),
(155, 'San Marino'),
(156, 'Sao Tome and Principe'),
(157, 'Saudi Arabia'),
(158, 'Scotland'),
(159, 'Senegal'),
(160, 'Serbia'),
(161, 'Seychelles'),
(162, 'Sierra Leone'),
(163, 'Singapore'),
(164, 'Slovakia'),
(165, 'Slovenia'),
(166, 'Solomon Islands'),
(167, 'Somalia'),
(168, 'South Africa'),
(169, 'South Korea'),
(170, 'Spain'),
(171, 'Sri Lanka'),
(172, 'Sudan'),
(173, 'Suriname'),
(174, 'Swaziland'),
(175, 'Sweden'),
(176, 'Switzerland'),
(177, 'Syria'),
(178, 'Taiwan'),
(179, 'Tajikistan'),
(180, 'Tanzania'),
(181, 'Thailand'),
(182, 'Tibet'),
(183, 'Timor-Leste'),
(184, 'Togo'),
(185, 'Tonga'),
(186, 'Trinidad and Tobago'),
(187, 'Tunisia'),
(188, 'Turkey'),
(189, 'Turkmenistan'),
(190, 'Tuvalu'),
(191, 'Uganda'),
(192, 'Ukraine'),
(193, 'United Arab Emirates'),
(194, 'United Kingdom'),
(195, 'United States'),
(196, 'Uruguay'),
(197, 'Uzbekistan'),
(198, 'Vanuatu'),
(199, 'Venezuela'),
(200, 'Vietnam'),
(201, 'Yemen'),
(202, 'Zambia'),
(203, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','deactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `entry_by` bigint(32) DEFAULT NULL,
  `modify_by` bigint(32) DEFAULT NULL,
  `_token` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `menu_url`, `status`, `created_at`, `updated_at`, `entry_by`, `modify_by`, `_token`, `icon`) VALUES
(1, 'Packages', 'pkg', 'active', '2020-07-15 14:17:26', '2020-07-17 01:02:41', 33, 33, 'yh41rPBIQHiB7t1p6z7s7LmZzJxvwTToykRVlv4x', 'fa-list-alt'),
(2, 'Music', 'music', 'active', '2020-07-15 14:24:33', '2020-07-17 01:00:25', 33, 33, 'yh41rPBIQHiB7t1p6z7s7LmZzJxvwTToykRVlv4x', 'fa-music');

-- --------------------------------------------------------

--
-- Table structure for table `menu_permissions`
--

CREATE TABLE `menu_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `main_menu_id` int(11) NOT NULL,
  `sub_menu_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `remember_token` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_permissions`
--

INSERT INTO `menu_permissions` (`id`, `main_menu_id`, `sub_menu_id`, `user_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 4, 4, 41, 0, '2019-10-23 00:45:39', '2019-10-23 00:45:39'),
(2, 1, 1, 42, 0, '2020-01-30 19:09:27', '2020-01-30 19:09:27'),
(3, 1, 3, 44, 0, '2020-02-09 13:19:25', '2020-02-09 13:19:25'),
(4, 1, 5, 44, 0, '2020-02-09 13:19:25', '2020-02-09 13:19:25'),
(5, 1, 6, 44, 0, '2020-02-09 13:19:25', '2020-02-09 13:19:25'),
(6, 1, 7, 44, 0, '2020-02-09 13:19:25', '2020-02-09 13:19:25'),
(8, 2, 2, 44, 0, '2020-02-09 13:19:47', '2020-02-09 13:19:47'),
(9, 3, 1, 44, 0, '2020-02-09 13:19:59', '2020-02-09 13:19:59'),
(10, 4, 4, 44, 0, '2020-02-09 13:20:07', '2020-02-09 13:20:07'),
(11, 15, 37, 44, 0, '2020-02-09 13:20:15', '2020-02-09 13:20:15');

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
(1, '2020_07_15_203520_create_plan_table', 1),
(2, '2020_07_15_205056_create_music_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `musics`
--

CREATE TABLE `musics` (
  `id` int(10) UNSIGNED NOT NULL,
  `track_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `musics`
--

INSERT INTO `musics` (`id`, `track_name`, `album_name`, `artist_name`, `genre`, `category`, `release_date`, `location`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lamb of God - Laid to rest (HQ).mp3', 'Lamb of god', 'Lamb of god', 'Metalcore', 'Metal', '2020-07-20', 'Dhaka', '1', '2020-07-20 11:16:17', '2020-07-20 11:52:44'),
(2, 'Lamb of God - The Duke (Official Audio).mp3', 'Lamb of god', 'Lamb of god', 'Metalcore', 'Metal', '2020-07-20', 'Dhaka', '1', '2020-07-20 11:16:17', '2020-07-20 11:52:44'),
(3, 'Lamb of God - Walk With Me In Hell Instrumental.mp3', 'Lamb of god', 'Lamb of god', 'Metalcore', 'Metal', '2020-07-20', 'Dhaka', '1', '2020-07-20 11:16:17', '2020-07-20 11:52:44'),
(4, 'Mark Morton - Cross Off (Lyric Video) ft. Chester Bennington.mp3', 'Lamb of god', 'Lamb of god', 'Metalcore', 'Metal', '2020-07-20', 'Dhaka', '1', '2020-07-20 11:16:17', '2020-07-20 11:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sksshouvo2@gmail.com', '$2y$10$G6Q6ENKPnybB250abJuB/OSTnS3Bkw01dfRKbghG0SY9256eQICA.', '2020-02-01 23:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `plan_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actual_cost` double(8,2) NOT NULL,
  `sale_cost` double(8,2) NOT NULL,
  `duration` int(11) NOT NULL,
  `duration_unit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `playback_limit` int(32) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan_name`, `actual_cost`, `sale_cost`, `duration`, `duration_unit`, `details`, `playback_limit`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test Pkg 1', 50.00, 60.00, 2, 'Month', 'Test', 100, '0', '2020-07-17 05:50:42', '2020-07-17 08:12:26'),
(2, 'Test Pkg 2', 50.00, 60.00, 2, 'Month', 'Test', 100, '0', '2020-07-17 05:50:42', '2020-07-17 08:12:26'),
(3, 'Test Pkg 3', 50.00, 60.00, 2, 'Month', 'Test', 100, '0', '2020-07-17 05:50:42', '2020-07-17 08:12:26'),
(4, 'Test Pkg 4', 50.00, 60.00, 2, 'Month', 'Test', 100, '0', '2020-07-17 05:50:42', '2020-07-17 08:12:26'),
(5, 'Test Pkg 5', 50.00, 60.00, 2, 'Month', 'Test', 100, '0', '2020-07-17 05:50:42', '2020-07-17 08:12:26'),
(6, 'Test Pkg 6', 50.00, 60.00, 2, 'Month', 'Test', 100, '0', '2020-07-17 05:50:42', '2020-07-17 08:12:26'),
(7, 'Test Pkg 7', 50.00, 60.00, 2, 'Month', 'Test', 100, '0', '2020-07-17 05:50:42', '2020-07-17 08:12:26'),
(8, 'Test Pkg 8', 50.00, 60.00, 2, 'Month', 'Test', 100, '0', '2020-07-17 05:50:42', '2020-07-17 08:12:26');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Moderator', NULL, NULL),
(3, 'Executive Officer', NULL, NULL),
(4, 'Staffs', NULL, NULL),
(5, 'Interns', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, '1', '1', NULL, NULL),
(2, '2', '2', NULL, NULL),
(3, '3', '3', NULL, NULL),
(4, '4', '1', NULL, NULL),
(5, '1', '3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_menus`
--

CREATE TABLE `sub_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_menu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_menu_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_menu_id` int(32) NOT NULL,
  `status` enum('active','deactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `entry_by` bigint(32) NOT NULL,
  `modify_by` bigint(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menus`
--

INSERT INTO `sub_menus` (`id`, `sub_menu_name`, `sub_menu_url`, `main_menu_id`, `status`, `icon`, `created_at`, `updated_at`, `entry_by`, `modify_by`) VALUES
(1, 'Manage', 'plan', 1, 'active', 'fa-cogs', '2020-07-15 14:20:40', '2020-07-17 01:03:08', 33, 33),
(5, 'Add Music', 'add_music', 2, 'active', 'fa-file-audio-o', '2020-07-15 14:31:12', '2020-07-17 01:01:45', 33, 33),
(6, 'Music List', 'music_list', 2, 'active', 'fa-headphones', '2020-07-15 14:26:35', '2020-07-17 01:01:13', 33, 33);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `entry_by` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `country`, `created_at`, `updated_at`, `mobile`, `role_id`, `status`, `entry_by`) VALUES
(33, 'Salman Kabir (Shouvo)', 'sksshouvo2@gmail.com', '$2y$10$akqAU3l1pYKbvKoLEwl.FeRG9RfBMhPyUcWzlSrUuHfhIFdrvaLMC', 'nObl4RgFrT7AEk0dR3cCGh8Gl63G7MYsj0nOw3AdoVb1adM7DqhQVQawe3ft', 'Bangladesh', '2018-03-13 13:56:32', '2020-06-30 04:14:35', '01970702837', 'Admin', 1, 33),
(44, 'Test', 'test@test.com', '$2y$10$TdHTilEIT4pmhGajS6VSo.TiGlo5kEVY19GZf06ntm.HWnQtcmdkq', 'z7Wohukzz8dnQwciy2z2TdpkPwcE7HxwmJbEGRTTCPfNYnTgocAxw8eE2Krs', 'Bangladesh', '2020-02-01 23:57:28', '2020-02-09 13:18:57', '01900000000', 'Staffs', 1, 44),
(45, 'Mehedi hasan Chonchol', 'chonchol.am@gmail.com', '$2y$10$GvoJL7IYlbckeTJWC8ahS.y4ebe38AZoWjUeYYia3z1e9jf12/ls6', NULL, 'Bangladesh', '2020-07-15 14:13:33', '2020-07-15 14:13:33', '01678035887', 'Admin', 1, 33);

-- --------------------------------------------------------

--
-- Table structure for table `user_plan`
--

CREATE TABLE `user_plan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `expire_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `menu_permissions`
--
ALTER TABLE `menu_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musics`
--
ALTER TABLE `musics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`(191)),
  ADD KEY `role_id` (`role_id`(191));

--
-- Indexes for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_plan`
--
ALTER TABLE `user_plan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_permissions`
--
ALTER TABLE `menu_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `musics`
--
ALTER TABLE `musics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user_plan`
--
ALTER TABLE `user_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
