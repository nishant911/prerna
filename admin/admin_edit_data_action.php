<?php	
     include 'dbconnection.php';
     $con = OpenCon();

	$register_as = $_POST['register_as'];
	$organization_name = $_POST['organization_name'];
	$person_name = $_POST['person_name'];
	$specialization = $_POST['specialization'];
	
	$working_hours = $_POST['working_hours'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$pincode = $_POST['pincode'];
	$state = $_POST['state'];
	$mobile_no = $_POST['mobile_no'];
	$email_id = $_POST['email_id'];
	$landline_number = $_POST['landline_number'];

	

	$i= $_POST['id'];
	
	$q = "update register set  register_as='$register_as', organization_name='$organization_name', person_name='$person_name', specialization='$specialization', working_hours='$working_hours', address='$address', city='$city' , pincode='$pincode' , state='$state' , mobile_no='$mobile_no' , email_id='$email_id' , landline_number='$landline_number' where id='$i' ";
						
	
	$result = mysqli_query($con, $q);
	mysqli_close($con);
	if($result){
		//echo "success";
		header("Location:admin_edit_data.php");
	}
	else{
		header("Location:admin_edit_data_form.php");
	}
	
	?>