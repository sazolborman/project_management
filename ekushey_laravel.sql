-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 09:59 PM
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
-- Database: `ekushey_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` longtext DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `password` longtext DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `phone` longtext DEFAULT NULL,
  `website` longtext DEFAULT NULL,
  `skype_id` longtext DEFAULT NULL,
  `facebook_profile_link` longtext DEFAULT NULL,
  `linkedin_profile_link` longtext DEFAULT NULL,
  `twitter_profile_link` longtext DEFAULT NULL,
  `short_note` longtext DEFAULT NULL,
  `chat_status` varchar(20) NOT NULL DEFAULT 'offline',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `password`, `address`, `phone`, `website`, `skype_id`, `facebook_profile_link`, `linkedin_profile_link`, `twitter_profile_link`, `short_note`, `chat_status`, `updated_at`) VALUES
(26, 'polash', 'hasihamo@mailinator.com', '$2y$10$pPgc7jrecMGcT4Uu4VmQcOU.EjBTVy1PO8hT79DY5BkTGIIQMoKx2', 'Et ut minus sunt si', NULL, 'https://www.dulokyjosybijy.org', 'Perferendis autem as', 'Reiciendis adipisici', 'tttt', 'Reprehenderit eos n', 'Tenetur nostrud fugi', 'offline', '2023-06-14 16:41:21'),
(25, 'Salam', 'fopy@mailinator.com', '$2y$10$Eo2L1e1NnrISI4YRwcDAduvYprGEQTIJYUzI2BlSWOxPYRX9HndHq', 'Dolore quo nisi ut e', NULL, 'https://www.haretalapyw.me.uk', 'Rerum corrupti inci', 'Quia beatae est poss', 'fghsfsajklfsdfl', 'Impedit beatae proi', 'Elit quasi eius iur', 'offline', '2023-07-13 10:13:54'),
(9, 'Orla Adkins', 'syjula@mailinator.com', 'Pa$$w0rd!', 'In ullam ut dolores', '+1 (544) 516-5403', 'https://www.zyxycohek.co', 'Dolor id molestiae', 'https://www.facebook.com/sazolborman222', 'https://www.linkedin.com/in/sazolborman/', 'Aut rerum et ea pari', 'Ipsum id minus nulla', 'offline', '2023-06-14 20:46:52'),
(10, 'Craig Mcpherson', 'riva@mailinator.com', 'Pa$$w0rd!', 'Aut sunt tempore se', '+1 (845) 906-5902', 'https://www.jycazygem.net', 'Quo natus minus atqu', 'Quisquam dignissimos', 'Fugit pariatur Ani', 'Iusto qui beatae vel', 'In reiciendis eu pra', 'offline', '2023-06-14 20:46:52'),
(11, 'Brady Haley', 'bonyte@mailinator.com', 'Pa$$w0rd!', 'Laboriosam et cum d', '3', 'https://www.zusajywi.co.uk', 'Vel fugiat est est i', 'Modi aut consequatur', 'Rem voluptate eligen', 'Ullamco exercitation', 'Quae duis dolor irur', 'offline', '2023-06-14 20:46:52'),
(12, 'Craig Murphy', 'fotekotona@mailinator.com', 'Pa$$w0rd!', 'Aut omnis voluptas e', '34', 'https://www.synuwos.net', 'Non optio asperiore', 'Est consequat Susci', 'Doloremque praesenti', 'Laudantium quisquam', 'Dolorum nulla culpa', 'offline', '2023-06-14 20:46:52'),
(29, 'Andrew Mccoy', 'cyvejeryp@mailinator.com', '$2y$10$/KgexaA/JvtT.dnzm21PRe63Rj7QHd2A0U5jmv5rO/Xqa.3brZ9ma', 'Deleniti tempore ex', '14', 'https://www.jylomaty.cm', 'Inventore placeat i', 'Tempora incidunt in', 'Fuga Exercitationem', 'Obcaecati iste dicta', 'Anim libero saepe di', 'offline', '2023-07-13 16:04:16'),
(33, NULL, NULL, '$2y$10$es.r8hIWN.5j.zuNJVB3aODROYxtOXe7CifWOJ3ELfxR/yDTqhwAS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'offline', '2023-07-22 17:26:32'),
(34, NULL, NULL, '$2y$10$HjcwdtSVTcnWUaLR51DN/eGaQcGmuUBSrmrocnnMbp6ojUwK4P5KO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'offline', '2023-07-22 17:26:41'),
(32, 'Axal Dixon', 'ziguvo@mailinator.com', '$2y$10$REBcJP/XRN9sG.zZCwzrqOg73aesWU0Gr3zC4D0plWhqFpY0OCiNy', 'Quo sunt culpa ducim', NULL, 'https://www.vugaqyvyloq.co.uk', 'Quas velit laboriosa', 'Aut esse rem tempora', 'Itaque ut veritatis', 'Tempora culpa pariat', 'Sit aut saepe vero', 'offline', '2023-07-22 10:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` longtext DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `phone` longtext DEFAULT NULL,
  `website` longtext DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `address`, `phone`, `website`, `client_id`, `updated_at`) VALUES
(6, 'Nora Graham', 'boqefizowa@mailinator.com', 'Ut sed velit volupta', '71', 'https://www.bahageso.com', 12, '2023-07-22 17:39:10');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `published_by` int(11) DEFAULT NULL,
  `visible_for` int(11) NOT NULL DEFAULT 1 COMMENT '1-all, 2-staff, 3-client',
  `date_added` longtext DEFAULT NULL,
  `last_modified` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `description`, `published_by`, `visible_for`, `date_added`, `last_modified`, `updated_at`) VALUES
(6, 'Amet consequuntur e', 'Labore cillum cum', 1, 2, '14-07-2023', NULL, '2023-07-14 10:39:26'),
(9, 'Unde aut ab pariatur', 'Voluptas qui dolores', 1, 3, '14-07-2023', NULL, '2023-07-14 09:49:23'),
(10, 'Atque duis nisi lore', 'Et culpa minima nec', 1, 1, '14-07-2023', NULL, '2023-07-14 09:49:23'),
(11, 'Velit aliquip sint', 'Commodo molestias se', 1, 2, '14-07-2023', NULL, '2023-07-14 16:32:27'),
(12, 'Qui est in nulla qui', 'Dicta voluptate sit', 1, 3, '15-07-2023', NULL, '2023-07-15 14:15:26');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `project_code` longtext DEFAULT NULL,
  `type` longtext DEFAULT NULL,
  `amount` int(11) NOT NULL DEFAULT 0,
  `title` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `payment_method` longtext DEFAULT NULL,
  `timestamp` longtext DEFAULT NULL,
  `milestone_id` int(11) DEFAULT NULL,
  `expense_category_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `project_code`, `type`, `amount`, `title`, `description`, `payment_method`, `timestamp`, `milestone_id`, `expense_category_id`, `client_id`, `company_id`, `updated_at`) VALUES
(1, '5ecb3915bc', 'expense', 12, 'Vitae est vero est u', NULL, NULL, '1687285380', NULL, NULL, NULL, NULL, '2023-06-23 14:18:36'),
(2, '5ecb3915bc', 'expense', 57, 'Doloremque consequat', NULL, NULL, '1687544580', NULL, NULL, NULL, NULL, '2023-06-23 14:18:36'),
(4, '471784', NULL, 10, 'qwww', NULL, NULL, '23-06-2023', NULL, NULL, NULL, NULL, '2023-06-23 08:28:15'),
(5, '471784', NULL, 97, 'Aliqua Commodo cons', NULL, NULL, '23-06-2023', NULL, NULL, NULL, NULL, '2023-06-23 14:18:36'),
(6, '471784', NULL, 23, 'Facere et voluptas e', NULL, NULL, '23-06-2023', NULL, NULL, NULL, NULL, '2023-06-23 14:18:36'),
(8, '453490', NULL, 8, 'Quia doloribus aliqu', NULL, NULL, '16-07-2023', NULL, NULL, NULL, NULL, '2023-07-16 09:44:35');

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_code` longtext DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `demo_url` longtext DEFAULT NULL,
  `project_category_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `staffs` longtext DEFAULT NULL,
  `budget` int(11) NOT NULL DEFAULT 0,
  `timer_status` int(11) NOT NULL DEFAULT 0 COMMENT '1 running 0stopped',
  `timer_starting_timestamp` longtext DEFAULT NULL,
  `total_time_spent` int(11) NOT NULL DEFAULT 0 COMMENT 'second',
  `progress_status` longtext DEFAULT NULL,
  `timestamp_start` longtext DEFAULT NULL,
  `timestamp_end` longtext DEFAULT NULL,
  `project_status` int(11) NOT NULL DEFAULT 1 COMMENT '1 for running, 0 for archived',
  `project_note` longtext DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_code`, `title`, `description`, `demo_url`, `project_category_id`, `client_id`, `company_id`, `staffs`, `budget`, `timer_status`, `timer_starting_timestamp`, `total_time_spent`, `progress_status`, `timestamp_start`, `timestamp_end`, `project_status`, `project_note`, `updated_at`) VALUES
