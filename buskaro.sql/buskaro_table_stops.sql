
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
