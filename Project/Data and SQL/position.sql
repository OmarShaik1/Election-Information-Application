
CREATE TABLE IF NOT EXISTS `position` (
  `position_id` int(11) NOT NULL,
  `position_title` varchar(45) NOT NULL,
  `level_id` int(11) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;