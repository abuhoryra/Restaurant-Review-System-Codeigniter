-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 09:50 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `addrating`
--

CREATE TABLE `addrating` (
  `id` int(11) NOT NULL,
  `resid` int(10) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addrating`
--

INSERT INTO `addrating` (`id`, `resid`, `rating`) VALUES
(5, 3, 1),
(6, 3, 5),
(7, 3, 4),
(8, 3, 3),
(9, 3, 2),
(10, 3, 1),
(11, 4, 2),
(12, 4, 5),
(13, 4, 1),
(14, 4, 3),
(15, 3, 5),
(16, 3, 1),
(17, 4, 5),
(18, 5, 1),
(19, 5, 5),
(20, 4, 5),
(21, 4, 5),
(22, 5, 5),
(23, 3, 5),
(24, 4, 5),
(25, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `addrestaurant`
--

CREATE TABLE `addrestaurant` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `resname` varchar(30) NOT NULL,
  `resadd` varchar(30) NOT NULL,
  `rescity` varchar(30) NOT NULL,
  `restag` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addrestaurant`
--

INSERT INTO `addrestaurant` (`id`, `username`, `resname`, `resadd`, `rescity`, `restag`) VALUES
(3, 'zamil', 'De Alpanio', 'Bashundhara Residential Area', 'Dhaka', 'Quality is our best priority '),
(4, 'kamal', 'Ninety Nine', 'Bashundhara Residential Area', 'Dhaka', 'Quality food'),
(5, 'rakib', 'La Italiano', 'Bashundhara Residential Area', 'Dhaka', 'Best food');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `resid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `resid`, `username`, `comment`) VALUES
(1, 3, 'pranto', 'This i a good restaurant.'),
(2, 5, 'pranto', 'One of the best.'),
(3, 4, 'pranto', 'Much better than other in town.');

-- --------------------------------------------------------

--
-- Table structure for table `restaurantimage`
--

CREATE TABLE `restaurantimage` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurantimage`
--

INSERT INTO `restaurantimage` (`id`, `username`, `name`) VALUES
(2, 'zamil', '7a78acf88794a1c1c80b829279fbf228.jpg'),
(3, 'kamal', 'd4737ab7dfa488d20d185088e085e4ce.jpg'),
(4, 'rakib', 'c308aa8b82be749fe12dc9b63612c087.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `level`) VALUES
(1, 'Md. Abu', 'Pranto', 'pranto', 'mahpranto@outlook.com', 'pranto', 1),
(2, 'Zamil', 'Hassan', 'zamil', 'zamil@gmail.com', 'zamil', 2),
(3, 'Kamal', 'Ahmed', 'kamal', 'kamal@gmail.com', 'kamal', 2),
(4, 'Rakib', 'Hossain', 'rakib', 'rakib@gmail.com', 'rakib', 2),
(5, 'Shakib', 'Rahman', 'shakib', 'shakib@gmail.com', 'shakib', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addrating`
--
ALTER TABLE `addrating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addrestaurant`
--
ALTER TABLE `addrestaurant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurantimage`
--
ALTER TABLE `restaurantimage`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addrating`
--
ALTER TABLE `addrating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `addrestaurant`
--
ALTER TABLE `addrestaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `restaurantimage`
--
ALTER TABLE `restaurantimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
