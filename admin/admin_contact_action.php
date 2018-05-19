<?php
     include 'dbconnection.php';
     $con = OpenCon();
	 
	  
	$registered_address = $_POST['registered_address'];
	$corporate_address = $_POST['corporate_address'];
	$mobile = $_POST['mobile'];
	$phone_no = $_POST['phone_no'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	
	$created_at = date('Y-m-d H:i:s');
	
	$query = "insert into contact (registered_address, corporate_address, mobile, phone_no, email, website, created_at) 
				values ('$registered_address', '$corporate_address', '$mobile', '$phone_no', '$email', '$website', '$created_at')";
	$result = mysqli_query($con, $query);
	mysqli_close($con);
	if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}
		
	if($result){
		header("location:admin_contact.php");
	}
	
?>	 