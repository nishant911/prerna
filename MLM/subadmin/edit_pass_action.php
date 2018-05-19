<?php
	include 'dbconnection.php';
    $con = OpenCon();
	
	$current_password = $_POST['current_password'];
	$new_password = $_POST['new_password'];
	$confirm_password = $_POST['confirm_password'];
	$member_id = $_POST['member_id'];
	
	$qu = "select * from register where pin='$current_password' AND member_id='$member_id'";
	$res = mysqli_query($con,$qu);
	$num = mysqli_num_rows($res);
	//echo $num;
	//echo $member_id;
	if($num==1 && $new_password == $confirm_password){
		$query = "update register set pin='$new_password' where member_id='$member_id' and pin='$current_password'";
		$res = mysqli_query($con,$query);
		//header("location:edit_pass.php");
		echo '<script> window.location="edit_pass.php"; </script> ';
		
		
	}
	else{
		
		//header("location:edit_pass.php");
		echo '<script> window.location="edit_pass.php"; </script> ';
	}
	mysqli_close($con);
?>