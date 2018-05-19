<?php
	include 'dbconnection.php';
    $con = OpenCon();

	$id = $_POST['id'];
		
	$gender = $_POST['gender'];
	$fathers_name = $_POST['fathers_name'];
	$dob = $_POST['dob'];
	$address = $_POST['address'];
	$district = $_POST['district'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$pincode = $_POST['pincode'];
	$mobile_number = $_POST['mobile_number'];
	$alternate_mobile_number = $_POST['alternate_mobile_number'];
	$email = $_POST['email'];
	$alternate_email = $_POST['alternate_email'];
	
	$profile_pic = $_FILES['profile_pic']['name'];
	$temp = $_FILES['profile_pic']['tmp_name'];
	$newname = $id . "_" . $profile_pic;
	$locator = "../pic/".$newname;
	if($profile_pic==""){
		$newname = $_POST['old_image'];
	}

	
	$query = "update register set gender='$gender', fathers_name='$fathers_name', dob='$dob', address='$address', district='$district', city='$city', state='$state', country='$country', pincode='$pincode', mobile_number='$mobile_number', alternate_mobile_number='$alternate_mobile_number', email='$email', alternate_email='$alternate_email', profile_pic='$newname'
	where member_id='$id' ";
	
	$result = mysqli_query($con, $query);
	move_uploaded_file($temp,$locator);
	mysqli_close($con);
	if($profile_pic!="" && $result>0){
		move_uploaded_file($temp,$locator);
	}
	
	if($result){
		//echo "success";
		//header("Location:edit_profile.php");
		echo '<script> window.location="edit_profile.php"; </script> ';
	}
	else{
		//echo "failed";
		//header("Location:edit_profile.php");
		echo '<script> window.location="edit_profile.php"; </script> ';
	}

?>