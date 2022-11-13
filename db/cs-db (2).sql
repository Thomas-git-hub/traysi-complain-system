-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 02:57 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `president`
--

CREATE TABLE `president` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `toda_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active' COMMENT 'Active or Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `complain_tbl`
--
ALTER TABLE `complain_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offense_tbl`
--
ALTER TABLE `offense_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `president`
--
ALTER TABLE `president`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reply_tbl`
--
ALTER TABLE `reply_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `toda_tbl`
--
ALTER TABLE `toda_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
