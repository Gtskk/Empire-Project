<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewssp_3_bak`;");
E_C("CREATE TABLE `phome_enewssp_3_bak` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL DEFAULT '0',
  `spid` smallint(6) NOT NULL DEFAULT '0',
  `sptext` mediumtext NOT NULL,
  `lastuser` varchar(30) NOT NULL DEFAULT '',
  `lasttime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bid`),
  KEY `sid` (`sid`),
  KEY `spid` (`spid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>