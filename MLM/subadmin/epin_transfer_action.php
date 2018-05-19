<?php

	include('dbconnection.php');
	$con = OpenCon();

	$epin_type = $_POST['epin_type'];
	$product_name = $_POST['product_name'];
	$member_id = $_POST['member_id'];
	$epin_available = $_POST['epin_available'];
	$epin_value = $_POST['epin_value'];
	$epin_transfer = $_POST['epin_transfer'];
	$transfer_to_member_id = $_POST['transfer_to_member_id'];
	$transfer_to_member_name = $_POST['transfer_to_member_name'];


    $query_epin = "select * from epin_create where member_id='$member_id' and epin_status='Unused' and epin_type='Registration'";
    $result_epin = mysqli_query($con, $query_epin);
    $num_epin = mysqli_num_rows($result_epin);
    
 if ($epin_transfer <= $num_epin) {

	if($epin_type=='Registration' and $product_name=='Registration'){

		$query_epin_search = "select * from epin_create where member_id='$member_id' and epin_type='Registration' and epin_status='Unused'";
		$result_epin_search = mysqli_query($con, $query_epin_search);
		$num_epin_search = mysqli_num_rows($result_epin_search);
		$row_epin_search = mysqli_fetch_array($result_epin_search);

		$query_update_epin = "update epin_create set member_id='$transfer_to_member_id', member_name='$transfer_to_member_name', transfer_by_id='$member_id', status='Transfered' where member_id='$member_id' limit $epin_transfer";
		$result_update_epin = mysqli_query($con, $query_update_epin);
	
	
		echo '<script> window.location="epin_transfer.php"; </script>';
		}
		
		


	}
	else{
		echo '<script> alert("You Have Unsuffient Number Of PIN"); </script>';
		
		echo '<script> window.location="epin_transfer.php"; </script> ';
	}	

mysqli_close($con);



?>