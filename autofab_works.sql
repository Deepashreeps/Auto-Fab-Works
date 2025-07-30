-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2025 at 09:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autofab_works`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_phone` bigint(10) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_password` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_phone`, `a_email`, `a_password`, `date`) VALUES
(1, 'Admin', 9880922660, 'admin@gmail.com', '123456', '2025-02-05 16:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `b_photo`
--

CREATE TABLE `b_photo` (
  `bid` int(10) NOT NULL,
  `b_img` varchar(500) NOT NULL,
  `sug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b_photo`
--

INSERT INTO `b_photo` (`bid`, `b_img`, `sug`) VALUES
(1, 'upload/B1.jpg', 'The drawing is a sectional view of a cylindrical mechanical component, displayed with hatched areas to represent solid material.'),
(2, 'upload/b2.jpg', 'Geometric Tolerance Symbol: Triangle symbol likely references an associated surface or feature control'),
(3, 'upload/B3.jpg', 'I want the machine as soon as possible');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(10) NOT NULL,
  `c_username` varchar(50) NOT NULL,
  `c_phone` bigint(10) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_pass` varchar(20) NOT NULL,
  `c_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_username`, `c_phone`, `c_email`, `c_pass`, `c_address`) VALUES
(101, 'Sukesh', 9856742100, 'sukesh@gmail.com', '145236', 'Bangalore'),
(102, 'Vijay', 9875689452, 'vijay@gmail.com', '987654', 'Bangalore'),
(104, 'Chithra', 9658741235, 'chithra@gmail.com', '147852', 'Bangalore'),
(105, 'chaithra', 9658741235, 'chaithra@gmail.com', '152364', 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(10) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `f_email` varchar(50) NOT NULL,
  `c_id` int(10) NOT NULL,
  `f_msg` varchar(200) NOT NULL,
  `f_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_name`, `f_email`, `c_id`, `f_msg`, `f_date`) VALUES
(1, 'Sukesh', 'sukesh@gmail.com', 1, 'The Suggestions I gave......You did the same, I am so happy with the machine :)', '2025-03-14'),
(2, 'Vijay', 'vijay@gmail.com', 2, 'I am Happy with the machine', '2025-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `i_id` int(10) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `inv` varchar(200) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`i_id`, `m_name`, `inv`, `date`) VALUES
(1, 'Dheeraj ', 'Tubular Frame\r\nSubframe\r\nFenders\r\nHVAC\r\nDifferential\r\nCoil Springs', '2025-03-19'),
(2, 'Kanthesh', 'Row materials\r\nScrews and nuts\r\nSheets of metals', '2025-04-16'),
(3, 'Kanthesh', 'Raw materials\r\nScrews and nuts\r\nSheet of Metals', '2025-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `m_id` int(10) NOT NULL,
  `m_username` varchar(50) NOT NULL,
  `m_phone` bigint(10) NOT NULL,
  `m_email` varchar(50) NOT NULL,
  `m_pass` varchar(20) NOT NULL,
  `m_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`m_id`, `m_username`, `m_phone`, `m_email`, `m_pass`, `m_address`) VALUES
(1, 'Dheeraj', 8885746921, 'dheerajps827@gmail.com', '654321', 'Mangalore'),
(2, 'Kanthesh', 9776541230, 'kanthu@gmail.com', 'kanthesh', 'assaigoli');

-- --------------------------------------------------------

--
-- Table structure for table `m_pic`
--

CREATE TABLE `m_pic` (
  `mid` int(10) NOT NULL,
  `m_img` varchar(500) NOT NULL,
  `assign` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_pic`
--

INSERT INTO `m_pic` (`mid`, `m_img`, `assign`) VALUES
(1, 'upload/B1.jpg', 'Dheeraj'),
(2, 'upload/b2.jpg', 'Kanthesh');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `o_id` int(10) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `prog` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`o_id`, `c_name`, `prog`, `date`) VALUES
(1, 'Sukesh', 'Pending', '2025-03-19'),
(2, 'Vijay', 'In Design', '2025-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `p_id` int(10) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_phone` bigint(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `cardNumber` bigint(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`p_id`, `c_name`, `c_email`, `c_phone`, `amount`, `cardNumber`, `date`) VALUES
(1, 'Sukesh', 'sukesh@gmail.com', 9880962541, 9000, 9644852178965412, '2025-04-07'),
(2, 'Vijay', 'vijay@gmail.com', 8722418521, 9000, 2547896325478156, '2025-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `p_id` int(50) NOT NULL,
  `p_img` varchar(500) NOT NULL,
  `p_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`p_id`, `p_img`, `p_name`) VALUES
(1, 'upload/model1.stl', 'Split Conveyor Guide Roller'),
(2, 'upload/model2.stl', 'Multi-Groove Forming Roller'),
(3, 'upload/model3.stl', 'Rod clamp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `b_photo`
--
ALTER TABLE `b_photo`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `m_pic`
--
ALTER TABLE `m_pic`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `b_photo`
--
ALTER TABLE `b_photo`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `i_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_pic`
--
ALTER TABLE `m_pic`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `p_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
