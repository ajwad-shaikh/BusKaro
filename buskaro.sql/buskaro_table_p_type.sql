
-- --------------------------------------------------------

--
-- Table structure for table `p_type`
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
