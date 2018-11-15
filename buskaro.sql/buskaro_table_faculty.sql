
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
