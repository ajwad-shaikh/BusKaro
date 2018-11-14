
-- --------------------------------------------------------

--
-- Table structure for table `bus_instances`
--

DROP TABLE IF EXISTS `bus_instances`;
CREATE TABLE IF NOT EXISTS `bus_instances` (
  `BID` int(11) NOT NULL,
  `RID` int(11) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `BusDate` date DEFAULT NULL,
  `DepTime` time DEFAULT NULL,
  PRIMARY KEY (`BID`),
  KEY `RID` (`RID`),
  KEY `Capacity` (`Capacity`),
  KEY `DepTime` (`DepTime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
