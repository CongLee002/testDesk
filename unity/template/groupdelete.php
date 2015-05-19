<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

//$id =$_GET['id'];
    include('../include/conn.php');
	//echo $_GET['id'];
	
    if(isset($_GET['id'])){
        $id = $_GET['id'];
		echo $id;
        $sql = "DELETE FROM `unity3d`.`group1` WHERE `group_id`='".$_GET['id']."'";
        $ctent = mysql_query($sql) or die(mysql_error());
        /*if($ctent){
            $arr = array ('result'=>1);
            echo json_encode($arr);*/
			if($ctent){
				echo "<script> alert('删除成功！');window.location.href='grouphome.php'</script>";
				}
			else{
				echo "<script> alert('删除失败！');window.location.href='grouphome.php'</script>";
				}
        
    }
	else{
		echo "没有传递参数";}
?>