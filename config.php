<?php
	$dbserver    = "10.138.127.43";
	$dbuser	     = "zabbix";
	$dbpassword  = "txgy789";
	$dbatabase   = "Examination";

	$conn = mysqli_connect($dbserver,$dbuser,$dbpassword,$dbatabase);
	if(!$conn)
	{
		die("连接错误：" . mysqli_connect_error());
	}
	mysqli_query($conn,"SET NAMES utf8");
	
?>
