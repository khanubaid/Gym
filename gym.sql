-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 06:50 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `user_email`, `user_password`, `user_age`, `user_mobile`) VALUES
(13, 'khan', 'khan@gmail.com', '202cb962ac59075b964b07152d234b70', 20, '8421850871'),
(14, 'khan', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 20, '8421850871');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_isbn` int(11) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `book_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_isbn`, `book_title`, `book_author`, `book_category`) VALUES
(3, 8934, 'Android Programming', 'Farrukh', 'Programming'),
(6, 8902, 'Intro to Psychology', 'Ayesha', 'Psychology'),
(7, 2345, 'Calculus-1', 'John doe', 'Math'),
(8, 8927, 'Chemistry Part-1', 'Aliza Mam', 'Chemistry'),
(9, 6723, 'Math Part-1', 'Sir Sohail Amanat', 'Math'),
(10, 1212, 'khan', 'Ubaid', 'Development');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_time` time NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `class_tranir` varchar(50) NOT NULL,
  `class_member` varchar(11) NOT NULL,
  `class_info` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_age` int(11) NOT NULL,
  `height` varchar(5) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `date` datetime NOT NULL,
  `DOB` date NOT NULL,
  `user_mobile` varchar(11) NOT NULL,
  `trainer_member` varchar(10) DEFAULT NULL,
  `isDeleted` tinyint(4) NOT NULL,
  `roleId` tinyint(4) NOT NULL,
  `class_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_age`, `height`, `weight`, `date`, `DOB`, `user_mobile`, `trainer_member`, `isDeleted`, `roleId`, `class_name`) VALUES
(59, 'pre', 'pre@gmail.com', '202cb962ac59075b964b07152d234b70', 20, '', '', '0000-00-00 00:00:00', '0000-00-00', '8421850871', 'Member', 0, 0, 'Helth'),
(60, 'abc', 'abc@gmail.com', '202cb962ac59075b964b07152d234b70', 20, 'NO', 'NO', '0000-00-00 00:00:00', '0000-00-00', '90273233', 'Trainer', 0, 0, ''),
(61, 'uvw', 'uvw@gmail.com', '202cb962ac59075b964b07152d234b70', 20, '', '', '0000-00-00 00:00:00', '0000-00-00', '8421850871', 'Member', 0, 0, 'Helth'),
(62, 'sij', 'sij@gmail.com', '202cb962ac59075b964b07152d234b70', 20, 'NO', 'NO', '0000-00-00 00:00:00', '0000-00-00', '90273233', 'Trainer', 0, 0, ''),
(63, 'klm', 'klm@gmail.com', '202cb962ac59075b964b07152d234b70', 20, '', '', '0000-00-00 00:00:00', '0000-00-00', '8421850871', 'Member', 0, 0, 'Helth'),
(64, 'mno', 'mno@gmail.com', '202cb962ac59075b964b07152d234b70', 20, 'NO', 'NO', '0000-00-00 00:00:00', '0000-00-00', '90273233', 'Trainer', 0, 0, ''),
(65, 'pqr', 'pqr@gmail.com', '202cb962ac59075b964b07152d234b70', 20, '', '', '0000-00-00 00:00:00', '0000-00-00', '8421850871', 'Member', 0, 0, 'Helth'),
(66, 'Ubaid', 'ubaid@gmail.com', '', 0, '', '', '0000-00-00 00:00:00', '0000-00-00', '', 'Member', 0, 0, 'Health'),
(67, 'khan', 'khan@gmail.com', '', 0, '', '', '0000-00-00 00:00:00', '0000-00-00', '', 'Trainer', 0, 0, 'Health'),
(68, 'admin', 'admin@gmail.com', '', 0, '', '', '0000-00-00 00:00:00', '0000-00-00', '', 'Member', 0, 0, ''),
(69, 'Member', 'Member@gmail.com', '', 0, '', '', '0000-00-00 00:00:00', '0000-00-00', '', 'Member', 0, 0, 'Helth'),
(70, 'abdullah', 'abdullah@gmail.com', '', 0, '', '', '0000-00-00 00:00:00', '0000-00-00', '', 'Treanir', 0, 0, 'Helth'),
(73, 'xyz', 'xyz@gmail.com', '', 0, '', '', '0000-00-00 00:00:00', '0000-00-00', '', 'Member', 0, 0, 'Helth'),
(76, 'jagdish', 'jagdish@gmail.com', '', 0, '', '', '0000-00-00 00:00:00', '0000-00-00', '', 'Member', 0, 0, 'CA'),
(77, 'Ubaid', 'Ubaid@gmail.com', '', 0, '', '', '0000-00-00 00:00:00', '0000-00-00', '', 'Trainer', 0, 0, 'CA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
