<?php
//返回参数内容
function ReturnSettingString($r){
	$filename='data/setting.txt';
	$text=ReadFiletext($filename);
	//后台安全
	$text=str_replace('[!@--do_loginauth--@!]',addslashes($r[do_loginauth]),$text);
	$text=str_replace('[!@--do_ecookiernd--@!]',addslashes($r[do_ecookiernd]),$text);
	$text=str_replace('[!@--do_ckhloginfile--@!]',intval($r[do_ckhloginfile]),$text);
	$text=str_replace('[!@--do_ckhloginip--@!]',intval($r[do_ckhloginip]),$text);
	$text=str_replace('[!@--do_theloginlog--@!]',intval($r[do_theloginlog]),$text);
	$text=str_replace('[!@--do_thedolog--@!]',intval($r[do_thedolog]),$text);
	//COOKIE
	$text=str_replace('[!@--phome_cookiedomain--@!]',addslashes($r[phome_cookiedomain]),$text);
	$text=str_replace('[!@--phome_cookiepath--@!]',addslashes($r[phome_cookiepath]),$text);
	$text=str_replace('[!@--phome_cookievarpre--@!]',addslashes($r[phome_cookievarpre]),$text);
	$text=str_replace('[!@--phome_cookieadminvarpre--@!]',addslashes($r[phome_cookieadminvarpre]),$text);
	$text=str_replace('[!@--phome_cookieckrnd--@!]',addslashes($r[phome_cookieckrnd]),$text);
	//防火墙
	$text=str_replace('[!@--efw_open--@!]',intval($r[efw_open]),$text);
	$text=str_replace('[!@--efw_pass--@!]',addslashes($r[efw_pass]),$text);
	$text=str_replace('[!@--efw_adminloginurl--@!]',addslashes($r[efw_adminloginurl]),$text);
	$text=str_replace('[!@--efw_adminhour--@!]',addslashes($r[efw_adminhour]),$text);
	$text=str_replace('[!@--efw_adminweek--@!]',addslashes($r[efw_adminweek]),$text);
	$text=str_replace('[!@--efw_adminckpassvar--@!]',addslashes($r[efw_adminckpassvar]),$text);
	$text=str_replace('[!@--efw_adminckpassval--@!]',addslashes($r[efw_adminckpassval]),$text);
	$text=str_replace('[!@--efw_cleargettext--@!]',addslashes($r[efw_cleargettext]),$text);
	return $text;
}

//生成配置文件
function GetSettingConfig($string){
	$filename=ECMS_PATH."e/class/config.php";
	$exp='//-------EmpireCMS.Seting.area-------';
	$text=ReadFiletext($filename);
	$r=explode($exp,$text);
	if($r[0]=='')
	{
		return false;
	}
	$r[1]=$string;
	$setting=$r[0].$exp.$r[1].$exp.$r[2];
	WriteFiletext_n($filename,$setting);
}

//防火墙设置
function SetFirewall($add,$userid,$username){
	global $do_loginauth,$do_ecookiernd,$do_ckhloginip,$do_ckhloginfile,$do_theloginlog,$do_thedolog,$phome_cookiedomain,$phome_cookiepath,$phome_cookievarpre,$phome_cookieadminvarpre,$phome_cookieckrnd,$efw_pass,$efw_adminckpassvar,$efw_adminckpassval,$efw_open;
	$r[efw_open]=(int)$add[fw_open];
	$r[efw_pass]=$add[fw_pass];
	$r[efw_adminloginurl]=$add[fw_adminloginurl];
	//时间点
	$hour=$add['fw_adminhour'];
	$hcount=count($hour);
	$adminhour='';
	if($hcount)
	{
		$dh='';
		for($i=0;$i<$hcount;$i++)
		{
			$adminhour.=$dh.intval($hour[$i]);
			$dh=',';
		}
	}
	$r[efw_adminhour]=$adminhour;
	//星期
	$week=$add['fw_adminweek'];
	$wcount=count($week);
	$adminweek='';
	if($wcount)
	{
		$dh='';
		for($i=0;$i<$wcount;$i++)
		{
			$adminweek.=$dh.intval($week[$i]);
			$dh=',';
		}
	}
	$r[efw_adminweek]=$adminweek;
	$r[efw_adminckpassvar]=$add[fw_adminckpassvar];
	$r[efw_adminckpassval]=$add[fw_adminckpassval];
	$r[efw_cleargettext]=$add[fw_cleargettext];
	//原来设置
	$r[do_loginauth]=$do_loginauth;
	$r[do_ecookiernd]=$do_ecookiernd;
	$r[do_ckhloginfile]=$do_ckhloginfile;
	$r[do_ckhloginip]=$do_ckhloginip;
	$r[do_theloginlog]=$do_theloginlog;
	$r[do_thedolog]=$do_thedolog;

	$r[phome_cookiedomain]=$phome_cookiedomain;
	$r[phome_cookiepath]=$phome_cookiepath;
	$r[phome_cookievarpre]=$phome_cookievarpre;
	$r[phome_cookieadminvarpre]=$phome_cookieadminvarpre;
	$r[phome_cookieckrnd]=$phome_cookieckrnd;
	$string=ReturnSettingString($r);
	GetSettingConfig($string);
	//操作日志
	insert_dolog('');
	if(($r[efw_open]&&!$efw_open)||$efw_pass!=$r[efw_pass]||$efw_adminckpassvar!=$r[efw_adminckpassvar]||$efw_adminckpassval!=$r[efw_adminckpassval])
	{
		printerror('SetFirewallSuccessLogin','../index.php');
	}
	printerror('SetFirewallSuccess','SetFirewall.php');
}

//安全设置
function SetSafe($add,$userid,$username){
	global $efw_open,$efw_pass,$efw_adminloginurl,$efw_adminhour,$efw_adminweek,$efw_adminckpassvar,$efw_adminckpassval,$efw_cleargettext,$do_ecookiernd,$phome_cookieadminvarpre;
	$r[do_loginauth]=$add[loginauth];
	$r[do_ecookiernd]=$add[ecookiernd];
	$r[do_ckhloginfile]=(int)$add[ckhloginfile];
	$r[do_ckhloginip]=(int)$add[ckhloginip];
	$r[do_theloginlog]=(int)$add[theloginlog];
	$r[do_thedolog]=(int)$add[thedolog];

	$r[phome_cookiedomain]=$add[cookiedomain];
	$r[phome_cookiepath]=$add[cookiepath];
	$r[phome_cookievarpre]=$add[cookievarpre];
	$r[phome_cookieadminvarpre]=$add[cookieadminvarpre];
	$r[phome_cookieckrnd]=$add[cookieckrnd];
	//原来设置
	$r[efw_open]=$efw_open;
	$r[efw_pass]=$efw_pass;
	$r[efw_adminloginurl]=$efw_adminloginurl;
	$r[efw_adminhour]=$efw_adminhour;
	$r[efw_adminweek]=$efw_adminweek;
	$r[efw_adminckpassvar]=$efw_adminckpassvar;
	$r[efw_adminckpassval]=$efw_adminckpassval;
	$r[efw_cleargettext]=$efw_cleargettext;
	$string=ReturnSettingString($r);
	GetSettingConfig($string);
	//操作日志
	insert_dolog('');
	if($do_ecookiernd!=$r[do_ecookiernd]||$phome_cookieadminvarpre!=$r[phome_cookieadminvarpre])
	{
		printerror('SetSafeSuccessLogin','../index.php');
	}
	printerror('SetSafeSuccess','SetSafe.php');
}
?>