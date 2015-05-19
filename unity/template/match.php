<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include_once("db_mysql.php");
include_once("common.php");

session_start();
$conn= db_connect($host,$db_passwd,$db_name,$db);

$temp= array();
$temp1= array();
$temp2= array();
$temp3= array();
$temp[0]= $_POST['stage_length'];
$temp[1]= $_POST['stage_width'];
$temp[2]= $_POST['stage_area'];
$temp[3]= $_POST['length'];
$temp[4]= $_POST['width'];
$temp[5]= $_POST['height'];
$temp[6]= $_POST['num'];
$temp[7]= $_POST['port'];
$temp[8]= $_POST['audience'];
$temp1[0]= 'stage_length';
$temp1[1]= 'stage_width';
$temp1[2]= 'stage_area';
$temp1[3]= 'length';
$temp1[4]= 'width';
$temp1[5]= 'height';
$temp1[6]= 'num';
$temp1[7]= 'port';
$temp1[8]= 'audience';
$temp3[0]= '舞台长';
$temp3[1]= '舞台宽';
$temp3[2]= '舞台面积';
$temp3[3]= '台口长';
$temp3[4]= '台口宽';
$temp3[5]= '台口高';
$temp3[6]= '吊杆数量';
$temp3[7]= '吊灯接口数';
$temp3[8]= '观众席座位数';
$flag= array();
$action= $_POST['action'];

if(empty($temp[0])||empty($temp[1])||empty($temp[2])||empty($temp[3])||empty($temp[4])||empty($temp[5])||empty($temp[6])||empty($temp[7])||empty($temp[8]))
{
	$err_info= "输入的内容不能为空！";
	showerrpage($err_info);
	exit;
}

if($action== "提交")  
{
	for($i=0; $i<9; $i++)
	{
		$sql= "select ".$temp1[$i]." from standard where id=($i+1)";
		$result= mysql_query($sql) or die("ERROR: ".mysql_error()."<br/>SQL=".$sql);
		if($num= mysql_num_rows($result))
		{
			$row= mysql_fetch_array($result);
			$temp2[$i]= $row[$temp1[$i]];
		}
		if($temp[$i]<= $temp2[$i])
			$flag[$i]= "匹配";
		else
			$flag[$i]= "不匹配";	
	}
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>匹配查询结果</title>
</head>

<body>
<div id="header">
	<center>
	<img src="../img/match.jpg" />
    </center>
</div>
<hr align="center" width="90%" />
<p>&nbsp;</p>
<div>
        <table border="1px" align="center" width="56%">
        <tr>
        	<td align="center" height="25px">参数</td>
            <td align="center" height="25px">输入值</td>
            <td align="center" height="25px">标准值</td>
            <td align="center" height="25px">匹配结果</td>
        </tr>
        <?php for($i=0; $i<9; $i++) 
		{ ?>
        <tr>
            <td align="center"><?php echo $temp3[$i]; ?></td>
            <td align="center"><?php echo $temp[$i]; ?></td>
            <td align="center"><?php echo $temp2[$i]; ?></td>
            <td align="center"><?php echo $flag[$i]; ?></td>
        </tr>
        <?php } ?>
        </table>
</div>
<p>&nbsp;</p>
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
exit;
?>