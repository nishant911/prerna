<?php

	include('dbconnection.php');
	$con = OpenCon();

	$member_id = strtoupper($_POST['member_id']);
	$member_name = $_POST['member_name'];
	$epin_quantity = $_POST['epin_quantity'];
	$epin_value = $_POST['epin_value'];
	$total_amount = $_POST['total_amount'];
	$epin_type = $_POST['epin_type'];
	$product_name = $_POST['product_name'];
	$status = $_POST['status'];
	$epin_status = $_POST['epin_status'];
	
	$created_date = date('Y-m-d');



if($epin_type == 'Registration' and $product_name == 'Registration')
{
						function generatePIN($epin_quantity){
							$i = 0; //counter
							
							$pin = ""; //our default pin is blank.
							while($i < $epin_quantity){
								//generate a random number between 0 and 9.
								$pin .= mt_rand(0, 9);
							   //$pin = mt_rand(10000000000, 9999999999999999);
							 
								$i++;
							}
							return $pin;
						}

							for($i=0; $i<$epin_quantity; $i++)
						{
							$pin = "PHCS".generatePIN(8);
							
							$query = "insert into epin_create (member_id, member_name, epin_quantity, epin_value, epin, epin_status, total_amount, epin_type, product_name, status, created_date) values ('$member_id', '$member_name', '$epin_quantity', '$epin_value', '$pin', '$epin_status', '$total_amount', '$epin_type', '$product_name', '$status', '$created_date')";

							$result = mysqli_query($con, $query);	
						}	
 echo '<script> window.location="epin_create.php"; </script> ';	
}


		

if($epin_type == 'Repurchase' and $product_name == 'FMCG Health Product 2500')
{
	$query_repurchase_check = "select * from epin_create where member_id='$member_id' and epin_type='Repurchase' and product_name='FMCG Health Product 2500'";
		$result_repurchase_check = mysqli_query($con, $query_repurchase_check);
		$num_repurchase_check = mysqli_num_rows($result_repurchase_check);
	
		if($num_repurchase_check == 0)
		{
		
			function generatePIN($epin_quantity){
							$i = 0; //counter
							
							$pin = ""; //our default pin is blank.
							while($i < $epin_quantity){
								//generate a random number between 0 and 9.
								$pin .= mt_rand(0, 9);
							   //$pin = mt_rand(10000000000, 9999999999999999);
							 
								$i++;
							}
							return $pin;
						}

							for($i=0; $i<$epin_quantity; $i++)
						{
							$pin = "PHCS".generatePIN(8);
							
							$query = "insert into epin_create (member_id, member_name, epin_quantity, epin_value, epin, epin_status, total_amount, epin_type, product_name, status, created_date) values ('$member_id', '$member_name', '1', '$epin_value', '$pin', '$epin_status', '$total_amount', '$epin_type', '$product_name', '$status', '$created_date')";

							$result = mysqli_query($con, $query);	
						}	

				$query_three = "select a.id, a.sponsor_id, a.sponsor_name, a.member_name, a.member_id from register a  join 
								(
								select member_id from register where sponsor_id in 
									(
								select member_id FROM register where sponsor_id ='$member_id' and member_id <> '$member_id'
								)
								) b on a.sponsor_id = b.member_id";
				$result_three = mysqli_query($con, $query_three);
				$num_three = mysqli_num_rows($result_three);

				
				for($a=0; $a<$num_three; $a++) {

						$row_three = mysqli_fetch_array($result_three);
						$query_wallet = "insert into wallet (sponsor_id, sponsor_name, member_id, member_name, credit, debit, remark, epin_type, product_name,  status, created) 
						values ('$member_id', '$member_name','$row_three[member_id]', '$row_three[member_name]', '500', '0', 'Repurchase Income', 'Repurchase','FMCG Health Product 2500', 'Paid', '$created_date')";

					$result_wallet = mysqli_query($con, $query_wallet);

				}

		}
		else{
			 echo '<script> alert("Already Repurchased by this ID"); </script>';
			 echo '<script> window.location="epin_create.php"; </script> ';
		}
 echo '<script> window.location="epin_create.php"; </script> ';
}
if($epin_type == 'Repurchase' and $product_name == 'FMCG Health Product 5100')
{
	$query_repurchase_check = "select * from epin_create where member_id='$member_id' and epin_type='Repurchase' and product_name='FMCG Health Product 5100'";
		$result_repurchase_check = mysqli_query($con, $query_repurchase_check);
		$num_repurchase_check = mysqli_num_rows($result_repurchase_check);
	
		if($num_repurchase_check == 0)
		{
		
			function generatePIN($epin_quantity){
							$i = 0; //counter
							
							$pin = ""; //our default pin is blank.
							while($i < $epin_quantity){
								//generate a random number between 0 and 9.
								$pin .= mt_rand(0, 9);
							   //$pin = mt_rand(10000000000, 9999999999999999);
							 
								$i++;
							}
							return $pin;
						}

							for($i=0; $i<$epin_quantity; $i++)
						{
							$pin = "PHCS".generatePIN(8);
							
							$query = "insert into epin_create (member_id, member_name, epin_quantity, epin_value, epin, epin_status, total_amount, epin_type, product_name, status, created_date) values ('$member_id', '$member_name', '1', '$epin_value', '$pin', '$epin_status', '$total_amount', '$epin_type', '$product_name', '$status', '$created_date')";

							$result = mysqli_query($con, $query);	
						}	

				$query_four ="SELECT r4.id, r4.sponsor_id, r4.sponsor_name, r4.member_id, r4.member_name from register r4 join 
								(
								select r3.member_id from register r3 join 
									(
								select r2.member_id from register r2 join
									(
								select member_id FROM register where sponsor_id ='$member_id' and member_id <> '$member_id'
									) rr2 on r2.sponsor_id = rr2.member_id
									) rr3 on r3.sponsor_id = rr3.member_id
									) rr4 on r4.sponsor_id = rr4.member_id";

				$result_four = mysqli_query($con, $query_four);
				$num_four = mysqli_num_rows($result_four);

				
				for($a=0; $a<$num_four; $a++) {

						$row_four = mysqli_fetch_array($result_four);
						$query_wallet = "insert into wallet (sponsor_id, sponsor_name, member_id, member_name, credit, debit, remark, epin_type, product_name,  status, created) 
						values ('$member_id', '$member_name','$row_four[member_id]', '$row_four[member_name]', '1000', '0', 'Repurchase Income', 'Repurchase','FMCG Health Product 5100', 'Paid', '$created_date')";

					$result_wallet = mysqli_query($con, $query_wallet);

				}

		}
		else{
			 echo '<script> alert("Already Repurchased by this ID"); </script>';
			 echo '<script> window.location="epin_create.php"; </script> ';
		}
 echo '<script> window.location="epin_create.php"; </script> ';
}

