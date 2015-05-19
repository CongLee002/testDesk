<?php
include_once("db_mysql.php");
include_once("common.php");
mysql_query("set names utf8");
session_start();
$conn= db_connect($host,$db_passwd,$db_name,$db);

$basic= $_POST['basic'];          
$action= $_POST['new'];

if(empty($basic))
{
	$err_info= "发布的内容不能为空！";
	showerrpage($err_info);
	exit;
}

$basic= delete_htm($basic);
$basic= str_replace("\r\n","<br>&nbsp;&nbsp;&nbsp;&nbsp;",$basic);

if($action== "提交")
{
	$basic= mysql_escape_string($basic);
	$sql= "insert into group1(showinfo) values('$basic')";
}
mysql_query($sql) or die("ERROR: ".mysql_error()."<br/>SQL=".$sql);

close_db($conn);
header("Location: group3.php");
exit;
?>