(19, '453490', 'web Development', 'rtgdfhgfhfdhtyr', 'Placeat consequatur', NULL, 8, NULL, '3', 80, 0, NULL, 0, '59', '1993-04-13', '1986-08-22', 1, 'text again', '2023-07-19 07:29:50'),
(20, '526064', 'Consequat Magnam in', 'Dolorum consequatur', 'Rerum et quis at vol', NULL, 10, NULL, '3', 88, 0, NULL, 0, '58', '2023-04-16', '1983-07-16', 1, 'fdsfsgf', '2023-07-18 12:38:43'),
(13, '471784', 'Aliqua Anim delenit', 'Est esse sed est se', 'Et cum ipsam asperio', NULL, 10, NULL, NULL, 100, 0, NULL, 0, '4', '2022-10-15', '2016-02-04', 1, 'fdsfsgf', '2023-07-18 12:38:43'),
(18, '113068', 'Enim amet beatae re', 'Cillum doloribus at', 'Fugit porro quis do', NULL, 9, NULL, '4', 64, 0, NULL, 0, '33', '2013-05-12', '2016-08-12', 1, 'fdsfsgf', '2023-07-18 12:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `project_bugs`
--

CREATE TABLE `project_bugs` (
  `id` int(11) NOT NULL,
  `project_code` longtext DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `user_type` longtext DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `file` longtext DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '0 for pending, 1 for solved',
  `timestamp` longtext DEFAULT NULL,
  `assigned_staff` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_bugs`
--

INSERT INTO `project_bugs` (`id`, `project_code`, `title`, `description`, `user_type`, `user_id`, `file`, `status`, `timestamp`, `assigned_staff`, `updated_at`) VALUES
(1, '5ecb3915bc', 'Labore accusantium q', 'Temporibus sint aut ', 'admin', 1, NULL, 0, '1686939780', 2, '2023-06-19 11:45:46'),
(2, '5ecb3915bc', 'Sit laboris ipsum a', 'Qui rem sed quia sun', 'admin', 1, NULL, 0, '1686939780', 2, '2023-06-19 11:45:46'),
(20, '471784', 'fgdgdg', 'dfgfdgsdgd', NULL, NULL, NULL, 1, '19-06-2023', 3, '2023-06-19 10:40:02'),
(21, '471784', 'Minima laborum iste', 'Sit officia qui eiu', NULL, NULL, NULL, 0, '19-06-2023', 3, '2023-06-19 16:16:17'),
(22, '471784', 'Numquam aliquip qui', 'Eius saepe consequun', NULL, 1, NULL, 0, '24-06-2023', 4, '2023-06-24 16:28:32'),
(23, '471784', 'Repellendus Dolor m', 'Iste placeat facili', NULL, 1, NULL, 1, '24-06-2023', 7, '2023-06-24 16:40:03'),
(24, '471784', 'Et consectetur delec', 'Cupiditate culpa er', NULL, 1, NULL, 1, '25-06-2023', 4, '2023-06-25 09:34:56'),
(25, '453490', 'Deserunts', 'Aliquip sed rem sint', NULL, 1, NULL, 0, '12-07-2023', 3, '2023-07-13 11:48:08'),
(27, '453490', 'Totam aperiam sed vo', 'Doloribus incidunt', NULL, 1, NULL, 0, '13-07-2023', 7, '2023-07-13 17:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `project_files`
--

CREATE TABLE `project_files` (
  `id` int(11) NOT NULL,
  `project_code` int(11) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `name` longtext DEFAULT NULL,
  `visibility_client` int(11) NOT NULL DEFAULT 1 COMMENT '1visible 0hidden',
  `visibility_staff` int(11) NOT NULL DEFAULT 1 COMMENT '1visible 0hidden',
  `size` longtext DEFAULT NULL,
  `file_type` longtext DEFAULT NULL,
  `uploader_type` longtext DEFAULT NULL,
  `uploader_id` int(11) DEFAULT NULL,
  `timestamp_upload` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_files`
--

INSERT INTO `project_files` (`id`, `project_code`, `description`, `name`, `visibility_client`, `visibility_staff`, `size`, `file_type`, `uploader_type`, `uploader_id`, `timestamp_upload`) VALUES
(1, 3, 'jjjjjjjj', 'project_milestone.sql', 1, 1, NULL, 'sql', 'admin', 1, '1688322180'),
(2, 3, 'sazollll', '', 1, 1, NULL, '', 'admin', 1, '1688322180'),
(3, 3, 'hfjhj', 'fullpageportfolio.jpg', 1, 1, NULL, 'jpg', 'admin', 1, '1688322180'),
(4, 3, 'ggggg', 'Session_Cookie.txt', 1, 1, NULL, 'txt', 'admin', 1, '1688322180');

-- --------------------------------------------------------

--
-- Table structure for table `project_messages`
--

CREATE TABLE `project_messages` (
  `id` int(11) NOT NULL,
  `message` longtext DEFAULT NULL,
  `project_code` int(11) DEFAULT NULL,
  `date` longtext DEFAULT NULL,
  `user_type` longtext DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message_file_name` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_messages`
--

INSERT INTO `project_messages` (`id`, `message`, `project_code`, `date`, `user_type`, `user_id`, `message_file_name`) VALUES
(1, 'ssssssss', 3, '18 Jun 2023', 'admin', 1, 'empty.csv'),
(6, 'dsada', 453490, '20-06-2023', NULL, NULL, NULL),
(7, 'Consequatur velit', 453490, '20-06-2023', NULL, NULL, NULL),
(8, 'dddd', 471784, '01-07-2023', NULL, NULL, NULL),
(9, 'uuuu', 471784, '01-07-2023', NULL, 1, NULL),
(10, 'ddddd', 453490, '16-07-2023', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_milestones`
--

CREATE TABLE `project_milestones` (
  `id` int(11) NOT NULL,
  `title` longtext DEFAULT NULL,
  `project_code` longtext DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL DEFAULT 0,
  `timestamp` longtext DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '0 for unpaid, 1 for paid',
  `note` longtext DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_milestones`
--

INSERT INTO `project_milestones` (`id`, `title`, `project_code`, `client_id`, `company_id`, `amount`, `timestamp`, `currency_id`, `status`, `note`, `updated_at`) VALUES
(1, 'frist payment', '5ecb3915bc', 1, 0, 20, '1686348000', NULL, 0, '', '2023-07-11 11:53:09'),
(2, 'Voluptate saepe elit', '5ecb3915bc', 1, 0, 71, '0', NULL, 0, 'Deserunt cupiditate ', '2023-07-11 11:53:09'),
(4, 'Eos adipisicing magn', '471784', 8, NULL, 87, '1979-10-10', NULL, 1, 'Animi repudiandae q', '2023-07-11 11:53:09'),
(12, 'edetd dffd sdre', '453490', 8, NULL, 89, '1983-12-22', NULL, 0, 'Dolores eveniet ut', '2023-07-13 11:59:50'),
(19, 'Reprehenderit nesciu', '453490', 8, NULL, 14, '2018-02-16', NULL, 1, 'Et reprehenderit qu', '2023-07-13 01:10:48'),
(21, 'Voluptate incididunt', '453490', 8, NULL, 28, '2002-08-10', NULL, 0, 'Exercitationem conse', '2023-07-13 07:11:03'),
(26, 'Minim pariatur Ut l', '113068', 9, NULL, 19, '1975-06-15', NULL, 0, 'Laudantium et conse', '2023-07-18 10:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `project_tasks`
--

CREATE TABLE `project_tasks` (
  `id` int(11) NOT NULL,
  `project_code` int(11) DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `complete_status` int(11) DEFAULT NULL,
  `status` longtext NOT NULL,
  `timestamp_start` longtext DEFAULT NULL,
  `timestamp_end` longtext DEFAULT NULL,
  `task_color` longtext DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_tasks`
--

INSERT INTO `project_tasks` (`id`, `project_code`, `title`, `description`, `staff_id`, `complete_status`, `status`, `timestamp_start`, `timestamp_end`, `task_color`, `updated_at`) VALUES
(23, 471784, 'Omnis in qui quia do', 'Ut veniam odio exer', 3, NULL, 'complete', '2014-11-25', '2014-04-12', '#FFFF00', '2023-06-24 09:15:28'),
(24, 471784, 'Voluptatem modi aut', 'Inventore aut quod r', 7, NULL, 'complete', '2010-08-04', '1994-07-05', '#ff0019', '2023-06-24 09:15:46'),
(32, 453490, 'Eos sit', 'In dignissimos est', 7, NULL, 'incomplete', '2004-10-17', '2017-06-13', '#FFFF00', '2023-07-13 11:32:09'),
(30, 453490, 'Eos eaque proident', 'Eum sit sint tempore', NULL, NULL, 'complete', '1995-11-09', '1970-04-02', '#FF8000', '2023-07-16 04:15:11'),
(31, 471784, 'Id ipsa proident s', 'Anim duis enim culpa', 4, NULL, 'incomplete', '2018-10-24', '1971-09-05', '#ff0019', '2023-06-23 14:39:06'),
(29, 845020, 'rrrr', 'Eos consequatur qua', NULL, NULL, 'complete', '2011-01-17', '2010-05-18', '#ff0019', '2023-06-18 05:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `project_timesheets`
--

CREATE TABLE `project_timesheets` (
  `id` int(11) NOT NULL,
  `start_timestamp` longtext DEFAULT NULL,
  `end_timestamp` longtext DEFAULT NULL,
  `project_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_timesheets`
--

INSERT INTO `project_timesheets` (`id`, `start_timestamp`, `end_timestamp`, `project_code`) VALUES
(1, '1024837428', '1024837477', 3),
(2, '1687516145', '1687516150', 3),
(3, '1027439559', '1027439563', 3),
(4, '09:43', '07:33', 845020),
(5, '09:36', '19:15', 453490);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `name` longtext DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `password` longtext DEFAULT NULL,
  `account_role_id` int(11) DEFAULT NULL,
  `phone` longtext DEFAULT NULL,
  `skype_id` longtext DEFAULT NULL,
  `facebook_profile_link` longtext DEFAULT NULL,
  `twitter_profile_link` longtext DEFAULT NULL,
  `linkedin_profile_link` longtext DEFAULT NULL,
  `chat_status` varchar(20) NOT NULL DEFAULT 'offline',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `email`, `password`, `account_role_id`, `phone`, `skype_id`, `facebook_profile_link`, `twitter_profile_link`, `linkedin_profile_link`, `chat_status`, `updated_at`) VALUES
(3, 'Mohona', 'bozeba@mailinator.com', '$2y$10$Iwks66Y5us6KOQ83k84qWuzNCVNjDOigmtZTczPsPRgd6hq7d0CxS', NULL, NULL, 'Et corporis non reru', 'Minima quasi vero do', 'Mollit quam minus ve', 'Veniam quo sit mini', 'offline', '2023-06-18 08:54:32'),
(4, 'polash', 'fiwinysyc@mailinator.com', '$2y$10$iO1HRtRL22d311YSFj.85e99zMc4yZBCG3V4XDFoQAhjkwc63aOi2', NULL, NULL, 'Nihil et officia eli', 'Nam velit corporis l', 'Amet laudantium re', 'Debitis quo est lab', 'offline', '2023-06-18 07:22:23'),
(7, 'Roni', 'myma@mailinator.com', '$2y$10$tR.gougexAdPO7ouIeVIL.6Q2KtIQ5UEFIXp/Sp6OSFwz.q6oyjSq', NULL, NULL, 'In mollit ea provide', 'jjhjkhjkbk', 'Saepe cum nobis face', 'In repudiandae volup', 'offline', '2023-07-13 10:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `team_tasks`
--

CREATE TABLE `team_tasks` (
  `id` int(11) NOT NULL,
  `title` longtext DEFAULT NULL,
  `task_note` longtext DEFAULT NULL,
  `assigned_staff` longtext DEFAULT NULL,
  `creation_timestamp` longtext DEFAULT NULL,
  `due_timestamp` longtext DEFAULT NULL,
  `task_status` int(11) NOT NULL DEFAULT 1 COMMENT '0 for archived, 1 for running',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team_tasks`
--

INSERT INTO `team_tasks` (`id`, `title`, `task_note`, `assigned_staff`, `creation_timestamp`, `due_timestamp`, `task_status`, `updated_at`) VALUES
(1, 'test task', 'sdsdsd', '1,2,', '1686520800', '1686693600', 0, '2023-07-21 13:21:51'),
(2, 'Amet ratione nihil ', '', '1,2,', '-3600', '-3600', 1, '2023-07-21 13:21:51'),
(3, 'Eiusmod suscipit qui', 'sazol', '1,2,', '0', '0', 1, '2023-07-21 13:21:51'),
(4, 'Excepturi qui ex dol', 'testing', '3', '1972-07-10', '2008-12-27', 1, '2023-07-21 13:21:51'),
(5, 'Sapiente aperiam rer', 'rrrrrrrrr', '3', '1987-07-08', '1974-07-15', 0, '2023-07-22 17:40:10'),
(6, 'Voluptatem Sed saep', NULL, '3', '1996-04-02', '1994-03-10', 1, '2023-07-21 13:21:51'),
(7, 'Occaecat animi rem', NULL, '7', '1994-03-22', '2013-04-25', 0, '2023-07-22 17:39:51'),
(8, 'Omnis quibusdam dele', NULL, '4', '2016-01-08', '1995-07-10', 1, '2023-07-22 17:42:09'),
(9, 'Temporibus provident', NULL, '7', '2003-09-14', '1978-07-23', 0, '2023-07-22 17:44:22'),
(10, 'Pariatur Pariatur', NULL, '4', '2020-10-25', '1982-11-15', 1, '2023-07-22 17:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `title` longtext DEFAULT NULL,
  `ticket_code` longtext DEFAULT NULL,
  `status` longtext NOT NULL COMMENT 'opened closed',
  `priority` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `assigned_staff_id` int(11) DEFAULT NULL,
  `project_code` int(11) DEFAULT NULL,
  `timestamp` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `title`, `ticket_code`, `status`, `priority`, `description`, `client_id`, `assigned_staff_id`, `project_code`, `timestamp`) VALUES
(6, 'Aut provident quam', '5397531', 'opened', 'low', 'Consequatur Dolore', 11, NULL, 526064, '16-07-2023'),
(7, 'Nostrum nemo id con', '8918535', 'opened', 'medium', 'Ducimus vero volupt', 9, NULL, 471784, '16-07-2023'),
(5, 'Dolore voluptatum eo', '3864704', 'opened', 'high', 'Iure voluptatum odit', 10, NULL, 526064, '16-07-2023');

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
  `user_type` int(25) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 'sazol', 'sazol@gmail.com', NULL, '$2y$10$v.9Uucb.Dwr4QYwG/2CTYu17BUFEpS43P24T3kBlB20d28o5cyG8C', NULL, NULL, '2023-05-31 01:25:02', '2023-05-31 01:25:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_bugs`
--
ALTER TABLE `project_bugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_files`
--
ALTER TABLE `project_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_messages`
--
ALTER TABLE `project_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_milestones`
--
ALTER TABLE `project_milestones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_tasks`
--
ALTER TABLE `project_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_timesheets`
--
ALTER TABLE `project_timesheets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_tasks`
--
ALTER TABLE `team_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `project_bugs`
--
ALTER TABLE `project_bugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `project_files`
--
ALTER TABLE `project_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_messages`
--
ALTER TABLE `project_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `project_milestones`
--
ALTER TABLE `project_milestones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `project_tasks`
--
ALTER TABLE `project_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `project_timesheets`
--
ALTER TABLE `project_timesheets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `team_tasks`
--
ALTER TABLE `team_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
