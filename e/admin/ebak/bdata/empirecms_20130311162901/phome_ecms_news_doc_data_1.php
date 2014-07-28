<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_doc_data`;");
E_C("CREATE TABLE `phome_ecms_news_doc_data` (
  `id` int(11) NOT NULL DEFAULT '0',
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `writer` varchar(30) NOT NULL DEFAULT '',
  `befrom` varchar(60) NOT NULL DEFAULT '',
  `newstext` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>