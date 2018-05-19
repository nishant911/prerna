<?php

 include 'dbconnection.php';
$con = OpenCon();
 
 if(isset($_POST["Import"])){
	 
	$files = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];
	$locator = "websiteupload/".$files;
	
	move_uploaded_file($temp,$locator);

	
		$filename = "websiteupload/".$files;
		//echo $filename;
		//die();
		
			$file = fopen($filename, "r");
			$validFile = false;
			while(! feof($file))
			  {
			  //print_r(fgetcsv($file));
			  //die();
			  
			  //$line=utf8_encode(fgets($f));
				$value = fgetcsv($file);
			
				$arrString = implode(";",$value);	
				$matchValue = 'register_as;organization_name;person_name;specialization;working_hours;address;city;pincode;state;mobile_no;email_id;landline_number;created_at';
				
				//echo str_replace(array("\r", "\n"), " ", $arrString)."<br>";
				//echo str_replace(array("\r", "\n"), " ", $matchValue);
				
				//echo mb_detect_encoding($arrString, "auto");
				//echo mb_detect_encoding($matchValue, "auto");
				
				//echo strcmp(str_replace(array("\r", "\n"), "", $arrString),str_replace(array("\r", "\n"), "", $matchValue));
				
				
				if (trim($arrString) == trim($matchValue)){
					
					$validFile = true;
					//echo implode(" ",$value);	
					//die();
					}
					else{
						//echo $arrString."<br>";
						//echo $matchValue;
						die();
					}
				
				break;
			  }

			fclose($file);
 
	if($_FILES["file"]["size"] > 0 && $validFile == true)
	{
	  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000 , ",")) !== FALSE)
	         {
			
	          $sql = "INSERT into register (register_as, organization_name, person_name, specialization, working_hours, address, city, pincode, state, mobile_no, email_id, landline_number, created_at) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."')";
				   //echo $sql; 
				$result = mysqli_query($con, $sql);
					/* 	if(!isset($result))
						{
						echo "<script type=\"text/javascript\">
						alert(\"Invalid File:Please Upload CSV File.\");
						window.location = \"admin_upload_data.php\"
						  </script>";	
						}
						else {
						 echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"admin_index.php\"
						</script>";  
						}
						*/
					//unset($getData);	
	         }
	
	   fclose($file);
	    echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"admin_index.php\"
						</script>"; 
	}
	else{
		
		echo "<script type=\"text/javascript\">
	alert(\"Invalid File:Please Upload In Proper Format.\");
	window.location = \"admin_upload_data.php\"
	  </script>";
	 
	}
	}	
	mysqli_close($con);
 ?>