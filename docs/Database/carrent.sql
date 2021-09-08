-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 12:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `NIC` varchar(12) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`NIC`, `fName`, `lName`, `contactNo`, `address`, `email`) VALUES
('785421584V', 'Lakshitha', 'Sadaruwan', '0714587652', 'No45, Main Road, Gampola', 'laka78@gmail.com'),
('864521302V', 'Saman', 'Perera', '0715484585', 'NO7,Perawatta rd,Pasyala', 'saman86@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `NIC` varchar(12) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `d_Licence` varchar(9) NOT NULL,
  `chargePerDay` decimal(10,2) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`NIC`, `fName`, `lName`, `d_Licence`, `chargePerDay`, `contactNo`, `address`, `email`, `age`) VALUES
('854875417V', 'Pasan', 'Jeewantha', 'B8654721', '3000.00', '0721548756', 'NO8, Temple Rd, Gampaha', 'pasan85@gamil.com', 36),
('960445871V', 'Lahiru Priyadarshana', 'Priyadarshana', 'G1254875', '3000.00', '0751245849', 'No65, Main Road, Ragama', 'lahiru78@gmail.com', 26);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `NIC` varchar(12) NOT NULL,
  `vehicleRegNum` varchar(8) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`NIC`, `vehicleRegNum`, `Fname`, `Lname`, `contactNo`, `address`, `email`) VALUES
('87548742V', 'GR-8564', 'Kamal', 'Rathnayaka', '0786584874', 'No75, Main Road, Ragama', 'krath@gmail.com'),
('854658748V', 'KG-6075', 'Sumith', 'Chandrasiri', '0715485235', 'NO 07,2nd Lane,Gampaha', 'sumithsam850@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `rentID` int(100) NOT NULL,
  `CustName` varchar(100) DEFAULT NULL,
  `customerNIC` varchar(12) NOT NULL,
  `ConNum` varchar(15) NOT NULL,
  `vehicleRegNum` varchar(8) NOT NULL,
  `rentType` varchar(20) NOT NULL,
  `fromDate` date NOT NULL,
  `toDate` date NOT NULL,
  `driverNIC` varchar(12) DEFAULT NULL,
  `totalCost` int(15) DEFAULT NULL,
  `advancePayment` int(20) NOT NULL,
  `finalPayment` int(10) DEFAULT NULL,
  `balance` int(15) DEFAULT NULL,
  `startMilage` int(10) DEFAULT NULL,
  `endMilage` int(10) DEFAULT NULL,
  `userName` varchar(20) DEFAULT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rentID`, `CustName`, `customerNIC`, `ConNum`, `vehicleRegNum`, `rentType`, `fromDate`, `toDate`, `driverNIC`, `totalCost`, `advancePayment`, `finalPayment`, `balance`, `startMilage`, `endMilage`, `userName`, `timeStamp`) VALUES
(1, 'Mahathun', '785421584V', '08888888', 'GR-8564', 'Completed', '0000-00-00', '0000-00-00', '', 15000, 5000, 12000, 2000, 50555, 50800, 'Admin', '2021-07-18 20:03:12'),
(4, 'afaasf', '785421584V', '55555', 'KG-6075', 'OnRent', '2021-08-01', '2021-08-03', '', 0, 5000, NULL, NULL, 55555, NULL, 'Admin', '2021-07-18 20:03:12'),
(5, NULL, '864521302V', '', 'KG-6075', 'Canceled', '2021-08-09', '2021-08-10', NULL, NULL, 5000, NULL, NULL, NULL, NULL, 'Admin', '2021-07-18 20:03:12'),
(6, 'Kasun Bandara', '785421584V', '0721345693', 'GR-8564', 'Reserved', '2021-08-16', '2021-08-18', NULL, NULL, 5000, NULL, NULL, NULL, NULL, 'Admin', '2021-07-18 20:03:12'),
(7, 'asfav', '785421584V', '22222222', 'KG-6075', 'OnRent', '2021-08-19', '2021-08-21', '', 0, 5000, NULL, NULL, 1000, NULL, 'Admin', '2021-07-18 20:03:12'),
(9, NULL, '785421584V', '', 'GR-8564', 'OnRent', '2021-08-01', '2021-08-03', NULL, NULL, 5000, NULL, NULL, NULL, NULL, 'Admin', '2021-07-18 20:03:12'),
(10, NULL, '785421584V', '', 'KG-6075', 'OnRent', '2021-08-01', '2021-08-03', NULL, NULL, 5000, NULL, NULL, NULL, NULL, 'Admin', '2021-07-18 20:03:12'),
(11, NULL, '864521302V', '', 'KG-6075', 'OnRent', '2021-08-09', '2021-08-10', NULL, NULL, 5000, NULL, NULL, NULL, NULL, 'Admin', '2021-07-18 20:03:12'),
(12, NULL, '785421584V', '', 'GR-8564', 'OnRent', '2021-08-16', '2021-08-18', NULL, NULL, 5000, NULL, NULL, NULL, NULL, 'Admin', '2021-07-18 20:03:12'),
(13, NULL, '785421584V', '', 'KG-6075', 'OnRent', '2021-08-19', '2021-08-21', NULL, NULL, 5000, NULL, NULL, NULL, NULL, 'Admin', '2021-07-18 20:03:12'),
(14, NULL, '864521302V', '', 'KG-6075', 'OnRent', '2021-07-22', '2021-07-25', NULL, NULL, 5000, NULL, NULL, NULL, NULL, 'Admin', '2021-07-18 20:03:12'),
(17, 'asda', 'asf', '', 'GR-8564', 'Completed', '2021-08-08', '2021-08-08', '', 15000, 500, 15000, 500, 4000, 4200, 'Admin', '2021-08-08 20:02:23'),
(18, 'asda', 'asf', '777777', 'GR-8564', 'OnRent', '2021-08-08', '2021-08-08', '', 5000, 500, NULL, NULL, 100, NULL, 'Admin', '2021-08-08 20:03:51'),
(19, 'sfaf', 'dfsd', '54654', 'GR-8564', 'OnRent', '2021-08-08', '2021-08-08', '', 5000, 500, NULL, NULL, 44444, NULL, 'Admin', '2021-08-08 20:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `NIC` varchar(12) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `contactNo` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`NIC`, `userName`, `fName`, `lName`, `picture`, `contactNo`, `address`, `email`, `password`, `type`) VALUES
('982251796V', 'salila', 'Salila', 'Herath', '', '0765357027', 'Kurunegala Road, Bingiriya', 'salilaherath@gmail.com', '123', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `regNum` varchar(8) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `picture` varchar(300) NOT NULL,
  `pricePerDay` decimal(10,0) NOT NULL,
  `freeMilage` int(10) NOT NULL,
  `pricePerExtraKM` decimal(10,0) NOT NULL,
  `transmissionType` varchar(10) NOT NULL,
  `airCondition` varchar(20) NOT NULL,
  `Luggage` int(11) DEFAULT NULL,
  `modelYear` int(11) NOT NULL,
  `passengers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`regNum`, `brand`, `picture`, `pricePerDay`, `freeMilage`, `pricePerExtraKM`, `transmissionType`, `airCondition`, `Luggage`, `modelYear`, `passengers`) VALUES
