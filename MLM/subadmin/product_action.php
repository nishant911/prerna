<?php
	
	include 'dbconnection.php';
    $con = OpenCon();

    $member_id = $_POST['member_id'];
    $address = $_POST['address'];
    $pin_code = $_POST['pin_code'];
    $near_location = $_POST['near_location'];
    $state = $_POST['state'];
	
	$created_at = date('Y-m-d H:i:s');


    $query_name = "select * from register where member_id = '$member_id'";
    $result_name = mysqli_query($con, $query_name);
    $row_name = mysqli_fetch_array($result_name);
    $member_name = $row_name['member_name'];

    $query_search = "select * from product where member_id = '$member_id'";
    $result_serarch = mysqli_query($con, $query_search);
    $num_search = mysqli_num_rows($result_serarch);
    if($num_search == 0){

		$query = "insert into product (member_id, member_name, address, pin_code, near_location, state, purchase_date) 
				values ('$member_id', '$member_name', '$address', '$pin_code', '$near_location', '$state', '$created_at')";

		$result = mysqli_query($con, $query);
		echo '<script> window.location="product.php"; </script> ';
	}
	else{
		$query_update = "update product set address='$address', pin_code='$pin_code', near_location='$near_location', state='$state' where member_id='$member_id'";
		$result_update = mysqli_query($con, $query_update);
		echo '<script> window.location="product.php"; </script> ';
	}

	
	/*if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
	}*/
		
			echo '<script> window.location="product.php"; </script> ';
	
mysqli_close($con);


?>