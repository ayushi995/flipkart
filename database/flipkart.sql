-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 09:15 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flipkart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `user_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passowrd` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`user_id`, `type`, `name`, `email`, `passowrd`, `status`, `created_date`) VALUES
(1, '', 'Ayushi Tyagi', 'tyagiayushi9953@gmail.com', 'ayushi@2002', 1, '0000-00-00 00:00:00'),
(2, '', 'gopu', 'gopu@gmail.com', '12345', 1, '0000-00-00 00:00:00'),
(3, '', 'Ayushi Tyagi', 'ayushi@gmail.com', '12345', 1, '0000-00-00 00:00:00'),
(4, '', 'ayushi tyagi', 'ayushi@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '0000-00-00 00:00:00'),
(5, '', 'ayushi tyagi', 'ayushi@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '0000-00-00 00:00:00'),
(6, '', 'Gopu', 'gopu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '0000-00-00 00:00:00'),
(7, '', 'gopu tyagi', 'tyagi@123', 'ayushi', 0, '0000-00-00 00:00:00'),
(8, '', 'gopu tyagi', 'tyagi@123', 'ayushi', 0, '0000-00-00 00:00:00'),
(9, '', 'pogo', 'pogo@123', '1195a94144ada90b59bed9eff5a6433c', 0, '0000-00-00 00:00:00'),
(10, '', 'pogo', 'pogo@123', '1195a94144ada90b59bed9eff5a6433c', 0, '0000-00-00 00:00:00'),
(11, '', 'Ayushi Tyagi', 'tyagiayushi9953@gmail.com', '0f6c4dc6434aa9466977fc49e6ca42f6', 1, '0000-00-00 00:00:00'),
(12, '', 'Ayushi ', 'tyagiayushi9953@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '0000-00-00 00:00:00'),
(13, 'admin', 'new', 'tyagiayushi9953@gmail.com', 'e0e7021062028fa4a7f568c08a81c8c6', 1, '0000-00-00 00:00:00'),
(14, 'end-user', 'Ayushi Tyagidsckmdflksfldkf', 'ayushi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '0000-00-00 00:00:00'),
(15, 'end-user', 'Ayushi Tyagi', 'ayushi@gmail.com', 'd3d9446802a44259755d38e6d163e820', 1, '0000-00-00 00:00:00'),
(16, 'admin', 'ayushi', 'ayushi@gmail.com', 'd3d9446802a44259755d38e6d163e820', 1, '0000-00-00 00:00:00'),
(17, 'end-user', 'Ayushi Tyagi', 'ayushityagi@gmail.com', 'd3d9446802a44259755d38e6d163e820', 1, '0000-00-00 00:00:00'),
(18, 'end-user', 'Ayushi Tyagi', 'ayushityagi@gmail.com', 'd3d9446802a44259755d38e6d163e820', 1, '0000-00-00 00:00:00'),
(19, 'end-user', 'Ayushi Tyagi', 'ayushi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `buynow`
--

CREATE TABLE `buynow` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_add_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `isconfirm` tinyint(1) NOT NULL,
  `status` bigint(20) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buynow`
--

INSERT INTO `buynow` (`order_id`, `user_id`, `product_add_id`, `quantity`, `price`, `total_price`, `address`, `isconfirm`, `status`, `created_date`) VALUES
(1, 15, 3, 2, 37, 74, 'jawahar nagar', 0, 1, '2222-04-20 00:00:00'),
(2, 15, 3, 1, 37, 37, 'Santi Nagar', 0, 1, '2222-04-20 00:00:00'),
(3, 15, 3, 6, 37, 222, 'Shiv Vihar', 0, 1, '2222-04-20 00:00:00'),
(4, 15, 3, 4, 37, 148, 'Shiv Vihar', 0, 1, '2222-04-20 00:00:00'),
(5, 17, 2, 2, 50, 100, 'Shiv Vihar', 0, 1, '2222-04-21 00:00:00'),
(6, 17, 51, 2, 16, 32, 'Jawahar Nagar', 0, 1, '2222-04-22 00:00:00'),
(7, 17, 51, 2, 16, 32, 'Jawahar Nagar', 0, 1, '2222-04-22 00:00:00'),
(8, 17, 51, 2, 16, 32, 'Shiv Vihar', 0, 1, '2222-04-22 00:00:00'),
(9, 17, 10, 1, 14, 14, 'Jawahar Nagar', 0, 1, '2222-04-22 00:00:00'),
(10, 17, 71, 2, 234324, 468648, 'Jawahar Nagar', 0, 1, '2222-04-23 00:00:00'),
(11, 17, 10, 1, 14, 14, 'Shiv Vihar', 0, 1, '2222-04-25 00:00:00'),
(12, 17, 9, 1, 7, 7, 'Shiv Vihar', 0, 1, '2222-04-25 00:00:00'),
(13, 15, 51, 1, 16, 16, 'Jawahar Nagar', 0, 1, '2222-04-25 00:00:00'),
(14, 15, 71, 2, 234324, 468648, 'Shiv Vihar', 0, 1, '2022-04-25 13:45:01'),
(15, 15, 3, 2, 37, 74, 'Shiv Vihar', 0, 1, '2022-04-26 17:05:58'),
(16, 15, 66, 2, 4, 8, 'vbd', 0, 1, '2022-04-26 17:16:31'),
(17, 15, 14, 2, 84, 168, 'Java', 0, 1, '2022-05-11 12:43:08'),
(18, 15, 14, 2, 84, 168, 'Jawahar', 0, 1, '2022-05-11 13:28:08'),
(19, 15, 14, 2, 84, 168, 'Jawahar', 0, 1, '2022-05-11 13:28:54'),
(20, 15, 14, 6, 84, 504, 'xcvcx', 0, 1, '2022-05-11 13:32:03'),
(21, 17, 30, 2, 14, 28, 'Jawahar Nagar', 0, 1, '2022-05-11 13:53:12'),
(22, 17, 30, 3, 14, 42, 'hjh', 0, 1, '2022-05-11 13:54:51'),
(23, 17, 30, 9, 14, 126, 'mm,m,', 0, 1, '2022-05-11 14:04:50'),
(24, 17, 30, 3, 14, 42, 'mmm', 0, 1, '2022-05-11 14:22:42'),
(25, 17, 30, 3, 14, 42, ' nm,', 0, 1, '2022-05-11 14:23:40'),
(26, 17, 15, 2, 74, 148, 'Santi Nagar', 0, 1, '2022-05-12 14:38:54'),
(27, 17, 15, 3, 74, 222, 'scdsdc', 0, 1, '2022-05-12 14:39:23'),
(28, 15, 53, 8, 48, 384, 'Shiv Vihar', 0, 1, '2022-05-12 15:14:39'),
(29, 15, 68, 3, 3243, 9729, 'Jawahar Nagar', 0, 1, '2022-05-12 15:20:58'),
(30, 15, 68, 5, 3243, 16215, 'mmbjn', 0, 1, '2022-05-12 15:30:08'),
(31, 15, 31, 4, 16, 64, 'dcsdc', 0, 1, '2022-05-12 15:33:09'),
(32, 15, 14, 2, 84, 168, 'sddsv', 0, 1, '2022-05-12 15:36:41'),
(33, 15, 33, 2, 14, 28, 'scdc', 0, 1, '2022-05-12 17:02:48'),
(34, 17, 71, 2, 234324, 468648, 'dfcvdv', 0, 1, '2022-05-12 17:11:43'),
(35, 17, 14, 2, 84, 168, 'sdc', 0, 1, '2022-05-12 17:12:21'),
(36, 17, 2, 3, 50, 150, 'gtgtvfv', 0, 1, '2022-05-12 17:14:18'),
(37, 17, 15, 3, 74, 222, 'ayushi', 0, 1, '2022-05-12 17:18:05'),
(38, 17, 15, 3, 74, 222, 'ayushi', 0, 1, '2022-05-12 17:18:20'),
(39, 17, 15, 3, 74, 222, 'gopu', 0, 1, '2022-05-12 17:19:20'),
(40, 17, 15, 2, 74, 148, 'sc', 0, 1, '2022-05-12 17:20:32'),
(41, 17, 15, 3, 74, 222, 'wsdasc', 0, 1, '2022-05-12 17:21:28'),
(42, 17, 15, 2, 74, 148, 'dscdc', 0, 1, '2022-05-12 17:25:42'),
(43, 17, 15, 2, 74, 148, 'SDCSDC', 0, 1, '2022-05-12 17:45:26'),
(44, 15, 68, 3, 3243, 9729, 'xzczxcxfsdcscscdscx', 0, 1, '2022-05-12 20:51:06'),
(45, 15, 68, 3, 3243, 9729, 'm,m', 0, 1, '2022-05-12 20:53:59'),
(46, 15, 68, 2, 3243, 6486, ',jnkj', 0, 1, '2022-05-12 20:56:44'),
(47, 15, 68, 2, 3243, 6486, 'jkm', 0, 1, '2022-05-12 21:23:33'),
(48, 15, 31, 3, 16, 48, 'sd', 0, 1, '2022-05-13 14:27:43'),
(49, 15, 31, 3, 16, 48, 'sefdf', 0, 1, '2022-05-13 15:21:01'),
(50, 15, 31, 3, 16, 48, 'sefdf', 0, 1, '2022-05-13 15:23:38'),
(51, 15, 31, 3, 16, 48, 'sefdf', 0, 1, '2022-05-13 15:23:45'),
(52, 15, 31, 3, 16, 48, 'sefdf', 0, 1, '2022-05-13 15:24:15'),
(53, 15, 31, 3, 16, 48, 'sefdf', 0, 1, '2022-05-13 15:25:21'),
(54, 15, 31, 3, 16, 48, 'sd', 0, 1, '2022-05-13 15:28:49'),
(55, 17, 30, 3, 14, 42, 'sdc', 0, 1, '2022-05-13 17:32:01'),
(56, 17, 30, 3, 14, 42, 'sdc', 0, 1, '2022-05-13 17:32:38'),
(57, 17, 30, 3, 14, 42, 'hkbn', 0, 1, '2022-05-13 17:34:19'),
(58, 17, 30, 3, 14, 42, 'hkbn', 0, 1, '2022-05-13 17:37:53'),
(59, 17, 30, 3, 14, 42, 'hkbn', 0, 1, '2022-05-13 17:40:06'),
(60, 17, 30, 2, 14, 28, 'dfvfv', 0, 1, '2022-05-13 17:48:22'),
(61, 17, 30, 3, 14, 42, 'dscds', 0, 1, '2022-05-13 17:53:03'),
(62, 17, 30, 2, 14, 28, 'asd', 0, 1, '2022-05-13 17:56:24'),
(63, 17, 68, 3, 3243, 9729, 'scds', 0, 1, '2022-05-14 11:47:59'),
(64, 17, 68, 2, 3243, 6486, 'dfds', 0, 1, '2022-05-14 11:48:25'),
(65, 17, 68, 3, 3243, 9729, 'df', 0, 1, '2022-05-14 11:49:10'),
(66, 17, 68, 2, 3243, 6486, 'ds', 0, 1, '2022-05-14 11:50:23'),
(67, 17, 68, 2, 3243, 6486, 'dvc', 0, 1, '2022-05-14 11:51:37'),
(68, 17, 68, 2, 3243, 6486, 'dscdc', 0, 1, '2022-05-14 11:52:44'),
(69, 17, 2, 3, 50, 150, 'Jawahar Nagar', 0, 1, '2022-05-14 12:00:53'),
(70, 17, 2, 2, 50, 100, 'Jawahar Nagar', 0, 1, '2022-05-14 12:05:20'),
(71, 17, 2, 2, 50, 100, 'jhj', 0, 1, '2022-05-14 12:06:35'),
(72, 17, 2, 3, 50, 150, 'jnb ', 0, 1, '2022-05-14 12:12:50'),
(73, 15, 52, 2, 52, 104, 'vgvg', 0, 1, '2022-05-14 17:08:49'),
(74, 15, 52, 2, 52, 104, 'fcf', 0, 1, '2022-05-14 17:10:00'),
(75, 15, 52, 3, 52, 156, 'sdcsc', 0, 1, '2022-05-14 17:12:46'),
(76, 15, 52, 2, 52, 104, 'scc', 0, 1, '2022-05-14 17:16:17'),
(77, 15, 52, 3, 52, 156, 'wefd', 0, 1, '2022-05-14 17:39:37'),
(78, 15, 52, 2, 52, 104, 'cx', 0, 1, '2022-05-14 17:42:49'),
(79, 15, 52, 3, 52, 156, 'dscd', 0, 1, '2022-05-14 17:44:07'),
(80, 15, 52, 3, 52, 156, 'sdcsc', 0, 1, '2022-05-14 17:46:25'),
(81, 15, 52, 2, 52, 104, 'cfdvds', 0, 1, '2022-05-14 17:48:09'),
(82, 15, 59, 1, 33, 33, 'sdfcd', 0, 1, '2022-05-16 17:35:39'),
(83, 15, 59, 2, 33, 66, 'sads', 0, 1, '2022-05-16 17:36:07'),
(84, 15, 59, 3, 33, 99, 'Jawahar Nagar', 0, 1, '2022-05-16 17:47:38'),
(85, 15, 5, 3, 39, 117, 'dassd', 0, 1, '2022-05-16 17:49:51'),
(86, 17, 61, 3, 2, 6, 'Shiv Vihar', 0, 1, '2022-05-16 17:51:34'),
(87, 17, 4, 3, 41, 123, ' MN', 0, 1, '2022-05-16 22:31:21'),
(88, 17, 4, 3, 41, 123, 'zxz', 0, 1, '2022-05-16 22:34:57'),
(89, 17, 4, 2, 41, 82, 'xcx', 1, 1, '2022-05-16 22:37:12'),
(90, 17, 4, 4, 41, 164, 'Jawahar Nagar', 1, 1, '2022-05-16 22:44:23'),
(91, 17, 4, 3, 41, 123, 'dsad', 0, 1, '2022-05-16 22:50:25'),
(92, 17, 4, 3, 41, 123, 'dscd', 0, 1, '2022-05-16 22:52:14'),
(93, 17, 4, 4, 41, 164, 'dcsdc', 0, 1, '2022-05-16 22:53:34'),
(94, 17, 4, 4, 41, 164, 'dcsdc', 0, 1, '2022-05-16 22:53:55'),
(95, 17, 4, 2, 41, 82, 'sdas', 0, 1, '2022-05-16 22:54:28'),
(96, 17, 4, 4, 41, 164, 'sad', 0, 1, '2022-05-16 22:55:45'),
(97, 17, 4, 6, 41, 246, 'cx', 0, 1, '2022-05-16 23:07:34'),
(98, 17, 4, 4, 41, 164, 'scfdc', 0, 1, '2022-05-16 23:08:08'),
(99, 17, 4, 2, 41, 82, 'vcxv', 0, 1, '2022-05-16 23:08:53'),
(100, 17, 61, 1, 2, 2, 'Shanti Nagar', 0, 1, '2022-05-17 17:00:17'),
(101, 14, 15, 1, 74, 74, 'hvb ', 0, 1, '2022-06-30 19:15:36'),
(102, 50, 15, 1, 74, 74, 'jawahar nagar', 0, 1, '2022-08-30 13:41:22'),
(103, 50, 30, 2, 14, 28, 'sddc', 0, 1, '2022-08-30 13:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `category_image` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`, `status`, `created_date`) VALUES
(1, 'Top Offers', 'cate22-04-02-13-50-28.png', 1, '2022-04-02 13:50:28'),
(2, 'Grocery', 'cate22-04-02-13-50-50.png', 1, '2022-04-02 13:50:50'),
(3, 'Mobiles', 'cate22-04-02-13-51-20.png', 1, '2022-04-02 13:51:20'),
(4, 'Fashion', 'cate22-04-02-13-52-19.png', 1, '2022-04-02 13:52:19'),
(5, 'Electronics', 'cate22-04-02-13-52-39.png', 1, '2022-04-02 13:52:39'),
(6, 'Home', 'cate22-04-02-13-52-57.jpeg', 1, '2022-04-02 13:52:57'),
(7, 'Appliances', 'cate22-04-02-13-53-28.png', 1, '2022-04-02 13:53:28'),
(8, 'Travel', 'cate22-04-02-13-53-45.png', 1, '2022-04-02 13:53:45'),
(9, 'Beauty, Toys & More', 'cate22-04-02-13-54-22.png', 1, '2022-04-02 13:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `end_user`
--

CREATE TABLE `end_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `end_user`
--

INSERT INTO `end_user` (`user_id`, `user_name`, `email`, `mobile`, `password`, `status`, `created_date`) VALUES
(1, '', '', 0, 'd41d8cd98f00b204e9800998ecf8427e', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_add`
--

CREATE TABLE `product_add` (
  `product_add_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `pro_image` varchar(200) NOT NULL,
  `pro2_image` varchar(200) NOT NULL,
  `pro3_image` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `net_price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_add`
--

INSERT INTO `product_add` (`product_add_id`, `product_name`, `pro_image`, `pro2_image`, `pro3_image`, `description`, `quantity`, `price`, `discount`, `net_price`, `category_id`, `status`, `created_date`) VALUES
(1, 'HP Pavilion Ryzen', 'pro-front22-03-31-13-49-33.jpeg', 'pro-side22-03-31-13-49-33.jpeg', 'pro-back22-03-31-13-49-33.jpeg', 'HP Pavilion Ryzen 5 Hexa Core 5500U - (8 GB/512 GB SSD/Windows 10 Home) 15-eh1101AU Thin and Light Laptop  (15.6 Inch, Natural Silver, 1.75 Kg, With MS Office)', 5, 57, 18, 70, 5, 1, '0000-00-00 00:00:00'),
(2, 'acer Aspire 7 Core i5 10th Gen', 'pro-front22-03-31-13-53-18.jpeg', 'pro-side22-03-31-13-53-18.jpeg', 'pro-back22-03-31-13-53-18.jpeg', '- (8 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 1650) A715-75G-50TA/ A715-75G-41G/ A715-75G-52AA Gaming Laptop  (15.6 inch, Black, 2.15 Kg)', 7, 50, 43, 89, 5, 1, '0000-00-00 00:00:00'),
(3, 'ASUS VivoBook 15 (2021) Core i3 10th Gen', 'pro-front22-03-31-14-02-14.jpeg', 'pro-side22-03-31-14-02-14.jpeg', 'pro-back22-03-31-14-02-14.jpeg', '- (8 GB/512 GB SSD/Windows 11 Home) X515JA-EJ362WS Thin and Light Laptop  (15.6 inch, Transparent Silver, 1.80 kg, With MS', 6, 37, 26, 50, 5, 1, '0000-00-00 00:00:00'),
(4, 'DELL Vostro Core i3 10th Gen', 'pro-front22-03-31-14-05-50.jpeg', 'pro-side22-03-31-14-05-50.jpeg', 'pro-back22-03-31-14-05-50.jpeg', '- (8 GB/1 TB HDD/256 GB SSD/Windows 11 Home) X9K0T Thin and Light Laptop  (15.6 inch, Black, 1.8 kg, With MS Office)', 8, 41, 24, 54, 5, 1, '0000-00-00 00:00:00'),
(5, 'Lenovo Core i3 10th Gen', 'pro-front22-03-31-14-09-14.jpeg', 'pro-side22-03-31-14-09-14.jpeg', 'pro-back22-03-31-14-09-14.jpeg', '- (8 GB/512 GB SSD/Windows 11 Home) 15IML05 Thin and Light Laptop  (15.6 inch, Platinum Grey, 1.7 Kg, With MS Office)', 5, 39, 36, 62, 5, 1, '0000-00-00 00:00:00'),
(6, 'acer Aspire 7 Ryzen 5 Hexa Core 5500U', 'pro-front22-03-31-14-14-09.jpeg', 'pro-side22-03-31-14-14-09.jpeg', 'pro-back22-03-31-14-14-09.jpeg', '- (8 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 1650) A715-42G Gaming Laptop  (15.6 inch, Black, 2.15 kg)', 6, 54, 38, 89, 5, 1, '0000-00-00 00:00:00'),
(7, 'Flipkart Perfect Homes Julian Engineered Wood 4 Door Wardrobe', 'pro-front22-03-31-14-25-22.jpeg', 'pro-side22-03-31-14-25-22.jpeg', 'pro-back22-03-31-14-25-22.jpeg', 'Finish Color - Espresso, Mirror Included, Knock Down)', 8, 16, 19, 20, 6, 1, '0000-00-00 00:00:00'),
(8, 'GADDA CO Orthopedic Memory Foam', 'pro-front22-03-31-15-21-31.jpeg', 'pro-side22-03-31-15-21-31.jpeg', 'pro-back22-03-31-15-21-31.jpeg', 'Dual Comfort Bed Mattress 6 inch Single PU Foam Mattress  (L x W: 72 inch x 36 inch)', 3, 7, 11, 8, 6, 1, '0000-00-00 00:00:00'),
(9, 'Home Full Engineered Wood TV Entertainment Unit', 'pro-front22-03-31-15-28-28.jpeg', 'pro-side22-03-31-15-28-28.jpeg', 'pro-back22-03-31-15-28-28.jpeg', ' (Finish Color - DARK WENGE, Knock Down)', 3, 7, 40, 13, 6, 1, '0000-00-00 00:00:00'),
(10, '@Home by nilkamal Marbito Engineered Wood Queen Box Bed', 'pro-front22-03-31-15-33-51.jpeg', 'pro-side22-03-31-15-33-51.jpeg', 'pro-back22-03-31-15-33-51.jpeg', '(Finish Color - White, Delivery Condition - Knock Down)', 6, 14, 70, 48, 6, 1, '0000-00-00 00:00:00'),
(11, 'SPACEWOOD Engineered Wood Single Box Bed', 'pro-front22-03-31-15-38-26.jpeg', 'pro-side22-03-31-15-38-26.jpeg', 'pro-back22-03-31-15-38-26.jpeg', '(Finish Color - Natural Wenge, Delivery Condition - Knock Down)', 6, 9, 38, 14, 6, 1, '0000-00-00 00:00:00'),
(14, 'APPLE iPhone 13', 'pro-front22-04-02-15-27-56.jpeg', 'pro-side22-04-02-15-27-56.jpeg', 'pro-back22-04-02-15-27-56.jpeg', '(Green, 256 GB)', 7, 84, 6, 89, 3, 1, '0000-00-00 00:00:00'),
(15, 'APPLE iPhone 13', 'pro-front22-04-02-15-31-40.jpeg', 'pro-side22-04-02-15-31-40.jpeg', 'pro-back22-04-02-15-31-40.jpeg', '(Blue, 128 GB) ', 3, 74, 6, 79, 3, 1, '0000-00-00 00:00:00'),
(30, 'POCO M4 Pro 5G', '22-04-06-19-22-39photo.jpg', '22-04-06-19-22-45photo.jpg', '22-04-06-19-22-50photo.jpg', '(Cool Blue, 64 GB)  (4 GB RAM)#JustHere', 9, 14, 12, 16, 3, 1, '0000-00-00 00:00:00'),
(31, 'vivo T1 5G', '22-04-06-19-25-23photo.jpg', '22-04-06-19-25-42photo.jpg', '22-04-06-19-25-50photo.jpg', '(Rainbow Fantasy, 128 GB)  (6 GB RAM)#JustHere', 6, 16, 19, 20, 3, 1, '0000-00-00 00:00:00'),
(32, 'APPLE iPhone 13', '22-04-06-19-29-14photo.jpg', '22-04-06-19-29-21photo.jpg', '22-04-06-19-29-26photo.jpg', '(Pink, 128 GB)', 4, 74, 6, 79, 3, 1, '0000-00-00 00:00:00'),
(33, 'REDMI Note 10S', '22-04-06-19-38-38photo.jpg', '22-04-06-19-38-43photo.jpg', '22-04-06-19-38-49photo.jpg', '(Cosmic Purple, 128 GB)  (6 GB RAM)', 3, 14, 21, 18, 3, 1, '0000-00-00 00:00:00'),
(34, 'OPPO K10', '22-04-06-19-41-52photo.jpg', '22-04-06-19-41-58photo.jpg', '22-04-06-19-42-05photo.jpg', '(Blue Flame, 128 GB)  (6 GB RAM)', 6, 14, 21, 18, 3, 1, '0000-00-00 00:00:00'),
(35, 'realme 9 Pro 5G', '22-04-06-20-04-34photo.jpg', '22-04-06-20-04-40photo.jpg', '22-04-06-20-04-44photo.jpg', '(Aurora Green, 128 GB)  (8 GB RAM)', 7, 20, 13, 23, 3, 1, '0000-00-00 00:00:00'),
(36, 'POCO M4 Pro', '22-04-06-20-11-10photo.jpg', '22-04-06-20-11-17photo.jpg', '22-04-06-20-11-22photo.jpg', '(Cool Blue, 128 GB)  (6 GB RAM)#JustHere', 5, 16, 18, 19, 3, 1, '0000-00-00 00:00:00'),
(37, 'REDMI Note 10T 5G', '22-04-06-20-14-15photo.jpg', '22-04-06-20-14-20photo.jpg', '22-04-06-20-14-25photo.jpg', '(Mint Green, 128 GB)  (6 GB RAM)', 7, 15, 16, 18, 3, 1, '0000-00-00 00:00:00'),
(38, 'POCO X4 Pro 5G ', '22-04-06-20-17-50photo.jpg', '22-04-06-20-18-30photo.jpg', '22-04-06-20-18-04photo.jpg', '(Laser Blue, 128 GB)  (8 GB RAM)#JustHere', 3, 21, 15, 25, 3, 1, '0000-00-00 00:00:00'),
(40, 'vivo Y21', '22-04-06-20-30-14photo.jpg', '22-04-06-20-30-21photo.jpg', '22-04-06-20-30-28photo.jpg', '(Midnight Blue, 64 GB)  (4 GB RAM)', 7, 13, 22, 17, 3, 1, '0000-00-00 00:00:00'),
(41, 'realme 9 Pro+ 5G', '22-04-06-20-33-44photo.jpg', '22-04-06-20-33-49photo.jpg', '22-04-06-20-33-54photo.jpg', '(Sunrise Blue, 128 GB)  (8 GB RAM)', 5, 26, 10, 29, 3, 1, '0000-00-00 00:00:00'),
(42, 'REDMI Note 10 Pro', '22-04-06-20-36-33photo.jpg', '22-04-06-20-36-41photo.jpg', '22-04-06-20-36-46photo.jpg', '(Dark Night, 128 GB)  (6 GB RAM)', 8, 17, 10, 19, 3, 1, '0000-00-00 00:00:00'),
(43, 'vivo Y21A', '22-04-06-20-46-46photo.jpg', '22-04-06-20-46-52photo.jpg', '22-04-06-20-46-58photo.jpg', '(Midnight Blue, 64 GB)  (4 GB RAM)', 3, 13, 27, 10, 3, 1, '0000-00-00 00:00:00'),
(44, 'vivo Y33T', '22-04-06-20-50-12photo.jpg', '22-04-06-20-50-18photo.jpg', '22-04-06-20-50-24photo.jpg', '(Mirror Black, 128 GB)  (8 GB RAM)', 8, 18, 17, 22, 3, 1, '0000-00-00 00:00:00'),
(45, 'Tecno SPARK 7 Pro', '22-04-06-20-54-19photo.jpg', '22-04-06-20-54-31photo.jpg', '22-04-06-20-54-36photo.jpg', '(Spruce Green, 64 GB)  (4 GB RAM)', 7, 10, 18, 9, 3, 1, '0000-00-00 00:00:00'),
(46, 'vivo Y20G 2021', '22-04-06-20-57-38photo.jpg', '22-04-06-20-57-43photo.jpg', '22-04-06-20-57-48photo.jpg', '(Obsidian Black, 64 GB)  (4 GB RAM)', 5, 13, 18, 16, 3, 1, '0000-00-00 00:00:00'),
(47, 'realme C21', '22-04-06-21-00-13photo.jpg', '22-04-06-21-00-18photo.jpg', '22-04-06-21-00-23photo.jpg', '(Cross Blue, 64 GB)  (4 GB RAM)', 5, 10, 4, 10, 3, 1, '0000-00-00 00:00:00'),
(48, 'Infinix Note 10 Pro', '22-04-06-21-05-07photo.jpg', '22-04-06-21-05-14photo.jpg', '22-04-06-21-05-20photo.jpg', '(Nordic Secret, 256 GB)  (8 GB RAM)', 3, 16, 15, 19, 3, 1, '0000-00-00 00:00:00'),
(49, 'Hisense A6GE Series 108 cm', '22-04-07-16-28-55photo.jpg', '22-04-07-16-29-00photo.jpg', '22-04-07-16-29-07photo.jpg', '(43 inch) Ultra HD (4K) LED Smart Android TV with Dolby Vision and Dolby Atmos  (43A6GE)', 8, 29, 19, 36, 7, 1, '0000-00-00 00:00:00'),
(50, 'OnePlus Y1S 80 cm', '22-04-07-16-32-35photo.jpg', '22-04-07-16-32-43photo.jpg', '22-04-07-16-32-50photo.jpg', '(32 inch) HD Ready LED Smart Android TV  (32HD2A00)', 9, 16, 25, 21, 7, 1, '0000-00-00 00:00:00'),
(51, 'SAMSUNG 80 cm', '22-04-07-16-35-10photo.jpg', '22-04-07-16-35-17photo.jpg', '22-04-07-16-35-27photo.jpg', '(32 inch) HD Ready LED Smart TV  (UA32T4340AKXXL / UA32T4340BKXXL)', 6, 16, 26, 22, 7, 1, '0000-00-00 00:00:00'),
(52, 'Hisense U6G Series 139 cm', '22-04-07-16-39-15photo.jpg', '22-04-07-16-39-21photo.jpg', '22-04-07-16-39-30photo.jpg', '(55 inch) QLED Ultra HD (4K) Smart Android TV With Full Array Local Dimming  (55U6G)', 4, 52, 34, 79, 7, 1, '0000-00-00 00:00:00'),
(53, 'LG 139 cm (55 inch)', '22-04-07-16-42-14photo.jpg', '22-04-07-16-42-20photo.jpg', '22-04-07-16-42-26photo.jpg', 'Ultra HD (4K) LED Smart TV  (55UP7500PTZ)', 8, 48, 39, 79, 7, 1, '0000-00-00 00:00:00'),
(54, 'OnePlus U1S 139 cm ', '22-04-07-16-45-00photo.jpg', '22-04-07-16-45-07photo.jpg', '22-04-07-16-45-14photo.jpg', ' (55 inch) Ultra HD (4K) LED Smart Android TV  (55UC1A00)', 5, 48, 19, 59, 7, 1, '0000-00-00 00:00:00'),
(55, 'Nokia 126 cm (50 inch) ', '22-04-07-16-50-58photo.jpg', '22-04-07-16-51-05photo.jpg', '22-04-07-16-51-11photo.jpg', ' Ultra HD (4K) LED Smart Android TV with Sound by Onkyo  (50TAUHDN)', 9, 37, 31, 54, 7, 1, '0000-00-00 00:00:00'),
(56, 'Mi Q1 138.8 cm', '22-04-07-16-54-29photo.jpg', '22-04-07-16-54-34photo.jpg', '22-04-07-16-54-39photo.jpg', '(55 inch) QLED Ultra HD (4K) Smart Android TV', 6, 59, 10, 49, 7, 1, '0000-00-00 00:00:00'),
(57, 'Nokia 140 cm (55 inch)', '22-04-07-16-57-49photo.jpg', '22-04-07-16-57-54photo.jpg', '22-04-07-16-58-00photo.jpg', 'Ultra HD 4K LED Smart Android TV with Sound by JBL and Powered by Harman AudioEFX  (55UHDADNDT52X)', 5, 47, 24, 62, 7, 1, '0000-00-00 00:00:00'),
(58, 'SONY X80J 138.8 cm', '22-04-07-17-00-53photo.jpg', '22-04-07-17-00-57photo.jpg', '22-04-07-17-01-03photo.jpg', '(55 inch) Ultra HD (4K) LED Smart TV  (KD-55X80J)', 5, 77, 30, 1, 7, 1, '0000-00-00 00:00:00'),
(59, 'Flipkart Perfect Homes Conwy Leatherette 6 Seater Sofa', '22-04-08-14-46-38photo.jpg', '22-04-08-14-46-43photo.jpg', '22-04-08-14-46-48photo.jpg', '(Finish Color - Beige, Knock Down)', 4, 33, 34, 51, 6, 1, '0000-00-00 00:00:00'),
(60, 'The Sleep Company SmartGRID', '22-04-08-17-03-36photo.jpg', '22-04-08-17-03-44photo.jpg', '22-04-08-17-03-50photo.jpg', ' Luxe 78x72 8 inch King High Density (HD) Foam Mattress  (L x W: 78 inch x 72 inch)', 4, 29, 35, 45, 6, 1, '0000-00-00 00:00:00'),
(61, 'Nilkamal Plastic Shoe Stand ', '22-04-08-19-47-17photo.jpg', '22-04-08-19-47-25photo.jpg', '22-04-08-19-47-30photo.jpg', '(4 Shelves, DIY(Do-It-Yourself))', 5, 2, 9, 3, 6, 1, '0000-00-00 00:00:00'),
(62, 'Nilkamal Freedom Mini Medium ', '22-04-08-19-51-57photo.jpg', '22-04-08-19-52-03photo.jpg', '22-04-08-19-52-08photo.jpg', ' (FMM) Plastic Free Standing Cabinet  (Finish Color - Weathered Brown & Biscuit, DIY(Do-It-Yourself))', 7, 4, 29, 6, 6, 1, '0000-00-00 00:00:00'),
(65, 'MUEBLES CASA Croma Leatherette 3 Seater Sofa', '22-04-08-20-07-49photo.jpg', '22-04-08-20-07-54photo.jpg', '22-04-08-20-08-00photo.jpg', '(Finish Color - Tan Brown, Knock Down)', 5, 19, 56, 45, 6, 1, '0000-00-00 00:00:00'),
(66, 'KRIJEN Lodgy Glass Coffee Table', '22-04-08-20-17-07photo.jpg', '22-04-08-20-17-17photo.jpg', '22-04-08-20-17-24photo.jpg', '(Finish Color - Black, Knock Down)', 7, 4, 44, 8, 6, 1, '0000-00-00 00:00:00'),
(67, 'Flipkart Perfect Homes Duo Hard', '22-04-08-20-28-23photo.jpg', '22-04-08-20-28-30photo.jpg', '22-04-08-20-28-35photo.jpg', '& Soft 6 inch King High Resilience (HR) Foam Mattress  (L x W: 72 inch x 70 inch)', 5, 9, 31, 13, 6, 1, '0000-00-00 00:00:00'),
(68, 'efd', '22-04-19-15-28-59photo.jpg', '22-04-19-15-29-03photo.jpg', '22-04-19-15-29-09photo.jpg', 'dsfsdf', 5, 3243, 2343243, 234234, 4, 1, '0000-00-00 00:00:00'),
(70, 'sadsdas', '22-04-19-15-36-11photo.jpg', '22-04-19-15-36-14photo.jpg', '22-04-19-15-36-17photo.jpg', 'dcsac', 3, 232, 2312, 123213, 8, 1, '0000-00-00 00:00:00'),
(71, 'dssfdf', '22-04-22-17-09-26photo.jpg', '22-04-22-17-09-30photo.jpg', '22-04-22-17-09-49photo.jpg', 'sdfsdf', 3, 234324, 3242, 234324, 2, 1, '2022-04-22 17:10:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `buynow`
--
ALTER TABLE `buynow`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `end_user`
--
ALTER TABLE `end_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `product_add`
--
ALTER TABLE `product_add`
  ADD PRIMARY KEY (`product_add_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `buynow`
--
ALTER TABLE `buynow`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `end_user`
--
ALTER TABLE `end_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_add`
--
ALTER TABLE `product_add`
  MODIFY `product_add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
