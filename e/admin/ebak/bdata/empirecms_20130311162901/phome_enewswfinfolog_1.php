<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewswfinfolog`;");
E_C("CREATE TABLE `phome_enewswfinfolog` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL DEFAULT '0',
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `tid` int(11) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `checktime` int(11) NOT NULL DEFAULT '0',
  `checktext` text NOT NULL,
  `checknum` tinyint(4) NOT NULL DEFAULT '0',
  `checktype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`logid`),
  KEY `id` (`id`,`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewswfinfolog` values('1','82','62','1','0','admin','1361498583','','1','0');");
E_D("replace into `phome_enewswfinfolog` values('2','82','62','1','1','admin','1361498620','还不错啊!!','1','1');");
E_D("replace into `phome_enewswfinfolog` values('8','86','62','2','3','gtskk','1361500687','准许通过','1','1');");
E_D("replace into `phome_enewswfinfolog` values('7','86','62','2','0','admin','1361500358','','1','0');");
E_D("replace into `phome_enewswfinfolog` values('6','85','62','2','0','admin','1361500209','','1','0');");
E_D("replace into `phome_enewswfinfolog` values('9','85','62','2','3','gtskk','1361500718','k','1','1');");
E_D("replace into `phome_enewswfinfolog` values('10','85','62','2','3','admin','1361500743','啦啦啦','1','1');");
E_D("replace into `phome_enewswfinfolog` values('11','88','62','2','0','admin','1361506669','','1','0');");
E_D("replace into `phome_enewswfinfolog` values('12','88','62','2','3','gtskk','1361509271','给个通过吧','1','1');");
E_D("replace into `phome_enewswfinfolog` values('13','88','62','2','3','admin','1361509297','过去吧','1','1');");
E_D("replace into `phome_enewswfinfolog` values('14','86','62','2','3','admin','1362982274','','1','1');");

@include("../../inc/footer.php");
?>