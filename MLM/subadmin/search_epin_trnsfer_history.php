
<?php
    include('dbconnection.php');
	$con = OpenCon();

  session_start();

  if(!isset($_SESSION['member_id']))
{
    
        header("Location:../login.php");

  }


   if(isset($_GET['search_start'])){

  
   
        $search_start = mysqli_real_escape_string($con, $_GET['search_start']);
        $search_end = mysqli_real_escape_string($con, $_GET['search_end']);
        $query = "SELECT * FROM  epin_create WHERE member_id = '$_SESSION[member_id]'  and status='Transfered' and created_date between '$search_start' and '$search_end' ";
        $sql=mysqli_query($con, $query);
		mysqli_close($con);
        $count=mysqli_num_rows($sql);
		
        if($count > 0)
        {
            $i=0;
            while($row = mysqli_fetch_array($sql)){
				$i++;									
					
						echo "<tr>";
                        echo "<td> $i</td>";
                        echo "<td> $row[member_id]</td>";
                        echo "<td> $row[member_name]</td>";
                        echo "<td> $row[epin]</td>";
                        echo "<td> $row[epin_status]</td>";
                        echo "<td> $row[epin_type]</td>";
                        echo "<td> $row[transfer_by_id]</td>";
                        echo "<td> $row[status]</td>";
                        echo "</tr>";
                                       
													} 
            }
                else
            {
                echo "<li>No Results</li>";
            }

          }  
    
?>