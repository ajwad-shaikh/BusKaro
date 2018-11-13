
-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--
-- Creation: Nov 13, 2018 at 07:21 PM
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `FID` int(11) NOT NULL,
  `FName` varchar(30) DEFAULT NULL,
  `Dept` varchar(5) NOT NULL,
  `DoB` date NOT NULL,
  `BloodG` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`FID`),
  KEY `BloodG` (`BloodG`),
  KEY `Dept` (`Dept`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
