<?php
     include 'dbconnection.php';
     $con = OpenCon();
	
	$i= $_GET['id'];
	
	
	$query = "DELETE FROM register WHERE id=$i";
	
	$delete = mysqli_query($con,$query);
	mysqli_close($con);
	header("Location:admin_edit_data.php");
	
	
	
	
?>	
