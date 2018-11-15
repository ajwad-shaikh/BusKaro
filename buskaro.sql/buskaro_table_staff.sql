
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
