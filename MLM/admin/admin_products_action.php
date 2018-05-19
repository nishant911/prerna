<?php
     include 'dbconnection.php';
     $con = OpenCon();
	 
	  
	$product_heading = $_POST['product_heading'];
	$product_content = $_POST['product_content'];

	$upload_image = $_FILES['upload_image']['name'];
	$temp = $_FILES['upload_image']['tmp_name'];
	$locator = "websitecontent/".$upload_image;

	$created_at = date('Y-m-d H:i:s');
	
	$query = "insert into products (product_heading, product_content,   upload_image, created_at) values ('$product_heading', '$product_content', '$upload_image', '$created_at')";
	$result = mysqli_query($con, $query);
	mysqli_close($con);
	if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}

	 move_uploaded_file($temp,$locator);
		
	if($result){
		header("location:admin_products.php");
	}
	
?>	 