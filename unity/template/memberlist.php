<?php
include_once("db_mysql.php");

session_start();
$conn= db_connect($host,$db_passwd,$db_name,$db);
mysql_select_db('unity3d');
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户管理</title>
</head>

<body>
<div id="header">
	<center>
	<img src="../img/index.jpg" />
    </center>
</div>
<hr align="center" width="90%" />

<table align="center">
        <tr>
        	<td width="80px" align="center"><a href="systemhome.php">首页</a></td>
            <td width="80px" align="center"><a href="theater3.php">剧场信息</a></td>
            <td width="80px" align="center"><a href="group3.php">剧团动态</a></td>
            <td width="80px" align="center"><a href="experience.html">虚拟体验</a></td>
            <td width="80px" align="center"><a href="match1.html">匹配查询</a></td>
            <td width="80px" align="center">用户管理</td>
        </tr>
    </table>
<hr align="center" width="90%" />
<div id="container">
<p>&nbsp;</p>
<?php
if(!empty($_GET['de1']))
{
	$user_id= $_GET['de1'];
	$sql= "delete from user where user_id=".$user_id;
	mysql_query($sql) or die ('ERROR:'.mysql_error());
}

$sql= "select user_id, name from user order by user_id desc";
$result= mysql_query($sql) or die("<br/>ERROR:".mysql_error()."<br/>产生问题的SQL:".$sql);
?>
	<table align="center" border="1px" width="50%">
    <tr>
    	<td align="center">用户ID</td>
        <td align="center">普通用户</td>
        <td align="center">&nbsp;</td>
    </tr>
<?php
if(mysql_num_rows($result))
{
	while($row= mysql_fetch_array($result))
	{
?>
	<tr>
    	<td align="center"><?=$row['user_id']; ?></td>
        <td align="center"><?=$row['name']; ?></td>
        <td align="center"><a href="<?php echo "?de1=".$row['user_id']; ?>">删除</a></td>
    </tr>	
    </table>
<?php
	}
}
else
{
?>
	<tr>
    	<td align="center" colspan="3">暂无注册用户信息！</td>
    </tr>
	</table>
<?php }?>

<?php
if(!empty($_GET['de2']))
{
	$admin1_id= $_GET['de2'];
	$sql= "delete from admin1 where admin1_id=".$admin1_id;
	mysql_query($sql) or die ('ERROR:'.mysql_error());
}

$sql= "select admin1_id, name from admin1 order by admin1_id desc";
$result= mysql_query($sql) or die("<br/>ERROR:".mysql_error()."<br/>产生问题的SQL:".$sql);
?>
	<br><br>
	<table align="center" border="1px" width="50%">
    <tr>
    	<td align="center">用户ID</td>
        <td align="center">剧场管理员</td>
        <td align="center">&nbsp;</td>
    </tr>
<?php
if(mysql_num_rows($result))
{
	while($row= mysql_fetch_array($result))
	{
?>
	<tr>
    	<td align="center"><?=$row['admin1_id']; ?></td>
        <td align="center"><?=$row['name']; ?></td>
        <td align="center"><a href="<?php echo "?de2=".$row['admin1_id']; ?>">删除</a></td>
    </tr>	
    </table>
    </form>
<?php
	}
}
else
{
?>
	<tr>
    	<td align="center" colspan="3">暂无注册用户信息！</td>
    </tr>
	</table>
<?php }?>

<?php
if(!empty($_GET['de3']))
{
	$admin2_id= $_GET['de3'];
	$sql= "delete from admin2 where admin2_id=".$admin2_id;
	mysql_query($sql) or die ('ERROR:'.mysql_error());
}

$sql= "select admin2_id, name from admin2 order by admin2_id desc";
$result= mysql_query($sql) or die("<br/>ERROR:".mysql_error()."<br/>产生问题的SQL:".$sql);
?>
	<br><br>
	<table align="center" border="1px" width="50%">
    <tr>
    	<td align="center">用户ID</td>
        <td align="center">剧团管理员</td>
        <td align="center">&nbsp;</td>
    </tr>
<?php
if(mysql_num_rows($result))
{
	while($row= mysql_fetch_array($result))
	{
?>
	<tr>
    	<td align="center"><?=$row['admin2_id']; ?></td>
        <td align="center"><?=$row['name']; ?></td>
        <td align="center"><a href="<?php echo "?de3=".$row['admin2_id']; ?>">删除</a></td>
    </tr>	
    </table>
<?php
	}
}
else
{
?>
	<tr>
    	<td align="center" colspan="3">暂无注册用户信息！</td>
    </tr>
	</table>
<?php }?>

</div>  
<p>&nbsp;</p>   
<hr align="center" width="90%" />
<center>
<div id="footer">
	<p>版权所有©2014</p>
</div>
</center>
    
</body>
</html>
<?php
close_db($conn);
?>	
    
  
    

