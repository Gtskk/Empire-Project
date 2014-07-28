<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuserjs`;");
E_C("CREATE TABLE `phome_enewsuserjs` (
  `jsid` smallint(6) NOT NULL AUTO_INCREMENT,
  `jsname` varchar(60) NOT NULL DEFAULT '',
  `jssql` text NOT NULL,
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `jsfilename` varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`jsid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>