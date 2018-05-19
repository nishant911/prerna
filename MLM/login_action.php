<?php
	include 'dbconnection.php';
    $con = OpenCon();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if ($username == "PHCS19861410" and $password == "19861410") {

		$MessageAdmin = "Please Login Through Admin Link http://prernahealthcare.org/MLM/admin/login.php";
		header("location:login.php?MessageAdmin={$MessageAdmin}");

	}
	$query = "select * from register where member_id='$username' and pin='$password'";
	$result = mysqli_query($con, $query);
	
	$num = mysqli_num_rows($result);
	
	if($num == 1){
		session_start();
		$row = mysqli_fetch_array($result);
		$_SESSION['member_id']=$row['member_id'];
		
        echo '<script> window.location="subadmin/index.php"; </script> ';
		
	}
	else{
		$Message = "Invalid UserName or Password";
		header("location:login.php?Message={$Message}");
	}

?>