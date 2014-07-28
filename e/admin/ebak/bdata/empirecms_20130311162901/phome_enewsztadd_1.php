<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsztadd`;");
E_C("CREATE TABLE `phome_enewsztadd` (
  `ztid` smallint(6) NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  PRIMARY KEY (`ztid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsztadd` values('1','这是一个很好的专题，不解释！！！！！');");

@include("../../inc/footer.php");
?>