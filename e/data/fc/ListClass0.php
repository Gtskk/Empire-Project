<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理栏目</title>
<SCRIPT lanuage="JScript">
function turnit(ss)
{
 if (ss.style.display=="") 
  ss.style.display="none";
 else
  ss.style.display=""; 
}
var newWindow = null

//调用地址
function tvurl(classid){
	window.open('view/ClassUrl.php?classid='+classid,'','width=500,height=250');
}
//刷新栏目
function relist(classid){
	self.location.href='enews.php?enews=ReListHtml&from=ListClass.php&classid='+classid;
}
//刷新信息
function renews(classid,tbname){
	window.open('ReHtml/DoRehtml.php?enews=ReNewsHtml&from=ListClass.php&classid='+classid+'&tbname[]='+tbname);
}
//归档
function docinfo(classid){
	if(confirm('确认归档?'))
	{
		self.location.href='ecmsinfo.php?enews=InfoToDoc&ecmsdoc=1&docfrom=ListClass.php&classid='+classid;
	}
}
//刷新JS
function rejs(classid){
	self.location.href='ecmschtml.php?enews=ReSingleJs&doing=0&classid='+classid;
}
//复制
function copyc(classid){
	self.location.href='AddClass.php?classid='+classid+'&enews=AddClass&docopy=1';
}
//修改
function editc(classid){
	self.location.href='AddClass.php?classid='+classid+'&enews=EditClass';
}
//删除
function delc(classid){
	if(confirm('确认要删除此栏目，将删除所属子栏目及信息'))
	{
		self.location.href='ecmsclass.php?classid='+classid+'&enews=DelClass';
	}
}
//标题分类
function ttc(classid){
	window.open('ClassInfoType.php?classid='+classid);
}
</SCRIPT>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td width="18%">位置: <a href="ListClass.php">管理栏目</a></td>
    <td width="82%"> <div align="right" class="emenubutton">
        <input type="button" name="Submit6" value="增加栏目" onclick="self.location.href='AddClass.php?enews=AddClass'">
        <input type="button" name="Submit" value="刷新首页" onclick="self.location.href='ecmschtml.php?enews=ReIndex'">
        <input type="button" name="Submit2" value="刷新所有栏目页" onclick="window.open('ecmschtml.php?enews=ReListHtml_all&from=ListClass.php','','');">
        <input type="button" name="Submit3" value="刷新所有信息页面" onclick="window.open('ReHtml/DoRehtml.php?enews=ReNewsHtml&start=0&from=ListClass.php','','');">
        <input type="button" name="Submit4" value="刷新所有JS调用" onclick="window.open('ecmschtml.php?enews=ReAllNewsJs&from=ListClass.php','','');">
      </div></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="tableborder">
  <form name=editorder method=post action=ecmsclass.php onsubmit="return confirm('确认要操作?');">
    <tr class="header" height="25"> 
      <td width="5%" align="center">顺序</td>
      <td width="7%" align="center"><a href='ListClass.php?doopen=1&open=1' title='收缩'><img src='../data/images/displayadd.gif' width='15' height='15' border='0'></a></td>
      <td width="6%" align="center">ID</td>
      <td width="36%">栏目名</td>
      <td width="6%" align="center">访问</td>
      <td width="14%">栏目管理</td>
      <td width="29%">操作</td>
    </tr>
    <tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=58></td><td><a href='AddNews.php?enews=AddNews&classid=58' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>58</td><td><input type=checkbox name=reclassid[] value=58> <a href='/empireCMS/bucartrends/' target=_blank>百优卡动态</a></td><td align=center>0</td><td><a href='#e' onclick=editc(58)>修改</a> <a href='#e' onclick=copyc(58)>复制</a> <a href='#e' onclick=delc(58)>删除</a></td><td><a href='#e' onclick=relist(58)>刷新</a> <a href='#e' onclick=renews(58,'news')>信息</a> <a href='#e' onclick=rejs(58)>JS</a> <a href='#e' onclick=tvurl(58)>调用</a> <a href='#e' onclick=ttc(58)>分类</a> <a href='#e' onclick=docinfo(58)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=60></td><td><a href='AddNews.php?enews=AddNews&classid=60' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>60</td><td><input type=checkbox name=reclassid[] value=60> <a href='/empireCMS/dealguide/' target=_blank>交易指南</a></td><td align=center>0</td><td><a href='#e' onclick=editc(60)>修改</a> <a href='#e' onclick=copyc(60)>复制</a> <a href='#e' onclick=delc(60)>删除</a></td><td><a href='#e' onclick=relist(60)>刷新</a> <a href='#e' onclick=renews(60,'news')>信息</a> <a href='#e' onclick=rejs(60)>JS</a> <a href='#e' onclick=tvurl(60)>调用</a> <a href='#e' onclick=ttc(60)>分类</a> <a href='#e' onclick=docinfo(60)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=61></td><td><a href='AddNews.php?enews=AddNews&classid=61' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>61</td><td><input type=checkbox name=reclassid[] value=61> <a href='/empireCMS/fieldnews/' target=_blank>行业新闻</a></td><td align=center>0</td><td><a href='#e' onclick=editc(61)>修改</a> <a href='#e' onclick=copyc(61)>复制</a> <a href='#e' onclick=delc(61)>删除</a></td><td><a href='#e' onclick=relist(61)>刷新</a> <a href='#e' onclick=renews(61,'news')>信息</a> <a href='#e' onclick=rejs(61)>JS</a> <a href='#e' onclick=tvurl(61)>调用</a> <a href='#e' onclick=ttc(61)>分类</a> <a href='#e' onclick=docinfo(61)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=62></td><td><a href='AddNews.php?enews=AddNews&classid=62' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>62</td><td><input type=checkbox name=reclassid[] value=62> <a href='/empireCMS/carsguide/' target=_blank>车辆导购</a></td><td align=center>0</td><td><a href='#e' onclick=editc(62)>修改</a> <a href='#e' onclick=copyc(62)>复制</a> <a href='#e' onclick=delc(62)>删除</a></td><td><a href='#e' onclick=relist(62)>刷新</a> <a href='#e' onclick=renews(62,'news')>信息</a> <a href='#e' onclick=rejs(62)>JS</a> <a href='#e' onclick=tvurl(62)>调用</a> <a href='#e' onclick=ttc(62)>分类</a> <a href='#e' onclick=docinfo(62)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=64></td><td><a href='AddNews.php?enews=AddNews&classid=64' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>64</td><td><input type=checkbox name=reclassid[] value=64> <a href='/empireCMS/carscare/' target=_blank>用车护车</a></td><td align=center>0</td><td><a href='#e' onclick=editc(64)>修改</a> <a href='#e' onclick=copyc(64)>复制</a> <a href='#e' onclick=delc(64)>删除</a></td><td><a href='#e' onclick=relist(64)>刷新</a> <a href='#e' onclick=renews(64,'news')>信息</a> <a href='#e' onclick=rejs(64)>JS</a> <a href='#e' onclick=tvurl(64)>调用</a> <a href='#e' onclick=ttc(64)>分类</a> <a href='#e' onclick=docinfo(64)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=65></td><td><a href='AddNews.php?enews=AddNews&classid=65' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>65</td><td><input type=checkbox name=reclassid[] value=65> <a href='/empireCMS/recocars/' target=_blank>推荐车源</a></td><td align=center>0</td><td><a href='#e' onclick=editc(65)>修改</a> <a href='#e' onclick=copyc(65)>复制</a> <a href='#e' onclick=delc(65)>删除</a></td><td><a href='#e' onclick=relist(65)>刷新</a> <a href='#e' onclick=renews(65,'news')>信息</a> <a href='#e' onclick=rejs(65)>JS</a> <a href='#e' onclick=tvurl(65)>调用</a> <a href='#e' onclick=ttc(65)>分类</a> <a href='#e' onclick=docinfo(65)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=66></td><td><a href='AddNews.php?enews=AddNews&classid=66' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>66</td><td><input type=checkbox name=reclassid[] value=66> <a href='/empireCMS/hotnews/' target=_blank>热门资讯排行</a></td><td align=center>0</td><td><a href='#e' onclick=editc(66)>修改</a> <a href='#e' onclick=copyc(66)>复制</a> <a href='#e' onclick=delc(66)>删除</a></td><td><a href='#e' onclick=relist(66)>刷新</a> <a href='#e' onclick=renews(66,'news')>信息</a> <a href='#e' onclick=rejs(66)>JS</a> <a href='#e' onclick=tvurl(66)>调用</a> <a href='#e' onclick=ttc(66)>分类</a> <a href='#e' onclick=docinfo(66)>归档</a></td></tr>    <tr class="header"> 
      <td height="25" colspan="7"> <div align="left"> &nbsp;&nbsp;
          <input type="submit" name="Submit5" value="修改栏目顺序" onClick="document.editorder.enews.value='EditClassOrder';document.editorder.action='ecmsclass.php';">&nbsp;&nbsp;
          <input name="enews" type="hidden" id="enews" value="EditClassOrder">
          <input type="submit" name="Submit7" value="刷新栏目页面" onClick="document.editorder.enews.value='GoReListHtmlMoreA';document.editorder.action='ecmschtml.php';">&nbsp;&nbsp;
          <input type="submit" name="Submit72" value="终极栏目属性转换" onClick="document.editorder.enews.value='ChangeClassIslast';document.editorder.action='ecmsclass.php';">
        </div></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" colspan="7"><strong>终极栏目属性转换说明(只能选择单个栏目)：</strong><br>
        如果你选择的是<font color="#FF0000">非终极栏目</font>，则转为<font color="#FF0000">终极栏目</font><font color="#666666">(此栏目不能有子栏目)</font><br>
        如果你选择的是<font color="#FF0000">终极栏目</font>，则转为<font color="#FF0000">非终极栏目</font><font color="#666666">(请先把当前栏目的数据转移，否则会出现冗余数据)<br>
        </font><strong>修改栏目顺序:顺序值越小越前面</strong></td>
    </tr>
    <input name="from" type="hidden" value="ListClass.php">
    <input name="gore" type="hidden" value="0">
  </form>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header"> 
    <td width="13%" height="25"> 
      <div align="center">名称</div></td>
    <td width="39%" height="25">调用地址</td>
    <td width="13%">
