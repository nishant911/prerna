<?php
	include 'dbconnection.php';
    $con = OpenCon();
	
	$username = strtoupper($_POST['username']);
	$password = $_POST['password'];
	
	if($username == 'PHCS19861410' and $password == '19861410'){

	$query = "select * from register where member_id='$username' and pin='$password'";
	$result = mysqli_query($con, $query);
	mysqli_close($con);
	$num = mysqli_num_rows($result);

	}

	if($num == 1){
		session_start();
		$row = mysqli_fetch_array($result);
		$_SESSION['member_id']=$row['member_id'];
		
		//header("location:index.php");
        echo '<script> window.location="index.php"; </script> ';
		//echo "hello";
	}
	else{
		$Message = "Invalid UserName or Password";
		echo '<script> window.location="login.php?Message={$Message}"; </script> ';
		//header("location:login.php?Message={$Message}");
	}
	
?>