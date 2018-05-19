<?php
     include 'dbconnection.php';
     $con = OpenCon();

	if(isset($_POST['delete']))
	{
    $checkbox = $_POST['checkbox'];

	for($i=0;$i<count($checkbox);$i++){

	$id = $checkbox[$i];
	$sql = "DELETE FROM epin_entry WHERE id='$id'";
	$result = mysqli_query($con, $sql);
	mysqli_close($con);
	}
	}
	header("Location:admin_pin_track_action.php");
	
?>