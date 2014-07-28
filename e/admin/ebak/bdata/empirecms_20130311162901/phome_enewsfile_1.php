<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile`;");
E_C("CREATE TABLE `phome_enewsfile` (
  `fileid` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(60) NOT NULL DEFAULT '',
  `filesize` int(11) NOT NULL DEFAULT '0',
  `path` varchar(20) NOT NULL DEFAULT '',
  `adduser` varchar(30) NOT NULL DEFAULT '',
  `filetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `no` varchar(60) NOT NULL DEFAULT '',
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `id` bigint(20) NOT NULL DEFAULT '0',
  `cjid` bigint(20) NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile` values('1','c797f94c452ae3edad59974b89cd5108.txt','15','2013-02-22','admin','2013-02-22 13:46:59','0','c797f94c452ae3edad59974b89cd5108.txt','1','0','0','0','0');");

@include("../../inc/footer.php");
?>