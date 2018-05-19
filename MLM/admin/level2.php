<?php

if(isset($_GET['member_id']))
    {
    	$member_id=$_GET['member_id'];
		$inputValue=$_GET['inputValue'];

	include 'dbconnection.php';
	$con=openCon();

	if($inputValue==1){
	$query = "select * from register where sponsor_id='$member_id'";
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
						echo "<td>$row[member_name]</td>";
						echo "<td>$row[mobile_number]</td>";
						echo "<td>$row[state]</td>";
						echo "<td>$row[doj]</td>";
						echo "</tr>";
					}

					
					
			}
			
		if($inputValue==2){
						$query_2 = "select * from register where sponsor_id in 
						(
						select member_id FROM register where sponsor_id ='$member_id' and member_id <> '$member_id'
						)";
						$result_2 = mysqli_query($con, $query_2);
						
						if (!$result_2) {
							printf("Error: %s\n", mysqli_error($con));
							exit();
							}
						$i=0;
						while($row_2 = mysqli_fetch_array($result_2)){
							$i++;
						echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>$row_2[member_id]</td>";
						echo "<td>$row_2[member_name]</td>";
						echo "<td>$row_2[mobile_number]</td>";
						echo "<td>$row_2[state]</td>";
						echo "<td>$row_2[doj]</td>";
					 
						echo "</tr>";
					}
					
			}

		if($inputValue==3){
			
                    	$query_three = "select a.id, a.member_name, a.member_id, a.mobile_number, a.state, a.doj from register a  join 
								(
								select member_id from register where sponsor_id in 
									(
								select member_id FROM register where sponsor_id ='$member_id' and member_id <> '$member_id'
								)
								) b on a.sponsor_id = b.member_id";
						

                    	
						$result_three = mysqli_query($con, $query_three);
						
						if (!$result_three) {
							printf("Error: %s\n", mysqli_error($con));
							exit();
							}

						//$rowthree = 'null';
						$i=0;
						while($rowthree = mysqli_fetch_array($result_three)){
							$i++;
						echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>$rowthree[member_name]</td>";
						echo "<td>$rowthree[member_id]</td>";
						echo "<td>$rowthree[mobile_number]</td>";
						echo "<td>$rowthree[state]</td>";
						echo "<td>$rowthree[doj]</td>";
					 
						echo "</tr>";  
					}
					
		}

		if($inputValue==4){
                    	
                    	$query_4 = "SELECT r4.id, r4.member_id, r4.member_name, r4.mobile_number, r4.state, r4.doj from register r4 join 
								(
								select r3.member_id from register r3 join 
									(
								select r2.member_id from register r2 join
									(
								select member_id FROM register where sponsor_id ='$member_id' and member_id <> '$member_id'
									) rr2 on r2.sponsor_id = rr2.member_id
									) rr3 on r3.sponsor_id = rr3.member_id
									) rr4 on r4.sponsor_id = rr4.member_id";

						$result_4 = mysqli_query($con, $query_4);
						
						if (!$result_4) {
							printf("Error: %s\n", mysqli_error($con));
							exit();
							}
						$i=0;
						while($row_4 = mysqli_fetch_array($result_4)){
							$i++;
						echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>$row_4[member_id]</td>";
						echo "<td>$row_4[member_name]</td>";
						echo "<td>$row_4[mobile_number]</td>";
						echo "<td>$row_4[state]</td>";
						echo "<td>$row_4[doj]</td>";
					 
						echo "</tr>";
					}
					
		}	

		if($inputValue==5){
                    	
                    	$query_5 = "SELECT r5.id, r5.member_id, r5.member_name, r5.mobile_number, r5.state, r5.doj from register r5 join 
								(
							SELECT r4.id, r4.member_id, r4.member_name, r4.mobile_number, r4.state, r4.doj from register r4 join 
								(
							select r3.id, r3.member_id, r3.member_name, r3.mobile_number, r3.state, r3.doj from register r3 join 
								(
							select r2.id, r2.member_id, r2.member_name, r2.mobile_number, r2.state, r2.doj from register r2 join
								(
							select id, member_id, member_name, mobile_number, state, doj FROM register where sponsor_id ='$member_id' and member_id <> '$member_id'
								) rr2 on r2.sponsor_id = rr2.member_id
								) rr3 on r3.sponsor_id = rr3.member_id
								) rr4 on r4.sponsor_id = rr4.member_id
   								) rr5 on r5.sponsor_id = rr5.member_id";

						$result_5 = mysqli_query($con, $query_5);
						
						if (!$result_5) {
							printf("Error: %s\n", mysqli_error($con));
							exit();
							}
						$i=0;
						while($row_5 = mysqli_fetch_array($result_5)){
							$i++;
						echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>$row_5[member_id]</td>";
						echo "<td>$row_5[member_name]</td>";
						echo "<td>$row_5[mobile_number]</td>";
						echo "<td>$row_5[state]</td>";
						echo "<td>$row_5[doj]</td>";
					 
						echo "</tr>";
					}
				
		}	
		if($inputValue==6){
                    	
                    	$query_6 = "SELECT r6.id, r6.member_id, r6.member_name, r6.mobile_number, r6.state, r6.doj from register r6 join 
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
										where sponsor_id ='$member_id' and member_id <> '$member_id'
									) rr2 on r2.sponsor_id = rr2.member_id
									) rr3 on r3.sponsor_id = rr3.member_id
									) rr4 on r4.sponsor_id = rr4.member_id
									) rr5 on r5.sponsor_id = rr5.member_id	
									) rr6 on r6.sponsor_id = rr6.member_id";

						$result_6 = mysqli_query($con, $query_6);
						
						if (!$result_6) {
							printf("Error: %s\n", mysqli_error($con));
							exit();
							}
						$i=0;
						while($row_6 = mysqli_fetch_array($result_6)){
							$i++;
						echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>$row_6[member_id]</td>";
						echo "<td>$row_6[member_name]</td>";
						echo "<td>$row_6[mobile_number]</td>";
						echo "<td>$row_6[state]</td>";
						echo "<td>$row_6[doj]</td>";
					 
						echo "</tr>";
					}
					
		}	

		if($inputValue==7){
                    	
                    	$qu = "SELECT r7.id, r7.member_id, r7.member_name, r7.mobile_number, r7.state, r7.doj from register r7 join 
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
										where sponsor_id ='$member_id' and member_id <> '$member_id'
									) rr2 on r2.sponsor_id = rr2.member_id
									) rr3 on r3.sponsor_id = rr3.member_id
									) rr4 on r4.sponsor_id = rr4.member_id
									) rr5 on r5.sponsor_id = rr5.member_id	
									) rr6 on r6.sponsor_id = rr6.member_id
									) rr7 on r7.sponsor_id = rr7.member_id";

						$resu = mysqli_query($con, $qu);
						
						if (!$resu) {
							printf("Error: %s\n", mysqli_error($con));
							exit();
							}
						$i=0;
						while($ro = mysqli_fetch_array($resu)){
							$i++;
						echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>$ro[member_id]</td>";
						echo "<td>$ro[member_name]</td>";
						echo "<td>$ro[mobile_number]</td>";
						echo "<td>$ro[state]</td>";
						echo "<td>$ro[doj]</td>";
					 
						echo "</tr>";
					}
		}
mysqli_close($con);
		}			





?>