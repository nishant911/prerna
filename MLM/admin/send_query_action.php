<?php
	include 'dbconnection.php';
    $con = OpenCon();

    $user_id = $_POST['user_id'];
    $member_id = $_POST['member_id'];
    $status = $_POST['status'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$created_at = date('Y-m-d H:i:s');

	$query = "insert into query (user_id,  subject, message, status, created_at) 
				values ('$user_id',  '$subject', '$message', '$status', '$created_at')";

	$result = mysqli_query($con, $query);
	mysqli_close($con);
	if($result){
		header("location:send_query.php");
	}			
?>