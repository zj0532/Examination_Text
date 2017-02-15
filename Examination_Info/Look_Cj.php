<?php
	include("../config.php");
	$sql="select Result_Date from result_table where  Result_Date LIKE '2017-01%' limit 1";
	$result=mysqli_query($conn,$sql);
	$i=1;
	$CJ=array();
	$id=array();
	$text=array();
	while($row=mysqli_fetch_object($result))
	{
		array_push($text,$row);
		$id=$i;
	}
	$CJ["id"]=$id;
	$CJ["text"]=$text;
	
	//$HB=array_merge($id,$text);
	//print_r($HB);
	echo '[{"id":1,"text":"text"}]'
?>