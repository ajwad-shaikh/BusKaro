
-- --------------------------------------------------------

--
-- Table structure for table `student`
--
-- Creation: Nov 13, 2018 at 07:23 PM
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `RollNo` int(11) NOT NULL,
  `SName` varchar(30) DEFAULT NULL,
  `Batch` year(4) NOT NULL,
  `Branch` varchar(5) NOT NULL,
  `DoB` date NOT NULL,
  `BloodG` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`RollNo`),
  KEY `Branch` (`Branch`),
  KEY `BloodG` (`BloodG`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
