<?php
     include 'dbconnection.php';
     $con = OpenCon();
	 
	  
	$news = $_POST['news'];
	
	$created_at = date('Y-m-d H:i:s');
	
	$query = "insert into news (news, created_at) values ('$news', '$created_at')";
	$result = mysqli_query($con, $query);
	mysqli_close($con);
	if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}
		
	if($result){
		header("location:admin_homepage.php");
	}
	
?>	 