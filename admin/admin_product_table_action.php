<?php
	 include 'dbconnection.php';
     $con = OpenCon();

	$plan_heading = $_POST['plan_heading'];
	$body_checkup_voucher = $_POST['body_checkup_voucher'];
	$doctor_checkup_voucher = $_POST['doctor_checkup_voucher'];
	$blood_sugar_glacometer = $_POST['blood_sugar_glacometer'];
	$blood_preesure_monitor = $_POST['blood_preesure_monitor'];
	$body_massager = $_POST['body_massager'];
	$eye_checkup_voucher = $_POST['eye_checkup_voucher'];
	$dental_voucher = $_POST['dental_voucher'];
	$shopping_voucher = $_POST['shopping_voucher'];

	$created_at = date('Y-m-d H:i:s');
	
	//echo $createdat;
	
	$query = "insert into admin_product_table (plan_heading, body_checkup_voucher, doctor_checkup_voucher, blood_sugar_glacometer, blood_preesure_monitor, body_massager, eye_checkup_voucher, dental_voucher, shopping_voucher, created_at )
				values ('$plan_heading', '$body_checkup_voucher', '$doctor_checkup_voucher', '$blood_sugar_glacometer', '$blood_preesure_monitor', '$body_massager', '$eye_checkup_voucher', '$dental_voucher', '$shopping_voucher', '$created_at' ) ";
	
	//echo "Success";
	
	$result = mysqli_query($con, $query);
mysqli_close($con);
	
	if($result){
		//echo "Success";
		header("location:admin_product.php");
	}
	else{
		//echo "Failed";
	}

	
?>