<?php
	$host="localhost";  //数据库服务器名称
	$db_name="root";       //数据库用户名
	$db_passwd="";        //数据库密码
	$db="unity3d";      //数据库名称
	mysql_query("set names utf8");
	function db_connect($host,$db_passwd,$db_name,$db)    //连接数据库
	{
		if(!($conn =mysql_connect($host,$db_name,$db_passwd)))
			return false;
			
		//如果没有该数据库，则返回失败
		if(!mysql_select_db($db))
		{
			mysql_close($conn);
			return false;
		}
		else
			return $conn;
	}
	
	function close_db($conn)     //断开与数据库的连接
	{
		mysql_close($conn);
	}
?>