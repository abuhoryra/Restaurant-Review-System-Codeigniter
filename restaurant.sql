-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 09:06 PM
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
(60, 13, 1),
(61, 17, 5),
(62, 16, 5),
(63, 16, 5),
(64, 14, 5),
(65, 16, 5),
(66, 16, 1),
(67, 16, 5),
(68, 15, 5),
(69, 14, 5),
(70, 16, 5),
(71, 15, 5),
(72, 16, 5),
(73, 15, 5),
(74, 16, 5),
(75, 15, 5),
(76, 16, 5),
(77, 16, 5),
(78, 15, 5),
(79, 15, 5),
(80, 16, 5),
(81, 16, 5),
(82, 15, 5),
(83, 15, 5),
(84, 16, 5),
(85, 14, 5),
(86, 16, 5),
(87, 16, 5),
(88, 15, 5),
(89, 15, 5),
(90, 15, 5),
(91, 14, 5),
(92, 14, 5),
(93, 14, 5),
(94, 14, 5),
(95, 14, 5),
(96, 14, 5),
(97, 14, 5),
(98, 14, 5),
(99, 14, 5),
(100, 16, 5),
(101, 15, 5),
(102, 16, 5),
(103, 15, 5),
(104, 16, 5),
(105, 17, 5),
(106, 17, 5),
(107, 16, 5),
(108, 16, 1),
(109, 17, 5),
(110, 16, 5),
(111, 16, 5),
(112, 16, 5),
(113, 16, 5),
(114, 16, 1),
(115, 16, 5),
(116, 16, 5),
(117, 10, 5),
(118, 10, 1);

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
(17, 'zashim', 'Bela Food', 'Bashundhara Residential Area', 'Dhaka', 'Best food ever', 'singara,puri,shamucha'),
(19, 'rabbi', 'Food Ninja', 'Baridhara', 'Dhaka', 'Served Best Food', 'Chicken Fry,Pasta,French Fry');

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
(22, 14, 'pranto', 'good'),
(23, 16, 'farid', 'eee'),
(24, 16, 'farid', 'wow'),
(25, 16, 'farid', 'wow'),
(26, 16, 'farid', 'wow'),
(27, 16, 'farid', 'wow'),
(28, 16, 'farid', 'wow'),
(29, 16, 'farid', 'wow'),
(30, 16, 'farid', 'wow'),
(31, 16, 'farid', 'wow'),
(32, 16, 'farid', 'wow'),
(33, 16, 'farid', 'wow'),
(34, 16, 'farid', 'wow'),
(35, 16, 'farid', 'good food ever');

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
(2, 'pranto', 1, '2336153a759896106238cc9545313931.jpg'),
(5, 'oli', 1, NULL),
(10, 'zamil', 2, NULL),
(11, 'kamal', 2, NULL),
(12, 'helal', 2, NULL),
(13, 'ramiz', 2, NULL),
(14, 'faiza', 2, NULL),
(15, 'rashed', 2, NULL),
(16, 'kader', 2, NULL),
(17, 'hamid', 2, NULL),
(18, 'zashim', 2, 'd6ab7b803879adfd3f482ae07b242c03.jpg'),
(19, 'ashraf', 1, '40a6681ca4fab94bf9c1e00d7a6f02ef.jpg'),
(20, 'naqib', 1, NULL),
(21, 'farid', 1, 'b2bef117d3f5c27354bf83d02f70402e.jpg'),
(22, 'fuad', 2, 'fdf4ab70002866010ba625f51fc3c4c1.jpg'),
(24, 'Rabbi', 2, 'd8351d464703fd2ad285a4bde3803ab4.jpg');

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
(18, 'zamil', '48ee1e09fe48840d77d7b5e80c056e8a.jpg'),
(19, 'kamal', '13635e410f94a360c130d00d26c4fb13.jpg'),
(20, 'helal', '349489d49d7549c8c13b2d7497284da3.jpg'),
(21, 'ramiz', '93fe65f1fbec6ec801abea30c041c8a6.jpg'),
(22, 'faiza', '40fdacfeae83ce50724b2a84cf9c4a3b.jpg'),
(23, 'rashed', 'd21782df5c125117ba336fd655775c55.jpg'),
(24, 'kader', '79ec5c4cd0ef735888af703859f44b7d.jpg'),
(25, 'hamid', '493dd16becc7b1944009d6d0374916ec.jpg'),
(26, 'zashim', 'e3941d50fe9ea9ba1714276cd5a5aba8.jpg'),
(27, 'rabbi', '1b6938fb48b0d2ff499d0eaa98505638.jpg');

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
  `password` varchar(100) NOT NULL,
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
(16, 'Zashim', 'Sheikh', 'zashim', 'zashim@gmail.com', 'zashim', 2),
(17, 'Ashrad', 'Uddin', 'ashraf', 'ashraf@gmail.com', 'ashraf', 1),
(19, 'Farid', 'Ahmed', 'farid', 'farid@gmail.com', '$2y$10$AavlJQjlzklo0juIGbE4j.9xC9QkKAbwqOB3I/B9BuV3qK.wG70Z2', 1),
(21, 'Fuad', 'Ahmed', 'fuad', 'fuad@gmail.com', '$2y$10$S9yDTUBPhrvndhLwNcIHfuvTEI00Un9gQCvPU7XiUzJQ5ayfKB44.', 2),
(23, 'Rabbi', 'Ahmed', 'rabbi', 'rabbi@gmail.com', '$2y$10$rLpJ7A7ypeDc1mTBEViRDudFm8./IrTuyXF2kLbCeQW4WSnNNxPt6', 2);

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
  ADD KEY `password` (`password`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addrating`
--
ALTER TABLE `addrating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `addrestaurant`
--
ALTER TABLE `addrestaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `profileimage`
--
ALTER TABLE `profileimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `restaurantimage`
--
ALTER TABLE `restaurantimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
