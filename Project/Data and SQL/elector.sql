
CREATE TABLE IF NOT EXISTS `elector` (
  `ssn` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `postalcode` varchar(45) NOT NULL,
  `birthyear` year(4) NOT NULL,
  `federal_id` int(11) NOT NULL,
  `provincial_id` int(11) NOT NULL,
  `municipal_id` int(11) NOT NULL,
  PRIMARY KEY (`ssn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;