<?php
     include 'dbconnection.php';
     $con = OpenCon();
	 
	  
	$product_name = $_POST['product_name'];
	$product_price = $_POST['product_price'];

	$product_image = $_FILES['product_image']['name'];
	$temp = $_FILES['product_image']['tmp_name'];
	$locator = "../product/".$product_image;

	$created_at = date('Y-m-d H:i:s');
	
	$query = "insert into product_list (product_name, product_price, product_image, created_at) values ('$product_name', '$product_price', '$product_image', '$created_at')";
	$result = mysqli_query($con, $query);
	mysqli_close($con);
	if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}

	 move_uploaded_file($temp,$locator);
		
	if($result){
		header("location:add_product_list.php");
	}
	
?>	 