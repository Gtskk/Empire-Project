<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsworkflowitem`;");
E_C("CREATE TABLE `phome_enewsworkflowitem` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `tname` varchar(60) NOT NULL DEFAULT '',
  `tno` int(11) NOT NULL DEFAULT '0',
  `ttext` varchar(255) NOT NULL DEFAULT '',
  `groupid` text NOT NULL,
  `userclass` text NOT NULL,
  `username` text NOT NULL,
  `lztype` tinyint(1) NOT NULL DEFAULT '0',
  `tbdo` int(11) NOT NULL DEFAULT '0',
  `tddo` int(11) NOT NULL DEFAULT '0',
  `tstatus` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`tid`),
  KEY `wfid` (`wfid`),
  KEY `tno` (`tno`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsworkflowitem` values('1','1','一级审核','100','设置签发权限',',1,','',',admin,','0','0','0','一级审核中');");
E_D("replace into `phome_enewsworkflowitem` values('2','2','一级审核','1','一级审核节点描述',',2,',',1,',',gtskk,','0','0','0','一级审核中');");
E_D("replace into `phome_enewsworkflowitem` values('3','2','最终审核','100','最终审核描述',',1,',',2,',',admin,','0','0','0','最终审核中');");

@include("../../inc/footer.php");
?>