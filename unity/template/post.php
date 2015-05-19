<?php
include_once("db_mysql.php");
include_once("common.php");

session_start();
$conn= db_connect($host,$db_passwd,$db_name,$db);

if(isset($_SESSION['user_id']))
	$user_id= $_SESSION['user_id'];
	
if(empty($user_id))
{
	$user_name= $_POST['name'];
	$passwd = $_POST['password'];
	$role=$_POST['role'];
	$role_id=$role.'_id';
	
	if(!empty($user_name)&& !empty($passwd))
	{
		$pw= md5($passwd);
		$sql= "select ".mysql_escape_string($role_id)." from ".mysql_escape_string($role)." where name='".
		mysql_escape_string($user_name)."' and passwd='".mysql_escape_string($pw)."'";
		$result= mysql_query($sql) or die ('ERROR: '.mysql_error()."<br/>SQL=".$sql); 
		
		if(!mysql_num_rows($result)==0)
		{
			$row= mysql_fetch_array($result);
			$user_id= $row['$role_id'];
			
			$_SESSION['user_id']=$user_id;
			$_SESSION['user_name']=$user_name;
		}
		else
		{
			$err_info= "用户名或密码错误！";
			showerrpage($err_info);
			exit;
		}	
	}	
	else
	{
		$err_info= "请登录后执行此操作";
		showerrpage($err_info);
		exit;
	}	
}

$id= $_POST['id'];
$basic= $_POST['basic'];          //剧场基本信息
$showinfo= $_POST['showinfo'];    //演出信息
$avaible= $_POST['avaible'];      //空挡期信息
$theater_id= $_POST['theater_id']; 
$action= $_POST['action'];

if(empty($basic)||empty($showinfo)||empty($avaible))
{
	$err_info= "发布的内容不能为空！";
	showerrpage($err_info);
	exit;
}

$basic= delete_htm($basic);
$basic= str_replace("\r\n","<br>&nbsp;&nbsp;&nbsp;&nbsp;",$basic);

if($action== "mod")  //修改内容的操作选项
{
	if(empty($id)||!is_numeric($id))
	{
		$err_info= "请求参数有误";
		showerrpage($err_info);
		exit;
	}
	$basic= mysql_escape_string($basic);
	$sql= "update theater set basic='".$basic."', where theater_id=$id";
}
else
{
	if(empty($id)||!is_numeric($id))
	{
		$err_info= "请求参数有误";
		showerrpage($err_info);
		exit;
	}
	$basic= mysql_escape_string($basic);
	$sql= "insert into theater(basic) values($basic)";
}
mysql_query($sql) or die("ERROR: ".mysql_error()."<br/>SQL=".$sql);

close_db($conn);

exit;
?>