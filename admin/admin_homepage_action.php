<?php
     include 'dbconnection.php';
     $con = OpenCon();
	 
	  
	$heading1 = $_POST['heading1'];
	$heading2 = $_POST['heading2'];
	$heading3 = $_POST['heading3'];
	
	$slider_image = $_FILES['slider_image']['name'];
	$temp = $_FILES['slider_image']['tmp_name'];
	$locator = "websiteupload/".$slider_image;

	$created_at = date('Y-m-d H:i:s');
	
	$query = "insert into homepage (heading1, heading2, heading3, slider_image, created_at) values ('$heading1', '$heading2', '$heading3', '$slider_image', '$created_at')";
	$result = mysqli_query($con, $query);
	move_uploaded_file($temp,$locator);
	mysqli_close($con);
	if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}
		
	if($result){
		header("location:admin_homepage.php");
	}
	
?>	 