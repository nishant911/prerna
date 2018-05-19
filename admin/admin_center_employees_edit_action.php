<?php
	
	include 'dbconnection.php';
    $con = OpenCon();
	 
	$center_name = $_POST['center_name'];
	$center_code = $_POST['center_code'];
	$employee_name = $_POST['employee_name'];
	$date_of_joining = $_POST['date_of_joining'];
	
	$i= $_POST['id'];
	//echo $i;
	$q = "update admin_center_employees set  center_name='$center_name', center_code='$center_code', employee_name='$employee_name', date_of_joining='$date_of_joining' where id='$i' ";
						
	
	$result = mysqli_query($con, $q);
	mysqli_close($con);
	if($result){
		//echo "success";
		header("Location:admin_center_employees.php");
	}
	else{
		header("Location:admin_center_employees_edit.php");
	}

	?>