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
    <link rel="shortcut icon" href="">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

        <?php include("admin_header.php"); ?><!-- /#left-panel -->

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
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        
            <!--/.col-->

            <div class="col-lg-3 col-md-6">
                <div class="social-box facebook">
                    <i class="fa fa-users"></i>
                    <ul>
                        <li>
                            <span>Total Employee</span>
                        </li>
                        <li>
                            <span>
								<?php  
									include 'dbconnection.php';
									$con = OpenCon();
									$query = "select * FROM admin_center_employees_register ";
									$result = mysqli_query($con, $query);
									mysqli_close($con);
									$row = mysqli_num_rows($result);
									echo  $row;
								?>
							</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box twitter">
                    <i class="fa fa-money"></i>
                    <ul>
                        <li>
                         
                            <span>Total Donation</span>
                        </li>
                        <li>
                        
                            <span>300</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box linkedin">
                    <i class="fa fa-credit-card"></i>
                    <ul>
                        <li>
                          
                            <span>Total Card Holder</span>
                        </li>
                        <li>
                           
                            <span>
								<?php  
									$con = OpenCon();
									$query = "select * FROM shoppingcart";
									$result = mysqli_query($con, $query);
									mysqli_close($con);
									$row = mysqli_num_rows($result);
									echo  $row;
								?>
							</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">
                    <i class="fa fa-free-code-camp"></i>
                    <ul>
                        <li>
                            <span>Total Camp Organised</span>
                        </li>
                        <li>
                            <span>20</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
			
			
			
            <div class="col-lg-3 col-md-6">
                <div class="social-box facebook">
                    <i class="fa fa-plus"></i>
                    <ul>
                        <li>
                            <span>Total Doctors Register</span>
                        </li>
                        <li>
                            <span>
								<?php  
									$con = OpenCon();
									$query = "select * FROM register where register_as='Doctor'";
									$result = mysqli_query($con, $query);
									mysqli_close($con);
									$row = mysqli_num_rows($result);
									echo  $row;
								?>
							
							</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box twitter">
                    <i class="fa fa-hospital-o"></i>
                    <ul>
						<li>
                            <span>Total Hospital/Clinic Register</span>
                        </li>
                        <li>
                            <span>
								<?php  
									$con = OpenCon();
									$query = "select * FROM register where register_as='Hospital/Clinic'";
									$result = mysqli_query($con, $query);
									mysqli_close($con);
									$row = mysqli_num_rows($result);
									echo  $row;
								?>
							</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box linkedin">
                    <i class="fa fa-medkit"></i>
                    <ul>
                       <li>
                            <span>Total Blood Bank Register</span>
                        </li>
                        <li>
                            <span>
								<?php  
									$con = OpenCon();
									$query = "select * FROM register where register_as='Blood Bank'";
									$result = mysqli_query($con, $query);
									mysqli_close($con);
									$row = mysqli_num_rows($result);
									echo  $row;
								?>
							</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">
                    <i class="fa fa-plus-square"></i>
                    <ul>
                         <li>
                            <span>Total Pharmacy Register</span>
                        </li>
                        <li>
                            <span>
								<?php  
									$con = OpenCon();
									$query = "select * FROM register where register_as='Pharmacy Company'";
									$result = mysqli_query($con, $query);
									mysqli_close($con);
									$row = mysqli_num_rows($result);
									echo  $row;
								?>
							</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
			
			<div class="col-lg-3 col-md-6">
                <div class="social-box facebook">
                    <i class="fa fa-plus-circle"></i>
                    <ul>
                         <li>
                            <span>Total Test Lab Register</span>
                        </li>
                        <li>
                            <span>
								<?php  
									$con = OpenCon();
									$query = "select * FROM register where register_as='Diagnostic/Pathlab'";
									$result = mysqli_query($con, $query);
									mysqli_close($con);
									$row = mysqli_num_rows($result);
									echo  $row;
								?>
							</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


           <!-- <div class="col-lg-3 col-md-6">
                <div class="social-box twitter">
                    <i class="fa fa-gears"></i>
                    <ul>
                         <li>
                            <span>Total Medical Equipment Provider Company Register</span>
                        </li>
                        <li>
                            <span>
								<?php  
									$con = OpenCon();
									$query = "select * FROM register where register_as='Medical Equipment Provider Company'";
									$result = mysqli_query($con, $query);
									mysqli_close($con);
									$row = mysqli_num_rows($result);
									echo  $row;
								?>
							</span>
                        </li>
                    </ul>
                </div>-->
                <!--/social-box-->
            </div><!--/.col-->
         
            </div>

           <div class="col-xl-3 col-lg-6">
                
                <!-- /# card -->
            </div>


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
