<?php
	include 'dbconnection.php';
	$con = OpenCon();
	
	$center_name = $_POST['center_name'];
	$center_code = $_POST['center_code'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$q = "select * from center_register where center_name='$center_name' and center_code='$center_code' and username='$username' and password='$password'";
	
	$result = mysqli_query($con,$q);
	mysqli_close($con);
	$num =  mysqli_num_rows($result);
	//echo "success";
	//echo $num;
	if($num == 1){
		session_start();
		$row = mysqli_fetch_array($result);
		$_SESSION['center_code']=$row['center_code'];
		//echo "success";
		header("Location:center_index.php");
	}
	else{
		//echo "failed";
		header("Location:center_login.php");
	}
?>