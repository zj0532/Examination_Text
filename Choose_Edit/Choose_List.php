<?php
include('../config.php');
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	
	$result = array();
	
	$rs = mysqli_query($conn,"select count(*) from desktop_subjeck where Type='2'");
	$row = mysqli_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = mysqli_query($conn,"select * from desktop_subjeck a,type_job b where Type='2' and a.Type_Job=b.Type_Job and status='1' limit  $offset,$rows");
	$rows = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($rows, $row);
	}
	$result["rows"] = $rows;
	
	echo json_encode($result);
?>