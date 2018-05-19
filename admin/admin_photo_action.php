<?php
	 include 'dbconnection.php';
     $con = OpenCon();
	 
	$photo_gallery = $_FILES['photo_gallery']['name'];
	$temp = $_FILES['photo_gallery']['tmp_name'];
	$locator = "websiteupload/".$photo_gallery;
	
	$created_at = date('Y-m-d H:i:s');
	
	$query = "insert into photo_gallery (photo_gallery, created_at) values ('$photo_gallery', '$created_at')";
	$result = mysqli_query($con, $query);
	 move_uploaded_file($temp,$locator);
	mysqli_close($con);
	if($result){
		header("location:admin_photo.php");
	}
	else{
		
	}

	
?>	 