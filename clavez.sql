-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 09:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clavez`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `title`) VALUES
(1, 'CC101', 'Introduction to Computing'),
(2, 'CC102', 'Programming 1'),
(3, 'CC103', 'Programming 2');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `address`, `contact`) VALUES
(2, 'VEE NA', 'ESPANOLA', 'GALA-GALA', '09069678411'),
(3, 'ROIDEN', 'CLAVEZ', 'GREDU', '09069677618');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) UNSIGNED NOT NULL,
  `transaction` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `symbol` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `shares` int(11) UNSIGNED NOT NULL,
  `price` decimal(64,5) UNSIGNED NOT NULL DEFAULT 0.00000
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `transaction`, `timestamp`, `symbol`, `shares`, `price`) VALUES
(6, 'BUY', '2014-06-26 02:55:01', 'AAPL', 5, '90.36000'),
(6, 'SELL', '2014-06-26 02:58:00', 'AAPL', 5, '90.36000'),
(6, 'SELL', '2014-06-26 04:05:55', 'FB', 200, '67.44000'),
(6, 'SELL', '2014-06-26 04:06:20', 'MSFT', 10, '42.03000');

-- --------------------------------------------------------

--
-- Table structure for table `peers`
--

CREATE TABLE `peers` (
  `id` int(11) NOT NULL,
  `empid` int(11) NOT NULL,
  `peerid` int(11) NOT NULL,
  `sy` varchar(9) NOT NULL,
  `sem` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peers`
--

