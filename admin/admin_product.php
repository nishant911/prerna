
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
                        <h1>Products</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Products</a></li>
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  

                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>Products</strong></div>
                      <div class="card-body card-block">
					  
						<form name="forms" method="post" enctype="multipart/form-data" action="admin_product_action.php" id="myForm">
                        <div class="form-group"><label for="company" class=" form-control-label">Plan Heading</label>
                            <input type="text" id="company" name="plan_heading" placeholder="Enter Plan Heading" class="form-control" required ></div>
                       
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Add
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        </form>
						
						</div>
                    </div>
                  </div>
				 <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Plan Heading</strong>
                        </div>
                        <div class="card-body">
						<div class="scroltable">
						
						<form name="forms" method="post" enctype="multipart/form-data" action="admin_plan_heading_delete.php" id="myForm">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">S.no</th>
                                  <th scope="col">Plan Heading</th>
								  <th scope="col">Select</th>
                                
                              </tr>
                          </thead>
                          <tbody>
                             <?php 
								include 'dbconnection.php';
								$con = OpenCon();
								$query = "select * from plan_heading";
								$result = mysqli_query($con,$query);
								mysqli_close($con);
								while($row=mysqli_fetch_array($result)){
								
								
									
							?>
                              <tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['plan_heading']; ?></td>
								<td><input type="checkbox" name="checkbox[]" value="<?php echo $row['id']; ?>"></td>
								</tr> 
								<?php  }   ?>
                      </tbody>
                  </table>
					  </div>
					  <br>
					  
					  <button type="submit" name="delete" value="delete" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Delete
                        </button>
				  </form>
                        </div>
                    </div>
                </div>
               <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header"><strong>Facilities</strong></div>
					  <form name="forms" method="post" enctype="multipart/form-data" action="plan_details.php" id="myForm">
                      <div class="card-body card-block">
                      
                        <div class="form-group "><label for="company" class=" form-control-label">Plan</label>
				                     <select name="plan_heading" id="select" class="form-control col-6" required>
									 <option value="" selected="selected"> Select Plan Heading.... </option>
                                <?php				
										$con = OpenCon();
										$result = mysqli_query($con, "SELECT id,plan_heading FROM plan_heading");
										mysqli_close($con);
										while ($row = mysqli_fetch_array($result)) {	
										$plan_heading = $row['plan_heading'];
													
										echo '<option value="' . $plan_heading . '"> ' .  $plan_heading  . ' </option>';  
										} ?>
                              </select>
					              </div>
                          <div class="row form-group">
                          <div class="col-11">
                            <div class="form-group"><label for="city" class=" form-control-label">Content</label>
                                <input type="text" id="city" name="content" placeholder="Content" class="form-control" required=""></div>
                          </div>
                          
                        </div>
                         
                         <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                       </div>
                     </form>
					  
                  </div>
                </div>


            </div><!-- .animated -->
        </div><!-- .content -->
				 <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Facilities</strong>
                        </div>
                        <div class="card-body">
						<div class="scroltable">
						<form name="forms" method="post" enctype="multipart/form-data" action="admin_plan_details_delete.php" id="myForm">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">S.no</th>
                                  <th scope="col">Plan</th>
                                  <th scope="col">Facilities</th>
								  <th scope="col">Select</th>
                              </tr>
                          </thead>
                          <tbody>
                            
                              <?php 
								$con = OpenCon();
								$query = "select * from plan_details";
								$result = mysqli_query($con,$query);
								mysqli_close($con);
								while($row=mysqli_fetch_array($result)){
								
								
									
							?>
                              <tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['plan_heading']; ?></td>
								<td><?php echo $row['content']; ?></td>
								<td><input type="checkbox" name="checkbox[]" value="<?php echo $row['id']; ?>"></td>
								</tr> 
								<?php  }   ?>
                      </tbody>
                  </table>
					  </div>
					  <br>
					  
					  <button type="submit" name="delete" value="delete" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Delete
                        </button>
				  </form>
                        </div>
						
                    </div>
                </div>  
                 <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header"><strong>Plans</strong></div>
                      <div class="card-body card-block">
					  <form name="forms" method="post" enctype="multipart/form-data" action="admin_product_table_action.php" id="myForm" >
					     
						<div class="row form-group">
						 <div class="col-6">
                             <div class="form-group "><label for="company" class=" form-control-label">Plan</label>
				                     <select name="plan_heading" id="select" class="form-control col-12" required>
									 <option value="" selected="selected"> Select Plan Heading.... </option>
                                <?php		
										$con = OpenCon();
										$result = mysqli_query($con, "SELECT id,plan_heading FROM plan_heading");
										mysqli_close($con);
										while ($row = mysqli_fetch_array($result)) {	
										$plan_heading = $row['plan_heading'];
													
										echo '<option value="' . $plan_heading . '"> ' .  $plan_heading  . ' </option>';  
										} ?>
                              </select>
					              </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Body Checkup Voucher</label>
							<input type="text" id="city" name="body_checkup_voucher" placeholder="Body Checkup Voucher" class="form-control" required ></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label" >Doctor Checkup Voucher</label>
							<input type="text" id="postal-code" name="doctor_checkup_voucher" placeholder="Doctor Checkup Voucher" class="form-control" required ></div>
                          </div>
						  <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Blood Sugar Glacometer</label>
							<input type="text" id="city" name="blood_sugar_glacometer" placeholder="Blood Sugar Glacometer" class="form-control" required ></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label" >Blood Preesure Monitor</label>
							<input type="text" id="postal-code" name="blood_preesure_monitor" placeholder="Blood Preesure Monitor" class="form-control" required ></div>
                          </div>
						  <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Body Massager</label>
							<input type="text" id="city" name="body_massager" placeholder="Body Massager" class="form-control" required ></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label" >Eye Checkup Voucher</label>
							<input type="text" id="postal-code" name="eye_checkup_voucher" placeholder="Eye Checkup Voucher" class="form-control" required ></div>
                          </div>
						  <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Dental Voucher</label>
							<input type="text" id="city" name="dental_voucher" placeholder="Dental Voucher" class="form-control" required ></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label" >Shopping Voucher</label>
							<input type="text" id="postal-code" name="shopping_voucher" placeholder="Shopping Voucher" class="form-control" required ></div>
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
                  <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Facilities</strong>
                        </div>
                        <div class="card-body">
						<div class="scroltable">
						<form name="forms" method="post" enctype="multipart/form-data" action="admin_plan_table_delete.php" id="myForm">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">S.no</th>
                                  <th scope="col">Plan</th>
                                  <th scope="col">Body Checkup Voucher</th>
								  <th scope="col">Doctor Checkup Voucher</th>
								  <th scope="col">Blood Sugar Glacometer</th>
								  <th scope="col">Blood Preesure Monitor</th>
								  <th scope="col">Body Massager</th>
								  <th scope="col">Dental Voucher</th>
								  <th scope="col">Shopping Voucher</th>
								  <th scope="col">Edit</th>
								  <th scope="col">Select</th>
                              </tr>
                          </thead>
                          <tbody>
                            
                              <?php 
								$con = OpenCon();
								$query = "select * from admin_product_table";
								$result = mysqli_query($con,$query);
								mysqli_close($con);
								while($row=mysqli_fetch_array($result)){
								
								
									
							?>
                              <tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['plan_heading']; ?></td>
								<td><?php echo $row['body_checkup_voucher']; ?></td>
								<td><?php echo $row['doctor_checkup_voucher']; ?></td>
								<td><?php echo $row['blood_sugar_glacometer']; ?></td>
								<td><?php echo $row['blood_preesure_monitor']; ?></td>
								<td><?php echo $row['body_massager']; ?></td>
								<td><?php echo $row['eye_checkup_voucher']; ?></td>
								<td><?php echo $row['dental_voucher']; ?></td>
								<td><?php echo $row['shopping_voucher']; ?></td>
								<td><a href="admin_product_table_edit.php?id=<?php echo $row['id']; ?>"> Edit </a> </td>
								<td><input type="checkbox" name="checkbox[]" value="<?php echo $row['id']; ?>"></td>
								</tr> 
								<?php  }   ?>
                      </tbody>
                  </table>
					  </div>
					  <br>
					  
					  <button type="submit" name="delete" value="delete" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Delete
                        </button>
				  </form>
                        </div>
						
                    </div>
                </div>  
                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
	<script>
function myFunction() {
    document.getElementById("myForm").reset();
}
</script>

</body>
</html>
