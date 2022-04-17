-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 10:56 AM
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
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `newcars`
--

CREATE TABLE `newcars` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `seller` varchar(50) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newcars`
--

INSERT INTO `newcars` (`id`, `name`, `seller`, `price`, `picture`, `status`) VALUES
(1, 'Hyundai Venue 2022', 'Akib', '6.99 - 11.88 lakh', '2022_hyundai_venue_4dr-hatchback_limited_fq_oem_1_815.jpg', 'Active'),
(3, 'Nissan Kicks 2022', 'Rakib', '9.50 - 14.88 lakh', 'Nissan-Kicks-S-2022.jpg', 'Active'),
(4, 'Renault Kiger 2022', 'Sakib', '5.79 - 10.23 lakh', 'renault_kiger_2022_0000_1.jpg', 'Active'),
(5, 'Hyundai i20 2022', 'Lamia', '6.98 - 11.48 lakh', 'maxresdefault.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `oldcars`
--

CREATE TABLE `oldcars` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `seller` varchar(50) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `picture` varchar(1000) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oldcars`
--

INSERT INTO `oldcars` (`id`, `name`, `seller`, `price`, `picture`, `status`) VALUES
(1, 'Hyundai i20 2022', 'Lamia', '6.98 - 11.48 lakh', 'maxresdefault.jpg', 'Block'),
(2, 'Renault Kiger 2022', 'Sakib', '5.79 - 10.23 lakh', 'renault_kiger_2022_0000_1.jpg', 'Active'),
(4, 'Hyundai Venue 2022', 'Akib', '6.99 - 11.88 lakh', '2022_hyundai_venue_4dr-hatchback_limited_fq_oem_1_815.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Account_Type` varchar(50) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `email`, `password`, `gender`, `DOB`, `Account_Type`, `Picture`, `Status`) VALUES
('', '', '', '', '', '0000-00-00', '', '', 'Active'),
('fuad', 'a', 'shahriarmiraj116@gmail.com', '123', 'Male', '2022-04-14', 'seller', 'images.png', 'Active'),
('ABDULLAH AL MAHDI', 'Admin', 'mahdiabdullah1234@gmail.com', '123', 'Male', '2002-05-13', 'admin', 'ProfileImage.jfif', 'Active'),
('Alif', 'alif', 'sharonfs98@yahoo.com', '222', 'Male', '2002-08-12', 'seller', '267975679_492068772182508_7985739240117813611_n.jpg', 'Active'),
('mahmud', 'hm', 'shahriarmiraj116@gmail.com', '12345', 'Male', '2022-04-29', 'seller', 'abc', 'Active'),
('miraj', 'k', 'shahriarmiraj116@gmail.com', '123', 'Male', '2022-04-10', 'customer', 'abc', 'Active'),
('M', 'm', 'shahriarmiraj116@gmail.com', '1234', 'Male', '2022-04-01', 'seller', 'abc', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newcars`
--
ALTER TABLE `newcars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oldcars`
--
ALTER TABLE `oldcars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newcars`
--
ALTER TABLE `newcars`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `oldcars`
--
ALTER TABLE `oldcars`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
