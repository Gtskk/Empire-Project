<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuserclass`;");
E_C("CREATE TABLE `phome_enewsuserclass` (
  `classid` smallint(6) NOT NULL AUTO_INCREMENT,
  `classname` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuserclass` values('1','审核部');");
E_D("replace into `phome_enewsuserclass` values('2','签发部');");

@include("../../inc/footer.php");
?>