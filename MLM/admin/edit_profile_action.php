<?php
	include 'dbconnection.php';
    $con = OpenCon();

    $member_id = $_POST['member_id'];
    $member_name = $_POST['member_name'];
    $sponsor_id = $_POST['sponsor_id'];
    $sponsor_name = $_POST['sponsor_name'];
    $doj = $_POST['doj'];

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
	$password = $_POST['password'];


	$profile_pic = $_FILES['profile_pic']['name'];
	$temp = $_FILES['profile_pic']['tmp_name'];
	$newname = $member_id . "_" . $profile_pic;
	$locator = "../pic/".$newname;
	
	if($profile_pic==""){
		$newname = $_POST['old_image'];
	}
	//$id = $_POST['id'];
	
	$query = "update register set member_id='$member_id', member_name='$member_name', sponsor_id='$sponsor_id', sponsor_name='$sponsor_name', doj='$doj',  gender='$gender', fathers_name='$fathers_name', dob='$dob', address='$address', district='$district', city='$city', state='$state', country='$country', pincode='$pincode', mobile_number='$mobile_number', alternate_mobile_number='$alternate_mobile_number', email='$email', alternate_email='$alternate_email', pin='$password', profile_pic='$newname'
	where member_id='$member_id' ";
	
	$result = mysqli_query($con, $query);
	move_uploaded_file($temp,$locator);
	mysqli_close($con);

	
	if($profile_pic!="" && $result>0){
		move_uploaded_file($temp,$locator);
	}
	
	if($result){
		//echo "success";
		//header("Location:edit_profile.php");
		echo '<script> window.location="search_user.php"; </script> ';
	}
	else{
		//echo "failed";
		//header("Location:edit_profile.php");
		echo '<script> window.location="search_user.php"; </script> ';
	}

?>