('GR-8565', 'TOYOTA Corolla 141', 'TOYOTA Corolla 1412008GR-8565.png', '5000', 100, '50', 'Manual', 'Full', 4, 2008, 4),
('GR-8566', 'TOYOTA Corolla 141', 'TOYOTA Corolla 1412008GR-8566.png', '5000', 100, '50', 'Manual', 'Full', 4, 2008, 4),
('GR-8567', 'TOYOTA Corolla 141', 'TOYOTA Corolla 1412015GR-8567.png', '5000', 100, '100', 'Auto', 'Full', 4, 2015, 4),
('GR-8570', 'TOYOTA Corolla 141', '', '5000', 100, '100', 'Auto', 'Full', 4, 2015, 4),
('KG-6075', 'TOYOTA  Premio', 'TOYOTA  Premio2008KG-6075.png', '6500', 100, '65', 'Auto', 'Full', 4, 2008, 3),
('QS-7536', 'Toyota Prius', 'Toyota Prius2015QS-7536.png', '6000', 100, '50', 'Auto', 'Full', 5, 2015, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`vehicleRegNum`,`NIC`),
  ADD KEY `vehicleRegNum` (`vehicleRegNum`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rentID`),
  ADD KEY `customerNIC` (`customerNIC`,`vehicleRegNum`),
  ADD KEY `vehicleRegNum` (`vehicleRegNum`),
  ADD KEY `driverNIC` (`driverNIC`),
  ADD KEY `userName` (`userName`) USING BTREE;

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`userName`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`regNum`),
  ADD KEY `regNum` (`regNum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rentID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
