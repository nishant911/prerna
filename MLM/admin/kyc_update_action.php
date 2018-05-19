<?php
	include 'dbconnection.php';
    $con = OpenCon();


    $id = $_POST['id'];

	$upload_addhar_front = $_FILES['upload_addhar_front']['name'];
	$temp_addhar_front = $_FILES['upload_addhar_front']['tmp_name'];
	$newname_addhar_front = $id . "_" . "addhar_front" . "_" . $upload_addhar_front;
	$locator_addhar_front = "../pic/".$newname_addhar_front;
	if($upload_addhar_front==""){
		$newname_addhar_front = $_POST['old_image_addhar_front'];
	}
	
	$upload_addhar_back = $_FILES['upload_addhar_back']['name'];
	$temp_addhar_back = $_FILES['upload_addhar_back']['tmp_name'];
	$newname_addhar_back = $id . "_" . "addhar_back" . "_" . $upload_addhar_back;
	$locator_addhar_back = "../pic/".$newname_addhar_back;
	if($upload_addhar_back==""){
		$newname_addhar_back = $_POST['old_image_addhar_back'];
	}
	
	$pan_card = $_FILES['pan_card']['name'];
	$temp_pan = $_FILES['pan_card']['tmp_name'];
	$newname_pan = $id . "_" . "pan_card" . "_" . $pan_card;
	$locator_pan = "../pic/".$newname_pan;
	if($pan_card==""){
		$newname_pan = $_POST['old_image_pan_card'];
	}
	
	
	
	
	
	
	$query = "update bank_details set upload_addhar_front='$newname_addhar_front', upload_addhar_back='$newname_addhar_back', pan_card='$newname_pan'
	where member_id='$id' ";

	$result = mysqli_query($con, $query);
	mysqli_close($con);
	if($upload_addhar_front!="" && $result>0){
		move_uploaded_file($temp_addhar_front,$locator_addhar_front);
	}
	if($upload_addhar_back!="" && $result>0){
		move_uploaded_file($temp_addhar_back,$locator_addhar_back);
	}
	if($pan_card!="" && $result>0){
		move_uploaded_file($temp_pan,$locator_pan);
	}
	
	
	if($result){
		//echo "success";
		//header("Location:kyc_update.php");
		echo '<script> window.location="search_ekyc.php"; </script> ';
	}
	else{
		//echo "failed";
		//header("Location:kyc_update.php");
		echo '<script> window.location="search_ekyc.php"; </script> ';
	}

?>