<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewszt`;");
E_C("CREATE TABLE `phome_enewszt` (
  `ztid` smallint(6) NOT NULL AUTO_INCREMENT,
  `ztname` varchar(60) NOT NULL DEFAULT '',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `ztnum` tinyint(4) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `ztpath` varchar(255) NOT NULL DEFAULT '',
  `zttype` varchar(10) NOT NULL DEFAULT '',
  `newline` int(11) NOT NULL DEFAULT '0',
  `zturl` varchar(200) NOT NULL DEFAULT '',
  `hotline` tinyint(4) NOT NULL DEFAULT '0',
  `goodline` tinyint(4) NOT NULL DEFAULT '0',
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `ztimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `zcid` smallint(6) NOT NULL DEFAULT '0',
  `showzt` tinyint(1) NOT NULL DEFAULT '0',
  `ztpagekey` varchar(255) NOT NULL DEFAULT '',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `usezt` tinyint(1) NOT NULL DEFAULT '0',
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ztid`),
  KEY `classid` (`classid`),
  KEY `zcid` (`zcid`),
  KEY `usezt` (`usezt`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewszt` values('1','测试专题','0','25','1','s/column','.html','10','','10','10','0','10','10','1','0','1','news','newstime DESC','好的专题不解释！！','','1','0','0','','1','0','0','0','0');");

@include("../../inc/footer.php");
?>