<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclassadd`;");
E_C("CREATE TABLE `phome_enewsclassadd` (
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclassadd` values('64','','');");
E_D("replace into `phome_enewsclassadd` values('66','','');");
E_D("replace into `phome_enewsclassadd` values('65','','');");
E_D("replace into `phome_enewsclassadd` values('58','','');");
E_D("replace into `phome_enewsclassadd` values('61','','');");
E_D("replace into `phome_enewsclassadd` values('60','','');");
E_D("replace into `phome_enewsclassadd` values('62','','');");

@include("../../inc/footer.php");
?>