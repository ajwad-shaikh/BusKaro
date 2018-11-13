
-- --------------------------------------------------------

--
-- Table structure for table `department`
--
-- Creation: Nov 13, 2018 at 08:33 PM
-- Last update: Nov 13, 2018 at 08:47 PM
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
