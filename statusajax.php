<link media="screen" charset="utf-8" rel="stylesheet" href="css/base.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/skeleton.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/layout.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/child.css" />

<?php

	include('dbconnection.php');
	$con = OpenCon();
    if(isset($_GET['search_word']))
    {
        $search_word=$_GET['search_word'];
        $search_word_new=mysqli_escape_string($con, $search_word);
        $search_word_fix=str_replace(" ","%",$search_word_new);
		
        $sql=mysqli_query($con, "SELECT * FROM shoppingcart WHERE card_number LIKE '%$search_word_fix%' ");
		  mysqli_close($con);
 
         $row = mysqli_fetch_array($sql);
		 $num = mysqli_num_rows($sql);
		 
					if($num==1){	    
                              echo "<table id='cardtable'>";
							  echo "
                                    <h6 style='font-weight: bold;font-size:24px;margin-bottom:10px;margin-left:60px;'>Customer Information:</h6>
									";
									
                              echo "<tr >
							        <td>
                                    <span style='font-weight: bold; font-size: 16px;'>CUSTOMER IMAGE:</span>
									</td>
									<td>
                                    <img src='admin/upload/$row[upload_pic]' alt='Profile Pic' height='90' width='90'>
									</td>
									</tr>";
									
                              echo  "<tr>
                                    <td><span style='font-weight: bold; font-size: 16px;'>CARD NUMBER:</span></td>
                                    <td style='font-size: 14px;'>$row[card_number]</td>
                                  </tr>";
                              echo "<tr>
                                    <td><span style='font-weight: bold; font-size: 16px;'>CUSTOMER NAME:</span></td>
                                    <td style='font-size: 14px;'>$row[name]</td>
                                  </tr>";
                               echo "<tr>
                                    <td><span style='font-weight: bold; font-size: 16px;'>DATE OF BIRTH:</span></td>
                                    <td style='font-size: 14px;'>$row[dateofbirth]</td>
                                  </tr>";
                               echo  "<tr>
                                    <td><span style='font-weight: bold; font-size: 16px;'>GENDER:</span></td>
                                    <td style='font-size: 14px;'>$row[gender]</td>
                                  </tr>";
                                echo  "<tr>
                                    <td><span style='font-weight: bold; font-size: 16px;'>NATIONALITY:</span></td>
                                    <td style='font-size: 14px;'>$row[country]</td>
                                  </tr>";
                                 echo  "<tr>
                                    <td><span style='font-weight: bold; font-size: 16px;'>DATE OF ISSUE:</span></td>
                                    <td style='font-size: 14px;'>$row[created_at]</td>
                                  </tr>";
                                  
                               echo "</table>";
							 
							   
					}
					else{
						include('dbconnection_mlm.php');
						$con_mlm = OpenConMlm();
						 $sql_mlm = mysqli_query($con_mlm, "SELECT * FROM register WHERE member_id LIKE '%$search_word_fix%' ");
						 $row_mlm = mysqli_fetch_array($sql_mlm);
						 echo "<table id='cardtable'>";
							  echo "
                                    <h6 style='font-weight: bold;font-size:24px;margin-bottom:10px;margin-left:60px;'>Customer Information:</h6>
									";
									
                              echo "<tr >
							        <td>
                                    <span style='font-weight: bold; font-size: 16px;'>CUSTOMER IMAGE:</span>
									</td>
										<td>";
										if($row_mlm['profile_pic'] == ''){
										   echo	"<img src='MLM/images/m1.png' alt='Profile Pic' height='90' width='90'>";
										}
										else{
                                   echo "<img src='MLM/pic/$row_mlm[profile_pic]' alt='Profile Pic' height='90' width='90'>";
										}
									
									echo "</td>
									</tr>";
									
                              echo  "<tr>
                                    <td><span style='font-weight: bold; font-size: 16px;'>CUSTOMER ID:</span></td>
                                    <td style='font-size: 14px;'>$row_mlm[member_id]</td>
                                  </tr>";
                              echo "<tr>
                                    <td><span style='font-weight: bold; font-size: 16px;'>CUSTOMER NAME:</span></td>
                                    <td style='font-size: 14px;'>$row_mlm[member_name]</td>
                                  </tr>";
                               echo "<tr>
                                    <td><span style='font-weight: bold; font-size: 16px;'>DATE OF JOINING:</span></td>
                                    <td style='font-size: 14px;'>$row_mlm[doj]</td>
                                  </tr>";
                               echo  "<tr>
                                    <td><span style='font-weight: bold; font-size: 16px;'>GENDER:</span></td>
                                    <td style='font-size: 14px;'>$row_mlm[gender]</td>
                                  </tr>";
                                echo  "<tr>
                                    <td><span style='font-weight: bold; font-size: 16px;'>NATIONALITY:</span></td>
                                    <td style='font-size: 14px;'>$row_mlm[country]</td>
                                  </tr>";
                                 
                                  
                               echo "</table>";
							   mysqli_close($con_mlm);
						 
					}
	}
							   
?>			   