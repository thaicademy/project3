-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2022 at 06:19 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsunday`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

CREATE TABLE `tbl_blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `detail` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`id`, `title`, `detail`, `img`) VALUES
(1, 'testy', 'testest', './images/blogs/302317217_5496601157064754_6765919266768467945_n.jpg'),
(2, 'test', 'test', './images/blogs/messageImage_1663138618479.jpg'),
(3, 'ทดสอบ', 'ทดสอบระบบ', './images/blogs/messageImage_1663138618479.jpg'),
(4, 'vhj', 'hgvjhgvj', './images/blogs/302317217_5496601157064754_6765919266768467945_n.jpg'),
(5, 'bjkbj', 'kbjkbk', './images/blogs/302317217_5496601157064754_6765919266768467945_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `photo` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `cat_name`, `photo`) VALUES
(1, 'อุปโภค', ''),
(2, 'บริโภค', ''),
(3, 'xfgcfgfcx', ''),
(4, 'test', 'messageImage_1663138618479.jpg'),
(5, 'cghgfh', './images/category/messageImage_1663138618479.jpg'),
(6, 'jkjnkjb', './images/category/messageImage_1663138618479.jpg'),
(7, 'jkjnkjb', './images/category/messageImage_1663138618479.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `id` int(11) NOT NULL,
  `course` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `unit` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `teacher` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `stock` int(10) NOT NULL,
  `price` float NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cat_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `title`, `stock`, `price`, `description`, `cat_name`, `img`) VALUES
(6, 'Test', 20, 100, ' test', 'อุปโภค', './images/products/messageImage_1663138618479.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `firstname`, `lastname`, `email`, `password`, `address`) VALUES
(2, 'สมเกียรติ', 'ิ้่้ิใจดี', 'eleclabs@gmail.com', '1234', 'กทม'),
(3, 'Somkiat', 'Jaidee', 'eleclabs@gmail.com', '1234', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webboard`
--

CREATE TABLE `tbl_webboard` (
  `id` int(5) NOT NULL,
  `title` varchar(200) COLLATE utf8_bin NOT NULL,
  `detail` text COLLATE utf8_bin NOT NULL,
  `photo` varchar(100) COLLATE utf8_bin NOT NULL,
  `user` varchar(50) COLLATE utf8_bin NOT NULL,
  `dmy` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_webboard`
--
ALTER TABLE `tbl_webboard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_webboard`
--
ALTER TABLE `tbl_webboard`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
