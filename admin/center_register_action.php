<?php
		include 'dbconnection.php';
		$con = OpenCon();
	$center_name = $_POST['center_name'];
	$center_code = $_POST['center_code'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$created_at = date('Y-m-d H:i:s');

	$query = "insert into center_register (center_name, center_code, username, email, password, created_at) values ('$center_name', '$center_code', '$username', '$email', '$password', '$created_at' ) ";
	
	$result = mysqli_query($con, $query);
	mysqli_close($con);
	if($result){
		//echo "Success";
		header("location:admin_center_register.php");
	}
	else{
		//echo "Failed";
	}
	
	?>