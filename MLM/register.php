
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/jquery-ui.css"/>
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-css-->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

<!-- //css files -->

  <script type="text/javascript" src="subadmin/plugins/jQuery/jQuery-2.1.3.min.js">  </script>
   
<script type="text/javascript">
$(document).ready(function()
{
  $("#member").change(function()
  {
    var id = $(this).val();
    var dataString = 'id='+ id;
    $.ajax
    ({
      type: "POST",
      url: "register_member_name_ajax.php",
      data: dataString,
      cache: false,
      success: function(html)
      {
        $("#mem_name").html(html);
      } 
    });
  });
  
});
</script>

</head>
<body>
	
	<?php
		if( !empty( $_REQUEST['Message'] ) )
		{
			$msg = $_REQUEST['Message'];
    //echo sprintf( '<p>%s</p>', $_REQUEST['Message'] );
    echo '<script> alert("You Have Created Maximum Number Of Members"); </script>';
		}
	?>

	<h1>Registration Form</h1>
<div class="w3l-main">
	<div class="w3l-from">
		<form  name="forms" method="post" enctype="multipart/form-data"  action="register_action.php">	.
		<div class="w3l-user" id="">
				<label class="head">Sponsor's ID<span class="w3l-star"> * </span></label>
				<input type="text" id="member" name="sponsor_id" placeholder="Sponsor's ID" required="">
			</div>
			<div class="w3l-user" id="mem_name">
				
			</div>
			<div class="w3l-user">
				<label class="head">Name<span class="w3l-star"> * </span></label>
				<input type="text" name="name" placeholder="Name" required="">
			</div>
			<div class="w3l-mail">
				<label class="head">Email<span class="w3l-star"> * </span></label>
				<input type="email" name="email" placeholder="Email" required="">
			</div>
			<div class="gender">
				<label class="head">Gender<span class="w3l-star"> * </span></label>	
					<select class="form-control" required="" name="gender">
						<option>Gender</option>
						<option>Male</option>
						<option>Female</option>
					</select>
			</div>
			<div class="w3l-sym">
					<label class="head">Mobile<span class="w3l-star"> * </span></label>
					<input  type="text" pattern="^\d{10}$"  name="mobile" placeholder="Mobile" required="" maxlength="13">
			</div>
			
			<div class="clear"></div>
			
			<div class="w3l-user">
				<label class="head">Address<span class="w3l-star"> * </span></label>
				<input type="text" name="address" placeholder="Address" required="">
			</div>
			<div class="w3l-num">
					<label class="head">City<span class="w3l-star"> * </span></label>
					<input type="text"  name="city" placeholder="City" required="">
				</div>
           <div class="w3l-sym">
					<label class="head">District<span class="w3l-star"> * </span></label>
					<input type="text"  name="district" placeholder="District" required="">
				</div>
			
			<div class="clear"></div>
			 <div class="w3l-options2 gender">
			<label class="head">State<span class="w3l-star"> * </span></label>	
				<select class="category2" required="" name="state">
						<option value="">Select</option>
													  <option value="ANDAMAN & NICOBAR ISLANDS">ANDAMAN & NICOBAR ISLANDS</option>
													  <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
													  <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
													  <option value="ASSAM">ASSAM</option>
													  <option value="BIHAR">BIHAR</option>
													  <option value="CHANDIGARH">CHANDIGARH</option>
													  <option value="CHHATTISGARH">CHHATTISGARH</option>
													  <option value="DADRA & NAGAR HAVELI">DADRA & NAGAR HAVELI</option>
													  <option value="DAMAN & DIU">DAMAN & DIU</option>
													  <option value="DELHI">DELHI</option>
													  <option value="GOA">GOA</option>
													  <option value="GUJARAT">GUJARAT</option>
													  <option value="HARYANA">HARYANA</option>
													  <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
													  <option value="JAMMU & KASHMIR">JAMMU & KASHMIR</option>
													  <option value="JHARKHAND">JHARKHAND</option>
													  <option value="KARNATAKA">KARNATAKA</option>
													  <option value="KERALA">KERALA</option>
													  <option value="LAKSHADWEEP">LAKSHADWEEP</option>
													  <option value="MADHYA PRADESH">MADHYA PRADESH</option>
													  <option value="MAHARASHTRA">MAHARASHTRA</option>
													  <option value="MANIPUR">MANIPUR</option>
													  <option value="MEGHALAYA">MEGHALAYA</option>
													  <option value="MIZORAM">MIZORAM</option>
													  <option value="NAGALAND">NAGALAND</option>
													  <option value="ORISSA">ORISSA</option>
													  <option value="PONDICHERRY">PONDICHERRY</option>
													  <option value="PUNJAB">PUNJAB</option>
													  <option value="RAJASTHAN">RAJASTHAN</option>
													  <option value="SIKKIM">SIKKIM</option>
													  <option value="TAMIL NADU">TAMIL NADU</option>
													  <option value="TELANGANA">TELANGANA</option>
													  <option value="TRIPURA">TRIPURA</option>
													  <option value="UTTAR PRADESH">UTTAR PRADESH</option>
													  <option value="UTTARAKHAND">UTTARAKHAND</option>
													  <option value="WEST BENGAL">WEST BENGAL</option>  
						
					</select>
			</div>
			<div class="w3l-sym">
					<label class="head">Postal / Zip Code<span class="w3l-star"> * </span></label>
					<input type="text" pattern="^\d{6}$" maxlength="6" name="pincode" placeholder="Postal / Zip Code" required="">
				</div>
			
			<div class="clear"></div>
			
			<div class="w3l-num">
					<label class="head">Country<span class="w3l-star"> * </span></label>
					<input type="text" name="country" placeholder="" required="" value="India">
			</div>
			<div class="clear"></div>
			<div class="w3l-user">
				<label class="head">Epin<span class="w3l-star"> * </span></label>
				<input type="text" name="epin" placeholder="Epin" required="">
			</div>
			<div class="clear"></div>
			
			<div class="w3l-rem">
					
				<div class="btn">
					<input type="submit" name="submit"  value="Submit"/>
				</div>
			</div>
			<div class="clear"></div>
		</form>
	</div>
</div>
	<footer></a>
	</footer>
	<!-- Default-JavaScript --> <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
<!-- //Calendar -->

</body>
</html>