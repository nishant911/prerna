<!doctype html>

<?php
	session_start();

	if(!isset($_SESSION['center_code']))
{
		
header("Location:center_login.php");

	}

?>
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

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

           <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="center_index.php"><img src="images/logoMINI.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="admin_index.php"><img src="images/logoMINI.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="center_index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Centers</h3><!-- /.menu-title -->
					
					<li>
                        <a href="center_details.php"> <i class="menu-icon fa fa-laptop"></i>Center Details</a>
                    </li>
					<li>
                        <a href="center_employees.php"> <i class="menu-icon fa fa-users"></i>Center Employee</a>
                    </li>
					<li>
                        <a href="center_bank_employees.php"> <i class="menu-icon fa fa-bank"></i>Employee Bank Details</a>
                    </li>
					<li>
                        <a href="center_pin_track.php"> <i class="menu-icon fa fa-credit-card"></i>Card Number Tracking</a>
                    </li>
					<li>
                        <a href="center_card_view.php"> <i class="menu-icon fa fa-credit-card"></i>Generate Card</a>
                    </li>
					<li>
                        <a href="center_card_details.php"> <i class="menu-icon fa fa-credit-card"></i>Card Details</a>
                    </li>
					<li>
                        <a href="center_employee_wise_card.php"> <i class="menu-icon fa fa-users" ></i>Employee Wise Card</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

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
                        <div class="user-area dropdown float-right">
					     <?php
						include 'dbconnection.php';
						$con = OpenCon();
						$que = "select * from center_register where center_code='$_SESSION[center_code]'";
						$result = mysqli_query($con, $que);
						mysqli_close($con);
						$row = mysqli_fetch_array($result);
						
					?>
					    <h6>Center Code:</h6><p> <?php echo $row['center_code']; ?> </p>
						</div>
						
						<div class="user-area dropdown float-right" style="margin:0px 10px 0px 10px;" >
						<h6>Username:</h6><p><?php echo $row['username']; ?> </p>
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
                            <li><a href="#">Card Details</a></li>
                           
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
                      <div class="card-header"><strong>Company</strong><small> Form</small></div>
                      <div class="card-body card-block">
					  <form name="forms" method="post" enctype="multipart/form-data" action="center_gen_card.php" id="myForm" target="_blank">
					     
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Applicant Name</label>
							<input type="text" id="city" name="name" placeholder="Applicant Name" class="form-control" required></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Card Number</label>
							<input type="text" id="postal-code" name="card_number" placeholder="Card Number" class="form-control" required></div>
                          </div>
                        </div>
						<button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Generate Card
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
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
