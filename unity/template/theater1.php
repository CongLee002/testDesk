<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>剧场信息</title>
<link href="../css/basic.css" type="text/css"  rel="stylesheet"/>
<!--<link href="style.css"  type="text/css" rel="stylesheet"/>-->
<link href="../css/basic.css" type="text/css" rel="stylesheet" />
<script language="Javascript" type="text/javascript"> 
setInterval("timer.innerHTML=new Date().toLocaleString()"); 
        window.onload = function (){
  setInterval("timer.innerHTML=new Date().toLocaleString()",1000); 
  }

</script>
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
        	<td width="80px" align="center"><a href="theaterhome.php">首页</a></td>
            <td width="80px" align="center">剧场信息</td>
            <td width="80px" align="center"><a href="group1.php">剧团动态</a></td>
            <td width="80px" align="center"><a href="experience.html">虚拟体验</a></td>
            <td width="80px" align="center"><a href="match1.html">匹配查询</a></td>
           
            <td width="120px" align="center"><div id="timer" class="right"></div></td>
        </tr>
    </table>
  </div>
    <hr align="center" width="60%" />
    
    <div id="theaterinfo" style="width: 50%;padding:20px; margin-left:auto; margin-right:auto;"> 
      <?php
	include('../include/conn.php');
	$sql = "SELECT * FROM theater order by theater_id desc LIMIT 0,5";
 	$result = mysql_query($sql);
	$news = array();
    $i=0;
    while($row = mysql_fetch_array($result) ){
       $news[$i] = $row;
       $i++;
       }
	?>
    <ul class="issue_title">
                
                <?php
                    foreach($news as $row ){                           
                        //echo "<li>".$row['showinfo']."</a><a href='delete.php' deid='".$row['theater_id']."' class='delete'>删除</a></li>"; 
						 echo "<li>".$row['showinfo']."";
						 
				?>
						 <a href="delete.php?id=<?php echo $row['theater_id'];?>" class='delete'>
                          <input type="hidden" name="theater_id" value="<?php echo $row['theater_id'];?>" />删除</a>
                         <a href="edit.php?id=<?php echo $row['theater_id'];?>">修改</a>
                          <input type="hidden" name="theater_id" value="<?php echo $row['theater_id'];?>" />
                         <br /><img src="../img/QQ20131226200327_18.gif" />
                         <?php
                         echo "</li>";
						}
                ?>
           
    
</div>
    

<hr align="center" width="60%" />
<center>
<div id="footer">
	<p>版权所有©2014</p>
</div>
</center>

</body>
</html>
