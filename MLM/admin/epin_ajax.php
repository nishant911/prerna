<?php

	session_start();

	if(!isset($_SESSION['member_id']))
{
		
		header("Location:login.php");


	}



function processDrpdown($selectedVal) {
    //echo "Selected value in php ".$selectedVal;
	include 'dbconnection.php';
	$con=openCon();
	if($selectedVal=='Used'){
	$query = "select * from epin_create where epin_status='Used' and member_id='$_SESSION[member_id]'";
						$result = mysqli_query($con, $query);
						
						if (!$result) {
							printf("Error: %s\n", mysqli_error($con));
							exit();
							}
						$i=0;
						while($row = mysqli_fetch_array($result)){
							$i++;
						echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>$row[member_id]</td>";
						echo "<td>$row[epin_value]</td>";
						echo "<td>$row[epin]</td>";
						echo "<td>$row[epin_status]</td>";
						echo "<td>$row[epin_type]</td>";
						echo "<td>$row[product_name]</td>";
						echo "<td>$row[created_date]</td>";
						
						echo "</tr>";
						 
					}
			}
			
		if($selectedVal=='Unused'){
                    	
                    	$qu = "select * from epin_create where epin_status='Unused' and member_id='$_SESSION[member_id]'";

						$resu = mysqli_query($con, $qu);
						
						if (!$resu) {
							printf("Error: %s\n", mysqli_error($con));
							exit();
							}
						
						
						$i=0;
						while($ro = mysqli_fetch_array($resu)){
							$i++;
						echo "<tr>";
						echo "<td> $i </td>";
						echo "<td> $ro[member_id]</td>";
						echo "<td> $ro[epin_value]</td>";
						echo "<td> $ro[epin] </td>";
						echo "<td> $ro[epin_status] </td>";
						echo "<td> $ro[epin_type] </td>";
						echo "<td> $ro[product_name] </td>";
						echo "<td> $ro[created_date] </td>";
					 
						echo "</tr>";
					}
					
		}			


}        

if ($_POST['dropdownValue']){
    //call the function or execute the code
    processDrpdown($_POST['dropdownValue']);

}
//mysqli_close($con);




 ?>