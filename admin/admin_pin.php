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

	<script>
			function totalamount(){
			var amount = document.getElementById("total_amount").value;
			
			var amountpercard = document.getElementById("pin_amount");
			var pinamount = amountpercard.options[amountpercard.selectedIndex].value;
			
			//var amountpercard = document.getElementById("pin_amount");
		//	var pinamount = amountpercard[amountpercard.selectedIndex].value;
			
			var result = parseInt(amount) / parseInt(pinamount);
			document.getElementById("total_pin").value = result;
			
			}
			
	</script>	
	
	
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
                      <div class="card-header"><strong>Card Number Creation </strong></div>
                      <div class="card-body card-block">
					  <form name="forms" method="post" enctype="multipart/form-data" action="admin_pin_action.php" id="myForm">
					       <div class="form-group"><label for="company" class=" form-control-label">Center Name</label>
						 <select name="center_name" id="select" class="form-control" onclick="IsEmpty();" required>
                                <option value="">Center Name</option>
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
						 <select name="center_code" id="select" class="form-control" required >
                                <option value="">Center Code</option>
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
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Total Amount</label>
							<input type="text" id="total_amount" name="total_amount" onchange="totalamount()" placeholder="Total Amount" class="form-control"></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Pin Amount</label>
							 <select name="pin_amount" id="pin_amount" onchange="totalamount()" class="form-control" required>
                                <option value="">Select Pin Amount</option>
                                <option value="200">200</option>
								<option value="500">500</option>
                              </select>
                          </div>
                        </div>
						
					    </div>
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Total Pins</label>
							<input type="text" id="total_pin" name="total_pin" placeholder="Total Pins" class="form-control" readonly>
							<input type="hidden" name="status" value="active" />
							</div>
                          </div>
						  <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Current DateTime</label>
							<input type="text" id="date" name="date" class="form-control" required></div>
                          </div>
                        </div>
						<button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i>Create
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
		  <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Card Number Details</strong>
                        </div>
                        <div class="card-body">
				   <div class="scroltable_h">
				   <form name="forms" method="post" enctype="multipart/form-data" action="admin_pin_delete_action.php">
                  <table  class="table table-striped table-bordered">
                    <thead>
                      <tr>
						<th>Center Name</th>
                        <th>Center Code</th>
                        <th>Total Amount</th>
                        <th>Pin Amount</th>
						<th>Total Pins</th>
						<th>Current DateTime</th>
						<th>Select</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
								$con = OpenCon();
								$query = "select * from epin_entry group by center_code";
								$result = mysqli_query($con,$query);
								mysqli_close($con);
								while($row=mysqli_fetch_array($result)){
							?>
                              <tr>
								<td><?php echo $row['center_name']; ?></td>
								<td><?php echo $row['center_code']; ?></td>
								<td><?php echo $row['total_amount']; ?></td>
								<td><?php echo $row['pin_amount']; ?></td>
								<td><?php echo $row['total_pin']; ?></td>
								<td><?php echo $row['date']; ?></td>
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
