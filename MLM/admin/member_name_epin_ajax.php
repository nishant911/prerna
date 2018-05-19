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
   <label>Member Name :</label>
       <input type="text" id="member" value="<?php echo $row['member_name']; ?>" name="member_name" class="form-control" placeholder="Enter Member Name" readonly="readonly" />


  <?php  } ?>