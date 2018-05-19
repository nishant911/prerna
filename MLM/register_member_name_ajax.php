<?php
include('dbconnection.php');
	$con = OpenCon();
    if($_POST['id'])
	{
		
	$id = $_POST['id'];
	
	$query = "SELECT member_name FROM register WHERE member_id='$id'";
	$result = mysqli_query($con, $query);  
	$row=mysqli_fetch_array($result);
	
	
  ?>	
  	<label class="head">Sponsor's Name<span class="w3l-star"> * </span></label>
	<input type="text" name="sponsor_name" value="<?php echo $row['member_name']; ?>" placeholder= "Sponsor's Name" readonly="readonly" >

  


  <?php  } ?>