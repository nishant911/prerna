<?php
     include 'dbconnection.php';
     $con = OpenCon();
	 
	  
	$content = $_POST['content'];
	$name = $_POST['name'];
	$designation = $_POST['designation'];

	$created_at = date('Y-m-d H:i:s');
	
	$query = "insert into testimonial (content, name, designation, created_at) values ('$content', '$name', '$designation', '$created_at')";
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