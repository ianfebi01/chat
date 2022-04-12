-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 09, 2022 at 10:33 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1209163957, 228615122, 'woy'),
(2, 1209163957, 983488666, 'gg'),
(3, 1209163957, 983488666, 'hey'),
(4, 1209163957, 1502181629, 'Halo Ian'),
(5, 983488666, 1502181629, 'Halo robert'),
(6, 228615122, 1502181629, 'wow'),
(7, 1209163957, 1548664572, 'oh iya kerjaan nya disana'),
(8, 228615122, 1548664572, 'Iya sebentar'),
(9, 1209163957, 224285227, 'oh iya yan'),
(10, 1209163957, 980904063, 'Yan kirim file kemaarin'),
(11, 980904063, 1209163957, 'oke sebentar aku kirim link nya'),
(12, 1209163957, 980904063, 'oke aku tunggu'),
(13, 980904063, 1209163957, 'eh nanti zoom meeting mulai jam berapa'),
(14, 1209163957, 980904063, 'jam 1 siang'),
(15, 980904063, 1209163957, 'oh oke terimakasih'),
(16, 1209163957, 539880651, 'Halo'),
(17, 539880651, 1209163957, 'Iya');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 1209163957, 'Ian', 'Febi', 'ianfebi01@gmail.com', 'jenengmu', '1643293103Melepas Masa Lajang.00_04_16_20.Still002.jpg', 'Active now'),
(2, 228615122, 'Werty', 'Esa', 'wertyesa@gmail.com', 'jenengmu', '1644384342272360376_430923988771034_8946184521604776048_n.jpg', 'Offline now'),
(5, 1548664572, 'Dina', 'Ghu', 'dina@gmail.com', 'jenengmu', '1647222386computer-notebook-girl-work-people-woman-emotions-beautiful-white-background.jpg', 'Offline now'),
(6, 224285227, 'Sarah', 'Novita', 'sarah@gmail.com', 'jenengmu', '1647222479AF1QipPovbLCrLgK8GTG7o2DbwiOwFcP9PHdyvbFYXdYw2048-h1247.jpg', 'Offline now'),
(7, 980904063, 'Wudi', 'Wusanto', 'wudi@gmail.com', 'jenengmu', '164722259535344-bobon-santoso.jpg', 'Active now'),
(8, 539880651, 'Ian', 'Febi S', 'ian@gmail.com', 'jenengmu', '1648194458IMG_9594.JPG', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
