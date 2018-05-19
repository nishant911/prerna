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
                            <li><a href="#">About Us</a></li>
                            
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
                      <div class="card-header"><strong>About</strong></div>
					  <form name="forms" method="post" enctype="multipart/form-data" action="aboutus_action.php" id="myForm">
                      <div class="card-body card-block">
                      
                          <div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Heading</label>
                                <input type="text" id="city" name="heading" placeholder="Heading" class="form-control" required=""></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Content</label>
                                <textarea name="content" cols="40" rows="5" class="form-control" ></textarea></div>
                          </div>
                        </div>
                         <div class="row form-group">
                          
                        
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


    </div><!-- /#right-panel -->
			  <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">About</strong>
                        </div>
                        <div class="card-body">
				   <div class="scroltable_h">
				   <form name="forms" method="post" enctype="multipart/form-data" action="admin_aboutus_delete.php" id="myForm">
                  <table  class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>S.no</th>
                        <th>Heading</th>
                        <th>Content</th>
						<th>Select</th>
						
                      </tr>
                    </thead>
                    <tbody>
                    
                               <?php 
								include 'dbconnection.php';
								$con = OpenCon();
								$query = "select * from aboutus";
								$result = mysqli_query($con,$query);
								mysqli_close($con);
								while($row=mysqli_fetch_array($result)){
								
								
								
									
							?>
                              <tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['heading']; ?></td>
								<td><?php echo $row['content']; ?></td>
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


                </div>
            </div><!-- .animated -->
        </div>
		
        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  

                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header"><strong>OUR MISSION</strong></div>
					  <form name="forms" method="post" enctype="multipart/form-data" action="admin_our_mission_action.php" id="myForm">
                      <div class="card-body card-block">
                      
                          <div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Heading</label>
                                <input type="text" id="city" name="heading" placeholder="Heading" class="form-control" required=""></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Content</label>
                                <textarea name="content" cols="40" rows="5" class="form-control" ></textarea></div>
                          </div>
                        </div>
                         <div class="row form-group">
                          
                        
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


    </div><!-- /#right-panel -->
			  <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">OUR MISSION</strong>
                        </div>
                        <div class="card-body">
				   <div class="scroltable_h">
				   <form name="forms" method="post" enctype="multipart/form-data" action="admin_our_mission_delete.php" id="myForm">
                  <table  class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>S.no</th>
                        <th>Heading</th>
                        <th>Content</th>
						<th>Select</th>
						
                      </tr>
                    </thead>
                    <tbody>
                    
                             <?php 
								$con = OpenCon();
								$query_our_mission = "select * from our_mission";
								$result_our_mission = mysqli_query($con,$query_our_mission);
								mysqli_close($con);
								while($row_our_mission=mysqli_fetch_array($result_our_mission)){
								
								
								
									
							?>
                              <tr>
								<td><?php echo $row_our_mission['id']; ?></td>
								<td><?php echo $row_our_mission['heading']; ?></td>
								<td><?php echo $row_our_mission['content']; ?></td>
								<td><input type="checkbox" name="checkbox[]" value="<?php echo $row_our_mission['id']; ?>"></td>
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


                </div>
            </div><!-- .animated -->
        </div>
		        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  

                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header"><strong>OUR VISION</strong></div>
					  <form name="forms" method="post" enctype="multipart/form-data" action="admin_our_vission_action.php" id="myForm">
                      <div class="card-body card-block">
                      
                          <div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Heading</label>
                                <input type="text" id="city" name="heading" placeholder="Heading" class="form-control" required=""></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Content</label>
                                <textarea name="content" cols="40" rows="5" class="form-control" ></textarea></div>
                          </div>
                        </div>
                         <div class="row form-group">
                          
                        
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


    </div><!-- /#right-panel -->
			  <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">OUR VISION</strong>
                        </div>
                        <div class="card-body">
				   <div class="scroltable_h">
				   <form name="forms" method="post" enctype="multipart/form-data" action="admin_our_vission_delete.php" id="myForm">
                  <table  class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>S.no</th>
                        <th>Heading</th>
                        <th>Content</th>
						<th>Select</th>
						
                      </tr>
                    </thead>
                    <tbody>
                    
                              <?php 
								$con = OpenCon();
								$query_our_vission = "select * from our_vission";
								$result_our_vission = mysqli_query($con,$query_our_vission);
								mysqli_close($con);
								while($row_our_vission=mysqli_fetch_array($result_our_vission)){
								
								
								
									
							?>
                              <tr>
								<td><?php echo $row_our_vission['id']; ?></td>
								<td><?php echo $row_our_vission['heading']; ?></td>
								<td><?php echo $row_our_vission['content']; ?></td>
								<td><input type="checkbox" name="checkbox[]" value="<?php echo $row_our_vission['id']; ?>"></td>
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
