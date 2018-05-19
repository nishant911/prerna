<?php
	 include 'dbconnection.php';
     $con = OpenCon();
	 
	$video_gallary = $_POST['video_gallary'];
	$caption = $_POST['caption'];
	
	$created_at = date('Y-m-d H:i:s');
	
	$query = "insert into video_gallary (video_gallary, caption, created_at) values ('$video_gallary', '$caption','$created_at')";
	$result = mysqli_query($con, $query);

	mysqli_close($con);
	if($result){
		header("location:admin_video.php");
	}
	else{
		
	}

	
?>	 