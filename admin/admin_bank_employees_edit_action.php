<?php	
    include 'dbconnection.php';
     $con = OpenCon();

	$center_name = $_POST['center_name'];
	$center_code = $_POST['center_code'];
	$name = $_POST['name'];
	$employee_id = $_POST['employee_id'];
	$bank_name = $_POST['bank_name'];
	$account_number = $_POST['account_number'];
	$ifsc_code = $_POST['ifsc_code'];
	$branch = $_POST['branch'];
	
	
	
	$i= $_POST['id'];
	//echo $i;
	$q = "update admin_bank_employees set  center_name='$center_name', center_code='$center_code', name='$name', employee_id='$employee_id', bank_name='	$bank_name', account_number='$account_number', ifsc_code='$ifsc_code', branch='$branch' where id='$i' ";
						
	
	$result = mysqli_query($con, $q);
	mysqli_close($con);
	if($result){
		//echo "success";
		header("Location:admin_bank_employees.php");
	}
	else{
		header("Location:admin_bank_employees_edit.php");
	}
	
	?>