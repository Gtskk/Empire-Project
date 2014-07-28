<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmenu`;");
E_C("CREATE TABLE `phome_enewsmenu` (
  `menuid` int(11) NOT NULL AUTO_INCREMENT,
  `menuname` varchar(60) NOT NULL DEFAULT '',
  `menuurl` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`menuid`),
  KEY `myorder` (`myorder`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>