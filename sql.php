<?php 
$zd="
CREATE TABLE `Anlin_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `pass` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '0',
  `qx` int(10) NOT NULL DEFAULT '0',   
  `jb` int(10) NOT NULL DEFAULT '0',  
  `tx` varchar(255) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL DEFAULT '0',
  `t` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `Anlin_user_puresent` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kname` varchar(255) NOT NULL DEFAULT '',
  `sname` varchar(255) NOT NULL DEFAULT '0',
  `puresent` text NOT NULL DEFAULT '',   
  `user` varchar(255) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `Anlin_chatlist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '0',
  `qx` int(10) NOT NULL DEFAULT '0',   
  `y` text NOT NULL DEFAULT '', 
  `time` int(10) NOT NULL DEFAULT '0',
  `img` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


CREATE TABLE `Anlin_chat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `chaid` int(10) NOT NULL DEFAULT '0', 
  `kname` varchar(255) NOT NULL DEFAULT '',
  `sname` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL DEFAULT '',
  `kuser` varchar(255) NOT NULL DEFAULT '0',
  `qx` int(10) NOT NULL DEFAULT '0',   
  `y` varchar(255) NOT NULL DEFAULT '', 
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `Anlin_chatmesslist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kname` varchar(255) NOT NULL DEFAULT '0',
  `sname` varchar(255) NOT NULL DEFAULT '0',  
  `y` varchar(255) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


CREATE TABLE `Anlin_chatmess` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `chaid` int(10) NOT NULL DEFAULT '0', 
  `kname` varchar(255) NOT NULL DEFAULT '',
  `sname` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL DEFAULT '',
  `kuser` varchar(255) NOT NULL DEFAULT '0',
  `qx` int(10) NOT NULL DEFAULT '0',   
  `y` varchar(255) NOT NULL DEFAULT '', 
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


CREATE TABLE `Anlin_chatbbs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `chaid` int(10) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '0',
  `qx` int(10) NOT NULL DEFAULT '0',   
  `content` text NOT NULL DEFAULT '', 
  `d` int(10) NOT NULL DEFAULT '0',
  `h` int(10) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
CREATE TABLE `Anlin_chatbbshui` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bbsid` int(10) NOT NULL DEFAULT '0', 
  `kname` varchar(255) NOT NULL DEFAULT '',
  `sname` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL DEFAULT '',
  `kuser` varchar(255) NOT NULL DEFAULT '0',
  `qx` int(10) NOT NULL DEFAULT '0',   
  `y` varchar(255) NOT NULL DEFAULT '', 
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


CREATE TABLE `Anlin_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kname` varchar(255) NOT NULL DEFAULT '',
  `n` text NOT NULL DEFAULT '',
  `qx` int(10) NOT NULL DEFAULT '0',   
  `y` varchar(255) NOT NULL DEFAULT '', 
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `Anlin_userset` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kname` varchar(255) NOT NULL DEFAULT '',
  `kuser` varchar(255) NOT NULL DEFAULT '',
  `kpass` varchar(255) NOT NULL DEFAULT '',
  `blacklist` text NOT NULL DEFAULT '',
  `qx` int(10) NOT NULL DEFAULT '0',   
  `md5` varchar(255) NOT NULL DEFAULT '', 
  `mail` varchar(255) NOT NULL DEFAULT '', 
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8

";



?>