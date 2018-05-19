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
	
	$signature = $_FILES['signature']['name'];
	$temp = $_FILES['signature']['tmp_name'];
	$locator = "upload/".$signature;
	
	$photo = $_FILES['photo']['name'];
	$tempa = $_FILES['photo']['tmp_name'];
	$locatora = "upload/".$photo;

	$id_proof = $_FILES['id_proof']['name'];
	$tempb = $_FILES['id_proof']['tmp_name'];
	$locatorb = "upload/".$id_proof;	

	$created_at = date('Y-m-d H:i:s');
	
	//echo $createdat;
	
	$query = "insert into admin_center_employees_register (center_name, center_code, name, designation, employee_id, address, email_id, mobile_number, doj, signature, photo, id_proof, created_at )
				values ('$center_name', '$center_code', '$name', '$designation', '$employee_id', '$address', '$email_id', '$mobile_number', '$doj', '$signature',  '$photo', '$id_proof', '$created_at' ) ";
	
	//echo "Success";
	
	$result = mysqli_query($con, $query);
	mysqli_close($con);
	 move_uploaded_file($temp,$locator);
	 move_uploaded_file($tempa,$locatorb);
	 move_uploaded_file($tempc,$locatorc);
	
	if($result){
		//echo "Success";
		header("location:admin_center_employees.php");
	}
	else{
		//echo "Failed";
	}

	
?>