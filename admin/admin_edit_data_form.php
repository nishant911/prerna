<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prerna Health Care Services</title>
    
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

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
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
                            <li><a href="#">Edit Excel</a></li>
                           
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
                      <div class="card-header"><strong>Excel</strong><small>  Edit</small></div>
                      <div class="card-body card-block">
					   <?php
						include 'dbconnection.php';
						$con = OpenCon();
						$i = $_GET['id'];
						$query_edit = "select * from register where id='$i' ";
						$result_edit = mysqli_query($con,$query_edit);
						mysqli_close($con);
						$row_edit = mysqli_fetch_array($result_edit);
						
						//print_r($row);
	
				?>
					  <form name="forms" method="post" enctype="multipart/form-data" action="admin_edit_data_action.php" id="myForm" >
					     
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Register As</label>
							<input type="text" id="city" value="<?php echo $row_edit['register_as']; ?>" name="register_as" placeholder="" class="form-control" required ></div>
							<input type="hidden" name="id" value="<?php echo $i; ?>" >
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label" >Organization Name</label>
							<input type="text" id="postal-code" value="<?php echo $row_edit['organization_name']; ?>" name="organization_name" placeholder="" class="form-control" required ></div>
                          </div>
						  <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Person Name</label>
							<input type="text" id="city" value="<?php echo $row_edit['person_name']; ?>" name="person_name" placeholder="" class="form-control" required ></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label" >Specialization</label>
							<input type="text" id="postal-code" value="<?php echo $row_edit['specialization']; ?>" name="specialization" placeholder="" class="form-control" required ></div>
                          </div>
						  <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Working Hours</label>
							<input type="text" id="city" value="<?php echo $row_edit['working_hours']; ?>" name="working_hours" placeholder="" class="form-control" required ></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label" >Address</label>
							<input type="text" id="postal-code" value="<?php echo $row_edit['address']; ?>" name="address" placeholder="" class="form-control" required ></div>
                          </div>
						  <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">City</label>
							<input type="text" id="city" value="<?php echo $row_edit['city']; ?>" name="city" placeholder="" class="form-control" required ></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label" >Pincode</label>
							<input type="text" id="postal-code" value="<?php echo $row_edit['pincode']; ?>" name="pincode" placeholder="" class="form-control" required ></div>
                          </div>
						  <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">State</label>
							<input type="text" id="city" value="<?php echo $row_edit['state']; ?>" name="state" placeholder="" class="form-control" required ></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label" >Mobile Number</label>
							<input type="text" id="postal-code" value="<?php echo $row_edit['mobile_no']; ?>" name="mobile_no" placeholder="" class="form-control" required ></div>
                          </div>
						  <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Email ID</label>
							<input type="text" id="city" value="<?php echo $row_edit['email_id']; ?>" name="email_id" placeholder="" class="form-control" required ></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label" >Landline Number</label>
							<input type="text" id="postal-code" value="<?php echo $row_edit['landline_number']; ?>" name="landline_number" placeholder="" class="form-control" required ></div>
                          </div>
                        </div>
						<button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Edit
                        </button>
                        
						</form>
					    </div>
						
                    </div>
                  </div>

                </div>


            </div><!-- .animated -->
        </div><!-- .content -->
		 
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
