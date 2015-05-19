<?php
include_once("db_mysql.php");

session_start();
$conn= db_connect($host,$db_passwd,$db_name,$db);

if(!empty($_GET['admin1']))
{
	$user_id= $_GET['admin1'];
	$sql= "select name, passwd from user where user_id=".$user_id;
	$result= mysql_query($sql) or die ('ERROR:'.mysql_error());
	if(mysql_num_rows($result))
	{
		$row= mysql_fetch_array($result);
		$name= $row['name'];
		$passwd= $row['passwd'];
	}
	$name= mysql_escape_string($row['name']);
	$passwd= mysql_escape_string($row['passwd']);
	$sql= "insert into admin1(name, passwd) values('$name','$passwd')";
	mysql_query($sql) or die ('ERROR:'.mysql_error());
	$sql= "delete from user where user_id=".$user_id;
	mysql_query($sql) or die ('ERROR:'.mysql_error());
}

close_db($conn);
header("Location: memberlist.php");
?>