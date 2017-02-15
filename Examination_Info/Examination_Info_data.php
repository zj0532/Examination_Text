<?php 
	session_start();
	if(isset($_SESSION['username']))
	{ 
		
	}
	else{header("Location:index.php");}
	$Name=$_SESSION['username'];
	$sort=$_POST['sort'];
	$order=$_POST['order'];
	$str=$_REQUEST['str'];
	include('../config.php');
	//$date=date('Y-m',time())."-01";
	//echo $date."<br>";
	//$sql=mysqli_query($conn,"select * from result_table where Result_Date>'$date'  ORDER BY $sort $order;");
	$sql=mysqli_query($conn,"select * from result_table where Result_Date LIKE '$str%'  ORDER BY $sort $order");
	$item=array();
	while($row=mysqli_fetch_object($sql)){
			array_push($item,$row);
		};
	echo json_encode($item);
?>	
