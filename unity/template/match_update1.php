<?php
include_once("db_mysql.php");
include_once("common.php");

session_start();
$conn= db_connect($host,$db_passwd,$db_name,$db);

$temp1= array();
$temp2= array();
$temp3= array();
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

for($i=0; $i<9; $i++)
	{
		$sql= "select ".$temp1[$i]." from standard where id=($i+1)";
		$result= mysql_query($sql) or die("ERROR: ".mysql_error()."<br/>SQL=".$sql);
		if($num= mysql_num_rows($result))
		{
			$row= mysql_fetch_array($result);
			$temp2[$i]= $row[$temp1[$i]];
		}
	}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>剧场参数标准值</title>
</head>

<body>
<div id="header">
	<center>
	<img src="../img/match.jpg" />
    </center>
</div>
<hr align="center" width="90%" />

<div>
	<form method="post" action="match_update.php">
        <table border="1px" align="center" width="40%">
        <tr>
        	<td align="center" height="25px">参数</td>
            <td align="center" height="25px">标准值</td>
        </tr>
        <?php for($i=0; $i<9; $i++) 
		{ ?>
        <tr>
            <td align="center"><?php echo $temp3[$i]; ?> :</td>
            <td align="center"><textarea name="<?=$temp1[$i]; ?>" cols="10" rows="1"><?=$temp2[$i]; ?></textarea></td>
        </tr>
        <?php } ?>
        <tr>
			<td align="center" colspan="2">
    		<input type="submit" name="new" value="修改" class="button"></td>
		</tr> 
        </table>
	</form>
</div>

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