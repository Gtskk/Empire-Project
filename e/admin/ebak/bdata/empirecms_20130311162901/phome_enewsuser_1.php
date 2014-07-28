<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuser`;");
E_C("CREATE TABLE `phome_enewsuser` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rnd` varchar(20) NOT NULL DEFAULT '',
  `adminclass` mediumtext NOT NULL,
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `styleid` smallint(6) NOT NULL DEFAULT '0',
  `filelevel` tinyint(1) NOT NULL DEFAULT '0',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `loginnum` int(11) NOT NULL DEFAULT '0',
  `lasttime` int(11) NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(120) NOT NULL DEFAULT '',
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `pretime` int(11) NOT NULL DEFAULT '0',
  `preip` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuser` values('1','admin','5667cbb766f4e8970975680d8bc69a6d','cVmCnB6DXdSTDRAm2ERX','','1','0','1','0','YrywtQfx','17','1362990504','127.0.0.1','','','0','1362982405','127.0.0.1');");
E_D("replace into `phome_enewsuser` values('2','gtskk','ce8c0cf9ed4b53a91b1e362999f3a62c','XCPt3vkCD95zrLtpqUPT','|58|60|61|62|','2','0','2','0','VFKhE4NZ','2','1361509254','127.0.0.1','张振','1071040729@qq.com','1','1361500467','127.0.0.1');");

@include("../../inc/footer.php");
?>