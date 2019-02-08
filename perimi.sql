-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2019 at 10:54 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perimi`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `image`) VALUES
(2, 'Restaurant', '2018-07-30 14:17:00', '2018-08-07 00:06:16', 'categories\\August2018\\N9LmxmJYItFkoErSVMN5.jpg'),
(3, 'Hotels & Accommodation', '2018-07-30 14:18:00', '2018-08-07 00:09:54', 'categories\\August2018\\wqfdtBCnMM0YZz9FPy74.jpg'),
(5, 'Tour & Travels', '2018-07-30 14:20:00', '2018-08-07 00:08:10', 'categories\\August2018\\3xc1cvD5vdpiiG5MVU6b.jpg'),
(6, 'Bars & Clubs', '2018-07-30 14:20:00', '2018-08-07 00:07:17', 'categories\\August2018\\6cvPS154mZZGm2d9kdZZ.jpg'),
(7, 'Medical', '2018-08-06 21:58:00', '2018-08-07 00:10:15', 'categories\\August2018\\7Aik8Iz3b5QPGhyj5yPg.jpg'),
(8, 'Entertainment', '2018-08-06 21:59:00', '2018-08-07 00:08:37', 'categories\\August2018\\hBbzJjhyBhWNSwn6349G.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 7),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 8),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 9),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 10),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 12),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 13),
(12, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 14),
(13, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(14, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(15, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '', 3),
(16, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 4),
(17, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(18, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(19, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '', 3),
(20, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 4),
(21, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '', 5),
(22, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, NULL, 11),
(58, 1, 'phone', 'text', 'Phone', 0, 1, 1, 1, 1, 1, NULL, 6),
(59, 7, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(60, 7, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(61, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 4),
(62, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
(63, 8, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(64, 8, 'states', 'text', 'States', 1, 1, 1, 1, 1, 1, NULL, 2),
(65, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 3),
(66, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(67, 9, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(68, 9, 'user_id', 'text', 'User Id', 0, 1, 1, 1, 1, 1, NULL, 3),
(69, 9, 'category_id', 'text', 'Category Id', 0, 1, 1, 1, 1, 1, NULL, 5),
(70, 9, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 6),
(71, 9, 'tagline', 'text', 'Tagline', 0, 1, 1, 1, 1, 1, NULL, 7),
(72, 9, 'description', 'text_area', 'Description', 0, 1, 1, 1, 1, 1, NULL, 8),
(73, 9, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, NULL, 9),
(74, 9, 'phone', 'number', 'Phone', 0, 1, 1, 1, 1, 1, NULL, 10),
(75, 9, 'website', 'text', 'Website', 0, 1, 1, 1, 1, 1, NULL, 11),
(76, 9, 'address', 'text', 'Address', 0, 1, 1, 1, 1, 1, NULL, 12),
(77, 9, 'state_id', 'text', 'State Id', 0, 1, 1, 1, 1, 1, NULL, 14),
(78, 9, 'logo', 'image', 'Logo', 0, 1, 1, 1, 1, 1, NULL, 15),
(79, 9, 'cover_image', 'image', 'Cover Image', 0, 1, 1, 1, 1, 1, NULL, 16),
(80, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 17),
(81, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 18),
(82, 9, 'listing_belongsto_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 4),
(83, 9, 'listing_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2),
(84, 9, 'listing_belongsto_state_relationship', 'relationship', 'states', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\State\",\"table\":\"states\",\"type\":\"belongsTo\",\"column\":\"state_id\",\"key\":\"id\",\"label\":\"states\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 13),
(95, 13, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(96, 13, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, NULL, 2),
(97, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 3),
(98, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(99, 14, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(100, 14, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(101, 14, 'tagline', 'text', 'Tagline', 0, 1, 1, 1, 1, 1, NULL, 3),
(102, 14, 'details', 'text_area', 'Details', 1, 1, 1, 1, 1, 1, NULL, 4),
(103, 14, 'venue', 'text_area', 'Venue', 0, 1, 1, 1, 1, 1, NULL, 5),
(104, 14, 'date', 'date', 'Date', 0, 1, 1, 1, 1, 1, NULL, 6),
(105, 14, 'time', 'time', 'Time', 0, 1, 1, 1, 1, 1, NULL, 7),
(106, 14, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 8),
(107, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 9),
(110, 14, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(111, 7, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, NULL, 3),
(112, 1, 'company', 'text', 'Company', 0, 1, 1, 1, 1, 1, NULL, 5),
(113, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(114, 15, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, NULL, 2),
(115, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 3),
(116, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(118, 14, 'event_belongsto_eventcategory_relationship', 'relationship', 'eventcategories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Eventcategory\",\"table\":\"eventcategories\",\"type\":\"belongsTo\",\"column\":\"eventcategory_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 13),
(119, 14, 'event_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 14),
(120, 14, 'eventcategory_id', 'text', 'Eventcategory Id', 0, 1, 1, 1, 1, 1, NULL, 11),
(121, 14, 'user_id', 'text', 'User Id', 0, 1, 1, 1, 1, 1, NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-07-26 23:25:46', '2018-07-27 23:36:56'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2018-07-26 23:25:46', '2018-07-26 23:25:46'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2018-07-26 23:25:46', '2018-07-26 23:25:46'),
(7, 'categories', 'categories', 'Category', 'Categories', NULL, 'App\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-07-30 14:10:40', '2018-07-30 14:10:40'),
(8, 'states', 'states', 'State', 'States', NULL, 'App\\State', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-07-30 20:33:04', '2018-07-30 20:33:04'),
(9, 'listings', 'listings', 'Listing', 'Listings', NULL, 'App\\Listing', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-07-30 21:09:38', '2018-07-30 21:09:38'),
(13, 'event_categories', 'event-categories', 'Event Category', 'Event Categories', NULL, 'App\\EventCategory', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-07-31 19:09:36', '2018-07-31 19:09:36'),
(14, 'events', 'events', 'Event', 'Events', NULL, 'App\\Event', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-07-31 19:37:01', '2018-07-31 19:37:01'),
(15, 'eventcategories', 'eventcategories', 'Eventcategory', 'Eventcategories', NULL, 'App\\Eventcategory', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-08-10 22:48:28', '2018-08-10 22:48:28');

-- --------------------------------------------------------

--
-- Table structure for table `eventcategories`
--

CREATE TABLE `eventcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eventcategories`
--

INSERT INTO `eventcategories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Art', '2018-07-31 19:13:50', '2018-07-31 19:13:50'),
(2, 'Causes', '2018-07-31 19:14:04', '2018-07-31 19:14:04'),
(3, 'Comedy', '2018-07-31 19:14:17', '2018-07-31 19:14:17'),
(4, 'Crafts', '2018-07-31 19:14:45', '2018-07-31 19:14:45'),
(5, 'Dance', '2018-07-31 19:15:01', '2018-07-31 19:15:01'),
(6, 'Drinks', '2018-07-31 19:15:13', '2018-07-31 19:15:13'),
(7, 'Film', '2018-07-31 19:15:28', '2018-07-31 19:15:28'),
(8, 'Fitness', '2018-07-31 19:15:38', '2018-07-31 19:15:38'),
(9, 'Food', '2018-07-31 19:16:22', '2018-07-31 19:16:22'),
(10, 'Games', '2018-07-31 19:16:41', '2018-07-31 19:16:41'),
(11, 'Gardening', '2018-07-31 19:17:00', '2018-07-31 19:17:00'),
(12, 'Health', '2018-07-31 19:17:13', '2018-07-31 19:17:13'),
(13, 'Home', '2018-07-31 19:17:33', '2018-07-31 19:17:33'),
(14, 'Literature', '2018-07-31 19:17:46', '2018-07-31 19:17:46'),
(15, 'Music', '2018-07-31 19:17:59', '2018-07-31 19:17:59'),
(16, 'Networking', '2018-07-31 19:18:12', '2018-07-31 19:18:12'),
(18, 'Party', '2018-07-31 19:18:49', '2018-07-31 19:18:49'),
(19, 'Religion', '2018-07-31 19:19:00', '2018-07-31 19:19:00'),
(20, 'Shopping', '2018-07-31 19:19:11', '2018-07-31 19:19:11'),
(21, 'Sports', '2018-07-31 19:19:24', '2018-07-31 19:19:24'),
(22, 'Theater', '2018-07-31 19:20:23', '2018-07-31 19:20:23'),
(23, 'Wellness', '2018-07-31 19:20:59', '2018-07-31 19:20:59'),
(24, 'Others', '2018-07-31 19:21:12', '2018-07-31 19:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `eventcategory_id` int(11) DEFAULT '24',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `tagline`, `details`, `venue`, `date`, `time`, `created_at`, `updated_at`, `eventcategory_id`, `image`, `user_id`) VALUES
(1, 'Peaches n Cream', 'booty all d way', 'Lorem ipsum something sha', 'Somewhere over the rainbow', '2018-08-08', '22:00', '2018-08-02 19:01:00', '2018-09-17 05:52:47', 5, 'events\\August2018\\wEtDrSMyQZScyexE1pmR.jpeg', 3),
(2, 'Let the rain come down', 'Fire from on high', 'Come chill in the lords presence', 'somewhere in zion', '2018-08-11', '17:00', '2018-08-02 19:08:00', '2018-09-17 05:52:10', 19, 'events\\August2018\\4Y5GiW45SfJMuVlTcGPO.jpg', 3),
(3, 'Spin Class Marathon', 'come burn that unnecessary weight', 'somethings about loosing weight', 'somewhere over the rainbow', '2018-08-18', '08:00', '2018-08-02 19:13:00', '2018-09-17 05:52:01', 8, 'events\\August2018\\mPR09ns6NvByV2mS7nuA.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `state_id` int(11) DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `user_id`, `category_id`, `name`, `tagline`, `description`, `email`, `phone`, `website`, `address`, `state_id`, `logo`, `cover_image`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Suprimm Entertainment', 'showcasing to the world', 'We make music video and other visuals', 'suprimm@gmail.com', '09076565678', 'http://www.suprimm.com.ng', 'somewhere over the rainbow', 20, 'listings\\August2018\\RBAa7R1bBHXHbCO6NV6l.png', 'listings\\August2018\\iY5XsD1IRrQt1NIkR9rV.jpg', '2018-08-02 19:40:00', '2018-08-07 01:07:37'),
(2, 2, 6, 'Club Jazzy', 'Fun like no other', 'bla bla bla bla', 'jazzy@jazzy.com', '89098508434', 'jazzy.com', 'somewhere in ibadan', 10, 'listings\\August2018\\0sltp8p2yfCNQFN1GsvO.png', 'listings\\August2018\\S2zBnUF4ELOoXyeEssZp.jpg', '2018-08-07 07:06:00', '2018-08-30 22:20:17'),
(3, 2, 3, 'ABC Hotels', 'sleepy heads', 'rest like never before', 'abc@hotels.com', '12345678903', 'abchotels.com', 'somewhere on the island', 20, 'listings\\August2018\\5X68dpsEkUyHwT9PYLe5.png', 'listings\\August2018\\WPsKP1TtqnQ1bo82LbU6.jpg', '2018-08-07 07:11:19', '2018-08-07 07:11:19'),
(4, 3, 2, 'Taradah Pots', 'your enjoyment is our priority', 'We make and deliver home cooked meals directly to your door step', 'taradah@gmail.com', '08056789874', NULL, 'Gbagbada', 20, 'listings\\August2018\\9usm3E0ECvvP5G5EvJbr.png', 'listings\\August2018\\1mPq8hs8Rr7bepjpFs6q.jpg', '2018-08-18 05:31:33', '2018-08-18 05:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-07-26 23:25:47', '2018-07-26 23:25:47');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2018-07-26 23:25:48', '2018-07-26 23:25:48', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 9, '2018-07-26 23:25:48', '2018-07-31 19:39:23', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2018-07-26 23:25:48', '2018-07-26 23:25:48', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2018-07-26 23:25:48', '2018-07-26 23:25:48', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 10, '2018-07-26 23:25:48', '2018-07-31 19:39:23', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2018-07-26 23:25:48', '2018-07-30 14:12:05', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2018-07-26 23:25:48', '2018-07-30 14:12:05', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2018-07-26 23:25:48', '2018-07-30 14:12:05', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2018-07-26 23:25:48', '2018-07-30 14:12:05', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 11, '2018-07-26 23:25:48', '2018-07-31 19:39:23', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 5, '2018-07-26 23:25:57', '2018-07-31 18:36:16', 'voyager.categories.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2018-07-26 23:26:05', '2018-07-30 14:12:05', 'voyager.hooks', NULL),
(15, 1, 'States', '', '_self', 'voyager-location', '#000000', NULL, 8, '2018-07-30 20:33:04', '2018-07-31 19:39:23', 'voyager.states.index', 'null'),
(16, 1, 'Listings', '', '_self', 'voyager-list', '#000000', NULL, 4, '2018-07-30 21:09:39', '2018-07-30 21:12:23', 'voyager.listings.index', 'null'),
(18, 1, 'Event Categories', '', '_self', 'voyager-wineglass', '#000000', NULL, 6, '2018-07-31 19:09:37', '2018-07-31 19:12:48', 'voyager.event-categories.index', 'null'),
(19, 1, 'Events', '', '_self', 'voyager-calendar', '#000000', NULL, 7, '2018-07-31 19:37:02', '2018-07-31 19:41:31', 'voyager.events.index', 'null'),
(20, 1, 'Eventcategories', '', '_self', NULL, NULL, NULL, 12, '2018-08-10 22:48:28', '2018-08-10 22:48:28', 'voyager.eventcategories.index', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2016_01_01_000000_create_pages_table', 2),
(24, '2016_01_01_000000_create_posts_table', 2),
(25, '2016_02_15_204651_create_categories_table', 2),
(26, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$.b5EtsJqHHxIoJxevdUdIO4qzUh4yFGtUOb4DQgeCysEdunfEr05O', '2018-08-06 01:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2018-07-26 23:25:48', '2018-07-26 23:25:48'),
(2, 'browse_bread', NULL, '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(3, 'browse_database', NULL, '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(4, 'browse_media', NULL, '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(5, 'browse_compass', NULL, '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(6, 'browse_menus', 'menus', '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(7, 'read_menus', 'menus', '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(8, 'edit_menus', 'menus', '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(9, 'add_menus', 'menus', '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(10, 'delete_menus', 'menus', '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(11, 'browse_roles', 'roles', '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(12, 'read_roles', 'roles', '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(13, 'edit_roles', 'roles', '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(14, 'add_roles', 'roles', '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(15, 'delete_roles', 'roles', '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(16, 'browse_users', 'users', '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(17, 'read_users', 'users', '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(18, 'edit_users', 'users', '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(19, 'add_users', 'users', '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(20, 'delete_users', 'users', '2018-07-26 23:25:49', '2018-07-26 23:25:49'),
(21, 'browse_settings', 'settings', '2018-07-26 23:25:50', '2018-07-26 23:25:50'),
(22, 'read_settings', 'settings', '2018-07-26 23:25:50', '2018-07-26 23:25:50'),
(23, 'edit_settings', 'settings', '2018-07-26 23:25:50', '2018-07-26 23:25:50'),
(24, 'add_settings', 'settings', '2018-07-26 23:25:50', '2018-07-26 23:25:50'),
(25, 'delete_settings', 'settings', '2018-07-26 23:25:50', '2018-07-26 23:25:50'),
(41, 'browse_hooks', NULL, '2018-07-26 23:26:05', '2018-07-26 23:26:05'),
(42, 'browse_categories', 'categories', '2018-07-30 14:10:41', '2018-07-30 14:10:41'),
(43, 'read_categories', 'categories', '2018-07-30 14:10:41', '2018-07-30 14:10:41'),
(44, 'edit_categories', 'categories', '2018-07-30 14:10:41', '2018-07-30 14:10:41'),
(45, 'add_categories', 'categories', '2018-07-30 14:10:41', '2018-07-30 14:10:41'),
(46, 'delete_categories', 'categories', '2018-07-30 14:10:41', '2018-07-30 14:10:41'),
(47, 'browse_states', 'states', '2018-07-30 20:33:04', '2018-07-30 20:33:04'),
(48, 'read_states', 'states', '2018-07-30 20:33:04', '2018-07-30 20:33:04'),
(49, 'edit_states', 'states', '2018-07-30 20:33:04', '2018-07-30 20:33:04'),
(50, 'add_states', 'states', '2018-07-30 20:33:04', '2018-07-30 20:33:04'),
(51, 'delete_states', 'states', '2018-07-30 20:33:04', '2018-07-30 20:33:04'),
(52, 'browse_listings', 'listings', '2018-07-30 21:09:39', '2018-07-30 21:09:39'),
(53, 'read_listings', 'listings', '2018-07-30 21:09:39', '2018-07-30 21:09:39'),
(54, 'edit_listings', 'listings', '2018-07-30 21:09:39', '2018-07-30 21:09:39'),
(55, 'add_listings', 'listings', '2018-07-30 21:09:39', '2018-07-30 21:09:39'),
(56, 'delete_listings', 'listings', '2018-07-30 21:09:39', '2018-07-30 21:09:39'),
(62, 'browse_event_categories', 'event_categories', '2018-07-31 19:09:36', '2018-07-31 19:09:36'),
(63, 'read_event_categories', 'event_categories', '2018-07-31 19:09:36', '2018-07-31 19:09:36'),
(64, 'edit_event_categories', 'event_categories', '2018-07-31 19:09:36', '2018-07-31 19:09:36'),
(65, 'add_event_categories', 'event_categories', '2018-07-31 19:09:36', '2018-07-31 19:09:36'),
(66, 'delete_event_categories', 'event_categories', '2018-07-31 19:09:36', '2018-07-31 19:09:36'),
(67, 'browse_events', 'events', '2018-07-31 19:37:02', '2018-07-31 19:37:02'),
(68, 'read_events', 'events', '2018-07-31 19:37:02', '2018-07-31 19:37:02'),
(69, 'edit_events', 'events', '2018-07-31 19:37:02', '2018-07-31 19:37:02'),
(70, 'add_events', 'events', '2018-07-31 19:37:02', '2018-07-31 19:37:02'),
(71, 'delete_events', 'events', '2018-07-31 19:37:02', '2018-07-31 19:37:02'),
(72, 'browse_eventcategories', 'eventcategories', '2018-08-10 22:48:28', '2018-08-10 22:48:28'),
(73, 'read_eventcategories', 'eventcategories', '2018-08-10 22:48:28', '2018-08-10 22:48:28'),
(74, 'edit_eventcategories', 'eventcategories', '2018-08-10 22:48:28', '2018-08-10 22:48:28'),
(75, 'add_eventcategories', 'eventcategories', '2018-08-10 22:48:28', '2018-08-10 22:48:28'),
(76, 'delete_eventcategories', 'eventcategories', '2018-08-10 22:48:28', '2018-08-10 22:48:28');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2018-07-26 23:25:48', '2018-07-26 23:25:48'),
(2, 'user', 'Normal User', '2018-07-26 23:25:48', '2018-07-26 23:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Perimi', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Admin', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings\\July2018\\E6UeotVIP5gf6r8cWhcR.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings\\July2018\\wmGcHpZbDR8QZJR12xvy.jpg', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Perimi', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Around Lagos', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', 'settings\\July2018\\JyYHusFcNQ24nVOC3EQP.png', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings\\July2018\\PZqPyzGtqFdjOVRFsERs.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `states` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `states`, `created_at`, `updated_at`) VALUES
(1, 'Abia', '2018-07-30 20:36:57', '2018-07-30 20:36:57'),
(2, 'Adamawa', '2018-07-30 20:40:27', '2018-07-30 20:40:27'),
(3, 'Akwa Ibom', '2018-07-30 20:41:03', '2018-07-30 20:41:03'),
(4, 'Anambra', '2018-07-30 20:41:24', '2018-07-30 20:41:24'),
(5, 'Bauchi', '2018-07-30 20:41:36', '2018-07-30 20:41:36'),
(6, 'Bayelsa', '2018-07-30 20:41:53', '2018-07-30 20:41:53'),
(7, 'Benue', '2018-07-30 20:42:15', '2018-07-30 20:42:15'),
(8, 'Borno', '2018-07-30 20:42:34', '2018-07-30 20:42:34'),
(9, 'Cross River', '2018-07-30 20:43:00', '2018-07-30 20:43:00'),
(10, 'Delta', '2018-07-30 20:43:23', '2018-07-30 20:43:23'),
(11, 'Ebonyi', '2018-07-30 20:43:37', '2018-07-30 20:43:37'),
(12, 'Edo', '2018-07-30 20:43:46', '2018-07-30 20:43:46'),
(13, 'Ekiti', '2018-07-30 20:44:01', '2018-07-30 20:44:01'),
(14, 'Enugu', '2018-07-30 20:44:25', '2018-07-30 20:44:25'),
(15, 'Gombe', '2018-07-30 20:44:35', '2018-07-30 20:44:35'),
(16, 'Imo', '2018-07-30 20:44:43', '2018-07-30 20:44:43'),
(17, 'Jigawa', '2018-07-30 20:44:53', '2018-07-30 20:44:53'),
(18, 'Kaduna', '2018-07-30 20:45:04', '2018-07-30 20:45:04'),
(19, 'Kano', '2018-07-30 20:45:12', '2018-07-30 20:45:12'),
(20, 'Lagos', '2018-07-30 20:46:07', '2018-07-30 20:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2018-07-26 23:26:02', '2018-07-26 23:26:02'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2018-07-26 23:26:02', '2018-07-26 23:26:02'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2018-07-26 23:26:02', '2018-07-26 23:26:02'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2018-07-26 23:26:02', '2018-07-26 23:26:02'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2018-07-26 23:26:02', '2018-07-26 23:26:02'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2018-07-26 23:26:02', '2018-07-26 23:26:02'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2018-07-26 23:26:02', '2018-07-26 23:26:02'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2018-07-26 23:26:02', '2018-07-26 23:26:02'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2018-07-26 23:26:02', '2018-07-26 23:26:02'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2018-07-26 23:26:03', '2018-07-26 23:26:03'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2018-07-26 23:26:03', '2018-07-26 23:26:03'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2018-07-26 23:26:03', '2018-07-26 23:26:03'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2018-07-26 23:26:03', '2018-07-26 23:26:03'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2018-07-26 23:26:03', '2018-07-26 23:26:03'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2018-07-26 23:26:03', '2018-07-26 23:26:03'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2018-07-26 23:26:03', '2018-07-26 23:26:03'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2018-07-26 23:26:03', '2018-07-26 23:26:03'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2018-07-26 23:26:03', '2018-07-26 23:26:03'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2018-07-26 23:26:03', '2018-07-26 23:26:03'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2018-07-26 23:26:03', '2018-07-26 23:26:03'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2018-07-26 23:26:03', '2018-07-26 23:26:03'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2018-07-26 23:26:03', '2018-07-26 23:26:03'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2018-07-26 23:26:03', '2018-07-26 23:26:03'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2018-07-26 23:26:04', '2018-07-26 23:26:04'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2018-07-26 23:26:04', '2018-07-26 23:26:04'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2018-07-26 23:26:04', '2018-07-26 23:26:04'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2018-07-26 23:26:04', '2018-07-26 23:26:04'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2018-07-26 23:26:04', '2018-07-26 23:26:04'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2018-07-26 23:26:04', '2018-07-26 23:26:04'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2018-07-26 23:26:04', '2018-07-26 23:26:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT '2',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `company`, `phone`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', '$2y$10$LiiLJ4fCI8egsqbKuYJh3uCXiSPZn4LiJWG2McAwfLiqKSuNsCOfu', 'wDS1h0lCNuBhCsy9irbVAedA30Ryf9UrLTIZ5MjOWSm2p5iDe9dX4wicTFmW', NULL, '2018-07-26 23:25:58', '2018-07-26 23:25:58', NULL, NULL),
(2, 1, 'femzy', 'femzy123@yahoo.com', 'users/default.png', '$2y$10$iyghKsW1mN2wNqHRM5LvbeJuKFJCWUzP1B1Uv0fpR3EuTnaoBLoVG', 'YNRBZGtd29o77g12ZD7sskioL32SEZXK4EtY5w6Nsi122BmHnSqax0k2wf8B', '{\"locale\":\"en\"}', '2018-07-27 21:46:04', '2018-07-27 21:46:04', NULL, NULL),
(3, 2, 'James', 'james@example.com', 'users/default.png', '$2y$10$xflWXhV/70VbiFH7NhLuBuRaKZcqxqVfzwy448XANHW0IFHNOmzTq', 'zvJX70bOcIOKN853I4PbahFz1fPPDnokeHAMuycGaAsM7xRO06BEEwpj9Ctm', NULL, '2018-08-10 07:25:26', '2018-08-10 07:25:26', 'James & Co.', '07034567890');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `eventcategories`
--
ALTER TABLE `eventcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `eventcategories`
--
ALTER TABLE `eventcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
