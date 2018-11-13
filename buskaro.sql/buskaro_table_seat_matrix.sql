
-- --------------------------------------------------------

--
-- Table structure for table `seat_matrix`
--
-- Creation: Nov 13, 2018 at 08:21 PM
--

DROP TABLE IF EXISTS `seat_matrix`;
CREATE TABLE IF NOT EXISTS `seat_matrix` (
  `BID` int(11) NOT NULL,
  `RID` int(11) NOT NULL,
  `SeatNo` int(11) NOT NULL,
  `Passenger` int(11) DEFAULT NULL,
  PRIMARY KEY (`BID`,`RID`,`SeatNo`),
  KEY `RID` (`RID`),
  KEY `Passenger` (`Passenger`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
