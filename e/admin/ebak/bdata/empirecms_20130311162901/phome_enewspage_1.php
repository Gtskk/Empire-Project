<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspage`;");
E_C("CREATE TABLE `phome_enewspage` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL DEFAULT '',
  `pagetext` mediumtext NOT NULL,
  `path` varchar(255) NOT NULL DEFAULT '',
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `pagetitle` varchar(120) NOT NULL DEFAULT '',
  `pagekeywords` varchar(255) NOT NULL DEFAULT '',
  `pagedescription` varchar(255) NOT NULL DEFAULT '',
  `tempid` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspage` values('1','关于我们','<!DOCTYPE html>\r\n<html lang=''en''>\r\n	<head>\r\n		<title>demo</title>\r\n		<style type=''text/css''>\r\n			*{\r\n				font-family: Arial;\r\n			}\r\n			body{\r\n				width: 800px;\r\n				margin: 0em auto;\r\n			}\r\n\r\n			header h1{\r\n				font-size: 50px;\r\n				margin: 0px;\r\n				color: #006;\r\n			}\r\n			header{\r\n				font-size: 15px;\r\n				margin: 0px;\r\n				color: #99f;\r\n				font-style: italic;\r\n			}\r\n\r\n			nav ul{\r\n				list-style: none;\r\n				padding: 0px;\r\n				display: block;\r\n				clear: right;\r\n				background-color: #99f;\r\n				padding-left: 4px;\r\n				height: 24px;\r\n			}\r\n			nav ul li{\r\n				display: inline;\r\n				padding: 0px 20px 5px 10px;\r\n				height: 24px;\r\n				border-right: 1px solid #ccc;\r\n			}\r\n			nav ul li a{\r\n				color: #006;\r\n				text-decoration: none;\r\n			}\r\n\r\n			article>header h1 a{\r\n				color: #000090;\r\n				text-decoration: none;\r\n			}\r\n			article>header h1{\r\n				font-size: 40px;\r\n				float: left;\r\n				margin-left: 14px;\r\n			}\r\n			article>section header h1{\r\n				font-size: 20px;\r\n				margin-left: 25px;\r\n			}\r\n			article p{\r\n				clear: both;\r\n				margin-top: 0px;\r\n				margin-left: 50px;\r\n			}\r\n			article p.next_to_aside{\r\n				width: 500px;\r\n			}\r\n			article>section figure{\r\n				margin-left: 180px;\r\n				margin-bottom: 30px;\r\n			}\r\n			article>section>menu{\r\n				margin-left: 120px;\r\n			}\r\n\r\n			aside p{\r\n				position: relative;\r\n				left: 0px;\r\n				top: -50px;\r\n				z-index: 1;\r\n				width: 200px;\r\n				float: right;\r\n				font-style: italic;\r\n				color: #99f;\r\n			}\r\n			article>section video{\r\n				margin-left: 180px;\r\n			}\r\n\r\n			footer p{\r\n				text-align: center;\r\n				font-size: 12px;\r\n				color: #888;\r\n				margin-top: 24px;\r\n			}\r\n		</style>\r\n	</head>\r\n	<body>\r\n		<header>\r\n			<hgroup>\r\n				<h1>My site</h1>\r\n				<h2>Demo</h2>\r\n			</hgroup>\r\n		</header>\r\n		<nav class=''main-menu''>\r\n			<ul>\r\n				<li><a href=''#''>Home</a></li>\r\n				<li><a href=''#''>About</a></li>\r\n				<li><a href=''#''>Contact</a></li>\r\n			</ul>\r\n		</nav>\r\n		<article>\r\n			<header>\r\n				<h1>\r\n					<a href=''#'' title=''article''>Article Heading</a>\r\n				</h1>\r\n			</header>\r\n			<p>a cutting line.....</p>\r\n			<section>\r\n				<header>\r\n					<h1>This is the first section heading</h1>\r\n				</header>\r\n				<p>Sciencitific hurricane after it I will go</p>\r\n			</section>\r\n			<section>\r\n				<header>\r\n					<h1>Second section with mark,aside,menu & figure</h1>\r\n				</header>\r\n				<p class=''next_to_aside''>Awe kjkm jkjkfd jkd<mark>veni,vidi,vici,</mark>jf emptyjdkfmn jkdjf </p>\r\n				<aside>\r\n					<p>This is an aside that has multiple lines.</p>\r\n				</aside>\r\n				<menu label=''file''>\r\n					<button type=''button'' onclick=\"javascript:alert(''click'')\">click</button>&nbsp;&nbsp;\r\n					<button type=''button'' onclick=\"javascript:alert(''Good!'')\">Good</button>&nbsp;&nbsp;\r\n					<button type=''button'' onclick=\"javascript:alert(''GDFDFDFD'')\">jkjkjk</button>&nbsp;&nbsp;\r\n					<button type=''button'' onclick=\"javascript:alert(''nlmnmn'')\">nnmjuij</button>&nbsp;&nbsp;\r\n				</menu>\r\n				<figure>\r\n					<img src=''demo.jpg'' alt=''figure'' width=''500'' height=''312'' />\r\n					<figcaption>Figure 1.PSY Uncle Bird</figcaption>\r\n				</figure>\r\n			</section>\r\n			<section>\r\n				<header>\r\n					<p>This is a video section</p>\r\n				</header>\r\n				<p>\r\n					<video src=''http://www.w3school.com.cn/i/movie.ogg'' controls=''controls'' loop=''loop'' autoplay=''autoplay''>\r\n						Your browser doesn''t support the tag.\r\n					</video>\r\n				</p>\r\n			</section>\r\n		</article>\r\n		<footer>\r\n			<p>Copyright 2013 Acme United.All rights reserved.</p>\r\n		</footer>\r\n</html>','../../about.html','0','关于我们','哥特式KK','哥特式KK','0');");
