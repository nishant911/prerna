<?php
     include 'dbconnection.php';
     $con = OpenCon();

	if(isset($_POST['delete']))
	{
    $checkbox = $_POST['checkbox'];

	for($i=0;$i<count($checkbox);$i++){

	$id = $checkbox[$i];
	$sql = "DELETE FROM event WHERE id='$id'";
	$result = mysqli_query($con, $sql);
	mysqli_close($con);
	}
	}
	header("Location:admin_upload_recent_events.php");
	
?>