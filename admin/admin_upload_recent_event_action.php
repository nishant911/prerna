<?php
     include 'dbconnection.php';
     $con = OpenCon();
	 
	  $slider = $_POST['slider'];
	$event_caption = $_POST['event_caption'];
	
	$upload_event = $_FILES['upload_event']['name'];
	$temp = $_FILES['upload_event']['tmp_name'];
	$locator = "websiteupload/".$upload_event;

	$created_at = date('Y-m-d H:i:s');
	
	$query = "insert into event (slider, event_caption, upload_event, created_at) values ('$slider', '$event_caption', '$upload_event', '$created_at')";
	$result = mysqli_query($con, $query);
	move_uploaded_file($temp,$locator);
	mysqli_close($con);
	if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}
		
	if($result){
		header("location:admin_upload_recent_events.php");
	}
	
?>	 