<?php
include('dbconnection.php');
	$con = OpenCon();
    if($_POST['id'])
	{
		
	$id = $_POST['id'];
	
	$query = "SELECT member_name FROM register WHERE member_id='$id'";
	$result = mysqli_query($con, $query);  
	$row=mysqli_fetch_array($result);
	mysqli_close($con);
	
  ?>	
   <label> Transfer to Memeber Name :</label>
            
  <input type="text" id="mem_name" value="<?php echo $row['member_name']; ?>" name="transfer_to_member_name" class="form-control" placeholder="" readonly="readonly" />


  <?php  } ?>