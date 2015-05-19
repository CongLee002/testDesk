<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include('../include/conn.php');
if(isset($_POST['submit']) and $_POST['showinfo']!="" and $_POST['submit']=="提交"){
	//$basic=$_POST['basic'];
	$showinfo=$_POST['showinfo'];
	//$avaible=$_POST['avaible'];
	$insert=mysql_query("INSERT INTO `unity3d`.`group1` (`group_id`, `showinfo`) VALUES (NULL,  '$showinfo');") or die(mysql_error());
	if($insert){
		echo "<script>alert ('添加成功！');window.location.href='systemhome.php'</script>";
		}else{
		echo "<script>alert ('添加失败！');window.location.href='systemhome.php'</script>";	
			}
		}else{
			echo "<script>alert ('信息不能为空！');window.location.href='systemhome.php'</script>";}
?>