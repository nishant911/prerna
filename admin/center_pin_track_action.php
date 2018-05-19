<?php
	session_start();

	if(!isset($_SESSION['center_code']))
{
		
header("Location:center_login.php");

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
                <a class="navbar-brand hidden" href="center_index.php"><img src="images/logoMINI.png" alt="Logo"></a>
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
                        <a href="center_pin_track.php"> <i class="menu-icon fa fa-bank"></i>Card Number Tracking</a>
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
			         <div class="user-area dropdown float-right" style="margin:0px 10px 0px 10px;">
					    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>
							<div class="user-menu dropdown-menu">
										<a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

										<a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

										<a class="nav-link" href="center_logout.php"><i class="fa fa-power -off"></i>Logout</a>
						    </div>
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

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Card Holder Details</strong>
                        </div>
                        <div class="card-body">
				   <div class="scroltable_h">
				   <form name="forms" method="post" enctype="multipart/form-data" action="">
                  <table  class="table table-striped table-bordered">
                    <thead>
                      <tr>
						<th>Center Name</th>
                        <th>Center Code</th>
						<th>Pin Number</th><!--Pin -->
                        <th>Pin Amount</th>
						<th>Status</th>
						<th>Current DateTime</th>
					
                      </tr>
                    </thead>
                    <tbody>
                      <?php 	
								$con = OpenCon();
								$center_name = $_POST['center_name'];
								$center_code = $_POST['center_code'];
								$query = "select * from epin_entry where center_name='$center_name' and center_code='$center_code'";
								$result = mysqli_query($con,$query);
								mysqli_close($con);
								while($row=mysqli_fetch_array($result)){
							?>
                              <tr>
								<td><?php echo $row['center_name']; ?></td>
								<td><?php echo $row['center_code']; ?></td>
								<td><?php echo $row['epin']; ?></td>
								<td><?php echo $row['pin_amount']; ?></td>
								<td><?php echo $row['status']; ?></td>
								<td><?php echo $row['date']; ?></td>
								
								</tr>
							<?php } ?>
                     
                     
                     
                    </tbody>
                  </table>
				  </div>
					<br>
				 
				  </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Card Holder Details</strong>
                        </div>
                        <div class="card-body">
				   <div class="scroltable_h">
				   <form name="forms" method="post" enctype="multipart/form-data" action="">
                  <table  class="table table-striped table-bordered">
                    <thead>
                      <tr>
						<th>Applicant Name</th>
						<th>Card Number</th>
                        <th>DOB</th>
                        <th>Gender</th>
						<th>Profile Pic</th>
                        <th>Center Name</th>
						<th>Center Code</th>
						<th>Mobile Number</th>
						<th>Email Id</th>
						<th>ID Proof</th>
						<th>ID Proof Number</th>
						<th>Address</th>
                        <th>State</th>
                        <th>Town/City/District</th>
                        <th>Pincode</th>
						<th>Country</th>
						<th>Shipping Address</th>
                        <th>Shipping State</th>
                        <th>Shipping Town/City/District</th>
                        <th>Shipping Pincode</th>
					
                      </tr>
                    </thead>
                    <tbody>
                      <?php 	
								$con = OpenCon();
								$query = "select * from shoppingcart where centercode='$_SESSION[center_code]' ";
								$result = mysqli_query($con,$query);
								mysqli_close($con);
								while($row=mysqli_fetch_array($result)){
							?>
                              <tr>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['card_number']; ?></td>
								<td><?php echo $row['dateofbirth']; ?></td>
								<td><?php echo $row['gender']; ?></td>
								<td> <a href="upload/<?php echo $row['upload_pic']; ?>" target="_blank" /> <?php echo $row['upload_pic']; ?></td>
								<td><?php echo $row['centername']; ?></td>
								<td><?php echo $row['centercode']; ?></td>
								<td><?php echo $row['telno']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['idproof']; ?></td>
								<td><?php echo $row['idproofno']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><?php echo $row['state']; ?></td>
								<td><?php echo $row['town']; ?></td>
								<td><?php echo $row['pincode']; ?></td>
								<td><?php echo $row['country']; ?></td>
								<td><?php echo $row['saddress']; ?></td>
								<td><?php echo $row['sstate']; ?></td>
								<td><?php echo $row['stown']; ?></td>
								<td><?php echo $row['spincode']; ?></td>
								
								
								</tr>
							<?php } ?>
                     
                     
                     
                    </tbody>
                  </table>
				  </div>
					<br>
				 
				  </form>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div>

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
