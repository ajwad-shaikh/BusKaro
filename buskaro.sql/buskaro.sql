-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2018 at 10:53 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buskaro`
--
CREATE DATABASE IF NOT EXISTS `buskaro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `buskaro`;

-- --------------------------------------------------------

--
-- Table structure for table `bg`
--

DROP TABLE IF EXISTS `bg`;
CREATE TABLE IF NOT EXISTS `bg` (
  `BloodG` varchar(5) NOT NULL,
  PRIMARY KEY (`BloodG`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bg`
--

INSERT INTO `bg` (`BloodG`) VALUES
('A+'),
('A-'),
('AB+'),
('AB-'),
('B+'),
('B-'),
('O+'),
('O-');

-- --------------------------------------------------------

--
-- Table structure for table `bus_instances`
--

DROP TABLE IF EXISTS `bus_instances`;
CREATE TABLE IF NOT EXISTS `bus_instances` (
  `BID` int(11) NOT NULL,
  `RID` int(11) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `BusDate` date DEFAULT NULL,
  `DepTime` time DEFAULT NULL,
  PRIMARY KEY (`BID`),
  KEY `RID` (`RID`),
  KEY `Capacity` (`Capacity`),
  KEY `DepTime` (`DepTime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_instances`
--

INSERT INTO `bus_instances` (`BID`, `RID`, `Capacity`, `BusDate`, `DepTime`) VALUES
(1, 11720, 50, '2018-11-22', '18:00:00'),
(2, 11750, 50, '2018-11-22', '18:30:00'),
(3, 11940, 50, '2018-11-22', '20:20:00'),
(4, 12100, 50, '2018-11-22', '18:00:00'),
(5, 21615, 50, '2018-11-22', '16:45:00'),
(6, 21655, 50, '2018-11-22', '17:35:00'),
(7, 21830, 50, '2018-11-22', '19:10:00'),
(8, 22020, 50, '2018-11-22', '21:00:00'),
(9, 22140, 50, '2018-11-22', '22:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `DCode` varchar(5) NOT NULL,
  `DName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`DCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DCode`, `DName`) VALUES
('CSE', 'Computer Science and Engineering'),
('DS', 'Design'),
('ECE', 'Electronics and Communication Engineering'),
('ME', 'Mechanical Engineering'),
('NS', 'Natural Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `FID` int(11) NOT NULL,
  `FName` varchar(30) DEFAULT NULL,
  `Dept` varchar(5) NOT NULL,
  `BloodG` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`FID`),
  KEY `BloodG` (`BloodG`),
  KEY `Dept` (`Dept`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`FID`, `FName`, `Dept`, `BloodG`) VALUES
(50215, 'Alex Jones', 'CSE', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

DROP TABLE IF EXISTS `guest`;
CREATE TABLE IF NOT EXISTS `guest` (
  `GID` int(11) NOT NULL,
  `GName` varchar(30) NOT NULL,
  `HostID` int(11) NOT NULL,
  `HostType` varchar(15) NOT NULL,
  `BloodG` varchar(5) NOT NULL,
  PRIMARY KEY (`GID`),
  KEY `BloodG` (`BloodG`),
  KEY `HostID` (`HostID`),
  KEY `HostType` (`HostType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

DROP TABLE IF EXISTS `passenger`;
CREATE TABLE IF NOT EXISTS `passenger` (
  `ID` int(11) NOT NULL,
  `Type` varchar(15) NOT NULL,
  `Pwd` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`ID`,`Type`),
  KEY `Type` (`Type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`ID`, `Type`, `Pwd`) VALUES
(1021, 'Staff', 'test3'),
(50215, 'Faculty', 'test2'),
(2017333, 'Student', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_type`
--

DROP TABLE IF EXISTS `p_type`;
CREATE TABLE IF NOT EXISTS `p_type` (
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_type`
--

INSERT INTO `p_type` (`type`) VALUES
('Faculty'),
('Guest'),
('Staff'),
('Student');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

DROP TABLE IF EXISTS `routes`;
CREATE TABLE IF NOT EXISTS `routes` (
  `RID` int(11) NOT NULL,
  `STime` time DEFAULT NULL,
  `DTime` time DEFAULT NULL,
  `Src` varchar(20) DEFAULT NULL,
  `Dst` varchar(20) DEFAULT NULL,
  `Capacity` int(11) DEFAULT NULL,
  PRIMARY KEY (`RID`),
  KEY `Src` (`Src`),
  KEY `Dst` (`Dst`),
  KEY `d_time` (`DTime`),
  KEY `cap` (`Capacity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`RID`, `STime`, `DTime`, `Src`, `Dst`, `Capacity`) VALUES
(11540, '15:40:00', '16:20:00', 'Narmada Residency', 'Empire Talkies', 50),
(11720, '17:20:00', '18:00:00', 'Hall 4', 'Penty Naka', 50),
(11750, '17:50:00', '18:30:00', 'Hall 4', 'Penty Naka', 50),
(11940, '19:40:00', '20:20:00', 'Hall 4', 'Penty Naka', 50),
(12100, '21:00:00', '18:00:00', 'PG Hostel', 'Russel Chowk', 50),
(21615, '16:15:00', '16:45:00', 'Empire Talkies', 'Narmada Residency', 50),
(21655, '16:55:00', '17:35:00', 'Penty Naka', 'Hexagonal Canteen', 50),
(21830, '18:30:00', '19:10:00', 'Penty Naka', 'Hall 4', 50),
(22020, '20:20:00', '21:00:00', 'Penty Naka', 'Hall 4', 50),
(22140, '21:40:00', '22:20:00', 'Russel Chowk', 'Hall 4', 50);

-- --------------------------------------------------------

--
-- Table structure for table `seat_matrix`
--

DROP TABLE IF EXISTS `seat_matrix`;
CREATE TABLE IF NOT EXISTS `seat_matrix` (
  `BID` int(11) NOT NULL,
  `RID` int(11) NOT NULL,
  `SeatNo` int(11) NOT NULL,
  `Passenger` int(11) DEFAULT NULL,
  PRIMARY KEY (`BID`,`RID`,`SeatNo`),
  KEY `RID` (`RID`),
  KEY `Passenger` (`Passenger`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `EID` int(11) NOT NULL,
  `EName` varchar(30) DEFAULT NULL,
  `BloodG` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`EID`),
  KEY `BloodG` (`BloodG`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`EID`, `EName`, `BloodG`) VALUES
(1021, 'John Doe', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `stops`
--

DROP TABLE IF EXISTS `stops`;
CREATE TABLE IF NOT EXISTS `stops` (
  `StopName` varchar(20) NOT NULL,
  `StopType` varchar(10) NOT NULL,
  PRIMARY KEY (`StopName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stops`
--

INSERT INTO `stops` (`StopName`, `StopType`) VALUES
('Empire Talkies', 'City'),
('Hall 4', 'Institute'),
('Hexagon Canteen', 'Institute'),
('IIITDMJ Main Gate', 'Institute'),
('Narmada Residency', 'Institute'),
('Nescafe (Hall 1)', 'Institute'),
('Penty Naka', 'City'),
('PG Hostel', 'Institute'),
('Railway Station', 'City'),
('Russel Chowk', 'City');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `RollNo` int(11) NOT NULL,
  `SName` varchar(30) DEFAULT NULL,
  `Batch` year(4) NOT NULL,
  `Branch` varchar(5) NOT NULL,
  `BloodG` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`RollNo`),
  KEY `Branch` (`Branch`),
  KEY `BloodG` (`BloodG`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`RollNo`, `SName`, `Batch`, `Branch`, `BloodG`) VALUES
(2017333, 'Ajwad Shaikh', 2017, 'CSE', 'B+');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus_instances`
--
ALTER TABLE `bus_instances`
  ADD CONSTRAINT `bus_instances_ibfk_1` FOREIGN KEY (`RID`) REFERENCES `routes` (`RID`),
  ADD CONSTRAINT `bus_instances_ibfk_2` FOREIGN KEY (`Capacity`) REFERENCES `routes` (`Capacity`),
  ADD CONSTRAINT `bus_instances_ibfk_3` FOREIGN KEY (`DepTime`) REFERENCES `routes` (`DTime`);

--
-- Constraints for table `seat_matrix`
--
ALTER TABLE `seat_matrix`
  ADD CONSTRAINT `seat_matrix_ibfk_1` FOREIGN KEY (`RID`) REFERENCES `routes` (`RID`),
  ADD CONSTRAINT `seat_matrix_ibfk_2` FOREIGN KEY (`Passenger`) REFERENCES `passenger` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
