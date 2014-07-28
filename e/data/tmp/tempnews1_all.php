<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7">
<title>百优卡—新闻资讯</title>
<link href="/empireCMS/skin/default/css/reset.css" rel="stylesheet" type="text/css" />
<link href="/empireCMS/skin/default/css/public.css" rel="stylesheet" type="text/css" />
<link href="/empireCMS/skin/default/css/city_change.css" rel="stylesheet" type="text/css" />
<link href="/empireCMS/skin/default/css/news.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/empireCMS/skin/default/js/city.js"></script>
<script type="text/javascript" src="/empireCMS/skin/default/js/tab.js"></script>
<script type="text/javascript" src="/empireCMS/skin/default/js/thickbox_plus.js"></script>
<SCRIPT src="/empireCMS/skin/default/js/swfobject_source.js" type=text/javascript></SCRIPT>
</head>

<body>
  <!--top-->
  <div class="top">
    <div class="logo">
	   <img src="/empireCMS/skin/default/images/logo.png" />
	</div>
	<!--city-->
	<div class="city">
	  <div class="topCtiy clear">
		<div class="cur_city">
		  <ul>
		    <li class="i1">南京</li>
		    <li><a href="city_list.html?height=365;width=610" title="城市选择" class="thickbox" >【切换城市】</a></li>
		  </ul>
		</div>
		<div id="test_con" style="display:none">
          <div class="tabtop">
			<div class="top_left">选择城市</div> 
            <div class="close"><a href="#" onclick="closeLayer()"><img src="/empireCMS/skin/default/images/main/close_btn.gif" /></a></div>
          </div>
        </div>
	  </div>		
    </div>
	<!--city over-->
	<!--t-right-->
	<div class="t-right">
	  <div class="t-menu">
        <a href="#">车主登录</a> ｜ <a href="#">意见反馈</a> ｜ <a href="#">收藏本站</a> ｜ <a href="#">关于百优卡</a>
      </div>
	  <div class="t-search">
	    <div class="search-input">
		  <input type="text" class="input" value="请输入您要搜索车辆的查询条件~" onfocus="if (value =='请输入您要搜索车辆的查询条件~'){value ='';this.style.color='#666'}" onblur="if (value ==''){value='请输入您要搜索车辆的查询条件~';this.style.color='#999999'}" /> 
		</div>
		<a href="#" class="search-btn"><img src="/empireCMS/skin/default/images/search-btn.png" /></a>
	  </div>
	</div>
	<!--t-right over-->
  </div>
  <!--top over-->
  <!--nav-->
  <div class="nav">
    <div class="nav-box">
	  <div class="nav-l">
	    <a href="A001.html">首页</a>
		<a href="B001.html">我要买车</a>
		<a href="C001.html">我要卖车</a>
		<a href="D001.html">二手车评估</a>
		<a href="E001.html" id="current">新闻资讯</a>
		<a href="F001.html">门店展示</a>
	  </div>
	  <div class="tel"><img src="/empireCMS/skin/default/images/tel.png" /></div>
	</div>
  </div>
  <!--nav over-->
  <!--content-->
  <div class="content">
    <div class="news-menu">
	  [!--newsnav--]
	</div>
    <!--left-->
    <div class="left">
	  <div class="box">
	    <div class="news-detailed-tit">[!--title--]</div>
		<div class="news-detailed-descript">
		  <table cellspacing="0px">
		    <tr>
			  <td width="100px">作者：[!--writer--]</td>
			  <td width="450px">来源：[!--befrom--]</td>
			  <td>[!--newstime--]</td>
			</tr>
		  </table>
		</div>
		<div class="news-detailed">
		 [!--newstext--]
                        </div>
	  </div>
	</div>
	<!--left-->
	<!--right-->
	<div class="right">
	  <!--news-right-->
	  <div class="news-right news-list-link">
	    <div class="top-tit">热门资讯排行</div>
		<div class="bottom">
		  <? @sys_GetEcmsInfo(66,10,32,0,0,10,0);?>
		</div>
	  </div>
	  <!--news-right over-->
	  <!--byk-news-->
	  <div class="news-right right-car-list">
	    <div class="top-tit">推荐车源</div>
		<div class="bottom">
		  <? @sys_GetEcmsInfo(65,2,32,0,0,5,0);?>
		</div>
	  </div>
	  <!--byk-news over-->
	</div>
	<!--right over-->
  </div>
  <!--content over-->
  <!--footer-->
  <div class="footer">
    Copyright 2007-2011 bucar.net All rights reserved. 浙ICP备09027971号 版权所有：百优卡二手车交易网<br />
全国客服电话：400-000-0909 邮箱：info@bucar.net
  </div>
  <!--footer over-->
</body>
</html>



















