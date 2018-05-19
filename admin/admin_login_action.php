<?php
	include 'dbconnection.php';
    $con = OpenCon();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "select * from admin_login where username='$username' and password='$password'";
	$result = mysqli_query($con, $query);
	mysqli_close($con);
	$num = mysqli_num_rows($result);
	
	if($num==1){
		session_start();
		$row = mysqli_fetch_array($result);
		$_SESSION['username']=$row['username'];
		
		header("location:admin_index.php");
		
	}
	
	

?>