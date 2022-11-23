-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 05:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `stored_procedure` ()  SELECT * FROM room WHERE VACANT > 0 ORDER BY FLOOR$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `REG_NO` varchar(11) NOT NULL,
  `ROOM_NO` int(11) NOT NULL,
  `DATE_OF_BOOKING` timestamp NULL DEFAULT current_timestamp(),
  `PAYMENT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`REG_NO`, `ROOM_NO`, `DATE_OF_BOOKING`, `PAYMENT`) VALUES
('111ASDF', 302, '2022-01-14 17:19:26', 'Fully paid.'),
('wardan1', 301, '2022-01-14 08:17:47', NULL);

--
-- Triggers `booking`
--
DELIMITER $$
CREATE TRIGGER `update_vacant` AFTER INSERT ON `booking` FOR EACH ROW UPDATE room
SET VACANT = VACANT - 1 
WHERE ROOM_NO = NEW.ROOM_NO
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pay_details`
--

CREATE TABLE `pay_details` (
  `ROOM_NO` int(11) NOT NULL,
  `REG_NO` varchar(11) NOT NULL,
  `TOTAL_AMT` float DEFAULT NULL,
  `PAID_AMT` float DEFAULT NULL,
  `DUE_AMT` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay_details`
--

INSERT INTO `pay_details` (`ROOM_NO`, `REG_NO`, `TOTAL_AMT`, `PAID_AMT`, `DUE_AMT`) VALUES
(301, 'wardan1', 69854, 0, NULL),
(302, '111ASDF', 45000, 45000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `residence`
--

CREATE TABLE `residence` (
  `F_NAME` varchar(50) DEFAULT NULL,
  `L_NAME` varchar(50) DEFAULT NULL,
  `M_INIT` varchar(10) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `COURSE` varchar(300) DEFAULT NULL,
  `YEAR` varchar(5) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PHONE_NO` int(11) DEFAULT NULL,
  `ADDRESS` varchar(350) DEFAULT NULL,
  `REG_NO` varchar(11) NOT NULL,
  `PASSWD` varchar(60) DEFAULT NULL,
  `DATE_OF_JOIN` date DEFAULT NULL,
  `admin` char(2) DEFAULT NULL,
  `GENDER` char(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residence`
--

INSERT INTO `residence` (`F_NAME`, `L_NAME`, `M_INIT`, `DOB`, `COURSE`, `YEAR`, `EMAIL`, `PHONE_NO`, `ADDRESS`, `REG_NO`, `PASSWD`, `DATE_OF_JOIN`, `admin`, `GENDER`) VALUES
('student', 'student', 's', '2021-12-28', 'CIVIL ENGGINEERING', 'secon', 'abhiip.poojary@gmail.com', 2147483647, 'alkjdsfl;adksjf', '111ASDF', 'tiger', '2022-01-14', '0', 'male'),
('hosA', 'Wardan', 'H', '1960-02-10', '', '', 'abhiip.poojary@gmail.com', 2147483647, 'alkjdsfl;adksjf', 'unclejhon', 'unclejhon', '2022-01-01', '1', 'male'),
('wardan', 'wardan', 'w', '2012-01-07', NULL, NULL, 'wardan@wardan.com', 123123123, 'wardan wardan wardan', 'wardan1', 'tiger', '2022-01-01', '1', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ROOM_NO` int(11) NOT NULL,
  `FLOOR` int(11) DEFAULT NULL,
  `ROOM_TYPE` varchar(50) DEFAULT NULL,
  `ROOM_CAPACITY` int(11) DEFAULT NULL,
  `VACANT` int(11) DEFAULT NULL,
  `PRICE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`ROOM_NO`, `FLOOR`, `ROOM_TYPE`, `ROOM_CAPACITY`, `VACANT`, `PRICE`) VALUES
(301, 3, 'Attached', 1, 0, 69854),
(302, 7, 'Non-Attached', 3, 2, 45000);

-- --------------------------------------------------------

--
-- Table structure for table `student_log`
--

CREATE TABLE `student_log` (
  `SL_NO` int(11) NOT NULL,
  `REG_NO` varchar(11) DEFAULT NULL,
  `ROOM_NO` int(11) DEFAULT NULL,
  `OUT_TIME_AND_DATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `IN_TIME_AND_DATE` timestamp NULL DEFAULT NULL,
  `REMARKS` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_log`
--

INSERT INTO `student_log` (`SL_NO`, `REG_NO`, `ROOM_NO`, `OUT_TIME_AND_DATE`, `IN_TIME_AND_DATE`, `REMARKS`) VALUES
(9, '111ASDF', 302, '2022-01-15 18:09:24', NULL, 'nan baralla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`REG_NO`,`ROOM_NO`),
  ADD KEY `BOOKING_FK` (`ROOM_NO`);

--
-- Indexes for table `pay_details`
--
ALTER TABLE `pay_details`
  ADD PRIMARY KEY (`ROOM_NO`,`REG_NO`),
  ADD KEY `PAY_DETAILS_FK2` (`REG_NO`);

--
-- Indexes for table `residence`
--
ALTER TABLE `residence`
  ADD PRIMARY KEY (`REG_NO`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ROOM_NO`);

--
-- Indexes for table `student_log`
--
ALTER TABLE `student_log`
  ADD PRIMARY KEY (`SL_NO`),
  ADD KEY `REG_NO` (`REG_NO`),
  ADD KEY `STUDENT_LOG_FK2` (`ROOM_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_log`
--
ALTER TABLE `student_log`
  MODIFY `SL_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `BOOKING_FK` FOREIGN KEY (`ROOM_NO`) REFERENCES `room` (`ROOM_NO`) ON DELETE CASCADE,
  ADD CONSTRAINT `BOOKING_FK2` FOREIGN KEY (`REG_NO`) REFERENCES `residence` (`REG_NO`) ON DELETE CASCADE;

--
-- Constraints for table `pay_details`
--
ALTER TABLE `pay_details`
  ADD CONSTRAINT `PAY_DETAILS_FK` FOREIGN KEY (`ROOM_NO`) REFERENCES `room` (`ROOM_NO`) ON DELETE CASCADE,
  ADD CONSTRAINT `PAY_DETAILS_FK2` FOREIGN KEY (`REG_NO`) REFERENCES `residence` (`REG_NO`) ON DELETE CASCADE;

--
-- Constraints for table `student_log`
--
ALTER TABLE `student_log`
  ADD CONSTRAINT `STUDENT_LOG_FK2` FOREIGN KEY (`ROOM_NO`) REFERENCES `room` (`ROOM_NO`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_log_ibfk_1` FOREIGN KEY (`REG_NO`) REFERENCES `residence` (`REG_NO`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
