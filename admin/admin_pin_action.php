<?php
	include 'dbconnection.php';
	$con = OpenCon();
	
  $center_name = $_POST['center_name'];
  $center_code = $_POST['center_code'];
  $total_amount = $_POST['total_amount'];
  $pin_amount = $_POST['pin_amount'];
  $total_pin = $_POST['total_pin'];
  $status = $_POST['status'];
  
  $date = $_POST['date'];




	function generatePIN($digit){
		$i = 0; //counter
		$pin = ""; //our default pin is blank.
		while($i < $digit){
			//generate a random number between 0 and 9.
			$pin .= mt_rand(0, 9);
		   //$pin = mt_rand(10000000000, 9999999999999999);
		 
			$i++;
		}
		return $pin;
	}

		for($i=0; $i<$total_pin; $i++){
		$pin = generatePIN(12);
		//echo $pin, '<br>';
			
			$query = "insert into epin_entry (center_name, center_code, total_amount, pin_amount, total_pin, epin, status, date) 
			values ('$center_name', '$center_code', '$total_amount', '$pin_amount', '$total_pin', '$pin', '$status', '$date')";
			
			$result = mysqli_query($con, $query);
			mysqli_close($con);	
		}
		
		if($result){
			//echo "success";
			header("location:admin_pin.php");
		}
		else{
			//echo "failed";
		}
?>