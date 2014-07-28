<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsbefrom`;");
E_C("CREATE TABLE `phome_enewsbefrom` (
  `befromid` smallint(6) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(60) NOT NULL DEFAULT '',
  `siteurl` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`befromid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>