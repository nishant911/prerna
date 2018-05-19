<?php
include('dbconnection.php');
	$con = OpenCon();
    if($_POST['id'])
	{
		
	$id = $_POST['id'];
	
	$query = "SELECT DISTINCT(city) FROM register WHERE register_as='Doctor' and state = '$id'";
	$result = mysqli_query($con, $query);  
	mysqli_close($con);
	?>
	<option selected="selected">Select City :</option>
	<?php while($row=mysqli_fetch_array($result))
		{
		?>
		<option value="<?php echo $row['city']; ?>"><?php echo $row['city']; ?></option>
		<?php
	}
}
?>