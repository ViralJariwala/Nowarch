-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 03:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arch`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `email`, `password`) VALUES
(1, 'Yashu', 'yashu@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `pid`, `uid`) VALUES
(5, 8, 1),
(8, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `cname`) VALUES
(1, 'Interior'),
(2, 'exterior'),
(3, 'architecture');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `uid`, `amount`, `status`, `pid`) VALUES
(12, 1, 9000, 1, 5),
(13, 1, 9000, 1, 5),
(14, 1, 9000, 1, 5),
(15, 1, 9000, 1, 5),
(16, 1, 9000, 1, 5),
(17, 1, 25000, 1, 15),
(18, 1, 25000, 1, 15),
(19, 1, 25000, 1, 15),
(20, 1, 25000, 1, 15),
(21, 1, 7890000, 1, 21),
(22, 1, 850000, 1, 23),
(23, 1, 850000, 1, 23),
(24, 1, 1000000, 1, 28);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` int(11) NOT NULL,
  `pname` varchar(150) NOT NULL,
  `des` varchar(500) NOT NULL,
  `address` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `file` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `pname`, `des`, `address`, `img`, `price`, `cid`, `file`) VALUES
(4, 'Vighnahar', 'This Project is about Interior Design. Here we have used very expensive materials. And here are some images of the project, The location of the project is very posh and is spread in 5000sqft.', 'Kothrud', '3.jpg', '150000', 1, 'projects.zip'),
(18, 'RJD', 'This Project is about Interior Design. Here we have used very expensive materials. And here are some images of the project, The location of the project is very posh and is spread in 8000sqft.', 'Vesu', 'vp.jpg', '1500000', 1, 'projects.zip'),
(24, 'HappyHomes', 'THIS PROJECT IS ABOUT INTERIOR DESIGN. HERE WE HAVE USED VERY EXPENSIVE MATERIALS. AND HERE ARE SOME IMAGES OF THE PROJECT, THE LOCATION OF THE PROJECT IS VERY POSH AND IS SPREAD IN 7500SQFT.', 'Parle Point', '5.jpg', '750000', 1, 'projects.zip'),
(25, 'Rajhans', 'THIS PROJECT IS ABOUT INTERIOR DESIGN. HERE WE HAVE USED VERY EXPENSIVE MATERIALS. AND HERE ARE SOME IMAGES OF THE PROJECT, THE LOCATION OF THE PROJECT IS VERY POSH AND IS SPREAD IN 6000SQFT.', 'Pal', '1.jpg', '850000', 1, 'projects.zip'),
(26, 'RKHOMES', 'THIS PROJECT IS ABOUT INTERIOR DESIGN. HERE WE HAVE USED VERY EXPENSIVE MATERIALS. AND HERE ARE SOME IMAGES OF THE PROJECT, THE LOCATION OF THE PROJECT IS VERY POSH AND IS SPREAD IN 12000SQFT.', 'Amroli', '10.jpg', '5400000', 2, 'projects.zip'),
(27, 'Raghuvir', 'THIS PROJECT IS ABOUT EXTERIOR DESIGN. HERE WE HAVE USED VERY EXPENSIVE MATERIALS. AND HERE ARE SOME IMAGES OF THE PROJECT, THE LOCATION OF THE PROJECT IS VERY POSH AND IS SPREAD IN 15000SQFT.', 'Katargam', '1.jpg', '900000', 2, 'projects.zip'),
(28, 'SanginiGroup', 'THIS PROJECT IS ABOUT ARCHITECTURE DESIGN. HERE WE HAVE USED VERY EXPENSIVE MATERIALS. AND HERE ARE SOME IMAGES OF THE PROJECT, THE LOCATION OF THE PROJECT IS VERY POSH AND IS SPREAD IN 25000SQFT.', 'Dumas', '12.jpg', '1000000', 3, 'projects.zip');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `phno`, `email`, `password`) VALUES
(1, 'yashil', '9979966965', 'yashil@gmail.com', 'yashil123'),
(5, 'nandan', '9979988988', 'nandan@gmail.com', '123'),
(6, 'shiv', '7048608848', 'shiv@gmail.com', '123'),
(7, 'Viral', '7486981727', 'viral@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `categories` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
