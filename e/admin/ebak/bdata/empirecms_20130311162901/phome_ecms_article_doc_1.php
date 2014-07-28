<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_article_doc`;");
E_C("CREATE TABLE `phome_ecms_article_doc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `keyboard` char(160) NOT NULL DEFAULT '',
  `keyid` char(255) NOT NULL DEFAULT '',
  `userid` int(11) NOT NULL DEFAULT '0',
  `username` char(30) NOT NULL DEFAULT '',
  `ztid` char(255) NOT NULL DEFAULT '',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `userfen` smallint(6) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `titlefont` char(20) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `filename` char(60) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `plnum` int(11) NOT NULL DEFAULT '0',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `totaldown` int(11) NOT NULL DEFAULT '0',
  `title` char(200) NOT NULL DEFAULT '',
  `newstime` int(10) NOT NULL DEFAULT '0',
  `titlepic` char(200) NOT NULL DEFAULT '',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `lastdotime` int(10) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infopfen` int(11) NOT NULL DEFAULT '0',
  `infopfennum` int(11) NOT NULL DEFAULT '0',
  `votenum` int(11) NOT NULL DEFAULT '0',
  `ftitle` char(120) NOT NULL DEFAULT '',
  `smalltext` char(255) NOT NULL DEFAULT '',
  `writer` char(30) NOT NULL DEFAULT '',
  `befrom` char(60) NOT NULL DEFAULT '',
  `newstext` char(50) NOT NULL DEFAULT '',
  `diggtop` int(11) NOT NULL DEFAULT '0',
  `stb` char(4) NOT NULL DEFAULT '',
  `copyids` char(255) NOT NULL DEFAULT '',
  `ttid` smallint(6) NOT NULL DEFAULT '0',
  `infotags` char(160) NOT NULL DEFAULT '',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`),
  KEY `classid` (`classid`),
  KEY `ttid` (`ttid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_article_doc` values('1','55','1','','','','2','test','','1','0','1210238514','0','1','0','1','','','1','0','8','0','0','0','0','历史上的父子宰相','1210238214','http://cache.mars.sina.com.cn/nd/vipbook//bookcover/tiny85/9/cover_9d10c808811a441e144e7a81f19ff337.jpg','0','1','1272891655','0','0','0','0','','在清朝著名的康干盛世时期，中国安徽有一个非常有名气的家族，为大清王朝盛世的到来做出了重大的贡献，被人称誉为“五里三进士”、“隔河两状元”。','纪连海','','2008/0508/756251542d10f056296ba533ed4f5b45','0','1','','0','','1');");
E_D("replace into `phome_ecms_article_doc` values('2','55','0','','','','2','test','','1','0','1210238727','0','1','0','0','','','2','0','8','0','0','0','0','清末重臣：张之洞大传','1210238604','http://www.sinaimg.cn/book/nzt/history/cha/zzddz/U1000P112T78D6187F1709DT20080410142439.jpg','0','1','1272891605','0','0','0','0','','19世纪30年代末，西方资本主义侵略中国的前夕，是清王朝统治达到极端黑暗的年代。道光皇帝上台，曾想着振兴一番。面对吏治败坏、武备废弛、农政不修的现实，他诏令各省兴复书院...','马东玉','','2008/0508/cf0078d77809a73b50180e81ac267083','0','1','','0','','1');");
E_D("replace into `phome_ecms_article_doc` values('3','55','0','','','','2','test','','1','0','1210238859','0','1','0','1','','','3','0','8','0','0','0','0','我的家','1210238729','http://www.sinaimg.cn/book/http/book.sina.com.cn/nzt/history/sal/wodejia/U2016P112T78D5143F1709DT20071203142040.jpg','0','1','1272891460','0','0','0','0','','日本作家水上勉去年九月访问成都后，经上海回国。我在上海接待他，他告诉我他到过我的老家，看见一株枯树和空荡荡的庭院。他不知道是什么树。他抚摩着粗糙的树皮，想像过去的事情。','巴金','','2008/0508/8fdc40025cf81890cfa5dbe40b08c0bd','0','1','','0','','1');");
E_D("replace into `phome_ecms_article_doc` values('4','55','6','','','','2','test','','1','0','1210239625','0','1','0','0','','','4','0','8','0','0','0','0','晚清外交风云人物','1210238862','http://cache.mars.sina.com.cn/nd/vipbook//bookcover/tiny85/24/cover_6b3081eea2c4a49e100aa14a2ac4351d.jpg','0','1','1272891323','0','0','0','0','','青春的末代帝国当下这个时代，当别人都忙着挣钱、忙着进行各种残酷的生存斗争时，你如果像《大话西游》里的唐僧那样呼喊“下雨了，大家要收衣服啦！”是不合时宜，会被人嗤笑的。','李扬帆','','2008/0508/7649051c4311b3200fe7821a63ed4bcf','0','1','','0','','1');");
E_D("replace into `phome_ecms_article_doc` values('5','55','0','','','','2','test','','1','0','1210239752','0','1','0','0','','','5','0','8','0','0','0','0','诺奖得主自传：影中漫步','1210239706','','0','1','1272891258','0','0','0','0','','作者简介：多丽丝·莱辛，2007年诺贝尔文学奖获得者。1919年10月22日出生在伊朗，父母都是英国人。六岁时，随父母移居津巴布韦。','多丽丝·莱辛','','2008/0508/cf65ff0526ee53ec95093f6c5344bce4','0','1','','0','','0');");
E_D("replace into `phome_ecms_article_doc` values('6','55','3','','','','2','test','','1','0','1210240084','0','1','0','0','','','6','0','8','0','0','0','0','晚清重臣：曾国藩大传','1210240050','','0','1','1272891212','0','0','0','0','','“曾国藩现象”的历史回顾,20世纪90年代初，中国出现了关心曾国藩的思想文化热潮。长篇小说《曾国藩》为读者抢购，弄得洛阳纸贵。《曾国藩家书》由出版商竞相出版，百姓排队购读。','马东玉','','2008/0508/04354bd49c04ba41c63fb3c02519172e','0','1','','0','','0');");

@include("../../inc/footer.php");
?>