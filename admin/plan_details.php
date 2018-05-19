<?php
	 include 'dbconnection.php';
     $con = OpenCon();
	 
	 $plan_heading = $_POST['plan_heading'];
	 $content = $_POST['content'];
	 $created_at = date('Y-m-d H:i:s');
	 
	 $query = "insert into plan_details (plan_heading, content, created_at) values ('$plan_heading', '$content', '$created_at')";
	 $result = mysqli_query($con, $query);
	 mysqli_close($con);
	 if($result){
		 header("location:admin_product.php");
	 }
	 
	 
?>	 