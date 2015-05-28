CREATE TABLE `User` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Site(
id int,
domain varchar(128),
created datetime default current_timestamp, 
PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
