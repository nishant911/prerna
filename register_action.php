<?php
	
	 include 'dbconnection.php';
     $con = OpenCon();
	
	$register_as = $_POST['register_as'];
	$organization_name = $_POST['organization_name'];
	$person_name = $_POST['person_name'];
	$specialization = $_POST['specialization'];
	
	$from = $_POST['from'];
	$to = $_POST['to'];
	$working_hours = $from . ' TO ' . $to;
	$address = $_POST['address'];
	$city = $_POST['city'];
	$pincode = $_POST['pincode'];
	$state = $_POST['state'];
	$mobile_no = $_POST['mobile_no'];
	$email_id = $_POST['email_id'];
	$landline_number = $_POST['landline_number'];
	
	$created_at = date('Y-m-d H:i:s');
	
	$query = "insert into register (register_as, organization_name, person_name, specialization, working_hours, address, city, pincode, state, mobile_no, email_id, landline_number, created_at) 
			values ('$register_as', '$organization_name', '$person_name', '$specialization', '$working_hours', '$address', '$city', '$pincode', '$state', '$mobile_no', '$email_id', '$landline_number', '$created_at' )";
	$result = mysqli_query($con, $query);
	
	
	if($result){
		//echo "Success";
		header("Location:index.php");
	}
	else{
		header("Location:register.php");
	}
mysqli_close($con);
?>