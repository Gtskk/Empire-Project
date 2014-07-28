<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspl_data_1`;");
E_C("CREATE TABLE `phome_enewspl_data_1` (
  `plid` int(11) NOT NULL AUTO_INCREMENT,
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL DEFAULT '0',
  `saytext` text NOT NULL,
  `kwpf` tinyint(1) NOT NULL DEFAULT '0',
  `fwpf` tinyint(1) NOT NULL DEFAULT '0',
  `hjpf` tinyint(1) NOT NULL DEFAULT '0',
  `xjpf` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`plid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>