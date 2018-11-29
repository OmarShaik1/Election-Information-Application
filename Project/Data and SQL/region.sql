CREATE TABLE IF NOT EXISTS `region` (
  `region_id` int(11) NOT NULL,
  `region_number` int(11) DEFAULT NULL,
  `region_name` varchar(45) DEFAULT NULL,
  `level_id` int(11) NOT NULL,
  `region_city` varchar(45) NOT NULL,
  `region_province` varchar(45) NOT NULL,
  PRIMARY KEY (`region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;