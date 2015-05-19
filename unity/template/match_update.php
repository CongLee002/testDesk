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
$action= $_POST['new'];

if(empty($temp[0])||empty($temp[1])||empty($temp[2])||empty($temp[3])||empty($temp[4])||empty($temp[5])||empty($temp[6])||empty($temp[7])||empty($temp[8]))
{
	$err_info= "输入的内容不能为空！";
	showerrpage($err_info);
	exit;
}

if($action== "修改")  
{
	for($i=0; $i<9; $i++)
	{
		$sql= "update standard set ".$temp1[$i]."=".$temp[$i]." where id=($i+1)";
		$result= mysql_query($sql) or die("ERROR: ".mysql_error()."<br/>SQL=".$sql);
		
	}
}

close_db($conn);
header('Location: match_update1.php');
exit;
?>