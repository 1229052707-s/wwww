<?php
	header("Content-type:text/html;charset=utf-8");
	$conn = mysql_connect("localhost","root","root");
	if($conn){
		echo "连接成功";
		mysql_select_db("lala");
	}
	
?>
