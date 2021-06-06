-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 11:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dercs`
--

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `device_id` int(11) NOT NULL,
  `device_type` text NOT NULL,
  `device_model` text NOT NULL,
  `serialNo` varchar(20) NOT NULL,
  `device_os` text NOT NULL,
  `damage_type` text NOT NULL,
  `damage_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`device_id`, `device_type`, `device_model`, `serialNo`, `device_os`, `damage_type`, `damage_desc`) VALUES
(1, 'on', 'Acer', '6714H-001-004HB', 'on', '', ''),
(2, 'Laptop', 'Acer', '6714H-001-004HB', 'Windows', '', ''),
(3, 'Laptop', 'MacBook', 'TG710-00-11', 'Mac OS', '', ''),
(4, 'Laptop', 'Acer', '6714H-001-004HB', 'Windows', 'virus', 'I dont have antivirus installed in my laptop and my files deleted themselves'),
(5, 'Laptop', 'Acer', '6714H-001-004HB', 'Windows', 'Hardware Repairs', 'My laptop screen went blank after sleep mode'),
(6, 'Desktop Computer', 'MacBook', 'TG710-00-11', 'Mac OS', 'Virus Removal', 'Files deleted without noticing '),
(7, 'Desktop Computer', 'Acer', 'TG710-00-11', 'Windows', 'Virus Removal', 'Files deleted without notice'),
(8, 'Laptop', 'Acer', '6714H-001-004HB', 'Windows', 'Data Recovery & Backup', 'I wanted to reset my laptop but I am afraid that I might lose any files'),
(9, 'Desktop Computer', 'MacBook', '6714H-001-004HB', 'Windows', 'Virus Removal', 'Remove Virus from computer'),
(10, 'Desktop Computer', 'asdasd', 'asdasdas', 'Windows', 'Data Recovery & Backup', 'asdasdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `pickupdelivery`
--

CREATE TABLE `pickupdelivery` (
  `delivery_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `courier_id` int(11) NOT NULL,
  `delivery_type` text NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_time` text NOT NULL,
  `delivery_address` text NOT NULL,
  `delivery_note` text NOT NULL,
  `delivery_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `repair_status`
--

CREATE TABLE `repair_status` (
  `repair_id` int(11) NOT NULL,
  `repair_quotation_id` int(11) NOT NULL,
  `job_performed` varchar(50) NOT NULL,
  `job_price` float NOT NULL,
  `repair_cost` float NOT NULL,
  `repair_status` varchar(20) NOT NULL,
  `repair_details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repair_status`
--

INSERT INTO `repair_status` (`repair_id`, `repair_quotation_id`, `job_performed`, `job_price`, `repair_cost`, `repair_status`, `repair_details`) VALUES
(1, 232, 'sasdsda', 12312, 232323, 'adasda', 'hjfghfgh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`device_id`);

--
-- Indexes for table `pickupdelivery`
--
ALTER TABLE `pickupdelivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `repair_status`
--
ALTER TABLE `repair_status`
  ADD PRIMARY KEY (`repair_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `device_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pickupdelivery`
--
ALTER TABLE `pickupdelivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
