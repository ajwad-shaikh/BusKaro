
-- --------------------------------------------------------

--
-- Table structure for table `routes`
--
-- Creation: Nov 13, 2018 at 08:16 PM
--

DROP TABLE IF EXISTS `routes`;
CREATE TABLE IF NOT EXISTS `routes` (
  `RID` int(11) NOT NULL,
  `STime` time DEFAULT NULL,
  `DTime` time DEFAULT NULL,
  `Src` varchar(20) DEFAULT NULL,
  `Dst` varchar(20) DEFAULT NULL,
  `Capacity` int(11) DEFAULT NULL,
  PRIMARY KEY (`RID`),
  KEY `Src` (`Src`),
  KEY `Dst` (`Dst`),
  KEY `d_time` (`DTime`),
  KEY `cap` (`Capacity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
