-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 07:03 AM
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
(38, 7, 5),
(39, 9, 4),
(40, 8, 3),
(41, 13, 5),
(42, 11, 4),
(43, 11, 5),
(44, 10, 3),
(45, 14, 5),
(46, 15, 3),
(47, 16, 1),
(48, 17, 2),
(49, 13, 2),
(50, 14, 4),
(51, 16, 5),
(52, 15, 5),
(53, 17, 5),
(54, 15, 1),
(55, 16, 5),
(56, 16, 1),
(57, 14, 5),
(58, 17, 5),
(59, 13, 5),
(60, 13, 1);

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
  `restag` varchar(30) DEFAULT NULL,
  `items` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addrestaurant`
--

INSERT INTO `addrestaurant` (`id`, `username`, `resname`, `resadd`, `rescity`, `restag`, `items`) VALUES
(8, 'kamal', 'Ninety Nine', 'Bashundhara Residential Area', 'Dhaka', 'Quality is our best priority ', 'rice,beef'),
(9, 'helal', 'La Italiano', 'Kin Bridge', 'Sylhet', 'Only eat', 'steak,fry'),
(10, 'ramiz', 'Cafe Zero', 'Bashundhara Residential Area', 'Dhaka', 'Best Cafe', 'rares,hsdf'),
(11, 'faiza', 'Ola Herase', 'Bashundhara Residential Area', 'Dhaka', 'Different taste', 'Coffe,capachino,alabeno'),
(13, 'zamil', 'De Alpanio', 'CK Ghosh Road', 'Mymensingh', 'Try new thing', 'Coffe,capachino,istamena'),
(14, 'rashed', 'Rashed Food', 'Dhanmondi', 'Dhaka', 'Best is Best', 'rice,chicken'),
(15, 'kader', 'Meal Deal', 'Santinogor', 'Dhaka', 'Khaooooo', 'rice,chicken,vegetable'),
(16, 'hamid', 'Khana Pina', 'Malibag', 'Dhaka', 'Best food serve always', 'rice,chicken,vegetable,fish'),
(17, 'zashim', 'Bela Food', 'Bashundhara Residential Area', 'Dhaka', 'Best food ever', 'singara,puri,shamucha');

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
(10, 7, 'pranto', 'GOOD'),
(11, 8, 'pranto', 'One of the best restaurant ever'),
(12, 9, 'oli', 'goo food'),
(13, 8, 'oli', 'good food'),
(14, 13, 'pranto', 'yes'),
(15, 11, 'pranto', ' nbfg'),
(16, 16, 'pranto', 'good food'),
(17, 17, 'pranto', 'good food'),
(18, 16, 'pranto', 'Best Food'),
(19, 17, 'pranto', 'good'),
(20, 13, 'pranto', 'go'),
(21, 13, 'pranto', 'ji'),
(22, 14, 'pranto', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `profileimage`
--

CREATE TABLE `profileimage` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `level` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profileimage`
--

INSERT INTO `profileimage` (`id`, `username`, `level`, `name`) VALUES
(2, 'pranto', 1, '5987e6d51d24ac8a051140a5fb6e4c14.jpg'),
(5, 'oli', 1, '13f4dee99b7e3946e6aca3ba3a0ce8c8.jpg'),
(10, 'zamil', 2, 'a3e1b0b9388473b2ac411f5d620b3d7b.jpg'),
(11, 'kamal', 2, '105ecc2b42c5d5fa5b0b0fd35c24bcf4.jpg'),
(12, 'helal', 2, '39184a14f9795496a476411d83b6ed8a.jpg'),
(13, 'ramiz', 2, NULL),
(14, 'faiza', 2, NULL),
(15, 'rashed', 2, '75a3f728faa050d57a5803b85c55b8ae.jpg'),
(16, 'kader', 2, NULL),
(17, 'hamid', 2, NULL),
(18, 'zashim', 2, NULL);

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
(7, 'kamal', 'cedbfc4d16ffb19903f20d5679e83d79.jpg'),
(8, 'helal', 'd2a102bc085f831fd71e8c68ab912e59.jpg'),
(9, 'ramiz', '2ce378b46364eeb55b32d1d8c0086423.jpg'),
(10, 'faiza', '2b7d4030e000d4e0a4ad5316286cdc81.jpg'),
(12, 'zamil', '4398f1a938c61e8ca19810c84d282c8d.jpg'),
(13, 'rashed', 'f64c5904566cbde517a28b28ac0be7db.jpg'),
(14, 'kader', '2d87b8cc748dbc99b8f0eb52f079b0f5.jpg'),
(15, 'hamid', 'df9f496655009aa210a7b36dc54284e7.jpg'),
(16, 'zashim', 'ccf06c4c2939b3530422233ae88b3080.jpg');

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
(1, 'Md. Abu Horyra', 'Pranto', 'pranto', 'mahpranto@outlook.com', 'pranto', 1),
(7, 'Oli', 'Ullah', 'oli', 'oli@gmail.com', 'olo', 1),
(8, 'Zamil', 'Hossain', 'zamil', 'zamil@outlook.com', 'ZAMIL', 2),
(9, 'Kamal', 'Ahmed', 'kamal', 'kamal@gmail.com', 'kamal', 2),
(10, 'Khan', 'Helal', 'helal', 'helal@gmail.com', 'helal', 2),
(11, 'Ramiz', 'reza', 'ramiz', 'ramiz@gmail.com', 'ramiz', 2),
(12, 'Fahmida', 'Faiza', 'faiza', 'faiza@gmail.com', 'faiza', 2),
(13, 'Rashed', 'Khan', 'rashed', 'rashed@gmail.com', 'rashed', 2),
(14, 'Kader', 'Hamid', 'kader', 'kader@gmail.com', 'kader', 2),
(15, 'Hamid', 'Uddin', 'hamid', 'hamid@gmail.com', 'hamid', 2),
(16, 'Zashim', 'Sheikh', 'zashim', 'zashim@gmail.com', 'zashim', 2);

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
-- Indexes for table `profileimage`
--
ALTER TABLE `profileimage`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `addrestaurant`
--
ALTER TABLE `addrestaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `profileimage`
--
ALTER TABLE `profileimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `restaurantimage`
--
ALTER TABLE `restaurantimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