INSERT INTO `peers` (`id`, `empid`, `peerid`, `sy`, `sem`) VALUES
(1, 31, 30, '2023-2024', '1'),
(2, 31, 29, '2023-2024', '1st'),
(3, 29, 30, '2023-2024', '1st'),
(4, 29, 31, '2023-2024', '1st'),
(5, 29, 28, '2023-2024', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `pes_peer`
--

CREATE TABLE `pes_peer` (
  `id` int(11) NOT NULL,
  `sy` varchar(9) NOT NULL,
  `sem` varchar(3) NOT NULL,
  `empid` int(11) NOT NULL,
  `raterid` int(11) NOT NULL,
  `s1` int(11) NOT NULL,
  `s2` int(11) NOT NULL,
  `s3` int(11) NOT NULL,
  `s4` int(11) NOT NULL,
  `s5` int(11) NOT NULL,
  `s6` int(11) NOT NULL,
  `s7` int(11) NOT NULL,
  `s8` int(11) NOT NULL,
  `s9` int(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `p5` int(11) NOT NULL,
  `p6` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pes_peer`
--

INSERT INTO `pes_peer` (`id`, `sy`, `sem`, `empid`, `raterid`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `c1`, `c2`, `c3`, `c4`) VALUES
(1, '2019-2020', '1st', 1, 0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(2, '2023-2024', '2nd', 1, 0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4),
(3, '2023-2024', '1st', 1, 31, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(4, '2023-2024', '1st', 29, 31, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(5, '2023-2024', '1st', 30, 31, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(6, '2023-2024', '2nd', 29, 31, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pes_self`
--

CREATE TABLE `pes_self` (
  `id` int(11) NOT NULL,
  `sy` varchar(9) NOT NULL,
  `sem` varchar(3) NOT NULL,
  `empid` int(11) NOT NULL,
  `s1` int(11) NOT NULL,
  `s2` int(11) NOT NULL,
  `s3` int(11) NOT NULL,
  `s4` int(11) NOT NULL,
  `s5` int(11) NOT NULL,
  `s6` int(11) NOT NULL,
  `s7` int(11) NOT NULL,
  `s8` int(11) NOT NULL,
  `s9` int(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `p5` int(11) NOT NULL,
  `p6` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pes_self`
--

INSERT INTO `pes_self` (`id`, `sy`, `sem`, `empid`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `c1`, `c2`, `c3`, `c4`) VALUES
(1, '2021-2022', '1st', 31, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(2, '2023-2024', '1st', 31, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pes_student`
--

CREATE TABLE `pes_student` (
  `id` int(11) NOT NULL,
  `studid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `sy` varchar(9) NOT NULL,
  `sem` varchar(3) NOT NULL,
  `fid` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `c5` int(11) NOT NULL,
  `c6` int(11) NOT NULL,
  `i1` int(11) NOT NULL,
  `i2` int(11) NOT NULL,
  `i3` int(11) NOT NULL,
  `i4` int(11) NOT NULL,
  `i5` int(11) NOT NULL,
  `i6` int(11) NOT NULL,
  `e1` int(11) NOT NULL,
  `e2` int(11) NOT NULL,
  `e3` int(11) NOT NULL,
  `e4` int(11) NOT NULL,
  `e5` int(11) NOT NULL,
  `e6` int(11) NOT NULL,
  `a1` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `a3` int(11) NOT NULL,
  `a4` int(11) NOT NULL,
  `a5` int(11) NOT NULL,
  `a6` int(11) NOT NULL,
  `g1` int(11) NOT NULL,
  `com1` text NOT NULL,
  `com2` text NOT NULL,
  `com3` text NOT NULL,
  `com4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pes_student`
--

INSERT INTO `pes_student` (`id`, `studid`, `courseid`, `sy`, `sem`, `fid`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `i1`, `i2`, `i3`, `i4`, `i5`, `i6`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `g1`, `com1`, `com2`, `com3`, `com4`) VALUES
(1, 1, 1, '2023-2024', '1st', 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', ''),
(5, 1, 1, '2023-2024', '1st', 31, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'a', 'b', 'c', 'd'),
(6, 2, 1, '2023-2024', '1st', 31, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'aa', 'bb', 'cc', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `pes_super`
--

CREATE TABLE `pes_super` (
  `id` int(11) NOT NULL,
  `sy` varchar(9) NOT NULL,
  `sem` varchar(3) NOT NULL,
  `fid` int(11) NOT NULL,
  `superid` int(11) NOT NULL,
  `i1` int(11) NOT NULL,
  `i2` int(11) NOT NULL,
  `i3` int(11) NOT NULL,
  `i4` int(11) NOT NULL,
  `i5` int(11) NOT NULL,
  `i6` int(11) NOT NULL,
  `i7` int(11) NOT NULL,
  `i8` int(11) NOT NULL,
  `i9` int(11) NOT NULL,
  `i10` int(11) NOT NULL,
  `i11` int(11) NOT NULL,
  `i12` int(11) NOT NULL,
  `i13` int(11) NOT NULL,
  `i14` int(11) NOT NULL,
  `i15` int(11) NOT NULL,
  `i16` int(11) NOT NULL,
  `i17` int(11) NOT NULL,
  `i18` int(11) NOT NULL,
  `i19` int(11) NOT NULL,
  `i20` int(11) NOT NULL,
  `i21` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pes_super`
--

INSERT INTO `pes_super` (`id`, `sy`, `sem`, `fid`, `superid`, `i1`, `i2`, `i3`, `i4`, `i5`, `i6`, `i7`, `i8`, `i9`, `i10`, `i11`, `i12`, `i13`, `i14`, `i15`, `i16`, `i17`, `i18`, `i19`, `i20`, `i21`) VALUES
(1, '2023-2024', '1st', 29, 31, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `symbol` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `shares` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(50) NOT NULL,
  `items_id` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `dateleft` date NOT NULL,
  `timeleft` varchar(100) NOT NULL,
  `datearrival` date NOT NULL,
  `timearrival` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `items_id`, `destination`, `dateleft`, `timeleft`, `datearrival`, `timearrival`, `status`) VALUES
(1, '321', '', '2018-01-03', '2:30', '2018-01-01', ' AM', ''),
(2, '', '', '0000-00-00', '', '2018-01-01', ' AM', '');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `program` varchar(15) NOT NULL,
  `fullname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `program`, `fullname`) VALUES
(1, 'BSIS-1', 'Bachelor of Science in Information Systems'),
(2, 'BSIS-2', 'Bachelor of Science in Informa');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `product_color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `product_name`, `product_type`, `product_color`) VALUES
(1, 'Nike', 'bag', 'white'),
(2, 'Vans', 'shoe', 'black');

-- --------------------------------------------------------

--
-- Table structure for table `studentcourses`
--

CREATE TABLE `studentcourses` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `sy` varchar(9) NOT NULL,
  `sem` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentcourses`
--

INSERT INTO `studentcourses` (`id`, `sid`, `courseid`, `sy`, `sem`) VALUES
(1, 1, 1, '2023-2024', '1st'),
(2, 1, 2, '2023-2024', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `age` int(11) NOT NULL,
  `bday` date NOT NULL DEFAULT current_timestamp(),
  `address` varchar(100) NOT NULL,
  `program` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `fname`, `mname`, `lname`, `age`, `bday`, `address`, `program`) VALUES
(1, 'Clarish', '', 'Sargado', 0, '2023-09-27', '', ''),
(2, 'Christopher', '', 'Estrera', 0, '2023-09-27', '', ''),
(3, 'Ryan', 'Ong', 'Escobio', 0, '2023-09-27', '', ''),
(4, 'Mary', 'Ong', 'Santos', 0, '2023-09-27', '', ''),
(5, 'Nicole', 'Ong', 'Sanchez', 0, '2023-09-27', '', 'BSIS-1');

-- --------------------------------------------------------

--
-- Table structure for table `sy`
--

CREATE TABLE `sy` (
  `sy` varchar(9) NOT NULL,
  `current` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sy`
--

INSERT INTO `sy` (`sy`, `current`) VALUES
('2019-2020', ''),
('2020-2021', ''),
('2021-2022', ''),
('2022-2023', ''),
('2023-2024', 'CUR');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cash` decimal(64,5) UNSIGNED NOT NULL DEFAULT 0.00000,
  `fname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `employeenum` int(11) NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL DEFAULT current_timestamp(),
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `civilstatus` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hash`, `cash`, `fname`, `mname`, `lname`, `employeenum`, `position`, `birthday`, `gender`, `civilstatus`) VALUES
(2, 'hirschhorn', '$1$2.hhkGc/$..AaWz4IsI.74XwjtCxlC/', '10000.00000', '', '', '', 0, '', '2023-09-25', '', ''),
(26, 'king', '$1$Lg/.2g1.$MhFR3D7ATBB5dVTdmFqvF0', '10000.00000', '', '', '', 0, '', '2023-09-25', '', ''),
(27, 'roiden', '$1$hX..WA1.$tWBHJMlSWlPBPpswp6fnh.', '10000.00000', '', '', '', 0, '', '2023-09-25', '', ''),
(28, 'mark', '$1$m53.1/3.$hLC0mvOhwJFyQI51OjyZM1', '10000.00000', '', '', '', 0, '', '2023-09-25', '', ''),
(29, 'ba', '$1$8l1.vS4.$hs/bdivEhjy5a3PqSFmau1', '10000.00000', 'Raffey', 'S', 'Belleza', 0, '', '2023-09-25', '', ''),
(30, 'admin', '$1$ft87Kz2Y$8uyvPwqvtqT78WX3x8lbB/', '10000.00000', 'Gracelda', 'Terante', 'Pangantihon', 0, '', '2023-09-25', '', ''),
(31, 'aaa', '$1$IKtEis3/$on46D7ifF3GwgnaUhju9d0', '10000.00000', 'Aiza', 'Millan', 'Romano', 16, 'Academic Head', '2023-06-16', 'Female', 'Married'),
(32, 'airismentos', '$1$vk51T42t$W77o8cANQ/FhJMV0XRITf0', '10000.00000', '', '', '', 0, '', '2023-11-30', '', ''),
(33, 'airis', '$1$kz2YaZg0$J2KUY.Vf97lRWLG6ezku7/', '10000.00000', '', '', '', 0, '', '2023-11-30', '', ''),
(34, 'stephen', '$1$xK73nIB.$cY6mXtMrPiHJyK4St4V5V.', '10000.00000', '', '', '', 0, '', '2023-11-30', '', ''),
(35, 'claire', '12345', '10000.00000', '', '', '', 0, '', '2023-11-30', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD KEY `id` (`id`);

--
-- Indexes for table `peers`
--
ALTER TABLE `peers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pes_peer`
--
ALTER TABLE `pes_peer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pes_self`
--
ALTER TABLE `pes_self`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pes_student`
--
ALTER TABLE `pes_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pes_super`
--
ALTER TABLE `pes_super`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`,`symbol`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentcourses`
--
ALTER TABLE `studentcourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `sy`
--
ALTER TABLE `sy`
  ADD PRIMARY KEY (`sy`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peers`
--
ALTER TABLE `peers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pes_peer`
--
ALTER TABLE `pes_peer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pes_self`
--
ALTER TABLE `pes_self`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pes_student`
--
ALTER TABLE `pes_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pes_super`
--
ALTER TABLE `pes_super`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentcourses`
--
ALTER TABLE `studentcourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
