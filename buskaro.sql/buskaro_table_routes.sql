
-- --------------------------------------------------------

--
-- Table structure for table `routes`
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
  KEY `cap` (`Capacity`),
  KEY `STime_index` (`STime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`RID`, `STime`, `DTime`, `Src`, `Dst`, `Capacity`) VALUES
(11540, '15:40:00', '16:20:00', 'Narmada Residency', 'Empire Talkies', 50),
(11720, '17:20:00', '18:00:00', 'Hall 4', 'Penty Naka', 50),
(11750, '17:50:00', '18:30:00', 'Hall 4', 'Penty Naka', 50),
(11940, '19:40:00', '20:20:00', 'Hall 4', 'Penty Naka', 50),
(12100, '21:00:00', '18:00:00', 'PG Hostel', 'Russel Chowk', 50),
(21615, '16:15:00', '16:45:00', 'Empire Talkies', 'Narmada Residency', 50),
(21655, '16:55:00', '17:35:00', 'Penty Naka', 'Hexagonal Canteen', 50),
(21830, '18:30:00', '19:10:00', 'Penty Naka', 'Hall 4', 50),
(22020, '20:20:00', '21:00:00', 'Penty Naka', 'Hall 4', 50),
(22140, '21:40:00', '22:20:00', 'Russel Chowk', 'Hall 4', 50);
