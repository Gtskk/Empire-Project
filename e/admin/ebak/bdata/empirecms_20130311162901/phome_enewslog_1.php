<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslog`;");
E_C("CREATE TABLE `phome_enewslog` (
  `loginid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`loginid`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslog` values('1','admin','2013-02-21 15:48:55','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('2','admin','2013-02-21 20:28:04','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('3','admin','2013-02-21 23:35:20','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('4','admin','2013-02-22 00:19:23','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('5','admin','2013-02-22 08:59:21','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('6','gtskk','2013-02-22 10:34:27','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('7','gtskk','2013-02-22 13:00:54','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('8','admin','2013-02-22 13:46:10','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('9','admin','2013-03-03 10:21:05','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('10','admin','2013-03-05 15:08:34','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('11','admin','2013-03-05 15:25:47','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('12','admin','2013-03-11 09:31:07','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('13','admin','2013-03-11 11:58:29','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('14','admin','2013-03-11 12:17:33','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('15','admin','2013-03-11 12:59:32','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('16','admin','2013-03-11 13:45:46','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('17','admin','2013-03-11 14:03:04','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('18','admin','2013-03-11 14:13:25','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('19','admin','2013-03-11 16:28:24','127.0.0.1','1','','0');");

@include("../../inc/footer.php");
?>