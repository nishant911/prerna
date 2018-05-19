<?php
     include 'dbconnection.php';
     $con = OpenCon();
	 
	$member_id = $_POST['member_id'];
	$member_name = $_POST['member_name'];
	$address = $_POST['address'];
	$pin_code = $_POST['pin_code'];
	$near_location = $_POST['near_location'];
	$state = $_POST['state'];
	$product_name_rep = $_POST['product_name_rep'];

	$product_name = $_POST['product_name'];
	$courier_through = $_POST['courier_through'];
	$track_number = $_POST['track_number'];
	$delivery_date = $_POST['delivery_date'];
	$status = $_POST['status'];

	$created_at = date('Y-m-d H:i:s');
	
	$query_search = "select * from product where member_id='$member_id'";
	$result_search = mysqli_query($con, $query_search);
	$row_search = mysqli_fetch_array($result_search);
	if($row_search['product_name_rep'] == $product_name_rep)
	{
	$query = "update product set product_name='$product_name', courier_through='$courier_through',   track_number='$track_number',   delivery_date='$delivery_date'  ,   status='$status' where member_id='$member_id' and product_name_rep='$product_name_rep'";
	$result = mysqli_query($con, $query);
	header("location:search_product.php");
	}
	else{
		$query_insert = "insert into product (member_id, member_name, address, pin_code, near_location, state, product_name_rep, product_name, courier_through, track_number, delivery_date, status, purchase_date) values ('$member_id', '$member_name', '$address', '$pin_code', '$near_location', '$state', '$product_name_rep', '$product_name', '$courier_through', '$track_number', '$delivery_date', '$status', '$created_at')";
		$result_insert = mysqli_query($con, $query_insert);
		header("location:search_product.php");
	}
mysqli_close($con);

	if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}

		
	
	
?>	 