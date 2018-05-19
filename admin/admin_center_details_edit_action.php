<?php	
    include 'dbconnection.php';
     $con = OpenCon();

	$center_name = $_POST['center_name'];
	$center_code = $_POST['center_code'];
	$block = $_POST['block'];
	$sector_ward = $_POST['sector_ward'];
	$landmark = $_POST['landmark'];
	$postoffice = $_POST['postoffice'];
	$policestation = $_POST['policestation'];
	$city = $_POST['city'];
	$district = $_POST['district'];
	$state = $_POST['state'];
	$pincode = $_POST['pincode'];
	$mobile_number = $_POST['mobile_number'];
	$landline_number = $_POST['landline_number'];
	$center_director_name = $_POST['center_director_name'];
	$qualification = $_POST['qualification'];
	$mobile_number_o = $_POST['mobile_number_o'];
	
	
	$i= $_POST['id'];
	//echo $i;
	$q = "update admin_center_details set  center_name='$center_name', center_code='$center_code', block='$block', sector_ward='$sector_ward', landmark='	$landmark', postoffice='$postoffice', policestation='$policestation', city='$city', district='$district', state='$state', pincode='$pincode', mobile_number='$mobile_number', landline_number='$landline_number', center_director_name='$center_director_name', qualification='$qualification', mobile_number_o='$mobile_number_o' where id='$i' ";
						
	
	$result = mysqli_query($con, $q);
	mysqli_close($con);
	if($result){
		//echo "success";
		header("Location:admin_center_details.php");
	}
	else{
		header("Location:admin_center_details_edit.php");
	}
	
	?>