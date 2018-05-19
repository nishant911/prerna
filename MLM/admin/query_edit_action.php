<?php
     include 'dbconnection.php';
     $con = OpenCon();
	 
	  
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$status = $_POST['status'];

	$created_at = date('Y-m-d H:i:s');
	
	$i = $_POST['id'];
	$query = "update query set subject='$subject', message='$message',   status='$status', created_at='$created_at' where id='$i'";
	$result = mysqli_query($con, $query);
	mysqli_close($con);
if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}

		
	if($result){
		header("location:query_tracking.php");
	}
	
?>	 