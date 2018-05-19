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
					    <?php
						include 'dbconnection.php';
						$con = OpenCon();

						$i = $_GET['id'];
						$query_edit = "select * from admin_center_details where id='$i' ";
						$result_edit = mysqli_query($con,$query_edit);
						mysqli_close($con);
						$row_edit = mysqli_fetch_array($result_edit);
						
						//print_r($row);
	
				?>
					  <form name="forms" method="post" enctype="multipart/form-data" action="admin_center_details_edit_action.php" id="myForm">
                      <div class="card-body card-block">
                        <div class="form-group"><label for="company" class=" form-control-label">Center Name</label>
						 <input type="text" id="company" name="center_name" value="<?php echo $row_edit['center_name']; ?>" placeholder="Enter Username" class="form-control" readonly >
						 <input type="hidden"name="id" value="<?php echo $row_edit['id']; ?>" >
							  </div>
                        <div class="form-group"><label for="company" class=" form-control-label">Center Code</label>
						 <input type="text" id="company" name="center_code" value="<?php echo $row_edit['center_code']; ?>" placeholder="Enter Username" class="form-control" readonly >
					    <br> </div></div>
					    <div class="card-header"><strong>Center Address</strong></div><br> 
						<div class="card-body card-block">
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Block</label>
							<input type="text" id="city" name="block" value="<?php echo $row_edit['block']; ?>" placeholder="Block" class="form-control"></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Sector/Ward</label>
							<input type="text" id="postal-code" name="sector_ward" value="<?php echo $row_edit['sector_ward']; ?>" placeholder="Sector/Ward" class="form-control"></div>
                          </div>
                        </div>
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Landmark</label>
							<input type="text" id="city" name="landmark" value="<?php echo $row_edit['landmark']; ?>" placeholder="Landmark" class="form-control"></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Post Office</label>
							<input type="text" id="postal-code" name="postoffice" value="<?php echo $row_edit['postoffice']; ?>" placeholder="Post Office" class="form-control"></div>
                          </div>
                        </div>
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Police Station</label>
							<input type="text" id="city" name="policestation" value="<?php echo $row_edit['policestation']; ?>" placeholder="Police Station" class="form-control"></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">City</label>
							<input type="text" id="postal-code" name="city" value="<?php echo $row_edit['city']; ?>" placeholder="City" class="form-control"></div>
                          </div>
                        </div>
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">District</label>
							<input type="text" id="city" name="district" value="<?php echo $row_edit['district']; ?>" placeholder="District" class="form-control"></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">State</label>
							<select  id="select" name="state" class="form-control">
                              
								<option value="">Select</option>
								<option value="ANDAMAN & NICOBAR ISLANDS" <?php if($row_edit['state']=='ANDAMAN & NICOBAR ISLANDS'){ echo "selected='selected'"; } ?> >ANDAMAN & NICOBAR ISLANDS</option>
								<option value="ANDHRA PRADESH" <?php if($row_edit['state']=='ANDHRA PRADESH'){ echo "selected='selected'"; } ?> >ANDHRA PRADESH</option>
													  <option value="ARUNACHAL PRADESH" <?php if($row_edit['state']=='ARUNACHAL PRADESH'){ echo "selected='selected'"; } ?> >ARUNACHAL PRADESH</option>
													  <option value="ASSAM" <?php if($row_edit['state']=='ASSAM'){ echo "selected='selected'"; } ?> >ASSAM</option>
													  <option value="BIHAR" <?php if($row_edit['state']=='BIHAR'){ echo "selected='selected'"; } ?> >BIHAR</option>
													  <option value="CHANDIGARH" <?php if($row_edit['state']=='CHANDIGARH'){ echo "selected='selected'"; } ?> >CHANDIGARH</option>
													  <option value="CHHATTISGARH" <?php if($row_edit['state']=='CHHATTISGARH'){ echo "selected='selected'"; } ?> >CHHATTISGARH</option>
													  <option value="DADRA & NAGAR HAVELI" <?php if($row_edit['state']=='DADRA & NAGAR HAVELI'){ echo "selected='selected'"; } ?> >DADRA & NAGAR HAVELI</option>
													  <option value="DAMAN & DIU" <?php if($row_edit['state']=='DAMAN & DIU'){ echo "selected='selected'"; } ?> >DAMAN & DIU</option>
													  <option value="DELHI" <?php if($row_edit['state']=='DELHI'){ echo "selected='selected'"; } ?> >DELHI</option>
													  <option value="GOA" <?php if($row_edit['state']=='GOA'){ echo "selected='selected'"; } ?> >GOA</option>
													  <option value="GUJARAT" <?php if($row_edit['state']=='GUJARAT'){ echo "selected='selected'"; } ?> >GUJARAT</option>
													  <option value="HARYANA" <?php if($row_edit['state']=='HARYANA'){ echo "selected='selected'"; } ?> >HARYANA</option>
													  <option value="HIMACHAL PRADESH" <?php if($row_edit['state']=='HIMACHAL PRADESH'){ echo "selected='selected'"; } ?> >HIMACHAL PRADESH</option>
													  <option value="JAMMU & KASHMIR" <?php if($row_edit['state']=='JAMMU & KASHMIR'){ echo "selected='selected'"; } ?> >JAMMU & KASHMIR</option>
													  <option value="JHARKHAND" <?php if($row_edit['state']=='JHARKHAND'){ echo "selected='selected'"; } ?>>JHARKHAND</option>
													  <option value="KARNATAKA" <?php if($row_edit['state']=='KARNATAKA'){ echo "selected='selected'"; } ?>>KARNATAKA</option>
													  <option value="KERALA" <?php if($row_edit['state']=='KERALA'){ echo "selected='selected'"; } ?>>KERALA</option>
													  <option value="LAKSHADWEEP" <?php if($row_edit['state']=='LAKSHADWEEP'){ echo "selected='selected'"; } ?>>LAKSHADWEEP</option>
													  <option value="MADHYA PRADESH" <?php if($row_edit['state']=='MADHYA PRADESH'){ echo "selected='selected'"; } ?> >MADHYA PRADESH</option>
													  <option value="MAHARASHTRA" <?php if($row_edit['state']=='MAHARASHTRA'){ echo "selected='selected'"; } ?> >MAHARASHTRA</option>
													  <option value="MANIPUR" <?php if($row_edit['state']=='MANIPUR'){ echo "selected='selected'"; } ?> >MANIPUR</option>
													  <option value="MEGHALAYA" <?php if($row_edit['state']=='MEGHALAYA'){ echo "selected='selected'"; } ?> >MEGHALAYA</option>
													  <option value="MIZORAM" <?php if($row_edit['state']=='MIZORAM'){ echo "selected='selected'"; } ?> >MIZORAM</option>
													  <option value="NAGALAND" <?php if($row_edit['state']=='NAGALAND'){ echo "selected='selected'"; } ?> >NAGALAND</option>
													  <option value="ORISSA" <?php if($row_edit['state']=='ORISSA'){ echo "selected='selected'"; } ?> >ORISSA</option>
													  <option value="PONDICHERRY" <?php if($row_edit['state']=='PONDICHERRY'){ echo "selected='selected'"; } ?> >PONDICHERRY</option>
													  <option value="PUNJAB" <?php if($row_edit['state']=='PUNJAB'){ echo "selected='selected'"; } ?> >PUNJAB</option>
													  <option value="RAJASTHAN" <?php if($row_edit['state']=='RAJASTHAN'){ echo "selected='selected'"; } ?> >RAJASTHAN</option>
													  <option value="SIKKIM" <?php if($row_edit['state']=='SIKKIM'){ echo "selected='selected'"; } ?> >SIKKIM</option>
													  <option value="TAMIL NADU" <?php if($row_edit['state']=='TAMIL NADU'){ echo "selected='selected'"; } ?> >TAMIL NADU</option>
													  <option value="TELANGANA" <?php if($row_edit['state']=='TELANGANA'){ echo "selected='selected'"; } ?> >TELANGANA</option>
													  <option value="TRIPURA" <?php if($row_edit['state']=='TRIPURA'){ echo "selected='selected'"; } ?> >TRIPURA</option>
													  <option value="UTTAR PRADESH" <?php if($row_edit['state']=='UTTAR PRADESH'){ echo "selected='selected'"; } ?> >UTTAR PRADESH</option>
													  <option value="UTTARAKHAND" <?php if($row_edit['state']=='UTTARAKHAND'){ echo "selected='selected'"; } ?> >UTTARAKHAND</option>
													  <option value="WEST BENGAL" <?php if($row_edit['state']=='WEST BENGAL'){ echo "selected='selected'"; } ?> >WEST BENGAL</option> 
                              </select>
                          </div>
                        </div></div>
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Pincode</label>
							<input type="text" id="city" name="pincode" placeholder="Pincode" value="<?php echo $row_edit['pincode']; ?>" class="form-control"></div>
                          </div>
                         
                        </div></div>
                       <div class="card-header"><strong>Other Details</strong></div> 
						<div class="card-body card-block">
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Mobile Number</label>
							<input type="text" id="city" name="mobile_number" value="<?php echo $row_edit['mobile_number']; ?>" placeholder="Mobile Number" class="form-control"></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Landline Number</label>
							<input type="text" id="postal-code" name="landline_number" value="<?php echo $row_edit['landline_number']; ?>"  placeholder="Landline Number" class="form-control"></div>
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
						<input type="text" id="company" name="center_director_name" value="<?php echo $row_edit['center_director_name']; ?>" placeholder="Center Director Name" class="form-control"></div>
                       
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Qualification</label>
							<input type="text" id="city" name="qualification" value="<?php echo $row_edit['qualification']; ?>" placeholder="Qualification" class="form-control"></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Mobile Number</label>
							<input type="text" id="postal-code" name="mobile_number_o" value="<?php echo $row_edit['mobile_number_o']; ?>" placeholder="Mobile Number" class="form-control"></div>
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
