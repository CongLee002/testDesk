<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include('../include/conn.php');
if(isset($_POST['submit'])and $_POST['showinfo']!=""  and $_POST['submit']=="提交"){
	$update=mysql_query("update `unity3d`.`group1` set `showinfo`='".$_POST['showinfo']."' where `group_id` ='".$_POST['group_id']."'") or die(mysql_error());
	if($update){
		echo "<script>alert ('修改成功！');window.location.href='systemhome.php'</script>";
		}else{
		echo "<script>alert ('修改失败！');window.location.href='systemhome.php'</script>";	
			}
		}else{
			echo "<script>alert ('信息不能为空！');window.location.href='systemhome.php'</script>";}
?>