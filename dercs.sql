-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 04:37 AM
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
-- Database: `dercs`
--

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `courier_id` int(11) NOT NULL,
  `courier_username` varchar(255) NOT NULL,
  `courier_name` varchar(255) NOT NULL,
  `courier_password` varchar(255) NOT NULL,
  `courier_phone` varchar(20) NOT NULL,
  `courier_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`courier_id`, `courier_username`, `courier_name`, `courier_password`, `courier_phone`, `courier_address`) VALUES
(1, 'PosLaju', 'Poslaju', 'poslaju123', '0122225402', 'UMP');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_username` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_username`, `customer_name`, `customer_password`, `customer_phone`, `customer_address`) VALUES
(1, 'mnrhsh', 'Munirah Shamsudin', 'muNirah91098#', '0163224808', 'JB8913, Taman Pahlawan Umbai, 77300 Merlimau, Melaka'),
(2, 'amiraaisha', 'Amira Aisha', 'amira1234', '0123456789', 'UMP Pekan'),
(3, 'anisj', 'Anis Julia', 'anis123', '0134301897', 'UMP Gambang');

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
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` varchar(20) NOT NULL,
  `payment_method` char(20) NOT NULL,
  `bank_type` char(50) NOT NULL,
  `payment_desc` text NOT NULL,
  `total_price` float NOT NULL,
  `payment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

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
