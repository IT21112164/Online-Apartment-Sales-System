-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 02:35 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oass`
--

-- --------------------------------------------------------

--
-- Table structure for table `ap_info`
--

CREATE TABLE `ap_info` (
  `Ap_ID` int(11) NOT NULL,
  `Floor_No` int(11) NOT NULL,
  `Rooms` int(11) NOT NULL,
  `Bathrooms` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ap_info`
--

INSERT INTO `ap_info` (`Ap_ID`, `Floor_No`, `Rooms`, `Bathrooms`) VALUES
(1000, 2, 3, 2),
(1001, 1, 2, 2),
(1002, 5, 3, 3),
(1003, 4, 4, 4),
(1004, 1, 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ap_info`
--
ALTER TABLE `ap_info`
  ADD PRIMARY KEY (`Ap_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ap_info`
--
ALTER TABLE `ap_info`
  MODIFY `Ap_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
