<?php
define('EmpireCMSAdmin','1');
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/functions.php");
$link=db_connect();
$empire=new mysqlquery();
//验证用户
$lur=is_login();
$logininid=$lur['userid'];
$loginin=$lur['username'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];
//验证权限
CheckLevel($logininid,$loginin,$classid,"zt");
$enews=$_GET['enews'];
$url="<a href=ListZt.php>管理专题</a>&nbsp;>&nbsp;增加专题";
$postword='增加专题';
//初使化数据
$r[reorder]="newstime DESC";
$r[maxnum]=0;
$r[ztnum]=25;
$r[zttype]=".html";
$r[newline]=10;
$r[hotline]=10;
$r[goodline]=10;
$r[hotplline]=10;
$r[firstline]=10;
$pripath='s/';
//复制专题
$docopy=$_GET['docopy'];
if($docopy&&$enews=="AddZt")
{
	$copyclass=1;
}
$ecmsfirstpost=1;
//修改专题
if($enews=="EditZt"||$copyclass)
{
	$ecmsfirstpost=0;
	if($copyclass)
	{
		$thisdo="复制";
	}
	else
	{
		$thisdo="修改";
	}
	$ztid=(int)$_GET['ztid'];
	$r=$empire->fetch1("select * from {$dbtbpre}enewszt where ztid='$ztid'");
	$addr=$empire->fetch1("select * from {$dbtbpre}enewsztadd where ztid='$ztid'");
	$url="<a href=ListZt.php>管理专题</a>&nbsp;>&nbsp;".$thisdo."专题：".$r[ztname];
	$postword=$thisdo.'专题';
	//专题目录
	$mycr=GetPathname($r[ztpath]);
	$pripath=$mycr[1];
	$ztpath=$mycr[0];
	//复制专题
	if($copyclass)
	{
		$r[ztname].='(1)';
		$ztpath.='1';
	}
}
//列表模板
$msql=$empire->query("select mid,mname from {$dbtbpre}enewsmod order by myorder,mid");
while($mr=$empire->fetch($msql))
{
	$listtemp_options.="<option value=0 style='background:#99C4E3'>".$mr[mname]."</option>";
	$l_sql=$empire->query("select tempid,tempname from ".GetTemptb("enewslisttemp")." where modid='$mr[mid]'");
	while($l_r=$empire->fetch($l_sql))
	{
		if($l_r[tempid]==$r[listtempid])
		{$l_d=" selected";}
		else
		{$l_d="";}
		$listtemp_options.="<option value=".$l_r[tempid].$l_d."> |-".$l_r[tempname]."</option>";
	}
}
//栏目
$options=ShowClass_AddClass("",$r[classid],0,"|-",0,0);
//js模板
$jstempsql=$empire->query("select tempid,tempname from ".GetTemptb("enewsjstemp")." order by tempid");
while($jstempr=$empire->fetch($jstempsql))
{
	$select="";
	if($r[jstempid]==$jstempr[tempid])
	{
		$select=" selected";
	}
	$jstemp.="<option value='".$jstempr[tempid]."'".$select.">".$jstempr[tempname]."</option>";
}
//封面模板
$classtempsql=$empire->query("select tempid,tempname from ".GetTemptb("enewsclasstemp")." order by tempid");
while($classtempr=$empire->fetch($classtempsql))
{
	$select="";
	if($r[classtempid]==$classtempr[tempid])
	{
		$select=" selected";
	}
	$classtemp.="<option value='".$classtempr[tempid]."'".$select.">".$classtempr[tempname]."</option>";
}
//分类
$zcstr="";
$zcsql=$empire->query("select classid,classname from {$dbtbpre}enewsztclass order by classid");
while($zcr=$empire->fetch($zcsql))
{
	$select="";
	if($zcr[classid]==$r[zcid])
	{
		$select=" selected";
	}
	$zcstr.="<option value='".$zcr[classid]."'".$select.">".$zcr[classname]."</option>";
}
//优化方案
$yh_options='';
$yhsql=$empire->query("select id,yhname from {$dbtbpre}enewsyh order by id");
while($yhr=$empire->fetch($yhsql))
{
	$select='';
	if($r[yhid]==$yhr[id])
	{
		$select=' selected';
	}
	$yh_options.="<option value='".$yhr[id]."'".$select.">".$yhr[yhname]."</option>";
}
//当前使用的模板组
$thegid=GetDoTempGid();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>增加专题</title>
<link href="adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
<script>
//检查
function CheckForm(obj){
	if(obj.ztname.value=='')
	{
		alert("请输入专题名称");
		obj.ztname.focus();
		return false;
	}
	if(obj.ztpath.value=="")
	{
		alert("请输入专题目录");
		obj.ztpath.focus();
		return false;
	}
	if(obj.listtempid.value==0)
	{
		alert("请选择列表模板");
		obj.listtempid.focus();
		return false;
	}
}
  </script>

