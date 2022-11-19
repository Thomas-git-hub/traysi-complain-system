-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 05:56 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT 1,
  `fullname` varchar(50) NOT NULL,
  `code` varchar(5) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `usertype`, `fullname`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin', 'Active', '2022-11-15 13:38:32', '2022-11-15 21:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `complain_tbl`
--

CREATE TABLE `complain_tbl` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `toda_id` int(11) NOT NULL,
  `offense_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `others` varchar(500) NOT NULL,
  `upload_image` varchar(255) DEFAULT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'R' COMMENT 'R-Receiving\r\nP-Processing\r\nRS-Resolved',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain_tbl`
--

INSERT INTO `complain_tbl` (`id`, `user_id`, `toda_id`, `offense_id`, `driver_id`, `others`, `upload_image`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 1, 2, 'test', NULL, 'P', '2022-11-13 03:42:45', '2022-11-19 04:54:50'),
(9, 2, 2, 1, 5, 'test', NULL, 'R', '2022-11-14 12:15:27', '2022-11-19 04:54:58'),
(10, 2, 2, 1, 4, 'test', NULL, 'RS', '2022-11-14 12:23:43', '2022-11-14 12:23:43'),
(11, 2, 2, 1, 4, 'test', NULL, 'RS', '2022-11-14 12:23:46', '2022-11-14 12:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `plate_no` varchar(11) NOT NULL,
  `contact_no` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `email` varchar(50) NOT NULL,
  `toda_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active' COMMENT 'Active or Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `fullname`, `plate_no`, `contact_no`, `email`, `toda_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'driver1', 'EDS638', 09473482764, 'driver1@gmail.com', 1, 'Inactive', '2022-11-13 03:27:42', '2022-11-18 13:44:21'),
