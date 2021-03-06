-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 05:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

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
  `damage_desc` text NOT NULL,
  `customer_id` int(11) NOT NULL,
  `request_status` tinyint(1) NOT NULL,
  `request_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `estimate_price` double NOT NULL,
  `quotation_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`device_id`, `device_type`, `device_model`, `serialNo`, `device_os`, `damage_type`, `damage_desc`, `customer_id`, `request_status`, `request_date`, `estimate_price`, `quotation_status`) VALUES
(111, 'Laptop', 'MacBook', 'MCP-01-001-A', 'Windows', 'Hardware Repairs', 'Screen cracked', 1, 1, '2021-06-10 20:57:27', 30, 1),
(113, 'Desktop Computer', 'ss', 'ss', 'Windows', 'Data Recovery & Backup', 'ss', 3, 1, '2021-06-11 18:22:38', 150, 1),
(114, 'Desktop Computer', 'ss', 'ss', 'Windows', 'Hardware Repairs', 'xxx', 3, 1, '2021-06-12 01:49:43', 150, 1),
(115, 'Desktop Computer', 'ACER', '1234556', 'Windows', 'Data Recovery & Backup', '-', 4, 1, '2021-06-12 03:21:22', 150, 1);

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
  `repair_device_id` int(11) NOT NULL,
  `repair_customer_id` int(11) NOT NULL,
  `job_performed` varchar(50) NOT NULL,
  `job_price` float NOT NULL,
  `repair_cost` float NOT NULL,
  `repair_status` varchar(20) NOT NULL,
  `repair_details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_username` varchar(255) NOT NULL,
  `staff_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_username`, `staff_password`) VALUES
(1, 'staff', 'staff123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`courier_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`device_id`),
  ADD KEY `customer_fk` (`customer_id`);

--
-- Indexes for table `pickupdelivery`
--
ALTER TABLE `pickupdelivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `repair_status`
--
ALTER TABLE `repair_status`
  ADD PRIMARY KEY (`repair_id`),
  ADD UNIQUE KEY `repair_device_id` (`repair_device_id`),
  ADD UNIQUE KEY `repair_customer_id` (`repair_customer_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `courier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `device_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `pickupdelivery`
--
ALTER TABLE `pickupdelivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `repair_status`
--
ALTER TABLE `repair_status`
  MODIFY `repair_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `repair_status`
--
ALTER TABLE `repair_status`
  ADD CONSTRAINT `repair_status_ibfk_1` FOREIGN KEY (`repair_device_id`) REFERENCES `device` (`device_id`),
  ADD CONSTRAINT `repair_status_ibfk_2` FOREIGN KEY (`repair_customer_id`) REFERENCES `customer` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
