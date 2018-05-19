<?php
	session_start();

	if(!isset($_SESSION['member_id']))
{
		
		header("Location:login.php");


	}

?>
<?php
	include 'dbconnection.php';
    $con = OpenCon();

    $query = "select * from register where member_id='$_SESSION[member_id]'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
 
    $member_id = $row['member_id'];

	$epin_type = $_POST['epin_type'];
	$product_name = $_POST['product_name'];
	$number_of_epin = $_POST['number_of_epin'];
	$epin_value = $_POST['epin_value'];
	$number_of_epin_transfer = $_POST['number_of_epin_transfer'];
	$transfer_member_name = $_POST['transfer_member_name'];
	$transfer_member_id = $_POST['transfer_member_id'];
	$created_at = date('Y-m-d H:i:s');

	$q = "insert into epin (epin_type, member_id,  product_name, number_of_epin, epin_value, number_of_epin_transfer, transfer_member_name, transfer_member_id, created_at) 
	values ('$epin_type', '$member_id', '$product_name', '$number_of_epin', '$epin_value', '$number_of_epin_transfer', '$transfer_member_name', '$transfer_member_id', '$created_at')";
	
	$res = mysqli_query($con, $q);
	mysqli_close($con);
	if($res){
		//echo "Success";
		header("Location:epin_transfer.php");
	}
	else{
		echo "failed";
	}

?>	