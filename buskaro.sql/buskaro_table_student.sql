
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