</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td>位置： 
      <?=$url?>
    </td>
  </tr>
</table>
<br>
  
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <form name="form1" method="post" action="ecmsclass.php" onsubmit="return CheckForm(document.form1);">
    <tr class="header"> 
      <td height="25" colspan="2"> 
        <?=$postword?>
        <input type=hidden name=enews value=<?=$enews?>> </td>
    </tr>
    <tr> 
      <td height="25" colspan="2">基本属性</td>
    </tr>
    <tr> 
      <td width="24%" height="25" bgcolor="#FFFFFF">专题名称(*)</td>
      <td width="76%" height="25" bgcolor="#FFFFFF"> <input name="ztname" type="text" id="ztname" value="<?=$r[ztname]?>" size="38"> 
        <?
	  if($enews=="AddZt")
	  {
	  ?>
        <input type="button" name="Submit5" value="生成拼音目录" onclick="window.open('GetPinyin.php?hz='+document.form1.ztname.value+'&returnform=opener.document.form1.ztpath.value','','width=160,height=100');"> 
        <?
	  }
	  ?>
        <input name="ztid" type="hidden" id="ztid" value="<?=$ztid?>"> <input name="oldztid" type="hidden" id="oldztid" value="<?=$ztid?>"> 
      </td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">隶属信息栏目</td>
      <td height="25" bgcolor="#FFFFFF"> <select name="classid" id="classid">
          <option value="0">隶属于所有栏目</option>
          <?=$options?>
        </select> <input type="button" name="Submit622232" value="管理栏目" onclick="window.open('ListClass.php');"> 
        <font color="#666666">(选择父栏目，将应用于子栏目)</font></td>
    </tr>
    <tr> 
      <td height="25" valign="top" bgcolor="#FFFFFF">存放文件夹 
        <input name="oldztpath" type="hidden" id="oldztpath2" value="<?=$r[ztpath]?>"> 
        <input name="oldpripath" type="hidden" id="oldztpath3" value="<?=$pripath?>"> 
      </td>
      <td bgcolor="#FFFFFF"> <table border="0" cellspacing="1" cellpadding="3">
          <tr bgcolor="DBEAF5"> 
            <td bgcolor="DBEAF5">&nbsp;</td>
            <td bgcolor="DBEAF5">上层目录</td>
            <td bgcolor="DBEAF5">本专题目录</td>
            <td bgcolor="DBEAF5">&nbsp;</td>
          </tr>
          <tr> 
            <td><div align="right">根目录/</div></td>
            <td><input name="pripath" type="text" id="pripath" value="<?=$pripath?>" size="30"></td>
            <td><input name="ztpath" type="text" id="ztpath2" value="<?=$ztpath?>" size="16"></td>
            <td><input type="button" name="Submit3" value="检测目录" onclick="javascript:window.open('ecmscom.php?enews=CheckPath&pripath='+document.form1.pripath.value+'&classpath='+document.form1.ztpath.value,'','width=100,height=100,top=250,left=450');"></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">使用优化方案</td>
      <td bgcolor="#FFFFFF"><select name="yhid" id="yhid">
          <option name="0">不使用</option>
          <?=$yh_options?>
        </select> <input type="button" name="Submit63" value="管理优化方案" onclick="window.open('db/ListYh.php');"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">文件扩展名</td>
      <td bgcolor="#FFFFFF"> <input name="zttype" type="text" id="zttype4" value="<?=$r[zttype]?>" size="38"> 
        <select name="select" onchange="document.form1.zttype.value=this.value">
          <option value=".html">扩展名</option>
          <option value=".html">.html</option>
          <option value=".htm">.htm</option>
          <option value=".php">.php</option>
          <option value=".shtml">.shtml</option>
        </select> </td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">绑定域名</td>
      <td bgcolor="#FFFFFF"> <input name="zturl" type="text" id="zturl" value="<?=$r[zturl]?>" size="38"> 
        <font color="#666666"> (如不绑定,请留空.后面无需加&quot;/&quot;)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">所属分类</td>
      <td bgcolor="#FFFFFF"><select name="zcid" id="zcid">
          <option value="0">不隶属于任何分类</option>
          <?=$zcstr?>
        </select> <input type="button" name="Submit6222322" value="管理分类" onclick="window.open('ListZtClass.php');"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">专题缩略图</td>
      <td bgcolor="#FFFFFF"> <input name="ztimg" type="text" id="ztimg" value="<?=$r[ztimg]?>" size="38"> 
        <a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=&doing=2&field=ztimg','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" width="22" height="22" border="0" align="absbottom"></a></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">网页关键字</td>
      <td bgcolor="#FFFFFF"> <input name="ztpagekey" type="text" id="ztpagekey" value="<?=$r[ztpagekey]?>" size="38"></td>
    </tr>
    <tr> 
      <td height="25" valign="top" bgcolor="#FFFFFF">专题简介</td>
      <td bgcolor="#FFFFFF"> <textarea name="intro" cols="70" rows="8" id="intro"><?=stripSlashes($r[intro])?></textarea></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">排序</td>
      <td bgcolor="#FFFFFF"><input name="myorder" type="text" id="myorder" value="<?=$r[myorder]?>" size="38"> 
        <font color="#666666"> (值越小越前面)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">显示到导航</td>
      <td bgcolor="#FFFFFF"> <input type="radio" name="showzt" value="0"<?=$r[showzt]==0?' checked':''?>>
        是 
        <input type="radio" name="showzt" value="1"<?=$r[showzt]==1?' checked':''?>>
        否<font color="#666666">（如：专题导航标签）</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">信息可选择</td>
      <td bgcolor="#FFFFFF"><input type="radio" name="usezt" value="0"<?=$r[usezt]==0?' checked':''?>>
        是 
        <input type="radio" name="usezt" value="1"<?=$r[usezt]==1?' checked':''?>>
        否<font color="#666666">（如果选择否那么增加信息时不会显示这个专题）</font></td>
    </tr>
    <tr> 
      <td height="25" colspan="2">页面设置</td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">页面显示模式</td>
      <td height="25" bgcolor="#FFFFFF"><input type="radio" name="islist" value="0"<?=$r[islist]==0?' checked':''?>>
        封面式 
        <input type="radio" name="islist" value="1"<?=$r[islist]==1?' checked':''?>>
        列表式 
        <input type="radio" name="islist" value="2"<?=$r[islist]==2?' checked':''?>>
        页面内容式 
        <input name="oldislist" type="hidden" id="oldislist" value="<?=$r[islist]?>"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">&nbsp;</td>
      <td height="25" bgcolor="#FFFFFF"><font color="#666666">说明：封面式要选择封面模板、列表式要选择列表模板、内容式要录入页面内容</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">封面模板</td>
      <td height="25" bgcolor="#FFFFFF"><select name="classtempid">
          <?=$classtemp?>
        </select> <input type="button" name="Submit6223" value="管理封面模板" onclick="window.open('template/ListClasstemp.php?gid=<?=$thegid?>');"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">所用列表模板(*)</td>
      <td height="25" bgcolor="#FFFFFF"> <select name="listtempid" id="listtempid">
          <?=$listtemp_options?>
        </select> <input type="button" name="Submit622" value="管理列表模板" onclick="window.open('template/ListListtemp.php?gid=<?=$thegid?>');">
        *</td>
    </tr>
    <tr> 
      <td rowspan="3" valign="top" bgcolor="#FFFFFF">列表式设置</td>
      <td height="25" bgcolor="#FFFFFF"> <input name="reorder" type="text" id="reorder" value="<?=$r[reorder]?>" size="38"> 
        <select name="orderselect" onchange="document.form1.reorder.value=this.value">
          <option value="newstime DESC"></option>
          <option value="newstime DESC">按发布时间降序排序</option>
          <option value="id DESC">按ID降序排序</option>
          <option value="onclick DESC">按点击率降序排序</option>
          <option value="totaldown DESC">按下载数降序排序</option>
          <option value="plnum DESC">按评论数降序排序</option>
        </select> </td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF"> <table border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="90">显示总记录数</td>
            <td><input name="maxnum" type="text" id="maxnum" value="<?=$r[maxnum]?>" size="6"> 
              <font color="#666666">(0为显示所有记录)</font> </td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF"> <table border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="90">每页显示记录数</td>
            <td><input name="ztnum" type="text" id="ztnum3" value="<?=$r[ztnum]?>" size="6"></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">页面内容<font color="#666666">(支持标签同封面模板)</font></td>
      <td height="25" bgcolor="#FFFFFF">请将内容<a href="#ecms" onclick="window.clipboardData.setData('Text',document.form1.classtext.value);document.form1.classtext.select()" title="点击复制模板内容"><strong>复制到Dreamweaver(推荐)</strong></a>或者使用<a href="#ecms" onclick="window.open('template/editor.php?getvar=opener.document.form1.classtext.value&returnvar=opener.document.form1.classtext.value&fun=ReturnHtml','editclasstext','width=880,height=600,scrollbars=auto,resizable=yes');"><strong>模板在线编辑</strong></a>进行可视化编辑</td>
    </tr>
    <tr> 
      <td height="25" colspan="2" bgcolor="#FFFFFF">
