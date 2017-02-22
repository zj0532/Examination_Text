<?php 
	session_start();
	$Name=$_SESSION['username'];
	$sort=$_POST['sort'];
	$order=$_POST['order'];
	include('config.php');
	$date=date('Y-m',time())."-01";
	//echo $date."<br>";
	$sql=mysqli_query($conn,"select * from result_table where Result_Date>'$date'  ORDER BY $sort $order;");
	
	$item=array();
	while($row=mysqli_fetch_object($sql)){
			array_push($item,$row);
		};
	echo json_encode($item);
?>	
