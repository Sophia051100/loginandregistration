-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 11:11 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `authenticID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `authenticCode` int(11) NOT NULL,
  `createdAT` datetime NOT NULL,
  `expiration` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`authenticID`, `userID`, `authenticCode`, `createdAT`, `expiration`) VALUES
(1, 4, 781571, '2021-04-05 01:43:47', '2021-04-05 01:48:47'),
(2, 0, 498084, '2021-04-05 01:51:26', '2021-04-05 01:56:26'),
(3, 0, 288866, '2021-04-05 01:52:30', '2021-04-05 01:57:30'),
(4, 0, 135438, '2021-04-05 01:55:16', '2021-04-05 02:00:16'),
(5, 0, 425889, '2021-04-05 01:56:44', '2021-04-05 02:01:44'),
(6, 0, 304132, '2021-04-05 01:57:27', '2021-04-05 02:02:27'),
(7, 0, 179898, '2021-04-05 01:57:57', '2021-04-05 02:02:57'),
(27, 0, 621057, '2021-04-05 14:35:14', '2021-04-05 14:40:14'),
(28, 0, 395993, '2021-04-05 15:39:56', '2021-04-05 15:44:56'),
(29, 0, 942223, '2021-04-05 16:07:07', '2021-04-05 16:12:07'),
(30, 0, 814692, '2021-04-05 16:09:19', '2021-04-05 16:14:19'),
(31, 1, 200355, '2021-04-05 16:15:22', '2021-04-05 16:20:22'),
(32, 0, 892477, '2021-04-05 16:16:44', '2021-04-05 16:21:44'),
(33, 0, 439822, '2021-04-05 16:17:14', '2021-04-05 16:22:14'),
(34, 0, 273545, '2021-04-05 16:17:14', '2021-04-05 16:22:14'),
(42, 1000, 754456, '2021-04-06 15:09:12', '2021-04-06 15:14:12'),
(43, 1000, 119205, '2021-04-06 15:10:39', '2021-04-06 15:15:39'),
(44, 1000, 293668, '2021-04-06 15:24:35', '2021-04-06 15:29:35'),
(45, 1000, 333880, '2021-04-06 15:45:14', '2021-04-06 15:50:14'),
(46, 1000, 189388, '2021-04-06 15:48:28', '2021-04-06 15:53:28'),
(47, 1000, 830034, '2021-04-21 12:47:52', '2021-04-21 12:52:52'),
(48, 0, 608394, '2021-04-21 12:49:58', '2021-04-21 12:54:58'),
(49, 1000, 344780, '2021-04-21 12:50:41', '2021-04-21 12:55:41'),
(50, 1000, 944865, '2021-04-21 12:50:51', '2021-04-21 12:55:51'),
(51, 1000, 610826, '2021-04-29 18:03:42', '2021-04-29 18:08:42'),
(52, 1000, 390214, '2021-04-29 18:05:08', '2021-04-29 18:10:08'),
(53, 1002, 599612, '2021-04-29 18:48:45', '2021-04-29 18:53:45'),
(54, 1002, 119659, '2021-04-29 18:49:01', '2021-04-29 18:54:01'),
(55, 1003, 687451, '2021-04-30 18:33:29', '2021-04-30 18:38:29'),
(56, 1003, 598030, '2021-04-30 18:34:56', '2021-04-30 18:39:56'),
(57, 1, 537533, '2021-04-30 18:45:29', '2021-04-30 18:50:29'),
(58, 1, 975822, '2021-04-30 18:47:20', '2021-04-30 18:52:20'),
(59, 1, 626206, '2021-04-30 18:49:26', '2021-04-30 18:54:26'),
(60, 1, 299116, '2021-04-30 18:50:59', '2021-04-30 18:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `event_log`
--

CREATE TABLE `event_log` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity` varchar(50) NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_log`
--

INSERT INTO `event_log` (`event_id`, `user_id`, `activity`, `dateandtime`) VALUES
(1, 1000, 'Login', '2021-04-29 10:05:14'),
(2, 1000, 'Logout', '2021-04-29 10:08:31'),
(3, 1002, 'Login', '2021-04-29 10:49:07'),
(4, 1002, 'Logout', '2021-04-29 10:49:28'),
(5, 1003, 'Login', '2021-04-30 10:33:36'),
(6, 1003, 'Logout', '2021-04-30 10:33:37'),
(7, 1003, 'Login', '2021-04-30 10:35:01'),
(8, 1003, 'Logout', '2021-04-30 10:35:04'),
(9, 1, 'Login', '2021-04-30 10:45:38'),
(10, 1, 'Logout', '2021-04-30 10:45:41'),
(11, 1, 'Login', '2021-04-30 10:49:31'),
(12, 1, 'Logout', '2021-04-30 10:49:34'),
(13, 1, 'Login', '2021-04-30 10:51:03'),
(14, 1, 'Logout', '2021-04-30 10:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `email`) VALUES
(1, 'ADMIN', '@Admin123', 'sphmrtnz0511@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authentication`
--
ALTER TABLE `authentication`
  ADD PRIMARY KEY (`authenticID`);

--
-- Indexes for table `event_log`
--
ALTER TABLE `event_log`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authentication`
--
ALTER TABLE `authentication`
  MODIFY `authenticID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `event_log`
--
ALTER TABLE `event_log`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
