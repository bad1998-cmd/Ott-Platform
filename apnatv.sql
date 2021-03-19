-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 09:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apnatv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `aname` varchar(30) DEFAULT NULL,
  `mobileno` varchar(10) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `aname`, `mobileno`, `pass`) VALUES
(1, 'admin1@gmail.com', 'Badal ', '8404936386', '121');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `psw` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `name`, `gender`, `phone`, `email`, `psw`) VALUES
(1, 'Badal Kumar', 'Male', '8404936386', 'guptabadal03@gmail.c', '123'),
(2, 'Suraj', 'Male', '8092635480', 'surajgupta0914@gmail', '121'),
(3, 'Mohan', 'Male', '8846516162', 'bad1997@gmail.com', '121'),
(4, 'Lala', 'Male', '1654564654', 'user1@gmail.com', '121'),
(5, 'Raju', 'Male', '9896353625', 'new12@gmail.com', '191');

-- --------------------------------------------------------

--
-- Table structure for table `video_tbl`
--

CREATE TABLE `video_tbl` (
  `id` int(11) NOT NULL,
  `web_name` varchar(50) DEFAULT NULL,
  `web_genre` varchar(50) DEFAULT NULL,
  `web_episode` varchar(20) DEFAULT NULL,
  `web_duration` varchar(20) DEFAULT NULL,
  `web_rating` int(10) DEFAULT NULL,
  `web_image` varchar(50) DEFAULT NULL,
  `web_video` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_tbl`
--

INSERT INTO `video_tbl` (`id`, `web_name`, `web_genre`, `web_episode`, `web_duration`, `web_rating`, `web_image`, `web_video`) VALUES
(4, 'Baddd', 'bfdbdf', 'ff', '5', 6, 'image/WhatsApp Image 2021-02-19 at 15.56.36.jpeg', 'video/videoplayback.mp4'),
(6, 'Tune ye rangile kays', 'Indian idol', '1', '5', 5, 'image/aru.jpg', 'video/videoplayback (1).mp4'),
(7, 'Lut gye', 'Romentic', '1', '5', 5, 'image/lutgye.jpg', 'video/videoplayback (2).mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_tbl`
--
ALTER TABLE `video_tbl`
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
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video_tbl`
--
ALTER TABLE `video_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
