-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 02:26 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `messenger`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_users`
--

CREATE TABLE `chat_users` (
  `chat_user_id` int(11) NOT NULL,
  `sender_id` varchar(150) NOT NULL,
  `reciever_id` varchar(150) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_users`
--

INSERT INTO `chat_users` (`chat_user_id`, `sender_id`, `reciever_id`, `date`) VALUES
(1, '3', '1', '2020-10-26 10:40:58'),
(2, '3', '2', '2020-10-26 10:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `user_image` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_image`, `email`, `password`, `date`) VALUES
(1, 'virat kholi', 'http://localhost/messenger/profile_image/69.jpg', 'virat@gmail.com', '12345', '2020-09-27 03:06:00'),
(2, 'dhoni', 'http://localhost/messenger/profile_image/68.jpg', 'dhoni@yahoo.com', '12345', '2020-09-27 03:15:17'),
(3, 'rohit', 'http://localhost/messenger/profile_image/15.jpg', 'rohit@gmail.com', '12345', '2020-09-27 03:27:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_chat_message`
--

CREATE TABLE `user_chat_message` (
  `chat_id` int(11) NOT NULL,
  `sender_id` varchar(150) NOT NULL,
  `reciever_id` varchar(150) NOT NULL,
  `chat_message` varchar(250) NOT NULL,
  `chat_post` varchar(250) NOT NULL,
  `type` varchar(150) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_chat_message`
--

INSERT INTO `user_chat_message` (`chat_id`, `sender_id`, `reciever_id`, `chat_message`, `chat_post`, `type`, `date`) VALUES
(1, '3', '1', 'hello dear..', '', 'text', '2020-10-26 10:40:58'),
(2, '3', '2', 'hello', '', 'text', '2020-10-26 10:41:50'),
(3, '3', '2', 'hw  r u?', '', 'text', '2020-10-26 10:42:27'),
(4, '3', '1', 'hw ru kholi?', '', 'text', '2020-10-26 10:43:11'),
(5, '3', '1', 'what r u doing?', '', 'text', '2020-10-26 10:44:11'),
(6, '3', '1', '', '', 'text', '2020-10-26 10:44:13'),
(7, '3', '1', 'r u fine?', '', 'text', '2020-10-26 10:44:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_users`
--
ALTER TABLE `chat_users`
  ADD PRIMARY KEY (`chat_user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_chat_message`
--
ALTER TABLE `user_chat_message`
  ADD PRIMARY KEY (`chat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_users`
--
ALTER TABLE `chat_users`
  MODIFY `chat_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_chat_message`
--
ALTER TABLE `user_chat_message`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
