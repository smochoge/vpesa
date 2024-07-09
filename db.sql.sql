


DROP TABLE IF EXISTS `roles`;

CREATE TABLE IF NOT EXISTS `roles` (
  `roleId` tinyint(1) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) DEFAULT NULL,

  `datecreated` datetime DEFAULT CURRENT_TIMESTAMP,
  `dateupdated` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`roleId`),
  UNIQUE KEY `role` (`role`),
  
);

DROP TABLE IF EXISTS `genders`;

CREATE TABLE IF NOT EXISTS `genders` (
  `genderId` tinyint(1) NOT NULL AUTO_INCREMENT,
  `gender` varchar(255) DEFAULT NULL,

  `datecreated` datetime DEFAULT CURRENT_TIMESTAMP,
  `dateupdated` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`genderId`),
  UNIQUE KEY `gender` (`gender`),
  
);






DROP TABLE IF EXISTS `contacts`;

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `roleId` tinyint(1) NOT NULL DEFAULT 0,
  `genderId` tinyint(1) NOT NULL DEFAULT 0,
  `datecreated` datetime DEFAULT CURRENT_TIMESTAMP,
  `dateupdated` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
);

