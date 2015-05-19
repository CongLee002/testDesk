<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include_once("db_mysql.php");
include_once("common.php");

session_start();
$conn= db_connect($host,$db_passwd,$db_name,$db);

if(isset($_POST['name'])&& isset($_POST['password']))
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
		}
		else
		{
			$err_info= "用户名或密码错误！";
			showerrpage($err_info);
			exit;
		}	
	}	
}

?>