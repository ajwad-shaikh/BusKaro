
-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--
-- Creation: Nov 13, 2018 at 07:22 PM
--

DROP TABLE IF EXISTS `passenger`;
CREATE TABLE IF NOT EXISTS `passenger` (
  `ID` int(11) NOT NULL,
  `Type` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`,`Type`),
  KEY `Type` (`Type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
