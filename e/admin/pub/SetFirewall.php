<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
//验证用户
$lur=is_login();
$logininid=$lur['userid'];
$loginin=$lur['username'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];
//验证权限
CheckLevel($logininid,$loginin,$classid,"firewall");
if($do_openonlinesetting==0||$do_openonlinesetting==2)
{
	echo"没有开启后台在线配置参数，如果要使用在线配置先修改/e/class/config.php文件的$do_openonlinesetting变量设置开启";
	exit();
}

$enews=$_POST['enews'];
if(empty($enews))
{$enews=$_GET['enews'];}
if($enews)
{
	include('setfun.php');
}
if($enews=='SetFirewall')
{
	SetFirewall($_POST,$logininid,$loginin);
}

db_close();
$empire=null;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>网站防火墙</title>
<link href="../adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td>位置：<a href="SetFirewall.php">网站防火墙</a> 
      <div align="right"> </div></td>
  </tr>
</table>
<form name="setform" method="post" action="SetFirewall.php" onsubmit="return confirm('确认设置?');">
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
    <tr class="header"> 
      <td height="25" colspan="2">网站防火墙 <input name="enews" type="hidden" id="enews" value="SetFirewall"> 
      </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25"><div align="left">开启防火墙</div></td>
      <td height="25"><input type="radio" name="fw_open" value="1"<?=$efw_open==1?' checked':''?>>
        开启 
        <input type="radio" name="fw_open" value="0"<?=$efw_open==0?' checked':''?>>
        关闭</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td width="17%" height="25"><div align="left">防火墙加密密钥</div></td>
      <td width="83%" height="25"><input name="fw_pass" type="text" id="fw_pass" value="<?=$efw_pass?>" size="35">
        <font color="#666666">
        <input type="button" name="Submit3" value="随机" onclick="document.setform.fw_pass.value='<?=make_password(36)?>';">
        (填写10~50个任意字符，最好多种字符组合)</font></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" valign="top">
