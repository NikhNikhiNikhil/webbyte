-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 05:48 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vendor`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phno` varchar(25) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `phno`, `message`, `date`) VALUES
('Nishmitha', 'nishmithac07@gmail.com', '53201430', 'hello this is nishmitha', '2019-07-28 10:54:59'),
('Neethu', 'neethushreemk@google.com', '7353327421', 'hello its a good website ', '2019-07-28 17:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `cr_account`
--

CREATE TABLE `cr_account` (
  `Uid` int(20) NOT NULL,
  `Name` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `Gender` text NOT NULL,
  `Dob` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `Phno` int(10) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(10) NOT NULL DEFAULT 'CLOSE',
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `Admin` varchar(10) NOT NULL DEFAULT '''FALSE'''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cr_account`
--

INSERT INTO `cr_account` (`Uid`, `Name`, `mname`, `lname`, `Gender`, `Dob`, `Address`, `E-mail`, `Phno`, `Date`, `Status`, `Username`, `Password`, `Admin`) VALUES
(1, 'sadcv ', 'sadc', 'dsc', 'FEMALE', '1998-11-10', 'sdac', '', 1111111111, '2019-07-17 20:13:15', 'OPEN', 'nishmithac', 'nishmithac08', 'FALSE'),
(2, 'Nishmitha', 'H', 'C', 'FEMALE', '1998-09-08', 'TFGHHG', '', 323226565, '2019-07-18 10:41:13', 'CLOSE', 'nish', 'nish08', 'FALSE'),
(3, 'Nishmitha', '', 'C', 'FEMALE', '1998-09-08', 'mysore', '', 2147483647, '2019-07-22 15:36:55', 'CLOSE', 'admin', 'admin@', 'TRUE'),
(4, 'chethan', '', 'n', 'MALE', '1962-07-06', 'mysore', '', 42351330, '2019-07-23 16:44:18', 'CLOSE', 'chethan', 'chethan08', 'FALSE'),
(5, 'manjula', 'm', 's', 'FEMALE', '1998-03-01', 'mysore', '', 2147483647, '2019-07-27 18:53:07', 'CLOSE', NULL, NULL, '\'FALSE\''),
(10, 'chethan', 'h', 'n', 'MALE', '1524-01-01', 'myysorere', '', 455555, '2019-08-17 21:09:52', 'CLOSE', NULL, NULL, '\'FALSE\'');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `Lid` int(11) NOT NULL,
  `lang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`Lid`, `lang`) VALUES
(1, 'ENGLISH'),
(2, 'KANNADA\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sl_no` int(11) NOT NULL,
  `Vegeid` int(11) NOT NULL,
  `Vegname` varchar(100) NOT NULL,
  `vegimage` longblob NOT NULL,
  `quantity` double NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sl_no`, `Vegeid`, `Vegname`, `vegimage`, `quantity`, `amount`) VALUES
(6, 0, '', '', 0, 0),
(7, 0, '', '', 20, 20),
(8, 0, '', '', 20, 20),
(9, 0, '', '', 40, 40),
(10, 0, '', '', 50, 50),
(11, 0, '', '', 100, 70),
(12, 0, '', '', 40, 40),
(13, 0, '', '', 0, 20),
(14, 0, '', '', 123, 123),
(15, 0, '', '', 40, 60),
(16, 0, '', '', 0, 0),
(17, 0, '', '', 0, 0),
(18, 0, '', '', 0, 0),
(19, 0, '', '', 0, 0),
(20, 0, '', '', 0, 0),
(23, 0, '', '', 204, 2020),
(24, 0, '', '', 50, 50),
(25, 0, '', '', 30, 0),
(26, 0, '', '', 0, 0),
(27, 0, '', '', 0, 0),
(28, 0, '', '', 30, 3),
(29, 0, '', '', 2, 2),
(30, 0, '', '', 2, 60),
(31, 0, '', '', 202, 202),
(32, 0, '', '', 202, 202),
(33, 0, '', '', 0, 0),
(34, 0, '', '', 20, 60);

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

CREATE TABLE `vegetables` (
  `Vid` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` longblob NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '''OPEN''',
  `lid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vegetables`
--

INSERT INTO `vegetables` (`Vid`, `name`, `image`, `status`, `lid`) VALUES
(1, 'CARROT', 0x312e6a7067, 'OPEN', 1),
(2, 'TOMATO', 0x322e6a7067, 'OPEN', 1),
(3, 'GREEN PEAS', 0x332e6a7067, 'OPEN', 1),
(4, 'BRINJAL', 0x342e6a7067, 'OPEN', 1),
(5, 'BITTER GUARD', 0x352e6a7067, 'OPEN', 1),
(6, 'POTATO', 0x392e6a7067, 'OPEN', 1),
(7, 'ONION', 0x31302e6a7067, 'OPEN', 1),
(8, 'BEANS', 0x362e6a7067, 'OPEN', 1),
(9, 'LADIES FINGER', 0x372e6a7067, 'OPEN', 1),
(10, 'BETROOT', 0x382e6a7067, 'OPEN', 1),
(11, 'LEMON', 0x31312e6a7067, 'OPEN', 1),
(12, 'GREEN CHILLI', 0x31322e6a7067, 'OPEN', 1),
(13, 'CABBAGE', 0x31332e6a7067, 'OPEN', 1),
(14, 'CAULIFLOWER', 0x31342e6a7067, 'OPEN', 1),
(15, 'CORIANDER', 0x31352e6a7067, 'OPEN', 1),
(16, 'GARLIC', 0x31362e6a7067, 'OPEN', 1),
(17, 'RADISH', 0x31372e6a7067, 'OPEN', 1),
(18, 'PALAK', 0x31382e6a7067, 'OPEN', 1),
(19, 'BOTTLE GOURD', 0x31392e6a7067, 'OPEN', 1),
(20, 'PUMPKIN', 0x32302e6a7067, 'OPEN', 1),
(21, 'COCONUT', 0x32312e6a7067, 'OPEN', 1),
(22, 'ASH GOURD', 0x32322e6a7067, 'OPEN', 1),
(23, 'CAPSICUM', 0x32332e6a7067, 'OPEN', 1),
(24, 'CHAYOT', 0x32342e6a7067, 'OPEN', 1),
(26, 'CURRY LEAVES', 0x32362e6a7067, 'OPEN', 1),
(30, 'CARROT', 0x312e6a7067, 'OPEN', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cr_account`
--
ALTER TABLE `cr_account`
  ADD PRIMARY KEY (`Uid`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`Lid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `vegetables`
--
ALTER TABLE `vegetables`
  ADD PRIMARY KEY (`Vid`),
  ADD KEY `lang` (`lid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cr_account`
--
ALTER TABLE `cr_account`
  MODIFY `Uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `Lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `vegetables`
--
ALTER TABLE `vegetables`
  MODIFY `Vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vegetables`
--
ALTER TABLE `vegetables`
  ADD CONSTRAINT `vegetables_ibfk_1` FOREIGN KEY (`lid`) REFERENCES `language` (`Lid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
