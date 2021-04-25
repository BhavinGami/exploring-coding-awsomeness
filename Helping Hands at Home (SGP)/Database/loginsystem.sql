-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 06:11 PM
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
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(3) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pno` int(10) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `address` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `uname`, `pno`, `pwd`, `address`) VALUES
(1, 'poojan', 999999999, '0000', '101-Rajkot'),
(3, '', 8888888, '', ''),
(4, '', 88888888, '', ''),
(5, '', 97878787, '', ''),
(6, '', 97878787, '', ''),
(7, '', 222222, '', ''),
(8, '', 0, '', ''),
(10, '', 77777, '', '202 Tokio'),
(11, '', 4444, '', '108-Rajkot'),
(12, '', 9999999, '', '258 Abd'),
(13, 'admin', 9999999, '', '102-karachi'),
(14, '', 88888888, '0000', '102 rjk'),
(15, '', 88888888, '0000', '102 rjk'),
(16, '', 88888888, '0000', '102 rjk'),
(17, 'admin', 88888888, '0000', '108-kota'),
(18, 'Mad', 88888888, '85269', '508 Raj'),
(19, 'pak', 8459, '0000', '109 Boston'),
(20, 'Bhavin', 85858585, '2211', '102 Karachi'),
(21, 'parth', 2147483647, '2222', '102- Rugnathpur'),
(22, 'chintan', 2147483647, '2222', '108- Rugnathpur');

-- --------------------------------------------------------

--
-- Table structure for table `manage_service`
--

CREATE TABLE `manage_service` (
  `sid` int(5) NOT NULL,
  `service` varchar(50) NOT NULL,
  `cost` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_service`
--

INSERT INTO `manage_service` (`sid`, `service`, `cost`) VALUES
(1, 'Hair Cut', '100'),
(2, 'Beard Shaving', '70'),
(3, 'Haircut + Beardshaving', '150'),
(4, 'AC Service', '300'),
(5, 'AC Repair', '0'),
(6, 'Car Cleaning', '200'),
(7, 'Bike Cleaning', '100'),
(8, 'Water Purifier Service', '200'),
(9, 'AC Installation', '1500'),
(10, 'Water Purifier Installation', '500'),
(11, 'Water Purifier Repair', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contactno`) VALUES
(9, 'gdfsdfg', 'wsxcde', 'ghfgfghf@gmail.com', 'Test@123', '21222222');

-- --------------------------------------------------------

--
-- Table structure for table `user_service`
--

CREATE TABLE `user_service` (
  `ucon` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `sname` int(2) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_service`
--

INSERT INTO `user_service` (`ucon`, `uname`, `sname`, `address`, `date`, `time`) VALUES
(2147483647, '0', 1, '102', '2021-04-23', '01:41:00'),
(2147483647, '0', 1, '102', '2021-04-23', '01:41:00'),
(0, '', 1, '', '2021-04-24', '23:50:00'),
(2147483647, 'Poojan', 1, '102 - Rajkot', '2021-04-16', '23:50:00'),
(2147483647, 'Poojan', 1, '102 - Rajkot', '2021-04-16', '23:50:00'),
(2147483647, 'Bhavin', 1, '205 - Bhuj', '2021-04-23', '04:48:00'),
(999999999, 'poojan', 4, '101-Rajkot', '2021-04-24', '10:29:00'),
(999999999, 'poojan', 4, '101-Rajkot', '2021-04-24', '10:29:00'),
(999999999, 'poojan', 4, '101-Rajkot', '2021-04-24', '10:29:00'),
(999999999, 'poojan', 4, '101-Rajkot', '2021-04-24', '10:29:00'),
(999999999, 'poojan', 4, '101-Rajkot', '2021-04-24', '10:29:00'),
(999999999, 'poojan', 4, '101-Rajkot', '2021-04-24', '10:29:00'),
(999999999, 'poojan', 10, '101-Rajkot', '2021-04-24', '13:46:00'),
(999999999, 'poojan', 10, '101-Rajkot', '2021-04-24', '13:46:00'),
(999999999, 'poojan', 8, '101-Rajkot', '2021-04-22', '14:47:00'),
(999999999, 'poojan', 0, '101-Rajkot', '0000-00-00', '00:00:00'),
(999999999, 'rahul', 4, '101-Rajkot', '2021-04-25', '14:05:00'),
(999999999, 'poojan', 10, '101-Rajkot', '2021-04-25', '15:53:00'),
(999999999, 'poojan', 4, '101-Rajkot', '2021-04-25', '13:08:00'),
(999999999, 'poojan', 10, '101-Rajkot', '2021-04-25', '01:24:00'),
(999999999, 'poojan', 4, '101-Rajkot', '2021-04-25', '02:28:00'),
(999999999, 'poojan', 4, '101-Rajkot', '2021-04-25', '02:28:00'),
(999999999, 'poojan', 4, '101-Rajkot', '2021-04-25', '02:34:00'),
(999999999, 'poojan', 4, '101-Rajkot', '2021-04-25', '02:37:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_service`
--
ALTER TABLE `manage_service`
  ADD PRIMARY KEY (`sid`);

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
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `manage_service`
--
ALTER TABLE `manage_service`
  MODIFY `sid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
