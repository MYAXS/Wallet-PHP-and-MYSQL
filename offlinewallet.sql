-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 11:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `offlinewallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`id`, `from_user_id`, `to_user_id`, `amount`, `created_at`) VALUES
(1, 121, 122, 1000, '2021-10-30 14:57:37'),
(2, 121, 122, 456, '2021-10-30 15:16:50'),
(3, 122, 121, 700, '2021-10-30 15:17:18'),
(4, 121, 122, 2000, '2021-10-30 15:19:59'),
(5, 122, 121, 1000, '2021-10-30 15:20:23'),
(6, 121, 122, 10, '2021-10-30 15:43:15'),
(7, 121, 122, 10000, '2021-10-30 15:43:41'),
(8, 121, 123, 1000, '2021-10-30 16:03:25'),
(9, 123, 122, 500, '2021-10-30 16:05:51'),
(10, 122, 120, 100, '2021-11-05 16:40:53'),
(11, 122, 120, 100, '2021-11-05 16:42:10'),
(12, 122, 120, 88, '2021-11-05 16:56:21'),
(13, 122, 120, 88, '2021-11-05 16:56:32'),
(14, 122, 120, 88, '2021-11-05 16:56:33'),
(15, 122, 120, 88, '2021-11-05 16:56:33'),
(16, 122, 120, 1000, '2021-11-05 16:58:31'),
(17, 120, 121, 10, '2021-11-05 17:00:03'),
(18, 120, 121, 10, '2021-11-05 17:00:57'),
(19, 120, 121, 1500, '2021-11-05 17:01:33'),
(20, 121, 124, 1000, '2021-11-08 12:09:53'),
(21, 121, 125, 1000, '2021-11-08 12:16:13'),
(22, 125, 120, 500, '2021-11-08 12:18:06'),
(23, 125, 120, 200, '2021-11-08 12:19:13'),
(24, 120, 121, 100, '2021-11-13 08:45:10'),
(25, 120, 121, 100, '2021-11-13 08:45:56'),
(26, 121, 126, 1000, '2021-11-13 09:48:42'),
(27, 126, 120, 500, '2021-11-13 09:53:31'),
(28, 120, 126, 1000, '2021-11-13 09:56:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `mobile`, `password`, `created_at`) VALUES
(120, 'Monu Giri', 'whomonugiri@gmail.com', '7838403916', '123456', '2021-10-30 14:40:19'),
(121, 'Admin', 'admin@detym.com', '9999999999', '123456789', '2021-10-30 14:50:23'),
(122, 'Test Kumar', 'test@gmail.com', '9191919191', '123456', '2021-10-30 14:57:37'),
(123, 'Tarun Yadav', 'traun@gmail.com', '7070707070', '123456', '2021-10-30 16:03:25'),
(124, 'Monu Giri', 'whomonugiri5@gmail.com', '9818981845', '123456', '2021-11-08 12:09:53'),
(125, 'Dev Ninja', 'whodevninja@gmail.com', '8508508520', '123456', '2021-11-08 12:16:13'),
(126, 'Hero Singh', 'iamhero@gmail.com', '7878787878', '123456', '2021-11-13 09:48:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trans`
--
ALTER TABLE `trans`
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
-- AUTO_INCREMENT for table `trans`
--
ALTER TABLE `trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
