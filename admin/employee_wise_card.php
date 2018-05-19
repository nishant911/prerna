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

	
</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

           <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="admin_index.php"><img src="images/logoMINI.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="admin_index.php"><img src="images/logoMINI.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="admin_index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">CENTER</h3><!-- /.menu-title -->
					<li>
                        <a href="admin_center_code.php"> <i class="menu-icon fa fa-align-center"></i>Add Center Code</a>
                   </li>
				   <li>
                        <a href="admin_center_register.php"> <i class="menu-icon fa fa-align-center" ></i>Center Registration</a>
                    </li>
					<li>
                        <a href="admin_center_details.php"> <i class="menu-icon fa fa-laptop"></i>Center Details</a>
                    </li>
					<li>
                        <a href="admin_center_employees.php"> <i class="menu-icon fa fa-users"></i>Center Employee</a>
                    </li>
					<li>
                        <a href="admin_bank_employees.php"> <i class="menu-icon fa fa-bank"></i>Employee Bank Details</a>
                    </li>
					<li>
                        <a href="admin_pin.php"> <i class="menu-icon fa fa-credit-card"></i>Card Number Creation</a>
                    </li>
					<li>
                        <a href="admin_pin_track.php"> <i class="menu-icon fa fa-credit-card"></i>Card Number Tracking</a>
                    </li>
					<li>
                        <a href="admin_card_view.php"> <i class="menu-icon fa fa-credit-card"></i>Generate Card</a>
                    </li>
					<li>
                        <a href="admin_card_details.php"> <i class="menu-icon fa fa-credit-card"></i>Card Details</a>
                    </li>
					<li>
                        <a href="employee_wise_card.php"> <i class="menu-icon fa fa-users" ></i>Employee Wise Card</a>
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
                            <li><a href="#">Employee Wise Card</a></li>
                           
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
                      <div class="card-header"><strong>Employee Wise Card</strong></div>
                      <div class="card-body card-block">
					  <form name="forms" method="post" enctype="multipart/form-data" action="employee_wise_card_action.php" id="myForm">  
					       <div class="form-group"><label for="company" class=" form-control-label">Center Name</label>
						 <select name="center_name" id="center_name" class="form-control" onclick="IsEmpty(); ">
                                <option value="0">Center Name</option>
                                <?php	include 'dbconnection.php';
										$con = OpenCon();	
										$result = mysqli_query($con, "SELECT id,center_name FROM admin_center");
										mysqli_close($con);
										while ($row = mysqli_fetch_array($result)) {	
										$center_name = $row['center_name'];
													
										echo '<option value="' . $center_name . '"> ' .  $center_name  . ' </option>';  
										} ?>
								
                              </select></div>
                        <div class="form-group"><label name="center_code" class=" form-control-label">Center Code</label>
						 <select name="center_code" id="center_code" class="form-control">
                                <option value="0">Center Code</option>
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
					    <br> </div>
						
						<button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i>Search
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
					    </div>
						
						</form> 
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
	

<script type="text/javascript">
  document.getElementById('date').value = Date();
</script>
	<script>
function myFunction() {
    document.getElementById("myForm").reset();
}
</script>
<script type="text/javascript">
    function validateForm()
    {
        var a=document.forms["forms"]["center_name"].value;
        var b=document.forms["forms"]["center_code"].value;
        var c=document.forms["forms"]["amount"].value;
        var d=document.forms["forms"]["pin_amount"].value;
        if (a==null || a=="",b==null || b=="",c==null || c=="",d==null || d=="")
        {
            alert("Please Fill All Required Field");
            return false;
        }
    }
</script>

</body>
</html>
