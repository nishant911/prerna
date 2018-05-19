<?php	
     include 'dbconnection.php';
     $con = OpenCon();

	$center_name = $_POST['center_name'];
	$center_code = $_POST['center_code'];

	$i= $_POST['id'];
	$q = "update admin_center set  center_name='$center_name', center_code='$center_code' where id='$i' ";
	$result = mysqli_query($con, $q);
	mysqli_close($con);
	if($result){
		//echo "success";
		header("Location:admin_center_code.php");
	}
	else{
		header("Location:admin_center_code_edit.php");
	}
	
	?>