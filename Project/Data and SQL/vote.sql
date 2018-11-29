
CREATE TABLE IF NOT EXISTS `vote` (
  `ssn_voter` int(11) NOT NULL,
  `ssn_candidate` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `position_id` int(11) NOT NULL,
  PRIMARY KEY (`ssn_voter`,`year`,`position_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;