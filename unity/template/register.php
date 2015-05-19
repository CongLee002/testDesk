<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include_once("db_mysql.php");
include_once("common.php");
mysql_query("set names utf8");
$conn= db_connect($host,$db_passwd,$db_name,$db);

$user_name=$_POST['name'];
$password =$_POST['password'];
$password1=$_POST['password1'];
$role=$_POST['role'];

if(empty($user_name)||empty($password)||empty($password1)||empty($role))
{
	$err_info='注册中的每一项都必须填写或选择！';
    showerrpage($err_info);
    exit;
}

if($password !=$password1)
{
	$err_info='两次填写的密码不一致！';
	showerrpage($err_info);
	exit;
}

$pwd= md5($password);  //将密码按md5加密

$role_id=$role.'_id';
$sql= "select ".mysql_escape_string($role_id)." from ".mysql_escape_string($role)." where name='".mysql_escape_string($user_name)."'";
$result= mysql_query($sql) or die ('ERROR: '.mysql_error());

if(mysql_num_rows($result)>0)
{
	$err_info='该用户名已经存在，请更换！';
	showerrpage($err_info);
	exit;
}

$sql= "insert into ".mysql_escape_string($role)." set name='".mysql_escape_string($user_name)."',passwd='".mysql_escape_string($pwd)."'";
mysql_query($sql) or die ('ERROR:'.mysql_error());

mysql_free_result($result);
mysql_close();

if($role == "admin"){
			header("location: systemhome.php");}
			elseif($role == "admin1"){
				header("location: theaterhome.php");
				}	
			elseif($role == "admin2"){
				header("location: grouphome.php");
				}
			else{
					header("location: home.php");
				}	

?>