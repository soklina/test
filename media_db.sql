-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2017 at 05:04 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `media_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `career` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstname`, `lastname`, `username`, `email`, `phonenumber`, `address`, `career`, `profile_pic`, `bio`, `is_active`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ro', 'vinei', 'rovinei', 'ro.vinei@yahoo.com', NULL, NULL, NULL, NULL, NULL, 1, '$2y$10$ec4wsuKAKDrnQNgIsRkwNeG9jtFXVxVaTzh1WKiEFVMOMh4aw57nK', '7iNuOfOhkDL9mKSZOtY9sQ76JUtU3pqiPBsvDCj2BgswUSfHai2ETcecc5YB', NULL, '2017-06-16 08:18:58', '2017-06-16 08:18:58'),
(2, 'john', 'doe', 'john doe', 'theara@gmail.com', NULL, NULL, NULL, 'http://127.0.0.1:8000/storage/uploads/images/GD1_large.jpg', NULL, 1, '$2y$10$BEulsxzzgDLaeDdueRyo1eMVrQz2HMQXFJbaszxweZWwozhfZLl1C', 'TnsmARh15fj6Yk3xfVW6gkRvDkbUuiRFMU4Qr0jfaeUSH9RbroVbPG93nslP', NULL, '2017-07-16 04:21:19', '2017-07-16 04:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `admin_department`
--

CREATE TABLE `admin_department` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `career` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'សិល្បះកម្សាន្ត', NULL, NULL, 1, NULL, NULL, '2017-11-16 09:00:56'),
(4, 'អក្សរសាស្ត្រ', NULL, NULL, 1, NULL, NULL, '2017-11-16 09:01:04'),
(5, 'គំនិតជោគជ័យ', NULL, NULL, 1, NULL, NULL, '2017-11-16 09:01:18'),
(12, 'ជួបអ្នកនិពន្ធ', NULL, NULL, 1, NULL, NULL, '2017-11-16 09:06:48'),
(13, 'មន្តទឹកខ្មៅ', NULL, NULL, 1, NULL, NULL, '2017-11-16 09:09:41'),
(17, 'ដើមចម', NULL, 1, NULL, NULL, '2017-11-16 09:13:41', '2017-11-16 09:13:41'),
(18, 'កាលពីព្រេងនាយ', NULL, 1, NULL, NULL, '2017-11-16 09:15:51', '2017-11-16 09:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `category_type`
--

CREATE TABLE `category_type` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `mediatype_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `category_type`
--

INSERT INTO `category_type` (`category_id`, `mediatype_id`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, NULL),
(4, 1, NULL, NULL),
(5, 1, NULL, NULL),
(12, 3, NULL, NULL),
(13, 3, NULL, NULL),
(17, 3, '2017-11-16 09:13:41', '2017-11-16 09:13:41'),
(18, 3, '2017-11-16 09:15:51', '2017-11-16 09:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `file_entries`
--

CREATE TABLE `file_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `location_url` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extension` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `disk` varchar(191) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'public',
  `original_filename` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_01_07_073615_create_tagged_table', 1),
(2, '2014_01_07_073615_create_tags_table', 1),
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2016_06_29_073615_create_tag_groups_table', 1),
(6, '2016_06_29_073615_update_tags_table', 1),
(7, '2017_05_23_143404_create_admins_table', 1),
(8, '2017_05_23_143706_create_categories_table', 1),
(9, '2017_05_23_143710_create_category_types_table', 1),
(10, '2017_05_23_143831_create_posts_table', 1),
(11, '2017_05_24_040417_create_departments_table', 1),
(12, '2017_05_24_041219_create_admin_departments_table', 1),
(13, '2017_05_24_044410_create_file_entries_table', 1),
(14, '2017_05_24_044512_create_playlist_series_table', 1),
(15, '2017_05_24_044744_create_post_playlist_series_table', 1),
(16, '2017_05_24_162039_entrust_setup_tables', 1),
(17, '2017_05_25_051441_create_cache_table', 1),
(18, '2017_07_06_040817_add_featured_image_to_post_serie', 2),
(19, '2017_07_06_041359_add_view_count_to_post', 2),
(20, '2017_07_06_051122_add_genre_column_to_post', 3),
(21, '2017_07_06_094521_add_genre_and_category_column_to_playlistserie', 3),
(22, '2017_07_07_074806_add_is_featured_column_to_post', 4),
(23, '2017_07_07_080227_add_is_featured_column_to_series', 4),
(24, '2017_07_25_071529_create_partners_table', 5),
(25, '2017_08_08_071129_create_settings_table', 6),
(26, '2017_11_16_072726_set_on_delete_on_categorie', 7),
(27, '2017_11_16_081126_set_on_delete_on_series', 8),
(28, '2017_11_22_122142_create_authors_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `logo_src` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `external_url` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT '1',
  `status` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `company_name`, `logo_src`, `external_url`, `is_featured`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'ABC', '/storage/thumbs/images/Partner/sponsor_abc_logo.png', 'https://google.com', 1, 1, 1, NULL, '2017-07-25 06:57:03', '2017-07-25 06:57:03'),
(3, 'Starbuck', '/storage/thumbs/images/Partner/sponsor_starbuck_logo.png', 'https://google.com', 1, 1, 1, NULL, '2017-07-25 06:57:33', '2017-07-25 06:57:33'),
(4, 'Square space', '/storage/thumbs/images/Partner/sponsor_su_logo.png', 'https://google.com', 1, 1, 1, NULL, '2017-07-25 06:58:38', '2017-07-25 06:58:38'),
(5, 'ដសស', '/storage/thumbs/images/0.jpg', 'http://tousnatv.com/admin/partner/add', 0, 1, 1, NULL, '2017-11-16 05:14:24', '2017-11-16 05:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `mediatype_id` int(10) UNSIGNED NOT NULL,
  `featured_image` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sound_url` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_url` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `view_count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `source` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genre` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `category_id`, `mediatype_id`, `featured_image`, `sound_url`, `video_url`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`, `view_count`, `source`, `artist`, `duration`, `genre`, `is_featured`) VALUES
