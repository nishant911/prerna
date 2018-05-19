<?php
     include 'dbconnection.php';
     $con = OpenCon();
	 
	$i = $_POST['id'];  
	$status = $_POST['status'];
	$admin_process_date = $_POST['admin_process_date'];
	$admin_remark = $_POST['admin_remark'];

	$created_at = date('Y-m-d H:i:s');
	
	$i = $_POST['id'];
	$query = "update withdraw_report set status='$status', admin_process_date='$admin_process_date',   admin_remark='$admin_remark'  where id='$i'";
	$result = mysqli_query($con, $query);
	mysqli_close($con);
	if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}

		
	if($result){
		header("location:search_withdraw_report.php");
	}
	
?>	 