<div align="center">名称</div></td>
    <td width="35%"> 
      <div align="center">调用地址</div></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF"><div align="center">热门信息调用</div></td>
    <td height="25" bgcolor="#FFFFFF"> <input name="textfield" type="text" value="/empireCMS/d/js/js/hotnews.js">
      [<a href="ecmschtml.php?enews=ReHot_NewNews">刷新</a>][<a href="view/js.php?js=hotnews&p=js" target="_blank">预览</a>]</td>
    <td bgcolor="#FFFFFF"><div align="center">横向搜索表单</div></td>
    <td bgcolor="#FFFFFF"> <div align="left"> 
        <input name="textfield3" type="text" value="/empireCMS/d/js/js/search_news1.js">
        [<a href="view/js.php?js=search_news1&p=js" target="_blank">预览</a>]</div></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF"> <div align="center">最新信息调用</div></td>
    <td height="25" bgcolor="#FFFFFF"> <input name="textfield2" type="text" value="/empireCMS/d/js/js/newnews.js">
      [<a href="ecmschtml.php?enews=ReHot_NewNews">刷新</a>][<a href="view/js.php?js=newnews&p=js" target="_blank">预览</a>]</td>
    <td bgcolor="#FFFFFF"><div align="center">纵向搜索表单</div></td>
    <td bgcolor="#FFFFFF"> <div align="left"> 
        <input name="textfield4" type="text" value="/empireCMS/d/js/js/search_news2.js">
        [<a href="view/js.php?js=search_news2&p=js" target="_blank">预览</a>]</div></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF"><div align="center">推荐信息调用</div></td>
    <td height="25" bgcolor="#FFFFFF"><input name="textfield22" type="text" value="/empireCMS/d/js/js/goodnews.js">
      [<a href="ecmschtml.php?enews=ReHot_NewNews">刷新</a>][<a href="view/js.php?js=goodnews&p=js" target="_blank">预览</a>]</td>
    <td bgcolor="#FFFFFF"><div align="center">搜索页面地址</div></td>
    <td bgcolor="#FFFFFF"> <div align="left"> 
        <input name="textfield5" type="text" value="/empireCMS/search">
        [<a href="../../search" target="_blank">预览</a>]</div></td>
  </tr>
  <tr> 
    <td height="24" bgcolor="#FFFFFF"> 
      <div align="center">控制面板地址</div></td>
    <td height="24" bgcolor="#FFFFFF">
<input name="textfield52" type="text" value="/empireCMS/e/member/cp">
      [<a href="../member/cp" target="_blank">预览</a>]</td>
    <td bgcolor="#FFFFFF"><div align="center"></div></td>
    <td bgcolor="#FFFFFF"><div align="center"></div></td>
  </tr>
  <tr class="header"> 
    <td height="25" colspan="4">js调用方式：&lt;script src=js地址&gt;&lt;/script&gt;</td>
  </tr>
</table>
</body>
</html>
