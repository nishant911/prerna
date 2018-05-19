<?php
	include 'dbconnection.php';
    $con = OpenCon();
	
	$center_name = $_POST['center_name'];
	$center_code = $_POST['center_code'];
	$username = $_POST['username'];
	$old_password = $_POST['old_password'];
	$new_password = $_POST['new_password'];
	
	$qu = "select * from center_register where center_name='$center_name' AND center_code='$center_code' AND username='$username' AND password='$old_password'";
	$res = mysqli_query($con,$qu);
	$num = mysqli_num_rows($res);
	//echo $num;
	//echo $member_id;
	if($num==1){
		$query = "update center_register set password='$new_password' where center_name='$center_name' AND center_code='$center_code' AND username='$username'";
		$res = mysqli_query($con,$query);
		header("location:admin_center_register.php");
		
	}
	else{
		//header("location:edit_pass.php");
	}
	mysqli_close($con);
	
?>