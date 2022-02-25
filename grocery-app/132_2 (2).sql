-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 09:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `132/2`
--

-- --------------------------------------------------------

--
-- Table structure for table `groceries`
--

CREATE TABLE `groceries` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `date` date NOT NULL,
  `nameofthestore` varchar(40) NOT NULL,
  `amount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groceries`
--

INSERT INTO `groceries` (`id`, `uid`, `date`, `nameofthestore`, `amount`) VALUES
(1, 1, '2021-08-17', 'Kinmel Bazar', '11.69'),
(2, 1, '2021-08-27', 'ALDI', '60.00'),
(3, 1, '2021-08-20', 'Kinmel Bazar', '20.00'),
(4, 1, '2021-08-22', 'BINAS MOMO', '60.00'),
(5, 1, '2021-09-03', 'Sunshine Fruit', '12.00'),
(6, 1, '2021-08-28', 'Woolies Auburn', '24.95'),
(7, 2, '2021-08-23', 'rice and dice spice', '8.70'),
(8, 1, '2021-09-08', 'Hong FU JHI', '60.00'),
(9, 2, '2021-08-27', 'kinmel store', '42.76'),
(10, 1, '2021-09-23', 'Harris Park', '20.00'),
(11, 1, '2021-09-24', 'Kinmel Bazar', '65.00'),
(12, 1, '2021-10-10', 'Desi Kasai', '40.49'),
(13, 2, '2021-08-27', 'manakamana ', '4.99'),
(14, 1, '0001-01-01', 'Woolies Auburn', '47.00'),
(15, 2, '2021-08-27', 'manakamana ', '22.98'),
(16, 1, '2021-10-14', 'Khasi Bhuttan', '15.00'),
(17, 2, '2021-09-04', 'kinmel store', '29.58'),
(18, 1, '2021-10-22', 'B for Butchery', '33.25'),
(19, 2, '2021-09-07', 'auburn sea food', '14.30'),
(20, 1, '2021-10-27', 'Woolies Auburn', '22.30'),
(21, 2, '2021-09-07', 'auburn sea food', '5.40'),
(22, 2, '2021-09-17', 'woolworths', '33.74'),
(23, 2, '2021-09-24', 'Aldi', '53.45'),
(24, 2, '2021-09-24', 'Aldi', '53.45'),
(25, 2, '2021-09-28', 'auburn fresh mart', '10.15'),
(26, 2, '2021-10-04', 'woolworths', '50.18'),
(27, 2, '2021-10-05', 'woolworths', '36.00'),
(28, 2, '2021-10-08', 'woolworths', '32.02'),
(29, 2, '2021-10-08', 'kinmel store', '33.68'),
(30, 2, '2021-10-10', 'rawson supermarket', '14.47'),
(31, 2, '2021-10-14', 'manakamana ', '20.99'),
(32, 2, '2021-10-14', 'kinmel store', '22.49'),
(33, 2, '2021-10-30', 'woolworths', '55.80'),
(34, 3, '2021-09-02', 'woolies', '17.27'),
(35, 3, '2021-09-06', 'Aldi', '70.45'),
(36, 3, '2021-09-05', 'kinmel', '27.00'),
(37, 3, '2021-09-10', 'shivam', '68.95'),
(38, 3, '2021-09-10', 'rawson', '22.00'),
(39, 3, '2021-09-15', 'woolies', '30.07'),
(40, 3, '2021-09-28', 'woolies', '25.58'),
(41, 3, '2021-10-21', 'woolies', '26.05'),
(42, 3, '2021-10-22', 'woolies', '50.75'),
(43, 1, '2021-11-03', 'Kinmel Bazar', '11.00'),
(44, 4, '2021-09-23', 'Rawson Supermarket', '15.67'),
(45, 4, '2021-10-05', 'Wollies Auburn', '18.40'),
(46, 4, '2021-10-10', 'Wollies Auburn', '18.95'),
(47, 4, '2021-10-12', 'Wollies', '112.13'),
(48, 4, '2021-10-26', 'Harris park handy mart', '41.00'),
(49, 4, '2021-10-26', 'Rawson Supermarket', '11.50'),
(50, 4, '2021-10-28', 'Auburn fresh mart', '4.94'),
(51, 4, '2021-10-28', 'Sunshine fruit', '12.00');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `password`) VALUES
(1, 'Atul', '$2y$10$2zG2Y7R6ITOo09heX6Q2nO4KvfPfAGCcFvbzEj7.KuiaVAQmbfvEO'),
(2, 'Mamta', '$2y$10$2zG2Y7R6ITOo09heX6Q2nO4KvfPfAGCcFvbzEj7.KuiaVAQmbfvEO'),
(3, 'Asis', '$2y$10$RM/zIfvZq8AhHisbbWAq3eh2rG4jmZ8SNsFl4KAd9JLo3dgtHqewy'),
(4, 'Roshan', '$2y$10$RM/zIfvZq8AhHisbbWAq3eh2rG4jmZ8SNsFl4KAd9JLo3dgtHqewy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groceries`
--
ALTER TABLE `groceries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groceries`
--
ALTER TABLE `groceries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
