<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewswfinfo`;");
E_C("CREATE TABLE `phome_enewswfinfo` (
  `id` int(11) NOT NULL DEFAULT '0',
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `tid` int(11) NOT NULL DEFAULT '0',
  `groupid` text NOT NULL,
  `userclass` text NOT NULL,
  `username` text NOT NULL,
  `checknum` tinyint(4) NOT NULL DEFAULT '0',
  `tstatus` varchar(30) NOT NULL DEFAULT '0',
  `checktno` tinyint(4) NOT NULL DEFAULT '0',
  KEY `id` (`id`,`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewswfinfo` values('82','62','1','1',',1,','',',admin,','1','','100');");
E_D("replace into `phome_enewswfinfo` values('86','62','2','3',',1,',',2,',',admin,','1','','100');");
E_D("replace into `phome_enewswfinfo` values('85','62','2','3',',1,',',2,',',admin,','1','','100');");
E_D("replace into `phome_enewswfinfo` values('88','62','2','3',',1,',',2,',',admin,','1','','100');");

@include("../../inc/footer.php");
?>