<textarea name="classtext" cols="80" rows="23" id="classtext" style="WIDTH: 100%"><?=htmlspecialchars(stripSlashes($addr[classtext]))?></textarea></td>
    </tr>
    <tr> 
      <td height="25" colspan="2">JS相关设置</td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">是否生成JS调用</td>
      <td bgcolor="#FFFFFF">
<input type="radio" name="nrejs" value="0"<?=$r[nrejs]==0?' checked':''?>>
        生成 
        <input type="radio" name="nrejs" value="1"<?=$r[nrejs]==1?' checked':''?>>
        不生成</td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">所用JS模板</td>
      <td bgcolor="#FFFFFF">
<select name="jstempid" id="jstempid">
          <?=$jstemp?>
        </select> <input type="button" name="Submit62223" value="管理JS模板" onclick="window.open('template/ListJstemp.php?gid=<?=$thegid?>');"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">最新专题JS显示</td>
      <td height="25" bgcolor="#FFFFFF"> <input name="newline" type="text" id="newline" value="<?=$r[newline]?>" size="38">
        条记录</td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">热门专题JS显示</td>
      <td height="25" bgcolor="#FFFFFF"> <input name="hotline" type="text" id="hotline" value="<?=$r[hotline]?>" size="38">
        条记录</td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">推荐专题JS显示</td>
      <td height="25" bgcolor="#FFFFFF"> <input name="goodline" type="text" id="goodline" value="<?=$r[goodline]?>" size="38">
        条记录</td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">热门评论信息js显示</td>
      <td bgcolor="#FFFFFF"> <input name="hotplline" type="text" id="hotplline" value="<?=$r[hotplline]?>" size="38">
        条记录</td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">头条信息js显示</td>
      <td bgcolor="#FFFFFF"> <input name="firstline" type="text" id="firstline" value="<?=$r[firstline]?>" size="38">
        条记录</td>
    </tr>
	<?php
  	$ztfnum=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsztf");
  	if($ztfnum)
  	{
  		$editorfnum=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsztf where fform='editor' limit 1");	
		if($editorfnum)
		{
			include('ecmseditor/infoeditor/fckeditor.php');
		}
  	?>
    <tr> 
      <td height="25" colspan="2">自定义字段设置</td>
    </tr>
    <?php
	@include('../data/html/ztaddform.php');
	?>
	<tr bgcolor="#FFFFFF"> 
          
      <td height="30" colspan="2"><strong>专题自定义字段调用说明</strong><br>
        内置调用专题自定义字段函数：ReturnZtAddField(专题ID,字段名)，专题ID=0为当前专题ID。取多个字段内容可用逗号隔开，例子：<br>
        取得'classtext'字段内容：$value=ReturnZtAddField(0,'classtext'); //$value就是字段内容。<br>
        取得多个字段内容：$value=ReturnZtAddField(1,'ztid,classtext'); //$value['classtext']才是字段内容。</td>
    </tr>
	<?php
	}
	?>
    <tr> 
      <td height="25" bgcolor="#FFFFFF"> <div align="center"></div></td>
      <td bgcolor="#FFFFFF"> <input type="submit" name="Submit" value="提交"> &nbsp;&nbsp; 
        <input type="reset" name="Submit2" value="重置"> </td>
    </tr>
    <tr> 
      <td colspan="2"> 
  </form>
</table>
</body>
</html>
<?php
db_close();
$empire=null;
?>