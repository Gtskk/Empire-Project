<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsplf`;");
E_C("CREATE TABLE `phome_enewsplf` (
  `fid` smallint(6) NOT NULL AUTO_INCREMENT,
  `f` varchar(30) NOT NULL DEFAULT '',
  `fname` varchar(30) NOT NULL DEFAULT '',
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `ftype` varchar(30) NOT NULL DEFAULT '',
  `flen` varchar(20) NOT NULL DEFAULT '',
  `ismust` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsplf` values('1','kwpf','口味评分','口味评分字段','TINYINT','1','0');");
E_D("replace into `phome_enewsplf` values('2','fwpf','服务评分','服务评分字段','TINYINT','1','0');");
E_D("replace into `phome_enewsplf` values('3','hjpf','环境评分','环境评分字段','TINYINT','1','0');");
E_D("replace into `phome_enewsplf` values('4','xjpf','性价评分','性价评分字段','TINYINT','1','0');");

@include("../../inc/footer.php");
?>