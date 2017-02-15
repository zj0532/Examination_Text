<?php
	include("config.php");
	session_start();
	$Name=$_SESSION['username'];
	$sql=mysqli_query($conn,"select Job from user where name='$Name' and Stauts='在职'");
	$lv=mysqli_fetch_array($sql);
	if($lv[0]<3)
	{
		$Result_ID = intval($_REQUEST['Result_ID']);
		$sql = "delete from result_table where Result_ID='$Result_ID'";
		$result = mysqli_query($conn,$sql);
		if ($result){
			echo json_encode(array('success'=>true));
		} else {
			echo json_encode(array('msg'=>'删除失败！'));
		}
	}
	else
	{
		echo json_encode(array('msg'=>'你没有此权限！'));	
	}

?>