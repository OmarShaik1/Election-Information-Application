
CREATE TABLE IF NOT EXISTS `candidate` (
  `candidate_name` varchar(45) NOT NULL,
  `ssn_candidate` int(11) NOT NULL,
  `party_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  PRIMARY KEY (`ssn_candidate`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