if($epin_type == 'Repurchase' and $product_name == 'FMCG Health Product 10000')
{
	$query_repurchase_check = "select * from epin_create where member_id='$member_id' and epin_type='Repurchase' and product_name='FMCG Health Product 10000'";
		$result_repurchase_check = mysqli_query($con, $query_repurchase_check);
		$num_repurchase_check = mysqli_num_rows($result_repurchase_check);
	
		if($num_repurchase_check == 0)
		{
		
			function generatePIN($epin_quantity){
							$i = 0; //counter
							
							$pin = ""; //our default pin is blank.
							while($i < $epin_quantity){
								//generate a random number between 0 and 9.
								$pin .= mt_rand(0, 9);
							   //$pin = mt_rand(10000000000, 9999999999999999);
							 
								$i++;
							}
							return $pin;
						}

							for($i=0; $i<$epin_quantity; $i++)
						{
							$pin = "PHCS".generatePIN(8);
							
							$query = "insert into epin_create (member_id, member_name, epin_quantity, epin_value, epin, epin_status, total_amount, epin_type, product_name, status, created_date) values ('$member_id', '$member_name', '1', '$epin_value', '$pin', '$epin_status', '$total_amount', '$epin_type', '$product_name', '$status', '$created_date')";

							$result = mysqli_query($con, $query);	
						}	

				$query_four ="SELECT r5.id, r5.sponsor_id, r5.sponsor_name, r5.member_id, r5.member_name from register r5 join 
								(
							SELECT r4.id, r4.sponsor_id, r4.sponsor_name, r4.member_id, r4.member_name from register r4 join 
								(
							select r3.id, r3.sponsor_id, r3.sponsor_name, r3.member_id, r3.member_name from register r3 join 
								(
							select r2.id, r2.sponsor_id, r2.sponsor_name, r2.member_id, r2.member_name from register r2 join
								(
							select id, sponsor_id, sponsor_name, member_id, member_name FROM register where sponsor_id ='$member_id' and member_id <> '$member_id'
								) rr2 on r2.sponsor_id = rr2.member_id
								) rr3 on r3.sponsor_id = rr3.member_id
								) rr4 on r4.sponsor_id = rr4.member_id
   								) rr5 on r5.sponsor_id = rr5.member_id";

				$result_four = mysqli_query($con, $query_four);
				$num_four = mysqli_num_rows($result_four);

				
				for($a=0; $a<$num_four; $a++) {

						$row_four = mysqli_fetch_array($result_four);
						$query_wallet = "insert into wallet (sponsor_id, sponsor_name, member_id, member_name, credit, debit, remark, epin_type, product_name,  status, created) 
						values ('$member_id', '$member_name', '$row_four[member_id]', '$row_four[member_name]', '1500', '0', 'Repurchase Income', 'Repurchase','FMCG Health Product 10000', 'Paid', '$created_date')";

					$result_wallet = mysqli_query($con, $query_wallet);

				}

		}
		else{
			 echo '<script> alert("Already Repurchased by this ID"); </script>';
			 echo '<script> window.location="epin_create.php"; </script> ';
		}
 echo '<script> window.location="epin_create.php"; </script> ';
}
if($epin_type == 'Repurchase' and $product_name == 'FMCG Health Product 15000')
{
	$query_repurchase_check = "select * from epin_create where member_id='$member_id' and epin_type='Repurchase' and product_name='FMCG Health Product 15000'";
		$result_repurchase_check = mysqli_query($con, $query_repurchase_check);
		$num_repurchase_check = mysqli_num_rows($result_repurchase_check);
	
		if($num_repurchase_check == 0)
		{
		
			function generatePIN($epin_quantity){
							$i = 0; //counter
							
							$pin = ""; //our default pin is blank.
							while($i < $epin_quantity){
								//generate a random number between 0 and 9.
								$pin .= mt_rand(0, 9);
							   //$pin = mt_rand(10000000000, 9999999999999999);
							 
								$i++;
							}
							return $pin;
						}

							for($i=0; $i<$epin_quantity; $i++)
						{
							$pin = "PHCS".generatePIN(8);
							
							$query = "insert into epin_create (member_id, member_name, epin_quantity, epin_value, epin, epin_status, total_amount, epin_type, product_name, status, created_date) values ('$member_id', '$member_name', '1', '$epin_value', '$pin', '$epin_status', '$total_amount', '$epin_type', '$product_name', '$status', '$created_date')";

							$result = mysqli_query($con, $query);	
						}	

			$query_four ="SELECT r6.id, r6.sponsor_id, r6.sponsor_name, r6.member_id, r6.member_name from register r6 
								join 
								(
							SELECT r5.id, r5.sponsor_id, r5.sponsor_name, r5.member_id, r5.member_name from register r5 join 
								(
							SELECT r4.id, r4.sponsor_id, r4.sponsor_name, r4.member_id, r4.member_name from register r4 join 
								(
							select r3.id, r3.sponsor_id, r3.sponsor_name, r3.member_id, r3.member_name from register r3 join 
								(
							select r2.id, r2.sponsor_id, r2.sponsor_name, r2.member_id, r2.member_name from register r2 join
								(
							select id, sponsor_id, sponsor_name, member_id, member_name FROM register 
										where sponsor_id ='$member_id' and member_id <> '$member_id'
									) rr2 on r2.sponsor_id = rr2.member_id
									) rr3 on r3.sponsor_id = rr3.member_id
									) rr4 on r4.sponsor_id = rr4.member_id
									) rr5 on r5.sponsor_id = rr5.member_id	
									) rr6 on r6.sponsor_id = rr6.member_id";

				$result_four = mysqli_query($con, $query_four);
				$num_four = mysqli_num_rows($result_four);

				
				for($a=0; $a<$num_four; $a++) {

						$row_four = mysqli_fetch_array($result_four);
						$query_wallet = "insert into wallet (sponsor_id, sponsor_name, member_id, member_name, credit, debit, remark, epin_type, product_name,  status, created) 
						values ('$member_id', '$member_name', '$row_four[member_id]', '$row_four[member_name]', '2000', '0', 'Repurchase Income', 'Repurchase','FMCG Health Product 15000', 'Paid', '$created_date')";

					$result_wallet = mysqli_query($con, $query_wallet);

				}

		}
		else{
			 echo '<script> alert("Already Repurchased by this ID"); </script>';
			 echo '<script> window.location="epin_create.php"; </script> ';
		}
 echo '<script> window.location="epin_create.php"; </script> ';
}
if($epin_type == 'Repurchase' and $product_name == 'FMCG Health Product 20000')
{
	$query_repurchase_check = "select * from epin_create where member_id='$member_id' and epin_type='Repurchase' and product_name='FMCG Health Product 20000'";
		$result_repurchase_check = mysqli_query($con, $query_repurchase_check);
		$num_repurchase_check = mysqli_num_rows($result_repurchase_check);
	
		if($num_repurchase_check == 0)
		{
		
			function generatePIN($epin_quantity){
							$i = 0; //counter
							
							$pin = ""; //our default pin is blank.
							while($i < $epin_quantity){
								//generate a random number between 0 and 9.
								$pin .= mt_rand(0, 9);
							   //$pin = mt_rand(10000000000, 9999999999999999);
							 
								$i++;
							}
							return $pin;
						}

							for($i=0; $i<$epin_quantity; $i++)
						{
							$pin = "PHCS".generatePIN(8);
							
							$query = "insert into epin_create (member_id, member_name, epin_quantity, epin_value, epin, epin_status, total_amount, epin_type, product_name, status, created_date) values ('$member_id', '$member_name', '1', '$epin_value', '$pin', '$epin_status', '$total_amount', '$epin_type', '$product_name', '$status', '$created_date')";

							$result = mysqli_query($con, $query);	
						}	

			$query_four ="SELECT r7.id, r7.sponsor_id, r7.sponsor_name, r7.member_id, r7.member_name from register r7 
								join 
									(
                    			SELECT r6.id, r6.sponsor_id, r6.sponsor_name, r6.member_id, r6.member_name from register r6 
								join 
								(
							SELECT r5.id, r5.sponsor_id, r5.sponsor_name, r5.member_id, r5.member_name from register r5 join 
								(
							SELECT r4.id, r4.sponsor_id, r4.sponsor_name, r4.member_id, r4.member_name from register r4 join 
								(
							select r3.id, r3.sponsor_id, r3.sponsor_name, r3.member_id, r3.member_name from register r3 join 
								(
							select r2.id, r2.sponsor_id, r2.sponsor_name, r2.member_id, r2.member_name from register r2 join
								(
							select id, sponsor_id, sponsor_name, member_id, member_name FROM register  
										where sponsor_id ='$sponsor_id' and member_id <> '$sponsor_id'
									) rr2 on r2.sponsor_id = rr2.member_id
									) rr3 on r3.sponsor_id = rr3.member_id
									) rr4 on r4.sponsor_id = rr4.member_id
									) rr5 on r5.sponsor_id = rr5.member_id	
									) rr6 on r6.sponsor_id = rr6.member_id
									) rr7 on r7.sponsor_id = rr7.member_id";

				$result_four = mysqli_query($con, $query_four);
				$num_four = mysqli_num_rows($result_four);

				
				for($a=0; $a<$num_four; $a++) {

						$row_four = mysqli_fetch_array($result_four);
						$query_wallet = "insert into wallet (sponsor_id, sponsor_name, member_id, member_name, credit, debit, remark, epin_type, product_name,  status, created) 
						values ('$member_id', '$member_name', '$row_four[member_id]', '$row_four[member_name]', '3000', '0', 'Repurchase Income', 'Repurchase','FMCG Health Product 20000', 'Paid', '$created_date')";

					$result_wallet = mysqli_query($con, $query_wallet);

				}

		}
		else{
			 echo '<script> alert("Already Repurchased by this ID"); </script>';
			 echo '<script> window.location="epin_create.php"; </script> ';
		}
		
		 echo '<script> window.location="epin_create.php"; </script> ';
}

		// if($result){
		// 	echo '<script> window.location="epin_create.php"; </script> ';
		// }
		// else{
		// 	echo '<script> window.location="epin_create.php"; </script> ';
		// }
		// if (!$result) {
		// 	printf("Error: %s\n", mysqli_error($con));
		// 	exit();
		// 	}

	
	
?>