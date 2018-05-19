<?php
	 include 'dbconnection.php';
     $con = OpenCon();

	$name = $_POST['name'];
	$dateofbirth = $_POST['dob'];
	$gender = $_POST['gender'];
	
	$upload_pic = $_FILES['upload_pic']['name'];
	$temp = $_FILES['upload_pic']['tmp_name'];
	$locator = "admin/upload/".$upload_pic;
	
	$centername = $_POST['center_name'];
	
	$centercode = $_POST['center_code'];	
	$card_number = $_POST['card_number'];
	$employee_name = $_POST['employee_name'];
	
	$telno = $_POST['telno'];
	$email = $_POST['email'];
	$idproof = $_POST['idproof'];
	$idproofno = $_POST['idproofno'];
	
	$address = $_POST['address'];
	$state = $_POST['state'];
	$town = $_POST['Town_City_District']; 
	$pincode = $_POST['pincode'];
	$country = $_POST['country'];
	
	$saddress = $_POST['s_address'];
	$sstate = $_POST['s_state'];
	$stown = $_POST['s_Town_City_District'];
	$spincode = $_POST['s_pincode'];
	
	$dname = $_POST['d_name'];
	
	$createdat = date('Y-m-d H:i:s');
	
	//echo $createdat;
	
	$used_card_number = $_POST['used_card_number'];
	
	$q = "select * from epin_entry where epin='$card_number' and status='active' ";
	$r = mysqli_query($con, $q);
	
	if($r){
		$qu = "update epin_entry set status='$used_card_number' where epin='$card_number'";
		$ru = mysqli_query($con, $qu);
		
			$query = "insert into shoppingcart(name, dateofbirth, gender, upload_pic, centername, centercode, employee_name, card_number, telno, email, idproof, idproofno, address, state, town, pincode, country, saddress, sstate, stown, spincode, dname, created_at) values 
			('$name', '$dateofbirth', '$gender', '$upload_pic','$centername', '$centercode', '$employee_name', '$card_number', '$telno', '$email', '$idproof', '$idproofno', '$address', '$state', '$town', '$pincode', '$country', '$saddress', '$sstate', '$stown', '$spincode', '$dname', '$createdat' ) ";
	
	//echo "Success";
	
	$result = mysqli_query($con, $query);  
	move_uploaded_file($temp,$locator);
	}

	
	if($result){
		//echo "Success";
		header("location:index.php");
	}
	else{
		//echo "Failed";
		header("location:shopping.php");
	}
mysqli_close($con);
	
?>