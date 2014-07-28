<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_article_doc_data`;");
E_C("CREATE TABLE `phome_ecms_article_doc_data` (
  `id` int(11) NOT NULL DEFAULT '0',
  `classid` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_article_doc_data` values('1','55');");
E_D("replace into `phome_ecms_article_doc_data` values('2','55');");
E_D("replace into `phome_ecms_article_doc_data` values('3','55');");
E_D("replace into `phome_ecms_article_doc_data` values('4','55');");
E_D("replace into `phome_ecms_article_doc_data` values('5','55');");
E_D("replace into `phome_ecms_article_doc_data` values('6','55');");

@include("../../inc/footer.php");
?>