<div align="left">允许后台登陆的域名</div></td>
      <td height="25"><input name="fw_adminloginurl" type="text" id="fw_adminloginurl" value="<?=$efw_adminloginurl?>" size="35">
        <font color="#666666"><br>
        (设置后必须通过这个域名才能访问后台，如：http://admin.phome.net)</font></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">允许登陆后台的时间点<br> <font color="#666666">(不选为不限制)</font></td>
      <td height="25"><table width="500" border="0" cellspacing="1" cellpadding="3">
          <tr> 
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="0"<?=strstr(','.$efw_adminhour.',',',0,')?' checked':''?>>
              0点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="1"<?=strstr(','.$efw_adminhour.',',',1,')?' checked':''?>>
              1点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="2"<?=strstr(','.$efw_adminhour.',',',2,')?' checked':''?>>
              2点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="3"<?=strstr(','.$efw_adminhour.',',',3,')?' checked':''?>>
              3点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="4"<?=strstr(','.$efw_adminhour.',',',4,')?' checked':''?>>
              4点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="5"<?=strstr(','.$efw_adminhour.',',',5,')?' checked':''?>>
              5点</td>
          </tr>
          <tr> 
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="6"<?=strstr(','.$efw_adminhour.',',',6,')?' checked':''?>>
              6点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="7"<?=strstr(','.$efw_adminhour.',',',7,')?' checked':''?>>
              7点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="8"<?=strstr(','.$efw_adminhour.',',',8,')?' checked':''?>>
              8点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="9"<?=strstr(','.$efw_adminhour.',',',9,')?' checked':''?>>
              9点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="10"<?=strstr(','.$efw_adminhour.',',',10,')?' checked':''?>>
              10点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="11"<?=strstr(','.$efw_adminhour.',',',11,')?' checked':''?>>
              11点</td>
          </tr>
          <tr> 
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="12"<?=strstr(','.$efw_adminhour.',',',12,')?' checked':''?>>
              12点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="13"<?=strstr(','.$efw_adminhour.',',',13,')?' checked':''?>>
              13点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="14"<?=strstr(','.$efw_adminhour.',',',14,')?' checked':''?>>
              14点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="15"<?=strstr(','.$efw_adminhour.',',',15,')?' checked':''?>>
              15点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="16"<?=strstr(','.$efw_adminhour.',',',16,')?' checked':''?>>
              16点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="17"<?=strstr(','.$efw_adminhour.',',',17,')?' checked':''?>>
              17点</td>
          </tr>
          <tr> 
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="18"<?=strstr(','.$efw_adminhour.',',',18,')?' checked':''?>>
              18点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="19"<?=strstr(','.$efw_adminhour.',',',19,')?' checked':''?>>
              19点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="20"<?=strstr(','.$efw_adminhour.',',',20,')?' checked':''?>>
              20点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="21"<?=strstr(','.$efw_adminhour.',',',21,')?' checked':''?>>
              21点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="22"<?=strstr(','.$efw_adminhour.',',',22,')?' checked':''?>>
              22点</td>
            <td><input name="fw_adminhour[]" type="checkbox" id="fw_adminhour[]" value="23"<?=strstr(','.$efw_adminhour.',',',23,')?' checked':''?>>
              23点</td>
          </tr>
        </table></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">允许登陆后台的星期<br> <font color="#666666">(不选为不限制)</font> </td>
      <td height="25"><table width="500" border="0" cellspacing="1" cellpadding="3">
          <tr> 
            <td><input name="fw_adminweek[]" type="checkbox" id="fw_adminweek[]" value="1"<?=strstr(','.$efw_adminweek.',',',1,')?' checked':''?>>
              星期一</td>
            <td><input name="fw_adminweek[]" type="checkbox" id="fw_adminweek[]" value="2"<?=strstr(','.$efw_adminweek.',',',2,')?' checked':''?>>
              星期二</td>
            <td><input name="fw_adminweek[]" type="checkbox" id="fw_adminweek[]" value="3"<?=strstr(','.$efw_adminweek.',',',3,')?' checked':''?>>
              星期三</td>
            <td><input name="fw_adminweek[]" type="checkbox" id="fw_adminweek[]" value="4"<?=strstr(','.$efw_adminweek.',',',4,')?' checked':''?>>
              星期四</td>
          </tr>
          <tr> 
            <td><input name="fw_adminweek[]" type="checkbox" id="fw_adminweek[]" value="5"<?=strstr(','.$efw_adminweek.',',',5,')?' checked':''?>>
              星期五</td>
            <td><input name="fw_adminweek[]" type="checkbox" id="fw_adminweek[]" value="6"<?=strstr(','.$efw_adminweek.',',',6,')?' checked':''?>>
              星期六</td>
            <td><input name="fw_adminweek[]" type="checkbox" id="fw_adminweek[]" value="0"<?=strstr(','.$efw_adminweek.',',',0,')?' checked':''?>>
              星期日</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">防火墙后台预登陆验证变量名</td>
      <td height="25"><input name="fw_adminckpassvar" type="text" id="fw_pass3" value="<?=$efw_adminckpassvar?>" size="35">
        <font color="#666666">(由英文字母组成,5~20个字符组成)</font></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">防火墙后台预登陆认证码</td>
      <td height="25"><input name="fw_adminckpassval" type="text" id="fw_adminckpassval" value="<?=$efw_adminckpassval?>" size="35">
        <font color="#666666">
        <input type="button" name="Submit32" value="随机" onclick="document.setform.fw_adminckpassval.value='<?=make_password(36)?>';">
        (填写10~50个任意字符，最好多种字符组合)</font></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">
<div align="left">屏蔽提交敏感字符<br>
          <font color="#666666">(多个用半角逗号格开;<br>
          设置屏蔽前台所有提交内容及后台登陆内容)</font></div></td>
      <td height="25"><textarea name="fw_cleargettext" cols="80" rows="8" style="WIDTH: 100%" id="fw_cleargettext"><?=htmlspecialchars($efw_cleargettext)?></textarea></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25"></td>
      <td height="25"><input type="submit" name="Submit" value=" 设 置 "> &nbsp;&nbsp;&nbsp; 
        <input type="reset" name="Submit2" value="重置"></td>
    </tr>
  </table>
</form>
</body>
</html>
