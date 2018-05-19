<?php
	include 'dbconnection.php';
    $con = OpenCon();

	/*$sponsor_id = $_POST['sponsor_id'];
	$sponsor_name = $_POST['sponsor_name'];*/
	$member_id = $_POST['member_id'];
	$name_of_installer = $_POST['name_of_installer'];
	$time = $_POST['time'];
	$mobile_no = $_POST['mobile_no'];
	$device_id = $_POST['device_id'];
	$created_at = date('Y-m-d H:i:s');

	$query = "update product set name_of_installer='$name_of_installer', time='$time', mobile_no='$mobile_no', device_id='$device_id', created_at='$created_at' where member_id='$member_id'";

	$result = mysqli_query($con, $query);
	mysqli_close($con);
	//print_r($result);
	//die();
	if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}

	if($result){
		header("location:product_installation.php");
	}

?>	