(555, 'ម្ចាស់ចំការ', '', '<p><span style=\"font-family: Siemreap, cursive; font-size: 14pt;\">មនោសញ្ចេតនារំភើបរួមជាមួយទេសភាពស្រុកខ្មែរស្រស់ស្អាតមនោសញ្ចេតនារំភើបរួមជាមួយទេសភាពស្រុកខ្មែរស្រស់ស្អាតមនោសញ្ចេតនារំភើបរួមជាមួយទេសភាពស្រុកខ្មែរស្រស់ស្អាតមនោសញ្ចេតនារំភើបរួមជាមួយទេសភាពស្រុកខ្មែរស្រស់ស្អាតមនោសញ្ចេតនារំភើបរួមជាមួយទេសភាពស្រុកខ្មែរស្រស់ស្អាតមនោសញ្ចេតនារំភើបរួមជាមួយទេសភាពស្រុកខ្មែរស្រស់ស្អាតមនោសញ្ចេតនារំភើបរួមជាមួយទេសភាពស្រុកខ្មែរស្រស់ស្អាត</span></p>', 2, 1, '/storage/thumbs/images/slider_1.jpg', '', NULL, 1, 1, NULL, NULL, '2017-07-14 12:16:07', '2017-07-14 12:16:07', 0, NULL, NULL, NULL, 'រឿងភាគខ្មែរ', 1),
(559, 'We are closer', 'we-are-closer', '<p>my video</p>', 13, 3, '/storage/thumbs/images/0.jpg', '', 'AHuOWjaj4Dk', 1, 2, NULL, NULL, '2017-11-21 06:35:46', '2017-11-21 06:35:46', 0, NULL, NULL, NULL, 'romantic', 0),
(560, 'Lorem Ipsum', 'lorem-ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>', 12, 3, '/storage/thumbs/images/0.jpg', '', 'xpn_0EOCxdk', 1, 2, NULL, NULL, '2017-11-23 06:20:51', '2017-11-23 06:20:51', 0, 'xpn_0EOCxd', NULL, NULL, NULL, 0),
(561, 'ម្ចាស់ចំការ', '', '<p><span style=\"font-family: Siemreap, cursive; font-size: 14pt;\">មនោសញ្ចេតនារំភើបរួមជាមួយទេសភាពស្រុកខ្មែរស្រស់ស្អាតមនោសញ្ចេតនារំភើបរួមជាមួយទេសភាពស្រុកខ្មែរស្រស់ស្អាតមនោសញ្ចេតនារំភើបរួមជាមួយទេសភាពស្រុកខ្មែរស្រស់ស្អាតមនោសញ្ចេតនារំភើបរួមជាមួយទេសភាពស្រុកខ្មែរស្រស់ស្អាតមនោសញ្ចេតនារំភើបរួមជាមួយទេសភាពស្រុកខ្មែរស្រស់ស្អាតមនោសញ្ចេតនារំភើបរួមជាមួយទេសភាពស្រុកខ្មែរស្រស់ស្អាតមនោសញ្ចេតនារំភើបរួមជាមួយទេសភាពស្រុកខ្មែរស្រស់ស្អាត</span></p>', 2, 1, '/storage/thumbs/images/slider_1.jpg', '', NULL, 1, 1, NULL, NULL, '2017-07-14 12:16:07', '2017-07-14 12:16:07', 0, NULL, NULL, NULL, 'រឿងភាគខ្មែរ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_serie`
--

CREATE TABLE `post_serie` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `serie_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `role_admin`
--

CREATE TABLE `role_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id` int(10) UNSIGNED NOT NULL,
  `mediatype_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `num_of_episode` int(10) UNSIGNED DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `featured_image` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view_count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `genre` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `mediatype_id`, `title`, `description`, `num_of_episode`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`, `featured_image`, `view_count`, `genre`, `category_id`, `is_featured`) VALUES
(1, 1, 'Reading Serie', NULL, NULL, 1, NULL, '2017-07-06 09:37:30', '2017-06-16 09:21:54', '2017-07-06 09:37:30', '', 0, NULL, 1, 0),
(2, 3, 'U PRINCE SERIE', NULL, NULL, 1, NULL, NULL, '2017-06-16 09:33:44', '2017-07-06 09:12:20', '', 0, NULL, 15, 0),
(3, 3, 'Popular this week', NULL, NULL, 1, NULL, '2017-07-06 09:41:25', '2017-06-16 09:40:16', '2017-07-06 09:41:25', '', 0, NULL, 14, 0),
(4, 2, 'Ed Sheeran Deluxe', NULL, NULL, 1, NULL, '2017-07-06 09:51:04', '2017-06-16 10:15:32', '2017-07-06 09:51:04', 'http://127.0.0.1:8000/storage/thumbs/images/supermarket_flower.jpg', 0, 'Jazz Music', 5, 0),
(5, 2, 'Rock Music', NULL, NULL, 1, NULL, '2017-07-06 09:50:37', '2017-07-06 08:26:20', '2017-07-06 09:50:37', 'http://127.0.0.1:8000/storage/thumbs/images/shape_of_you.jpg', 0, NULL, 5, 0),
(6, 2, 'Rock Music', NULL, NULL, 1, NULL, '2017-07-06 09:44:18', '2017-07-06 08:28:32', '2017-07-06 09:44:18', 'http://127.0.0.1:8000/storage/thumbs/images/ed-sheeran-galway-girl-1488806437-list-handheld-0.jpg', 0, NULL, 7, 0),
(7, 2, 'Return Of The Spooky', 'Some attrative description', NULL, 1, 1, NULL, '2017-07-06 08:29:04', '2017-07-08 23:12:46', 'http://127.0.0.1:8000/storage/thumbs/images/D7ab595h0AU-640x350.jpg', 0, 'Pop Music', 5, 1),
(8, 2, 'Long Way Home', NULL, NULL, 1, NULL, '2017-07-06 09:42:23', '2017-07-06 08:30:45', '2017-07-06 09:42:23', '', 0, 'Party Music', 9, 0),
(9, 2, 'Ed Sheeran Delux', NULL, NULL, 1, 1, NULL, '2017-07-06 09:54:46', '2017-07-08 23:13:10', 'http://127.0.0.1:8000/storage/thumbs/images/perfect.jpg', 0, 'Pop Music', 5, 1),
(10, 2, 'You Know Who You Are', NULL, NULL, 1, 1, NULL, '2017-07-06 09:55:16', '2017-07-08 22:08:47', 'http://127.0.0.1:8000/storage/thumbs/images/shape_of_you.jpg', 0, 'Rock Music', 8, 1),
(11, 2, 'Long Way Home', NULL, NULL, 1, 1, NULL, '2017-07-06 09:58:17', '2017-07-08 23:13:32', 'http://127.0.0.1:8000/storage/thumbs/images/D7ab595h0AU-640x350.jpg', 0, 'Party Music', 5, 1),
(12, 2, 'Album 1', NULL, NULL, 1, NULL, '2017-07-06 21:42:16', '2017-07-06 09:59:38', '2017-07-06 21:42:16', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Jazz Music', 9, 0),
(13, 2, 'Album 2', NULL, NULL, 1, NULL, '2017-07-06 21:42:22', '2017-07-06 10:00:37', '2017-07-06 21:42:22', 'http://127.0.0.1:8000/storage/thumbs/images/0.jpg', 0, 'Rock Music', 10, 0),
(14, 2, 'Sad Song', NULL, NULL, 1, NULL, '2017-07-06 21:42:28', '2017-07-06 10:02:00', '2017-07-06 21:42:28', 'http://127.0.0.1:8000/storage/thumbs/images/heavy_linikin_park.jpg', 0, 'Pop Music', 7, 0),
(15, 2, 'Justin Purpose', NULL, NULL, 1, NULL, NULL, '2017-07-06 10:05:14', '2017-07-06 21:43:33', 'http://127.0.0.1:8000/storage/thumbs/images/numb_linkin_park.jpg', 0, 'Pop Music', 5, 0),
(16, 2, 'Album 3', NULL, NULL, 1, NULL, '2017-07-06 21:42:36', '2017-07-06 10:20:17', '2017-07-06 21:42:36', '', 0, NULL, 5, 0),
(17, 2, 'Album 4', NULL, NULL, 1, NULL, '2017-07-06 21:42:58', '2017-07-06 10:20:40', '2017-07-06 21:42:58', '', 0, NULL, 7, 0),
(18, 2, 'Album 5', NULL, NULL, 1, NULL, '2017-07-06 21:42:53', '2017-07-06 10:20:53', '2017-07-06 21:42:53', '', 0, NULL, 8, 0),
(19, 2, 'Album 6', NULL, NULL, 1, NULL, '2017-07-06 21:42:48', '2017-07-06 10:21:11', '2017-07-06 21:42:48', '', 0, NULL, 9, 0),
(20, 2, 'Album 8', NULL, NULL, 1, NULL, '2017-07-06 21:42:42', '2017-07-06 10:21:27', '2017-07-06 21:42:42', '', 0, NULL, 10, 0),
(21, 1, 'Ghost hunter', 'wegwrwsgr', NULL, 1, 1, NULL, '2017-07-08 22:01:52', '2017-08-05 20:33:08', '/storage/thumbs/images/post_article_serie_thumbnail_large.jpg', 0, 'Tyy', 1, 0),
(22, 2, 'Album 1', NULL, NULL, 1, 1, NULL, '2017-07-08 22:10:19', '2017-07-08 22:24:11', 'http://127.0.0.1:8000/storage/thumbs/images/perfect.jpg', 0, NULL, 5, 1),
(23, 2, 'Album 2', NULL, NULL, 1, NULL, NULL, '2017-07-08 22:10:38', '2017-07-08 22:10:38', 'http://127.0.0.1:8000/storage/thumbs/images/numb_linkin_park.jpg', 0, NULL, 7, 0),
(24, 2, 'Album 3', NULL, NULL, 1, NULL, NULL, '2017-07-08 22:10:52', '2017-07-08 22:10:52', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, NULL, 8, 0),
(25, 2, 'Album 4', NULL, NULL, 1, 1, NULL, '2017-07-08 22:11:18', '2017-07-08 22:24:06', 'http://127.0.0.1:8000/storage/thumbs/images/how_woud_you_feel.jpg', 0, NULL, 9, 1),
(26, 2, 'Album 6', NULL, NULL, 1, NULL, NULL, '2017-07-08 22:11:34', '2017-07-08 22:11:34', 'http://127.0.0.1:8000/storage/thumbs/images/heavy_linikin_park.jpg', 0, NULL, 10, 0),
(27, 2, 'Album 7', NULL, NULL, 1, 1, NULL, '2017-07-08 22:11:53', '2017-07-08 22:23:56', 'http://127.0.0.1:8000/storage/thumbs/images/supermarket_flower.jpg', 0, NULL, 5, 1),
(28, 2, 'Album 8', NULL, NULL, 1, 1, NULL, '2017-07-08 22:12:13', '2017-07-08 22:23:53', 'http://127.0.0.1:8000/storage/thumbs/images/save_my_self.jpg', 0, NULL, 7, 1),
(29, 2, 'Album 9', NULL, NULL, 1, 1, NULL, '2017-07-08 22:12:33', '2017-07-08 22:23:01', 'http://127.0.0.1:8000/storage/thumbs/images/castle_on_the_hill.jpg', 0, NULL, 8, 1),
(30, 2, 'Album 10', NULL, NULL, 1, NULL, NULL, '2017-07-08 22:13:00', '2017-07-08 22:13:00', 'http://127.0.0.1:8000/storage/thumbs/images/0.jpg', 0, NULL, 9, 0),
(31, 2, 'Album 11', NULL, NULL, 1, NULL, NULL, '2017-07-08 22:13:33', '2017-07-08 22:13:33', 'http://127.0.0.1:8000/storage/thumbs/images/ed-sheeran-galway-girl-1488806437-list-handheld-0.jpg', 0, NULL, 10, 0),
(32, 2, 'Album 15', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:27:10', '2017-07-08 23:27:10', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Pop Music', 5, 0),
(33, 2, 'Album 16', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:27:59', '2017-07-08 23:27:59', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Party Music', 5, 0),
(34, 2, 'Album 17', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:28:26', '2017-07-08 23:28:26', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Pop Music', 5, 0),
(35, 2, 'Album 18', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:28:50', '2017-07-08 23:28:50', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Pop Music', 5, 0),
(36, 2, 'Album 19', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:29:10', '2017-07-08 23:29:10', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Pop Music', 5, 0),
(37, 2, 'Album 19', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:30:33', '2017-07-08 23:30:33', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Pop Music', 5, 0),
(38, 2, 'Album 21', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:31:23', '2017-07-08 23:31:23', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Pop Music', 5, 0),
(39, 2, 'Album 21', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:33:07', '2017-07-08 23:33:07', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Pop Music', 5, 0),
(40, 2, 'Album 22', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:33:34', '2017-07-08 23:33:34', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Party Music', 5, 0),
(41, 2, 'Album 23', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:34:06', '2017-07-08 23:34:06', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Rock Music', 5, 0),
(42, 2, 'Album 24', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:34:36', '2017-07-08 23:34:36', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Pop Music', 5, 0),
(43, 2, 'Album 26', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:35:18', '2017-07-08 23:35:18', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Pop Music', 5, 0),
(44, 2, 'Album 27', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:35:58', '2017-07-08 23:35:58', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Party Music', 5, 0),
(45, 2, 'Album 28', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:36:17', '2017-07-08 23:36:17', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, NULL, 5, 0),
(46, 2, 'Album 30', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:36:42', '2017-07-08 23:36:42', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Rock Music', 5, 0),
(47, 2, 'Album 25', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:48:21', '2017-07-08 23:48:21', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Rock Music', 5, 0),
(48, 2, 'Album 29', NULL, NULL, 1, NULL, NULL, '2017-07-08 23:48:54', '2017-07-08 23:48:54', 'http://127.0.0.1:8000/storage/thumbs/images/maxresdefault.jpg', 0, 'Party Music', 5, 0),
(49, 1, 'Mostly Human Serie', NULL, NULL, 1, 1, NULL, '2017-07-14 08:12:02', '2017-08-05 20:29:23', '/storage/thumbs/images/post_article_serie_thumbnail_large.jpg', 0, 'Scifi', 1, 1),
(50, 1, 'Reading Serie 2', NULL, NULL, 1, 1, NULL, '2017-07-14 10:45:54', '2017-08-05 20:32:49', '/storage/thumbs/images/maxresdefault.jpg', 0, 'Scifi', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `display_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `input_type` tinyint(3) UNSIGNED NOT NULL,
  `order` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tagged`
--

CREATE TABLE `tagging_tagged` (
  `id` int(10) UNSIGNED NOT NULL,
  `taggable_id` int(10) UNSIGNED NOT NULL,
  `taggable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tagging_tagged`
--

INSERT INTO `tagging_tagged` (`id`, `taggable_id`, `taggable_type`, `tag_name`, `tag_slug`, `created_at`, `updated_at`) VALUES
(5, 2, 'App\\Models\\Post', 'Kpop', 'kpop', NULL, NULL),
(7, 2, 'App\\Models\\Post', 'Korean', 'korean', NULL, NULL),
(8, 3, 'App\\Models\\Post', 'Technology', 'technology', NULL, NULL),
(11, 4, 'App\\Models\\Post', 'Entertainment', 'entertainment', NULL, NULL),
(12, 5, 'App\\Models\\Post', 'Kpop', 'kpop', NULL, NULL),
(13, 5, 'App\\Models\\Post', 'Star', 'star', NULL, NULL),
(14, 5, 'App\\Models\\Post', 'Entertainment', 'entertainment', NULL, NULL),
(15, 6, 'App\\Models\\Post', 'Entertainment', 'entertainment', NULL, NULL),
(16, 6, 'App\\Models\\Post', 'Korean', 'korean', NULL, NULL),
(17, 6, 'App\\Models\\Post', 'Kpop', 'kpop', NULL, NULL),
(18, 7, 'App\\Models\\Post', 'Entertainment', 'entertainment', NULL, NULL),
(19, 7, 'App\\Models\\Post', 'Star', 'star', NULL, NULL),
(20, 8, 'App\\Models\\Post', 'Entertainment', 'entertainment', NULL, NULL),
(21, 8, 'App\\Models\\Post', 'Star', 'star', NULL, NULL),
(22, 8, 'App\\Models\\Post', 'Korean', 'korean', NULL, NULL),
(23, 9, 'App\\Models\\Post', 'Entertainment', 'entertainment', NULL, NULL),
(24, 9, 'App\\Models\\Post', 'Star', 'star', NULL, NULL),
(25, 10, 'App\\Models\\Post', 'Entertainment', 'entertainment', NULL, NULL),
(26, 10, 'App\\Models\\Post', 'Reading', 'reading', NULL, NULL),
(27, 11, 'App\\Models\\Post', 'Video', 'video', NULL, NULL),
(30, 12, 'App\\Models\\Post', 'Video', 'video', NULL, NULL),
(32, 12, 'App\\Models\\Post', 'Top Song', 'top-song', NULL, NULL),
(34, 13, 'App\\Models\\Post', 'Top Song', 'top-song', NULL, NULL),
(35, 13, 'App\\Models\\Post', 'Video', 'video', NULL, NULL),
(36, 14, 'App\\Models\\Post', 'Entertainment', 'entertainment', NULL, NULL),
(38, 14, 'App\\Models\\Post', 'Video', 'video', NULL, NULL),
(39, 14, 'App\\Models\\Post', 'Top Song', 'top-song', NULL, NULL),
(41, 15, 'App\\Models\\Post', 'Video', 'video', NULL, NULL),
(42, 15, 'App\\Models\\Post', 'Top Song', 'top-song', NULL, NULL),
(44, 16, 'App\\Models\\Post', 'Top Song', 'top-song', NULL, NULL),
(47, 18, 'App\\Models\\Post', 'Music', 'music', NULL, NULL),
(48, 18, 'App\\Models\\Post', 'Ed Sheeran', 'ed-sheeran', NULL, NULL),
(49, 19, 'App\\Models\\Post', 'Ed Sheeran', 'ed-sheeran', NULL, NULL),
(50, 19, 'App\\Models\\Post', 'Music', 'music', NULL, NULL),
(51, 20, 'App\\Models\\Post', 'Ed Sheeran', 'ed-sheeran', NULL, NULL),
(52, 20, 'App\\Models\\Post', 'Music', 'music', NULL, NULL),
(56, 22, 'App\\Models\\Post', 'Ed Sheeran', 'ed-sheeran', NULL, NULL),
(57, 22, 'App\\Models\\Post', 'Music', 'music', NULL, NULL),
(58, 23, 'App\\Models\\Post', 'Ed Sheeran', 'ed-sheeran', NULL, NULL),
(59, 23, 'App\\Models\\Post', 'Music', 'music', NULL, NULL),
(60, 24, 'App\\Models\\Post', 'Ed Sheeran', 'ed-sheeran', NULL, NULL),
(61, 24, 'App\\Models\\Post', 'Music', 'music', NULL, NULL),
(62, 25, 'App\\Models\\Post', 'Ed Sheeran', 'ed-sheeran', NULL, NULL),
(63, 25, 'App\\Models\\Post', 'Music', 'music', NULL, NULL),
(64, 26, 'App\\Models\\Post', 'Ed Sheeran', 'ed-sheeran', NULL, NULL),
(65, 26, 'App\\Models\\Post', 'Music', 'music', NULL, NULL),
(75, 512, 'App\\Models\\Post', 'Reading', 'reading', NULL, NULL),
(76, 512, 'App\\Models\\Post', 'Technology', 'technology', NULL, NULL),
(77, 429, 'App\\Models\\Post', 'Reading', 'reading', NULL, NULL),
(78, 429, 'App\\Models\\Post', 'Star', 'star', NULL, NULL),
(79, 100, 'App\\Models\\Post', 'Social Life', 'social-life', NULL, NULL),
(80, 555, 'App\\Models\\Post', 'ម្ចាស់ចំការ', 'ម-ច-ស-ច-ក-រ', NULL, NULL),
(81, 555, 'App\\Models\\Post', 'រឿងភាគខ្មែរ', 'រ-ងភ-គខ-ម-រ', NULL, NULL),
(82, 556, 'App\\Models\\Post', 'Video', 'video', NULL, NULL),
(83, 556, 'App\\Models\\Post', 'រឿងភាគខ្មែរ', 'រ-ងភ-គខ-ម-រ', NULL, NULL),
(84, 521, 'App\\Models\\Post', 'Entertainment', 'entertainment', NULL, NULL),
(85, 521, 'App\\Models\\Post', 'Kpop', 'kpop', NULL, NULL),
(86, 559, 'App\\Models\\Post', 'Video', 'video', NULL, NULL),
(87, 560, 'App\\Models\\Post', 'Music', 'music', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tags`
--

CREATE TABLE `tagging_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_group_id` int(10) UNSIGNED DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suggest` tinyint(1) NOT NULL DEFAULT '0',
  `count` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tagging_tags`
--

INSERT INTO `tagging_tags` (`id`, `tag_group_id`, `slug`, `name`, `suggest`, `count`) VALUES
(2, NULL, 'technology', 'Technology', 0, 2),
(5, NULL, 'kpop', 'Kpop', 0, 4),
(7, NULL, 'korean', 'Korean', 0, 3),
(9, NULL, 'entertainment', 'Entertainment', 0, 9),
(10, NULL, 'star', 'Star', 0, 5),
(11, NULL, 'reading', 'Reading', 0, 3),
(12, NULL, 'video', 'Video', 0, 7),
(16, NULL, 'top-song', 'Top Song', 0, 5),
(19, NULL, 'music', 'Music', 0, 9),
(20, NULL, 'ed-sheeran', 'Ed Sheeran', 0, 8),
(21, NULL, 'social-life', 'Social Life', 0, 1),
(22, NULL, 'ម-ច-ស-ច-ក-រ', 'ម្ចាស់ចំការ', 0, 1),
(23, NULL, 'រ-ងភ-គខ-ម-រ', 'រឿងភាគខ្មែរ', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tag_groups`
--

CREATE TABLE `tagging_tag_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `career` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_department`
--
ALTER TABLE `admin_department`
  ADD UNIQUE KEY `admin_department_admin_id_department_id_unique` (`admin_id`,`department_id`),
  ADD KEY `admin_department_admin_id_index` (`admin_id`),
  ADD KEY `admin_department_department_id_index` (`department_id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `authors_email_unique` (`email`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD KEY `categories_created_by_foreign` (`created_by`),
  ADD KEY `categories_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `category_type`
--
ALTER TABLE `category_type`
  ADD UNIQUE KEY `category_type_category_id_mediatype_id_unique` (`category_id`,`mediatype_id`),
  ADD KEY `category_type_category_id_index` (`category_id`),
  ADD KEY `category_type_mediatype_id_index` (`mediatype_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_entries`
--
ALTER TABLE `file_entries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `file_entries_created_by_foreign` (`created_by`),
  ADD KEY `file_entries_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partners_created_by_foreign` (`created_by`),
  ADD KEY `partners_updated_by_foreign` (`updated_by`);

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
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_created_by_foreign` (`created_by`),
  ADD KEY `posts_updated_by_foreign` (`updated_by`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `posts_slug_index` (`slug`),
  ADD KEY `posts_mediatype_id_index` (`mediatype_id`);

--
-- Indexes for table `post_serie`
--
ALTER TABLE `post_serie`
  ADD UNIQUE KEY `post_serie_post_id_serie_id_unique` (`post_id`,`serie_id`),
  ADD KEY `post_serie_post_id_index` (`post_id`),
  ADD KEY `post_serie_serie_id_index` (`serie_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_admin`
--
ALTER TABLE `role_admin`
  ADD PRIMARY KEY (`admin_id`,`role_id`),
  ADD KEY `role_admin_role_id_foreign` (`role_id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `series_id_mediatype_id_unique` (`id`,`mediatype_id`),
  ADD KEY `series_created_by_foreign` (`created_by`),
  ADD KEY `series_updated_by_foreign` (`updated_by`),
  ADD KEY `series_mediatype_id_index` (`mediatype_id`),
  ADD KEY `series_category_id_foreign` (`category_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`),
  ADD KEY `settings_created_by_foreign` (`created_by`),
  ADD KEY `settings_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tagged_taggable_id_index` (`taggable_id`),
  ADD KEY `tagging_tagged_taggable_type_index` (`taggable_type`),
  ADD KEY `tagging_tagged_tag_slug_index` (`tag_slug`);

--
-- Indexes for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tags_slug_index` (`slug`),
  ADD KEY `tagging_tags_tag_group_id_foreign` (`tag_group_id`);

--
-- Indexes for table `tagging_tag_groups`
--
ALTER TABLE `tagging_tag_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tag_groups_slug_index` (`slug`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_entries`
--
ALTER TABLE `file_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=562;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tagging_tag_groups`
--
ALTER TABLE `tagging_tag_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_department`
--
ALTER TABLE `admin_department`
  ADD CONSTRAINT `admin_department_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `admin_department_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `categories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `admins` (`id`);

--
-- Constraints for table `category_type`
--
ALTER TABLE `category_type`
  ADD CONSTRAINT `category_type_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `file_entries`
--
ALTER TABLE `file_entries`
  ADD CONSTRAINT `file_entries_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `file_entries_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `admins` (`id`);

--
-- Constraints for table `partners`
--
ALTER TABLE `partners`
  ADD CONSTRAINT `partners_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `partners_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `admins` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `posts_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `posts_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `admins` (`id`);

--
-- Constraints for table `post_serie`
--
ALTER TABLE `post_serie`
  ADD CONSTRAINT `post_serie_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_serie_serie_id_foreign` FOREIGN KEY (`serie_id`) REFERENCES `series` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_admin`
--
ALTER TABLE `role_admin`
  ADD CONSTRAINT `role_admin_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_admin_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `series`
--
ALTER TABLE `series`
  ADD CONSTRAINT `series_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `series` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `series_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `series_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `admins` (`id`);

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `settings_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `admins` (`id`);

--
-- Constraints for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD CONSTRAINT `tagging_tags_tag_group_id_foreign` FOREIGN KEY (`tag_group_id`) REFERENCES `tagging_tag_groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