E_D("replace into `phome_enewspage` values('2','ecmsinfo万能标签调用','<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">\r\n<html>\r\n<head>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\r\n<title>ecmsinfo万能标签使用教程</title>\r\n<style>\r\ntd {font-size: 10pt;}\r\n.line{line-height: 14pt;font-size: 10pt;}\r\nA:link {text-decoration: none; color:#000000}\r\nA:visited {text-decoration: none; color: #000000} \r\nA:active {text-decoration: underline; color: #000000 } \r\nA:hover {text-decoration: underline;	color: #FF0000;}\r\n</style>\r\n</head>\r\n\r\n<body topmargin=\"0\">\r\n<table width=\"700\" border=\"0\" align=\"center\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#CEEEFB\">\r\n  <tr>\r\n    <td height=\"60\"> \r\n      <div align=\"center\"><font size=\"6\"><strong>ecmsinfo万能标签使用教程</strong></font></div></td>\r\n  </tr>\r\n  <tr>\r\n    <td height=\"25\" bgcolor=\"#FFFFFF\">&nbsp; </td>\r\n  </tr>\r\n</table>\r\n<table width=\"700\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">\r\n  <tr> \r\n    <td width=\"50%\" valign=\"top\"> <table width=\"98%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#CEEEFB\">\r\n        <tr> \r\n          <td height=\"23\"><strong>国内新闻</strong></td>\r\n        </tr>\r\n        <tr> \r\n          <td bgcolor=\"#FFFFFF\">[ecmsinfo]34,3,36,0,0,13,0[/ecmsinfo]</td>\r\n        </tr>\r\n      </table></td>\r\n    <td width=\"50%\" valign=\"top\"> <table width=\"98%\" border=\"0\" align=\"right\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#CEEEFB\">\r\n        <tr> \r\n          <td height=\"23\"><strong>国际新闻</strong></td>\r\n        </tr>\r\n        <tr> \r\n          <td bgcolor=\"#FFFFFF\">[ecmsinfo]35,3,36,0,0,13,0[/ecmsinfo]</td>\r\n        </tr>\r\n      </table></td>\r\n  </tr>\r\n  <tr> \r\n    <td colspan=\"2\">&nbsp;</td>\r\n  </tr>\r\n  <tr> \r\n    <td colspan=\"2\">\r\n<div align=\"center\">\r\n        <table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#CEEEFB\">\r\n          <tr> \r\n            <td height=\"23\"><strong>图片新闻</strong></td>\r\n          </tr>\r\n          <tr> \r\n            <td bgcolor=\"#FFFFFF\">[ecmsinfo]''photo'',4,36,0,18,14,1[/ecmsinfo]</td>\r\n          </tr>\r\n        </table>\r\n      </div></td>\r\n  </tr>\r\n  <tr>\r\n    <td colspan=\"2\">&nbsp;</td>\r\n  </tr>\r\n  <tr> \r\n    <td valign=\"top\"> <table width=\"98%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#CEEEFB\">\r\n        <tr> \r\n          <td height=\"23\"><strong>娱乐新闻</strong></td>\r\n        </tr>\r\n        <tr> \r\n          <td bgcolor=\"#FFFFFF\">[ecmsinfo]36,3,36,0,0,13,0[/ecmsinfo]</td>\r\n        </tr>\r\n      </table></td>\r\n    <td valign=\"top\"> <table width=\"98%\" border=\"0\" align=\"right\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#CEEEFB\">\r\n        <tr> \r\n          <td height=\"23\"><strong>体育新闻</strong></td>\r\n        </tr>\r\n        <tr> \r\n          <td bgcolor=\"#FFFFFF\">[ecmsinfo]37,3,36,0,0,13,0[/ecmsinfo]</td>\r\n        </tr>\r\n      </table></td>\r\n  </tr>\r\n</table>\r\n<br>\r\n<table width=\"700\" border=\"0\" align=\"center\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#CEEEFB\">\r\n  <tr>\r\n    <td height=\"23\">\r\n<div align=\"center\">Powered by <a href=\"http://www.phome.net\" target=\"_blank\">EmpireCMS</a><br>\r\n      </div></td>\r\n  </tr>\r\n</table>\r\n</body>\r\n</html>','../../ecmsinfo.html','0','','','','0');");

@include("../../inc/footer.php");
?>