(3, 'driver2', 'APG4985', 09473482764, 'driver2@gmail.com', 2, 'Active', '2022-11-13 03:28:47', '2022-11-14 12:42:29'),
(4, 'driver3', 'FGH48504', 09732732737, 'driver3@gmail.com', 2, 'Inactive', '2022-11-13 03:29:05', '2022-11-13 07:09:30'),
(5, 'driver4', 'EDF884', 09763344643, 'driver4@gmail.com', 1, 'Active', '2022-11-13 05:52:32', '2022-11-13 08:51:26'),
(6, 'driver5', 'SDF2345', 09355465655, 'driver5@gmail.com', 2, 'Active', '2022-11-14 12:47:30', '2022-11-14 12:47:30'),
(7, 'driver7', 'EDS635', 09473482764, 'driver7@gmail.com', 1, 'Active', '2022-11-18 13:36:57', '2022-11-18 13:36:57'),
(8, 'driver1', 'APG4980', 09864379964, 'driver1@gmail.com', 2, 'Active', '2022-11-18 13:45:35', '2022-11-18 13:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `offense_tbl`
--

CREATE TABLE `offense_tbl` (
  `id` int(11) NOT NULL,
  `offense_desc` varchar(255) NOT NULL,
  `type` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offense_tbl`
--

INSERT INTO `offense_tbl` (`id`, `offense_desc`, `type`, `created_at`, `updated_at`) VALUES
(1, 'foul words', '1st', '2022-11-13 03:17:35', '2022-11-13 03:17:35');

-- --------------------------------------------------------

--
-- Table structure for table `president`
--

CREATE TABLE `president` (
  `id` int(11) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT 2,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `toda_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active' COMMENT 'Active or Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `president`
--

INSERT INTO `president` (`id`, `usertype`, `fullname`, `email`, `contact_no`, `toda_id`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'pres1', 'pres1@gmail.com', 09876543210, 1, 'kdjxg', 'Active', '2022-11-13 03:16:37', '2022-11-19 01:47:48'),
(2, 2, 'pres2', 'pres2@gmail.com', 09876543286, 2, 'hdjhs', 'Active', '2022-11-13 03:17:11', '2022-11-19 01:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `reply_tbl`
--

CREATE TABLE `reply_tbl` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pres_id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `toda_pres`
--

CREATE TABLE `toda_pres` (
  `toda_id` int(11) NOT NULL,
  `pres_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active' COMMENT 'Active or Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toda_pres`
--

INSERT INTO `toda_pres` (`toda_id`, `pres_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Active', '2022-11-13 03:17:21', '2022-11-13 03:17:21'),
(2, 2, 'Active', '2022-11-13 03:17:29', '2022-11-13 03:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `toda_tbl`
--

CREATE TABLE `toda_tbl` (
  `id` int(11) NOT NULL,
  `toda_name` varchar(50) NOT NULL,
  `from_point` varchar(50) NOT NULL,
  `to_point` varchar(50) NOT NULL,
  `color` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toda_tbl`
--

INSERT INTO `toda_tbl` (`id`, `toda_name`, `from_point`, `to_point`, `color`, `created_at`, `updated_at`) VALUES
(1, 'test toda 1', 'from test 1', 'to test 1', 'green', '2022-11-13 03:11:35', '2022-11-13 03:11:35'),
(2, 'test toda 2', 'from test 2', 'to test 12', 'red', '2022-11-13 03:12:02', '2022-11-13 03:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT 3,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `fullname`, `email`, `contact_no`, `created_at`, `updated_at`) VALUES
(1, 3, 'user1', 'user1@gmail.com', 09123456789, '2022-11-13 03:11:01', '2022-11-13 03:11:01'),
(2, 3, 'user2', 'user2@gmail.com', 09123456780, '2022-11-13 03:47:53', '2022-11-13 03:47:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain_tbl`
--
ALTER TABLE `complain_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `toda_id` (`toda_id`),
  ADD KEY `offense_id` (`offense_id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`),
  ADD KEY `toda_id` (`toda_id`);

--
-- Indexes for table `offense_tbl`
--
ALTER TABLE `offense_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `president`
--
ALTER TABLE `president`
  ADD PRIMARY KEY (`id`),
  ADD KEY `toda_id` (`toda_id`);

--
-- Indexes for table `reply_tbl`
--
ALTER TABLE `reply_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `pres_id` (`pres_id`);

--
-- Indexes for table `toda_pres`
--
ALTER TABLE `toda_pres`
  ADD KEY `toda_id` (`toda_id`),
  ADD KEY `pres_id` (`pres_id`);

--
-- Indexes for table `toda_tbl`
--
ALTER TABLE `toda_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complain_tbl`
--
ALTER TABLE `complain_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `offense_tbl`
--
ALTER TABLE `offense_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `president`
--
ALTER TABLE `president`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reply_tbl`
--
ALTER TABLE `reply_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `toda_tbl`
--
ALTER TABLE `toda_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complain_tbl`
--
ALTER TABLE `complain_tbl`
  ADD CONSTRAINT `complain_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `complain_tbl_ibfk_2` FOREIGN KEY (`toda_id`) REFERENCES `toda_tbl` (`id`),
  ADD CONSTRAINT `complain_tbl_ibfk_3` FOREIGN KEY (`offense_id`) REFERENCES `offense_tbl` (`id`),
  ADD CONSTRAINT `complain_tbl_ibfk_4` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`id`);

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`toda_id`) REFERENCES `toda_tbl` (`id`);

--
-- Constraints for table `president`
--
ALTER TABLE `president`
  ADD CONSTRAINT `president_ibfk_1` FOREIGN KEY (`toda_id`) REFERENCES `toda_tbl` (`id`);

--
-- Constraints for table `reply_tbl`
--
ALTER TABLE `reply_tbl`
  ADD CONSTRAINT `reply_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reply_tbl_ibfk_2` FOREIGN KEY (`pres_id`) REFERENCES `president` (`id`);

--
-- Constraints for table `toda_pres`
--
ALTER TABLE `toda_pres`
  ADD CONSTRAINT `toda_pres_ibfk_1` FOREIGN KEY (`toda_id`) REFERENCES `toda_tbl` (`id`),
  ADD CONSTRAINT `toda_pres_ibfk_2` FOREIGN KEY (`pres_id`) REFERENCES `president` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
