-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 09:40 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desk_solution`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_us`
--

CREATE TABLE `tbl_about_us` (
  `aboutus_id` int(10) NOT NULL,
  `aboutus_description` text COLLATE utf8_unicode_ci NOT NULL,
  `mission_description` text COLLATE utf8_unicode_ci NOT NULL,
  `plan_description` text COLLATE utf8_unicode_ci NOT NULL,
  `vission_description` text COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_about_us`
--

INSERT INTO `tbl_about_us` (`aboutus_id`, `aboutus_description`, `mission_description`, `plan_description`, `vission_description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1, 0, NULL, NULL),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 0, 0, NULL, '2018-03-30 23:47:36'),
(3, 'xcsdfsdf', 'sdsd', 'sdsdsd', 'sdsdsd', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_us_image`
--

CREATE TABLE `tbl_about_us_image` (
  `aboutus_image_id` int(10) NOT NULL,
  `aboutus_id` int(10) NOT NULL,
  `image_option` text COLLATE utf8_unicode_ci NOT NULL,
  `image_level` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_about_us_image`
--

INSERT INTO `tbl_about_us_image` (`aboutus_image_id`, `aboutus_id`, `image_option`, `image_level`, `created_at`, `updated_at`) VALUES
(7, 3, 'images/aboutus_image/OOshJNUtCGJtMPmhteRg.jpg', 1, '2018-03-30 22:51:56', '2018-03-30 22:51:56'),
(8, 3, 'images/aboutus_image/qGcWqsMbHAkxp3brRGN4.jpg', 2, '2018-03-30 22:51:56', '2018-03-30 22:51:56'),
(9, 3, 'images/aboutus_image/MTvkAE0m0FUTYAkHA76r.jpg', 3, '2018-03-30 22:51:56', '2018-03-30 22:51:56'),
(19, 2, 'images/aboutus_image/JLepj2cKAXGbmHXmWNkL.jpg', 1, '2018-03-30 22:51:56', '2018-03-30 22:51:56'),
(20, 2, 'images/aboutus_image/eeNbwJVtan9wvzKE3UNm.jpg', 2, '2018-03-30 22:51:56', '2018-03-30 22:51:56'),
(21, 2, 'images/aboutus_image/fu8dbQi4bLmfMq7v5O8Y.png', 3, '2018-03-30 22:51:56', '2018-03-30 22:51:56'),
(28, 1, 'images/aboutus_image/D1ReuSh7j3wYuYubPkIT.jpg', 1, '2018-03-30 22:51:56', '2018-03-30 22:51:56'),
(29, 1, 'images/aboutus_image/zdDrMfdic60qS29FUhLT.jpg', 2, '2018-03-30 22:51:56', '2018-03-30 22:51:56'),
(30, 1, 'images/aboutus_image/wkhgSzE8pqy5SYQG19NE.jpg', 3, '2018-03-30 22:51:56', '2018-03-30 22:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email_address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_level` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email_address`, `admin_password`, `admin_level`, `created_at`, `updated_at`) VALUES
(1, 'Md. Abdur Rahim', 'rahim3070@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2018-03-30 22:52:40', '2018-03-30 22:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `contactus_id` int(10) NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `about_company` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`contactus_id`, `description`, `address`, `phone_number`, `email`, `about_company`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 'Say something about Contact Us.', '2/F (80), Bashbari Road, Mohammadpur, Dhaka-1207.', '01675204103,01918318402', 'rahim3070@gmail.com', 'Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.', 1, 0, NULL, '2018-03-30 23:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `home_id` int(10) NOT NULL,
  `home_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `home_description` text COLLATE utf8_unicode_ci NOT NULL,
  `home_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`home_id`, `home_title`, `home_description`, `home_image`, `publication_status`, `deletion_status`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Responsive Web Design', 'Responsive Web Design Using Laravel', 'images/home_image/8Bd7ej3D1AQICS8qi6We.jpg', 1, 0, 1, NULL, '2018-03-30 23:57:11'),
(2, 'Responsive Web Design', 'Responsive Web Design Using Wordpress.', 'images/home_image/r5S0ZD9y49zKAkz3O2vY.jpg', 1, 0, 0, NULL, NULL),
(3, 'PSD to HTML Conversion', 'PSD to HTML Conversion using HTML5 & CSS3.', 'images/home_image/YvLiUVMDJxPwmP2WT7yZ.jpg', 1, 0, 0, NULL, NULL),
(4, 'Graphics Design', 'Graphics Design using Adobe Illustrator.', 'images/home_image/7kP8LXiC6DZUQHNvi1Dj.jpg', 1, 0, 0, NULL, NULL),
(5, 'Career Counseling', 'Career Counseling using expert freelancers.', 'images/home_image/etU5H0COeUF27Ixsz5R7.jpg', 1, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `seen` tinyint(4) NOT NULL DEFAULT '0',
  `reply` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `name`, `email_address`, `subject`, `message`, `seen`, `reply`, `created_at`, `updated_at`) VALUES
(1, 'Md. Abdur Rahim', 'rahim3070@gmail.com', 'Test Message', 'Hello Desk Solution', 0, 0, NULL, NULL),
(2, 'Md. Abdur Rahim', 'rahim3070@gmail.com', 'Test Message', '2/F (80), Bashbari Road, Mohammadpur, Dhaka-1207.', 1, 1, NULL, NULL),
(3, 'Md. Abdur Rahim', 'rahim3070@gmail.com', 'Test Message', '01675204103,01918318402', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

CREATE TABLE `tbl_newsletter` (
  `newsletter_id` int(10) NOT NULL,
  `heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`newsletter_id`, `heading`, `details`, `image`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 'Heading-1', 'Heading-1 Details.', 'images/newsletter_image/XKwSvkIewgS9PJNqNnHR.jpg', 1, 0, '2018-03-31 19:20:26', '2018-03-31 19:40:11'),
(2, 'Heading-2', 'Heading-2 Details.', 'images/newsletter_image/Xu6FdQAp1JQM3fPBhmbD.jpg', 1, 0, '2018-03-31 19:21:05', '2018-03-31 19:40:24'),
(3, 'Heading-3', 'Heading-3 Details', 'images/newsletter_image/eDXB8OvSy6b9pXLavW0L.jpg', 1, 0, '2018-03-31 19:21:23', '2018-03-31 19:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio_category`
--

CREATE TABLE `tbl_portfolio_category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `filter_name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_portfolio_category`
--

INSERT INTO `tbl_portfolio_category` (`category_id`, `category_name`, `filter_name`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 'Wordpress', 'wordpress', 1, 0, '2018-03-30 21:55:07', '2018-03-30 21:55:55'),
(2, 'Laravel', 'laravel', 1, 0, '2018-03-30 21:54:49', '2018-03-30 21:54:49'),
(3, 'Web', 'web', 1, 0, '2018-03-30 21:19:47', '2018-03-30 21:19:47'),
(4, 'PSD to HTML', 'psd', 0, 1, '2018-03-30 21:19:47', '2018-03-30 22:19:13'),
(5, 'Abc', 'abc', 1, 0, '2018-03-31 02:19:15', '2018-03-31 02:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio_category_details`
--

CREATE TABLE `tbl_portfolio_category_details` (
  `category_details_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `heading` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `portfolio_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_portfolio_category_details`
--

INSERT INTO `tbl_portfolio_category_details` (`category_details_id`, `category_id`, `heading`, `details`, `title`, `portfolio_image`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Wordpress-1', 'Responsive web design using wordpress', 'Wordpress-1', 'images/portfolio_image/IFfyjIbb5S98X2kejY0v.jpg', 1, 0, NULL, NULL),
(2, 1, 'Wordpress-2', 'Responsive web design using wordpress', 'Wordpress-2', 'images/portfolio_image/jYSoSfICJhNc66lFipxs.jpg', 1, 0, NULL, NULL),
(3, 2, 'Laravel-1', 'Responsive web design using laravel', 'Laravel-1', 'images/portfolio_image/Ovy7Sln5FNOZpWnzJlvI.jpg', 1, 0, NULL, NULL),
(4, 3, 'Web-1', 'Web Design', 'Web-1', 'images/portfolio_image/qG283sGOuHWiuArMYw1q.jpg', 1, 0, NULL, NULL),
(5, 3, 'Web-2', 'Web Design', 'Web-2', 'images/portfolio_image/z1KT674CUZxel5GHD943.jpg', 1, 0, NULL, NULL),
(6, 3, 'Web-2', 'Web Design', 'Web-2', 'images/portfolio_image/clhq8rJw9DmcI2NOut5L.jpg', 1, 0, NULL, NULL),
(7, 2, 'Laravel-2', 'Responsive web design using laravel', 'Laravel-2', 'images/portfolio_image/UMjiDd8fsGmdasthN7pT.jpg', 1, 0, NULL, NULL),
(8, 5, 'Abc-1', 'agsfagfdgsa', 'Abc-1', 'images/portfolio_image/bKG2XhHS0Uh6A8bIXhz3.jpg', 1, 0, '2018-03-31 02:21:18', '2018-03-31 02:21:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `team_id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`team_id`, `name`, `designation`, `image`, `publication_status`, `deletion_status`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Ramjan Ali', 'CEO', 'images/team_image/9Ltf7x05k237kaBFl1uM.jpg', 1, 0, 1, NULL, NULL),
(2, 'Md. Abdur Rahim', 'Product Manager', 'images/team_image/MRW6saOcZqpuRXYq5SZp.jpg', 1, 0, 1, NULL, NULL),
(3, 'Sharif Abdullah', 'CTO', 'images/team_image/iw2naJEqvr4D0J8Ig64z.jpg', 1, 0, 1, NULL, NULL),
(4, 'Amir Mohammad Masum', 'Accountant', 'images/team_image/1pjyd1szuL4jPlr0e8lg.jpg', 1, 0, 1, NULL, NULL),
(5, 'Sumon Pal', 'Web Developer', 'images/team_image/AuAlhijzRNhWRAXJj8DM.jpg', 1, 0, 1, NULL, NULL),
(6, 'Asir Uddin', 'Web Developer', 'images/team_image/avpLqvgO1Z744yMb9Ej6.jpg', 1, 0, 1, NULL, NULL);

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
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  ADD PRIMARY KEY (`aboutus_id`);

--
-- Indexes for table `tbl_about_us_image`
--
ALTER TABLE `tbl_about_us_image`
  ADD PRIMARY KEY (`aboutus_image_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`contactus_id`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  ADD PRIMARY KEY (`newsletter_id`);

--
-- Indexes for table `tbl_portfolio_category`
--
ALTER TABLE `tbl_portfolio_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_portfolio_category_details`
--
ALTER TABLE `tbl_portfolio_category_details`
  ADD PRIMARY KEY (`category_details_id`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  MODIFY `aboutus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_about_us_image`
--
ALTER TABLE `tbl_about_us_image`
  MODIFY `aboutus_image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `contactus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `home_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `newsletter_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_portfolio_category`
--
ALTER TABLE `tbl_portfolio_category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_portfolio_category_details`
--
ALTER TABLE `tbl_portfolio_category_details`
  MODIFY `category_details_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `team_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
