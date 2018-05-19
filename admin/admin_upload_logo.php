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
                        <h1>Organization Logo</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Organization Logo</a></li>
                            
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
                      <div class="card-header"><strong>Organization Logo</strong></div>
					   <div class="card-body card-block">
                      <form name="upload_excel" method="post" enctype="multipart/form-data" action="admin_upload_logo_action.php" id="myForm">
					  <div class="col-6">
                             <div class="form-group "><label for="company" class=" form-control-label">Slider</label>
				                     <select name="slider" id="select" class="form-control col-12" required>
									 <option value="" selected="selected"> Select Slider.... </option>
									 <option value="Slider 1" > Slider 1 </option>
									 <option value="Slider 2" > Slider 2 </option>
                               
                              </select>
					              </div>
                          </div>
                          <div class="col-6">
                           <div class="form-group"><label for="company" class=" form-control-label">Upload Image</label>
							<input type="file" id="company"  name="upload_logo" placeholder="Enter Center Name" class="form-control" required ></div>
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
				  <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Recent Events</strong>
                        </div>
                        <div class="card-body">
				   <div class="scroltable_h">
				   <form name="forms" method="post" enctype="multipart/form-data" action="admin_upload_logo_delete.php" id="myForm">
                  <table  class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>S.no</th>
						 <th>Slider</th>
                        <th>Image</th>
						<th>Select</th>
						
                      </tr>
                    </thead>
                    <tbody>
                    
                              <?php 
								include 'dbconnection.php';
								$con = OpenCon();
								$query = "select * from upload_logo";
								$result = mysqli_query($con,$query);
								mysqli_close($con);
								while($row=mysqli_fetch_array($result)){
								
							?>
                              <tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['slider']; ?></td>
								<td><a href="websiteupload/<?php echo $row['upload_logo']; ?>" target="_blank" /> <?php echo $row['upload_logo']; ?></td>
								<td><input type="checkbox" name="checkbox[]" value="<?php echo $row['id']; ?>"></td>
								</tr> 
								<?php  }   ?>
						
                     
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
