<?php
	session_start(); 
	$_SESSION['username']=$_POST['user'];
	$name=mb_convert_encoding($_SESSION['username'], 'gbk', 'utf-8');
	$pass=$_POST['pass'];
	//调用OA登陆接口
	$wsdl="http://10.128.3.129:1616?wsdl";
	$client=new SoapClient($wsdl,array('encoding' => 'GBK'));
	$param=array('name'=>$name,'password'=>$pass);
	$ret=$client->HelloWorld($param);
	echo $ret->HelloWorldResult;	
	/*include("config.php");
	$query=mysqli_query($conn,"select * from user where Name='$_SESSION[username]' and Passwd='$pass'");
	if(mysqli_fetch_array($query,MYSQL_NUM)){
		echo "1";
		}else{
		echo "账号密码有误，请重新输入！";
		}
	*/
?>