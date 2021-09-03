-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 07:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `friend_list`
--

CREATE TABLE `friend_list` (
  `pid` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `friend_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_list`
--

INSERT INTO `friend_list` (`pid`, `user_id`, `friend_id`) VALUES
(1, '1', '2'),
(2, '1', '4'),
(3, '1', '6'),
(4, '8', '6'),
(5, '8', '2'),
(6, '9', '1'),
(7, '9', '2'),
(8, '9', '1'),
(9, '9', '2');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`, `email`, `mobile_no`, `gender`, `dob`, `username`, `password`, `updated_at`, `created_at`) VALUES
(1, 'raja', 'sekar', 'raja@gmail.com', '8756432578', 'male', '2021-09-02', 'raj', '123', '2021-09-02 12:15:00', '2021-09-02 12:15:00'),
(2, 'mani', 'kandan', 'mani@gmail.com', '8764590787', 'male', '2021-09-03', 'mani', '123', '2021-09-02 12:16:03', '2021-09-02 12:16:03'),
(3, 'kavi', 'priya', 'kavi@gmail.com', '9756432573', 'female', '2021-09-10', 'kavi', '123', '2021-09-02 12:16:54', '2021-09-02 12:16:54'),
(4, 'shree', 'priya', 'shree@gmail.com', '7658904567', 'female', '2021-09-02', 'shree', '123', '2021-09-02 12:19:45', '2021-09-02 12:19:45'),
(5, 'raja', 'vel', 'rajvel@gmail.com', '9956432578', 'male', '2021-09-02', 'vel', '123', '2021-09-02 12:20:35', '2021-09-02 12:20:35'),
(6, 'sathish', 'kumar', 'kumar@gmail.com', '9556432578', 'male', '2021-09-02', 'kumar', '123', '2021-09-02 12:21:44', '2021-09-02 12:21:44'),
(7, 'kavi', 'priya', 'kavi@gmail.com', '8976666655', 'male', '2021-09-01', 'kavi', '123', '2021-09-02 16:12:37', '2021-09-02 16:12:37'),
(8, 'anish', 'lal', 'anish@gmail.com', '1234567890', 'male', '2021-09-24', 'anish@gmail.com', 'anish@gmail.com', '2021-09-02 17:03:53', '2021-09-02 17:03:53'),
(9, 'anish', 'lal', 'lal@lal.com', '1234567654', 'male', '2021-09-22', 'lal@lal.com', 'lal@lal.com', '2021-09-03 03:16:03', '2021-09-03 03:16:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friend_list`
--
ALTER TABLE `friend_list`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friend_list`
--
ALTER TABLE `friend_list`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
