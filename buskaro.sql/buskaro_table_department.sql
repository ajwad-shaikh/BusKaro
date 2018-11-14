
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
