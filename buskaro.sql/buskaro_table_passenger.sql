
-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

DROP TABLE IF EXISTS `passenger`;
CREATE TABLE IF NOT EXISTS `passenger` (
  `ID` int(11) NOT NULL,
  `Type` varchar(15) NOT NULL,
  `Pwd` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`ID`,`Type`),
  KEY `Type` (`Type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`ID`, `Type`, `Pwd`) VALUES
(1021, 'Staff', 'test3'),
(50215, 'Faculty', 'test2'),
(2017333, 'Student', 'test');
