
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

--
-- Dumping data for table `bus_instances`
--

INSERT INTO `bus_instances` (`BID`, `RID`, `Capacity`, `BusDate`, `DepTime`) VALUES
(1, 11720, 50, '2018-11-22', '18:00:00'),
(2, 11750, 50, '2018-11-22', '18:30:00'),
(3, 11940, 50, '2018-11-22', '20:20:00'),
(4, 12100, 50, '2018-11-22', '18:00:00'),
(5, 21615, 50, '2018-11-22', '16:45:00'),
(6, 21655, 50, '2018-11-22', '17:35:00'),
(7, 21830, 50, '2018-11-22', '19:10:00'),
(8, 22020, 50, '2018-11-22', '21:00:00'),
(9, 22140, 50, '2018-11-22', '22:20:00');
