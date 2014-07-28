<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsworkflow`;");
E_C("CREATE TABLE `phome_enewsworkflow` (
  `wfid` smallint(6) NOT NULL AUTO_INCREMENT,
  `wfname` varchar(60) NOT NULL DEFAULT '',
  `wftext` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `addtime` int(11) NOT NULL DEFAULT '0',
  `adduser` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`wfid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsworkflow` values('1','云潮网络公司','云潮网络公司运行步骤','0','1361498175','admin');");
E_D("replace into `phome_enewsworkflow` values('2','二级审核','二级审核工作说明','0','1361499888','admin');");

@include("../../inc/footer.php");
?>