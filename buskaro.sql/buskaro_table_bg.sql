
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
