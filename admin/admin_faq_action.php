<?php
     include 'dbconnection.php';
     $con = OpenCon();
	 
	  
	$question = $_POST['question'];
	$answer = $_POST['answer'];

	$created_at = date('Y-m-d H:i:s');
	
	$query = "insert into faq (question, answer, created_at) values ('$question', '$answer', '$created_at')";
	$result = mysqli_query($con, $query);
	mysqli_close($con);
	if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}
		
	if($result){
		header("location:admin_faq.php");
	}
	
?>	 