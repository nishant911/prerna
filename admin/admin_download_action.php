<?php
	 include 'dbconnection.php';
     $con = OpenCon();
	 
	$caption = $_POST['caption'];
	
	$legals = $_FILES['legals']['name'];
	$temp = $_FILES['legals']['tmp_name'];
	$locator = "websiteupload/".$legals;
	
	$created_at = date('Y-m-d H:i:s');
	
	$query = "insert into download (caption, legals, created_at) values ('$caption', '$legals', '$created_at')";
	$result = mysqli_query($con, $query);
	 move_uploaded_file($temp,$locator);
	mysqli_close($con);
	if($result){
		header("location:admin_download.php");
	}
	else{
		
	}

	
?>	 