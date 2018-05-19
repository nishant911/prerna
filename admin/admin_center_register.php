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
	<link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
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
                            <li><a href="#">Center Registration</a></li>
                            
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
                      <div class="card-header"><strong>Enter Center Details</strong></div>
                      <div class="card-body card-block">
						<form name="forms" method="post" enctype="multipart/form-data" action="center_register_action.php" id="myForm">
                       <div class="form-group"><label for="company" class=" form-control-label">Center Name</label>
						<select name="center_name" id="select" class="form-control" required>
                                <option value="" selected="selected">Center Name</option>
                                <?php	include 'dbconnection.php';
										$con = OpenCon();
										$result = mysqli_query($con, "SELECT id,center_name FROM admin_center");
										mysqli_close($con);
										while ($row = mysqli_fetch_array($result)) {	
										$center_name = $row['center_name'];			
					
										echo '<option value="'.$center_name.'"> ' .$center_name.'</option>';  
										} ?>
								
                              </select></div>
                        <div class="form-group"><label for="vat" class=" form-control-label">Center Code</label>
						<select name="center_code" id="select" class="form-control" required >
                                <option value="">Center Code</option>
                                <?php
									$con = OpenCon();
									$res = mysqli_query($con, "SELECT id,center_code FROM admin_center" );
									mysqli_close($con);
									while ($ro = mysqli_fetch_array($res)){
										$center_code = $ro['center_code'];
										echo '<option value="'.$center_code.'">'.$center_code.'</option>';
										
									}
								?>
                              </select></div>
						<div class="form-group"><label for="company" class=" form-control-label">Username</label>
						<input type="text" id="company" name="username" placeholder="Enter Username" class="form-control" required ></div>
						
						<div class="form-group"><label for="company" class=" form-control-label">Email</label>
						<input type="email" id="company" name="email" placeholder="Enter Email" class="form-control" required></div>
						
						<div class="form-group"><label for="company" class=" form-control-label">Password</label>
						<input type="password" id="company" name="password" placeholder="Enter Password" class="form-control" required></div>
						
                        
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
				  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>Password Reset</strong></div>
                      <div class="card-body card-block">
						<form name="forms" method="post" enctype="multipart/form-data" action="center_reset_password.php" id="myForm">
                       <div class="form-group"><label for="company" class=" form-control-label">Center Name</label>
						<select name="center_name" id="select" class="form-control" required>
                                <option value="">Center Name</option>
                                <?php	
										$con = OpenCon();				
										$result = mysqli_query($con, "SELECT id,center_name FROM admin_center");
										mysqli_close($con);
										while ($row = mysqli_fetch_array($result)) {	
										$center_name = $row['center_name'];			
					
										echo '<option value="' . $center_name . '"> ' .  $center_name  . ' </option>';  
										} ?>
								
                              </select></div>
                        <div class="form-group"><label for="vat" class=" form-control-label">Center Code</label>
						<select name="center_code" id="select" class="form-control" required>
                                <option value="">Center Code</option>
                                <?php
									$con = OpenCon();
									$res = mysqli_query($con, "SELECT id,center_code FROM admin_center" );
									mysqli_close($con);
									while ($ro = mysqli_fetch_array($res)){
										$center_code = $ro['center_code'];
										echo '<option value=" ' . $center_code . ' "> ' .  $center_code  . ' </option>';
										
									}
								?>
                              </select></div>
						<div class="form-group"><label for="company" class=" form-control-label">Username</label>
						<input type="text" id="company" name="username" placeholder="Enter Username" class="form-control" required ></div>
						
						<div class="form-group"><label for="company" class=" form-control-label">Old Password</label>
						<input type="password" id="company" name="old_password" placeholder="Enter Old Password" class="form-control" required></div>
						
						<div class="form-group"><label for="company" class=" form-control-label">New Password</label>
						<input type="password" id="company" name="new_password" placeholder="Enter New Password" class="form-control" required></div>
						
                        
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Reset Password
                        </button>
                        
						</form>
						</div>
                    </div>
                  </div>
				 <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Center Details</strong>
                        </div>
                        <div class="card-body">
						<div class="scroltable">
						<form name="forms" method="post" enctype="multipart/form-data" action="admin_center_register_delete.php" id="myForm">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">S.no</th>
                                  <th scope="col">Center Name</th>
                                  <th scope="col">Center Code</th>
								  <th scope="col">Username</th>
								   <th scope="col">Email</th>
								   <th scope="col">Password</th>
								   <th scope="col">Edit</th>
								  <th scope="col" >Select</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php 
									$con = OpenCon();
									$query = "select * from center_register";
									$resu = mysqli_query($con,$query);
									mysqli_close($con);
									while($r=mysqli_fetch_array($resu)){
							?>
                              <tr>
								<td><?php echo $r['id']; ?></td>
								<td><?php echo $r['center_name']; ?></td>
								<td><?php echo $r['center_code']; ?></td>
								<td><?php echo $r['username']; ?></td>
								<td><?php echo $r['email']; ?></td>
								<td><?php echo $r['password']; ?></td>
								<td><a href="admin_center_register_edit.php?id=<?php echo $r['id']; ?>"> Edit </a> </td>
								<td><input type="checkbox" name="checkbox[]" value="<?php echo $r['id']; ?>"></td>
								</tr>
							<?php } ?>
						  
                      </tbody>
                  </table> </div>
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
        </div><!-- .content -->
        <!-- /#right-panel -->

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
 <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
	 
</body>
</html>
