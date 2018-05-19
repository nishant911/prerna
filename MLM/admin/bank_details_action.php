<?php

	include 'dbconnection.php';
    $con = OpenCon();

	$member_id = $_POST['member_id'];
	//echo $member_id;

	$nominee_name = $_POST['nominee_name'];
	$relation_with_nominee = $_POST['relation_with_nominee'];
	$nominee_mobile_number = $_POST['nominee_mobile_number'];
	$account_holder_name = $_POST['account_holder_name'];
	$bank_name = $_POST['bank_name'];
	$account_number = $_POST['account_number'];
	$ifsc_code = $_POST['ifsc_code'];
	$branch = $_POST['branch'];
	$pan_number = $_POST['pan_number'];
	$addhar_number = $_POST['addhar_number'];

	$cancel_check = $_FILES['cancel_check']['name'];
	$temp = $_FILES['cancel_check']['tmp_name'];
	$newname = $member_id . "_" . "cancelled_cheque" . "_" . $cancel_check;
	$locator = "../pic/".$newname;

	if($cancel_check==""){
		$newname = $_POST['old_image'];
	}
	
	$created_at = date('Y-m-d H:i:s');
	
		
	$q = "select * from bank_details where member_id='$member_id'";
	$r = mysqli_query($con, $q);
	$n = mysqli_num_rows($r);
	//echo $n;
	if($n == 0){
	$query = "insert into bank_details (member_id, nominee_name, relation_with_nominee, nominee_mobile_number, account_holder_name, bank_name, account_number, ifsc_code, branch, pan_number, addhar_number, cancel_check, created_at ) 
	values ('$member_id', '$nominee_name', '$relation_with_nominee', '$nominee_mobile_number', '$account_holder_name', '$bank_name', '$account_number', '$ifsc_code', '$branch', '$pan_number', '$addhar_number', '$newname', '$created_at')";
	
	$result = mysqli_query($con, $query);
	}

	else{
		$qu = "update bank_details set member_id='$member_id', nominee_name='$nominee_name', relation_with_nominee='$relation_with_nominee', nominee_mobile_number='$nominee_mobile_number', account_holder_name='$account_holder_name', bank_name='$bank_name', account_number='$account_number', ifsc_code='$ifsc_code', branch='$branch', pan_number='$pan_number', addhar_number='$addhar_number', cancel_check='$newname', created_at='$created_at'
			where member_id='$member_id'"; 
			$re = mysqli_query($con, $qu);
			mysqli_close($con);
	}


	if($cancel_check!="" && $re>0){
		move_uploaded_file($temp,$locator);
	}
	
	if($re){
		//echo "success";
		header("Location:search_bank_details.php");
	}
	
	
?>