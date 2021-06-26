CREATE TABLE IF NOT EXISTS `practice` (
  `id` int(1) NOT NULL auto_increment,
  `name` varchar(40) NOT NULL,
  `isScary` varchar(3) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `practice` (`id`, `name`, `isScary`) VALUES
(1, 'poereader', 'yes'),('2','eap343','no');
