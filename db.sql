CREATE TABLE `User` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE 'Site' (
  'id' int(11) unsigned NOT NULL,
  'domain' varchar(128) NOT NULL DEFAULT '',
  'created' datetime default current_timestamp,
  PRIMARY KEY ('id')
)

CREATE TABLE 'Comments' (
  'comment_id' int(11) unsigned NOT NILL,
  'site_id' int(11) NOT NULL DEFAULT '',
  'site_unique_id' int(11) NOT NULL DEFAULT '',
  'user_id' int(11) NOT NULL DEFAULT '',
  'message' text,
  'created' datetime, 
  PRIMARY KEY ('comment_id')
)
