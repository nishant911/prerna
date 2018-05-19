<?php	
     include 'dbconnection.php';
     $con = OpenCon();

	$center_name = $_POST['center_name'];
	$center_code = $_POST['center_code'];
	$username = $_POST['username'];
	$id = $_POST['id'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$i= $_POST['id'];
	$q = "update center_register set  center_name='$center_name', center_code='$center_code', username='$username', id='$id', email='$email', password='$password' where id='$i' ";
				
	$result = mysqli_query($con, $q);
	mysqli_close($con);
	if($result){
		//echo "success";
		header("Location:admin_center_register.php");
	}
	else{
		header("Location:admin_center_register_edit.php");
	}
	
	?>