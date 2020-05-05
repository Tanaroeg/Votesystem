-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 04:21 PM
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
-- Database: `votepg`
--

-- --------------------------------------------------------

--
-- Table structure for table `sub_topic`
--

CREATE TABLE `sub_topic` (
  `Sub_ID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `Sub_Name` varchar(100) NOT NULL,
  `Topic_ID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `Sub_Desc` varchar(200) NOT NULL,
  `Sub_Like` int(3) NOT NULL,
  `Sub_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_topic`
--

INSERT INTO `sub_topic` (`Sub_ID`, `Sub_Name`, `Topic_ID`, `Sub_Desc`, `Sub_Like`, `Sub_Date`) VALUES
(0001, 'qwe', 0000, 'qwe', 1, '2020-05-05 13:48:54'),
(0002, '2sdas', 0001, 'adasd', 7, '2020-05-05 14:14:13'),
(0003, 'asd', 0000, 'qweq', 0, '2020-05-05 14:02:16'),
(0004, 'asd', 0000, 'qweq', 0, '2020-05-05 14:02:48'),
(0005, 'asd', 0000, 'asdsad', 0, '2020-05-05 14:03:47'),
(0006, 'aSDADSAD', 0000, 'ASDSAD', 0, '2020-05-05 14:04:36'),
(0007, 'sasdasd', 0001, 'asdeqe', 4, '2020-05-05 14:14:16'),
(0008, '111', 0001, '111', 3, '2020-05-05 14:13:55'),
(0009, 'aadad', 0001, 'asdsad', 3, '2020-05-05 14:13:55');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `Topic_ID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `Topic_Name` varchar(50) NOT NULL,
  `Topic_Create` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`Topic_ID`, `Topic_Name`, `Topic_Create`) VALUES
(0001, 'qweqwe', 'zxcxszv'),
(0002, 'qe2342', '423423423');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sub_topic`
--
ALTER TABLE `sub_topic`
  ADD PRIMARY KEY (`Sub_ID`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`Topic_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sub_topic`
--
ALTER TABLE `sub_topic`
  MODIFY `Sub_ID` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `Topic_ID` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
