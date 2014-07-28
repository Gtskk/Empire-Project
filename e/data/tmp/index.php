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
            <link href="skin/default/css/reset.css" rel="stylesheet" type="text/css" />
            <link href="skin/default/css/public.css" rel="stylesheet" type="text/css" />
            <link href="skin/default/css/city_change.css" rel="stylesheet" type="text/css" />
            <link href="skin/default/css/news.css" rel="stylesheet" type="text/css" />
            <script type="text/javascript" src="skin/default/js/city.js"></script>
            <script type="text/javascript" src="skin/default/js/tab.js"></script>
            <script type="text/javascript" src="skin/default/js/thickbox_plus.js"></script>
            <SCRIPT src="skin/default/js/swfobject_source.js" type=text/javascript></SCRIPT>
    </head>

    <body>
        <!--top-->
        <div class="top">
            <div class="logo">
                <img src="skin/default/images/logo.png" />
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
                            <div class="close"><a href="#" onclick="closeLayer()"><img src="skin/default/images/main/close_btn.gif" /></a></div>
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
                        <input type="text" class="input" value="请输入您要搜索车辆的查询条件~" onfocus="if (value == '请输入您要搜索车辆的查询条件~') {
                                    value = '';
                                    this.style.color = '#666'
                                }" onblur="if (value == '') {
                                            value = '请输入您要搜索车辆的查询条件~';
                                            this.style.color = '#999999'
                                        }" /> 
                    </div>
                    <a href="#" class="search-btn"><img src="skin/default/images/search-btn.png" /></a>
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
                <div class="tel"><img src="skin/default/images/tel.png" /></div>
            </div>
        </div>
        <!--nav over-->
        <!--content-->
        <div class="content">
            <!--news-box-->
            <div class="news-box">
                <!--index-change-->
                <div class="index-change">
                    <DIV id=dplayer2 style=" width:350px; height:230px; padding:0px"></DIV>
                    <SCRIPT language=javascript type=text/javascript>
                        var titles = '芝加哥举城庆祝奥巴马胜选|麦凯恩经历凤凰城伤心一夜|走出神话的奥巴马|世界各地支持者庆祝奥巴马胜选';
                        var imgs = 'skin/default/images/1.jpg|skin/default/images/2.jpg|skin/default/images/3.jpg|skin/default/images/4.jpg';
                        var urls = 'E003.html/|E003.html/|E003.html/|E003.html';
                        var pw = 350;
                        var ph = 230;
                        var sizes = 14;
                        var Times = 4000;
                        var umcolor = 0xFFFFFF;
                        var btnbg = 0xFF7E00;
                        var txtcolor = 0xFFFFFF;
                        var txtoutcolor = 0x000000;
                        var flash = new SWFObject('skin/default/flash/focus1.swf', 'mymovie', pw, ph, '7', '');
                        flash.addParam('allowFullScreen', 'true');
                        flash.addParam('allowScriptAccess', 'always');
                        flash.addParam('quality', 'high');
                        flash.addParam('wmode', 'Transparent');
                        flash.addVariable('pw', pw);
                        flash.addVariable('ph', ph);
                        flash.addVariable('sizes', sizes);
                        flash.addVariable('umcolor', umcolor);
                        flash.addVariable('btnbg', btnbg);
                        flash.addVariable('txtcolor', txtcolor);
                        flash.addVariable('txtoutcolor', txtoutcolor);
                        flash.addVariable('urls', urls);
                        flash.addVariable('Times', Times);
                        flash.addVariable('titles', titles);
                        flash.addVariable('imgs', imgs);
                        flash.write('dplayer2');
                    </SCRIPT>
                </div>
                <!--index-change over-->
                <!--news-center-->
                <div class="news-center news-center-list">
                    <? @sys_GetEcmsInfo(60,3,50,1,0,3,0);?>
                </div>
                <!--news-center over-->
                <!--news-right-->
                <div class="news-right byk-news">
                    <div class="top-tit">
                        <div class="left-tit">百优卡动态</div>
                        <div class="more"><a href="bucartrends">更多>></a></div>
                    </div>
                    <div class="bottom" style="line-height:22px">
                        <? @sys_GetEcmsInfo(58,10,32,0,0,13,0);?>
                    </div>
                </div>
                <!--news-right over-->
            </div>
            <!--news-box over-->
            <div class="ad"><img src="skin/default/images/ad1.png" /></div>
            <!--news-box-->
            <div class="news-box">
                <!--news-left-->
                <div class="news-left news-list-link">
                    <div class="top-tit">
                        <div class="left-tit">交易指南</div>
                        <div class="more"><a href="dealguide">更多>></a></div>
                    </div>
                    <div class="bottom">
                        <div class="news-top">
                            <? @sys_GetEcmsInfo(60,1,32,0,0,17,0);?>
                            <? @sys_GetEcmsInfo(60,10,30,0,0,13,0);?>	  
                        </div>
                    </div>
                </div>
                <!--news-left over-->
                <!--news-center-->
                <div class="news-center news-list-link">
                    <div class="top-tit">
                        <div class="left-tit">行业新闻</div>
                        <div class="more"><a href="fieldnews">更多>></a></div>
                    </div>
                    <div class="bottom">
                        <div class="news-top">
                            <? @sys_GetEcmsInfo(61,1,32,0,0,17,0);?>
                            <? @sys_GetClassNews(61,10,30,0,0,0,'');?>
                        </div>
                    </div>
                </div>
                <!--news-center over-->
                <!--news-right-->
                <div class="news-right news-list-link">
                    <div class="top-tit">热门资讯排行</div>
                    <div class="bottom">
                        <? @sys_GetEcmsInfo(66,10,32,0,0,10,0);?>
                    </div>
                </div>
                <!--news-right over-->
            </div>
            <!--news-box over-->
            <!--news-box-->
            <div class="news-box">
                <!--news-left-->
                <div class="news-left">
                    <div class="top-tit">
                        <div class="left-tit">车辆导购</div>
                        <div class="more"><a href="carsguide">更多>></a></div>
                    </div>
                    <div class="bottom">
                        <? @sys_GetEcmsInfo(62,1,32,0,0,17,0);?>
                        <? @sys_GetEcmsInfo(62,10,30,0,0,13,0);?>		  
                    </div>
                </div>
            
            <!--news-left over-->
            <!--news-center-->
            <div class="news-center">
                <div class="top-tit">
                    <div class="left-tit">用车护车</div>
                    <div class="more"><a href="carscare">更多>></a></div>
                </div>
                <div class="bottom">
                    <? @sys_GetEcmsInfo(64,1,32,0,0,17,0);?>
                    <? @sys_GetClassNews(64,10,30,0,0,0,'');?>
                </div>
            </div>
            <!--news-center over-->
            <!--news-right-->
            <div class="news-right" style="padding-bottom:0px; height:271px;*height:276px; overflow:hidden;">
                <div class="top-tit">
                    <div class="left-tit">推荐车源</div>
                    <div class="more"><a href="recocars">更多>></a></div>
                </div>
                <div class="bottom car-list">
                    <? @sys_GetEcmsInfo(65,2,32,0,0,5,0);?>
                </div>
            </div>
            <!--news-right over-->
        </div>
        <!--news-box over-->
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


















