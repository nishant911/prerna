<?php
	 include 'dbconnection.php';
     $con = OpenCon();

	$center_name = $_POST['center_name'];
	$center_code = $_POST['center_code'];
	$name = $_POST['name'];
	$designation = $_POST['designation'];
	$employee_id = $_POST['employee_id'];
	$address = $_POST['address'];
	$email_id = $_POST['email_id'];
	$mobile_number = $_POST['mobile_number'];
	$doj = $_POST['doj'];
	
	$i= $_POST['id'];
	
	$q = "update admin_center_employees_register set  center_name='$center_name', center_code='$center_code', name='$name', designation='$designation', employee_id='$employee_id', address='$address', email_id='$email_id', mobile_number='$mobile_number', doj='$doj' where id='$i' ";
	$result = mysqli_query($con, $q);
	mysqli_close($con);
	if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}
	if($result){
		//echo "success";
		header("Location:admin_center_employees.php");
	}
	else{
		header("Location:admin_center_employees_register_edit.php");
	}


	
?>