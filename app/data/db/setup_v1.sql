CREATE DATABASE phptest;

GRANT ALL PRIVILEGES ON phptest.* TO user@localhost IDENTIFIED BY 'vermiliantest';

FLUSH PRIVILEGES;
USE phptest;

CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `ipAddress` varchar(255) default NULL,
  `userAgent` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;