-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2020 at 10:42 PM
-- Server version: 5.7.28-0ubuntu0.16.04.2
-- PHP Version: 7.0.33-0ubuntu0.16.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `henicki_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `phone`, `name`) VALUES
(1, 'raniatukad', '$2y$10$xj2UEBdbpox3FnF.v2xCBOIVn/QUQiiUOOBlFGOeptwMJGCcx.fPK', '73010495', 'Raniatu');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `manager` varchar(30) NOT NULL DEFAULT 'Manager',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='managers accounts';

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `username`, `password`, `email`, `name`, `phone`, `manager`, `added`) VALUES
(1, 'raniatukrn', '$2y$10$82m8FDrlDpe6yUGbd1PIzumsIIPZ/Xr7DxhfUdY94Y5OeiTrTIRGu', 'teitiak2003@gmail.com', 'Raniatu', '73010495', 'Manager', '2019-12-14 01:19:26'),


-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `stafflevel` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT 'Staff',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`, `phone`, `name`, `stafflevel`, `added`) VALUES
(1, 'raniatukhj', '$2y$10$Rrs09/gbaxEgpAvDOHTigecaCYlhbtqKslt1posbWZ.hQE3wMqLje', '73010495', 'Raniatu', 'Staff', '2019-12-25 10:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `supplier` varchar(20) CHARACTER SET utf8 NOT NULL,
  `product` varchar(100) CHARACTER SET utf8 NOT NULL,
  `quantity` varchar(30) CHARACTER SET utf8 NOT NULL,
  `original_price` varchar(30) CHARACTER SET utf8 NOT NULL,
  `selling_price` varchar(30) CHARACTER SET utf8 NOT NULL,
  `wholesale_price` varchar(30) CHARACTER SET utf8 NOT NULL,
  `quantity_out` varchar(30) CHARACTER SET utf8 NOT NULL,
  `out_branch` varchar(30) CHARACTER SET utf8 NOT NULL,
  `super_mall` varchar(30) CHARACTER SET utf8 NOT NULL,
  `teaoraereke` varchar(30) CHARACTER SET utf8 NOT NULL,
  `teaoraereke2` varchar(30) CHARACTER SET utf8 NOT NULL,
  `abemama` varchar(30) CHARACTER SET utf8 NOT NULL,
  `available_quantity` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `supplier`, `product`, `quantity`, `original_price`, `selling_price`, `wholesale_price`, `quantity_out`, `out_branch`, `super_mall`, `teaoraereke`, `teaoraereke2`, `abemama`, `available_quantity`) VALUES
(1, 'Phantom.inc', 'Code', '00', '00', '00', '00', '', 'Not yet taken', 'Not delivered', 'Not delivered', '', 'Not delivered', 'As quantity'),

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`name`) VALUES
('Henicki Enterprises');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(80) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `age` int(2) DEFAULT NULL,
  `salary` int(10) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--
--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
