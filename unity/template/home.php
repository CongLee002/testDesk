<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>虚拟剧场显示系统</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="header">
	<center>
	<img src="../img/index.jpg" />
    </center>
</div>
<hr align="center" width="90%" />

<div id="container">
	<div id="bar"> 
    <table align="center">
        <tr>
        	<td width="80px" align="center">首页</td>
            <td width="80px" align="center"><a href="theater.php">剧场信息</a></td>
            <td width="80px" align="center"><a href="group.php">剧团动态</a></td>
            <td width="80px" align="center"><a href="experience.html">虚拟体验</a></td>
            <td width="80px" align="center"><a href="match.html">匹配查询</a></td>
            <td width="80px" align="center"></td>
            <td width="80px" align="center"></td>
            <td width="80px" align="center"></td>
            <td width="80px" align="center"></td>
            <td width="180px" align="center"></td>
        </tr>
    </table>
  </div>
    <hr align="center" width="90%" />
    
       <div id="theaterinfo"> 
    <table align="center">
    	<tr>
        	<td align="center">剧场风采</td>
        </tr>      
    </table>
    <hr align="center" width="90%" />
     <table align="center" border="0px" width="90%">
    	<tr>
        	<td align="center"><a href="country.html"><img src="../img/guojia.jpg"  id="jianjie"/></a></td>
            <td align="left" width="40%"><a href="country.html">国家大剧院</a></td>
        </tr>
       
        <tr>
        	<td align="center"><a href="shanghai.html"><img src="../img/shanghai.jpg" id="jianjie" /></a></td>
            <td align="left"><a href="shanghai.html">上海东方艺术中心</a></td>
        </tr>
        <tr>
        	<td align="center"><a href="beijing.html"><img src="../img/beijing.jpg" id="jianjie" /></a></td>
            <td align="left"><a href="#">北京保利剧院</a></td>
        </tr>
        <tr>
        	<td align="center"><a href="mei.html"><img src="../img/meilanfang.jpg" id="jianjie" /></a></td>
            <td align="left"><a href="mei.html">梅兰芳大剧院</a></td>
        </tr>
        <tr>
        	<td align="center"><a href="wan.html"><img src="../img/wanshida.jpg" id="jianjie" /></a></td>
            <td align="left"><a href="wan.html">万事达中心</a></td>
        </tr>     
    </table>
    </div>
    
   <div id="theaternews">
    <table align="center">
    	<tr>
        	<td align="center">剧场动态
            <!-- <a href="add.php">添加信息</a>-->
                         </td>
        </tr>      
    </table>
    <hr align="center" width="90%" />
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
						 
				?><br /><img src="../img/QQ20131226200327_18.gif" />
						 <!--<a href="delete.php?id=<?php //echo $row['theater_id'];?>" class='delete'>
                          <input type="hidden" name="theater_id" value="<?php //echo $row['theater_id'];?>" />删除</a>
                         <a href="edit.php?id=<?php //echo $row['theater_id'];?>">修改</a>
                          <input type="hidden" name="theater_id" value="<?php //echo $row['theater_id'];?>" />-->
                         
                         <?php
                         echo "</li>";
						}
                ?>
           
        
        <br />
      </ul>
    </div>
    
    <div id="unity"> 
    <table align="center">
    	<tr>
        	<td align="center">虚拟剧场体验</td>
        </tr>      
    </table>
    <hr align="center" width="90%" />
    <table align="center" border="1px" width="90%">
    	<tr>
        	<td align="center">国家大剧院</td>
            <td align="center"><a href="experience.html">体验开始</a></td>
        </tr>
        <tr>
       	  <td align="center" colspan="2"><img src="../img/exp.jpg" /></td>
        </tr>
    </table>
    </div>
    
    <div id="groupnews">
    <table align="center">
    	<tr>
        	<td align="center">剧团动态</td>
        </tr>      
    </table>
    <hr align="center" width="90%" />
     <?php
	include('../include/conn.php');
	$sql1 = "SELECT * FROM `group1` order by `group_id` desc LIMIT 0,5";
 	$result1 = mysql_query($sql1) or die(mysql_error());
	$news1 = array();
    $j=0;
    while($row1 = mysql_fetch_array($result1) ){
       $news1[$j] = $row1;
       $j++;
       }
	?>
    <ul class="issue_title">
                   
                <?php
                    foreach($news1 as $row1 ){                           
                       echo "<li>".$row1['showinfo'].""; 
						 //echo "<li>".$row1['showinfo']."<a href='javascript:void(0)' deid='".$row1['group_id']."' class='delete'>删除</a>&nbsp;<a href='edit.php'>修改</a></li>";?>
                       <br /><img src="../img/QQ20131226200327_18.gif" /> 
				<?php
				  echo "</li>";
                    }
                ?>
           
                <br />
      </ul>
    </div>
    
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
    <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>

<hr align="left" width="100%" />
<center>
<div id="footer" style="width:100%;">
	<p>版权所有©2014</p>
</div>
</center>
</body>
</html>
