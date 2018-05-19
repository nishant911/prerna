<?php
	 include 'dbconnection.php';
     $con = OpenCon();

	$center_name = $_POST['center_name'];
	$center_code = $_POST['center_code'];
	$block = $_POST['block'];
	$sector_ward = $_POST['sector_ward'];
	$landmark = $_POST['landmark'];
	$postoffice = $_POST['postoffice'];
	$policestation = $_POST['policestation'];
	$city = $_POST['city'];
	$district = $_POST['district'];
	$state = $_POST['state'];
	$pincode = $_POST['pincode'];
	$mobile_number = $_POST['mobile_number'];
	$landline_number = $_POST['landline_number'];
	
	$attachment = $_FILES['attachment']['name'];
	$temp = $_FILES['attachment']['tmp_name'];
	$locator = "upload/".$attachment;
	
	$center_director_name = $_POST['center_director_name'];
	$qualification = $_POST['qualification'];
	$mobile_number_o = $_POST['mobile_number_o'];
	
	$addhar_card = $_FILES['addhar_card']['name'];
	$tempa = $_FILES['addhar_card']['tmp_name'];
	$locatora = "upload/".$addhar_card;

	$pan_card = $_FILES['pan_card']['name'];
	$tempb = $_FILES['pan_card']['tmp_name'];
	$locatorb = "upload/".$pan_card;
	
	$cancel_check = $_FILES['cancel_check']['name'];
	$tempc = $_FILES['cancel_check']['tmp_name'];
	$locatorc = "upload/".$cancel_check;	
	
	$voter_id_dl = $_FILES['voter_id_dl']['name'];
	$tempd = $_FILES['voter_id_dl']['tmp_name'];
	$locatord = "upload/".$voter_id_dl;	

	$created_at = date('Y-m-d H:i:s');
	
	//echo $createdat;
	
	$query = "insert into admin_center_details (center_name, center_code, block, sector_ward, landmark, postoffice, policestation, city, district,  state, pincode,
												mobile_number, landline_number, attachment, center_director_name, qualification, mobile_number_o, addhar_card, pan_card, cancel_check, voter_id_dl, created_at) values 
			('$center_name', '$center_code', '$block', '$sector_ward', '$landmark', '$postoffice', '$policestation', '$city', '$district', '$state', '$pincode',
			'$mobile_number', '$landline_number', '$attachment','$center_director_name', '$qualification', '$mobile_number_o', '$addhar_card', '$pan_card', '$cancel_check', '$voter_id_dl', '$created_at' ) ";
	
	//echo "Success";
	
	$result = mysqli_query($con, $query);

	 move_uploaded_file($temp,$locator);
	 move_uploaded_file($tempa,$locatora);
	 move_uploaded_file($tempb,$locatorb);
	 move_uploaded_file($tempc,$locatorc);
	 move_uploaded_file($tempd,$locatord);
	
	if($result){
		//echo "Success";
		header("location:center_details.php");
	}
	else{
		//echo "Failed";
	}
mysqli_close($con);
	
?>