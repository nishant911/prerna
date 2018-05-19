<?php
	 include 'dbconnection.php';
     $con = OpenCon();
	 
	 $plan_heading = $_POST['plan_heading'];
	 $created_at = date('Y-m-d H:i:s');
	 
	 $query = "insert into plan_heading (plan_heading, created_at) values ('$plan_heading', '$created_at')";
	 $result = mysqli_query($con, $query);
	 mysqli_close($con);
	 if($result){
		 header("location:admin_product.php");
	 }
	 
	 
?>	 