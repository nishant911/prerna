<?php
	
	include 'dbconnection.php';
    $con = OpenCon();
	 
	$center_name = $_POST['center_name'];
	$center_code = $_POST['center_code'];
	$created_at = date('Y-m-d H:i:s');
	
	$query = "insert into admin_center (center_name, center_code, created_at) values ('$center_name', '$center_code', '$created_at')";
	
	$result = mysqli_query($con, $query);
	mysqli_close($con);
	if($result){
		header("location:admin_center_code.php");
	}
	
	
?>