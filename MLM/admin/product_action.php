<?php
	
	include 'dbconnection.php';
    $con = OpenCon();

    $member_id = $_POST['member_id'];
    $app_username = $_POST['app_username'];
	$app_password = $_POST['app_password'];
	
	//$created_at = date('Y-m-d H:i:s');


	$query = "insert into product (member_id, app_username, app_password ) 
				values ('$member_id', '$app_username', '$app_password') ";

	$result = mysqli_query($con, $query);
	mysqli_close($con);
	if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}
		else{
			header("location:product.php");
		}

	/*if($result){
		header("location:product_delivery_details.php");
	}		
	else{
		//echo "Failed";
	}
*/


?>