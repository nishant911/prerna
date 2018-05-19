<?php
	session_start();

	if(!isset($_SESSION['username']))
{
		
header("Location:admin_login.php");


	}

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Prerna Health Care Service</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
	
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

   <?php include("admin_header.php"); ?>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="admin_logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                   

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Center Details</a></li>
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  

                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header"><strong>Center Details</strong></div>
					  <form name="forms" method="post" enctype="multipart/form-data" action="admin_center_details_action.php" id="myForm">
                      <div class="card-body card-block">
                        <div class="form-group"><label for="company" class=" form-control-label">Center Name</label>
						 <select name="center_name" id="select" class="form-control" required >
                                <option value="">Center Name</option>
                                <?php	include 'dbconnection.php';
										$con = OpenCon();				
										$result = mysqli_query($con, "SELECT id,center_name FROM admin_center");
										mysqli_close($con);
										while ($row = mysqli_fetch_array($result)) {	
										$center_name = $row['center_name'];
													
										echo '<option value="' . $center_name . '"> ' .  $center_name  . ' </option>';  
										} ?>
								
                              </select>
							  </div>
                        <div class="form-group"><label for="company" class=" form-control-label">Center Code</label>
						 <select name="center_code" id="select" class="form-control" required>
                                <option value="">Center Code</option>
                                <?php
										$con = OpenCon();
										$res = mysqli_query($con, "SELECT center_name,center_code FROM admin_center");
										mysqli_close($con);
										while($ro = mysqli_fetch_array($res))	{
										$center_code = $ro['center_code'];
										echo '<option value="' . $center_code . '"> ' .  $center_code  . ' </option>';
										}
													
										?>
                              </select>
					    <br> </div></div>
					    <div class="card-header"><strong>Center Address</strong></div><br> 
						<div class="card-body card-block">
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Block</label>
							<input type="text" id="city" name="block" placeholder="Block" class="form-control"></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Sector/Ward</label>
							<input type="text" id="postal-code" name="sector_ward" placeholder="Sector/Ward" class="form-control"></div>
                          </div>
                        </div>
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Landmark</label>
							<input type="text" id="city" name="landmark" placeholder="Landmark" class="form-control"></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Post Office</label>
							<input type="text" id="postal-code" name="postoffice" placeholder="Post Office" class="form-control"></div>
                          </div>
                        </div>
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Police Station</label>
							<input type="text" id="city" name="policestation" placeholder="Police Station" class="form-control"></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">City</label>
							<input type="text" id="postal-code" name="city" placeholder="City" class="form-control"></div>
                          </div>
                        </div>
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">District</label>
							<input type="text" id="city" name="district" placeholder="District" class="form-control"></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">State</label>
							<select  id="select" name="state" class="form-control">
                              
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
                        </div></div>
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Pincode</label>
							<input type="text" id="city" name="pincode" placeholder="Pincode" class="form-control"></div>
                          </div>
                         
                        </div></div>
                       <div class="card-header"><strong>Other Details</strong></div> 
						<div class="card-body card-block">
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Mobile Number</label>
							<input type="text" id="city" name="mobile_number" placeholder="Mobile Number" class="form-control"></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Landline Number</label>
							<input type="text" id="postal-code" name="landline_number" placeholder="Landline Number" class="form-control"></div>
                          </div>
                        </div>
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Attachment</label>
							<input type="file" id="city" name="attachment" placeholder="Enter your city" class="form-control"></div>
                          </div>
                        </div>
						
                    </div>
                      <div class="card-header"><strong>Center Director Details</strong></div>
                      <div class="card-body card-block">
                        <div class="form-group"><label for="company" class=" form-control-label">Center Director Name</label>
						<input type="text" id="company" name="center_director_name" placeholder="Center Director Name" class="form-control"></div>
                       
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Qualification</label>
							<input type="text" id="city" name="qualification" placeholder="Qualification" class="form-control"></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Mobile Number</label>
							<input type="text" id="postal-code" name="mobile_number_o" placeholder="Mobile Number" class="form-control"></div>
                          </div>
                        </div>
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Addhar Card</label>
							<input type="file" id="city" name="addhar_card"  class="form-control"></div>
                          </div>
						  <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">PAN Card</label>
							<input type="file" id="city" name="pan_card"  class="form-control"></div>
                          </div>
                        </div>
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Cancelled Cheque</label>
							<input type="file" id="city" name="cancel_check"  class="form-control"></div>
                          </div>
						  <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Voter Id Card/DL</label>
							<input type="file" id="city" name="voter_id_dl"  class="form-control"></div>
                          </div>
                        </div>
						  <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
						</form>
                    </div>
                  </div>
                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->
			  <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Center Details</strong>
                        </div>
                        <div class="card-body">
				   <div class="scroltable_h">
				   <form name="forms" method="post" enctype="multipart/form-data" action="admin_center_details_delete_action.php" id="myForm">
                  <table  class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Center Name</th>
                        <th>Center Code</th>
                        <th>Block</th>
						<th>Sector/Ward</th>
						<th>Landmark</th>
						<th>Post Office</th>
						<th>Police Station</th>
						<th>City</th>
						<th>District</th>
						<th>State</th>
						<th>Pincode</th>
						<th>Mobile Number</th>
						<th>Landline Number</th>
						<th>Attachment</th>
						<th>Center Director Name</th>
						<th>Qualification</th>
						<th>Mobile Number</th>
						<th>Addhar Card</th>
						<th>PAN Card</th>
						<th>Cancelled Cheque</th>
						<th>Voter ID Card/DL </th>
						<th>Edit</th>
						<th>Select</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 	$con = OpenCon();
								$query = "select * from admin_center_details";
								$result = mysqli_query($con,$query);
								mysqli_close($con);
								while($row=mysqli_fetch_array($result)){
							?>
                              <tr>
								<td><?php echo $row['center_name']; ?></td>
								<td><?php echo $row['center_code']; ?></td>
								<td><?php echo $row['block']; ?></td>
								<td><?php echo $row['sector_ward']; ?></td>
								<td><?php echo $row['landmark']; ?></td>
								<td><?php echo $row['postoffice']; ?></td>
								<td><?php echo $row['policestation']; ?></td>
								<td><?php echo $row['city']; ?></td>
								<td><?php echo $row['district']; ?></td>
								<td><?php echo $row['state']; ?></td>
								<td><?php echo $row['pincode']; ?></td>
								<td><?php echo $row['mobile_number']; ?></td>
								<td><?php echo $row['landline_number']; ?></td>
								<td> <a href="upload/<?php echo $row['attachment']; ?>" /> <?php echo $row['attachment']; ?></td>
								<td><?php echo $row['center_director_name']; ?></td>
								<td><?php echo $row['qualification']; ?></td>
								<td><?php echo $row['mobile_number_o']; ?></td>
								<td> <a href="upload/<?php echo $row['addhar_card']; ?>" /> <?php echo $row['addhar_card']; ?></td>
								<td> <a href="upload/<?php echo $row['pan_card']; ?>" /> <?php echo $row['pan_card']; ?></td>
								<td> <a href="upload/<?php echo $row['cancel_check']; ?>" /> <?php echo $row['cancel_check']; ?></td>
								<td> <a href="upload/<?php echo $row['voter_id_dl']; ?>" /> <?php echo $row['voter_id_dl']; ?></td>
								<td><a href="admin_center_details_edit.php?id=<?php echo $row['id']; ?>"> Edit </a> </td>
								<td><input type="checkbox" name="checkbox[]" value="<?php echo $row['id']; ?>"></td>
								</tr>
							<?php } ?>
                     
                    </tbody>
                  </table>
				    </div>
					<br>
				  <button type="submit" name="delete" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Delete
                        </button>
				  </form>
					</div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div>


    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
	
	<script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.php5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>
	
	<script>
function myFunction() {
    document.getElementById("myForm").reset();
}
</script>


</body>
</html>
