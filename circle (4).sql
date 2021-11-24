-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 02:21 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `circle`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '1 = active, 2 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title_en`, `title_bn`, `slug_en`, `description_en`, `description_bn`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '5 Reasons Why Our Promotional Calendars Are A Hit!', NULL, '5-reasons-why-our-promotional-calendars-are-a-hit', '<p>We’re in the midst of another September and it’s the beginning of the calendar season! We’re taking orders for 2022 calendars and we have an exciting line-up of calendars for you.<br><br>Calendars are hugely popular – it’s difficult to find a home or office without a calendar. A few years ago, an ASI study revealed that 29% of American consumers own promotional calendars. 76% of these correspondents said they display the calendars in prominent locations in their office or home. This provides extra brand exposure for your business.<br><br>Every year, a large and faithful group of shoppers purchase our colorful calendars that are available in a variety of shapes and sizes. What makes them come back and purchase our calendars year after year? In this article, we explore 6 reasons why our promotional calendars are a big hit!<br><br>We have calendars for every setting: When most people think of calendars, they first think of wall or desk calendars. We also have the following varieties:<br>Stick-Up &amp; Magnetic Calendars: These are small calendars that are ideal for mailings. Examples include Picture Frame with Calendar Magnet, Calendar House Magnet and Large Magnetic Calendar.<br>Weekly &amp; Monthly Planners: These calendars help your target audience stay organized! Examples include: Translucent Monthly Pocket Planner, Lafayette Monthly Planner and Adult Coloring Book Planner – Academic.<br>Calendar Greeting Cards: This calendar can be distributed throughout the year! An example is the 4-Color Wallet Card Calendar<br>Our calendars are easy to distribute: A lot of our calendars are compact and can be easily mailed out to customers, employees and potential business contacts. They are also easy to distribute at workplaces.<br>Our calendars are inspiring: We have got some really good-looking calendars that can inspire recipients. These calendars can do a great job of bringing a smile on faces, inspiring passersby to do their best every day! Examples include Motivations Stapled Calendar, Eternal Word – Spiral Calendar, Wildlife Wall Calendar – Spiral, and Gardens Wall Calendar – Spiral.<br>Our calendars provide year-long advertising: This is probably the #1 reason why you should go for our calendars. Our calendars are high-quality and won’t be discarded soon. Count on them being used for a year and beyond!<br>Our calendars offer amazing ROI: Most of our calendars are extremely-low priced. Examples include Weather Watchers Wall Calendar, Wildlife Portraits Spiral Calendar and Muscle Thunder Calendar. Very few promotional products offer this kind of ROI for a marketing campaign that has the potential to offer advertising 24 hours a day, 365 days a year, and beyond! The brand referrals achieved through our calendars must be seen to be believed!<br>Remember that your business won’t be the only one investing in calendars as giveaways. It’s important to have a head start and place your order before others do. This adds to the novelty factor brought in by your personalized calendars. Be an early bird and place your order soon or get in touch with us and we’ll help you pick the right calendars for your branding requirement.<br></p>', NULL, '/uploaded/blog/1632723190_615160f61177c.png', 1, '2021-09-21 08:19:25', '2021-09-27 06:13:10'),
(3, 1, 'Tips To Score A Marketing Touchdown', NULL, 'tips-to-score-a-marketing-touchdown', '<p>It’s September and the 102nd NFL season is underway. With so many top teams harboring hopes of success, and some top stars heading to new franchises, the 2021-22 season promises to rank among the greatest ever!<br><br>A lot of our customers are excited for the launch of the regular season with Super Bowl LV champion Tampa Bay hosting Dallas in the Kickoff Game on September 9, 2021. This year’s season promises 5 months of fabulous action that culminates with Super Bowl LVI at SoFi Stadium in Inglewood, California, on February 13.<br><br>There is a high dose of optimism associated with the NFL each year and businesses are keen to convert this optimism into marketing leads by sharing the business promotional products to their customers. Make a marketing touchdown by launching an exciting football-themed advertising campaign. Here are 5 tips to help you leverage NFL’s popularity for your brand’s success.<br><br>Launch a selfie contest<br>You could launch a selfie contest by asking customers to don the gear of their favorite teams and send in their pictures. They could upload their selfies on your company’s social media pages or share them via email. Announce prizes well in advance to ensure more participation. If you are not keen on a selfie contest, you could opt for a Simple Trivia Contest. Personalize any of our exciting tees and distribute them as giveaways. Some options include the Gildan® – Ultra Cotton® T-Shirt (Color), Port &amp; Company® Long Sleeve Performance Blend Tee (Color), and Port &amp; Company® – Core Blend Tee (Color).<br><br>Launch a prediction contest<br>A prediction contest will keep your target audience on their toes and make your marketing campaign a lot more interesting. Encourage participants to predict eventual winners for the Super Bowl. This contest can build excitement towards your brand and help the customer associate your brand with the Super Bowl. Give out exciting prizes for winners.<br><br>Organize a community football festival<br>You could partner with other local businesses to organize a community football festival that brings together players from the junior league. The event could be held just in time for the Super Bowl, attracting fans and the public in hordes.<br><br>Leverage the power of direct mail<br>You could design a postcard with a message in the local football team’s color to add a new dimension to your branding efforts. Adding a discount code, brochure or a free gift will serve as the icing on the cake. Postcards 4 x 6 is an example of a custom printed post card in our inventory.<br><br>Distribute football-themed promotional products<br>You will never go wrong with our range of giveaways! They are inexpensive yet high on quality, providing you with an exciting launch to your marketing efforts. Opt for giveaways such as the Football Stress Reliever, 7″ Mini Vinyl Footballs, Football Rocket, Football Sunglasses, Football Themed Magnets or the 7″ Two-Toned Foam Football.<br><br>We hope these ideas take your marketing efforts to dizzying heights. Contact us at info@promodirect.com or 1-800-748-6150 for more football-themed marketing ideas!<br></p>', NULL, '/uploaded/blog/1632723069_6151607d04edd.jpg', 1, '2021-09-21 08:55:02', '2021-09-27 06:11:09'),
(5, 1, 'b test', NULL, 'b-test', '<p>fbhn</p>', NULL, '/uploaded/blog/1632723706_615162fac14ee.png', 1, '2021-09-27 06:21:46', '2021-09-27 06:21:46'),
(6, 3, 'New year bonus offer', NULL, 'new-year-bonus-offer', '<p>fdhgydtjy</p>', NULL, NULL, 1, '2021-11-11 07:26:02', '2021-11-11 07:45:45'),
(8, 3, 'You are responsible for your listings and content', NULL, 'you-are-responsible-for-your-listings-and-content', '<p>You are responsible for your listings and content. Even if we host and display your Seller Content on Facebook Products, you are solely responsible for the contents of your Seller Content. You must ensure that all Seller Content is true, accurate and complete at all times, including without limitation the description, price, applicable taxes or fees, shipping information, required legal disclosures and other advertisement, offer or promotional content. You are solely responsible for setting the price of products or services you offer. If we provide guidance regarding a suggested price for products or services you offer, such guidance is informational only and the decision to accept or reject such guidance is solely yours.<br></p>', NULL, NULL, 1, '2021-11-11 07:48:10', '2021-11-11 08:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name_en`, `category_name_bn`, `slug_en`, `slug_bn`, `created_at`, `updated_at`) VALUES
(1, 'Others', NULL, 'others', '', '2021-09-21 08:15:12', '2021-09-21 08:15:12'),
(3, 'Notice', NULL, 'notice', '', '2021-11-11 07:06:39', '2021-11-11 07:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_logo`, `created_at`, `updated_at`) VALUES
(2, 'Home Collection', NULL, '2021-10-06 05:56:41', '2021-10-06 05:56:41'),
(3, 'Bonafide', NULL, '2021-10-06 05:56:50', '2021-10-06 05:56:50'),
(4, 'Chinese', NULL, '2021-10-06 05:57:06', '2021-10-06 05:57:06'),
(5, 'Rana Textile Kumarkhali', NULL, '2021-10-06 05:57:25', '2021-10-06 05:57:25'),
(6, 'Huda Beauty', NULL, '2021-10-06 05:57:40', '2021-10-06 05:57:40'),
(7, 'Focallure', NULL, '2021-10-06 05:57:55', '2021-10-06 05:57:55'),
(8, 'Beauty Glazed', NULL, '2021-10-06 05:58:10', '2021-10-06 05:58:10'),
(9, 'Bonjour', NULL, '2021-10-06 05:58:28', '2021-10-06 05:58:28'),
(10, 'MORJA', NULL, '2021-10-06 05:58:44', '2021-10-06 05:58:44'),
(11, 'Pakistani', NULL, '2021-10-06 05:58:56', '2021-10-06 05:58:56'),
(12, 'SR Umbrella', NULL, '2021-10-06 05:59:09', '2021-10-06 05:59:09'),
(13, 'Thailand', NULL, '2021-10-06 05:59:24', '2021-10-06 05:59:24'),
(14, 'Bangladesh', NULL, '2021-10-06 06:00:13', '2021-10-06 06:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `card_types`
--

CREATE TABLE `card_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `card_types`
--

INSERT INTO `card_types` (`id`, `card_type`, `created_at`, `updated_at`) VALUES
(12, 'VISA', '2021-09-16 06:51:24', '2021-09-16 06:51:24'),
(13, 'Master Card', '2021-09-16 06:51:38', '2021-09-16 06:51:38'),
(14, 'American Express', '2021-09-16 06:51:52', '2021-09-16 06:51:52'),
(15, 'Others', '2021-09-16 06:52:17', '2021-09-16 06:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `item_color` int(11) DEFAULT NULL,
  `total_items` bigint(20) NOT NULL,
  `small` bigint(20) DEFAULT NULL,
  `medium` bigint(20) DEFAULT NULL,
  `large` bigint(20) DEFAULT NULL,
  `axal` bigint(20) DEFAULT NULL,
  `twoxl` bigint(20) DEFAULT NULL,
  `threexl` bigint(20) DEFAULT NULL,
  `fourxl` bigint(20) DEFAULT NULL,
  `left_chest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `left_chest_no_of_imprint_color` int(11) DEFAULT NULL,
  `left_chest_imprint_color_1` int(11) DEFAULT NULL,
  `left_chest_imprint_color_2` int(11) DEFAULT NULL,
  `left_chest_imprint_color_3` int(11) DEFAULT NULL,
  `left_chest_imprint_color_4` int(11) DEFAULT NULL,
  `left_chest_imprint_color_5` int(11) DEFAULT NULL,
  `left_chest_imprint_color_6` int(11) DEFAULT NULL,
  `left_chest_imprint_color_7` int(11) DEFAULT NULL,
  `left_chest_imprint_color_8` int(11) DEFAULT NULL,
  `full_front` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_front_no_of_imprint_color` int(11) DEFAULT NULL,
  `full_front_imprint_color_1` int(11) DEFAULT NULL,
  `full_front_imprint_color_2` int(11) DEFAULT NULL,
  `full_front_imprint_color_3` int(11) DEFAULT NULL,
  `full_front_imprint_color_4` int(11) DEFAULT NULL,
  `full_front_imprint_color_5` int(11) DEFAULT NULL,
  `full_front_imprint_color_6` int(11) DEFAULT NULL,
  `full_front_imprint_color_7` int(11) DEFAULT NULL,
  `full_front_imprint_color_8` int(11) DEFAULT NULL,
  `full_back` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_back_no_of_imprint_color` int(11) DEFAULT NULL,
  `full_back_imprint_color_1` int(11) DEFAULT NULL,
  `full_back_imprint_color_2` int(11) DEFAULT NULL,
  `full_back_imprint_color_3` int(11) DEFAULT NULL,
  `full_back_imprint_color_4` int(11) DEFAULT NULL,
  `full_back_imprint_color_5` int(11) DEFAULT NULL,
  `full_back_imprint_color_6` int(11) DEFAULT NULL,
  `full_back_imprint_color_7` int(11) DEFAULT NULL,
  `full_back_imprint_color_8` int(11) DEFAULT NULL,
  `right_sleeve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_sleeve_no_of_imprint_color` int(11) DEFAULT NULL,
  `right_sleeve_imprint_color_1` int(11) DEFAULT NULL,
  `right_sleeve_imprint_color_2` int(11) DEFAULT NULL,
  `right_sleeve_imprint_color_3` int(11) DEFAULT NULL,
  `right_sleeve_imprint_color_4` int(11) DEFAULT NULL,
  `right_sleeve_imprint_color_5` int(11) DEFAULT NULL,
  `right_sleeve_imprint_color_6` int(11) DEFAULT NULL,
  `right_sleeve_imprint_color_7` int(11) DEFAULT NULL,
  `right_sleeve_imprint_color_8` int(11) DEFAULT NULL,
  `packaging_option` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `item_color`, `total_items`, `small`, `medium`, `large`, `axal`, `twoxl`, `threexl`, `fourxl`, `left_chest`, `left_chest_no_of_imprint_color`, `left_chest_imprint_color_1`, `left_chest_imprint_color_2`, `left_chest_imprint_color_3`, `left_chest_imprint_color_4`, `left_chest_imprint_color_5`, `left_chest_imprint_color_6`, `left_chest_imprint_color_7`, `left_chest_imprint_color_8`, `full_front`, `full_front_no_of_imprint_color`, `full_front_imprint_color_1`, `full_front_imprint_color_2`, `full_front_imprint_color_3`, `full_front_imprint_color_4`, `full_front_imprint_color_5`, `full_front_imprint_color_6`, `full_front_imprint_color_7`, `full_front_imprint_color_8`, `full_back`, `full_back_no_of_imprint_color`, `full_back_imprint_color_1`, `full_back_imprint_color_2`, `full_back_imprint_color_3`, `full_back_imprint_color_4`, `full_back_imprint_color_5`, `full_back_imprint_color_6`, `full_back_imprint_color_7`, `full_back_imprint_color_8`, `right_sleeve`, `right_sleeve_no_of_imprint_color`, `right_sleeve_imprint_color_1`, `right_sleeve_imprint_color_2`, `right_sleeve_imprint_color_3`, `right_sleeve_imprint_color_4`, `right_sleeve_imprint_color_5`, `right_sleeve_imprint_color_6`, `right_sleeve_imprint_color_7`, `right_sleeve_imprint_color_8`, `packaging_option`, `user_id`, `email_address`, `created_at`, `updated_at`) VALUES
(3, 12, NULL, 31, 31, 0, 0, 0, 0, 0, 0, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anasbinsabiet@gmail.com', '2021-09-11 11:43:48', '2021-09-11 11:43:48'),
(4, 12, NULL, 31, 31, 0, 0, 0, 0, 0, 0, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anasbinsabiet@gmail.com', '2021-09-11 11:45:19', '2021-09-11 11:45:19'),
(5, 12, NULL, 31, 31, 0, 0, 0, 0, 0, 0, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anasbinsabiet@gmail.com', '2021-09-11 11:46:53', '2021-09-11 11:46:53'),
(6, 12, NULL, 31, 31, 0, 0, 0, 0, 0, 0, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anasbinsabiet@gmail.com', '2021-09-11 11:47:14', '2021-09-11 11:47:14'),
(7, 12, NULL, 31, 31, 0, 0, 0, 0, 0, 0, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anasbinsabiet@gmail.com', '2021-09-11 11:47:17', '2021-09-11 11:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `on_sale` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `parent_id`, `slug`, `default_image`, `on_sale`, `created_at`, `updated_at`) VALUES
(1, 'Men Clothing & Fashion', NULL, 'men-clothing-fashion', '/uploaded/product/1632991897_61557a9992450.jpg', NULL, '2021-08-23 06:44:04', '2021-09-30 08:51:37'),
(2, 'Festive', NULL, 'festive', '/uploaded/product/1629701406_6123451ececb7.jpg', 1, '2021-08-23 06:50:06', '2021-09-30 08:59:27'),
(3, 'Wallet & Accessories', NULL, 'wallet-accessories', '/uploaded/product/1631777523_6142f2f31a4eb.png', NULL, '2021-09-16 07:32:03', '2021-09-30 08:59:10'),
(4, 'Nighty', NULL, 'nighty', '/uploaded/product/1631777587_6142f33335128.png', NULL, '2021-09-16 07:33:07', '2021-09-30 08:58:50'),
(5, 'JACKET', NULL, 'jacket', '/uploaded/product/1631777669_6142f385d2590.png', NULL, '2021-09-16 07:34:29', '2021-09-30 08:58:33'),
(6, 'Tangail Saree', NULL, 'tangail-saree', '/uploaded/product/1631777703_6142f3a7b8229.png', NULL, '2021-09-16 07:35:03', '2021-09-30 08:58:14'),
(7, 'SILK SAREE', NULL, 'silk-saree', '/uploaded/product/1631777732_6142f3c4db882.png', 1, '2021-09-16 07:35:32', '2021-09-30 08:57:59'),
(8, 'School Bag', NULL, 'school-bag', '/uploaded/product/1631781837_614303cdbce67.jpg', NULL, '2021-09-16 08:43:57', '2021-09-30 08:57:43'),
(9, 'PUNJABI', NULL, 'punjabi', '/uploaded/product/1631782162_6143051262d90.jpg', NULL, '2021-09-16 08:49:22', '2021-09-30 08:57:00'),
(10, 'Personal Care', NULL, 'personal-care', '/uploaded/product/1631782205_6143053d7750c.jpg', NULL, '2021-09-16 08:50:05', '2021-09-30 08:56:38'),
(11, 'Gadget & Electronics', NULL, 'gadget-electronics', '/uploaded/product/1631782241_6143056143dae.jpg', NULL, '2021-09-16 08:50:41', '2021-09-30 08:56:17'),
(12, 'Wholesale', NULL, 'wholesale', '/uploaded/product/1631782286_6143058e90ade.jpg', NULL, '2021-09-16 08:51:26', '2021-09-30 08:55:56'),
(13, 'Women Clothing & Fashions', NULL, 'women-clothing-fashions', '/uploaded/product/1632991713_615579e1bb2e4.jpg', NULL, '2021-09-16 08:52:07', '2021-10-02 05:25:33'),
(14, 'Kids', NULL, 'kids', '/uploaded/product/1632991945_61557ac9dbc81.jpg', NULL, '2021-09-16 08:52:51', '2021-09-30 08:52:25'),
(15, 'Foods', 1, 'foods', '/uploaded/product/1631782396_614305fc97e33.jpg', NULL, '2021-09-16 08:53:16', '2021-09-30 08:55:26'),
(16, 'Beauty Products', NULL, 'beauty-products', '/uploaded/product/1632048057_614713b91e364.png', NULL, '2021-09-19 10:40:57', '2021-09-30 08:55:07'),
(17, 'Winter Collection', NULL, 'winter-collection', '/uploaded/product/1632048110_614713ee2594a.png', NULL, '2021-09-19 10:41:50', '2021-09-30 08:54:46'),
(18, 'Offer Products', NULL, 'offer-products', '/uploaded/product/1632048154_6147141aa753d.png', NULL, '2021-09-19 10:42:34', '2021-09-30 08:54:28'),
(19, 'Islamic Items', NULL, 'islamic-items', '/uploaded/product/1632048180_61471434052ed.png', NULL, '2021-09-19 10:43:00', '2021-09-30 08:54:09'),
(20, 'Essential products', NULL, 'essential-products', '/uploaded/product/1632048226_6147146262f68.png', NULL, '2021-09-19 10:43:46', '2021-09-30 08:53:49'),
(21, 'Home Decor', NULL, 'home-decor', '/uploaded/product/1632048254_6147147eed7b3.png', NULL, '2021-09-19 10:44:14', '2021-09-30 08:53:33'),
(22, 'Purse & Jewelry', NULL, 'purse-jewelry', '/uploaded/product/1632991995_61557afb91662.jpg', NULL, '2021-09-19 10:45:00', '2021-09-30 08:53:15'),
(23, 'Kurti', 13, 'kurti', NULL, NULL, '2021-10-04 10:23:50', '2021-10-04 10:23:50'),
(24, 'Jewellery', 13, 'jewellery', NULL, NULL, '2021-10-04 10:24:59', '2021-10-04 10:24:59'),
(25, 'Saree', 13, 'saree', NULL, NULL, '2021-10-04 10:25:09', '2021-10-04 10:25:09'),
(26, 'Salwar Kameez', 13, 'salwar-kameez', NULL, NULL, '2021-10-04 10:25:22', '2021-10-04 10:25:22'),
(27, 'Tops', 13, 'tops', NULL, NULL, '2021-10-04 10:25:41', '2021-10-04 10:25:41'),
(28, 'Skirt', 13, 'skirt', NULL, NULL, '2021-10-04 10:26:51', '2021-10-04 10:26:51'),
(29, 'Blouse', 13, 'blouse', NULL, NULL, '2021-10-04 10:27:00', '2021-10-04 10:27:00'),
(30, 'Boishakhi Collection', 13, 'boishakhi-collection', NULL, NULL, '2021-10-04 10:27:11', '2021-10-04 10:27:11'),
(31, 'Mexi', 13, 'mexi', NULL, NULL, '2021-10-04 10:27:22', '2021-10-04 10:27:22'),
(32, 'Couple Collection', 13, 'couple-collection', NULL, NULL, '2021-10-04 10:27:36', '2021-10-04 10:27:36'),
(33, 'Family Combo', 13, 'family-combo', NULL, NULL, '2021-10-04 10:27:47', '2021-10-04 10:27:47'),
(34, 'Hand Stitched Salwar Kameez', 13, 'hand-stitched-salwar-kameez', NULL, NULL, '2021-10-04 10:27:58', '2021-10-04 10:27:58'),
(35, 'Gown', 13, 'gown', NULL, NULL, '2021-10-04 10:28:09', '2021-10-04 10:28:09'),
(36, 'Plazzo', 13, 'plazzo', NULL, NULL, '2021-10-04 10:28:19', '2021-10-04 10:28:19'),
(37, 'Koti', 13, 'koti', NULL, NULL, '2021-10-04 10:28:31', '2021-10-04 10:28:31'),
(38, 'Laser Cut', 13, 'laser-cut', NULL, NULL, '2021-10-04 10:28:40', '2021-10-04 10:28:40'),
(39, 'Yoga Pant', 13, 'yoga-pant', NULL, NULL, '2021-10-04 10:29:06', '2021-10-04 10:29:06'),
(40, 'Gharara', 13, 'gharara', NULL, NULL, '2021-10-04 10:29:59', '2021-10-04 10:29:59'),
(41, 'Single Kameez', 13, 'single-kameez', NULL, NULL, '2021-10-04 10:30:11', '2021-10-04 10:30:11'),
(42, 'Lawn', 13, 'lawn', NULL, NULL, '2021-10-04 10:30:21', '2021-10-04 10:30:21'),
(43, 'Hand Paint Dress', 13, 'hand-paint-dress', NULL, NULL, '2021-10-04 10:30:32', '2021-10-04 10:30:32'),
(44, 'Women T-Shirt', 13, 'women-t-shirt', NULL, NULL, '2021-10-04 10:30:42', '2021-10-04 10:30:42'),
(45, 'Women pant', 13, 'women-pant', NULL, NULL, '2021-10-04 10:30:54', '2021-10-04 10:30:54'),
(46, 'Women Shirt', 13, 'women-shirt', NULL, NULL, '2021-10-04 10:31:08', '2021-10-04 10:31:08'),
(47, 'Block Saree', 25, 'block-saree', NULL, NULL, '2021-10-10 12:50:52', '2021-10-10 12:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_name`, `created_at`, `updated_at`) VALUES
(14, 'Black', '2021-08-26 05:25:28', '2021-08-26 05:26:45'),
(15, 'Blue', '2021-08-26 05:26:58', '2021-08-26 05:26:58'),
(16, 'Brown', '2021-08-26 05:27:11', '2021-08-26 05:27:11'),
(17, 'Burgundy', '2021-08-26 05:27:19', '2021-08-26 05:27:19'),
(18, 'Green', '2021-08-26 05:27:27', '2021-08-26 05:27:27'),
(19, 'Grey', '2021-08-26 05:27:35', '2021-08-26 05:27:35'),
(20, 'Khaki', '2021-08-26 05:27:42', '2021-08-26 05:27:42'),
(21, 'Natural', '2021-08-26 05:27:50', '2021-08-26 05:27:50'),
(22, 'Orange', '2021-08-26 05:27:57', '2021-08-26 05:27:57'),
(23, 'Pink', '2021-08-26 05:28:04', '2021-08-26 05:28:04'),
(24, 'Purple', '2021-08-26 05:28:11', '2021-08-26 05:28:11'),
(25, 'Red', '2021-08-26 05:28:20', '2021-08-26 05:28:20'),
(26, 'Silver', '2021-08-26 05:28:27', '2021-08-26 05:28:27'),
(27, 'White', '2021-08-26 05:28:33', '2021-08-26 05:28:33'),
(28, 'Yellow', '2021-08-26 05:28:40', '2021-08-26 05:28:40'),
(29, 'Blueberry', '2021-08-31 11:52:55', '2021-08-31 11:52:55'),
(30, 'Bright Orange', '2021-08-31 11:54:27', '2021-08-31 11:54:27'),
(31, 'Forest Green', '2021-08-31 11:54:51', '2021-08-31 11:54:51'),
(32, 'Graphite Heather', '2021-09-06 06:28:27', '2021-09-06 06:28:27'),
(33, 'Heather Indigo', '2021-09-06 06:28:45', '2021-09-06 06:28:45'),
(34, 'Heather Red', '2021-09-06 06:28:56', '2021-09-06 06:28:56'),
(35, 'Heather Sapphire', '2021-09-06 06:29:14', '2021-09-06 06:29:14'),
(36, 'Antique Heliconia', '2021-09-06 06:29:30', '2021-09-06 06:29:30'),
(37, 'Cardinal', '2021-09-06 06:29:43', '2021-09-06 06:29:43'),
(38, 'Cherry Red', '2021-09-06 06:30:04', '2021-09-06 06:30:04'),
(39, 'Dark Chocolate', '2021-09-06 06:30:15', '2021-09-06 06:30:15'),
(40, 'Heather Irish Green', '2021-09-06 06:30:35', '2021-09-06 06:30:35'),
(41, 'Light Blue', '2021-09-06 06:30:47', '2021-09-06 06:30:47'),
(42, 'Kiwi', '2021-09-06 06:30:58', '2021-09-06 06:30:58'),
(43, 'Irish Green', '2021-09-06 06:31:13', '2021-09-06 06:31:13'),
(44, 'Indigo Blue', '2021-09-06 06:31:28', '2021-09-06 06:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `color_images`
--

CREATE TABLE `color_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `color_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `color_images`
--

INSERT INTO `color_images` (`id`, `product_id`, `color_id`, `color_image`, `created_at`, `updated_at`) VALUES
(9, 5, 15, '/uploaded/product/1630586499_6130c683e3164.jpg', '2021-09-02 12:41:39', '2021-09-02 12:41:39'),
(10, 10, 14, NULL, '2021-09-04 10:01:43', '2021-09-04 10:01:43'),
(11, 10, 15, NULL, '2021-09-04 10:01:43', '2021-09-04 10:01:43'),
(12, 10, 25, NULL, '2021-09-04 10:01:43', '2021-09-04 10:01:43'),
(33, 11, 30, '/uploaded/product/1630816740_613449e4ebea7.jpg', '2021-09-05 04:39:00', '2021-09-05 04:39:00'),
(38, 11, 28, '/uploaded/product/1632135562_6148698a29582.jpg', '2021-09-20 10:59:22', '2021-09-20 10:59:22'),
(39, 12, 32, '/uploaded/product/1630910297_6135b759ebc3d.jpg', '2021-09-06 06:38:17', '2021-09-06 06:38:17'),
(40, 12, 33, '/uploaded/product/1630910349_6135b78d7ac88.jpg', '2021-09-06 06:39:09', '2021-09-06 06:39:09'),
(41, 12, 34, '/uploaded/product/1630910389_6135b7b533813.jpg', '2021-09-06 06:39:49', '2021-09-06 06:39:49'),
(42, 12, 35, '/uploaded/product/1630910468_6135b804d316e.jpg', '2021-09-06 06:41:08', '2021-09-06 06:41:08'),
(43, 12, 36, '/uploaded/product/1630910750_6135b91e4601f.jpg', '2021-09-06 06:45:50', '2021-09-06 06:45:50'),
(44, 12, 37, '/uploaded/product/1630910811_6135b95be7ef6.jpg', '2021-09-06 06:46:51', '2021-09-06 06:46:51'),
(45, 13, NULL, '/uploaded/product/1633346945_615ae5816e471.jpg', '2021-10-04 11:29:05', '2021-10-04 11:29:05'),
(63, 14, NULL, '/uploaded/product/cch.jpg', '2021-10-09 11:35:23', '2021-10-09 11:35:23'),
(64, 16, NULL, '/uploaded/product/1633779802_6161805a5a0c8.jpg', '2021-10-09 11:43:22', '2021-10-09 11:43:22'),
(65, 16, NULL, '/uploaded/product/1633779802_6161805a5bcc1.jpg', '2021-10-09 11:43:22', '2021-10-09 11:43:22'),
(66, 13, NULL, '/uploaded/product/g1.jpg', '2021-10-10 07:05:17', '2021-10-10 07:05:17'),
(67, 13, NULL, '/uploaded/product/g2.jpg', '2021-10-10 07:05:17', '2021-10-10 07:05:17'),
(68, 18, NULL, '/uploaded/product/1634017835_6165222bd879b.jpg', '2021-10-12 05:50:35', '2021-10-12 05:50:35'),
(69, 19, NULL, '/uploaded/product/1636004681_61837349a85bf.png', '2021-11-04 05:44:41', '2021-11-04 05:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `contactpages`
--

CREATE TABLE `contactpages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactpages`
--

INSERT INTO `contactpages` (`id`, `name`, `mobile`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Anas', '01793478194', 'anasbinsabiet@gmail.com', 'test sub 1', 'sdghjkl;', '2021-07-09 13:43:55', '2021-07-09 13:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon`, `discount`, `created_at`, `updated_at`) VALUES
(1, 'eid2021', 10, '2021-07-05 13:59:25', '2021-07-05 13:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` int(11) NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `district_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dhaka', '2021-06-28 05:01:06', '2021-06-28 05:01:06'),
(2, 2, 'Meherpur', '2021-07-05 13:29:01', '2021-07-05 13:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', '2021-06-28 05:00:47', '2021-06-28 05:00:47'),
(2, 'Khulna', '2021-07-05 13:28:43', '2021-07-05 13:28:43'),
(3, 'Gazipur', '2021-07-05 13:53:15', '2021-07-05 13:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `fabrics`
--

CREATE TABLE `fabrics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fabric_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fabrics`
--

INSERT INTO `fabrics` (`id`, `fabric_name`, `created_at`, `updated_at`) VALUES
(9, 'Cotton', '2021-08-26 07:07:33', '2021-08-26 07:09:28'),
(10, 'Cotton/Poly Blend', '2021-08-26 07:10:07', '2021-08-26 07:10:07'),
(11, 'Polyester', '2021-08-26 07:10:15', '2021-08-26 07:10:15'),
(12, 'Jersey Knit', '2021-08-26 07:10:53', '2021-08-26 07:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fits`
--

CREATE TABLE `fits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fit_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fits`
--

INSERT INTO `fits` (`id`, `fit_name`, `created_at`, `updated_at`) VALUES
(8, 'Men\'s', '2021-08-26 05:48:42', '2021-08-26 05:49:03'),
(9, 'Tall', '2021-08-26 05:49:15', '2021-08-26 05:49:15'),
(10, 'Unisex', '2021-08-26 05:49:22', '2021-08-26 05:49:22'),
(11, 'Women\'s', '2021-08-26 05:49:31', '2021-08-26 05:49:31'),
(12, 'Youth', '2021-08-26 05:49:41', '2021-08-26 05:49:41');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `default_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `product_id`, `user_id`, `default_image`, `created_at`, `updated_at`) VALUES
(25, '2', 1, '/uploaded/product/1632210694_61498f06cf883.jpg', '2021-09-21 07:38:19', '2021-09-21 07:51:34'),
(26, '1', 1, '/uploaded/product/1632210728_61498f286c2d2.jpg', '2021-09-21 07:41:16', '2021-09-21 07:52:08'),
(27, '3', 1, '/uploaded/product/1632210748_61498f3caae50.jpg', '2021-09-21 07:41:51', '2021-09-21 07:52:28'),
(28, '9', 1, '/uploaded/product/1632210772_61498f5471f41.jpg', '2021-09-21 07:42:04', '2021-09-21 07:52:52'),
(29, '9', 1, '/uploaded/product/1632211096_614990983f451.jpg', '2021-09-21 07:58:16', '2021-09-21 07:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `generics`
--

CREATE TABLE `generics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `generic_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generic_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generics`
--

INSERT INTO `generics` (`id`, `generic_name`, `generic_logo`, `created_at`, `updated_at`) VALUES
(3, 'Alprazolam', NULL, '2021-07-08 20:58:53', '2021-07-08 20:58:53'),
(4, 'Chloroxylenol 2.4 gm/100 ml', NULL, '2021-07-09 15:03:55', '2021-07-09 15:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `helps`
--

CREATE TABLE `helps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '1 = active, 2 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `helps`
--

INSERT INTO `helps` (`id`, `category_id`, `title_en`, `title_bn`, `slug_en`, `description_en`, `description_bn`, `image`, `status`, `created_at`, `updated_at`) VALUES
(13, 4, 'How to place order on CIRCLE', 'https://www.youtube.com/embed/_VTunO7W3vM', 'how-to-place-order-on-circle', '<p>At CIRCLE, you only need to promote products that are on CIRCLE without having to buy the product first. No need to stock up on goods or require capital. If your customer wants to buy, you can make an order in the CIRCLE website/app for customers, and we will send the goods directly from the warehouse to the customer\'s address with your invoice.<br><br>How to Make Orders for Customers?<br><br>1. Go to CIRCLE website/Apps<br><br>2. Login with your Reseller credentials<br><br>3. Search the product<br><br>4. Choose Variation (Color, Size, etc.)<br><br>5. Set your selling price<br><br>6. Click add to cart (if you want to add more product)<br><br>7. Press Buy Now<br><br>8. Check your product information<br><br>9. Continue to shipping<br><br>10. Add customer details<br><br>11. Add customer delivery charge<br><br>12. Add order note if any<br><br>13. Select a customer with a saved address<br><br>14. Choose home delivery or local pick up<br><br>15. Choose default payment option \'Cash on Delivery\'<br><br>16. Press Complete Order<br></p>', NULL, NULL, 1, '2021-11-12 07:58:25', '2021-11-12 09:51:22'),
(14, 5, 'What Couriers Are Available at CIRCLE?', NULL, 'what-couriers-are-available-at-circle', '<p>CIRCLE has collaborated with some of the best Courier services to provide goods delivery throughout Bangladesh. The following delivery services are available at CIRCLE:<br><br>CDS (Circle’s Own Delivery Service- only inside Dhaka)<br>Sundorbon Courier<br>Paperfly Courier<br>Pathao Courier<br>Jononi Courier<br>Korotoa Courier<br></p>', NULL, NULL, 1, '2021-11-13 06:43:15', '2021-11-13 06:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `help_categories`
--

CREATE TABLE `help_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `help_categories`
--

INSERT INTO `help_categories` (`id`, `category_name_en`, `category_name_bn`, `slug_en`, `slug_bn`, `created_at`, `updated_at`) VALUES
(4, 'Make An Order', NULL, 'make-an-order', '', '2021-11-11 10:14:44', '2021-11-11 10:14:44'),
(5, 'Delivery', NULL, 'delivery', '', '2021-11-11 10:15:00', '2021-11-11 10:15:00'),
(6, 'Promoting Products', NULL, 'promoting-products', '', '2021-11-11 10:15:20', '2021-11-11 10:15:20'),
(7, 'Order status', NULL, 'order-status', '', '2021-11-11 10:15:40', '2021-11-11 10:15:40'),
(8, 'Profit & Payment', NULL, 'profit-payment', '', '2021-11-11 10:15:58', '2021-11-11 10:15:58'),
(9, 'Cancellation, Return and Exchange', NULL, 'cancellation-return-and-exchange', '', '2021-11-11 10:16:11', '2021-11-11 10:16:11'),
(10, 'My Account', NULL, 'my-account', '', '2021-11-11 10:16:25', '2021-11-11 10:16:25'),
(11, 'UR Fashion Community', NULL, 'ur-fashion-community', '', '2021-11-11 10:16:53', '2021-11-11 10:16:53'),
(12, 'Promos & Announcement', NULL, 'promos-announcement', '', '2021-11-11 10:17:09', '2021-11-11 10:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `help_images`
--

CREATE TABLE `help_images` (
  `id` int(11) NOT NULL,
  `help_id` int(11) DEFAULT NULL,
  `help_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help_images`
--

INSERT INTO `help_images` (`id`, `help_id`, `help_image`, `created_at`, `updated_at`) VALUES
(76, 13, '/uploaded/product/g1.jpg', '2021-11-12 08:08:03', '2021-11-12 08:08:03'),
(77, 13, '/uploaded/product/g2.jpg', '2021-11-12 08:08:03', '2021-11-12 08:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `imprint_artwork_options`
--

CREATE TABLE `imprint_artwork_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `imprint_artwork_option` int(11) DEFAULT NULL,
  `imprintline1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imprintline2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imprintline3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imprintline4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imprint_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imprint_artwork_options`
--

INSERT INTO `imprint_artwork_options` (`id`, `user_id`, `product_id`, `order_id`, `imprint_artwork_option`, `imprintline1`, `imprintline2`, `imprintline3`, `imprintline4`, `name`, `default_image`, `imprint_comment`, `created_at`, `updated_at`) VALUES
(26, 1, 12, 5, 2, NULL, NULL, NULL, NULL, NULL, '/uploaded/artwork/1632567510_614f00d6a211f.jpg', 'fgbdty', '2021-09-25 10:58:30', '2021-09-25 10:58:30'),
(27, 1, 12, 5, 2, NULL, NULL, NULL, NULL, NULL, '/uploaded/artwork/1632567951_614f028f2f35f.jpg', NULL, '2021-09-25 11:05:51', '2021-09-25 11:05:51'),
(28, 1, 12, 1, 2, NULL, NULL, NULL, NULL, NULL, '/uploaded/artwork/1632574678_614f1cd6d43d5.jpg', 'ff', '2021-09-25 12:57:58', '2021-09-25 12:57:58'),
(29, 1, 5, 1, 2, NULL, NULL, NULL, NULL, NULL, '/uploaded/artwork/1632575952_614f21d0a44e8.png', '5 no good products', '2021-09-25 13:19:12', '2021-09-25 13:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `imprint_methods`
--

CREATE TABLE `imprint_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imprint_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imprint_methods`
--

INSERT INTO `imprint_methods` (`id`, `imprint_method`, `created_at`, `updated_at`) VALUES
(8, 'Embroidery', '2021-08-26 06:00:15', '2021-08-26 06:01:57'),
(9, 'Screen Print', '2021-08-26 06:02:09', '2021-08-26 06:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `parent_id`, `category_id`, `slug`, `class`, `default_image`, `created_at`, `updated_at`) VALUES
(3, 'Women Fashion', 0, 13, 'category/women-clothing-fashions', NULL, NULL, '2021-09-16 07:55:38', '2021-10-11 14:55:42'),
(4, 'Men Fashion', 0, 1, 'category/men-clothing-fashion', NULL, NULL, '2021-09-16 07:56:12', '2021-10-11 14:57:07'),
(5, 'Beauty Products', 0, 16, 'category/beauty-products', NULL, NULL, '2021-09-16 07:56:45', '2021-10-11 14:58:09'),
(6, 'Home Decor', 0, 21, 'category/home-decor', NULL, NULL, '2021-09-16 07:57:05', '2021-10-11 14:59:03'),
(7, 'Kids', 0, 14, 'category/kids-toys', NULL, NULL, '2021-09-16 07:57:23', '2021-10-11 14:59:46'),
(8, 'Gadget & Electronics', 0, 11, 'category/gadget-electronics', NULL, NULL, '2021-10-11 15:00:51', '2021-10-11 15:00:51'),
(9, 'Purse & Jewelry', 0, 22, 'category/purse-jewelry', NULL, NULL, '2021-10-11 15:01:43', '2021-10-11 15:01:43');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_27_174854_create_categories_table', 1),
(5, '2021_01_30_135149_create_brands_table', 1),
(6, '2021_01_30_135225_create_sizes_table', 1),
(7, '2021_01_30_135246_create_colors_table', 1),
(8, '2021_01_30_164909_create_products_table', 1),
(9, '2021_01_30_170012_create_product_sizes_table', 1),
(10, '2021_01_30_170038_create_product_colors_table', 1),
(11, '2021_02_07_182407_create_subcategories_table', 1),
(12, '2021_02_07_185430_create_coupons_table', 1),
(13, '2021_02_07_185816_create_newslaters_table', 1),
(14, '2021_02_16_174948_create_divisions_table', 1),
(15, '2021_02_16_175010_create_districts_table', 1),
(16, '2021_02_27_173313_create_blogs_table', 1),
(17, '2021_02_27_174254_create_blog_categories_table', 1),
(18, '2021_03_03_144125_create_wishlists_table', 1),
(19, '2021_03_06_092435_create_orders_table', 1),
(20, '2021_03_06_092501_create_order_details_table', 1),
(21, '2021_03_06_092705_create_shippings_table', 1),
(22, '2021_07_07_010800_create_menus_table', 2),
(23, '2021_09_11_134815_create_carts_table', 3),
(24, '2021_09_15_121656_create_product_help_table', 4),
(25, '2021_09_15_124358_create_offline_chat_table', 5),
(26, '2021_09_15_130309_create_offline_chat_table', 6),
(27, '2021_09_15_163827_create_address_table', 7),
(28, '2021_09_15_172435_create_order_payment_table', 8),
(29, '2021_10_09_142212_create_product_gallery_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `newslaters`
--

CREATE TABLE `newslaters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newslaters`
--

INSERT INTO `newslaters` (`id`, `email`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'anas@gmail.com', 1, '2021-09-27 07:52:45', '2021-09-27 07:52:45'),
(2, 'anas@gmail.com', 1, '2021-09-27 07:57:08', '2021-09-27 07:57:08'),
(3, 'anas1@gmail.com', 1, '2021-09-27 07:57:21', '2021-09-27 07:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `title`, `description`, `reference`, `link`, `status`, `created_at`, `updated_at`) VALUES
(74, 1, 'Order Status Updated!', NULL, '5', NULL, 0, '2021-11-13 12:16:59', '2021-11-13 12:16:59'),
(75, 1, 'Order Status Updated!', NULL, '5', NULL, 1, '2021-11-13 12:45:18', '2021-11-13 13:38:59'),
(76, 1, 'Status of order no - 5 has been updated!', NULL, '5', NULL, 0, '2021-11-13 12:54:43', '2021-11-13 13:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `offline_chat`
--

CREATE TABLE `offline_chat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `questions` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offline_chat`
--

INSERT INTO `offline_chat` (`id`, `name`, `email`, `mobile`, `questions`, `created_at`, `updated_at`) VALUES
(1, 'Md Anisur Rahaman', 'anasbinsabiet@gmail.com', '+8801793478194', 'dgvfdfh', '2021-09-15 07:09:04', '2021-09-15 07:09:04'),
(2, 'Md Anisur Rahaman', 'anasbinsabiet@gmail.com', '+8801793478194', 'fgvth', '2021-09-19 07:20:02', '2021-09-19 07:20:02'),
(3, 'Md Anisur Rahaman', 'anasbinsabiet@gmail.com', '+8801793478194', 'dgvfdfh', '2021-09-19 07:21:11', '2021-09-19 07:21:11'),
(4, 'Md Anisur Rahaman', 'anasbinsabiet@gmail.com', '+8801793478194', 'dgvfdfh', '2021-09-26 11:14:00', '2021-09-26 11:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_total` double DEFAULT NULL,
  `quantity_total` double DEFAULT NULL,
  `order_total_selling` double DEFAULT NULL,
  `peferred_courier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_charge_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_charge_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_amount` double DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `mobile`, `address`, `email`, `division`, `district`, `order_note`, `order_total`, `quantity_total`, `order_total_selling`, `peferred_courier`, `shipping_charge`, `delivery_charge_status`, `order_charge_status`, `paid_amount`, `total`, `status`, `created_at`, `updated_at`) VALUES
(5, '1', 'Md Anisur Rahaman', '+8801793478194', 'Tejkunipara', 'anasbinsabiet@gmail.com', NULL, 'Meherpur', 'kk', 1620, 4, 4800, NULL, '200', 'Due', 'Due', NULL, NULL, '2', '2021-11-08 10:34:27', '2021-11-13 12:54:43'),
(6, '1', 'Md Anisur Rahaman', '+8801793478194', 'Tejkunipara', 'anasbinsabiet@gmail.com', NULL, 'Meherpur', 'kk', 1800, 2, 4000, NULL, '200', 'Due', 'Due', NULL, NULL, '0', '2021-11-08 11:21:36', '2021-11-08 11:21:36'),
(7, '1', 'Md Anisur Rahaman', '+8801793478194', 'Tejkunipara', 'anasbinsabiet@gmail.com', NULL, 'Meherpur', 'kk', 9225, 13, 22000, NULL, '200', 'Due', 'Due', NULL, NULL, '0', '2021-11-08 13:07:32', '2021-11-08 13:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `selling_price` double DEFAULT NULL,
  `total_items` double DEFAULT NULL,
  `grand_total` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `size`, `quantity`, `selling_price`, `total_items`, `grand_total`, `created_at`, `updated_at`) VALUES
(1, '1', '13', '42', 5, 1190, NULL, 2025, '2021-11-02 10:17:29', '2021-11-02 10:17:29'),
(2, '2', '13', '42', 9, 1200, NULL, 3645, '2021-11-02 10:26:08', '2021-11-02 10:26:08'),
(3, '2', '18', '44', 13, 2000, NULL, 15345, '2021-11-02 10:26:08', '2021-11-02 10:26:08'),
(4, '3', '13', '46', 4, 1200, NULL, 1620, '2021-11-02 10:48:07', '2021-11-02 10:48:07'),
(5, '3', '18', '45', 4, 2000, NULL, 5220, '2021-11-02 10:48:07', '2021-11-02 10:48:07'),
(6, '4', '18', '46', 4, 2000, NULL, 3600, '2021-11-02 11:17:34', '2021-11-02 11:17:34'),
(7, '5', '13', '46', 4, 1200, NULL, 1620, '2021-11-08 10:34:27', '2021-11-08 10:34:27'),
(8, '6', '18', '40', 2, 2000, NULL, 1800, '2021-11-08 11:21:36', '2021-11-08 11:21:36'),
(9, '7', '13', '46', 5, 1200, NULL, 2025, '2021-11-08 13:07:32', '2021-11-08 13:07:32'),
(10, '7', '18', '40', 8, 2000, NULL, 9225, '2021-11-08 13:07:32', '2021-11-08 13:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `order_payment`
--

CREATE TABLE `order_payment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packaging_options`
--

CREATE TABLE `packaging_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `packaging_option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packaging_options`
--

INSERT INTO `packaging_options` (`id`, `packaging_option`, `created_at`, `updated_at`) VALUES
(11, 'Folding & Polybag', '2021-09-08 09:59:24', '2021-09-08 09:59:24');

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
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `payment_method`, `created_at`, `updated_at`) VALUES
(12, 'Cash On Delivery', '2021-09-16 06:41:56', '2021-09-16 06:41:56'),
(13, 'Bkash', '2021-09-16 06:42:07', '2021-09-16 06:42:07'),
(14, 'Rocket', '2021-09-16 06:42:21', '2021-09-16 06:42:21'),
(15, 'Nagad', '2021-09-16 06:42:34', '2021-09-16 06:42:34'),
(16, 'Credit Card', '2021-09-16 06:44:12', '2021-09-16 06:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `says` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `name`, `mobile`, `email`, `file`, `says`, `created_at`, `updated_at`) VALUES
(1, 'Anas', '01793478194', 'anasbinsabiet@gmail.com', NULL, 'sdghjk', '2021-07-09 00:14:55', '2021-07-09 00:14:55'),
(2, 'Anas', '01793478194', 'anasbinsabiet@gmail.com', '/uploaded/product/1625790453_60e797f50aed4.png', 'sdfghjk', '2021-07-09 00:27:33', '2021-07-09 00:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `production_times`
--

CREATE TABLE `production_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `production_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `production_times`
--

INSERT INTO `production_times` (`id`, `production_time`, `created_at`, `updated_at`) VALUES
(8, '24 Hours', '2021-08-25 05:22:59', '2021-08-25 05:31:21'),
(9, '48 Hours', '2021-08-25 05:52:10', '2021-08-25 05:52:10'),
(10, '5 days or less', '2021-08-25 05:52:35', '2021-08-25 05:52:35'),
(11, '7 days or less', '2021-08-25 05:52:47', '2021-08-25 05:52:47'),
(12, '10 days or less', '2021-08-25 05:52:59', '2021-08-25 05:52:59'),
(13, '16 days or less', '2021-08-25 05:53:12', '2021-08-25 05:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `generic_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` int(255) DEFAULT NULL,
  `sminprice` int(255) DEFAULT NULL,
  `smaxprice` int(255) DEFAULT NULL,
  `discount_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `production_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imprint_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fit_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fabric_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sleeve_length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_quantity` int(255) DEFAULT NULL,
  `imprint_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imprint_area_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setup_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimated_ship_date` date DEFAULT NULL,
  `main_slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_deal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `best_rated` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mid_slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_new` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trend_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1 = active, 2 = inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `generic_id`, `product_name`, `product_slug`, `product_code`, `product_quantity`, `selling_price`, `sminprice`, `smaxprice`, `discount_type`, `discount`, `discount_price`, `price_active`, `video_link`, `short_description`, `product_description`, `production_time`, `imprint_method`, `color_id`, `fit_id`, `style_id`, `fabric_id`, `sleeve_length`, `minimum_quantity`, `imprint_area`, `imprint_area_2`, `slogan`, `setup_fee`, `estimated_ship_date`, `main_slider`, `hot_deal`, `best_rated`, `mid_slider`, `hot_new`, `trend_product`, `default_image`, `sub_image_one`, `sub_image_two`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 19, NULL, 'UltraClub Men\'s Cool & Dry Sport Performance T-Shirt', 'ultraclub-mens-cool-dry-sport-performance-t-shirt', '2022', NULL, 685, NULL, NULL, NULL, '0', '0', '1', NULL, NULL, '<p>Your logo embroidered up to 8 colors and 8,000 stitches<br>6.5 oz., 52% combed and ring spun cotton, 48% polyester fleece<br>32 singles<br>Side pockets<br>White cord drawstring<br>Cuffed bottom<br>Side seamed<br>Tear away label<br>Additional thread colors available upon request<br></p>', '8', '8', '14', '8', '8', '9', '8', 24, '14\" H x 12\" W', NULL, NULL, '200', NULL, NULL, NULL, NULL, NULL, NULL, '1', '/uploaded/product/1630150497_612a1f610b7e7.jpg', NULL, NULL, '1', NULL, '2021-08-28 11:34:57', '2021-08-31 07:31:27'),
(2, 1, NULL, 18, NULL, 'Team 365® Men\'s Zone Performance T-Shirt', 'team-365-mens-zone-performance-t-shirt', '2023', NULL, 900, NULL, NULL, NULL, '0', '0', '1', NULL, NULL, NULL, '9', NULL, '14', '8', '13', '9', '9', 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '/uploaded/product/1630151574_612a239651ca7.jpg', NULL, NULL, '1', NULL, '2021-08-28 11:52:54', '2021-08-28 11:52:54'),
(3, 1, NULL, 15, NULL, 'Port & Company® Ladies Tie-Dye V-Neck Tee', 'port-company-ladies-tie-dye-v-neck-tee', '2024', NULL, 500, NULL, NULL, NULL, '0', '0', '1', NULL, NULL, NULL, '9', '8', '16', '11', '12', '10', '9', 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '/uploaded/product/1630152531_612a2753836e0.jpg', NULL, NULL, '1', NULL, '2021-08-28 12:08:51', '2021-08-28 12:43:25'),
(4, 1, NULL, 15, NULL, 'Port & Company® Long Sleeve Performance Blend Tee (Color)', 'port-company-long-sleeve-performance-blend-tee-color', '2025', NULL, 450, NULL, NULL, NULL, '0', '0', '1', NULL, NULL, NULL, '9', '9', '16', '12', '12', '9', '9', 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '/uploaded/product/1630152613_612a27a552faa.jpg', NULL, NULL, '1', NULL, '2021-08-28 12:10:13', '2021-08-28 12:38:48'),
(5, 1, NULL, 17, NULL, 'Sport-Tek® Dri Mesh Polo', 'sport-tek-dri-mesh-polo', '2026', NULL, 1200, NULL, NULL, NULL, '0', '0', '1', NULL, '<p>Stylish sweatpants with an elastic waistband and side pockets!&nbsp;<br></p>', '<p>Your logo embroidered up to 8 colors and 8,000 stitches!<br>3.8-ounce, 100% polyester double knit mesh<br>Double-needle arm seams, shoulders and hem<br>Taped neck<br>Flat knit collar<br>3-button placket<br>Open hem sleeves<br>Side vents<br>Double poly mesh construction wicks moisture better for superior breathability and comfort<br>Adult unisex sizes: XS-4XL. Add charge for 2XL-4XL<br>Additional thread colors available upon request<br></p>', '12', '8', '25', '8', '13', '9', '8', 24, '2.5\" H x 3.5\" W', '2\" H x 3\" W', 'Custom Sport-Tek Dri Mesh Unisex Sport Shirt to magnify your brand', '200', NULL, NULL, NULL, NULL, NULL, NULL, '1', '/uploaded/product/1630400764_612df0fc389fc.jpg', '/uploaded/product/1630400764_612df0fc3950c.jpg', '/uploaded/product/1630400764_612df0fc399a6.jpg', '1', NULL, '2021-08-31 08:07:30', '2021-08-31 09:06:04'),
(6, 1, NULL, 1, NULL, 'P1 test', 'p1-test', '2027', NULL, 500, NULL, NULL, NULL, '0', '0', '1', NULL, NULL, NULL, NULL, NULL, '14', '10', '12', '11', NULL, 24, '2.5\" H x 3.5\" W', '2\" H x 3\" W', 'Custom Sport-Tek Dri Mesh Unisex Sport Shirt to magnify your brand', '200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2021-08-31 13:33:43', '2021-08-31 13:33:43'),
(7, 2, NULL, 14, NULL, 'Medge Gentry', 'medge-gentry', '2028', '685', 579, NULL, NULL, '1', '70', '509', '2', 'Yvette Goodman', NULL, NULL, '9', NULL, '18', '11', '9', '9', '9', 78, 'Lani White', 'Mohammad Manning', 'Priscilla Pickett', 'Yen Tate', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2021-09-01 09:58:18', '2021-09-01 09:58:18'),
(8, 2, NULL, 14, NULL, 'Medge Gentry1', 'medge-gentry1', '2029', '685', 579, NULL, NULL, NULL, '0', '0', '1', 'Yvette Goodman', NULL, NULL, NULL, NULL, '18', '11', '9', '9', NULL, 78, 'Lani White', 'Mohammad Manning', 'Priscilla Pickett', 'Yen Tate', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2021-09-01 09:59:16', '2021-09-01 09:59:16'),
(9, 1, NULL, 20, NULL, 'Hu Richard', 'hu-richard', '2030', '941', 86, NULL, NULL, '2', '40', '51.6', '2', 'Madaline Porter', NULL, NULL, '8', NULL, NULL, '11', '10', '9', '10', 896, 'Chancellor Benjamin', 'Moses Rose', 'Gareth Sanford', 'Brynne Livingston', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2021-09-02 06:18:03', '2021-09-07 12:21:22'),
(10, 1, NULL, 1, NULL, 'red one', 'red-one', '2031', NULL, 400, NULL, NULL, NULL, '0', '0', '1', NULL, NULL, NULL, '8', NULL, NULL, '9', '11', '11', '9', 24, 'Gloria Sweeney', 'Ivana Mcguire', NULL, '200', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', '2021-09-04 12:46:29', '2021-09-02 07:12:45', '2021-09-04 12:46:29'),
(11, 13, NULL, 3, NULL, 'Marsden Chaney 1', 'marsden-chaney-1', '2032', '92', 102, NULL, NULL, NULL, '28', '0', NULL, NULL, NULL, NULL, '9', NULL, NULL, '11', '9', '11', '9', 523, 'Hedy Turner', 'Elijah Snider', 'Hadley Mendez', 'Amal Carroll', NULL, NULL, '1', NULL, NULL, NULL, NULL, '/uploaded/product/1630752968_613350c821655.jpg', NULL, NULL, '1', NULL, '2021-09-04 10:20:08', '2021-10-02 05:26:09'),
(12, 8, NULL, 12, NULL, 'Gildan Softstyle® T-Shirt', 'gildan-softstyle-t-shirt', '2033', '90', 700, NULL, NULL, NULL, '20', '560', '1', NULL, '<p>Features tearaway label!&nbsp;<br></p>', '<p>4.5-ounce, 100% ring spun cotton<br>90/10 cotton/poly (Antique Cherry Red, Antique Heliconia, Antique Sapphire, and Sport Grey)<br>35/65 cotton/poly (Dark Heather, Heather Irish Green, Heather Military Green, Heather Navy, Heather Orange, Heather Purple, and Heather Royal)<br>Seamless double-needle 3/4\" neck<br>Taped neck and shoulders<br>Tearaway label<br>Rolled forward shoulders for better fit<br>Double-needle sleeves and hem<br>Your logo screened on left chest, center front or backside<br>Product sizes: S-3XL; add charge for 2XL &amp; 3XL<br></p>', '8', '8', NULL, '8', '13', '9', '9', 31, '2.5\" H x 3.5\" W', '2\" H x 3\" W', 'Imprinted Gildan Softstyle T-Shirts ensure the best value for your marketing dollars', '200', '2021-09-30', NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, '2021-09-05 13:11:07', '2021-09-26 10:32:06'),
(13, 23, NULL, NULL, NULL, 'Heavy Embroidery Work Single koti KOT022', 'heavy-embroidery-work-single-koti-kot022', '2034', '10', 450, 1100, 1200, NULL, '10', '405', NULL, NULL, NULL, '<p>হেভি এমব্রয়ডারি ওয়ার্ক এর কটি  (১ পিচ)<br><br>ফেব্রিক ঃ লিলেন<br><br>ডিজাইন ঃ  স্ক্রিন প্রিন্ট<br><br>কটি লং ঃ ৪৪\" <br><br>কটি ঘের ঃ ৫৭\"<br><br>সাইজ ঃ ৩৮,৪২,৪৬&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2021-10-04 11:29:05', '2021-10-10 13:31:34'),
(14, 47, NULL, NULL, NULL, 'Half Silk Saree', 'half-silk-saree', '2035', NULL, 1150, NULL, NULL, NULL, '10', '0', NULL, NULL, NULL, '<p>Product Title: Half Silk Saree<br><br>Description:<br><br>Saree: Half silk (12/13 hat)<br><br>Saree Fabric: Half Silk<br><br>Design: Screen Print<br><br>Color: Same As Picture<br></p>', NULL, NULL, NULL, NULL, NULL, '9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2021-10-04 12:22:49', '2021-10-11 09:40:02'),
(15, 15, NULL, NULL, NULL, 't1', 't1', '2036', NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2021-10-09 11:41:51', '2021-10-09 11:41:51'),
(16, 15, NULL, NULL, NULL, 'rrrtyu', 'rrrtyu', '2037', NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2021-10-09 11:43:22', '2021-10-09 11:43:22'),
(17, 24, NULL, NULL, NULL, 'tyui', 'tyui', '2038', NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2021-10-09 12:22:53', '2021-10-10 11:15:49'),
(18, 47, NULL, NULL, NULL, 'Half Silk Saree SAR698', 'half-silk-saree-sar698', '2039', '100', 1000, 1500, 2000, NULL, '10', '900', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2021-10-12 05:50:35', '2021-10-12 08:47:28'),
(19, 29, NULL, 14, NULL, 'Xaviera Patrick', 'xaviera-patrick', '2040', NULL, 500, 900, 1200, NULL, '6', '470', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2021-11-04 05:44:41', '2021-11-04 05:44:41'),
(20, 47, NULL, 13, NULL, 'Gary Jennings', 'gary-jennings', '2041', NULL, 500, 422, 146, NULL, '5', '475', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, '2021-11-04 05:54:55', '2021-11-04 05:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(328, 16, 14, '2021-10-09 12:07:01', '2021-10-09 12:07:01'),
(329, 16, 16, '2021-10-09 12:07:01', '2021-10-09 12:07:01'),
(332, 17, 14, '2021-10-10 11:15:49', '2021-10-10 11:15:49'),
(333, 17, 15, '2021-10-10 11:15:49', '2021-10-10 11:15:49'),
(334, 19, 14, '2021-11-04 05:44:41', '2021-11-04 05:44:41'),
(335, 19, 16, '2021-11-04 05:44:41', '2021-11-04 05:44:41'),
(336, 19, 17, '2021-11-04 05:44:41', '2021-11-04 05:44:41'),
(337, 19, 28, '2021-11-04 05:44:41', '2021-11-04 05:44:41'),
(338, 19, 32, '2021-11-04 05:44:41', '2021-11-04 05:44:41'),
(339, 19, 37, '2021-11-04 05:44:41', '2021-11-04 05:44:41'),
(344, 20, 14, '2021-11-04 12:05:34', '2021-11-04 12:05:34'),
(345, 20, 15, '2021-11-04 12:05:34', '2021-11-04 12:05:34'),
(346, 20, 22, '2021-11-04 12:05:34', '2021-11-04 12:05:34'),
(347, 20, 26, '2021-11-04 12:05:34', '2021-11-04 12:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_help`
--

CREATE TABLE `product_help` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `questions` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_help`
--

INSERT INTO `product_help` (`id`, `product_id`, `email`, `mobile`, `questions`, `created_at`, `updated_at`) VALUES
(1, 12, 'anasbinsabiet@gmail.com', '+8801793478194', 'fbhgfyj', '2021-09-15 06:58:44', '2021-09-15 06:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `size_id`, `quantity`, `created_at`, `updated_at`) VALUES
(35, 22, 4, NULL, '2021-07-09 15:28:34', '2021-07-09 15:28:34'),
(36, 23, 4, NULL, '2021-07-09 15:29:58', '2021-07-09 15:29:58'),
(37, 24, 4, NULL, '2021-07-09 15:31:45', '2021-07-09 15:31:45'),
(39, 27, 4, NULL, '2021-07-09 15:37:32', '2021-07-09 15:37:32'),
(41, 2, 2, NULL, '2021-07-09 15:41:34', '2021-07-09 15:41:34'),
(70, 30, 4, NULL, '2021-08-26 10:05:27', '2021-08-26 10:05:27'),
(76, 25, 5, NULL, '2021-08-26 13:45:52', '2021-08-26 13:45:52'),
(82, 29, 4, NULL, '2021-08-28 07:18:36', '2021-08-28 07:18:36'),
(84, 28, 4, NULL, '2021-08-28 08:15:22', '2021-08-28 08:15:22'),
(86, 2, 1, NULL, '2021-08-28 11:52:54', '2021-08-28 11:52:54'),
(89, 4, 1, NULL, '2021-08-28 12:38:48', '2021-08-28 12:38:48'),
(90, 3, 1, NULL, '2021-08-28 12:43:25', '2021-08-28 12:43:25'),
(91, 3, 5, NULL, '2021-08-28 12:43:25', '2021-08-28 12:43:25'),
(96, 1, 1, NULL, '2021-08-31 07:31:27', '2021-08-31 07:31:27'),
(101, 6, 4, NULL, '2021-08-31 13:33:43', '2021-08-31 13:33:43'),
(102, 7, 1, NULL, '2021-09-01 09:58:18', '2021-09-01 09:58:18'),
(103, 7, 2, NULL, '2021-09-01 09:58:18', '2021-09-01 09:58:18'),
(104, 7, 3, NULL, '2021-09-01 09:58:18', '2021-09-01 09:58:18'),
(105, 7, 4, NULL, '2021-09-01 09:58:18', '2021-09-01 09:58:18'),
(106, 8, 1, NULL, '2021-09-01 09:59:16', '2021-09-01 09:59:16'),
(107, 8, 2, NULL, '2021-09-01 09:59:16', '2021-09-01 09:59:16'),
(108, 8, 3, NULL, '2021-09-01 09:59:16', '2021-09-01 09:59:16'),
(109, 8, 4, NULL, '2021-09-01 09:59:16', '2021-09-01 09:59:16'),
(114, 5, 2, NULL, '2021-09-02 12:41:39', '2021-09-02 12:41:39'),
(115, 10, 1, NULL, '2021-09-04 10:01:43', '2021-09-04 10:01:43'),
(305, 9, 4, NULL, '2021-09-07 12:28:00', '2021-09-07 12:28:00'),
(306, 9, 5, NULL, '2021-09-07 12:28:00', '2021-09-07 12:28:00'),
(316, 12, 1, NULL, '2021-09-26 10:32:06', '2021-09-26 10:32:06'),
(317, 11, 1, NULL, '2021-10-02 05:26:09', '2021-10-02 05:26:09'),
(318, 11, 2, NULL, '2021-10-02 05:26:09', '2021-10-02 05:26:09'),
(319, 11, 5, NULL, '2021-10-02 05:26:09', '2021-10-02 05:26:09'),
(329, 16, 1, NULL, '2021-10-09 12:07:01', '2021-10-09 12:07:01'),
(330, 16, 2, NULL, '2021-10-09 12:07:01', '2021-10-09 12:07:01'),
(346, 13, 10, 50, '2021-10-10 13:31:34', '2021-10-10 13:31:34'),
(347, 13, 14, 60, '2021-10-10 13:31:34', '2021-10-10 13:31:34'),
(348, 13, 18, 70, '2021-10-10 13:31:34', '2021-10-10 13:31:34'),
(367, 19, 3, NULL, '2021-11-04 05:44:41', '2021-11-04 05:44:41'),
(375, 20, 5, 700, '2021-11-04 12:05:34', '2021-11-04 12:05:34'),
(376, 20, 7, 800, '2021-11-04 12:05:34', '2021-11-04 12:05:34'),
(377, 20, 12, 900, '2021-11-04 12:05:34', '2021-11-04 12:05:34'),
(381, 18, 1, 200, '2021-11-04 12:08:15', '2021-11-04 12:08:15'),
(382, 18, 12, 50, '2021-11-04 12:08:15', '2021-11-04 12:08:15'),
(383, 18, 19, 100, '2021-11-04 12:08:15', '2021-11-04 12:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `product_id`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-06-28 04:50:00', '2021-06-28 04:50:00'),
(41, 8, 7, '2021-07-09 14:43:11', '2021-07-09 14:43:11'),
(42, 10, 7, '2021-07-09 14:55:37', '2021-07-09 14:55:37'),
(43, 9, 7, '2021-07-09 14:56:10', '2021-07-09 14:56:10'),
(44, 11, 7, '2021-07-09 14:58:55', '2021-07-09 14:58:55'),
(45, 12, 7, '2021-07-09 15:00:06', '2021-07-09 15:00:06'),
(46, 13, 7, '2021-07-09 15:01:15', '2021-07-09 15:01:15'),
(47, 14, 7, '2021-07-09 15:02:47', '2021-07-09 15:02:47'),
(48, 15, 4, '2021-07-09 15:05:31', '2021-07-09 15:05:31'),
(49, 16, 8, '2021-07-09 15:08:11', '2021-07-09 15:08:11'),
(50, 17, 2, '2021-07-09 15:13:25', '2021-07-09 15:13:25'),
(51, 18, 2, '2021-07-09 15:17:21', '2021-07-09 15:17:21'),
(52, 19, 1, '2021-07-09 15:19:33', '2021-07-09 15:19:33'),
(54, 20, 2, '2021-07-09 15:22:08', '2021-07-09 15:22:08'),
(55, 21, 1, '2021-07-09 15:24:30', '2021-07-09 15:24:30'),
(56, 22, 9, '2021-07-09 15:28:34', '2021-07-09 15:28:34'),
(57, 23, 9, '2021-07-09 15:29:58', '2021-07-09 15:29:58'),
(58, 24, 9, '2021-07-09 15:31:45', '2021-07-09 15:31:45'),
(60, 26, 9, '2021-07-09 15:35:55', '2021-07-09 15:35:55'),
(61, 27, 9, '2021-07-09 15:37:32', '2021-07-09 15:37:32'),
(63, 2, 4, '2021-07-09 15:41:34', '2021-07-09 15:41:34'),
(64, 3, 1, '2021-07-09 15:41:57', '2021-07-09 15:41:57'),
(65, 4, 1, '2021-07-09 15:42:20', '2021-07-09 15:42:20'),
(66, 5, 6, '2021-07-09 15:42:55', '2021-07-09 15:42:55'),
(67, 6, 6, '2021-07-09 15:43:23', '2021-07-09 15:43:23'),
(68, 7, 3, '2021-07-09 15:43:43', '2021-07-09 15:43:43'),
(72, 25, 9, '2021-08-24 09:09:38', '2021-08-24 09:09:38'),
(73, 29, 2, '2021-08-25 09:08:11', '2021-08-25 09:08:11'),
(74, 28, 9, '2021-08-26 05:06:07', '2021-08-26 05:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `setting_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_right_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_banner1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_banner2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_hour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_social_link1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_social_link2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_social_link3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_to_order` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting_name`, `setting_logo`, `header_title`, `header_phone1`, `slider1`, `slider2`, `slider3`, `header_right_image`, `home_banner1`, `home_banner2`, `email`, `working_hour`, `footer_social_link1`, `footer_social_link2`, `footer_social_link3`, `footer_copyright`, `how_to_order`, `policy`, `about_us`, `created_at`, `updated_at`) VALUES
(4, 'Ur Fashion', '/uploaded/setting/1635594551_617d3137eda33.png', NULL, '+880-1810-098515', '/uploaded/setting/1635927792_618246f0ccd1c.jpg', '/uploaded/setting/1635927792_618246f0cde7a.png', '/uploaded/setting/1635927792_618246f0ce308.png', '/uploaded/setting/1632036287_6146e5bf3ee6d.png', '/uploaded/setting/1632137860_61487284c3c0d.png', '/uploaded/setting/1632137860_61487284c45b4.png', 'info@urfashionbd.com', '35/A Purana Palton Line (V I P Road, Opposite of Ananda Bhoban- near City Bank), 1000 Dhaka, Dhaka Division, Bangladesh', '#', '#', '#', 'Copyright © 2021 UR Fashion. All Rights Reserved. Developed by <a href=\"https://biplobdigital.com\" target=\"_blank\">Biplob Digital</a>', NULL, NULL, NULL, '2021-07-09 01:12:50', '2021-11-09 08:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_methods`
--

CREATE TABLE `shipping_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity_from` int(11) DEFAULT NULL,
  `quantity_to` int(11) DEFAULT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_charge` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_methods`
--

INSERT INTO `shipping_methods` (`id`, `quantity_from`, `quantity_to`, `district_name`, `delivery_charge`, `created_at`, `updated_at`) VALUES
(17, 1, 3, 'Dhaka', 60, '2021-10-31 10:13:07', '2021-10-31 11:10:37'),
(18, 4, 10, 'Dhaka', 100, '2021-10-31 11:12:25', '2021-10-31 11:12:25'),
(19, 11, 30, 'Dhaka', 200, '2021-10-31 11:12:53', '2021-10-31 11:12:53'),
(20, 31, 100, 'Dhaka', 300, '2021-10-31 11:13:57', '2021-10-31 11:13:57'),
(21, 101, 500, 'Dhaka', 500, '2021-10-31 11:14:13', '2021-10-31 11:14:13'),
(22, 1, 3, 'Out_of_Dhaka', 120, '2021-10-31 11:22:12', '2021-10-31 11:22:12'),
(23, 4, 10, 'Out_of_Dhaka', 200, '2021-10-31 11:22:32', '2021-10-31 11:22:32'),
(24, 11, 30, 'Out_of_Dhaka', 300, '2021-10-31 11:23:00', '2021-10-31 11:23:00'),
(25, 31, 100, 'Out_of_Dhaka', 500, '2021-10-31 11:23:21', '2021-10-31 11:23:21'),
(26, 101, 500, 'Out_of_Dhaka', 800, '2021-10-31 11:24:00', '2021-10-31 11:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `created_at`, `updated_at`) VALUES
(1, '34', '2021-06-28 04:49:03', '2021-10-10 09:27:27'),
(2, '33', '2021-07-08 20:43:51', '2021-10-10 09:27:14'),
(3, '32', '2021-07-09 15:21:36', '2021-10-10 09:27:05'),
(4, '31', '2021-07-09 15:26:29', '2021-10-10 09:26:55'),
(5, '30', '2021-07-09 15:32:29', '2021-10-10 09:26:38'),
(7, '35', '2021-10-10 09:27:36', '2021-10-10 09:27:36'),
(8, '36', '2021-10-10 09:27:53', '2021-10-10 09:27:53'),
(9, '37', '2021-10-10 09:28:05', '2021-10-10 09:28:05'),
(10, '38', '2021-10-10 09:28:12', '2021-10-10 09:28:12'),
(11, '39', '2021-10-10 09:28:19', '2021-10-10 09:28:19'),
(12, '40', '2021-10-10 09:28:27', '2021-10-10 09:28:27'),
(13, '41', '2021-10-10 09:28:33', '2021-10-10 09:28:33'),
(14, '42', '2021-10-10 09:28:40', '2021-10-10 09:28:40'),
(15, '43', '2021-10-10 09:28:47', '2021-10-10 09:28:47'),
(16, '44', '2021-10-10 09:28:53', '2021-10-10 09:28:53'),
(17, '45', '2021-10-10 09:28:59', '2021-10-10 09:28:59'),
(18, '46', '2021-10-10 09:29:06', '2021-10-10 09:29:06'),
(19, 'M', '2021-10-30 06:42:48', '2021-10-30 06:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `sleeve_lengths`
--

CREATE TABLE `sleeve_lengths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sleeve_length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sleeve_lengths`
--

INSERT INTO `sleeve_lengths` (`id`, `sleeve_length`, `created_at`, `updated_at`) VALUES
(8, 'Long Sleeve', '2021-08-26 07:27:13', '2021-08-26 07:28:05'),
(9, 'Short Sleeve', '2021-08-26 07:28:19', '2021-08-26 07:28:19'),
(10, '3/4', '2021-08-26 07:28:42', '2021-08-26 07:28:42');

-- --------------------------------------------------------

--
-- Table structure for table `styles`
--

CREATE TABLE `styles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `style_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `styles`
--

INSERT INTO `styles` (`id`, `style_name`, `created_at`, `updated_at`) VALUES
(8, 'Chest Pocket', '2021-08-26 06:26:46', '2021-08-26 06:29:00'),
(9, 'Safety', '2021-08-26 06:27:21', '2021-08-26 06:37:16'),
(10, 'Tank Top', '2021-08-26 06:27:28', '2021-08-26 06:38:16'),
(11, 'V-Neck', '2021-08-26 06:27:36', '2021-08-26 06:39:48'),
(12, 'Scoop Neck', '2021-08-26 06:39:58', '2021-08-26 06:39:58'),
(13, 'Performance', '2021-08-26 06:40:07', '2021-08-26 06:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tshirt', 'tshirt', '2021-06-28 04:39:25', '2021-06-28 04:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Accessories', '2021-06-28 04:48:43', '2021-07-08 20:37:50'),
(2, 'Surgical', '2021-07-08 20:06:55', '2021-07-08 20:06:55'),
(3, 'Lotion', '2021-07-08 20:20:31', '2021-07-08 23:08:15'),
(4, 'Liquide', '2021-07-08 22:05:35', '2021-07-08 22:05:35'),
(6, 'Others', '2021-07-08 22:26:08', '2021-07-08 22:26:08'),
(7, 'Cream', '2021-07-09 14:41:08', '2021-07-09 14:41:08'),
(8, 'Sanitary Pad', '2021-07-09 15:06:45', '2021-07-09 15:06:45'),
(9, 'Capsule', '2021-07-09 15:25:51', '2021-07-09 15:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) DEFAULT NULL COMMENT '1 = admin, 2 = user',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_courier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charge` double DEFAULT NULL,
  `order_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bkash` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_page_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_imo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nagad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `routing_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `provider_id`, `avatar`, `email_verified_at`, `mobile`, `address`, `preferred_courier`, `shipping_charge`, `order_note`, `bkash`, `shop_name`, `city`, `district`, `image`, `password`, `facebook_page_link`, `whatsapp_imo`, `gender`, `nagad`, `bank_account_name`, `bank_account_number`, `bank_name`, `bank_branch_name`, `routing_number`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Md Anisur Rahaman', 'anasbinsabiet@gmail.com', NULL, NULL, NULL, '+8801793478194', 'Tejkunipara', 'Pathao', 200, 'kk', '01793478194', 'A Shop', 'Khulna', 'Meherpur', NULL, '$2y$10$wgmN3J0HlmarG8Ox20TVx.pOlO4t1G1oxL.DjI3DoKQZ77EG9ep2a', 'Quam deleniti offici', '01793478194', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-28 04:33:23', '2021-11-13 11:25:46'),
(35, 2, 'ss1', 'a1@gmail.com', NULL, NULL, NULL, 'hanypu@mailinator.com', 'bemisu@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$wgmN3J0HlmarG8Ox20TVx.pOlO4t1G1oxL.DjI3DoKQZ77EG9ep2a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-11-09 05:25:12', '2021-11-09 05:51:43'),
(36, 2, 'Kabir', 'kabir', NULL, NULL, NULL, '+8801793478195', 'Tejkunipara', NULL, NULL, NULL, '542235436', 'ds1', NULL, NULL, NULL, '$2y$10$xIh7mPfl1rG08h.SlA04S.ARbGRz/RaMOpiJcDDD2x6NMZn/WS/bS', 'fdgtrdh', '955675687', 'Male', '785657', 'ggt', '48456476', 'fdgbh', 'fgfdh', '35434657', NULL, 0, '2021-11-09 06:21:08', '2021-11-09 07:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(66, 1, 13, '2021-11-08 09:34:47', '2021-11-08 09:34:47'),
(67, 1, 14, '2021-11-08 13:37:04', '2021-11-08 13:37:04'),
(68, 1, 18, '2021-11-08 13:37:10', '2021-11-08 13:37:10'),
(69, 1, 20, '2021-11-09 13:27:18', '2021-11-09 13:27:18'),
(70, 1, 12, '2021-11-09 13:27:26', '2021-11-09 13:27:26'),
(71, 1, 5, '2021-11-09 13:27:30', '2021-11-09 13:27:30'),
(72, 1, 1, '2021-11-09 13:27:34', '2021-11-09 13:27:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_title_en_unique` (`title_en`),
  ADD UNIQUE KEY `blogs_slug_en_unique` (`slug_en`),
  ADD UNIQUE KEY `blogs_title_bn_unique` (`title_bn`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_category_name_en_unique` (`category_name_en`),
  ADD UNIQUE KEY `blog_categories_slug_en_unique` (`slug_en`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_types`
--
ALTER TABLE `card_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_images`
--
ALTER TABLE `color_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactpages`
--
ALTER TABLE `contactpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `divisions_division_name_unique` (`division_name`);

--
-- Indexes for table `fabrics`
--
ALTER TABLE `fabrics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fits`
--
ALTER TABLE `fits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generics`
--
ALTER TABLE `generics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `helps_title_en_unique` (`title_en`),
  ADD UNIQUE KEY `helps_slug_en_unique` (`slug_en`);

--
-- Indexes for table `help_categories`
--
ALTER TABLE `help_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `help_categories_category_name_en_unique` (`category_name_en`),
  ADD UNIQUE KEY `help_categories_slug_en_unique` (`slug_en`);

--
-- Indexes for table `help_images`
--
ALTER TABLE `help_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imprint_artwork_options`
--
ALTER TABLE `imprint_artwork_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imprint_methods`
--
ALTER TABLE `imprint_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslaters`
--
ALTER TABLE `newslaters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offline_chat`
--
ALTER TABLE `offline_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_payment`
--
ALTER TABLE `order_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packaging_options`
--
ALTER TABLE `packaging_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production_times`
--
ALTER TABLE `production_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_name_unique` (`product_name`),
  ADD UNIQUE KEY `products_product_slug_unique` (`product_slug`),
  ADD UNIQUE KEY `products_product_code_unique` (`product_code`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_help`
--
ALTER TABLE `product_help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sizes_size_unique` (`size`);

--
-- Indexes for table `sleeve_lengths`
--
ALTER TABLE `sleeve_lengths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `styles`
--
ALTER TABLE `styles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colors_color_unique` (`type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `card_types`
--
ALTER TABLE `card_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `color_images`
--
ALTER TABLE `color_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `contactpages`
--
ALTER TABLE `contactpages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fabrics`
--
ALTER TABLE `fabrics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fits`
--
ALTER TABLE `fits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `generics`
--
ALTER TABLE `generics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `helps`
--
ALTER TABLE `helps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `help_categories`
--
ALTER TABLE `help_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `help_images`
--
ALTER TABLE `help_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `imprint_artwork_options`
--
ALTER TABLE `imprint_artwork_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `imprint_methods`
--
ALTER TABLE `imprint_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `newslaters`
--
ALTER TABLE `newslaters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `offline_chat`
--
ALTER TABLE `offline_chat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_payment`
--
ALTER TABLE `order_payment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packaging_options`
--
ALTER TABLE `packaging_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `production_times`
--
ALTER TABLE `production_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_help`
--
ALTER TABLE `product_help`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=384;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sleeve_lengths`
--
ALTER TABLE `sleeve_lengths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `styles`
--
ALTER TABLE `styles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
