
-- --------------------------------------------------------

--
-- Table structure for table `p_type`
--
-- Creation: Nov 13, 2018 at 07:22 PM
-- Last update: Nov 13, 2018 at 08:24 PM
--

DROP TABLE IF EXISTS `p_type`;
CREATE TABLE IF NOT EXISTS `p_type` (
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_type`
--

INSERT INTO `p_type` (`type`) VALUES
('Faculty'),
('Guest'),
('Staff'),
('Student');
