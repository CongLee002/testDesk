<?php
include_once("db_mysql.php");

session_start();
$conn= db_connect($host,$db_passwd,$db_name,$db);
mysql_query("set names utf8");
mysql_select_db('unity3d');
$sql= "select group_id, showinfo from group1";
$result= mysql_query($sql) or die("<br/>ERROR:".mysql_error()."<br/>产生问题的SQL:".$sql);
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>剧团动态</title>
</head>

<body>
<div id="header">
	<center>
	<img src="../img/group1.jpg" />
    </center>
</div>
<hr align="center" width="90%" />

<div id="container">
	<div id="bar"> 
    <table align="center">
        <tr>
        	<td width="80px" align="center"><a href="systemhome.php">首页</a></td>
            <td width="80px" align="center"><a href="theater3.php">剧场信息</a></td>
            <td width="80px" align="center">剧团动态</td>
            <td width="80px" align="center"><a href="experience.html">虚拟体验</a></td>
            <td width="80px" align="center"><a href="match1.html">匹配查询</a></td>
        </tr>
    </table>
  </div>
    <hr align="center" width="90%" />
<p>&nbsp;</p>	
    <div id="groupnews">
    <table align="center">
    	<tr>
        	<td align="center"><b>剧团动态</b></td>
        </tr>      
    </table>
<p>&nbsp;</p>
    <table align="center" border="0px" width="70%">
    
<?php
if($num= mysql_num_rows($result))
{
	while($row= mysql_fetch_array($result, MYSQL_ASSOC))
	{	    
?>    
    	<tr>
        	<td align="left" width="90%"><?php echo $row['showinfo']; ?></td>
            <td align="center"><a href="groupedit1.php<?php echo "?id=".$row['group_id']; ?>">编辑</a></td>
            <td align="center"><a href="groupdelete1.php<?php echo "?id=".$row['group_id']; ?>">删除</a></td>
        </tr>
<?php
	}
}
close_db($conn);
?>
        <tr>
        	<td align="center" colspan="3"><input type="submit" name="action" value="发布新的动态" 
            onclick="location='groupnew1.html'" class="button"></td>
        </tr>
    </table> 
    </div>  
</div>  
<p>&nbsp;</p>
<p>&nbsp;</p>
<hr align="center" width="90%" />
<center>
<div id="footer" style="background-color:#CCC;">
	<p>版权所有©2014</p>
</div>
</center>
    
</body>
</html>
