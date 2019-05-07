-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 07:24 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `velvee`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstName`, `lastName`, `address`, `email`, `city`, `division`, `zipcode`, `age`) VALUES
(1, 'Al', 'Amin', 'House 2 lane 9', 'amin@gamil.com', 'Comilla', 'Chittagong', '1422', 30),
(11, 'Amitav', 'Reza', 'House 2 lane 9', 'amitav@gamil.com', 'Dhaka', 'Dhaka', '1236', 18),
(6, 'Badul', 'Khan', 'House 3 lane 3', 'badul@gamil.com', 'Lalmonirhat', 'Rangpur', '1256', 35),
(4, 'MM', 'Faisal', 'House 6 lane 2', 'faisal@gamil.com', 'Moulvibazar', 'Sylhet', '1006', 25),
(2, 'Jabed', 'Hasan', 'House 1 lane 22', 'hasan@gamil.com', 'Gajipur', 'Dhaka', '1236', 40),
(8, 'Shah', 'Jamal', 'House 2 lane 8', 'jamal@gamil.com', 'Rajshahi', 'Rajshahi', '1244', 42),
(5, 'Kobir', 'Alom', 'House 9 lane 18', 'kobir@gamil.com', 'Habiganj', 'Sylhet', '1000', 18),
(7, 'Mizan', 'Khan', 'House 9 lane 16', 'mizan@gamil.com', 'Kurigram', 'Rangpur', '1256', 38),
(12, 'Nazim', 'Ullah', 'House 6 lane 2', 'nazim@gamil.com', 'Bhola', 'Borisal', '7922', 22),
(10, 'Rahat', 'Hasan', 'House 4 lane 18', 'Rahat@gamil.com', 'Netrokona', 'Mymenshingh', '8522', 26),
(3, 'Rashedul', 'Islam', 'House 8 lane 20', 'rashedul@gamil.com', 'Dhaka', 'Dhaka', '1236', 20),
(9, 'Sabbir', 'Sabat', 'House 10 lane 3', 'sabbirsabat@gamil.com', 'Madaripur', 'Dhaka', '3255', 24),
(13, 'Tanvir', 'Rifat', 'House 9 lane 18', 'tanvir@gamil.com', 'Kistia', 'Kulna', '2599', 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
