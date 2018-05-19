<?php
	 include 'dbconnection.php';
     $con = OpenCon();

	$center_name = $_POST['center_name'];
	$center_code = $_POST['center_code'];
	$name = $_POST['name'];
	$employee_id = $_POST['employee_id'];
	$bank_name = $_POST['bank_name'];
	$account_number = $_POST['account_number'];
	$ifsc_code = $_POST['ifsc_code'];
	$branch = $_POST['branch'];
	
	$cancel_check = $_FILES['cancel_check']['name'];
	$temp = $_FILES['cancel_check']['tmp_name'];
	$locator = "upload/".$cancel_check;
	
	$pan_card = $_FILES['pan_card']['name'];
	$temppan = $_FILES['pan_card']['tmp_name'];
	$locatorpan = "upload/".$pan_card;
	
	
	
	$created_at = date('Y-m-d H:i:s');
	
	//echo $createdat;
	
	$query = "insert into admin_bank_employees (center_name, center_code, name, employee_id, bank_name, account_number, ifsc_code, branch, cancel_check, pan_card, created_at )
				values ('$center_name', '$center_code', '$name', '$employee_id', '$bank_name', '$account_number', '$ifsc_code', '$branch', '$cancel_check', '$pan_card', '$created_at' ) ";
	
	//echo "Success";
	
	$result = mysqli_query($con, $query);

	 move_uploaded_file($temp,$locator);
	 move_uploaded_file($temppan,$locatorpan);
	
	if($result){
		//echo "Success";
		header("location:admin_bank_employees.php");
	}
	else{
		//echo "Failed";
	}
	mysqli_close($con);
?>	