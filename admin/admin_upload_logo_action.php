<?php
     include 'dbconnection.php';
     $con = OpenCon();	 	
	$slider = $_POST['slider'];	
	$upload_logo = $_FILES['upload_logo']['name'];
	$temp = $_FILES['upload_logo']['tmp_name'];
	$locator = "websiteupload/".$upload_logo;
	$created_at = date('Y-m-d H:i:s');	
	$query = "insert into upload_logo (slider, upload_logo, created_at) values ( '$slider','$upload_logo', '$created_at')";
	$result = mysqli_query($con, $query);
	move_uploaded_file($temp,$locator);
	mysqli_close($con);
	if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}		
	if($result){
		header("location:admin_upload_logo.php");
	}
	
?>	 