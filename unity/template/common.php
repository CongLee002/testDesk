<?php

function showerrpage($info_str)  //错误提示信息函数
{
	$html="<html>";
	$html.="<head><title>提示信息</title></head>";
	$html.="<body>";
	$html.="<center>";
	
	$html.="<div style=\"border:1px solid #000; width:300px; font:13px; height:180px; line-height:100px;\">";
	$html.="<div style=\"border:1px solid #000; background:#F2F3F4; width:300px; text-align:left; height:28px; line-height:28px;\"><b>&nbsp;&nbsp;提示信息</b></div>";
	$html.=$info_str."<br/>";
	$html.="<input type=\"button\" onClick=\"javascript:window.history.go(-1);\" value=\"返回\"/><br/>";
	$html.="</div>";
	$html.="</center>";
	$html.="</body>";
	$html.="</html>";
	
	echo $html;
}

function delete_htm($scr)   //删除html标记
{
	$str="";
	for($i=0; $i<strlen($scr); $i++)
	{
		if(substr($scr,$i,1)=="<")
		{
			while(substr($scr,$i,1)!=">") $i++;
			continue;	
		}
		$str.= substr($scr,$i,1);	
	}
	return $str;	
}






?>