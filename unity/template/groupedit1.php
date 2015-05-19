<?php 
include('../include/conn.php');
$id= $_GET['id'];
//echo $id;
$select=mysql_query("SELECT * FROM `group1` WHERE `group_id` = $id") or die(mysql_error());
$row = mysql_fetch_array($select);
?>
<!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改信息</title>
<link href="../css/basic.css" type="text/css"  rel="stylesheet"/>
</head>

<body>
<div id="header">
	<center>
	<img src="../img/banner.jpg" width="600px" height="250px"/>
    </center>
<hr align="center" width="60%" />
</div>

<div id="container">
	<div id="bar"> 
    <table align="center" style="margin-left:0px;">
        <tr>
        	<td width="80px" align="center"><a href="systemhome.php">首页</a></td>
            <td width="80px" align="center"><a href="theater3.php">剧场信息</td>
            <td width="80px" align="center"><a href="group.html">剧团动态</a></td>
            <td width="80px" align="center"><a href="experience.html">虚拟体验</a></td>
            <td width="80px" align="center"><a href="search.html">匹配查询</a></td>
           
            <td width="120px" align="center"><div id="timer" class="right"></div></td>
        </tr>
    </table>
  </div>
    <hr align="center" width="60%" />
<form action="groupedit_ok1.php" method="post" name="editinfo" id="form1">
	
    <div>
    <table>
    <tr>
    <td>
    剧团信息
    </td>
    <td>
    <textarea name="showinfo" rows="10" cols="36"><?php echo $row['showinfo'];?></textarea>
    </td>
    </tr>
    </table>
     <input name="submit" type="submit" value="提交" onClick="confirmmsg()"/>
     <input name="reset" type="reset" value="取消" /><br />
    <input type="hidden" name="group_id" value="<?php echo $row['group_id'];?>">
    </div>
</form>
<hr align="center" width="60%" />
<center>
<div id="footer" style="width:60%;">
	<p>版权所有©2014</p>
</div>
</center>

</body>
</html>
