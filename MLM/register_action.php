<?php

	include 'dbconnection.php';
    $con = OpenCon();

	$sponsor_id = strtoupper($_POST['sponsor_id']);
	$sponsor_name = $_POST['sponsor_name'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$district = $_POST['district'];
	$state = $_POST['state'];
	$pincode = $_POST['pincode'];
	$country = $_POST['country'];
	$epin = strtoupper($_POST['epin']);
	$created_at = date('Y-m-d');
	// echo $sponsor_name;
	// die();
	
$query_restrict_member = "select * from register where sponsor_id='$sponsor_id'";
$result_restrict_member = mysqli_query($con, $query_restrict_member);
$num_restrict_member = mysqli_num_rows($result_restrict_member);

if ($num_restrict_member<5) {	

	$query_status = "select * from epin_create where epin='$epin' and epin_status='Unused' and epin_type='Registration'";
	$result_status = mysqli_query($con, $query_status);

	$row__status = mysqli_fetch_array($result_status);
	
	$epin_status = $row__status['epin'];
	$member_id_epin = $row__status['member_id'];

		
	
				

	if($epin === $epin_status){

		function random_generator($digits){
			srand ((double) microtime() * 10000000);
			//Array of alphabets
			$input = array ("A", "B", "C", "D", "E","F","G","H","I","J","K","L","M","N","O","P","Q",
			"R","S","T","U","V","W","X","Y","Z");

			$random_generator="";// Initialize the string to store random numbers
			for($i=1;$i<$digits+1;$i++){ // Loop the number of times of required digits

			if(rand(0, 1) == 1){// to decide the digit should be numeric or alphabet
			// Add one random alphabet 
			$rand_index = array_rand($input);
			$random_generator .=$input[$rand_index]; // One char is added

			}else{

			// Add one numeric digit between 1 and 10
			$random_generator .=rand(1,9); // one number is added
			} // end of if else

			} // end of for loop 


			return $random_generator;
			} // end of function

			$pin = random_generator(6);
			//echo $pin;

			$query = "insert into register (sponsor_id, sponsor_name, member_name, email, gender, mobile_number, address,  city, district, state, pincode, country,  member_id, pin, doj) 
			values ('$sponsor_id', '$sponsor_name', '$name', '$email', '$gender', '$mobile', '$address', '$city', '$district',  '$state', '$pincode', '$country',  '$epin', '$pin', '$created_at')";
			
			$result = mysqli_query($con, $query);
			
			if($result){
	/*-------------------------------------------------------------Email SEND-------------------------------------------*/			
					$from = "info.prernasociety@gmail.com"; // this is the sender's Email address
				    $subject = "Profile Details";
				    $subject2 = "Copy of Profile Details";
				    $message = "Login Link: " . "http://prernahealthcare.org/MLM/login.php" . "\n" . "Your ID: " . $epin . "\n" . "Name: " . $name . "\n" . "Password: " . $pin . "\n" . "Mobile Number: " . $mobile;
				    $message2 = "Login Link: " . "http://prernahealthcare.org/MLM/login.php" . "\n" . "Your ID: " . $epin . "\n" . "Name: " . $name . "\n" . "Password: " . $pin . "\n" . "Mobile Number: " . $mobile;

				    $headers = "From:" . $from;
				    $headers2 = "From:" . $email;
				    mail($email,$subject,$message,$headers);
				    mail($from,$subject2,$message2,$headers2);
/*-------------------------------------------------------------Message SEND-------------------------------------------*/					
					$username = "PHCSINDIA";
					$password = "prerna@2013";
					$message  = "Website : " . "http://prernahealthcare.org/MLM/login.php" . "\n" . "User ID : " . $epin . "\n" . "Name : " . $name . "\n" . "Password : " . $pin;
					$senderid = "PHCSIN";
											 
					$route = "default";
					//Prepare you post parameters
					$postData = array(
						 "http://www.smsjust.com/sms/user/urlsms.php?" .
													 "username=" . $username . "&" .
													 "pass=" . $password . "&" .
													 "senderid=" . urlencode($senderid) . "&" .
													 "dest_mobileno="  . $mobile . "&" .
													 "message="  . urlencode($message) . "&" .
													 "response="     . "Y"
					);

					//API URL
					$url= "http://www.smsjust.com/sms/user/urlsms.php?" .
													 "username=" . $username . "&" .
													 "pass=" . $password . "&" .
													 "senderid=" . urlencode($senderid) . "&" .
													 "dest_mobileno="  . $mobile . "&" .
													 "message="  . urlencode($message) . "&" .
													 "response="     . "Y";;

					// init the resource
					$ch = curl_init();
					curl_setopt_array($ch, array(
						CURLOPT_URL => $url,
						CURLOPT_RETURNTRANSFER => true,
						CURLOPT_POST => true,
						CURLOPT_POSTFIELDS => $postData
						//,CURLOPT_FOLLOWLOCATION => true
					));


					//Ignore SSL certificate verification
					curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


					//get response
					$output = curl_exec($ch);

					//Print error if any
					if(curl_errno($ch))
					{
						echo 'error:' . curl_error($ch);
					}

					curl_close($ch);

					echo $output;
			}
/*--------------------------------------------------------------------------------------------------------------------*/		   
			/*	if(isset($_POST['submit'])){
				  
				}
				
				if(isset($_POST['submit'])){
				   
					}  */
				

/*-------------------------------Level 1--SILVER--------------------------------*/
					$query_member1 = "select * from register where sponsor_id='$sponsor_id'";
					$result_member1 = mysqli_query($con, $query_member1);
					$num_member1 = mysqli_num_rows($result_member1);

					if($num_member1 == 5){
						$query_level1 = "insert into level_name (member_id, level_name, created_at) values ('$sponsor_id', 'SILVER', '$created_at')";
						$result_level1 = mysqli_query($con, $query_level1);
					}
/*------------------------------------------------------------------------------*/
	

					$queryepin = "update epin_create set epin_status='Used', used_by_id='$epin' where epin='$epin'";
					$resultepin = mysqli_query($con, $queryepin);

				
					$queryp = "select * from epin_create where epin='$epin'";
					$resp = mysqli_query($con, $queryp);
					$rowp = mysqli_fetch_array($resp);
					$epinp = $rowp['epin'];
					$userp = $rowp['member_id'];
					$epin_type = $rowp['epin_type'];
					$product_name = $rowp['product_name'];    
					
					
					$quer_1 = "select * from register where member_id='$sponsor_id'";
					$rer_1 = mysqli_query($con, $quer_1);
					$rowpr_1 = mysqli_fetch_array($rer_1);
					$sopuser_1 = $rowpr_1['sponsor_id'];
					$sopuser_name_1 = $rowpr_1['sponsor_name'];
					

					if($epin == $epinp){

						$qw = "insert into wallet (sponsor_id, sponsor_name, member_id, member_name, credit, debit, remark, epin_type, product_name,  status, created) 
								values ('$sponsor_id', '$sponsor_name', '$epin', '$name', '500', '0', 'Level Income', '$epin_type','$product_name', 'Paid', '$created_at')";
						$rw = mysqli_query($con, $qw);
					
					if($sopuser_1 != ""){
						$qwsopr = "insert into wallet (sponsor_id, sponsor_name, member_id, member_name, credit, debit, remark, epin_type, product_name,  status, created) 
								values ('$sopuser_1', '$sopuser_name_1', '$epin', '$name', '250', '0', 'Level Income', '$epin_type','$product_name', 'Paid', '$created_at')";

						$rwsopr = mysqli_query($con, $qwsopr);
						
					}
/*-----------------------Level 2----------GOLD--------------------- */
					$query_member2 = "select COUNT(member_id) as count_member from register where sponsor_id in 
										(
										select member_id FROM register where sponsor_id ='$sponsor_id' and member_id <> '$sponsor_id'
										)";
					$result_member2 = mysqli_query($con, $query_member2);
					$row_member2 = mysqli_fetch_array($result_member2);

					if($row_member2['count_member'] >= 24){
						$query_level2 = "update level_name set level_name='GOLD' where member_id='$sponsor_id'";
						$result_level2 = mysqli_query($con, $query_level2);

					}
					
				
/*----------------------------------------------------------------*/


		header("location:login.php");
		//print_r($rwsopr);
		}
	
		else{
			echo '<script> alert("Wrong Epin Entered"); </script>';
			header("location:register.php");
			}

/* -------------Repurchase---FMCG Health Product 2500 ------------	*/

					$quer_2500 = "select * from register where member_id='$sopuser_1'";
					$rer_2500 = mysqli_query($con, $quer_2500);
					$rowpr_2500 = mysqli_fetch_array($rer_2500);
					$sopuser_2500 = $rowpr_2500['sponsor_id'];
					

		$query_rep = "select * from epin_create where member_id='$sopuser_2500' and epin_type='Repurchase' and product_name='FMCG Health Product 2500'";

		$result_rep = mysqli_query($con, $query_rep);
		$num_rep = mysqli_num_rows($result_rep);
		$row_rep = mysqli_fetch_array($result_rep);
		$epin_rep = $row_rep['epin_type'];
		$product_rep = $row_rep['product_name'];
			// echo $num_rep;
			// die();
		if($num_rep == 1)
		{

			$query_reperchase = "select * from register where member_id='$sopuser_1'";
			$result_reperchase = mysqli_query($con, $query_reperchase);
			$row_reperchase = mysqli_fetch_array($result_reperchase);
			$sponsor_reperchase = $row_reperchase['sponsor_id'];
			$sponsor_reperchase_name = $row_reperchase['sponsor_name'];
if($sponsor_reperchase != ""){
			$query_wallet = "insert into wallet (sponsor_id, sponsor_name, member_id, member_name, credit, debit, remark, epin_type, product_name,  status, created) 
				values ('$sponsor_reperchase', '$sponsor_reperchase_name','$epin', '$name', '500', '0', 'Level Income', '$epin_rep','$product_rep', 'Paid', '$created_at')";

			$result_wallet = mysqli_query($con, $query_wallet);
}
	/*-----------------Level 3----------------------RUBY----------------- */
	$query_member3 = "select a.id, a.member_name, a.member_id, a.mobile_number, a.state, a.doj from register a join 
								(
								select member_id from register where sponsor_id in 
									(
								select member_id FROM register where sponsor_id ='$sponsor_id' and member_id <> '$sponsor_id'
								)
								) b on a.sponsor_id = b.member_id";
	$result_member3 = mysqli_query($con, $query_member3);
	$num_member3 = mysqli_num_rows($result_member3);

		if($num_member3 >= 124){
		$query_level3 = "update level_name set level_name='RUBY', created_at='$created_at' where member_id='$sponsor_reperchase'";
		$result_level3 = mysqli_query($con, $query_level3);
	}
		/*-----------------------*/

		}

	/*------------------------------------------------------------*/

	/* -------------Repurchase--------FMCG Health Product 5100------------------------*/
					$quer_5100 = "select * from register where member_id='$sopuser_2500'";
					$rer_5100 = mysqli_query($con, $quer_5100);
					$rowpr_5100 = mysqli_fetch_array($rer_5100);
					$sopuser_5100 = $rowpr_5100['sponsor_id'];

					$query_rep_5100 = "select * from epin_create where member_id='$sopuser_5100' and epin_type='Repurchase' and product_name='FMCG Health Product 5100'";

					$result_rep_5100 = mysqli_query($con, $query_rep_5100);
					$num_rep_5100 = mysqli_num_rows($result_rep_5100);
					$row_rep_5100 = mysqli_fetch_array($result_rep_5100);
					$epin_rep_5100 = $row_rep_5100['epin_type'];
					$product_rep_5100 = $row_rep_5100['product_name'];


	if($num_rep_5100 == 1)
		{

			$query_reperchase = "select * from register where member_id='$sopuser'";
			$result_reperchase = mysqli_query($con, $query_reperchase);
			$row_reperchase = mysqli_fetch_array($result_reperchase);
			$sponsor_reperchase = $row_reperchase['sponsor_id'];
			$sponsor_reperchase_name = $row_reperchase['sponsor_name'];

			$query_reperchase_5100 = "select * from register where member_id='$sponsor_reperchase'";
			$result_reperchase_5100 = mysqli_query($con, $query_reperchase_5100);
			$row_reperchase_5100 = mysqli_fetch_array($result_reperchase_5100);
			$sponsor_reperchase_id_5100 = $row_reperchase_5100['sponsor_id'];
			$sponsor_reperchase_name_5100 = $row_reperchase_5100['sponsor_name'];
if($sponsor_reperchase_id_5100 != ""){
			$query_wallet_5100 = "insert into wallet (sponsor_id, sponsor_name, member_id, member_name, credit, debit, remark, epin_type, product_name,  status, created) 
				values ('$sponsor_reperchase_id_5100', '$sponsor_reperchase_name_5100','$epin', '$name', '1000', '0', 'Level Income', '$epin_rep_5100','$product_rep_5100', 'Paid', '$created_at')";

			$result_wallet_5100 = mysqli_query($con, $query_wallet_5100);
}			
		/*----Level 4----DIAMOND---- */
		$query_member4 = "SELECT r4.id, r4.member_id, r4.member_name, r4.mobile_number, r4.state, r4.doj from register r4 join 
								(
								select r3.member_id from register r3 join 
									(
								select r2.member_id from register r2 join
									(
								select member_id FROM register where sponsor_id ='$sponsor_id' and member_id <> '$sponsor_id'
									) rr2 on r2.sponsor_id = rr2.member_id
									) rr3 on r3.sponsor_id = rr3.member_id
									) rr4 on r4.sponsor_id = rr4.member_id ";

	$result_member4 = mysqli_query($con, $query_member4);
	$num_member4 = mysqli_num_rows($result_member4);
	if($num_member4 >= 624){
		$query_level4 ="update level_name set level_name='DIAMOND', created_at='$created_at' where member_id='$sponsor_reperchase_id_5100'";
		$result_level4 = mysqli_query($con, $query_level4);
	}
		/*-----------------------*/

		}

/*-------------------------------------------------------------------------------------------*/

/* -----------------------------------Repurchase-------------FMCG Health Product 10000-------------------------------*/
$quer_10000 = "select * from register where member_id='$sopuser_5100'";
					$rer_10000 = mysqli_query($con, $quer_10000);
					$rowpr_10000 = mysqli_fetch_array($rer_10000);
					$sopuser_10000 = $rowpr_10000['sponsor_id'];
	$query_rep_10000 = "select * from epin_create where member_id='$sopuser_10000' and epin_type='Repurchase' and product_name='FMCG Health Product 10000'";
	$result_rep_10000 = mysqli_query($con, $query_rep_10000);
	$num_rep_10000 = mysqli_num_rows($result_rep_10000);
	$row_rep_10000 = mysqli_fetch_array($result_rep_10000);
	$epin_rep_10000 = $row_rep_10000['epin_type'];
	$product_rep_10000 = $row_rep_10000['product_name'];

	if($num_rep_10000 == 1)
		{

			$query_reperchase = "select * from register where member_id='$sopuser'";
			$result_reperchase = mysqli_query($con, $query_reperchase);
			$row_reperchase = mysqli_fetch_array($result_reperchase);
			$sponsor_reperchase = $row_reperchase['sponsor_id'];
			$sponsor_reperchase_name = $row_reperchase['sponsor_name'];

			$query_reperchase_5100 = "select * from register where member_id='$sponsor_reperchase'";
			$result_reperchase_5100 = mysqli_query($con, $query_reperchase_5100);
			$row_reperchase_5100 = mysqli_fetch_array($result_reperchase_5100);
			$sponsor_reperchase_id_5100 = $row_reperchase_5100['sponsor_id'];
			$sponsor_reperchase_name_5100 = $row_reperchase_5100['sponsor_name'];

			$query_reperchase_10000 = "select * from register where member_id='$sponsor_reperchase_id_5100'";
			$result_reperchase_10000 = mysqli_query($con, $query_reperchase_10000);
			$row_reperchase_10000 = mysqli_fetch_array($result_reperchase_10000);
			$sponsor_reperchase_id_10000 = $row_reperchase_10000['sponsor_id'];
			$sponsor_reperchase_name_10000 = $row_reperchase_10000['sponsor_name'];
if($sponsor_reperchase_id_10000 != ""){
			$query_wallet_10000 = "insert into wallet (sponsor_id, sponsor_name, member_id, member_name, credit, debit, remark, epin_type, product_name,  status, created) 
				values ('$sponsor_reperchase_id_10000', '$sponsor_reperchase_name_10000','$epin', '$name', '1500', '0', 'Level Income', '$epin_rep_10000','$product_rep_10000', 'Paid', '$created_at')";

			$result_wallet_10000 = mysqli_query($con, $query_wallet_10000);
}			
		/*----Level 5----PLATINUM---- */
		$query_member5 = "SELECT r5.id, r5.member_id, r5.member_name, r5.mobile_number, r5.state, r5.doj from register r5 join 
								(
							SELECT r4.id, r4.member_id, r4.member_name, r4.mobile_number, r4.state, r4.doj from register r4 join 
								(
							select r3.id, r3.member_id, r3.member_name, r3.mobile_number, r3.state, r3.doj from register r3 join 
								(
							select r2.id, r2.member_id, r2.member_name, r2.mobile_number, r2.state, r2.doj from register r2 join
								(
							select id, member_id, member_name, mobile_number, state, doj FROM register where sponsor_id ='$_SESSION[member_id]' and member_id <> '$_SESSION[member_id]'
								) rr2 on r2.sponsor_id = rr2.member_id
								) rr3 on r3.sponsor_id = rr3.member_id
								) rr4 on r4.sponsor_id = rr4.member_id
   								) rr5 on r5.sponsor_id = rr5.member_id";

   			$result_member5 = mysqli_query($con, $query_member5);
	$num_member5 = mysqli_num_rows($result_member5);
	if($num_member5 >= 3124){					
		$query_level5 ="update level_name set level_name='PLATINUM', created_at='$created_at' where member_id='$sponsor_reperchase_id_10000'";
		$result_level5 = mysqli_query($con, $query_level5);
	}
		/*-----------------------*/

		}

/*-----------------------------------------------------------------------------------------------------*/


/* ---------------------------------Repurchase-------------FMCG Health Product 15000-------------------------------*/

	$quer_15000 = "select * from register where member_id='$sopuser_10000'";
					$rer_15000 = mysqli_query($con, $quer_15000);
					$rowpr_15000 = mysqli_fetch_array($rer_15000);
					$sopuser_15000 = $rowpr_15000['sponsor_id'];

	$query_rep_15000 = "select * from epin_create where member_id='$sopuser_15000' and epin_type='Repurchase' and product_name='FMCG Health Product 15000'";
	$result_rep_15000 = mysqli_query($con, $query_rep_15000);
	$num_rep_15000 = mysqli_num_rows($result_rep_15000);
	$row_rep_15000 = mysqli_fetch_array($result_rep_15000);
	$epin_rep_15000 = $row_rep_15000['epin_type'];
	$product_rep_15000 = $row_rep_15000['product_name'];

	if($num_rep_15000 == 1)
		{

			$query_reperchase = "select * from register where member_id='$sopuser'";
			$result_reperchase = mysqli_query($con, $query_reperchase);
			$row_reperchase = mysqli_fetch_array($result_reperchase);
			$sponsor_reperchase = $row_reperchase['sponsor_id'];
			$sponsor_reperchase_name = $row_reperchase['sponsor_name'];

			$query_reperchase_5100 = "select * from register where member_id='$sponsor_reperchase'";
			$result_reperchase_5100 = mysqli_query($con, $query_reperchase_5100);
			$row_reperchase_5100 = mysqli_fetch_array($result_reperchase_5100);
			$sponsor_reperchase_id_5100 = $row_reperchase_5100['sponsor_id'];
			$sponsor_reperchase_name_5100 = $row_reperchase_5100['sponsor_name'];

			$query_reperchase_10000 = "select * from register where member_id='$sponsor_reperchase_id_5100'";
			$result_reperchase_10000 = mysqli_query($con, $query_reperchase_10000);
			$row_reperchase_10000 = mysqli_fetch_array($result_reperchase_10000);
			$sponsor_reperchase_id_10000 = $row_reperchase_10000['sponsor_id'];
			$sponsor_reperchase_name_10000 = $row_reperchase_10000['sponsor_name'];

			$query_reperchase_15000 = "select * from register where member_id='$sponsor_reperchase_id_10000'";
			$result_reperchase_15000 = mysqli_query($con, $query_reperchase_15000);
			$row_reperchase_15000 = mysqli_fetch_array($result_reperchase_15000);
			$sponsor_reperchase_id_15000 = $row_reperchase_15000['sponsor_id'];
			$sponsor_reperchase_name_15000 = $row_reperchase_15000['sponsor_name'];

if($sponsor_reperchase_id_15000 != ""){
			$query_wallet_15000 = "insert into wallet (sponsor_id, sponsor_name, member_id, member_name, credit, debit, remark, epin_type, product_name,  status, created) 
				values ('$sponsor_reperchase_id_15000', '$sponsor_reperchase_name_15000','$epin', '$name', '2000', '0', 'Level Income', '$epin_rep_15000','$product_rep_15000', 'Paid', '$created_at')";

			$result_wallet_15000 = mysqli_query($con, $query_wallet_15000);
}			
	/*----------------------------Level 6---------------DIPLOMAT---------------------------- */
	$query_member6 = "SELECT r6.id, r6.member_id, r6.member_name, r6.mobile_number, r6.state, r6.doj from register r6 join 
									(
								SELECT r5.id, r5.member_id, r5.member_name, r5.mobile_number, r5.state, r5.doj from register r5 join 
									(
								SELECT r4.id, r4.member_id, r4.member_name, r4.mobile_number, r4.state, r4.doj from register r4 join 
									(
								select r3.id, r3.member_id, r3.member_name, r3.mobile_number, r3.state, r3.doj from register r3 join 
									(
								select r2.id, r2.member_id, r2.member_name, r2.mobile_number, r2.state, r2.doj from register r2 join
									(
								select id, member_id, member_name, mobile_number, state, doj FROM register 
										where sponsor_id ='$sponsor_id' and member_id <> '$sponsor_id'
									) rr2 on r2.sponsor_id = rr2.member_id
									) rr3 on r3.sponsor_id = rr3.member_id
									) rr4 on r4.sponsor_id = rr4.member_id
									) rr5 on r5.sponsor_id = rr5.member_id	
									) rr6 on r6.sponsor_id = rr6.member_id";

   			$result_member6 = mysqli_query($con, $query_member6);
	$num_member6 = mysqli_num_rows($result_member6);
	if($num_member6 >= 15624){			

		$query_level6 ="update level_name set level_name='DIPLOMAT', created_at='$created_at' where member_id='$sponsor_reperchase_id_15000'";
		$result_level6 = mysqli_query($con, $query_level6);
	}
	/*-----------------------------------------------------*/

		}

/*-----------------------------------------------------------------------------------------------------*/

/* ---------------------------------Repurchase-------------FMCG Health Product 20000-------------------------------*/

		$quer_20000 = "select * from register where member_id='$sopuser_15000'";
					$rer_20000 = mysqli_query($con, $quer_20000);
					$rowpr_20000 = mysqli_fetch_array($rer_20000);
					$sopuser_20000 = $rowpr_20000['sponsor_id'];

	$query_rep_20000 = "select * from epin_create where member_id='$sopuser_20000' and epin_type='Repurchase' and product_name='FMCG Health Product 20000'";
	$result_rep_20000 = mysqli_query($con, $query_rep_20000);
	$num_rep_20000 = mysqli_num_rows($result_rep_20000);
	$row_rep_20000 = mysqli_fetch_array($result_rep_20000);
	$epin_rep_20000 = $row_rep_20000['epin_type'];
	$product_rep_20000 = $row_rep_20000['product_name'];

	if($num_rep_20000 == 1)
		{

			$query_reperchase = "select * from register where member_id='$sopuser'";
			$result_reperchase = mysqli_query($con, $query_reperchase);
			$row_reperchase = mysqli_fetch_array($result_reperchase);
			$sponsor_reperchase = $row_reperchase['sponsor_id'];
			$sponsor_reperchase_name = $row_reperchase['sponsor_name'];

			$query_reperchase_5100 = "select * from register where member_id='$sponsor_reperchase'";
			$result_reperchase_5100 = mysqli_query($con, $query_reperchase_5100);
			$row_reperchase_5100 = mysqli_fetch_array($result_reperchase_5100);
			$sponsor_reperchase_id_5100 = $row_reperchase_5100['sponsor_id'];
			$sponsor_reperchase_name_5100 = $row_reperchase_5100['sponsor_name'];

			$query_reperchase_10000 = "select * from register where member_id='$sponsor_reperchase_id_5100'";
			$result_reperchase_10000 = mysqli_query($con, $query_reperchase_10000);
			$row_reperchase_10000 = mysqli_fetch_array($result_reperchase_10000);
			$sponsor_reperchase_id_10000 = $row_reperchase_10000['sponsor_id'];
			$sponsor_reperchase_name_10000 = $row_reperchase_10000['sponsor_name'];

			$query_reperchase_15000 = "select * from register where member_id='$sponsor_reperchase_id_10000'";
			$result_reperchase_15000 = mysqli_query($con, $query_reperchase_15000);
			$row_reperchase_15000 = mysqli_fetch_array($result_reperchase_15000);
			$sponsor_reperchase_id_15000 = $row_reperchase_15000['sponsor_id'];
			$sponsor_reperchase_name_15000 = $row_reperchase_15000['sponsor_name'];

			$query_reperchase_20000 = "select * from register where member_id='$sponsor_reperchase_id_15000'";
			$result_reperchase_20000 = mysqli_query($con, $query_reperchase_20000);
			$row_reperchase_20000 = mysqli_fetch_array($result_reperchase_20000);
			$sponsor_reperchase_id_20000 = $row_reperchase_20000['sponsor_id'];
			$sponsor_reperchase_name_20000 = $row_reperchase_20000['sponsor_name'];

			if($sponsor_reperchase_id_20000 != ""){
			$query_wallet_buisness = "insert into wallet (sponsor_id, sponsor_name, member_id, member_name, credit, debit, remark, epin_type, product_name,  status, created) 
				values ('$sponsor_reperchase_id_20000', '$sponsor_reperchase_name_20000','$epin', '$name', '3000', '7th Level Income', '$epin_rep_20000','$product_rep_20000', 'Paid', '$created_at')";

			$result_wallet_20000 = mysqli_query($con, $query_wallet_20000);
		}

/*----------------------------Level 6---------------AMBASSADOR---------------------------- */
	$query_member7 = "SELECT r7.id, r7.member_id, r7.member_name, r7.mobile_number, r7.state, r7.doj from register r7 join 
									(
                    			SELECT r6.id, r6.member_id, r6.member_name, r6.mobile_number, r6.state, r6.doj from register r6 join 
									(
								SELECT r5.id, r5.member_id, r5.member_name, r5.mobile_number, r5.state, r5.doj from register r5 join 
									(
								SELECT r4.id, r4.member_id, r4.member_name, r4.mobile_number, r4.state, r4.doj from register r4 join 
									(
								select r3.id, r3.member_id, r3.member_name, r3.mobile_number, r3.state, r3.doj from register r3 join 
									(
								select r2.id, r2.member_id, r2.member_name, r2.mobile_number, r2.state, r2.doj from register r2 join
									(
								select id, member_id, member_name, mobile_number, state, doj FROM register 
										where sponsor_id ='$sponsor_id' and member_id <> '$sponsor_id'
									) rr2 on r2.sponsor_id = rr2.member_id
									) rr3 on r3.sponsor_id = rr3.member_id
									) rr4 on r4.sponsor_id = rr4.member_id
									) rr5 on r5.sponsor_id = rr5.member_id	
									) rr6 on r6.sponsor_id = rr6.member_id
									) rr7 on r7.sponsor_id = rr7.member_id";

   			$result_member7 = mysqli_query($con, $query_member7);
	$num_member7 = mysqli_num_rows($result_member7);
	if($num_member7 >= 78124){			

		$query_level7 ="update level_name set level_name='AMBASSADOR', created_at='$created_at' where member_id='$sponsor_reperchase_id_20000'";
		$result_level7 = mysqli_query($con, $query_level7);
	}
	/*-----------------------------------------------------*/



		}

			



		}

		if($result){
		    echo '<script> window.location="login.php"; </script> ';
		}
		else{
		    echo '<script> window.location="register.php"; </script> ';
		}


}

else{
	$Message = "You Have Created Maximum Number Of Members";
	 echo '<script> window.location="register.php?Message={$Message}"; </script> ';
		
}



?>

	