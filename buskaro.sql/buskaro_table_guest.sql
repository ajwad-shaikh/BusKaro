
-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

DROP TABLE IF EXISTS `guest`;
CREATE TABLE IF NOT EXISTS `guest` (
  `GID` int(11) NOT NULL,
  `GName` varchar(30) NOT NULL,
  `DoB` date NOT NULL,
  `HostID` int(11) NOT NULL,
  `HostType` varchar(15) NOT NULL,
  `BloodG` varchar(5) NOT NULL,
  PRIMARY KEY (`GID`),
  KEY `BloodG` (`BloodG`),
  KEY `HostID` (`HostID`),
  KEY `HostType` (`HostType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
