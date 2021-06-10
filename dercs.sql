-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 08:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `estimate_price` double NOT NULL
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
  ADD PRIMARY KEY (`repair_id`);

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
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `device_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `pickupdelivery`
--
ALTER TABLE `pickupdelivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
